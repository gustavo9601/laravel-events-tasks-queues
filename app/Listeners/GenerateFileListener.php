<?php

namespace App\Listeners;

use App\Events\GenerateFileEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class GenerateFileListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param GenerateFileEvent $event
     * @return void
     */
    public function handle(GenerateFileEvent $event)
    {
        $user = $event->user;

        //creando archivo test
        $name_file = microtime() . '.txt';
        if ($file = fopen(public_path() . '/' . $name_file, "a")) {

            if (fwrite($file, 'Hola mundo ' . $user->name)) {
                echo "Se genero y escribio en " . public_path() . '/' . $name_file;
            } else {
                echo "No se pudo escribir";
            }
        } else {
            echo "error";
        }

    }
}
