<?php 
include "connectdb.php"; 
?> 
<html> 
<?php 
include "head.php"; 
?>    
<body> 
<?php
	include "connectdb.php";
	if(isset($_GET)){
		$std_id=$_GET['std_id'];
		$sql = mysqli_query($conn,"DELETE FROM student WHERE std_id='".$std_id."'");
		
		
		if($sql){
			echo "ลบข้อมูลสำเร็จ<br>";
			echo "<a href='main.php'>กลับ</a>";
			}else{
			echo "ไม่สามารถลบข้อมูลได้[".' '.$query_sql.' '."]";
			echo"<a href='main.php'>กลับ</a>";
			}
		}
?>
	</body>
</html>