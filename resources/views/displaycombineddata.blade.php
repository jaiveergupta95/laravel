<html>
    <head>
        <title>
            Display Combined Data
        </title>
        
    <h1>
        Display Combined Data from Database
    </h1>
    
    </head>
    <body>
        <table>
            <thead>
            <th>S No.</th>
            <th>Student Name</th>
            <th> Student Class</th>
            <th>Student Age</th>
            <th>Class Teacher Name</th>
            <th>Class Teacher Salary</th>
            </thead>
            <tbody>
                @for($i=1 ; $i <= DB::table('students')->count(); $i++)
                <tr>
                    <?php $result = DB::table('students')->where('students_id','=',$i)->get() ?>
                    
                    <td>{{$result[0]->students_id}}</td>
                    <td>{{$result[0]->students_name}}</td>
                    <td>{{$result[0]->students_class}}</td>
                    <td>{{$result[0]->students_age}}</td>
                    <td>{{$result[0]->class_teacher}}</td>
                    
                    <?php $result1 = DB::table('teachers')->where('teachers_name','=',$result[0]->class_teacher)->get();
                    if($result1 == null) { ?>
                    <td> NA </td>
                    
                    <?php } else { ?>
                    
                    <td> {{$result1[0]->salary}}</td>
                    <?php } ?>
                    
                </tr>
                @endfor
            </tbody>
        </table>
    </body>
</html>