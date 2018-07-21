<?php

namespace Converter;


/**
 * Class Converter
 * @package Converter
 */
class Converter
{
    /**
     * @param string $input
     * @return array|null
     */
    public function convertString(string $input): ?array
    {
        $output = json_decode($input, true);

        return $output;
    }
}
