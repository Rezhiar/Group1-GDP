<link type="text/css" rel="stylesheet" href="NewFile.css"/>
<?php
include 'config.php';

echo"<p>hello</p>";

$query="SELECT * FROM id";
$result=mysqli_query($link, $query);
?>
<table border="1">
<?php 
while($row=mysqli_fetch_array($result)){
	?>
	<tr>
	<td>
	<?php
	echo $row['ID'];
	?>
	</td>
	<td>
	<?php echo $row['Name'];?>
	</td></tr>
	<?php 
}
?>

</table>
<script type="text/javascript" src="script.js">
</script>
