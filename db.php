<!--php连接池，抛出db对象-->
<?
	$servername = "qdm220352592.my3w.com";
	$username = "qdm220352592";
	$password = "Lamb2016s136";
	$dbname = "qdm220352592_db";
    // 创建连接
	$conn = new mysqli($servername, $username, $password, $dbname);
	// 检测连接
	if ($conn->connect_error) {
		die("连接失败: " . $conn->connect_error);
	}
?>
