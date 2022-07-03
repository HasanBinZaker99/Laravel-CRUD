<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    function index()
    {
        return view('customer');
    }
    function home()
    {
        return view('index');
    }

  function create(){
      return view('customer');
  }
        
    function register(Request $formdata){
        $formdata->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'confirm_password' => 'required',
                'state' => 'required',
                'country' => 'required',
            ]
            );
            return redirect('/customer/store');
    }
    function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'confirm_password' => 'required',
                'state' => 'required',
                'country' => 'required',
            ]
            );
        // echo "<pre>";
        // print_r($request->all());
        // echo "<pre>";
        // print_r($customer);
        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);
        $customer->confirm_password = md5($request['confirm_password']);

        // echo "<pre>";
        // print_r($customer);

        $customer->save();
        
        return redirect('/customer-view');
        
    }

    function view()
    {
        $customers = Customer::all();
        // echo "<pre>";
        // print_r($customer->toArray()); //toArray tokoni kaj kre jokon data take. Database e data na takle toArray error generate krbe.
        // echo "</pre>";
        $data = compact('customers');
        // echo "<pre>";
        // print_r($data);
        // die();

        return view('customer-view')->with($data);
    }


    public function delete($id){
       
        // echo $id;
        // die();
        // $customer = Customer::find(1);
        // echo "<pre>";
        // print_r($customer);
        // die;

        // Customer::find($id)->delete();
        // return redirect()->back();

        $customer = Customer::find($id);

        if(!is_null($customer)) {
            $customer->delete();
        }
        return redirect('customer-view');
    }
    
}
