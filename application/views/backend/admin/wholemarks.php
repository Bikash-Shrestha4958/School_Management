<?php
    $username="root";
    $password="";
    $server='localhost';
    $db='school';

    $con=mysqli_connect($server,$username,$password,$db);
    if($con){
        echo "Connected";
    }
    else{
        echo "not connect" ;
    }
?>

<!DOCTYPE html>
    


 <head>
     <title>

     </title>
 </head>

 <body>
     <div>
         <h1>Students sheet</h1>
         <div class="">
             <table border="">
                 <thead>
                     <tr>
                         <th>Mark id</th>
                         <th>student_id</th>
                         <th>Subject_id</th>
                         <th>class_id</th>
                         <th>exam_id</th>
                         <th>mark_obtain</th>
                         <th>total mark</th>
                         <th>comment</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php
                     
                            $selectquery="select * from mark ";
                            $query=mysqli_query($con,$selectquery);
                            $nums=mysqli_num_rows($query);

                            while($res=mysqli_fetch_array($query))
                            {
                                ?>

                     <tr>
                         <td><?php echo $res['mark_id'];?></td>
                         <td><?php echo $res['student_id'];?></td>
                         <td><?php echo $res['subject_id'];?></td>
                         <td><?php echo $res['class_id'];?></td>
                         <td><?php echo $res['exam_id'];?></td>
                         <td><?php echo $res['mark_obtained'];?></td>
                         <td><?php echo $res['mark_total'];?></td>
                         <td><?php echo $res['comment'];?></td>
                     </tr>
                     <?php
                     }
                     ?>
                 </tbody>
             </table>

         </div>
     </div>
 </body>

 </html>