<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>表格操作</title>
</head>
<style>
	table{
		width:600px;
		border:1px solid #000;
		margin: 0 auto;
		border-collapse: collapse;
	}
	td,th{
		border: 1px solid #000;
	}
	.a1{
		display: block;
		width: 598px;
		height: 30px;
		line-height: 30px;
		margin: 0 auto;
		border: 1px solid #000;
		border-top: 1px none #000;
		text-decoration: none;
		text-align: center;
	}
</style>
<body>
	<table>
		<tr>
			<th>姓名</th>
			<th>性别</th>
			<th>年龄</th>
			<th>操作</th>
		</tr>
		<?php
			 $db=new mysqli("localhost","root","","user");
			 $db->query("set names utf8");
			 $result=$db->query("select * from userinfo");
			 while($row=$result->fetch_assoc()){ ?>
			 	<tr>
			 		<td><?php echo $row["id"]?></td>
			 		<td><?php echo $row["username"]?></td>
			 		<td><?php echo $row["password"]?></td>
			 		<td><a href="del.php?id=<?php echo $row["id"] ?>">删除</a><a href="bianji.php?id=<?php echo $row["id"]?>">编辑</a></td>
			 	</tr>	
		<?php
			}
		?>
	</table>
	<a href="" class="a1">+</a>
</body>
</html>