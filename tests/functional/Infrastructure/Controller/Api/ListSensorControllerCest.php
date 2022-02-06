<?php

namespace App\Tests\functional\Infrastructure\Controller\Api;

use App\Tests\FunctionalTester;

class ListSensorControllerCest
{
    public function testList(FunctionalTester $I)
    {
        $I->sendAjaxRequest('GET', '/api/sensor');
        $I->seeResponseCodeIs(200);
    }
}