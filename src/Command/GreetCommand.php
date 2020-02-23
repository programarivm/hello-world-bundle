<?php

namespace Programarivm\EasyAclBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GreetCommand extends Command
{
    protected static $defaultName = 'easy-acl:greet';

    protected function configure()
    {
        $this
            ->setDescription('Greet someone.')
            ->setHelp('This command allows you to greet someone...')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'Greeting command',
            '================',
            '',
        ]);

        $output->writeln('Hello there!');

        return 0;
    }
}
