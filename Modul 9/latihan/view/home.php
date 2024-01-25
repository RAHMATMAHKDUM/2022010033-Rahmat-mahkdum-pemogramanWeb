<?php include "../header.php" ?>
<div class="container">
<h1 class="text-center">Data to perform CRUD
Operations</h1>
<a href="create.php" class='btn btn-outline-dark mb-2'>
<i class="bi bi-person-plus"></i> Create New User</a>
<table class="table table-striped table-bordered tablehover">
<thead class="table-dark">
<tr>
<th scope="col">Icone</th>
<th scope="col">judul survei</th>
<th scope="col">Link</th>
<th scope="col"> Password</th>
<th scope="col" colspan="3" class="textcenter">CRUD Operations</th>
</tr>
</thead>
<tbody>
<tr>
<?php
$query = "SELECT * FROM
users"; // SQL query to fetch all table data
$view_users = mysqli_query($conn,
$query); // sending the query to the database
// displaying all the data retrieved fromthe database using while loop
while ($row =
mysqli_fetch_assoc($view_users)) {
$id = $row['ID'];
$user = $row['username'];
$email = $row['email'];
$pass = $row['password'];
echo "<tr >";
echo " <th scope='row' >{$id}</th>";
echo " <td > {$user}</td>";
echo " <td > {$email}</td>";
echo " <td >{$pass} </td>";
echo " <td class='text-center'> <a
href='read.php?user_id={$id}' class='btn btn-primary'> <i
class='bi bi-eye'></i> View</a> </td>";
echo " <td class='text-center' > <a
href='update.php?edit&user_id={$id}' class='btn btnsecondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";
echo " <td class='text-center'> <a
href='delete.php?delete={$id}' class='btn btn-danger'> <i
class='bi bi-trash'></i> DELETE</a> </td>";
echo " </tr> ";
}
?>
</tr>
</tbody>
</table>
</div>
<!-- a BACK button to go to the index page -->
<div class="container text-center mt-5">
<a href="../index.php" class="btn btn-warning mt-5">
Back </a>
<div>
<!-- Footer -->
<?php include "../footer.php" ?>