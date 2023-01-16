<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\CustomerRequest;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function all(){

    }
    public function store( CustomerRequest $request){

        DB::beginTransaction();
        try {
            $name = $request['fname'] . $request['lname'];
            $sports = new Customer;
            $sports->name = $name;
            $sports->contact_no = $request->get('contact_no');
            $sports->email = $request->get('email');
            $sports->address = $request->get('address');
            $sports->demat = $request->get('demat') ?: 0;
            $sports->broker = $request->broker['name'];
            $sports->save();
            DB::commit();
            return response(['message' => 'Welcome to Shakuntalam Infosolutions'], 200);
        } catch (\Exception $exception) {
            dd($exception);
            DB::rollBack();
            report($exception);
            return response(['message' => $exception->getMessage()], $exception->getCode() ?: 500);
        }
    }
}
