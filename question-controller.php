<?php


$page = $_REQUEST['page'];


include 'db-connection.php';

// Determine what page to show
if ($page == 'show'){
	$id = $_REQUEST['id'];
	show($id);
} else if ($page == 'create') {
	create();
}


// Load the show page
function show($id) {
	global $connection;

	$object = array(
	'title' => '',
	'question' => '',
	'description' => '',
	'code' => '',
	'date' => ''
	);

	// Query to select the object
	$sql = 'SELECT * FROM questions WHERE id = ' . $id;

	// Execute the query
	$result = $connection->query($sql);

	// Check for and retrive the object
	if ($result->num_rows > 0){
		$object = $result->fetch_assoc();
	//	echo '<pre>';
	//	print_r($object);
	//	echo '</pre>';
	}
	// Load the view file
	include 'question-show-view.php';
}

function create(){
	include 'question-create-view.php';
}

?>