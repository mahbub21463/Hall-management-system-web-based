<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>




   <h1 style="text-align:center;color:green">Student Database</h1>
   <h2 style="text-align:center;color:#2F4F4F">{{$hallname.' '}}Hall</h2>
   <h2 style="text-align:center;color:#8B0000">BUET, Dhaka-1000</h2>
    
    <table>
        <thead >
        <tr>
            <th style="color:#4682B4">Student ID</th>
            <th style="color:#4682B4">Name</th>
            <th style="color:#4682B4">Department</th>
            <th style="color:#4682B4">Level</th>
            <th style="color:#4682B4">Term</th>
            <th style="color:#4682B4">Resident Status</th>
            <th style="color:#4682B4">Room No</th>
            <th style="color:#4682B4">Phone No</th>
            <!-- <th>Mess Card No</th> -->
            <!-- <th>Library Card No</th> -->
             <th style="color:#4682B4">Blood Group</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{$student->student_id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->dept}}</td>
                <td>{{$student->level}}</td>
                <td>{{$student->term}}</td>
                <td>{{$student->resident_status}}</td>
                <td>{{$student->room_no}}</td>
                <td>{{$student->phone_no}}</td>
                <!-- <td>{{$student->mess_card_no}}</td> -->
                <!-- <td>{{$student->library_card_no}}</td> -->
                <td>{{$student->blood_group}}</td>
                

              
            </tr>
        @endforeach
    </tbody>
   
 </table>
 
  
 

</body>
</html>