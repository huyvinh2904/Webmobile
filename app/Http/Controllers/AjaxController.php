<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Item;
use App\Category;
use App\Product;
use App\OrderItem;
use Session;
class AjaxController extends Controller
{
     /**
     * @return Category by ID of Item.
     */

     public function getCategory($idMenu){
    	$Cate=Category::where('item',$idMenu)->get();
    	foreach ($Cate as $c) {
    		echo "<option value='".$c->id."'>".$c->name."</option>";
    	}
    }

      /**
      *  @return array Product 
      */

      public function addCategory($id,$qty){

          // creat a product, add product into orderItem.
      		$product = Product::find($id);
      		$orderItem = new OrderItem();
      		$orderItem->product = $id;
      		$orderItem->price= $product->price_sale_off*$qty;
      		$orderItem->qty= $qty;

          // save item into session name 'listProduct'
      		$name= "listProduct";
      		 if(session('listProduct')){
            $value = session('listProduct'); 

                  // check product is existing in session
                 $check=0;
                 for($i=0 ;$i<count($value);$i++){
                     if($value[$i]->product== $id){
                        $check=1;
                        $value[$i]->qty = $qty;
                        $value[$i]->price = $product->price_sale_off*$value[$i]->qty;
                        Session::put($name, $value);
                        // break;
                     }
                 }
                 // add new product into session
                 if($check==0){
                   array_push($value, $orderItem);
                    Session::put($name, $value);
                 }
      		}
      		else{
               $value = array($orderItem);
                Session::put($name, $value);
      		}
            
            // echo result type text ajax
              foreach ($value as $vl){
              echo '<div class="media">';
              echo '<div class="media-left"><a href="#"><img src="admin_asset/catalogue/'.$vl->getProduct->image.'" alt="" class="img-responsive"></a></div>';
              echo  '<div class="media-body">';
              echo '<button type="button" class="remove-cart-item" >&times;</button>';
              echo '<h4>'.$vl->getProduct->name.'</h4>'  ;
              echo  '<div class="mini-cart-qty">'.$vl->qty.'</div>';
              echo '<div class="mini-cart-price">'.$vl->price.'</div>';
              echo   '</div>';
              echo  '</div>';

              }
      }

        /**
        *   @return arrayProduct in miniCart after update in DetailCart
        */
      public function updateMiniCart(){
            $value = session('listProduct'); 
                foreach ($value as $vl){
              echo '<div class="media">';
              echo '<div class="media-left"><a href="#"><img src="admin_asset/catalogue/'.$vl->getProduct->image.'" alt="" class="img-responsive"></a></div>';
              echo  '<div class="media-body">';
              echo '<button type="button" class="remove-cart-item" >&times;</button>';
              echo '<h4>'.$vl->getProduct->name.'</h4>'  ;
              echo  '<div class="mini-cart-qty">'.$vl->qty.'</div>';
              echo '<div class="mini-cart-price">'.$vl->price.'</div>';
              echo   '</div>';
              echo  '</div>';

              }
      }

      /**  
      *  @return listProduct in CartDetail
      */
      public function addCartDetail(){
            if(session('listProduct')){
              $total=0;

              $value = session('listProduct');
            foreach( $value as $key=>$vl){
                 echo  '<tr class="odd gradeX header" align="center">';
                  echo '<td>'.$vl->getProduct->name.'</td>';
                  echo  '<td><img style="width: 70px" src="admin_asset/catalogue/'.$vl->getProduct->image.'" alt="" class="img-responsive"></td>';
          echo '<td><button class="btn-number" onclick="down_qty('.$key.')" >-</button><lable>'.$vl->qty.'</lable><button class="btn-number" onclick="up_qty('.$key.')">+</button> </td>';
                  echo  '<td>'.$vl->price.'</td>';
                  echo  '<td class="center"> <button type="button" style="float: right;" onclick="updateCartDetail('.$key.')" class="btn btn-default btn-md fwb" data-toggle="" data-target="">Delete</button></td>';
                   echo '</tr>';
                  $total= $total +$vl->price;

            }

                    echo  '<tr class="odd gradeX header" align="center">'.'<td colspan="4">'.'<strong>Total:</strong>'.'</td>'.
                    '<td >'.$total.'</td>'.
                    '</tr>';
          }
          else{
                echo "No cart";
          }

      }

       /**
       * update CartDetail when add product in session.
       */
      public function updateCartDetail($number){
           if(session('listProduct')){
             $total=0;
              $value = Session::get('listProduct');
              unset($value[$number]);
              Session::set('listProduct', $value);
            foreach( $value as  $key=>$vl){
                  echo  '<tr class="odd gradeX header" align="center">';
                  echo '<td>'.$vl->getProduct->name.'</td>';
                  echo  '<td><img style="width: 70px" src="admin_asset/catalogue/'.$vl->getProduct->image.'" alt="" class="img-responsive"></td>';
                  echo '<td><button class="btn-number" onclick="down_qty('.$key.')" >-</button><lable>'.$vl->qty.'</lable><button class="btn-number" onclick="up_qty('.$key.')">+</button> </td>';
                  echo  '<td>'.$vl->price.'</td>';
                  echo  '<td class="center"> <button type="button" style="float: right;" onclick="updateCartDetail('.$key.')" class="btn btn-default btn-md fwb" data-toggle="" data-target="">Delete</button></td>';
                  echo '</tr>';

                     $total= $total +$vl->price;
            }

                echo  '<tr class="odd gradeX header" align="center">'.'<td colspan="4">'.'<strong>Total:</strong>'.'</td>'.
                    '<td >'.$total.'</td>'.
                    '</tr>';
          }
          else echo "No Cart";
      }

      /**
      *  @return Session after update quanlity
      *  sub quality 1. updata quality in Detail
      */
      public function downQtyCart($number){
          $value = Session::get('listProduct');
          $value[$number]->qty= $value[$number]->qty-1;
          if($value[$number]->qty<=0){
            $value[$number]->qty=1;
          }
           $value[$number]->price = $value[$number]->getProduct->price_sale_off * $value[$number]->qty ;
          Session::put('listProduct', $value);
           $total=0;
           foreach( $value as  $key=>$vl){
                  echo  '<tr class="odd gradeX header" align="center">';
                  echo '<td>'.$vl->getProduct->name.'</td>';
                  echo  '<td><img style="width: 70px" src="admin_asset/catalogue/'.$vl->getProduct->image.'" alt="" class="img-responsive"></td>';
                  echo '<td><button class="btn-number" onclick="down_qty('.$key.')" >-</button><lable>'.$vl->qty.'</lable><button class="btn-number" onclick="up_qty('.$key.')">+</button> </td>';
                  echo  '<td>'.$vl->price.'</td>';
                  echo  '<td class="center"> <button type="button" style="float: right;" onclick="updateCartDetail('.$key.')" class="btn btn-default btn-md fwb" data-toggle="" data-target="">Delete</button></td>';
                  echo '</tr>';

                     $total= $total +$vl->price;
            }

             echo  '<tr class="odd gradeX header" align="center">'.'<td colspan="4">'.'<strong>Total:</strong>'.'</td>'.
                    '<td >'.$total.'</td>'.
                    '</tr>';
      }


      /**
      *  @return Session after update quanlity
      *  plus quality 1. updata quality in Detail
      */

      public function upQtyCart($number){
          $value = Session::get('listProduct');
          // plus 1.
          $value[$number]->qty= $value[$number]->qty+1;

          // quality limit is 5
          if($value[$number]->qty>=5){
            $value[$number]->qty=5;
          }
          // update price after change quanlity
          $value[$number]->price = $value[$number]->getProduct->price_sale_off * $value[$number]->qty ;
          Session::put('listProduct', $value);
           $total=0;
           foreach( $value as  $key=>$vl){
                  echo  '<tr class="odd gradeX header" align="center">';
                  echo '<td>'.$vl->getProduct->name.'</td>';
                  echo  '<td><img style="width: 70px" src="admin_asset/catalogue/'.$vl->getProduct->image.'" alt="" class="img-responsive"></td>';
                  echo '<td><button class="btn-number" onclick="down_qty('.$key.')" >-</button><lable>'.$vl->qty.'</lable><button class="btn-number" onclick="up_qty('.$key.')">+</button> </td>';
                  echo  '<td>'.$vl->price.'</td>';
                  echo  '<td class="center"> <button type="button" style="float: right;" onclick="updateCartDetail('.$key.')" class="btn btn-default btn-md fwb" data-toggle="" data-target="">Delete</button></td>';
                  echo '</tr>';

                     $total= $total +$vl->price;
            }

             echo  '<tr class="odd gradeX header" align="center">'.'<td colspan="4">'.'<strong>Total:</strong>'.'</td>'.
                    '<td >'.$total.'</td>'.
                    '</tr>';
      }

}
