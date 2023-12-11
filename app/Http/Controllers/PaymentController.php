<?php

namespace App\Http\Controllers;
use App\Models\Payment;
use Illuminate\Http\Request;
use Omnipay\Omnipay;
class PaymentController extends Controller
{
    
    private $gateway;

    public function __construct( ){
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);                  //Testing Mode
    
       }
       //Handle the payment request from the website to paypal
       
       public function pay(Request $request)
            {
                try
                {
                    $response=$this->gateway->purchase(array(
                        'amount'=>$request->amount,
                        'currency'=>env('PAYPAL_CURRENCY'),
                        'returnUrl'=>url('success'),
                        'cancelUrl'=>url('error')
                    ))->send();
    
                    if($response->isRedirect()){
                        $response->redirect();
                    }
                    else{
                        return $response->getMessage();
                    }
    
                }
                catch(\Throwable $th){
                    return $th->getMessage();
                }
            }
    
      
        // Process the money transfer
        public function success(Request $request)
        {
           if($request->input('paymentId') && $request->input('payerID'))
           {
                $transaction=$this->gateway->completepurchase(array(
                    'payer_id'=>$request->input('PayerID'),
                    'transactionReference'=>$request->input('paymentId')
                ));
    
                $response=$transaction->send();
    
                if($response->isSuccessful())
                {
                    $arr=$response->getData();
                    $payment=new Payment();
                    $payment->payment_id=$arr['id'];
                    $payment->payer_id=$arr['payer']['payer_info']['payer_id'];
                    $payment->payer_email=$arr['transactions'][0]['amount']['total'];
                    $payment->currency=env('PAYPAL_CURRENCY');
                    $payment->payment_status=$arr['state'];
    
                    $payment->save();
    
                    return "Payment is Successfully.Your Transaction Id is : " . $arr['id'];
    
                }
    
                else{
                    return $response->getMessage();
                }
    
           }
    
           else{
            return "Payment is Successfully.";
            //return 'Payment declined!!';
           }
        }
    
        public function error()
        {
            return 'User declined the payment!';
        }
    


}
