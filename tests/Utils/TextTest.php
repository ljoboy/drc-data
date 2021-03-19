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
use stdClass;
use TypeError;

/**
 * Class TextTest
 * @package Utils
 */
final class TextTest extends TestCase
{
    public function testWordWithAccent()
    {
        $this->assertSame('eleve', Text::replaceAccents("élève"));
        $this->assertSame('Coeur', Text::replaceAccents("Cœur"));
        $this->assertSame('HETEROGENEITE', Text::replaceAccents("HÉTÉROGÉNÉITÉ"));
    }

    /**
     *
     */
    public function testWordWithoutAccent()
    {
        $this->assertSame('girlfriend', Text::replaceAccents('girlfriend'));
        $this->assertSame('Waterproof', Text::replaceAccents('Waterproof'));
        $this->assertSame('STATE', Text::replaceAccents('STATE'));
    }

    public function testWithNumber()
    {
        $this->assertEquals(123, Text::replaceAccents(123));
        $this->assertEquals(12.3, Text::replaceAccents(12.3));
        $this->assertEquals(2/3, Text::replaceAccents(2/3));
    }


    public function testWithBoolean()
    {
        $this->assertEquals(true, Text::replaceAccents(true));
        $this->assertEquals(false, Text::replaceAccents(false));
    }

    public function testWithArray()
    {
        $this->expectException(TypeError::class);
        Text::replaceAccents(['word', 'àccènt']);
    }

    public function testWithObject()
    {
        $this->expectException(TypeError::class);
        Text::replaceAccents(new StdClass());
    }
}
