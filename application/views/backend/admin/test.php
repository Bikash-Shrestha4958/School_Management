<?php
function bubbleSort1(&$arr1)
{
$n1 = sizeof($arr1);
for($i1 = 0; $i1 < $n1; $i1++)
{
for ($j1 = 0; $j1 < $n1 - $i1 - 1; $j1++)
{
if ($arr1[$j1] > $arr1[$j1+1])
{
$t1 = $arr1[$j1];
$arr1[$j1] = $arr1[$j1+1];
$arr1[$j1+1] = $t1;
}
}
}
}
$students    =    $this->crud_model->get_students($class_id);
foreach($students as $row){
						
    $verify_data	=	array(	'exam_id' => $exam_id ,
                                'class_id' => $class_id ,
                                'subject_id' => $subject_id , 
                                'student_id' => $row['student_id']);
                                
    $query = $this->db->get_where('mark' , $verify_data);							 
    $marks	=	$query->result_array();
    foreach($marks as $row2){
        $arr[]=$row2['mark_obtained'];
        $arr2[]=$row2['student_id'];
        $arr5[]=$row['name'];

    }

    }
   
$arr3=array_combine($arr2,$arr);
$arrname = array_combine($arr2,$arr5);
$len1 = sizeof($arr);
arsort($arr3);
echo "<table border='1' style='border-collapse: 
collapse;border-color: black;'>";  
echo "<tr style='font-weight: bold;background-color:black;color:white' >";  
echo "<td style =  width='250' height='50' align='center'>id</td>";
echo "<td style =  width='250' height='50' align='center'>name</td>";
echo "<td style =  width='250' height='50' align='center'>marks</td>";
echo "</tr>";
foreach ($arr3 as $key=>$value) 
 { 

  echo "<tr style = 'color:black'>";
  
  echo '<td width="150"  height="50"align=center>' . $key. '</td>';
  $name = $arrname[$key];
  echo '<td width="150"  height="50"align=center>' . $name. '</td>';
  echo '<td width="150" height="50" align=center>' . $value. '</td>';
  echo '</tr>';
 }

?>
