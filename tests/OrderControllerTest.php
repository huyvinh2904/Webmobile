<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Status;
class OrderControllerTest extends TestCase
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


    //    public function testVariablesGetList(){
    // 	$response = $this->call('GET', 'admin/order/list');
    // 	//$client =  Client::orderBy('id','DESC')->paginate(10);
    // 	 $this->assertViewHasAll(['name']);
    // }
    

        public function testVariablesGetEdit(){
    	$response = $this->call('GET', 'admin/order/edit/1');
    	$view = $response->original;
    	$status = Status::all();
    	$this->assertEquals($status , $view['status']);
    	//$client =  Client::orderBy('id','DESC')->paginate(10);
    	 // $this->assertViewHasAll(['order','status']);
    }


}
