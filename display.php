<?php 
    include 'config.php';
    $query = "SELECT * FROM movies";
    $result = mysqli_query($conn, $query);
?>

<html>
    <head>
    </head>
    <body>
    <table class="table">
  <thead>
    <tr>
      <th>Sr No</th>
      <th>Movie Name</th>
      <th>Actor Name</th>
      <th>Actress Name</th>
      <th>Year of Release</th>
      <th>Director Name</th>
    </tr>
  </thead>
  <tbody>
    <?php
        if(mysqli_num_rows($result) > 0){
            $i = 1;
            while($row = mysqli_fetch_assoc($result)) {?>
                <tr>
                    <td> <?=$i++?> </td>
                    <td> <?=$row["movie"]?> </td>
                    <td> <?=$row["actor"]?> </td>
                    <td> <?=$row["actress"]?> </td>
                    <td> <?=$row["year"]?> </td>
                    <td> <?=$row["director"]?> </td>
                </tr>
            <?php  }
        }?>
  </tbody>
</table>
</body>
</html>