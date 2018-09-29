<!-- app/views/InsertStudentPage.blade.php -->

<?php echo e(Form::open(array('action' => 'StudentsController@InsertAllDataStudents'))); ?>


<?php echo e(Form::label('students_name','Student Name')); ?>


<?php echo e(Form::text('students_name','Enter Name Here', array('id' => 'students_name'))); ?>


<br>

<?php echo e(Form::label('students_class','Student Class')); ?>


<?php echo e(Form::text('students_class','Enter Class Here', array('id' => 'students_class'))); ?>


<br>

<?php echo e(Form::label('students_age','Student Age')); ?>

<?php echo e(Form::number('students_age',100,array('min' => 1, 'max' => 150 , 'id' => 'students_age'))); ?>


<br>

<?php echo e(Form::label('class_teacher', 'Class Teacher')); ?>

<?php echo e(Form::text('class_teacher','Enter Class Teacher Here', array('id' => 'class_teacher'))); ?>


<br>

<?php echo e(Form::submit('Save')); ?>


<?php echo e(Form::close()); ?>