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
use App\Http\Controllers\SubcourseController;
use App\Http\Controllers\CombinationController;
use App\Http\Controllers\SyllabusController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\St_markController;
use App\Http\Controllers\SubcombController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SelectCombinationController;  
use App\Http\Controllers\Combination1Controller;  
use App\Http\Controllers\CourseregistrationController;
use App\Http\Controllers\IndeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\Student1Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\DefineController;
use App\Http\Controllers\chatcontroller;
use App\Http\Controllers\DemonstratorController;
use App\Http\Controllers\notController;
use App\Http\Controllers\StresultController;




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
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

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
Route::view('/student/hello','student.hello');


Route::view('/studentfeedback','studentfeedback');
Route::view('/abc','abc');


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
Route::get('/subject1details',[feedbackcontroller::class,'show']);

Route::get('/admin/subcourse/form',[SubcourseController::class,'createForm'])->name('admin.subcourse.form');
Route::get('/admin/subcourse/process',[SubcourseController::class,'showSubjects'])->name('admin.subcourse.show');
Route::post('/admin/subcourse/process',[SubcourseController::class,'processForm'])->name('admin.subcourse.show');
                                                                                                       
Route::get('/admin/dashboard/add_syllabus',[SyllabusController::class,'add'])->name('admin.add_syllabus');
Route::post('/admin/syllabus_process',[SyllabusController::class,'syllabus_process'])->name('admin.show_syllabus');

Route::get('/admin/assignsubCombination',[SubcombController::class,'createForm'])->name('admin.assignsubCombination');
Route::post('/admin/processForm',[SubcombController::class,'processForm'])->name('admin.assignsubCombination.show');





use App\Http\Controllers\St_resultController;

Route::post('/student/upload', [St_resultController::class, 'store'])->name('student.upload');
Route::get('join_table', [St_markController::class, 'index'])->name('join_table');
Route::get('/admin/show_payment',[Repeatcontroller::class,'show'])->name('admin.show_payment');

//Route::get('/student/Registration',[RegistrationController::class,'index'])->name('register');  
//Route::get('/student/selectCombination',[SelectCombinationController::class,'index'])->name('select'); 

Route::get('/show-course-units/{sCode}/{level}/{semester}', [SyllabusController::class, 'showCourseUnits'])
    ->name('student.Matl1s1');

Route::get('/admin/combination/form',[Combination1Controller::class,'createForm'])->name('admin.combination.form');
Route::post('/admin/combination/process',[Combination1Controller::class,'processForm'])->name('admin.combination.show');

Route::get('/abc',[CourseregistrationController::class,'createForm'])->name('abc');
Route::post('abc/process',[CourseregistrationController::class,'processForm'])->name('abc.process');

//attendance

Route::get('/menu',[MenuController::class,'inde'])->name('first.menubar');

Route::get('/student1',[Student1Controller::class,'index'])->name('students.index');
Route::get('/cre',[Student1Controller::class,'create'])->name('students.create');
Route::post('/student1',[Student1Controller::class,'store'])->name('students.store');
Route::get('/student1/{student}/edit',[Student1Controller::class,'edit'])->name('students.edit');
Route::put('/student1/{student}/update',[Student1Controller::class,'update'])->name('students.update');
Route::delete('/student1/{student}/destroy',[Student1Controller::class,'destroy'])->name('students.destroy');

Route::get('/product',[ProductController::class,'index'])->name('products.index');

Route::get('/create',[ProductController::class,'create'])->name('products.create');
Route::post('/product',[ProductController::class,'store'])->name('products.store');
Route::get('/product/{product}/edit',[ProductController::class,'edit'])->name('products.edit');
Route::put('/product/{product}/update',[ProductController::class,'update'])->name('products.update');
Route::delete('/product/{product}/destroy',[ProductController::class,'destroy'])->name('products.destroy');

Route::get('/ind',[IndeController::class,'ind'])->name('first.ind');




Route::post('/poo',[IndeController::class,'sav'])->name('first.sav');
Route::get('/dash',[DashController::class,'dah'])->name('first.dashboard');

Route::get('/last',[DefineController::class,'last'])->name('first.last');

Route::get('/product/{product}/edi1',[IndeController::class,'viw'])->name('first.indd');

Route::get('/product/{product}/student1/{student}/edi2',[DefineController::class,'edi'])->name('products.edi');
Route::put('/upd',[IndeController::class,'upd'])->name('products.upd');




// Routes related to ChatController
Route::get('/chat', [chatcontroller::class, 'AddChat'])->name('chat.form');
Route::post('/chat', [chatcontroller::class, 'uploadChatInput'])->name('chat.submit');

// Route for displaying stored messages
Route::get('/display-messages', [DemonstratorController::class, 'displayMessages'])
    ->name('messages.display');


Route::get('/display-noti', [notController::class, 'displayNoti'])
    ->name('noti.display');


 Route::get('/admin/add_stresult',[StresultController::class,'add_stresult'])->name('admin.add_stresults');
Route::post('/admin/add_stresult',[StresultController::class,'stresult_store'])->name('stresult.store');
    


