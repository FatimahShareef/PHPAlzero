<?php
$langs = array("A","B","C","D","E","F");



$counts= count($langs);

echo "<ul>";
for ($i = 0; $i<$counts; $i++)
{
    echo "<li>".$langs[$i]."</li>";
}
echo "</ul>";
?>



<select name="year">
<?php 
for($i=1900; $i<=2024;$i++){
    echo '<option>'. $i."<br>" .'</option>';
    if($i== 2024) break; "";
}

?>
</select>


