<?php

namespace Tomgrohl\Laravel\Encryption;

use Illuminate\Support\ServiceProvider;

/**
 * Class EncryptionServiceProvider
 *
 * @package Tomgrohl\Laravel\Encryption
 */
class EncryptionServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bindShared('encrypter', function($app) {

            $encrypter = new Encrypter($app['config']['app.key']);

            if ($app['config']->has('app.cipher')) {

                $encrypter = new Encrypter(
                    $app['config']['app.key'],
                    $app['config']['app.cipher']
                );
            }

            return $encrypter;
        });

        $this->app->alias('encrypter', Encrypter::class);
    }
}
