<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Item;
use App\Product;
use App\Category;
class PageControllerTest extends TestCase
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
public function testVariablesGetAccount()
{

    $response = $this->call('GET', 'myaccount/4');
     $this->assertViewHasAll(['infos']);
     
}

    // this unit pass
    public function testVariablesGetListByItem()
{
    $response = $this->call('GET', 'all-list/1');
    $item = Item::find(1);
    $product = $item->getProduct()->paginate(12);
     $this->assertViewHasAll(['item','product']); 
     $this->assertViewHas('item', $item);  
    $this->assertViewHas('product', $product );
}
    

    // this unit pass
    public function testVariablesGetListByCategory()
{
    $response = $this->call('GET', 'list-product/2');
    $category = Category::find(2);
    	$product = $category->getProduct()->paginate(12);
     $this->assertViewHasAll(['category','product']);
     $this->assertViewHas('category', $category);
    $this->assertViewHas('product', $product );
}

    public function testVariablesGetDetail()
{
    $response = $this->call('GET', 'detail/2');
    $product = Product::find(2);
     $this->assertViewHasAll(['product']);
    $this->assertViewHas('product', $product );
}
}
