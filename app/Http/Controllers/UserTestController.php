<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Events\GenerateFileEvent;

class UserTestController extends Controller
{
    public function ejecutarEvento(){

        $user = [
            'name' => 'Gustavo Marquez',
            'email' => 'ing.gustavo.marquez@gmail.com'
        ];

        //ejecutando el evento
        event(new GenerateFileEvent((object)$user));

    }
}
