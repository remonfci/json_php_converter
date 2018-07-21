<?php

namespace Converter;


use PHPUnit\Framework\TestCase;

class ConverterTest extends TestCase
{
    /**
     * @param $input
     * @param $output
     * @dataProvider StringConversionProvider
     */
    public function testStringConversion($input, $output)
    {
        $converter = new Converter();

        $this->assertEquals($output, $converter->convertString($input));
    }

    public function StringConversionProvider()
    {
        return [
            [
                '{"key":"value","key2":"value2"}',
                [
                    'key'  => 'value',
                    'key2' => 'value2',
                ],
            ],

            [
                '{"key":"value","key2":"value2","some-array":[1,2,3,4,5]}',
                [
                    'key'        => 'value',
                    'key2'       => 'value2',
                    'some-array' => [1, 2, 3, 4, 5],
                ],
            ],

            [
                '{"key":"value","key2":"value2","some-array":[1,2,3,4,5],"new-object":{"key":"value","key2":"value2"}}',
                [
                    'key'        => 'value',
                    'key2'       => 'value2',
                    'some-array' => [1, 2, 3, 4, 5],
                    'new-object' => [
                        'key'  => 'value',
                        'key2' => 'value2',
                    ],
                ],
            ],

            [
                '[{"key":"value","key2":"value2","some-array":[1,2,3,4,5],"new-object":{"key":"value","key2":"value2"}},{"key":"value","key2":"value2","some-array":[1,2,3,4,5],"new-object":{"key":"value","key2":"value2"}},{"key":"value","key2":"value2","some-array":[1,2,3,4,5],"new-object":{"key":"value","key2":"value2"}}]',
                [
                    [
                        'key'        => 'value',
                        'key2'       => 'value2',
                        'some-array' => [1, 2, 3, 4, 5],
                        'new-object' => [
                            'key'  => 'value',
                            'key2' => 'value2',
                        ],
                    ],
                    [
                        'key'        => 'value',
                        'key2'       => 'value2',
                        'some-array' => [1, 2, 3, 4, 5],
                        'new-object' => [
                            'key'  => 'value',
                            'key2' => 'value2',
                        ],
                    ],
                    [
                        'key'        => 'value',
                        'key2'       => 'value2',
                        'some-array' => [1, 2, 3, 4, 5],
                        'new-object' => [
                            'key'  => 'value',
                            'key2' => 'value2',
                        ],
                    ],
                ],
            ],

        ];
    }
}
