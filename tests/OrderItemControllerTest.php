<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class OrderItemControllerTest extends TestCase
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

     public function testVariablesGetList(){
    	$response = $this->call('GET', 'admin/order_item/list/1');
    	//$client =  Client::orderBy('id','DESC')->paginate(10);
    	 $this->assertViewHasAll(['orderItem','order']);
    }
}
