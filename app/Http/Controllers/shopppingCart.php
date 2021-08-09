<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class shopppingCart extends Controller
{
    public function save(Request $request, $orderDetail){
        if(!Session::has('shoppingCart')|| cout (Session::get('shoppingcart'))==0){
            Session::flash('error-msg','Hiện tọa không có sẳn phẩm nào trong giỏ hàng!');
            return redirect('/products');
        }
        $shoppingCart = Session::get('shoppingCart');
        $order = new Order();
        $order->totalPrice=0;
        $order->customerId=1;
        $order->shipName=$request-> get('fullName');
        $order->shipPhone=$request->get('phone');
        $order->shipAddress=$request->get('address');
        $order->note=$request->get('note');
        $order->isCheckout= false;
        $order->created_at= Carbon::now();
        $order->updated_at= Carbon::now();
        $order->status = 0;
        $orderDetails=[];
        $messageError='';
        foreach ($shoppingCart as $cartItem){
            $product = Product::find($cartItem->id);
            if ($product == null){
                $messageError = 'có lỗi xawyr ra, sản phẩm với id'.$cartItem->id.'Không tồn tại hoặc bị xóa!';
                break;
            }
            $orderDetails= new OrderDetail();
            $orderDetails-> productId=$product->id;
            $orderDetails-> unitPrice=$product->price;
            $orderDetails-> quantity=$cartItem->quantity;
            $order-> totalPrice += $orderDetail->quantity*$orderDetail->unitPrice;
        }
    }
}
