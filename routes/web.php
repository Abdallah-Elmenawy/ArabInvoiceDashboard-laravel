<?php

// Incloude Controller -> HomeController
use App\Http\Controllers\HomeController;
// Incloude Controller -> AdminController
use App\Http\Controllers\AdminController;
// Incloude Controller -> InvoicesController
use App\Http\Controllers\InvoicesController;
// Incloude Controller -> SectionsController
use App\Http\Controllers\SectionsController;
// Incloude Controller -> ProductsController
use App\Http\Controllers\ProductsController;
// Incloude Controller -> InvoicesDetailsController
use App\Http\Controllers\InvoicesDetailsController;
// Incloude Controller -> InvoiceAttachmentsController
use App\Http\Controllers\InvoiceAttachmentsController;
// Incloude Controller -> InvoiceAchiveController
use App\Http\Controllers\InvoiceAchiveController;
// Incloude Controller -> UserController
use App\Http\Controllers\UserController;
// Incloude Controller -> RoleController
use App\Http\Controllers\RoleController;
// Incloude Controller -> Invoices_Report
use App\Http\Controllers\Invoices_Report;
// Incloude Controller -> Customers_Report
use App\Http\Controllers\Customers_Report;
use Illuminate\Support\Facades\Route;

// Incloude Authentication on Routes
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});
Auth::routes();
// Auth::routes(['register'=> false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('invoices', InvoicesController::class);
Route::resource('sections', SectionsController::class);
Route::resource('products', ProductsController::class);
Route::resource('InvoiceAttachments', InvoiceAttachmentsController::class);

Route::get('/section/{id}', [InvoicesController::class, 'getproducts']);
Route::get('/InvoicesDetails/{id}', [InvoicesDetailsController::class, 'edit']);
Route::get('download/{invoice_number}/{file_name}', [InvoicesDetailsController::class, 'get_file']);
Route::get('View_file/{invoice_number}/{file_name}', [InvoicesDetailsController::class, 'open_file']);
Route::post('delete_file', [InvoicesDetailsController::class, 'destroy'])->name('delete_file');
Route::get('/edit_invoice/{id}', [InvoicesController::class, 'edit']);
Route::get('/Status_show/{id}', [InvoicesController::class, 'show'])->name('Status_show');
Route::post('/Status_Update/{id}', [InvoicesController::class, 'Status_Update'])->name('Status_Update');
Route::get('Invoice_Paid', [InvoicesController::class, 'Invoice_Paid'])->name('Invoice_Paid');
Route::get('Invoice_unPaid', [InvoicesController::class, 'Invoice_unPaid'])->name('Invoice_unPaid');
Route::get('Invoice_Partial', [InvoicesController::class, 'Invoice_Partial'])->name('Invoice_Partial');
Route::resource('Archive', InvoiceAchiveController::class);
Route::get('Print_invoice/{id}', [InvoicesController::class, 'Print_invoice'])->name('Print_invoice');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});
Route::get('invoices_report', [Invoices_Report::class, 'index']);
Route::post('Search_invoices', [Invoices_Report::class, 'Search_invoices']);
Route::get('customers_report', [Customers_Report::class, 'index'])->name("customers_report");
Route::post('Search_customers', [Customers_Report::class, 'Search_customers']);
Route::get('/user/chart', 'UserController@showChart');
Route::get('/{page}', [AdminController::class, 'index']);
