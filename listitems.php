<?php
  include_once 'header.php';
?>

<!-- Login form for our webpage.-->
<section class="additem-form">
  <h2>List Products</h2>
  <div class="additem-form-form">
    <form action="included/listitems.included.php" method="post">
      <button type="submit" value="Submit">Add Product</button>&nbsp; &nbsp;
    </form>
  </div>
  <?php

  if (isset($_GET["error"])) {
    else if ($_GET["error"] == "stmtfailed") {
      echo "<p>Error. Something went wrong! Please try again.</p>";
    }
  }
  ?>
</section>

<?php
  include_once 'footer.php';
?>
