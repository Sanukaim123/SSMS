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

use App\Http\Controllers\feedbackcontroller;
use App\Http\Controllers\AddUserController;

use App\Http\Controllers\SubcourseController;
use App\Http\Controllers\CombinationController;
use App\Http\Controllers\SyllabusController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\SubcombController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SelectCombinationController;  
use App\Http\Controllers\Combination1Controller;  
use App\Http\Controllers\CourseregistrationController;




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
Route::view('/student/subject/math','student.subject.math');
Route::view('/student/subject/applied','student.subject.applied');
Route::view('/student/subject/chem','student.subject.chem');
Route::view('/student/subject/cs','student.subject.cs');
Route::view('/student/subject/physics','student.subject.physics');
Route::view('/studentfeedback','studentfeedback');
Route::view('/abc','abc');
Route::view('/adduser','adduser');
Route::view('/userdetails','userdetails');


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

Route::get('/admin/add_combination',[CombinationController::class,'add_combination'])->name('admin.add_combination');
Route::get('/student/courses',[CombinationController::class,'show'])->name('student.courses');
Route::post('admin/show_combination',[CombinationController::class,'combination_store'])->name('combination.store');

Route::get('/admin/add_semester',[SemesterController::class,'add_semester'])->name('admin.add_semester');
Route::post('admin/show_semester',[SemesterController::class,'semester_store'])->name('semester.store');




Route::get('/notification',[NotificationController::class, 'index'])->name('notification.index');
Route::get('/notification',[NotificationController::class, 'create'])->name('notification');

Route::post('/notification',[NotificationController::class, 'store'])->name('notification.store');  
             

//money transfer

Route::get('/student/money_transfer/payment_form',[RepeatController::class,'index'])->name('student.money_transfer.payment_form');
Route::post('/repeats/store',[RepeatController::class,'store'])->name('repeats.store');
Route::get('/student/money_transfer/download_form',[RepeatController::class,'downloadForm'])->name('student.money_transfer.download_form');
Route::post('/student/money_transfer/payment_home',[RepeatController::class,'home'])->name('student.money_transfer.payment_home');


Route::view('/student/money_transfer/payment_home','student.money_transfer.payment_home');
//Route::view('/student/money_transfer/payment_form','student.money_transfer.payment_form');
Route::view('/student/money_transfer/payment_pay','student.money_transfer.payment_pay');
//Route::view('/student/money_transfer/download_form','student.money_transfer.download_form');



Route::post('pay',[PaymentController::class,'pay'])->name('payment');
Route::get('success',[PaymentController::class,'success']);
Route::get('error',[PaymentController::class,'error']);


  

Route::post('/studentfeedback',[feedbackcontroller::class,'studentfeedback']);
Route::post('/adduser',[AddUserController::class,'store']);
Route::get('/subject1details',[feedbackcontroller::class,'show']);
Route::get('/userdetails',[AddUserController::class,'show']);
Route::delete('/userdetails/{record}/destroy',[AddUserController::class,'destroy'])->name('record.destroy');

Route::get('/admin/subcourse/form',[SubcourseController::class,'createForm'])->name('admin.subcourse.form');
Route::get('/admin/subcourse/process',[SubcourseController::class,'showSubjects'])->name('admin.subcourse.show');
Route::post('/admin/subcourse/process',[SubcourseController::class,'processForm'])->name('admin.subcourse.show');
                                                                                                       
Route::get('/admin/dashboard/add_syllabus',[SyllabusController::class,'add'])->name('admin.add_syllabus');
Route::post('/admin/syllabus_process',[SyllabusController::class,'syllabus_process'])->name('admin.show_syllabus');

Route::get('/admin/assignsubCombination',[SubcombController::class,'createForm'])->name('admin.assignsubCombination');
Route::post('/admin/processForm',[SubcombController::class,'processForm'])->name('admin.assignsubCombination.show');

Route::get('/admin/show_payment',[Repeatcontroller::class,'show'])->name('admin.show_payment');

//Route::get('/student/Registration',[RegistrationController::class,'index'])->name('register');  
//Route::get('/student/selectCombination',[SelectCombinationController::class,'index'])->name('select'); 

Route::get('/show-course-units/{sCode}/{level}/{semester}', [SyllabusController::class, 'showCourseUnits'])
    ->name('student.Matl1s1');

Route::get('/admin/combination/form',[Combination1Controller::class,'createForm'])->name('admin.combination.form');
Route::post('/admin/combination/process',[Combination1Controller::class,'processForm'])->name('admin.combination.show');

Route::get('/abc',[CourseregistrationController::class,'createForm'])->name('abc');
Route::post('abc/process',[CourseregistrationController::class,'processForm'])->name('abc.show');