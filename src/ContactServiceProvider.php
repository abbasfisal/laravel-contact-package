<?php

namespace Abbasfisal\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{


    public function boot()
    {
        $this->publishes([
            __DIR__.'/views/contact.blade.php'=>resource_path('views/contact.blade.php'),
            __DIR__.'/database/migrations/2022_08_02_053513_create_contacts_table.php'=>database_path('migrations/2025_08_02_053513_create_contacts_table.php')
        ]);

        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/views', 'abc');

        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        $this->mergeConfigFrom(__DIR__.'config/contactconfig.php' ,'contact');

    }
}
