<?php

use FOS\HttpCache\SymfonyCache\CacheInvalidation;
use FOS\HttpCache\SymfonyCache\EventDispatchingHttpCache;
use Symfony\Bundle\FrameworkBundle\HttpCache\HttpCache;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Terminal42\HeaderReplay\SymfonyCache\HeaderReplaySubscriber;

class AppCache extends HttpCache implements CacheInvalidation
{
    use EventDispatchingHttpCache;

    public function __construct(HttpKernelInterface $kernel, $cacheDir = null)
    {
        parent::__construct($kernel, $cacheDir);
        $this->addSubscriber(new HeaderReplaySubscriber());
    }

    /**
     * {@inheritdoc}
     */
    public function fetch(Request $request, $catch = false)
    {
        return parent::fetch($request, $catch);
    }
}
