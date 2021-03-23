<?php
/**
 * FILE DataTest.php
 *
 * @author Dark Angel <jonathanyombo@gmail.com>
 * @copyright DATE 3/16/2021 - 2:46 PM
 */

use DRCData\Data;
use PHPUnit\Framework\TestCase;

class FakeDataImplementor extends Data {
    public function __construct()
    {
        parent::__construct('fakefilename');
    }
}

class DataTest extends TestCase
{
    public function testSetFakeDataImplementor()
    {
        $this->expectException(Exception::class);
        $fakeData = new FakeDataImplementor();
    }
}
