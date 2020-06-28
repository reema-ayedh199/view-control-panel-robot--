


<?php


// Create connection
$host='localhost';
$user ='root';
$password ='';
$database ='map';
$connect= mysqli_connect($host,$user,$password,$database);

if(mysqli_connect_errno()){

die("cant connect with database". mysqli_connect_error());
}
else{
echo"database is conected";}

?>

<!DOCTYPE html>
<html>
<head>
<title>Control Panel</title>
</head>



<body style="background-color:powderblue;" >
<fieldset>	
<legend><h1><i>Control Panel</i></h1></legend>


<form action="cp1.php" method="post">
<p></p><input style=" margin-right: 170px;margin-left: 210px;" type="submit" name="for" value=" FORWARDS "><br><br>


<input style=" margin-right: 20px;  margin-left: 80px;" type="submit" value="       LEFT      "name="left">  



<input style="margin-right: 19px; margin-left: 8px; background-color:red;" type="submit" value="       STOP      "name="stop"> 




 <input style="margin-right: 10px; margin-left: 10px; " type="submit" value="       RIGHT      "name="right"><br><br>


<input style=" margin-right: 170px; margin-left: 210px;"type="submit" value="BACKWARDS"name="back">

</form>

</fieldset>
<?php 

    if(isset($_POST['stop'])) {
   
       $query = "INSERT INTO action (id, forwards, backwards, leftt, rightt, stop) VALUES (NULL, '', '', '', '', 'S')";
       $result = mysqli_query($connect,$query);
      

       if(!$result)
    {
        die (" error on qurey");
    }
    else
    {
        
        die ("Records added successfully.");
    }
    }



    if(isset($_POST['for'])) {
   
       $query = "INSERT INTO action (id, forwards, backwards, leftt, rightt, stop) VALUES (NULL, 'F', '', '', '', '')";
       $result = mysqli_query($connect,$query);
      

       if(!$result)
    {
        die (" error on qurey");
    }
    else
    {
        
        die ("Records added successfully.");
    }
    }



    if(isset($_POST['left'])) {
   
       $query = "INSERT INTO action (id, forwards, backwards, leftt, rightt, stop) VALUES (NULL, '', '', 'L', '', '')";
       $result = mysqli_query($connect,$query);
      

       if(!$result)
    {
        die (" error on qurey");
    }
    else
    {
        
        die ("Records added successfully.");
    }
    }

    if(isset($_POST['right'])) {
   
       $query = "INSERT INTO action (id, forwards, backwards, leftt, rightt, stop) VALUES (NULL, '', '', '', 'R', '')";
       $result = mysqli_query($connect,$query);
      

       if(!$result)
    {
        die (" error on qurey");
    }
    else
    {
        
        die ("Records added successfully.");
    }
    }


    if(isset($_POST['back'])) {
   
       $query = "INSERT INTO action (id, forwards, backwards, leftt, rightt, stop) VALUES (NULL, '', 'B', '', '', '')";
       $result = mysqli_query($connect,$query);
      

       if(!$result)
    {
        die (" error on qurey");
    }
    else
    {
        
        die ("Records added successfully.");
    }
    }









?>
    





</body>

</html>


<?php

mysqli_close($connect);
?>