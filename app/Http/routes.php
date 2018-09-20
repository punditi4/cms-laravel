<?php

use App\Post;
use App\User;
use App\Country;
use App\Photo;


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/






//Route::get('/', function () {

//    return view('welcome');
//});





/*
Route::get('/about', function () {

    return "Hi aboout";
});

Route::get('/contact', function () {

    return "i'm contact";
});

Route::get('/post/{id}/{name}', function($id, $name){

    return "This is post numer" . $id ." " . $name;

});


Route::get('/admin/posts/example', array('as'=>'admin.home' , function () {

    $url = route('admin.home');

    return $url;
}));

Route::get('/post/{id}', 'PostsController@index');

*/
//Route::resource('posts', 'PostsController');

//Route::get('/contact', 'PostsController@contact');

//Route::get('post/{id}/{name}/{password}', 'PostsController@show_post');


/*
 *
 *
 */

//Route::get('/insert', function () {


//    DB::insert('insert into posts(title, content) value (?, ?)', ['Php com laravel', 'laravel foi a melhor coisa bla bla bla']);

//});

//Route::get('/read', function (){

// $results = DB::select('select * from posts where id = ?', [1]);

// return $results;

//    foreach ($results as $post){

 //       return $post->title;
 //   }


//});


//Route::get('/update', function (){

//    $updated = DB::update('update posts set title = "Update title" where id = ?', [1]);

//    return $updated;


//});


//Route::get('/delete', function (){

//    $deleted = DB::delete('delete from posts where id = ?', [1]);

//    return $deleted;


//});


//Route::get('/read', function (){
//    $posts = Post::all();
//    foreach ($posts as $post){
//        return $post->title;
//    }
//});


//Route::get('/find', function (){
//    $post = Post::find(2);
//
//    return $post->title;
//
//});


//Route::get('/findwhere', function (){
//
//    $posts = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();
//
//    return $posts;
//
//});

//Route::get('/findmore', function (){
//
// //   $posts = Post::findOrFail(1);
// //   return $posts;
//
//    $posts = Post::where('users_count', '<', 50)->firtsOrFail();
//
//});


//Route::get('/basicinsert', function (){
//
//    $post = new Post;
//
//    $post->title = "Novo titulo";
//    $post->content = "novo conteudo";
//    $post->save();
//
//});


//Route::get('/basicinsert2', function (){
//
//    $post = Post::find(2);
//
//    $post->title = "Novo titulo 2";
//    $post->content = "novo conteudo 2";
//    $post->save();
//
//});


//Route::get('/create', function (){
//
//    Post::create(['title'=>'the create', 'content'=>'conteudooo']);
//
//});


//Route::get('/update', function (){
//
//    Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'udpt titile', 'content' => 'new content']);
//
//
//});


//Route::get('/delete', function (){
//
//    $post = Post::find(2);
//
//    $post->delete();
//
//
//
//});


//Route::get('/delete2', function (){
//
//   Post::destroy([4,5]);
//
////    Post::where('is_admin', 0)->delete();
//
//});


//Route::get('/softdelete', function (){
//
//Post::find(9)->delete();
//
//});


//Route::get('/reaadsoftdelete', function (){
//
////   $post = Post::find(6);
////    return $post;
//
//    $post = Post::withTrashed()->where('is_admin', 0)->get();
//    return $post;
//
//
////    $post = Post::onlyTrashed()->where('is_admin', 0)->get();
////
////    return $post;
//
//});


//Route::get('/restore', function (){
//
//    Post::withTrashed()->where('is_admin', 0)->restore();
//
//
//});



//Route::get('/forcedelete', function (){
//
//    Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
//
//
//});



//Route::get('/user/{id}/post', function ($id){
//
//    return User::find($id)->post;
//
//});
//
//
//Route::get('/post/{id}/user', function ($id){
//
//    return Post::find($id)->user->name;
//
//});

//
//Route::get('/posts', function (){
//
//    $user = User::find(1);
//
//    foreach ($user->posts as $post){
//      echo  $post->title . "<br>";
//    }
//});


//Route::get('/user/{id}/role', function ($id){
//
//    $user = User::find($id);
//    foreach ($user->roles as $role){
//        return $role->name;
//
//    }
//
//});


//Route::get('/user/pivot', function (){
//
//    $user = User::find(1);
//
//    foreach ($user->roles as $role){
//
//       // return $role->pivot;
//        echo $role->pivot->created_at;
//
//    }
//
//});

//Route::get('/user/country', function (){
//
//    $country = Country::find(4);
//
//    foreach ($country->posts as $post)
//
//        return $post->title;
//
//});


//Route::get('/user/photos', function (){
//
//    $user = User::find(1);
//    foreach ($user->photos as $photo){
//        return $photo;
//    }
//
//
//});
//
//
//Route::get('/post/{id}/photos', function ($id){
//
//    $post = Post::find($id);
//    foreach ($post->photos as $photo){
//        echo $photo->path . "<br>";
//    }
//
//
//});


//Route::get('/photo/{id}/post', function ($id){
//
//    $photo = Photo::findOrFail($id);
//
//    return $photo->imageable;
//
//
//
//});

//Route::get('/post/tag', function (){
//
//    $post = Post::find(1);
//
//    foreach ($post->tags as $tag){
//     echo $tag->name;
//    }
//});

Route::get('/tag/post', function (){
   $tag = \App\Tag::find(2);

    foreach ($tag->posts as $post){
        echo $post->title;
    }


});








/*

Route::group(['middleware' => ['web']], function (){

});
*/


