<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Client;

class ClientControllerTest extends TestCase
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
    	$response = $this->call('GET', 'admin/client/list');
    	//$client =  Client::orderBy('id','DESC')->paginate(10);
    	 $this->assertViewHasAll(['client','product']);
    }

      public function testVariablesGetDetail(){
      	$response = $this->call('GET', 'detail/1');
    	//$client =  Client::orderBy('id','DESC')->paginate(10);
    	 $this->assertViewHasAll(['client']);

      }

}
