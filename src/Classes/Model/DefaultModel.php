<?php

namespace App\Classes\Model;

use PDO;

/**
 * Class Usuario
 * @package App\Classes
 */
class DefaultModel
{
    /**
     * @param array $data
     */
    public function load(array $data)
    {
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }

        return $this;
    }
}
