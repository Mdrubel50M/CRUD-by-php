<!-- function page // it's connect with localhost phpmyadmin by this code-->

<?php $connected = mysqli_connect('localhost', 'root', '', 'practice');
    if ($connected) {
    	// echo "con?nected";
    }
    else {
    	die("nol");
    }

?>