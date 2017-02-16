<?php
	$db=new mysqli("localhost","root","","user");
	$db->query("set names utf8");
	$id=$_GET["id"];
	$db->query("delete from userinfo where id=".$id);
	if($db->affected_rows>0){
		echo "<script>alert('删除成功');location.href='biaoge.php'</script>";
	}
?>