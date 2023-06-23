<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Feature\Helpers;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_error_with_array_format()
    {
        $errors = [
            ['The field is required'],
            ['The email field must be a valid email address']
        ];
        $expectedResult = ['The field is required.', 'The email field must be a valid email address.'];
        $result = Helpers::setErrors($errors, "array");
        $this->assertEquals($expectedResult, $result);

    }
}
