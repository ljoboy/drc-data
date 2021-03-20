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

    public function testGetByIdWithoutParam()
    {
        $this->expectException(ArgumentCountError::class);
        $province = $this->province->getById();
    }

    public function testGetByNameWithGoodLowerCaseParam()
    {
        $province = $this->province->getByName('lomami');
        $this->assertIsObject($province);
    }

    public function testGetByNameWithGoodAccentParam()
    {
        $province = $this->province->getByName('Kasaï');
        $this->assertIsObject($province);
    }

    public function testGetByNameWithGoodUpperCaseParam()
    {
        $province = $this->province->getByName('EQUATEUR');
        $this->assertIsObject($province);
    }

    public function testGetByNameWithBadParamString()
    {
        $province = $this->province->getByName('jolie');
        $this->assertNull($province);
    }

    public function testGetByNameWithBadParamNumber()
    {
        $province = $this->province->getByName(123);
        $this->assertNull($province);
    }

    public function testGetByNameWithBadParamArray()
    {
        $this->expectException(TypeError::class);
        $province = $this->province->getByName([123, 'lubumbahsi']);
    }

    public function testGetByNameWithBadParamObject()
    {
        $this->expectException(TypeError::class);
        $province = $this->province->getByName(new StdClass());
    }

    public function testGetByNameWithoutParam()
    {
        $this->expectException(ArgumentCountError::class);
        $province = $this->province->getByName();
    }

    public function testGetRandomProvince()
    {
        $this->assertIsObject($this->province->random());
    }

    public function testSearchWithGoodParam()
    {
        $this->assertIsArray($this->province->search('asa'));
    }
}
