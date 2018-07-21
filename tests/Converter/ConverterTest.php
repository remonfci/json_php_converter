<?php

namespace Converter;


use PHPUnit\Framework\TestCase;

class ConverterTest extends TestCase
{
    public function testSimpleConversion()
    {
        $input = '{"key":"value","key2":"value2"}';
        $output = [
            'key' => 'value',
            'key2' => 'value2'
        ];

        $converter = new Converter();

        $this->assertEquals($output, $converter->convertString($input));
    }
}
