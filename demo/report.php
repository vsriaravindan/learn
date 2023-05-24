<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="downloads.css">
  <title>Medical Report</title>
  <script>
        function goback()
        {
            window.history.back();
        }
    </script>
</head>
<body style="background: url(4.jpg); background-size: cover;">

<button class="back" onclick="goback()">Go Back</button>

<table style="border: solid; font-size: 16pt; font-family: verdana; font-weight: bold;">
<thead style="color: white;background: red;">
    <th>ID</th>
    <th>Member Name</th>
    <th>Reports</th>
</thead>
<tbody style="background: rgba(255,255,255,.3);">
  <?php foreach ($files as $file): ?>
    <tr>
      <td><center><?php echo $file['id']; ?></center></td>
      <td><center><?php echo $file['fname']; ?></center></td>
      <td><center><a href="report.php?file_id=<?php echo $file['id'] ?>">Download</a></center></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>

</body>
</html>