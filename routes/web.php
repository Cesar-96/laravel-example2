<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

use App\Country;
use App\Post;
use App\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {//static method for the ::
    return view('welcome');
});

//Route::get('/about', function () {//static method for the ::
//    return "Hi about page";
//});
//
//Route::get('/contact', function () {//static method for the ::
//    return "Hi I am contact";
//});
//
//Route::get('/post/{id}/{name}', function ($id,$name) {//static method for the ::
//    return "This is post number " . $id ." ". $name;
//});
//
//Route::get('admin/posts/example',array('as'=>'admin.home',function(){
//    $url = route('admin.home');
//
//    return "This url is " .$url;
//}));

//Section Routes-controller
//Route::get('/post',[PostsController::class, 'index']);
//
//Route::get('/post/{id}',[PostsController::class, 'index']);
//
//Route::get('/contact',[PostsController::class, 'contact']);
//
//Route::get('/posting/{id}/{name}/{pass}',[PostsController::class, 'posting']);
//
//Route::get('/link/{id}/{name}/{password}',[PostsController::class,'show_post']);
//
//Route::get('/insert',function(){
//    DB::insert('insert into posts(title,content) values (?,?)',['Pablito','Yucra']);
//});
//
//Route::get('/read',function(){
//   $results = DB::select('select * from posts where id = ?',[1]);
//   foreach($results as $post)
//       return $post->title;
//
//   //return var_dump($results);
//});
//
//Route::get('/update',function(){
//   $update = DB::update('update posts set title="Update title" where id =?',[1]);
//   return $update;
//});
//
//Route::get('/delete',function(){
//   $deleted = DB::delete('delete from posts where id=?',[1]);
//   return $deleted;
//});
//
//
///*
//Route::controller(PostsController::class)->group(function (){
//    Route::get('post','index');
//});
//*/
//
////Route::resource('posts','PostsController');
//
///*
//
//Route::group(['middleware'=>['web']],function(){
//
//});
//
//*/
///*
//---------------
//ELOQUENT
//-------------
//*/
//
//Route::get('/find',function (){
//   $posts = Post::all();
//   foreach ($posts as $post){
//       return $post->title;
//   }
//
//});
//
//
//Route::get('/encuen',function (){
//    $post = Post::find(2);
//        return $post->title;
//});
//
//
//Route::get('/findwhere',function(){
//    $posts = Post::where('id',2)->orderBy('id','desc')->take(1)->get();
//    return  $posts;
//});
//
//Route::get('/findmore',function(){
////    $posts = Post::findOrFail(1);
////    return $posts;
//    $posts = Posts::where('users_count','<',50)->firstOrFail();
//
//});
//
//Route::get('/basicinsert',function(){
//   $post = new Post;          //$post = Post::find(2);
//   $post->title = 'New Eloquent title insert';
//   $post->content = 'Wow elequent content';
//
//   $post->save();
//});
//
//Route::get('/basicinsert2',function(){
//    $post = Post::find(2);
//    $post->title = 'New Eloquent title insert';
//    $post->content = 'Wow elequent contentasdasdasd';
//
//    $post->save();
//});
//
//Route::get('/create',function(){
//   Post::create(['title'=>'the create method','content'=>'WOW I\'am learning a lot with Edwin Diaz']);
//});
//
//Route::get('/update2',function(){
//   Post::where('id',2)->where('is_admin',0)->update(['title'=>'NEW PHP TITLE','content'=>'I LOVE MY NEW PHP TITLE']);
//});
//
//Route::get('/delete',function(){
//    $post=Post::find(2);
//    $post->delete();
//});
//
//Route::get('/delete2',function(){
//    Post::destroy(3);//can be ([4,5]);
//});
//
//Route::get('/softdelete',function (){
//    Post::find(3)->delete();
//});
//
//
//Route::get('/readsoftdelete',function (){
////    $post= Post::find(3);
////    return $post;
//    $post = Post::withTrashed()->where('id',3)->get();
//    return $post;
//
//});
//
//
//Route::get('/readsoftdelete2',function (){
////    $post= Post::find(3);
////    return $post;
//    $post = Post::onlyTrashed('is_admin',0)->get();
//    return $post;
//
//});
//
//
//Route::get('/restore',function(){
//   Post::withTrashed()->where('is_admin',0)->restore();
//});
//
//
////delete all data
//Route::get('/forcedelete',function (){
//    Post::withTrashed()->where('is_admin',0)->forceDelete();
//});
//
////onlytrashed items
//Route::get('/forcedelete',function (){
//    Post::onlyTrashed()->where('is_admin',0)->forceDelete();
//});

/*
---------------
ELOQUENT Relationships
-------------
*/

////one to one relationship
//Route::get('/user/{id}/post',function($id){
//
//    return User::find($id)->post;
//
//});
//
//
//Route::get('/post/{id}/user',function ($id){
//
//    return Post::find($id)->user->name;
//
//});

//ONE TO MANY RELATIONSHIP
//Route::get('/posts',function () {
//
//    $user = User::find(1);
//
//    foreach ($user->posts as $post){
//        echo $post->title . "<br>";
//    }
//
//});


//MANY TO MANY RELATIONSHIP

//Route::get('user/{id}/role',function($id){
//    $user = User::find($id)->roles()->orderBy('id','desc')->get();
//    return $user;
////
////    foreach($user->roles as $role)
////    {
////        return $role->name;
////    }
//});


//MANY TO MANY RELATIONSHIP
//Accessing the intermediate table / pivot
//Route::get('user/pivot',function (){
//
//    $user=User::find(3);
//
//    foreach($user->roles as $role)
//    {
//        return $role->pivot->created_at;
//    }
//
//});
//
//Route::get('/user/country',function (){
//
//    $country = Country::find(3);
//    foreach ($country->posts as $post){
//        return $post->title;
//    }
//});

//POLYMORPIC RELATIONS

//Route::get('/user/photos',function (){
//    $user = User::find(1);
//    foreach($user->photos as $photo)
//    {
//        return $photo->path;
//    }
//});
//
//Route::get('/post/photos',function (){
//    $post = Post::find(1);
//    foreach($post->photos as $photo)
//    {
//        echo $photo->path .'<br>';
//    }
//});


//CRUD APPLICATION

Route::resource('/posts','PostsController');
