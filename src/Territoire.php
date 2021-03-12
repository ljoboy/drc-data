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


class Territoire extends Data
{
    public function __construct()
    {
        parent::__construct();
        $this->datas = $this->importer->territoires();
    }
}
