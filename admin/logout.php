<?php

	session_start();

	$_SESSION['set'] = 'undone';

	session_destroy();

	echo "<script>
			window.location.href='login.php';
		</script>";

?>