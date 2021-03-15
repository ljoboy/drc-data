<?php
/**
 * FILE ZoneSante.php
 *
 * @author Dark Angel <jonathanyombo@gmail.com>
 * @copyright DATE 3/13/2021 - 12:48 AM
 *
 * @package DRCData;
 */

namespace DRCData;


use DRCData\Utils\Text;

/**
 * Class ZoneSante
 * @package DRCData
 */
class ZoneSante extends Data
{
    /**
     * @var string
     */
    protected $filename = 'zonesante_pop2020';
    /**
     * ZoneSante constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * get zoneSante by province id
     *
     * @param string $province_name
     * @return array
     */
    public function byProvinceName(string $province_name): array
    {
        $zones = [];
        $province_name = mb_strtolower(Text::replaceAccents($province_name));

        foreach ($this->datas as $data) {

            $name = mb_strtolower(Text::replaceAccents($data->province));

            if ($name === $province_name) {
                $zones[] = $data;
            }
        }
        return $zones;
    }
}
