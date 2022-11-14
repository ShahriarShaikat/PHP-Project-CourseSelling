<?php
session_start();

include("connections.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$str =$_POST['price'];
	$query= "insert into test (testing,te) values ('$str','dfjisug')";
    
       $row = insert($query);
       if($row == 1)
       {
          echo "Successfully insert!";
       }
	   else{
		   echo "Failed!";
	   }
}


?>


<?php include 'header/header.php';?>
<div class="container">
      <br>  
      
                                  <form class="addCourse" action="" method="post" enctype="multipart/form-data">
                                    
                                    <input class="text" id="price" placeholder="Write Something..." type="text" name="price"><br><br>
                                    
                                    <input id="button" type="submit" value="save"><br><br>
                                
                                 </form>
</div>
</body>
<?php


include("footer.php");


?>
</html>