<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Category list</title>
</head>
<body>
     <h1> Category list </h1>
     <?php
          include("confs/config.php");
          $result = mysqli_query( $conn, " SELECT * FROM categories");
     ?>
     <ul>
          <?php while( $row = mysqli_fetch_assoc($result)): ?>
               <li title="<?php echo $row['remark'] ?>">
                    <?php echo $row['name'] ?>
               </li>
          <?php endwhile; ?>
     </ul>
</body>
</html>