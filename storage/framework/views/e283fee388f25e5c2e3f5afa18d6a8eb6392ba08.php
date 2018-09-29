<!-- app/views/InsertTeacherpage.blade.php -->

<?php echo e(Form::open(array('action' => 'TeachersController@InsertAllDataTeachers'))); ?>


<?php echo e(Form::label('teachers_name','Teacher Name')); ?>


<?php echo e(Form::text('teachers_name','Enter Name Here', array('id' => 'teachers_name'))); ?>


<br>

<?php echo e(Form::label('classteacher_of','Class Teacher Of')); ?>


<?php echo e(Form::text('classteacher_of','Enter Class Here',array('id' => 'classteacher_of'))); ?>


<br>

<?php echo e(Form::label('salary','Salary')); ?>


<?php echo e(Form::number('salary',100,array('min' =>1, 'max' => 100000, 'id' =>'salary'))); ?>


<br>

<?php echo e(Form::submit('Save')); ?>

<?php echo e(Form::close()); ?>