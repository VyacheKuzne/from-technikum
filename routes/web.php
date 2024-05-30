<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController; // Добавлен импорт UserController

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

Route::get('/', function () {
    return view('pages.index');
})->name('main_page');

// Route::post('/sing_up', [UserController::class, 'submit'])->name('login');

// Route::get('/user/index', function () {
//     return view('pages.index');
// });

// Route::get('/sing_up', function () {
//     return view('aotitification.sign_up');
// })->name('register');

Route::name('log_in.')->group(function () {
    Route::get('/index', [UserController::class, 'index'])->middleware('auth')->name('index');
    Route::get('/login', function () {
        if (Auth::check()) {
            return redirect(route('log_in.index'));
        }
        return view('aotitification.login');
    })->name('login');

    Route::post('/login', [LoginController::class, 'login_user']);

    Route::get('/logout', function () {
        Auth::logout();
        return redirect(route('log_in.login'));
    })->name('logout');

    Route::get('/registr', function () {
        if (Auth::check()) {
            return redirect(route('log_in.index'));
        }
        return view('aotitification.sign_up');
    })->name('registr');

    Route::post('/registr', [UserController::class, 'submit']);
    


});

// Route::get('/use', function () {
//     return view('admin');
// });


// Define the admin guard
Route::name('admin.')->group(function () {
    Route::view('/admin_user_table', 'admin.all_user')->middleware('auth:admin')->name('user_table');
    Route::get('/admin_login', [AdminController::class, 'date'] )
    ->name('admin_login');

    Route::get('/admin_user_table', [AdminController::class, 'date'] )->name('user_table');
    Route::post('/admin_login', [LoginController::class, 'login_admin']);

    Route::get('/admin_logout', function () {
        Auth::guard('admin')->logout();
        return redirect(route('admin.admin_login'));
    })->name('admin_logout');

    Route::get('/admin_registr', function () {
        if (Auth::guard('admin')->check()) {
            return redirect(route('admin.user_table'));
        }
        return view('admin.sign_up');
    })->name('admin_registr');

    Route::post('/admin_registr', [AdminController::class, 'submit']);


    



    Route::get('/admin/all/{id}', [AdminController::class, 'show'])
        ->name('login_date_show');

    Route::get('/admin/all/{id}/update', [AdminController::class, 'update'])
        ->name('login_date_update');

    Route::post('/admin/all/{id}/update', [AdminController::class, 'update_submit'])
        ->name('login_date_update_submit');

    Route::get('/admin/all/{id}/delete', [AdminController::class, 'user_delete'])
        ->name('login_date_delete');

    Route::get('/admin/all', [AdminController::class, 'date'])
        ->name('login_date');

    Route::post('/admin', [AdminController::class, 'submit'])
       ->name('login_in');

    //    НУЖНО ДОРАБАТЫВАТЬ
        Route::get('/admin/show_restoran', [AdminController::class, 'show_all_restoran'])
       ->name('restoran');

       Route::get('/admin/create_restoran', function(){
        return view('create.craete_new_restoran');
       }) 
       -> name('create_restoran');
       Route::post('/admin/create_restoran', [AdminController::class, 'create_restoran']);
});






// Route::name('curier.')->prefix('curier')->middleware('curier')->group(function () {
//     Route::get('/orders', [AdminController::class, 'orders'])->name('orders');
    
//     Route::get('/curier_login', function () {
//         if (Auth::guard('curier')->check()) {
//             return redirect()->route('curier.orders');
//         }
//         return view('curier.admin_login');
//     })->name('curier_login');

//     Route::post('/curier_login', [AdminController::class, 'login'])->name('login_post');

//     Route::get('/curier_logout', function () {
//         Auth::guard('curier')->logout();
//         return redirect()->route('curier.login');
//     })->name('curier_logout');
// });
        // Route::get('/registr', function () {
        //     if (Auth::check()) {
        //         return redirect(route('log_in.index'));
        //     }
        //     return view('aotitification.sign_up');
        // })->name('registr');
    
        // Route::post('/registr', [UserController::class, 'submit']);