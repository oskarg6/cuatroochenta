<?php

namespace App\Tests\functional\Infrastructure\Controller\Api;

use App\Tests\FunctionalTester;

class SensorTypeControllerCest
{
    public function testList(FunctionalTester $I)
    {
        $I->sendAjaxRequest('GET', '/api/sensor-type');
        $I->seeResponseCodeIs(200);
    }
}