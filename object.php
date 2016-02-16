<?php

$id = $_REQUEST['id'];

$title = '';
$question = '';
$description = '';
$code = '';
$date = '';

// set the object variables 
// based on the id value from the URL 
if ($id == 1) {
	$title = 'A Programming Question #1';
	$question = "I'm having trouble displaying a JavaScript alert?";
	$description = "I think I'm using the correct function, but I can't figure out what's wrong. Could you point me in the right direction?";
	$code = "alert(This is a message)";
	$date = "June 11, 2015";
} else if ($id == 2) {
	$title = 'Programming Question #2';
	$question = 'My HTML list isn\'t displaying properly.';
	$description  = 'I think I\'m using the right list element, but it\'s not showing up correctly. Any thougts?';
	$code = '&lt;ul&gt;
				item 1
				item 2
				item 3
			&lt;/ul&gt;';
	$date = 'June 16, 2015';
} else {
	;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
</head>
<body>

	<h1><?php echo $question; ?></h1>
	<p><?php echo $description; ?></p>
	<pre>
		<?php echo $code; ?>
	</pre>
	<p>Question Date: <?php echo $date; ?></p>
</body>
</html>