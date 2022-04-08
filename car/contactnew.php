<?php 

include("conntion.php");

if(isset($_POST['submit'])) 
 {
    
$name=$_POST['name']; 
$class=$_POST['class'];
$phone=$_POST['phone'];
$address=$_POST['address'];

echo $sql=" INSERT INTO `enquiry`(`id`, `name`,`class`,`phone`,`address`) VALUES (NULL, '$name', 'class', 'phone','address');";

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