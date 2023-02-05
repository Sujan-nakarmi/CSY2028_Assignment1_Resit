<style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 10px;
  }
</style>
<article>
    <h2>Manage Admin</h2>
    <li><a class="articleLink" href="addAdmin.php">Add Admin</a></li>
<table>
  <tr>
    <th>Index</th>
    <th>Firstname</th> 
    <th>Lastname</th>
    <th>Email</th>
    <th>Contact</th>
    <th>Address</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  <?php
  $index = 1;
  foreach($fetchAdminInfo as $admin){
    echo '<tr>';
    echo '<td>'. $index .'</td>';
    echo '<td>'. $admin['firstname'] .'</td>';
    echo '<td>'. $admin['lastname'] .'</td>';
    echo '<td>'. $admin['email'] .'</td>';
    echo '<td>'. $admin['contact_number'] .'</td>';
    echo '<td>'. $admin['address'] .'</td>';
    echo '<td><a href=editAdmin.php?userId='.$admin['user_id'].'>Edit</a></td>';
    echo '<td><a href=deleteAdmin.php?userId='.$admin['user_id'].'>Delete </a></td>';
    echo '</tr>';
    $index++;
  }
  ?>
</table>
</article>