if(isset($_POST['Submit]))
{
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$country=$_POST['country'];
$subject=$_POST['subject'];
echo "<script>
             alert(' Request successfully !!'); 
 window.history.go(-1);           
     </script>";
}