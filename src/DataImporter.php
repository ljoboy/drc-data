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

/**
 * Class DataImporter
 * @package DRCData
 */
class DataImporter
{
    /**
     * Import data from file and return it like an array of Object
     *
     * @param string $filename
     * @return array
     */
    private function importer(string $filename): array
    {
        $file_contents = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR . "$filename.json");
        return json_decode($file_contents, false);
    }

    /**
     * import provinces data
     *
     * @return array
     */
    public function provinces(): array
    {
        return $this->importer('provinces');
    }

    /**
     * import territoires data
     *
     * @return array
     */
    public function territoires(): array
    {
        return $this->importer('territoires');
    }

    /**
     * import zone de sante's data
     *
     * @return array
     */
    public function zone_santes(): array
    {
        return $this->importer('zonesante_pop2020');
    }

    /**
     * import villes data
     *
     * @return array
     */
    public function villes(): array
    {
        return $this->importer('villes');
    }

}
