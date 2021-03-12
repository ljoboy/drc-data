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

/**
 * Class Province
 * @package DRCData
 */
class Province extends Data
{

    public function __construct()
    {
        parent::__construct();
        $this->datas = $this->importer->provinces();
    }

    /**
     * @param int $id
     * @return stdClass|null
     */
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
