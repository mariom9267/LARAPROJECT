<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userInfoController extends Controller
{
  public function __invoke(Request $request)
  {
    $secret_key=25250;
    $user_key=$request->user_key;
      $data=[
          'user_name'=>'enam',
          'designation'=>'fullStack Developer',
          'mobile'=>'018745236987',
          'bank_acc'=>'2163465256554687',

      ];
      if($secret_key == $user_key){
          return response()->json([
              'user_info'=>$data
          ]);
      }
      else{
          return response([
              'message'=>'provide valid secret key '
          ], 404);

        }
}
  }

