<?php

namespace App\Tests\functional\Application\Feature\ListSensor;

use App\Application\Feature\ListSensor\ListSensorFeature;
use App\Tests\FunctionalTester;

class ListSensorFeatureCest
{
    public function testList(FunctionalTester $I)
    {
        $feature = $I->grabService(ListSensorFeature::class);

        $result = $feature->listAll();

        $I->assertIsArray($result);
    }
}