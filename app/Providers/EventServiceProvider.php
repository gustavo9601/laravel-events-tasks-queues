<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    /*
     * Primero se diligencia el nombre del evento y por dentro el nombre de los listeners, para generar los archivsos
     * php artisan event:generate
     * */
    protected $listen = [
        //definimos nombre del provider o evento
        'App\Events\GenerateFileEvent' => [
            //Definimos todos los listeners, que se ejecutaran al ingresar
            'App\Listeners\GenerateFileListener',
        ],/*
        'ruta eventos' => [
            'ruta listener'
        ]*/

    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
