<?php

namespace Bolt\Extension\Kenny1911\BoltPsysh\Command;

use Bolt\Nut\BaseCommand;
use Psy\Shell;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PsyshCommand extends BaseCommand
{
    public function configure()
    {
        $this->setName('psysh')
            ->setDescription('Start PsySH for BoltCMS')
        ;
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $shell = new Shell();

        $shell->setScopeVariables([
            'app' => $this->app
        ]);

        $shell->run();
    }
}