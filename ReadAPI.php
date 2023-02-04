<?php

$option = array(
	"ssl" => array (
		"verify_peer" => false,
		"verify_peer_name" => false,
	),
);

$linkAPI ="https://jsonplaceholder.typicode.com/users";
$dataAPI = file_get_contents($linkAPI, false, stream_context_create($option));

$data = json_decode($dataAPI, true);


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test SofDev UIINET</title>
	<style>
		.table {
			font-family: sans-serif;
			color: #444;
			border-collapse: collapse;
			width: 100%;
			border: 1px solid #f2f5f7;
		}
 
		.table tr th{
			background: #35A9DB;
			color: #fff;
			font-weight: normal;
		}
 
		.table, th, td {
		    padding: 8px 20px;
    		text-align: center;
		}
 
		.table tr:hover {
    		background-color: #f5f5f5;
		}
 
		.table tr:nth-child(even) {
    		background-color: #f2f2f2;
		}
	</style>
</head>
<body>
	<h4>Data User</h4>
	<table class="table">
		<tr>
			<th rowspan="3">ID</th>
			<th rowspan="3">Name</th>
			<th rowspan="3">Username</th>
			<th rowspan="3">Email</th>
			<th colspan="6">Address</th>
			<th rowspan="3">Phone</th>
			<th rowspan="3">Website</th>
			<th colspan="3">Company</th>
		</tr>
		<tr>
			<th rowspan="2">Street</th>
			<th rowspan="2">Suite</th>
			<th rowspan="2">City</th>
			<th rowspan="2">Zipcode</th>
			<th colspan="2">Geo</th>

			<th rowspan="2">Name</th>
			<th rowspan="2">CatchPhrase</th>
			<th rowspan="2">BS</th>
		</tr>

		<tr>
			<th>lat</th>
			<th>lng</th>
		</tr>

		<?php foreach ($data as $row): ?>

		<tr>
			<td><?= $row['id']?></td>
			<td><?= $row['name']?></td>
			<td><?= $row['username']?></td>
			<td><?= $row['email']?></td>
			<td><?= $row['address']['street']?></td>
			<td><?= $row['address']['suite']?></td>
			<td><?= $row['address']['city']?></td>
			<td><?= $row['address']['zipcode']?></td>
			<td><?= $row['address']['geo']['lat']?></td>
			<td><?= $row['address']['geo']['lng']?></td>
			<td><?= $row['phone']?></td>
			<td><?= $row['website']?></td>
			<td><?= $row['company']['name']?></td>
			<td><?= $row['company']['catchPhrase']?></td>
			<td><?= $row['company']['bs']?></td>
		</tr>

	<?php endforeach ?>
	</table>
</body>
</html>