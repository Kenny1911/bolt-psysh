<?php

namespace Bolt\Extension\Kenny1911\BoltPsysh\Tests;

use Bolt\Tests\BoltUnitTest;
use Bolt\Extension\Kenny1911\BoltPsysh\BoltPsyshExtension;

/**
 * ExtensionName testing class.
 *
 * @author Your Name <you@example.com>
 */
class BoltPsyshExtensionTest extends BoltUnitTest
{
    /**
     * Ensure that the ExtensionName extension loads correctly.
     */
    public function testExtensionBasics()
    {
        $extension = new BoltPsyshExtension();

        $name = $extension->getName();
        $this->assertSame($name, 'BoltPsysh');
        $this->assertInstanceOf('\Bolt\Extension\ExtensionInterface', $extension);
    }

    public function testExtensionComposerJson()
    {
        $composerJson = json_decode(file_get_contents(dirname(__DIR__) . '/composer.json'), true);

        // Check that the 'bolt-class' key correctly matches an existing class
        $this->assertArrayHasKey('bolt-class', $composerJson['extra']);
        $this->assertTrue(class_exists($composerJson['extra']['bolt-class']));

        // Check that the 'bolt-assets' key points to the correct directory
        $this->assertArrayHasKey('bolt-assets', $composerJson['extra']);
        $this->assertSame('web', $composerJson['extra']['bolt-assets']);
    }
}
