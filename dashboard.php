<?php
include "../config.php";

$result = mysqli_query($conn, "SELECT * FROM visitors");
?>

<h2>Visitor Logs</h2>
<table border="1">
<tr>
    <th>Name</th>
    <th>Mobile</th>
    <th>Purpose</th>
    <th>Photo</th>
    <th>Entry Time</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?= $row['name'] ?></td>
    <td><?= $row['mobile'] ?></td>
    <td><?= $row['purpose'] ?></td>
    <td><img src="../uploads/<?= $row['photo'] ?>" width="60"></td>
    <td><?= $row['entry_time'] ?></td>
</tr>
<?php } ?>
</table>
