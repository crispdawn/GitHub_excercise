<?php
	$link = mysqli_connect('localhost', 'root', '');
	if (!$link) {
		die('接続失敗！<br>'.mysqli_connect_error());
	} else {
		echo '接続成功！';
		mysqli_set_charset($link, "utf8");
		mysql_close($link);
	}
?>;