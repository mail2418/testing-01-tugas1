<?php

namespace Tests\Unit;

use Helpers;
use PHPUnit\Framework\TestCase;

class HelpersTest extends TestCase
{
    public function test_error_with_html_format()
    {
        $errors = [
            ['The field is required.'],
            ['The email field must be a valid email address.']
        ];

        $expectedResult = "<ul class='text-left font-sm list-inside list-decimal'><li>The field is required.</li><li>The email field must be a valid email address.</li></ul>";

        $result = Helpers::setErrors($errors);
        $this->assertEquals($expectedResult, $result);
    }

    public function test_error_with_array_format()
    {
        $errors = [
            ['The field is required.'],
            ['The email field must be a valid email address.']
        ];

        $expectedResult = ['The field is required.', 'The email field must be a valid email address.'];

        $result = Helpers::setErrors($errors, "array");
        $this->assertEquals($expectedResult, $result);
    }
}
