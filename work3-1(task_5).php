<table border="1">
<?php
$rows=rand(1,10);
$cols=rand(1,10);
for($tr=1; $tr <= $rows; $tr++){
echo "<tr>";
for($td=1; $td <= $cols; $td++){
if($tr == 1 || $td == 1){
echo "<th style='background-color:orange;font-weight:bold'>", 
 $tr * $td, "</th>";
}else{
echo "<td>", $tr * $td, "</td>";
} 
}
echo "</tr>";
}
?>
</table>