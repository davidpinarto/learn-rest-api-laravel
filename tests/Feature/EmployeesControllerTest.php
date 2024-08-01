<?php

namespace Tests\Feature;

use Tests\TestCase;

class EmployeesControllerTest extends TestCase
{
    public function testEmployeesController()
    {
        $response = $this->get('/employees');
        // var_dump($response);
        dump($response->getContent());

        $response->assertStatus(200);
        $response->assertSeeText('David');
    }
}
