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


use DRCData\Utils\Text;
use stdClass;

class Province
{
    private $provinces;
    private $importer;

    public function __construct()
    {
        $this->importer = new DataImporter();
        $this->provinces = $this->importer->provinces();
    }

    /**
     * @return array
     */
    public function getAll(): array
    {
        return $this->provinces;
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

    /**
     * @param string $name
     * @return stdClass|null
     */
    public function getByName(string $name): ?StdClass
    {
        foreach ($this->provinces as $province) {
            if ($province->name === $name) {
                return $province;
            }
        }

        return null;
    }

    /**
     * @return stdClass
     */
    public function random(): StdClass
    {
        return $this->provinces[rand(0, count($this->provinces))];
    }

    /**
     * @param string $name
     * @param bool $isCaseInsensitive
     * @param bool $withAccent
     * @return array
     */
    public function search(string $name,bool $isCaseInsensitive = true, bool $withAccent = true): array
    {
        $provinces = [];

        if ($withAccent === true) {
            $name = Text::replaceAccents($name);
        }

        if ($isCaseInsensitive === true) {
            $name = mb_strtolower($name);
        }

        foreach ($this->provinces as $province) {
            $province_name = $province->name;

            if ($withAccent === true) {
                $province_name = Text::replaceAccents($province_name);
            }

            if ($isCaseInsensitive === true) {
                $province_name = mb_strtolower($province_name);
            }

            if (strpos($province_name, $name) !== false) {
                $provinces[] = $province;
            }
        }

        return $provinces;
    }
}
