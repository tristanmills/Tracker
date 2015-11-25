<?php

require_once '../Utilitas/Utilitas.php';

$v = Utilitas\Utilitas::encrypt('message', 'password');

?>

Hidden Image &gt;<img src="spacer.gif?v=<?= $v; ?>">&lt; Hidden Image
