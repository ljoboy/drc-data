<?php
/**
 * FILE Ville.php
 *
 * @author Dark Angel <jonathanyombo@gmail.com>
 * @copyright DATE 3/12/2021 - 10:56 PM
 *
 * @package DRCData;
 */

namespace DRCData;

/**
 * Class Ville
 * @package DRCData
 */
class Ville extends Data
{
    public function __construct()
    {
        parent::__construct();
        $this->datas = $this->importer->villes();
    }

    /**
     * get ville by province id
     *
     * @param int $province_id
     * @return array
     */
    public function byProvinceId(int $province_id): array
    {
        $villes = [];
        foreach ($this->datas as $data) {
            if ($data->province_id === $province_id) {
                $villes[] = $data;
            }
        }
        return $villes;
    }
}
