<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Standby;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $orders = Order::orderBy('created_at','DESC')->with('product')->withTrashed()->paginate(6);
        return view('admin/order-list',compact('orders'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteOrders($id)
    {
        $order = Order::withTrashed()->where('id', $id)->first();
        $order->forceDelete();
        return redirect()->back()->with('delete-order', 'order deleted successfully!');
    }

    public function ordersByUsers( $id = null )
    {
        dd($id);
        $i = 1;
        if ( !isset($id) ){
//            $i += 1;
//            dd($i);
            $users = User::with('orders')->paginate(6);
            return view('admin/orders-by-users', compact('users'));
        }
        if(isset($id)){
            $i += 2;
//            dd($i);
            $users = User::with('orders')->paginate(6);
            $orders = Order::where('user_id', $id)->get();
            return view('admin/orders-by-users', compact('users', 'orders'));
        }

    }
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * show in Standby Mode Orders
     */
    public function showStandbyModeOrders()
    {
        $standbies = Standby::with('product')->paginate(6);

        return view('admin/standby-mode-orders', compact('standbies'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * add order in to standbies table and delete in orders table
     */
    public function addStandbyModeOrders($id)
    {
        $order   = Order::find($id);
        $standbies = new Standby();

        if ( $id ){
            $standbies->product_id = $order->product_id;
            $standbies->user_id	 = $order->user_id	;
            $standbies->quantity = $order->quantity;
            $standbies->country = $order->country;
            $standbies->city = $order->city;
            $standbies->total_price = $order->total_price;
            $standbies->zip_code = $order->zip_code;
            $standbies->address = $order->address;
            $standbies->created_at = $order->created_at;
            $standbies->updated_at = $order->updated_at;
            $standbies->save();
            $order->delete();
            return redirect()->back();
        }

    }

    public function deleteOrderFromStandby($id)
    {
        $orderInStandby = Standby::find($id);
        $orderInStandby->delete();
        return redirect()->back()->with('delete-order','Order has been deleted successfully!');
    }

    /**
     * @param Request $request
     * in this function chenging orders status
     */
    public function changOrderStatus( Request $request )
    {
        $order = Order::where('id', $request->id)->first();
        $order->status = $request->status;
        $order->save();

    }


}
