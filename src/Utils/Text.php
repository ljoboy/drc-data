<?php
/**
 * FILE Utils.php
 *
 * @author Dark Angel <jonathanyombo@gmail.com>
 * @copyright DATE 3/12/2021 - 4:22 PM
 *
 * @package DRCData;
 */

namespace DRCData\Utils;

/**
 * Class Text
 * @package DRCData\Utils
 */
class Text
{
    /**
     * Replace accents letters with the non-accent corresponding one
     *
     * @param string $string
     * @return string
     */
    static function replaceAccents(string $string): string
    {

        /**
         * Contains accent character to replace
         *
         * @var string[]
         */
        $search = explode(",", "ç,æ,œ,á,é,í,ó,ú,à,è,ì,ò,ù,ä,ë,ï,ö,ü,ÿ,â,ê,î,ô,û,å,ø,Ø,Å,Á,À,Â,Ä,È,É,Ê,Ë,Í,Î,Ï,Ì,Ò,Ó,Ô,Ö,Ú,Ù,Û,Ü,Ÿ,Ç,Æ,Œ");

        /**
         * contains corresponding character to replace
         *
         * @var string[]
         */
        $replace = explode(",", "c,ae,oe,a,e,i,o,u,a,e,i,o,u,a,e,i,o,u,y,a,e,i,o,u,a,o,O,A,A,A,A,A,E,E,E,E,I,I,I,I,O,O,O,O,U,U,U,U,Y,C,AE,OE");

        return str_replace($search, $replace, $string);
    }
}
