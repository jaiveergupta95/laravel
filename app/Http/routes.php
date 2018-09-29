<?php
use App\Teacher;
use App\Student;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\StudentsController;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insertinitialvaluesteachers', function(){
    $teacher = new Teacher();
    $teacher->teachers_id = 1;
    $teacher->teachers_name = 'Rabada';
    $teacher->classteacher_of = 'II';
    $teacher->salary = '25000';
    $teacher->save();
    
     $teacher = new Teacher();
     $teacher->teachers_id = 2;
     $teacher->teachers_name = 'Chintu';
     $teacher->classteacher_of = 'I';
     $teacher->salary = '20000';
     $teacher->save(); 
     
     $teacher = new Teacher();
     $teacher->teachers_id = 3;
     $teacher->teachers_name = 'Pipli';
     $teacher->classteacher_of = 'IV';
     $teacher->salary = '36000';
     $teacher->save(); 
     
     $teacher = new Teacher();
     $teacher->teachers_id = 4;
     $teacher->teachers_name = 'Simpson';
     $teacher->classteacher_of = 'VI';
     $teacher->salary = '45000';
     $teacher->save();  
     
     $teacher = new Teacher();
     $teacher->teachers_id = 5;
     $teacher->teachers_name = 'Unto';
     $teacher->classteacher_of = 'VII';
     $teacher->salary = '45000';
     $teacher->save(); 
    
});


Route::get('/insertinitialvaluesstudents',function(){
    $student = new Student();
    $student->students_id = 1;
    $student->students_name = 'JayPrakash';
    $student->students_age = 2;
    $student->students_class = 'II';
    $student->class_teacher = 'Rabada';
    $student->save();
    
    $student = new Student();
     $student->students_id = 2;
     $student->students_name = 'Chichi';
     $student->students_age = 1;
     $student->students_class = 'I';
     $student->class_teacher = 'Chintu';
     $student->save(); 
     
     $student = new Student();
     $student->students_id = 3;
     $student->students_name = 'Olga';
     $student->students_age = 3;
     $student->students_class = 'IV';
     $student->class_teacher = 'Pipli';
     $student->save(); 
     
     $student = new Student();
     $student->students_id = 4;
     $student->students_name = 'John';
     $student->students_age = 5;
     $student->students_class = 'VI';
     $student->class_teacher = 'Simpson';
     $student->save(); 
     
     $student = new Student();
     $student->students_id = 5;
     $student->students_name = 'Rina';
     $student->students_age = 6;
     $student->students_class = 'VII';
     $student->class_teacher = 'Unto';
     $student->save();
    
});

Route::get('/displayteachers', function(){
    return view('displayteacherpage');
});

Route::get('/displaystudents',function(){
    return view('displaystudentpage');
});

Route::get('/insertteachers',function(){
    return view('InsertTeacherpage');
});

Route::post('InsertedDataTeachers',  'TeachersController@InsertAllDataTeachers');

Route::get('/insertstudents',function(){
    return view('InsertStudentpage');
});

Route::post('InsertedDataStudents','StudentsController@InsertAllDataStudents');

Route::get('/displaycombineddata',function(){
    return view('displaycombineddata');
});