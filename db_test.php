<!--?php <br ?--> $link = mysql_connect('localhost', 'root', '');
if (!$link) {
die('接続失敗！
'.mysql_error());
} else {
echo '接続成功！';
}
?&gt;