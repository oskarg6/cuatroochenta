<?php

namespace App\Tests\functional\Infrastructure\Controller\Api;

use App\Tests\FunctionalTester;

class MeasurementControllerCest
{
    public function testList(FunctionalTester $I)
    {
        $I->sendAjaxRequest('GET', '/api/measurement');
        $I->seeResponseCodeIs(200);
    }
}