<?php
  include_once 'header.php';
?>

<!-- Login form for our webpage.-->
<section class="additem-form">
  <h2>List Products</h2>
<?php
require_once '../connect.php';

  $sql = "SELECT itemid, itemn, itemq FROM inventory";

  $result = $conn->query($sql);
  if($result->num_rows > 0){
  	while($row=$result->fetch_assoc()){
  		echo "<b>".$row["itemn"]."</b>"."<br>".$row["itemid"]."&nbsp"."&nbsp"."&nbsp"."&nbsp".$row["itemq"]."<br>";
  	}
  }

  $conn->close();
?>

</section>

<?php
  include_once 'footer.php';
?>
