<?php
/**
 * FILE TerritoireTest.php
 *
 * @author Dark Angel <jonathanyombo@gmail.com>
 * @copyright DATE 3/16/2021 - 4:30 PM
 */

use DRCData\Territoire;
use PHPUnit\Framework\TestCase;

class TerritoireTest extends TestCase
{
    /**
     * @var Territoire
     */
    public $territoire;

    /**
     * @before
     */
    public function testSetTerritoire(): void
    {
        $this->territoire = new Territoire();
        $this->assertIsObject($this->territoire);
        $this->assertNotInstanceOf(Exception::class, $this->territoire);
    }

    public function testGetTerritoireByProvinceIdWithGoodParam()
    {
        $this->assertIsArray($this->territoire->byProvinceId(5));
        $this->assertNotEmpty($this->territoire->byProvinceId(5));
    }
}
