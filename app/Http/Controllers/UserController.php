<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use PhpParser\Node\Stmt\DeclareDeclare;
use function GuzzleHttp\Promise\all;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
//        $this->middleware('auth:admin');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
//        $search = $request->search;

        if ($request->data_slider){
            Cache::put('data_slider',$request->data_slider);
        }

        $data_slider = $request->data_slider ? explode(',', $request->data_slider) : [0,2000];
        $carts = Cart::all();
        $cartsCount = count($carts);
        if (Cache::has('data_slider')){
            $data_slider =  explode(',', Cache::get('data_slider'));
            $shopProducts = Product::with('category')->whereBetween('price', [$data_slider[0], $data_slider[1]])->paginate(6);
            Cache::forget('data_slider');
        }else{
            $shopProducts = Product::with('category')->paginate(6);
        }
        $showProducts = Product::with('category')->get();
        $categories = Category::with(['products'])->get();

        foreach ($shopProducts as $key => $shopProduct){
            $shopProducts[$key]['img'] = json_decode(  $shopProduct->images );
        }

        foreach ($showProducts as $key => $showProduct){
            $showProducts[$key]['img'] = json_decode( $showProduct->images );
            $topImages[] = json_decode( $showProduct->images );
        }


        return view('shop/index',compact('shopProducts', 'topImages', 'showProducts', 'cartsCount', 'categories', 'data_slider'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     * search product in index.blade.php
     */
    public function search(Request $request)
    {
        if($request->ajax())
        {
            $products = Product::where('name','LIKE','%'.$request->search."%")->get();
            if($products)
            {
                foreach ($products as $key => $product) {
                    $products[$key]['img'] = json_decode( $product->images );

                }
                return Response($products);
            }
        }
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * show user all orders
     */
    public function userOrders()
    {
        $id = Auth::id();
        $orders = Order::with('product')->where('user_id',$id)->paginate(4);
        foreach ($orders as $key => $order) {
            $orders[$key]['img'] = json_decode( $order->product->images );
        }
        return view('shop/user-orders',compact('orders'));
    }

    public function deleteUserOrder($id)
    {
        $order = Order::withTrashed()
            ->where('id', $id)
            ->delete();

        return redirect()->back()->with('success','order deleted successfully!');
    }

}
