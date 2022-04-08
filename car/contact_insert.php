<?php 

include("conntion.php");

if(isset($_POST['submit'])) 
 {
    
$full_name=$_POST['full_name']; 
$email=$_POST['email'];
$contact=$_POST['contact'];
$message=$_POST['message'];

echo $sql=" INSERT INTO `messages`(`id`, `full_name`,`email`,`contact`,`message`) VALUES (NULL, '$full_name', '$email', '$contact','$message');";

if (!mysqli_query($con, $sql)) 

{

  echo "Error Inserting Data";

  }

  else

  {

  echo "<script language='javascript'>

{

  alert(' Added Successfully.');  

   

}

</script>
<meta http-equiv='REFRESH' content='0;url=contact.php'></HEAD>";

  }
}
?>