<?php



namespace App\Http\Controllers\Service;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Paystack;

class  ServicePaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway(Request $request)
    {

        try {
            $data = array(
                "amount" => 700 * 100,
                "reference" => $request->reference,
                "email" => 'user@mail.com',
                "currency" => "NGN",
                "orderID" => 23456,
            );

            return Paystack::getAuthorizationUrl($data)->redirectNow();
            dd("nello");
        } catch (\Exception $e) {
            return Redirect::back()->withMessage(['msg' => 'The paystack token has expired. Please refresh the page and try again.', 'type' => 'error']);
        }
    }




    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        dd($paymentDetails);

    }
}
