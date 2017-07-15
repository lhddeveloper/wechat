<?php
include "./vendor/autoload.php";
include './wxModel.php';

$wxObj = new wxModel();
// dump($wxObj->getQrCode());
$imgurl = $wxObj->getQrCode();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>获取临时的二维码</title>
</head>
<body>
	<img src="<?php echo $imgurl ?>" width="200" height="200" alt="" />
</body>
</html>