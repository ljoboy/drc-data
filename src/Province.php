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

use Exception;
use stdClass;

/**
 * Operate with Provinces
 *
 * @author Dark Angel
 * @package DRCData
 */
class Province extends Data
{
    /**
     * Province constructor.
     * @throws Exception
     */
    public function __construct()
    {
        parent::__construct('provinces');
    }

    /**
     * get province's by id and return it as an object of StdClass or null if id not exist
     *
     * @param int $id
     * @return stdClass|null
     */
    public function getById(int $id): ?StdClass
    {
        foreach ($this->datas as $province) {
            if ($province->id === $id) {
                return $province;
            }
        }

        return null;
    }

}
