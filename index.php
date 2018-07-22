<!DOCTYPE html>
<html>
<head>
	<title>Employees Details</title>
	<style>
div{
	display:none;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
	}
	th{
		background-color:lightgray;
	}
	th, td {
    padding: 15px;
    text-align: left;
	}
	table{
	width:100%;
	border-spacing: 5px;
	}

	/*Mobile Styles*/
@media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
  	div{
  		width:45%;
  		display:inline-block;
  		padding:15px;
  		box-shadow:1px 1px 10px 1px lightgray;
  		font-size:25px;
  		margin:5px;
  	}
  	img{
  		width:300px;
  		height:300px;
  		border-radius:300px;
  	}
  	table{
  		display:none;
  	}
}
</style>
</head>
<body>
	<center>
		<h1>Employee Details</h1>
<?php
$url = 'emp_details.json';
$data = file_get_contents($url);
$characters = json_decode($data);
?>
<?php foreach ($characters as $character) : ?>
	<?php echo "<div>
	<img src='".$character->profile."'><br>".
				$character->name."<br>".
				$character->salary."<br>".
				$character->position."</div>"; ?>
	<?php endforeach; ?>
	</center>
<table>
	<tbody>
		<tr>
			<th>S.No</th>
			<th>Name</th>
			<th>Salary</th>
			<th>Position</th>
		</tr>
		<?php foreach ($characters as $character) : ?>
        <tr>
            <td> <?php echo $character->sno; ?> </td>
            <td> <?php echo $character->name; ?> </td>
            <td> <?php echo $character->salary; ?> </td>
            <td> <?php echo $character->position; ?> </td>
        </tr>
		<?php endforeach; ?>
	</tbody>
</table>

</body>
</html>