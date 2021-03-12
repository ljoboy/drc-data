<?php
/**
 * FILE Province.php
 *
 * @author Dark Angel <jonathanyombo@gmail.com>
 * @copyright DATE 3/12/2021 - 4:19 PM
 *
 * @package DRCData;
 */

namespace DRCData;


use stdClass;

class Province
{
    private $provinces;
    private $importer;

    public function __construct()
    {
        $this->importer = new DataImporter();
        $this->provinces = $this->importer->provinces();
    }

    /**
     * @return array
     */
    public function getAll(): array
    {
        return $this->provinces;
    }

    public function getById(int $id): ?StdClass
    {
        foreach ($this->provinces as $province) {
            if ($province->id === $id) {
                return $province;
            }
        }

        return null;
    }
}
