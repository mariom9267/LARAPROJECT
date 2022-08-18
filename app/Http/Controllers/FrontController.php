<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class FrontController extends Controller
{
    public function home()
    {

        $users=User::where('created_at','<=',now())->get();
        return view('home',[
                    'page_name'=>'Home page',
                    'name'=>'laravel 9 course',
                    'users'=> $users
                ]);
    }

    public function about()
    {
            return view('about',[
                'page_name'=>'Abouts page',
                'name'=>'laravel 9 course',
   ]);
}
    public function service()
    {
        $services=[
                    'web Design',
                    'web Development',
                    'App Development',
                ];
            return view('service',compact('services'));

}
    public function contact()
    {
        $page_name='contact page';
            // $product_count='15';
            // $color=['red','blue','green'];
            $products=[
                1=>[
                    'name'=>'Bag',
                    'color'=>'red',
                    'price'=>'1240'
                ],
                2=>[
                    'name'=>'Apple',
                    'color'=>'green',
                    'price'=>'250'
                ],
                ];
        $product_count=count($products);
        return response()->json([
            'products'=>$products,
            'product_count'=>$product_count,
        ], 200);
}

public function send(Request $request)
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
public function userIndex(){
    $users=User::all();
    return view('home',['users'=> $users]);
}
}
