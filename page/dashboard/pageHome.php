<?php
    include __DIR__ . '/../../models/ConnectSQl.php';

?>

<div class="Container-pageHome-form">
  <div class="page-Home">
    <div> <h1> THIS IS Edit HOME PAGE</h1></div>
    <form method="post" action="././page/dashboard/API/ApipageHome.php">
      <div> <input type="file" name="file1"></div>
      <div> <input type="text" name="text1"></div>
      <div> <input type="file" name="file2"></div>
      <div> <input type="text" name="text2"> </div>
      <div> <input type="file" name="file3"></div>
      <button type="submit">Update Home PAGE</button>
    </form>
  </div>
</div>

