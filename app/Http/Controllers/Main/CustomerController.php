<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Customer;
use App\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Main.customerSignup');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $customer = new Customer;
        $customer->user_id = $user->id;
        $customer->dob = $request->dob;
        $customer->gender = $request->gender;
        $customer->mobile_no = $request->mobile_no;
        $customer->country = $request->country;
        $customer->state = $request->state;
        $customer->city = $request->city;
        $customer->pincode = $request->pincode;
        $customer->address = $request->address;
        $customer->save();

        return redirect('/login/show')->with('success','Register Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
