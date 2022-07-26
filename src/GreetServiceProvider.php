<?php

namespace MichaelNabil230\Greet;

use Illuminate\Support\Facades\Blade;
use MichaelNabil230\Greet\View\Components\Greet;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class GreetServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('greet')
            ->hasConfigFile()
            ->hasTranslations()
            ->hasViews();
    }

    public function registeringPackage()
    {
        Blade::component(Greet::class, 'greet');
    }
}
