<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $user = Auth::user();
        $user->authorizeRoles('user');

        // $cheeses =  cheese::paginate(5);
        $customers =  Customer::all();
       
         return view('user.customer.index')->with('customers', $customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       /*  return view('user.customer.create'); */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:120',
            'email' =>'required',
            'address' =>'required',
        ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('admin.customer.show')->with('customer', $customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('user.customer.edit')->with('cheese', $customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //  dd("hello");
         $request->validate([
            'name' => 'required|max:120',
            'email' =>'required',
            'address' =>'required',
            
            
           
        ]
        );
/* 
        $cheese = new cheese([
            	'cheese_id' =>Auth:: id(),
                'name'=> $request ->name,
                'description'=> $request ->description,
        ]); */

        $cheese->update([
                'name'=> $request ->name,
                'email'=> $request ->email,
                'address'=>$request ->address,
               
        ]);

       return to_route('user.customer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return to_route('customer.index')->with('success', 'customer deleted successfully');
    }
}
