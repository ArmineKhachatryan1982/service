<?php

use App\Http\Controllers\AuthorInfo\AuthorInfoController;
use App\Http\Controllers\AuthorInfoStoreController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Component\ComponentController;
use App\Http\Controllers\QuestionCountController;
use App\Http\Controllers\QuestionTypeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Test\TestController;
use App\Http\Controllers\Test\UserTestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

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
Route::redirect('/','/en');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});




    Route::group(['prefix' => '{language}'], function () {

        Route::get('/', function () {
            return view('welcome');
        })->name('welcome');

     Route::group(['prefix' => 'author'], function ($router) {

        Route::get('register', AuthorInfoController::class)->name('author-info');

        Route::post('test', AuthorInfoStoreController::class)->name('author-test');
        Route::get('/category-type',CategoryController::class)->name('category_type');
        // post anwum enq wor formen ashxati gwujnic el anwum enq wor ejy veradarzni
        Route::post('/question-count',QuestionCountController::class)->name('question_count');
        Route::get('/question-count',[QuestionCountController::class,'show'])->name('question_count_get');
        Route::post('/question-type', QuestionTypeController::class)->name('question_type');

        Route::group(['prefix'=>'test'], function ($router) {
            Route::get('componenet/{value}', ComponentController::class);
            Route::post('/store',TestController::class)->name('test-store');

        });
    });

    Route::get('test/{link}',UserTestController::class);
    });


