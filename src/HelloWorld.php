<?php

namespace Leo\Hello;

use Illuminate\Support\ServiceProvider;

class HelloWorld
{

    public function printRunning()
    {
        echo 'Hello World';
    }

    public function goHome()
    {
        echo 'Go Home And 吃雞';
    }
}
