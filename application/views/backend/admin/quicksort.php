<?php
function quick($arr)
{
    if(count($arr) <= 1){
        return $arr;
    }
    else{
        $pivot = $arr[0];
        $left = array();
        $right = array();
        for($i = 1; $i < count($arr); $i++)
        {
            if($arr[$i] < $pivot){
                $left[] = $arr[$i];
            }
            else{
                $right[] = $arr[$i];
            }
        }
        return array_merge(quick($right), array($pivot), quick($left));
    }
}
foreach($students as $row){
						
    $verify_data	=	array(	'exam_id' => $exam_id ,
                                'class_id' => $class_id ,
                                'subject_id' => $subject_id , 
                                'student_id' => $row['student_id']);
                                
    $query = $this->db->get_where('mark' , $verify_data);							 
    $marks	=	$query->result_array();
    foreach($marks as $row2){
        $marks1[]=$row2['mark_obtained'];
        $sid1[]=$row2['student_id'];
        $name1[]=$row['name'];
    }

    }
$combine1 = array_combine($sid1,$marks1);
$combine2 = array_combine($sid1,$name1);
$sorted_marks = quick($marks1);

foreach ($sorted_marks as $key) {
    $sorted_id[]= $combine1[$key];
}
$combin1 = array_combine($sorted_id,$sorted_marks);
arsort($combine1);

echo "<br>";
echo "<h4>Result :</h4>";
echo "<table border='1' style='border-collapse: 
collapse;border-color: black;'>";  
echo "<tr style='font-weight: bold;background-color:black;color:white' >";  
echo "<td style =  width='250' height='50' align='center'>id</td>";
echo "<td style =  width='250' height='50' align='center'>name</td>";
echo "<td style =  width='250' height='50' align='center'>marks (from highest)</td>";
echo "</tr>";

foreach ($combine1 as $key=>$value) 
 { 

  echo "<tr style = 'color:black'>";
  
  echo '<td width="150"  height="50"align=center>' . $key. '</td>';
  $name2 = $combine2[$key];
  echo '<td width="150"  height="50"align=center>' . $name2. '</td>';
  echo '<td width="150" height="50" align=center>' . $value. '</td>';
  echo '</tr>';
 }
 ?>



