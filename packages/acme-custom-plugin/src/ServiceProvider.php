<?php

namespace Acme\CustomPlugin;

use Acme\CustomPlugin\Resources\UserResource;
use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class ServiceProvider extends PluginServiceProvider
{
    // protected array $resources = [
    //     UserResource::class,
    // ];

    public function configurePackage(Package $package): void
    {
        $package->name('acme-custom-plugin');
    }
}
