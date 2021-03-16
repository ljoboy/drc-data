<?php
/**
 * FILE Data.php
 *
 * @author Dark Angel <jonathanyombo@gmail.com>
 * @copyright DATE 3/12/2021 - 11:51 PM
 *
 * @package DRCData;
 */

namespace DRCData;

use DRCData\Utils\Text;
use stdClass;

/**
 * Class Data
 * @package DRCData
 */
abstract class Data
{
    /**
     * @var array
     */
    protected $datas = [];

    /**
     * json filename without extension
     *
     * @var string;
     */
    protected $filename;

    /**
     * Data constructor.
     */
    public function __construct()
    {
        $this->importer($this->filename);
    }

    /**
     * Import data from file and return it like an array of Object
     *
     * @param string $filename
     * @return void
     */
    private function importer(string $filename): void
    {
        $file_contents = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR . "$filename.json");
        $this->datas = json_decode($file_contents, false);
    }

    /**
     * get all datas
     *
     * @return array
     */
    public function getAll(): array
    {
        return $this->datas;
    }

    /**
     * get data by name
     *
     * @param string $name
     * @return stdClass|null
     */
    public function getByName(string $name): ?StdClass
    {
        foreach ($this->datas as $data) {
            if ($data->name === $name) {
                return $data;
            }
        }

        return null;
    }

    /**
     * get random data
     *
     * @return stdClass
     */
    public function random(): StdClass
    {
        return $this->datas[rand(0, count($this->datas))];
    }

    /**
     * search for data
     *
     * @param string $name
     * @param bool $isCaseInsensitive
     * @param bool $withAccent
     * @return array
     */
    public function search(string $name,bool $isCaseInsensitive = true, bool $withAccent = true): array
    {
        $datas = [];

        if ($withAccent === true) {
            $name = Text::replaceAccents($name);
        }

        if ($isCaseInsensitive === true) {
            $name = mb_strtolower($name);
        }

        foreach ($this->datas as $data) {
            $data_name = $data->name;

            if ($withAccent === true) {
                $data_name = Text::replaceAccents($data_name);
            }

            if ($isCaseInsensitive === true) {
                $data_name = mb_strtolower($data_name);
            }

            if (strpos($data_name, $name) !== false) {
                $datas[] = $data;
            }
        }

        return $datas;
    }
}
