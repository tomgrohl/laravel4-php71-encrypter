<?php

namespace Tomgrohl\Laravel\Encryption\Tests;

use Illuminate\Foundation\Application;
use Tomgrohl\Laravel\Encryption\Encrypter;
use Tomgrohl\Laravel\Encryption\EncryptionServiceProvider;

/**
 * Class EncryptionServiceProvider
 *
 * @package Tomgrohl\Laravel\Encryption
 */
class EncryptionServiceProviderTest extends TestCase
{
    public function testProvider()
    {
        $application = new Application();

        $provider = new EncryptionServiceProvider($application);
        $provider->register();

        $this->assertTrue($application->bound('encrypter'));
        $this->assertTrue($application->isAlias(Encrypter::class));
    }
}
