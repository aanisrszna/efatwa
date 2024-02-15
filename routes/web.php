<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FatwaController;



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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [FatwaController::class, 'index']);
// routes/web.php

use App\Http\Controllers\Auth\LoginController;

// Fatwa Function
Route::get('/fatwas/create', [FatwaController::class, 'create'])->name('fatwas.create');
Route::delete('/fatwas/delete/{id}', [FatwaController::class, 'delete'])->name('fatwas.delete');
Route::get('/fatwas/{id}/edit', [FatwaController::class, 'edit'])->name('fatwas.edit');
Route::put('/fatwas/{id}/update', [FatwaController::class, 'update'])->name('fatwas.update');
Route::get('/fatwas/view', [FatwaController::class, 'view'])->name('fatwas.view');
Route::get('/fatwas/show/{id}', [FatwaController::class, 'show'])->name('fatwas.show');
Route::get('/fatwas/manage', [FatwaController::class, 'manage'])->name('fatwas.manage');

Route::get('/fatwas/search', [FatwaController::class, 'search'])->name('fatwas.search');
Route::get('/fatwas/searchManage', [FatwaController::class, 'searchManage'])->name('fatwas.searchManage');

Route::get('/fatwas/searchView', [FatwaController::class, 'searchView'])->name('fatwas.searchView');
Route::post('/fatwas/store', [FatwaController::class, 'store'])->name('fatwas.store');

//FAQ
Route::get('/fatwas/', [FatwaController::class, 'index'])->name('fatwas.index');


Route::post('/fatwas/submitquery', [FatwaController::class, 'submitQuery'])->name('fatwas.query');
Route::get('/fatwas/answer/{id}', [FatwaController::class, 'answer'])->name('fatwas.answer');
Route::post('/fatwas/faqstore', [FatwaController::class, 'answerstore'])->name('fatwas.faqstore');


Route::get('fatwas/viewfaq', [FatwaController::class, 'viewFAQ'])->name('fatwas.viewfaq');
//REPORT
Route::get('/fatwas/report/{year?}', [FatwaController::class, 'report'])->name('fatwas.report');


Route::get('/organisasi', function () {
    return view('organisasi'); // Assuming 'organisasi.blade.php' is in the 'resources/views' directory
})->name('organisasi');


Route::get('/fatwas/searchFAQ', [FatwaController::class, 'searchFAQ'])->name('fatwas.searchFAQ');
Route::get('/fatwas/searchFAQuser', [FatwaController::class, 'searchFAQuser'])->name('fatwas.searchFAQuser');

// Add a custom route for managing fatwas
Route::get('fatwas/managefaq', [FatwaController::class, 'managefaq'])->name('fatwas.managefaq');

// Add a custom route for deleting fatwas
//Route::delete('fatwas/deletefaq/{id}', 'FatwaController@deletefaq')->name('fatwas.deletefaq');

Route::delete('fatwas/deletefaq/{id}', [FatwaController::class, 'deletefaq'])->name('fatwas.deletefaq');

// Add a custom route for editing fatwas
Route::get('fatwas/editfaq/{id}', [FatwaController::class, 'editfaq'])->name('fatwas.editfaq');

// Add a custom route for updating fatwas
Route::put('fatwas/updatefaq/{id}', [FatwaController::class, 'updatefaq'])->name('fatwas.updatefaq');

// web.php

use App\Http\Controllers\HomeController;

Route::get('/home', [HomeController::class, 'count'])->name('count');


// routes/web.php

use App\Http\Controllers\AuthController;
Route::get('/logout', [AuthController::class, 'showLogoutConfirmation'])->name('logout.confirmation');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');




// routes/web.php

// routes/web.php

// Other routes...

use App\Http\Controllers\AdminController;

// Route to show the admin registration form
Route::get('/admin/register', [AdminController::class, 'showAdminForm'])->name('admin.register');

// Route to handle admin registration form submission
Route::post('/admin/register', [AdminController::class, 'registerAdmin'])->name('admin.register.submit');

// Add a route for a success page (optional)
Route::get('/admin/success', function () {
    return 'Admin registered successfully!';
})->name('admin.success');

use App\Http\Controllers\WhatsappController;

Route::get('/send-whatsapp-message/{id}', [WhatsappController::class, 'sendWhatsappMessage']);
