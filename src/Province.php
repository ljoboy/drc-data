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


class Province
{
    public $provinces;
    private $importer;

    public function __construct()
    {
        $this->importer = new DataImporter();
        $this->provinces = $this->importer->provinces();
    }
}
