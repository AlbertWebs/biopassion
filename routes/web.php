<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TestController;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/who-we-are', [App\Http\Controllers\HomeController::class, 'who'])->name('who-we-are');
Route::get('/home-sample-collection', [App\Http\Controllers\HomeController::class, 'collection'])->name('home-sample-collection');
Route::get('/book-home-sample-collection', [App\Http\Controllers\HomeController::class, 'book'])->name('book-home-sample-collection');
Route::post('/book-home-sample-collection-post', [App\Http\Controllers\HomeController::class, 'book_post'])->name('book-home-sample-collection-post');
Route::get('/make-an-appointment', [App\Http\Controllers\HomeController::class, 'contact'])->name('make-an-appointment');
Route::post('/send-message', [App\Http\Controllers\HomeController::class, 'send_message'])->name('send-message');
Route::post('/make-an-appointment', [App\Http\Controllers\HomeController::class, 'appointment'])->name('make-an-appointment');
Route::get('/pricelist', [App\Http\Controllers\HomeController::class, 'pricelist'])->name('pricelist');
Route::get('/careers', [App\Http\Controllers\HomeController::class, 'careers'])->name('careers');
Route::get('/test-lists', [App\Http\Controllers\HomeController::class, 'testLists'])->name('test-lists');
Route::redirect('/Test-lists', '/test-lists', 301); // Redirect old capital case to lowercase

// Test Detail and Booking Routes
Route::get('/test/{slug}', [App\Http\Controllers\HomeController::class, 'testDetail'])->name('test-detail');
Route::get('/book-test/{slug}', [App\Http\Controllers\HomeController::class, 'bookTest'])->name('book-test');
Route::post('/book-test/{slug}', [App\Http\Controllers\HomeController::class, 'bookTestPost'])->name('book-test.post');



Route::get('/wp', [App\Http\Controllers\HomeController::class, 'index'])->name('fix');


Route::get('/what-we-do', [App\Http\Controllers\HomeController::class, 'what'])->name('what-we-do');
Route::get('/what-we-do/{slung}', [App\Http\Controllers\HomeController::class, 'what_single'])->name('what-we-do-single');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact-us');
Route::get('/best-lab-consultants', [App\Http\Controllers\HomeController::class, 'best'])->name('best-lab-consultants');

// Maintenance Mode Routes (Unique and secure)
Route::get('/system/health-check/{token}', [App\Http\Controllers\HomeController::class, 'enableMaintenanceMode'])->name('system.health.enable');
Route::get('/system/status-update/{token}', [App\Http\Controllers\HomeController::class, 'disableMaintenanceMode'])->name('system.health.disable');
Route::get('/terms-and-conditions', [App\Http\Controllers\HomeController::class, 'terms'])->name('terms-and-conditions');
Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'privacy'])->name('privacy-policy');

Route::group(['prefix'=>'patients'], function(){
    Route::group(['prefix'=>'get-tested'], function(){
        Route::get('/conditions', [App\Http\Controllers\HomeController::class, 'conditions'])->name('conditions');
        Route::get('/prepare', [App\Http\Controllers\HomeController::class, 'prepare'])->name('prepare');
        Route::get('/infertility', [App\Http\Controllers\HomeController::class, 'infertility'])->name('infertility');

    });

    Route::group(['prefix'=>'biopassion-OnDemand-tests'], function(){
        Route::get('/fertility-testing-and-support-at-biopassion-diagnostics', [App\Http\Controllers\HomeController::class, 'fertility_testing'])->name('fertility-testing-and-support-at-biopassion-diagnostics');
        Route::get('/sexual-transmited-diseases-stisstds-testing', [App\Http\Controllers\HomeController::class, 'sexual_transmited'])->name('sexual-transmited-diseases-stisstds-testing');
        Route::get('/dna-paternity-testing', [App\Http\Controllers\HomeController::class, 'dna_paternity_testing'])->name('dna-paternity-testing');
        Route::get('/health-checkup', [App\Http\Controllers\HomeController::class, 'health_checkup'])->name('health-checkup');


    });

    Route::group(['prefix'=>'billing-insurance'], function(){
        Route::get('/understanding-the-cost-of-your-care', [App\Http\Controllers\HomeController::class, 'costing'])->name('understanding-the-cost-of-your-care');
        Route::get('/estimate', [App\Http\Controllers\HomeController::class, 'estimate'])->name('estimate');
        Route::post('/estimate-bill', [App\Http\Controllers\HomeController::class, 'estimate_bill'])->name('estimate-bill');
    });

    Route::group(['prefix'=>'test-results'], function(){
        Route::get('/family-results', [App\Http\Controllers\HomeController::class, 'family_results'])->name('family-results');
    });

    Route::group(['prefix'=>'test-results'], function(){
        Route::get('/drugs-of-abuse', [App\Http\Controllers\HomeController::class, 'abuse'])->name('drugs-of-abuse');
    });

});
Route::group(['prefix'=>'healthcare-professionals'], function(){
    Route::group(['prefix'=>'test-directory'], function(){
        Route::get('/', [App\Http\Controllers\HomeController::class, 'directory'])->name('test-directory');
    });
    Route::group(['prefix'=>'about-our-tests'], function(){
        Route::get('/allergy-asthma', [App\Http\Controllers\HomeController::class, 'asthma'])->name('allergy-asthma');
        Route::get('/arthritis', [App\Http\Controllers\HomeController::class, 'arthritis'])->name('arthritis');
        Route::get('/autoimmune-diseases', [App\Http\Controllers\HomeController::class, 'autoimmune'])->name('autoimmune-diseases');
        Route::get('/cancer', [App\Http\Controllers\HomeController::class, 'cancer'])->name('cancer');
        Route::get('/cardiovascular-disease', [App\Http\Controllers\HomeController::class, 'cardiovascular'])->name('cardiovascular-disease');
        Route::get('/fertility-testing', [App\Http\Controllers\HomeController::class, 'fertility'])->name('fertility-testing');
    });
    Route::group(['prefix'=>'billing-coding'], function(){
        Route::get('/pay-a-bill', [App\Http\Controllers\HomeController::class, 'pay_bill'])->name('pay-a-bill');
        Route::get('/commercial-coverage-and-coding-guidelines', [App\Http\Controllers\HomeController::class, 'guidelines'])->name('commercial-coverage-and-coding-guidelines');
    });

    Route::group(['prefix'=>'clinical-experts-education'], function(){
        Route::get('/clinical-experts', [App\Http\Controllers\HomeController::class, 'clinical'])->name('clinical-experts');
        Route::get('/clinical-education-center', [App\Http\Controllers\HomeController::class, 'clinical_education'])->name('clinical-education-center');
        Route::get('/diagnostic-insights', [App\Http\Controllers\HomeController::class, 'diagnostic_insights'])->name('diagnostic-insights');
    });
});

Route::group(['prefix'=>'business-and-organization'], function(){
        Route::get('/employee-screening', [App\Http\Controllers\HomeController::class, 'employee_screening'])->name('employee-screening');
        Route::get('/corporate-wellness', [App\Http\Controllers\HomeController::class, 'corporate_welness'])->name('corporate-wellness');
        Route::get('/emloyee-health-coaching', [App\Http\Controllers\HomeController::class, 'coaching'])->name('emloyee-health-coaching');
        Route::get('/drug-free-workplace', [App\Http\Controllers\HomeController::class, 'workplace'])->name('drug-free-workplace');
});

Route::group(['prefix'=>'health-systems-and-hospitals'], function(){
    Route::get('/outreach-partnerships', [App\Http\Controllers\HomeController::class, 'outreach'])->name('outreach-partnerships');
    Route::get('/collaborative-lab-solutions', [App\Http\Controllers\HomeController::class, 'collaborative'])->name('collaborative-lab-solutions');
    Route::get('/lab-testing-consultation', [App\Http\Controllers\HomeController::class, 'consultation'])->name('lab-testing-consultation');
    Route::get('/clinical-trials-testing', [App\Http\Controllers\HomeController::class, 'trials'])->name('clinical-trials-testing');
    Route::get('/sposored-testing', [App\Http\Controllers\HomeController::class, 'sposored'])->name('sposored-testing');
});


Auth::routes();
Route::get('/home', [PatientController::class, 'index'])->name('user-dashboard');
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::group(['prefix'=>'dashboard'], function(){
        Route::get('/', [PatientController::class, 'index'])->name('dashboard');
        Route::get('/home', [PatientController::class, 'index'])->name('user-dashboard');
        Route::get('/my-results', [PatientController::class, 'results'])->name('my-results');
        Route::get('/my-appointments', [PatientController::class, 'results'])->name('my-appointments');
        Route::get('/my-profile', [PatientController::class, 'profile'])->name('dashboard.profile');
        Route::post('/admin/update-my-profile', [PatientController::class, 'update_profile'])->name('update-my-profile');
    });
});

/*------------------------------------------
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
    Route::group(['prefix'=>'doctor'], function(){

    });

});


/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [AdminController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::post('/admin/update-profile', [AdminController::class, 'update_profile'])->name('update-profile');

    //Results
    Route::get('/admin/addResults/{id}', [AdminController::class, 'addResults'])->name('admin.addResults');
    Route::get('/admin/results', [AdminController::class, 'results'])->name('admin.results');

    Route::get('/admin/patients', [AdminController::class, 'patients'])->name('admin.patients');
    Route::get('/admin/deleteResults/{id}', [AdminController::class, 'deleteResults'])->name('admin.deleteResults');

    // Tests Management
    Route::resource('admin/tests', TestController::class)->names([
        'index' => 'admin.tests.index',
        'create' => 'admin.tests.create',
        'store' => 'admin.tests.store',
        'edit' => 'admin.tests.edit',
        'update' => 'admin.tests.update',
        'destroy' => 'admin.tests.destroy',
    ]);
});



