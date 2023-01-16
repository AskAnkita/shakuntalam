<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\SendMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
//    public function index(){
//
//
//    }

    public function index(Request $request){

        dd($request['name']);

//        Mail::to($request['email'])->send(new  SendMail($request['name'], $request['email']));
        dd('done');
    }

    public function generatePDF(){
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];

        $pdf = PDF::loadView('agreement', $data);
        return $pdf->download('agreement.pdf');

//        return response($pdf->Output())
//            ->header('Content-Type', 'application/pdf');
    }
    public function store(ContactRequest $request)
    {
        DB::beginTransaction();
        try {
            $sports = new Contact;
            $sports->name = $request['name'];
            $sports->email = $request['email'];
            $sports->subject = $request['subject'];
            $sports->message = $request['message'];
            $sports->save();
            DB::commit();
            return response(["message' => 'Thanks For Contacting Us. We'll get back to you Soon."], 200);
        } catch (\Exception $exception) {
            DB::rollBack();
            report($exception);
            return response(['message' => $exception->getMessage()], $exception->getCode() ?: 500);
        }
    }


//        $data = ['name'=> $request['name'], 'data'=> 'Hello Ankita'];
//        Mail::send('mail',$data,function ($message) use ($request){
//            $message->to($request['email']);
//            $message->subject('Hello'. $request['name']);
//        });

        
}
