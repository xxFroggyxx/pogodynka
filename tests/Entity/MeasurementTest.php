<?php

namespace App\Tests\Entity;

use App\Entity\Measurement;
use PHPUnit\Framework\TestCase;

class MeasurementTest extends TestCase
{
    public function dataGetFahrenheit(): array
    {
        return [
            ['0', 32],
            ['-100', -148],
            ['100', 212],
            ['0.5', 32.9],
            ['5.3', 41.54],
            ['10.8', 51.44],
            ['-23.3', -9.94],
            ['23.3', 73.94],
            ['100.7', 213.26],
            ['-100.7', -149.26],
        ];
    }

    /** 
    * @dataProvider dataGetFahrenheit
    */
    public function testGetFahrenheit($celsius, $expectedFahrenheit): void
    {
        $measurement = new Measurement();

        // $measurement->setCelsius(0);
        // $this->assertEquals(32, $measurement->getFahrehneit(), '0°C should be 32°F');

        // $measurement->setCelsius(-100);
        // $this->assertEquals(-148, $measurement->getFahrehneit(), '-100°C should be -148°F');

        // $measurement->setCelsius(100);
        // $this->assertEquals(212, $measurement->getFahrehneit(), '100°C should be 212°F');

        $measurement->setCelsius($celsius);
        $this->assertEquals($expectedFahrenheit, $measurement->getFahrehneit(), "{$celsius}°C should be {$measurement->getFahrehneit()}°F");
    }
}
