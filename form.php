<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'sawyercarlton.com' // Put you mail domain here
	,
	'Sawyer Carlton Portfolio' // Put your site name / form name here
	,
	'skcarlton@gmail.com' // Where will the form notification be sent?
	,
	'noreply@sawyercarlton.com' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->
