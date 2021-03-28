## 🇨🇩The Democratic Republic of Congo locations data and more

This library contains DRC location data, populations, cities, provinces and more

[![Latest Stable Version](https://poser.pugx.org/ljoboy/drc-data/v)](//packagist.org/packages/ljoboy/drc-data)
[![Total Downloads](https://poser.pugx.org/ljoboy/drc-data/downloads)](//packagist.org/packages/ljoboy/drc-data)
[![Latest Unstable Version](https://poser.pugx.org/ljoboy/drc-data/v/unstable)](//packagist.org/packages/ljoboy/drc-data)
[![License](https://poser.pugx.org/ljoboy/drc-data/license)](//packagist.org/packages/ljoboy/drc-data)


### Installation

```shell
$ composer require ljoboy/drc-data
```

### Examples

#### Provinces

- Get all provinces

```php
<?php

use DRCData\Province;

$province = new Province();

//Returning array of object
$all_provinces = $province->getAll();
``` 

- Get specific province

```php
<?php

use DRCData\Province;

$province = new Province();

//It's all returning object
$specific_province = $province->getByName('kinshasa'); //It's case insensitive
$random_province = $province->random();
$province_by_id = $province->getById(5);
``` 

#### Territories

- Get all territories

```php
<?php
use DRCData\Territoire;

$territoire = new Territoire();

$all_territoire = $territoire->getAll();
``` 

- Villes (Cities) can be searched by *name* and *province*.

```php
<?php
use DRCData\Ville;

$ville = new Ville();

$villes = $ville->search('shi');
$villes_by_province_id = $ville->byProvinceId(5);
``` 

### Contribution

- Please read [the Contributing Guideline](./CONTRIBUTING.md) before raising a PR.

#### Contributors

| [<img src="https://github.com/ljoboy.png" width="100px;"><br><sub><b>Dark Angel</b></sub>](https://github.com/ljoboy) |
| :------------------------------------------------------------------------------------------------------------------------: |

#### Acknowlegments

- [Devscast DRC Base Data](https://github.com/devscast/DRC-Base-Data)

### License

MIT

### Author

[Dark Angel](https://github.com/ljoboy)
