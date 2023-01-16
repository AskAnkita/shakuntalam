<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Ferdous\OtpValidator\OtpValidator;
use Ferdous\OtpValidator\Object\OtpRequestObject;
use Ferdous\OtpValidator\Object\OtpValidateRequestObject;



class OtpController extends Controller
{
    public function confirmationPage()
    {
        return view('product.checkout-page');
    }

    /**askankitagupta@gmail.com
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function requestForOtp(ContactRequest $request)
    {
        $client_req = '007';
        $number = $request->input('message');
        $subject = $request->input('subject');
        $email = $request->input('email');

        $otp_req = OtpValidator::requestOtp(
            new OtpRequestObject($client_req, $subject, $number, $email)
        );
        if($otp_req['code'] === 201){
            return response(['message' => 'An OTP has been sent to the mobile number provided.', $otp_req], 200);
        }else{
           dd($otp_req);
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function validateOtp(Request $request)
    {
        $uniqId = $request->input('id');
        $otp = $request->input('otp');
        $data['resp'] = [
            200 => 'Order Confirmed !!!',
            204 => 'Too many attempts, try again after some time!!!',
            203 => 'Invalid OTP given',
            404 => 'Request not found'
        ];
        $data['validate'] =  OtpValidator::validateOtp(
            new OtpValidateRequestObject($uniqId,$otp)
        );

        if($data['validate']['code'] === 200){
            //TODO: OTP is correct and with return the transaction ID, proceed with next step
        }
        return response(['message' => 'Login successfully.'], 200);

    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function resendOtp(Request $request)
    {
        $uniqueId = $request->input('uniqueId');
        $otp_req = OtpValidator::resendOtp($uniqueId);

        if(isset($otp_req['code']) && $otp_req['code'] === 201){
            return view('product.otp-page')->with($otp_req);
        }else{
            dd($otp_req);
        }
    }
}
