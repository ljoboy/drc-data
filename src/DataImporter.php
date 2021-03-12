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
     * @param string $filename
     * @return array
     */
    private function importer(string $filename): array
    {
        $file_contents = file_get_contents("../data/$filename.json");
        return json_decode($file_contents, true);
    }

    /**
     * @return array
     */
    public function provinces(): array
    {
        return $this->importer('provinces');
    }

    /**
     * @return array
     */
    public function territoires(): array
    {
        return $this->importer('territoires');
    }

    /**
     * @return array
     */
    public function zone_santes(): array
    {
        return $this->importer('zonesante_pop2020');
    }

    /**
     * @return array
     */
    public function villes(): array
    {
        return $this->importer('villes');
    }

}
