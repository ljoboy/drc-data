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
    }
}
