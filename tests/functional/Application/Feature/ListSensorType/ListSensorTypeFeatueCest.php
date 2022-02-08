<?php
namespace App\Tests\functional\Application\Feature\ListSensorType;

use App\Application\Feature\ListSensorType\ListSensorTypeFeature;
use App\Tests\FunctionalTester;

class ListSensorTypeFeatueCest
{
    public function testList(FunctionalTester $I)
    {
        $feature = $I->grabService(ListSensorTypeFeature::class);

        $result = $feature->listAll();

        $I->assertIsArray($result);
    }
}