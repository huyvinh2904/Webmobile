<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CategoryControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

     use WithoutMiddleware;
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testVariablesGetAdd()
{
    $response = $this->call('GET', 'admin/cate/add');
     $this->assertViewHasAll(['Item']);


}


}
