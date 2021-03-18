<?php
/**
 * FILE Territoire.php
 *
 * @author Dark Angel <jonathanyombo@gmail.com>
 * @copyright DATE 3/12/2021 - 4:20 PM
 *
 * @package DRCData;
 */

namespace DRCData;

use Exception;

/**
 * Class Territoire
 * @package DRCData
 */
class Territoire extends Data
{
    /**
     * Territoire constructor.
     * @throws Exception
     */
    public function __construct()
    {
        parent::__construct('territoires');
    }

    /**
     * get territoires by province id
     *
     * @param int $province_id
     * @return array
     */
    public function byProvinceId(int $province_id): array
    {
        $territoires = [];
        foreach ($this->datas as $data) {
            if ($data->province_id === $province_id) {
                $territoires[] = $data;
            }
        }
        return $territoires;
    }
}
