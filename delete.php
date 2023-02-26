<?php

include('admin/include/connect.php');

if(isset($_POST['btn_inquire']))
{
  $id = $_POST['inquery_id'];

  $query = "DELETE FROM inquiry WHERE id='$id' ";
  $query_run = mysqli_query($conn, $query);
  echo "
    <script>
    alert('Deleted successfully');
    window.location.href='inquiry.php';
    </script>
    ";
}

if(isset($_POST['btn_appointment']))
{
  $id = $_POST['appointment_id'];

  $query = "DELETE FROM appointment WHERE id='$id' ";
  $query_run = mysqli_query($conn, $query);
  echo "
    <script>
    alert('Deleted successfully');
    window.location.href='appointment.php';
    </script>
    ";
}

/*$id = $_POST['id'];
$page = $_POST['page'];
if($page == 'inquiry') {
$query = mysqli_query($conn, "DELETE FROM inquiry WHERE id='$id' ");
echo "
    <script>
    alert('Deleted successfully');
    window.location.href='inquiry.php';
    </script>
    ";

}else if($page == 'appointments') {
        $query = mysqli_query($conn, "DELETE FROM appointment WHERE id='$id' ");
echo "
    <script>
    alert('Deleted successfully');
    window.location.href='appointment.php';
    </script>
    ";
}*/

?>