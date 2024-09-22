<?php

namespace nietocjr\LaravelChatworkConnect;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use nietocjr\LaravelChatworkConnect\Commands\LaravelChatworkConnectCommand;

class LaravelChatworkConnectServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-chatwork-connect')
            ->hasConfigFile();
            // ->hasViews()
            // ->hasMigration('create_laravel_chatwork_connect_table')
            // ->hasCommand(LaravelChatworkConnectCommand::class);
    }
}
