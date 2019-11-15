<?php

namespace Bolt\Extension\Kenny1911\BoltPsysh\Command;

use Bolt\Nut\BaseCommand;
use Bolt\Nut\Style\NutStyle;
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
        if (!class_exists('Psy\Shell')) {
            $io = new NutStyle($input, $output);

            $io->error('Class Psy\Shell doesn\'t exists');
            $io->writeln('You must be instal <info>psy/psysh</info> package of stable version.');
            $io->newLine();
            $io->writeln('<info>Run command:</info> composer require psy/psysh @stable');
            $io->newLine();

            return 1;
        }

        $shell = new Shell();

        $shell->setScopeVariables([
            'app' => $this->app
        ]);

        return $shell->run();
    }
}