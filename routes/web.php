<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientController;
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
Route::get('/what-we-do', [App\Http\Controllers\HomeController::class, 'what'])->name('what-we-do');
Route::get('/what-we-do/{slung}', [App\Http\Controllers\HomeController::class, 'what_single'])->name('what-we-do-single');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact-us');
Route::get('/terms-and-conditions', [App\Http\Controllers\HomeController::class, 'terms'])->name('terms-and-conditions');
Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'privacy'])->name('privacy-policy');

Route::group(['prefix'=>'patients'], function(){
    Route::group(['prefix'=>'get-tested'], function(){
        Route::get('/conditions', [App\Http\Controllers\HomeController::class, 'conditions'])->name('conditions');
        Route::get('/prepare', [App\Http\Controllers\HomeController::class, 'prepare'])->name('prepare');
        Route::get('/infertility', [App\Http\Controllers\HomeController::class, 'infertility'])->name('infertility');
    });

    Route::group(['prefix'=>'billing-insurance'], function(){
        Route::get('/understanding-the-cost-of-your-care', [App\Http\Controllers\HomeController::class, 'costing'])->name('understanding-the-cost-of-your-care');
        Route::get('/estimate', [App\Http\Controllers\HomeController::class, 'estimate'])->name('estimate');
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
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [PatientController::class, 'index'])->name('the-dashboard');
    Route::get('/dashboard', [PatientController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/my-results', [PatientController::class, 'results'])->name('my-results');
    Route::get('/dashboard/my-appointments', [PatientController::class, 'results'])->name('my-appointments');
    Route::get('/dashboard/my-profile', [PatientController::class, 'results'])->name('profile');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});



