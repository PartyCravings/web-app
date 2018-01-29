<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Utils;

use Psr\Http\Message\ServerRequestInterface;
use React\Http\Response;
use Symfony\Component\HttpFoundation\Request;

class Server
{
    public $kernel;
    public $session;
    public $container;
    public $application;

    public function __construct()
    {
        $this->kernel = new \AppKernel('dev', false);
        Request::enableHttpMethodParameterOverride();
        Request::setTrustedProxies(
        // the IP address (or range) of your proxy
            ['127.0.0.1', '10.0.0.0/8'],
            // trust *all* "X-Forwarded-*" headers
            Request::HEADER_X_FORWARDED_ALL
            // or, if your proxy instead uses the "Forwarded" header
            // Request::HEADER_FORWARDED
            // or, if you're using AWS ELB
            // Request::HEADER_X_FORWARDED_AWS_ELB
        );

        $this->application = new \AppCache($this->kernel);
    }

    public function bootstrap($kernel): void
    {
        ServerUtils::bindAndCall(function () use ($kernel) {
            // init bundles
            $kernel->initializeBundles();
            // init container
            $kernel->initializeContainer();
        }, $kernel);

        //now we can modify the container
        $this->container = $kernel->getContainer();
        $nativeStorage = new StrongerNativeSessionStorage(
            $this->container->getParameter('session.storage.options'),
            $this->container->has('session.handler') ? $this->container->get('session.handler') : null,
            $this->container->get('session.storage.metadata_bag')
        );
        $this->container->set('session.storage.native', $nativeStorage);

        ServerUtils::bindAndCall(function () use ($kernel) {
            foreach ($kernel->getBundles() as $bundle) {
                $bundle->setContainer($kernel->container);
                $bundle->boot();
            }
            $kernel->booted = true;
        }, $kernel);

        $this->session = $this->container->has('session') ? $this->container->get('session') : null;
    }

    public function getCallBack(&$kernel): \Closure
    {
        return function (ServerRequestInterface &$request) use ($kernel): Response {
            $_SERVER = array_merge($_SERVER, $request->getServerParams());
            $_SERVER['REQUEST_METHOD'] = $request->getMethod();
            $_SERVER['REQUEST_TIME'] = (int) microtime(true);
            $_SERVER['REQUEST_TIME_FLOAT'] = microtime(true);
            $_SERVER['QUERY_STRING'] = $request->getUri()->getQuery();
            foreach ($request->getHeaders() as $name => $valueArr) {
                $_SERVER['HTTP_'.mb_strtoupper(str_replace('-', '_', $name))] = $request->getHeaderLine($name);
            }
            $_SERVER['SERVER_NAME'] = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
            $_SERVER['REQUEST_URI'] = $request->getUri()->getPath();
            $_SERVER['DOCUMENT_ROOT'] = isset($_ENV['DOCUMENT_ROOT']) ? $_ENV['DOCUMENT_ROOT'] : getcwd();
            $_SERVER['SCRIPT_NAME'] = isset($_ENV['SCRIPT_NAME']) ? $_ENV['SCRIPT_NAME'] : 'index.php';
            $_SERVER['SCRIPT_FILENAME'] = rtrim($_SERVER['DOCUMENT_ROOT'], '/').'/'.$_SERVER['SCRIPT_NAME'];

            $_POST = (array) $request->getParsedBody();
            $_GET = $request->getQueryParams();
            $_FILES = $request->getUploadedFiles();
            $_COOKIE = $request->getCookieParams();

            $sfRequest = Request::createFromGlobals();
            $sfRequest->setMethod($request->getMethod());
            $sfRequest->headers->replace($request->getHeaders());

            // get contents
            ob_start();
            $sfResponse = $kernel->handle($sfRequest);
            $sfResponse->sendContent();
            $content = ob_get_clean();

            $headers = $sfResponse->headers->allPreserveCase();
            $headers['X-Powered-By'] = 'Terminator/Genisys';
            $kernel->terminate($sfRequest, $sfResponse);

            return new Response(
                $sfResponse->getStatusCode(),
                $headers,
                $content
            );
        };
    }
}
