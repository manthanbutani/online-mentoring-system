    <?php
include '../conn/conn.php';
session_start();

$data=array();

$q=mysqli_query($con, "select * from events where f_id='{$_SESSION['fid']}' order by id");
while($row= mysqli_fetch_array($q))
{
    $data[] = array(
  'id'      => $row["id"],
  'title'   => $row["title"],
  'start'   => $row["start_event"],
  'start_time'=>$row["start_event_time"]
 );
   
}
 echo json_encode($data);

?>

