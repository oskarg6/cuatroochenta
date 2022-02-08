<?php

namespace App\Tests\functional\Application\Feature\ListMeasurement;

use App\Application\Feature\ListMeasurement\ListMeasurementFeature;
use App\Tests\FunctionalTester;

class ListMeasurementFeatureCest
{
    public function testList(FunctionalTester $I)
    {
        $feature = $I->grabService(ListMeasurementFeature::class);

        $list = $feature->listAll();

        $I->assertIsArray($list);
    }
}