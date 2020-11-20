<html>

<head>
  <title>index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
  <?php
  $conn = mysqli_init();
  mysqli_real_connect($conn, 'itf-lab-database.mysql.database.azure.com', 'pavarisa@itf-lab-database', '2002THtonhom', 'itflab', 3306);
  if (mysqli_connect_errno($conn)) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
  }
  $res = mysqli_query($conn, 'SELECT * FROM guestbook');
  ?>
  <div class="container mt-5">
    <div class="card-header bg-warning text-body d-flex justify-content-between">
      <h3>HOME</h4>
       <a href="form.php" class="btn btn-primary">ADD</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover table-bordered table-sm">
          <thead class="thead-dark">
            <tr>
              <th width="300">
                <div align="center">Name</div>
              </th>
              <th width="300">
                <div align="center">Comment </div>
              </th>
              <th width="300">
                <div align="center">Link </div>
              </th>
              <th width="300">
                <div align="center">Action</div>
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($Result = mysqli_fetch_array($res)) {
            ?>
              <tr>
                <td><?php echo $Result['Name']; ?></td>
                <td><?php echo $Result['Comment']; ?></td>
                <td><?php echo $Result['Link']; ?></td>
                <td>
                  <a class="btn btn-secondary" href="edit.php?ID=<?php echo $Result['ID']; ?>">EDIT</a>
                  <a class="btn btn-danger" href="delete.php?ID=<?php echo $Result['ID']; ?>">DELETE</a>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>
          </div>
       </div>
      </table>


  <?php
  mysqli_close($conn);
  ?>
</body>

</html>
