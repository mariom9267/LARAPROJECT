<?php

use Illuminate\Http\Request;
use Psy\Command\WhereamiCommand;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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

Route::get('/',[FrontController::class,'home'])->name('home');

// Route::get('/login', function(){
//     return('login');
// })->name('login');




Route::get('/about',[FrontController::class,('about')]);

Route::get('/service',[FrontController::class,('service')])->name('service');
Route::get('contact',[FrontController::class,('contact')]);


//     redirect('/contact');
// })->name('about');
// // Route::get('/service/{service_id}/{service_name}', function ($service_id,$service_name) {
// //     return $service_id." ".$service_name;
// // })->name("sevice-page");
// Route::get('/contact', function () {
//     $page_name='contact page';
//     $mobile='01871378161';
//     return view('contact',compact('page_name','mobile'));
// });
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
//         ],
//         ];
// $product_count=count($products);
// return response()->json([
//     'products'=>$products,
//     'product_count'=>$product_count,
// ], 200)->header('content-type','application/json')
//        ->cookie('My_IDCard','maria',3600);;
//     // return view('contact',compact('page_name',
//     // 'product_count',
//     // 'products'));
// })->name('contact');

// Route::get('/course-content/download',function(){
//     return response()->download(public_path('/Mariom_Akter_1269267.pdf'),'laravel 9 Master Mariom_Akter_1269267.pdf');
// });




// // Route::get('/service',function(){
// //     $services=[
// //         'web Design',
// //         'web Development',
// //         'App Development',
// //     ];
// // return view('service',compact('services'));
// // });
// // // Route::get('/user/{id}/{name}',function($id,$name){
// // //     echo $id,$name;

// // // })->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);

// // Route::get('/category/{category_name}',function($category_name){
// // echo $category_name;
// // })->WhereIn('category_name',['electronics','fusion','leptop']);

// Route::prefix('admin')->name('laravel')->group(function(){
//     Route::get('/home', function(){
//         return view('home');
//     })->name('home');
//     Route::get('/about', function(){
//         return view('about');
//     })->name('about');
//     Route::get('/contact', function(){
//         return view('contact');
//     })->name('contact');
//     Route::get('/service', function(){
//         return view('service');
//     })->name('service');
// });
// Route::prefix('superadmin')->name('superadmin.')->group(function(){
//     Route::get('/home', function(){
//         return view('home');
//     })->name('home');
//     Route::get('/about', function(){
//         return view('about');
//     })->name('about');
//     Route::get('/contact', function(){
//         return view('contact');
//     })->name('contact');
//     Route::get('/service', function(){
//         return view('service');
//     })->name('service');
// });






Route::get('/send',[FrontController::class,'send'])->name('send');
