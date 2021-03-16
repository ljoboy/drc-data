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
    }

    public function testWordWithoutAccent()
    {
        $this->assertEquals('girlfriend', Text::replaceAccents('girlfriend'));
    }
}
