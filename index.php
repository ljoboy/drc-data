<?php
/**
 * FILE index.php
 *
 * @author Dark Angel <jonathanyombo@gmail.com>
 * @copyright DATE 3/12/2021 - 10:14 PM
 */

use DRCData\Province;

include 'vendor/autoload.php';

$province = new Province();

echo '<pre>';
var_dump($province->getByName('Kasaï'));
