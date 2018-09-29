<html>
    <head>
        <title>Display Students</title>
    <h1>Display Students from Database</h1>
    </head>
    <body>
        <table>
            <thead>
            <th>S No.</th>
            <th>Student Name</th>
            <th> Student Class</th>
            <th> Student Age </th>
            <th>Class Teacher</th>
            </thead>
            <tbody>
                <?php for($i=1;$i <= DB::table('students')->count(); $i++): ?>
                <tr>
                    <?php $result=DB::table('students')->where('students_id','=',$i)->get() ?>
                    
                    <td><?php echo e($result[0]->students_id); ?></td>
                    <td><?php echo e($result[0]->students_name); ?></td>
                    <td><?php echo e($result[0]->students_class); ?></td>
                    <td><?php echo e($result[0]->students_age); ?></td>
                    <td><?php echo e($result[0]->class_teacher); ?></td>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </body>
</html>

