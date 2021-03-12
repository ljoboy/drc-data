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


class ZoneSante extends Data
{
    public function __construct()
    {
        parent::__construct();
        $this->datas = $this->importer->zone_santes();
    }

    public function byProvinceName(string $province_name): array
    {
        $zones = [];
        foreach ($this->datas as $data) {
            if ($data->province === $province_name) {
                $zones[] = $data;
            }
        }
        return $zones;
    }
}
