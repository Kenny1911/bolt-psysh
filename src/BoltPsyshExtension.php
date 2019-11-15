<?php

namespace Bolt\Extension\Kenny1911\BoltPsysh;

use Bolt\Extension\Kenny1911\BoltPsysh\Command\PsyshCommand;
use Bolt\Extension\SimpleExtension;
use Pimple as Container;

/**
 * ExtensionName extension class.
 *
 * @author Your Name <you@example.com>
 */
class BoltPsyshExtension extends SimpleExtension
{
    protected function registerNutCommands(Container $container)
    {
        return [
            new PsyshCommand($container)
        ];
    }
}
