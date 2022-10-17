<?php

namespace App\Http\Traits;

trait WebServiceResponse
{
	public function success_response($response, $message)
    {
    	return $this->general_response($response, $message, 200);
    }

    public function error_response($error, $code = 422)
    {
    	return $this->general_response("", $error, $code);
    }

    private function general_response($data = "", $message = "", $status_code )
    {
    	return response()->json([
    		"data"          => $data,
    		"message"         => $message,
    		"status_code"   => $status_code
    	],$status_code);
    }

}
