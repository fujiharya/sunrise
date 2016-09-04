<?php
	if($_POST['country'] == 1) {
		echo json_encode(array('1' => 'Вашингтон', '2' => 'Сиэттл'));
	} else if ($_GET['country'] == 2) {
		echo json_encode(array('1' => 'Париж', '2' => 'Марсель'));
	}
?>