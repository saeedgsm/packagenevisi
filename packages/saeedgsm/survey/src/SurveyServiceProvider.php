<?php

namespace Survey;

use Illuminate\Support\ServiceProvider;

class SurveyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views/','survey');
    }

    public function register()
    {
        $basePath = dirname(__DIR__);

        $arrPublishable = [
            'migrations' => [
                "$basePath\\src\\database\\migrations\\"=>database_path('migrations'),
            ],
            'config'=>[
                "$basePath\\src\\config\\"=>config_path()
            ],
            'public'=>[
                "$basePath\\src\\public\\"=>public_path('assets/css')
            ]
        ];
        foreach ($arrPublishable as $group => $paths) {
            $this->publishes($paths,$group);
        }
    }
}
