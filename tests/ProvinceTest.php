<?php
/**
 * FILE ProvinceTest.php
 *
 * @author Dark Angel <jonathanyombo@gmail.com>
 * @copyright DATE 3/16/2021 - 4:30 PM
 */

use DRCData\Province;
use PHPUnit\Framework\TestCase;

class ProvinceTest extends TestCase
{
    /**
     * @var Province
     */
    public $province;

    /**
     * @before
     */
    public function setProvince(): void
    {
        $this->province = new Province();
    }

    public function testGetAllMethod(): void
    {
        $this->assertIsArray($this->province->getAll());
    }

    public function testGetByIdWithAGoodId(): void
    {
        $this->assertIsObject($this->province->getById(6));
        $this->assertIsObject($this->province->getById(1));
        $this->assertIsObject($this->province->getById(10));
    }

    public function testGetByIdWithABadId()
    {
        $this->assertNull($this->province->getById(600));
    }

    public function testGetByIdWithABadTypeId()
    {
        $this->expectException(TypeError::class);
        $province = $this->province->getById([5, 4]);
    }

    public function testGetByIdWithABadTypeStringId()
    {
        $this->expectException(TypeError::class);
        $province = $this->province->getById('just');
    }

    public function testGetByIdWithABadTypeObjectId()
    {
        $this->expectException(TypeError::class);
        $province = $this->province->getById(new StdClass());
    }

    public function testGetByNameWithGoodLowerCaseParam()
    {
        $province = $this->province->getByName('lomami');
        $this->assertIsObject($province);
    }

    public function testGetByNameWithGoodLWithAccentParam()
    {
        $province = $this->province->getByName('Kasaï');
        $this->assertIsObject($province);
    }
}
