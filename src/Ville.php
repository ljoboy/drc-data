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


class Ville extends Data
{
    public function __construct()
    {
        parent::__construct();
        $this->datas = $this->importer->villes();
    }
}
