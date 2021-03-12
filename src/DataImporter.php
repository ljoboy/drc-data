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
    public function provinces(): array
    {
        $provincesFile = file_get_contents('../data/provinces.json');
        $provinces = json_decode($provincesFile, true);

        return $provinces['administrative'] ?? [];
    }
}
