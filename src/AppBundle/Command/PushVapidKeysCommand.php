<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Command;

use Minishlink\WebPush\VAPID;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PushVapidKeysCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('push:vapid-keys')
            ->setDescription('it will generate vapid keys')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $keys = VAPID::createVapidKeys();
        $output->writeln('<info>Generated Keys:</info>');
        $output->writeln("<info>PublicKey:</info><error>{$keys['publicKey']}</error>");
        $output->writeln("<info>PrivateKey:</info><error>{$keys['privateKey']}</error>");
    }
}
