<?php
	 $db=new mysqli("localhost","root","","user");
	 $db->query("set names utf8");
	 $result=$db->query("select * from userinfo");
	 $str="<table>";
	 	while($row=$result->fetch_assoc()){
	 		$str.="<tr>";
	 			$str.="<td>".$row["id"]."</td>";
	 			$str.="<td>".$row["username"]."</td>";
	 			$str.="<td>".$row["password"]."</td>";
	 		$str.="</tr>";
	 	};	
	 $str.="</table>";	
	 echo $str;
?>