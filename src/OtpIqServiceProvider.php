<?php

namespace Ht3aa\OtpIq;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ht3aa\OtpIq\Commands\OtpIqCommand;

class OtpIqServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('otp-iq')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_otp_iq_table')
            ->hasCommand(OtpIqCommand::class);
    }
}
