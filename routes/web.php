<?php

use App\Http\Controllers\viewsController;
use App\Models\password_resets;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
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
    return view('index');
});

Route::get('/programs/Demoday', [viewsController::class, 'Demoday'])->name('programs.demoday');
Route::get('/programs/Hackathon', [viewsController::class, 'Hackathon'])->name('programs.hackathon');
Route::get('/programs/Hackathon/login', [viewsController::class, 'Login'])->name('hackathon.logins');

Route::get('login/google', [viewsController::class, 'redirectToProvider'])->name('login.auth');
Route::get('/callback', [viewsController::class, 'handleProviderCallback']);

Route::get('login/github', [viewsController::class, 'redirectToProviderGithub'])->name('login.github');
Route::get('/callback/github', [viewsController::class, 'handleProviderCallbackGithub']);
//Hackathon view
Route::get('/hackathon/view/{id}', [viewsController::class, 'ViewModal']);
//apply for propsal login
Route::get('/hackathon/apply/{id}', [viewsController::class, 'ApplyLogin'])->name('hackathon.apply');

Route::group(['middleware' => 'session'], function () {
    Route::get('/user/dashboard/{id?}', [viewsController::class, 'Dashboard'])->name('user.dashboard');
    Route::get('/user/apply/{id?}', [viewsController::class, 'Apply'])->name('user.apply');
    Route::post('/user/apply/proposal/{id?}', [viewsController::class, 'ProposalStore'])->name('proposal.store');
    Route::get('/user/profile/{id?}', [viewsController::class, 'Profile'])->name('user.profile');
    Route::match(['post', 'get'], '/user/{id}/edit', [viewsController::class, 'Edit'])->name('proposal.edit');
    Route::put('/user/{id}/edit/update', [viewsController::class, 'Update'])->name('proposal.update');
    Route::get('/user/dashboard/view/{id}', [viewsController::class, 'ProposalModal']);
    Route::put('/user/profile/edit', [viewsController::class, 'ProfileEdit'])->name('profile.edit');
});

Route::get('/logout', [viewsController::class, 'Logout']);



Route::get('pdf', function () {
    $pdf  = App::make('dompdf.wrapper');
    $pdf->loadView('pdf');
    //return view('pdf');
    return $pdf->stream();
});
