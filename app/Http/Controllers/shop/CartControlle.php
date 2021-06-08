<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\New_;
use PhpParser\Node\Stmt\DeclareDeclare;

class CartControlle extends Controller
{
    public function showCart()
    {
        $cartProducts = Cart::with('product')->get();

        foreach ($cartProducts as $key => $cartProduct){
            $cartProducts[$key]['img'] = json_decode( $cartProduct->product->images );
        }
//        dd( $cartProducts[0]->product->name );
        return view('shop/cart', compact( 'cartProducts' ));
    }

    public function addToCart($id)
    {
        $cart = new Cart();
        $cart->product_id = $id;
        $cart->user_id = Auth::id();
        $cart->save();
        return redirect()->back();
    }

    public function deleteCartProduct($id)
    {
        $cartProduct = Cart::with('product')->where('carts.product_id', $id )->first();
        $cartProduct->delete();
        return back();
    }

    public function addOrder(Request $request)
    {
//        dd( $request->all() );
        $this->validate($request, [
            'address'  => 'required',
            'zip_code' => 'required',
        ]);
        try {
            foreach ( $request->obj as $key => $value )
            {
                $productPrice = Product::find($key);

                Order::create([
                    'product_id'  => $key,
                    'user_id'     => Auth::id(),
                    'quantity'    => $value,
                    'country'     => $request->country,
                    'city'        => $request->city,
                    'zip_code'    => $request->zip_code,
                    'address'     => $request->address,
                    'status'      => $request->status,
                    'total_price' => $productPrice->price * $value
                ]);
            }

            $carts = Cart::where('user_id', Auth::id() )->get();
            foreach ( $carts as $cart ){
                $cart->delete();
            }

            return response()->json(['success'=>'Ajax request submitted successfully']);
        }catch (\Exception $exception){
            return response()->json(['error'=>'Cant add order']);
        }
    }
}
