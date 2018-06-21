<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	*{
		margin: 0;
		padding: 0;
	}
	ul{
		list-style: none;
	}
	</style>
</head>
<?php var_dump($this->assign); ?>
<body>
	<form action="" method="post">
		<ul>
			<li>
				<span>用户名：</span>
				<input type="text">
			</li>
			<li>
				<span>密码：</span>
				<input type="text">
			</li>
			<li>
				<button>登录</button>
			</li>
		</ul>
	</form>
</body>
</html>