<?php

namespace Itpathsolutions\Themecustomizer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class ThemeCustomizerServiceProvider extends ServiceProvider
{
    public function boot(){
        Schema::defaultStringLength(191);
        $this->loadRoutesFrom(__DIR__ . "/routes/web.php");
        $this->loadViewsFrom(__DIR__ . "/resources/views", "ThemeCustomizer");
    }

    public function register(){
        $this->registerPublishables();
    }

    public function registerPublishables(){
        $basepath = dirname(__DIR__);
        $publishables = [
            'migrations' => [
                "$basepath/src/database/migrations" => database_path('migrations')
            ],
            'config' => [
                "$basepath/src/config/themecustomizer.php" => config_path('themecustomizer.php')
            ]
        ];

        foreach ($publishables as $group => $paths) {
            $this->publishes($paths, $group);
        }
    }
}
