<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Psy\Command\WhereamiCommand;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        'page_name'=>'Home page',
        'name'=>'laravel 9 course'
    ]);
});



// understanding request and response cycle
Route::get('/',function(Request $request){
dd(
   " laravel 9",
   $request->path(),
   $request->is('/'),
   $request->fullUrl(),
   $request->host(),
   $request->httphost(),
   $request->schemeAndhttphost(),

   $request->routeIs('home'),
   $request->header('X-Header-Name'),
   $request->header('X-Header-Name','default'),
   $request->bearerToken(),
   $request->ip(),
   $request->prefers('text/html','application/json'),

);
}) ;
// Route::get('/about', function () {
//     return view('about',[
//         'page_name'=>'About page',
//         'name'=>'laravel 9 course'
//     ]);
// });
// // Route::get('/service/{service_id}/{service_name}', function ($service_id,$service_name) {
// //     return $service_id." ".$service_name;
// // })->name("sevice-page");
// // Route::get('/contact', function () {
// //     $page_name='contact page';
// //     $mobile='01871378161';
// //     return view('contact',compact('page_name','mobile'));
// // });
// Route::get('/contact', function () {
//     $page_name='contact page';
//     // $product_count='15';
//     // $color=['red','blue','green'];
//     $products=[
//         1=>[
//             'name'=>'Bag',
//             'color'=>'red',
//             'price'=>'1240'
//         ],
//         2=>[
//             'name'=>'Apple',
//             'color'=>'green',
//             'price'=>'250'
//         ]
//         ];
// $product_count=count($products);
//     return view('contact',compact('page_name',
//     'product_count',
//     'products'));
// })->name('contact');
// Route::get('/service',function(){
//     $services=[
//         'web Design',
//         'web Development',
//         'App Development',
//     ];
// return view('service',compact('services'));
// });
// // Route::get('/user/{id}/{name}',function($id,$name){
// //     echo $id,$name;

// // })->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);

// Route::get('/category/{category_name}',function($category_name){
// echo $category_name;
// })->WhereIn('category_name',['electronics','fusion','leptop']);

