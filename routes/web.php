<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DemostratorController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\Course_unitController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\RepeatController;
use App\Http\Controllers\PaymentController;


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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');


});//end group admin middleware

Route::middleware(['auth','role:demostrator'])->group(function(){
Route::get('/demostrator/dashboard', [DemostratorController::class, 'DemostratorDashboard'])->name('demostrator.dashboard');

});// end group demostrator dashboard

Route::middleware(['auth','role:lecturer'])->group(function(){
Route::get('/lecturer/dashboard', [LecturerController::class, 'LecturerDashboard'])->name('lecturer.dashboard');
});// end group lecture dashboard

// Route::view('/about',function(){
//     return view('auth.about');
// });

Route::post('/student/courses',[StudentController::class, 'store'])->name('student.courses');

Route::view('/about','auth.about');
Route::view('/test','test');
Route::view('/cdn','cdn');
Route::view('/courses','student.courses');
Route::view('/add_courses','admin.add_courses');
Route::view('/notification','demostrator.notification');



Route::get('/admin/add_subjects',[SubjectController::class,'add_subjects'])->name('admin.add_subjects');
Route::get('/admin/show_subjects',[SubjectController::class,'show_subjects'])->name('admin.show_subjects');
Route::post('/admin/show_subjects',[SubjectController::class,'sub_store'])->name('subject.store');
Route::delete('/admin/show_/{subject}/destroy',[SubjectController::class,'destroy'])->name('subject.destroy');

Route::get('/admin/add_courses',[Course_unitController::class,'add_course_units'])->name('admin.add_course_units');
Route::get('/admin/show_courses',[Course_unitController::class,'show_course_units'])->name('admin.show_course_units');
Route::post('/admin/show_courses',[Course_unitController::class,'course_store'])->name('course.store');
Route::delete('/admin/show_courses/{course}/destroy',[Course_unitController::class,'destroy'])->name('course.destroy');
Route::get('/admin/show_courses/{course}/edit',[Course_unitController::class,'edit'])->name('course.edit');
Route::put('/admin/show_courses/{course}/update',[Course_unitController::class,'update'])->name('course.update');

Route::get('/admin/level_list',[LevelController::class,'level_list'])->name('admin.level_list');
Route::get('/admin/add_levels',[LevelController::class,'add-levels'])->name('admin.add_levels');
Route::post('/admin/show_levels',[LevelController::class,'level_store'])->name('level.store');



Route::get('/notification',[NotificationController::class, 'index'])->name('notification.index');
Route::get('/notification',[NotificationController::class, 'create'])->name('notification');
Route::post('/notification',[NotificationController::class, 'store'])->name('notification.store');  
                                                                                                       


//money transfer

//Route::get('/student/money_transfer/download_form',[ShowController::class,'showData'])->name('student.money_transfer.download_form');
//Route::post('/forms/store',[Form1Controller::class,'store'])->name('forms.store');
Route::get('/student/money_transfer/payment_form',[RepeatController::class,'index'])->name('student.money_transfer.payment_form');
Route::post('/repeats/store',[RepeatController::class,'store'])->name('repeats.store');

//Route::post('/student/money_transfer/form1',[Form1Controller::class,'store'] );


Route::post('pay',[PaymentController::class,'pay'])->name('payment');
Route::get('success',[PaymentController::class,'success']);
Route::get('error',[PaymentController::class,'error']);


Route::view('/student/money_transfer/payment_home','student.money_transfer.payment_home');
//Route::view('/student/money_transfer/payment_form','student.money_transfer.payment_form');
Route::view('/student/money_transfer/payment_pay','student.money_transfer.payment_pay');
//Route::view('/student/money_transfer/download_form','student.money_transfer.download_form');

