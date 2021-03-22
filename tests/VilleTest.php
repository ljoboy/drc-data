<?php
/**
 * FILE VilleTest.php
 *
 * @author Dark Angel <jonathanyombo@gmail.com>
 * @copyright DATE 3/16/2021 - 4:30 PM
 */

use DRCData\Ville;
use PHPUnit\Framework\TestCase;

class VilleTest extends TestCase
{
    /**
     * @var Ville
     */
    public $ville;

    /**
     * @before
     */
    public function testSetVille()
    {
        $this->ville = new Ville();
        $this->assertIsObject($this->ville);
        $this->assertNotInstanceOf(Exception::class, $this->ville);
    }

    public function testGetVilleByProvinceIdWithGoodParam()
    {
        $this->assertIsArray($this->ville->byProvinceId(5));
        $this->assertNotEmpty($this->ville->byProvinceId(5));
    }

    public function testGetVilleByProvinceIdWithBadParam()
    {
        $this->assertEmpty($this->ville->byProvinceId(500));
    }

    public function testGetVilleByProvinceIdWithBadParamString()
    {
        $this->expectException(TypeError::class);
        $this->ville->byProvinceId('jo');
    }

    public function testGetVilleByProvinceIdWithBadParamObject()
    {
        $this->expectException(TypeError::class);
        $this->ville->byProvinceId(new StdClass());
    }

    public function testGetVilleByProvinceIdWithBadParamArray()
    {
        $this->expectException(TypeError::class);
        $this->ville->byProvinceId([2,4]);
    }
}
