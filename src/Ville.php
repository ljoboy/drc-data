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

use Exception;

/**
 * Class Ville
 * @package DRCData
 */
class Ville extends Data
{
    /**
     * Ville constructor.
     * @throws Exception
     */
    public function __construct()
    {
        parent::__construct('villes');
    }

    /**
     * get ville by province id and return result as an array
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
