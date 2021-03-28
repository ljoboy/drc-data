<?php
/**
 * FILE index.php
 *
 * @author Dark Angel <jonathanyombo@gmail.com>
 * @copyright DATE 3/12/2021 - 10:14 PM
 */

use DRCData\Province;
use DRCData\Territoire;

include 'vendor/autoload.php';

$province = new Province();
$territoire = new Territoire();

echo '<pre>';
var_dump($province->getAll());


var_dump($territoire->random());


