<?php

use Illuminate\Http\Request;

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

// Styleguide
Route::get('styleguide', function () {
    return view('styleguide');
});

// Snapshot
Route::get('/', function () {
    return view('snapshot', ['page_title' => 'Snapshot']);
});

// Accounts
Route::get('accounts', function () {
    return view('accounts', ['page_title' => 'Accounts']);
});

// Contributions
Route::get('contributions', function () {
    return view('contributions.list', ['page_title' => 'Contributions']);
})->name('contributions.get');

Route::post('contributions', function (Request $request) {
    Log::error(print_r('post: new', true));
    Log::error(print_r($request->all(), true));

    return redirect('/contributions');
})->name('contributions.post');

Route::patch('contributions/{id}', function (Request $request, $id) {
    Log::error(print_r('patch: ' . $id, true));
    Log::error(print_r($request->all(), true));

    return redirect('/contributions');
})->name('contributions.patch');

Route::delete('contributions/{id}', function ($id) {
    Log::error(print_r('delete: ' . $id, true));

    return redirect('/contributions');
})->name('contributions.delete');

// Companies
Route::get('companies', function () {
    return view('companies.list', ['page_title' => 'Companies']);
})->name('companies.get');

Route::post('companies', function (Request $request) {
    Log::error(print_r('post: new', true));
    Log::error(print_r($request->all(), true));

    return redirect('/companies');
})->name('companies.post');

Route::patch('companies/{id}', function (Request $request, $id) {
    Log::error(print_r('patch: ' . $id, true));
    Log::error(print_r($request->all(), true));

    return redirect('/companies');
})->name('companies.patch');

Route::delete('companies/{id}', function ($id) {
    Log::error(print_r('delete: ' . $id, true));

    return redirect('/companies');
})->name('companies.delete');

// Categories
Route::get('categories', function () {
    return view('categories.list', ['page_title' => 'Categories']);
})->name('categories.get');

Route::post('categories', function (Request $request) {
    Log::error(print_r('post: new', true));
    Log::error(print_r($request->all(), true));

    return redirect('/categories');
})->name('categories.post');

Route::patch('categories/{id}', function (Request $request, $id) {
    Log::error(print_r('patch: ' . $id, true));
    Log::error(print_r($request->all(), true));

    return redirect('/categories');
})->name('categories.patch');

Route::delete('categories/{id}', function ($id) {
    Log::error(print_r('delete: ' . $id, true));

    return redirect('/categories');
})->name('categories.delete');

// Modals
Route::get('modal/{section}/{action}/{id?}', function ($section, $action, $id = null) {
    if ($action === 'delete') {
        $method = 'delete';
    } else {
        $method = (!empty($id)) ? 'patch' : 'post';
    }

    return view(($section . '.' . $action), ['id' => $id, 'method' => $method])->render();
});
