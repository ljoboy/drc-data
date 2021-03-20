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

}
