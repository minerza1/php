<!DOCTYPE html>
<html>
<head>
<title>
</title>
</head>
<body>
<?php
  $keyword  = $_REQUEST["keyword"];
  require('connect.php');

  $sql = "
    SELECT * 
    FROM sickness
    WHERE Symptom LIKE '%" . $keyword . "%';
    ";

  $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
  ?>
    <table border="1">
        <tr>
            
      <th width="5">
        <div align="center">Index</div>
      </th>
      <th width="100">
        <div align="center">Name</div>
      </th>
      <th width="100">
        <div align="center">Symptom</div>
      </th>
      <th width="100">
        <div align="center">Instruction</div>
      </th>
      
    </tr>
    <?php
    $i = 0;
    while ($objResult = mysqli_fetch_array($objQuery)) {
    ?>
      <tr>
        
        
        
        <td><?php echo $objResult["Index"]; ?></td>
        <td><?php echo $objResult["Name"]; ?></td>
        <td><?php echo $objResult["Symptom"]; ?></td>
        <td><?php echo $objResult["Instruction"]; ?></td>
        
      </tr>
      </div>
    <?php
      $i++;
    }
    ?>
  </table>
  <?php
  mysqli_close($conn); // ปิดฐานข้อมูล
  echo "<br><br>";
  echo "--- END ---";
  ?>
   
 <a href = "search.php">Back 
   
</body>
</html>