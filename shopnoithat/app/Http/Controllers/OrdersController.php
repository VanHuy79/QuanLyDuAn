<?php

namespace App\Http\Controllers;
use App\Models\order_models;
use App\Models\customer_models;
use App\Models\product_models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $product= product_models::all();
        //$order = order_models::orderBy('id','desc')->paginate(10);
        $cart=session()->get(key:'cart');
      //  dd ($cart);
       // session()->forget(key:'cart');
        return view('client.cart',['carts'=>$cart,'products'=>$product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $customer=customer_models::all();
        return view('order.new',['customers'=>$customer]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id,Request $request)
    {
      
        
    }
    public function AddToCart($id,Request $request)
    {
      // echo("Hello");
        $product= product_models::findOrFail($id);
        $quantity=$request->quantity;
        $cart = session()->get('cart'); 
        if(!$cart) {

            $cart = [
                    $id => [
                        "name" => $product->name,
                        'masp'=>$product->masp,
                        "quantity" => $quantity,
                        "price" => $product->price,
                        "id" => $product->id
                      
                    ]
            ];
   
            session()->put('cart', $cart);
   
            return view('client.cart',['carts'=>$cart,'products'=>$product]);
            
        }
   
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
   
            $cart[$id]['quantity']++;
   
            session()->put('cart', $cart); // this code put product of choose in cart
   
            return view('client.cart',['carts'=>$cart]);
   
        }
   
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [

            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "id" => $product->id
        ];
   
        session()->put('cart', $cart); // this code put product of choose in cart
   
      //  return redirect()->back()->with('success', 'Product added to cart successfully!');
        return view('client.cart',['carts'=>$cart]);
    }
  
    
    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
   
            $cart[$request->id]["quantity"] = $request->quantity;
   
            session()->put('cart', $cart);
   
            session()->flash('success', 'Cart updated successfully');
            return view('client.cart',['carts'=>$cart]);
        }
    }
   
    // delete or remove product of choose in cart
    public function remove(Request $request)
    {
        if($request->id) {
   
            $cart = session()->get('cart');
   
            if(isset($cart[$request->id])) {
   
                unset($cart[$request->id]);
   
                session()->put('cart', $cart);
            }
   
            session()->flash('success', 'Product removed successfully');
            return view('client.cart',['carts'=>$cart]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function show(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
   
            $cart[$request->id]["quantity"] = $request->quantity;
   
            session()->put('cart', $cart);
   
            session()->flash('success', 'Cart updated successfully');
            return view('client.cart',['carts'=>$cart]);
        }
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $order= order_models::findOrFail($id);
        return view('order.edit',['customers'=>$customer,'orders'=>$order]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $order=order_models::findOrFail($id);
        $order->delete();
        return redirect()->route('orders.index');
    }
}
