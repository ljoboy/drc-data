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

    public function testGetAllMethod()
    {
        $this->assertIsArray($this->province->getAll());
    }
}
