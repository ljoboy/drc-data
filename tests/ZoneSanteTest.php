<?php
/**
 * FILE ZoneSanteTest.php
 *
 * @author Dark Angel <jonathanyombo@gmail.com>
 * @copyright DATE 3/16/2021 - 4:31 PM
 */

use DRCData\ZoneSante;
use PHPUnit\Framework\TestCase;

class ZoneSanteTest extends TestCase
{
    /**
     * @var ZoneSante
     */
    public $zoneSante;

    /**
     * @before
     */
    public function testSetZoneSante()
    {
        $this->zoneSante = new ZoneSante();
        $this->assertIsObject($this->zoneSante);
    }

    public function testGetByProvinceNameGoodParam()
    {
        $zonesantes = $this->zoneSante->byProvinceName('kinshasa');
        $this->assertIsArray($zonesantes);
        $this->assertNotEmpty($zonesantes);
    }

}
