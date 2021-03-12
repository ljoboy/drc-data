<?php
/**
 * FILE DataImporter.php
 *
 * @author Dark Angel <jonathanyombo@gmail.com>
 * @copyright DATE 3/12/2021 - 5:04 PM
 *
 * @package DRCData;
 */

namespace DRCData;


class DataImporter
{
    /**
     * @return array
     */
    public function provinces(): array
    {
        $provincesFile = file_get_contents('../data/provinces.json');
        $provinces = json_decode($provincesFile, true);

        return $provinces['administrative'] ?? [];
    }

    /**
     * @return array
     */
    public function territoires(): array
    {
        $territoiresFile = file_get_contents('../data/territoires.json');
        $territoires = json_decode($territoiresFile, true);

        return $territoires ?? [];
    }

    /**
     * @return array
     */
    public function zone_santes(): array
    {
        $zonesFile = file_get_contents('../data/zonesante_pop2020.json');
        $zones = json_decode($zonesFile, true);

        return $zones ?? [];
    }

    /**
     * @return array
     */
    public function villes(): array
    {
        $villesFile = file_get_contents('../data/villes.json');
        $villes = json_decode($villesFile, true);

        return $villes ?? [];
    }

}
