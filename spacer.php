<?php

require_once '../Utilitas/Utilitas.php';

if (isset($_GET['v'])) {

	$date = date('d/m/Y h:ia T');

	$message = Utilitas\Utilitas::decrypt($_GET['v'], 'password');

	if ($message !== false) {

		file_put_contents('tracker.log', $date . ' - ' . $message . "\n", FILE_APPEND);

	} else {

		file_put_contents('tracker.log', $date . ' - ERROR' . "\n", FILE_APPEND);

	}

}

header('Content-Type: image/gif');
readfile('spacer.gif');
