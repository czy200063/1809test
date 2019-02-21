<?php

// PHP引擎,只解析运行,起始标记和结束标记之间的内容,其他部分的内容,交给服务器运行
//
// 一个PHP文件中,可以有多种计算机语言

echo "我是PHP程序输出的内容";

echo "<h1 class='h1'>坚持一下,就要下课了</h1>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		.h1{
			color: red;
		}
		*{
			color: blue;
		}
	</style>
	<script type="text/javascript">
		alert("我是JavaScript弹出的内容");
	</script>
</head>
<body>
	<h1 class="h1">北京</h1>

	<h1><?php echo "我是HTML当中的PHP程序"; ?></h1>
</body>
</html>
