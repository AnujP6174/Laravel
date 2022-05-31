<?php

use App\Http\Controllers\usercontroller;
use Illuminate\Database\Eloquent\Factories\Relationship;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;


Route::get('/', function () {
    // $users = User::with(relations: 'getAddressRelation', 'getPostRelation')->get();
    $posts = Post::with(relations: 'getUserRelation')->get();
    dd($posts);
    return view('welcome');
});

Route::resource('some', usercontroller::class);

Route::group(['middleware' => ['auth'], 'prefix' => ['user']]);
