<?php

namespace Acme\CustomPlugin;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class ServiceProvider extends PluginServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('acme-custom-plugin');
    }
}
