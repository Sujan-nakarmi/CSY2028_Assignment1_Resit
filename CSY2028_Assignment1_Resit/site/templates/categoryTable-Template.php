<style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 10px;
  }
</style>
<article>
    <h2>Manage Category</h2>
    <li><a class="articleLink" href="addCategory.php">Add Category</a></li>
<table>
  <tr>
    <th>Index</th>
    <th>Category</th> 
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  <?php
  $index = 1;
  foreach($fetchCategoryInfo as $category){
    echo '<tr>';
    echo '<td>'. $index .'</td>';
    echo '<td>'. $category['name'] .'</td>';
    echo '<td><a href=editCategory.php?catId='.$category['category_id'].'>Edit</a></td>';
    echo '<td><a href=deleteCategory.php?catId='.$category['category_id'].'>Delete </a></td>';
    echo '</tr>';
    $index++;
  }
  ?>
</table>
</article>