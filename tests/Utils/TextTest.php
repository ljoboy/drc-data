<?php
/**
 * FILE TextTest.php
 *
 * @author Dark Angel <jonathanyombo@gmail.com>
 * @copyright DATE 3/15/2021 - 10:06 PM
 *
 * @package Utils;
 */

namespace Utils;

use DRCData\Utils\Text;
use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    public function testWordWithAccent()
    {
        $this->assertEquals("eleve", Text::replaceAccents("élève"));
        $this->assertEquals("Coeur", Text::replaceAccents("Cœur"));
        $this->assertEquals("HETEROGENEITE", Text::replaceAccents("HÉTÉROGÉNÉITÉ"));
    }

    public function testWordWithoutAccent()
    {
        $this->assertEquals('girlfriend', Text::replaceAccents('girlfriend'));
        $this->assertEquals('Waterproof', Text::replaceAccents('Waterproof'));
        $this->assertEquals('STATE', Text::replaceAccents('STATE'));
    }

    public function testWithNumber()
    {
        $this->assertEquals(123, Text::replaceAccents(123));
        $this->assertEquals(12.3, Text::replaceAccents(12.3));
    }
}
