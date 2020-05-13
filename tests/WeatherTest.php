<?php

namespace Vinbrave\Weather\Tests;

use Vinbrave\Weather\Weather;
use PHPUnit\Framework\TestCase;

class WeatherTest extends TestCase{


    public function testHandle(){

        $w = new Weather();

        $w->handle();
    }
}