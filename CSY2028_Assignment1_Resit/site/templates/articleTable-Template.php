<style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 10px;
  }
</style>
<article>
    <h2>Manage article</h2>
    <li><a class="articleLink" href="addArticle.php">Add article</a></li>
<table>
  <tr>
    <th>Index</th>
    <th>Title</th> 
    <th>Content</th>
    <th>Publish Date</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  <?php
  $index = 1;
  foreach($fetchArticleInfo as $article){
    echo '<tr>';
    echo '<td>'. $index .'</td>';
    echo '<td>'. $article['title'] .'</td>';
    echo '<td>'. $article['content'] .'</td>';
    echo '<td>'. $article['publishDate'] .'</td>';
    echo '<td><a href=editArticle.php?articleId='.$article['article_id'].'>Edit</a></td>';
    echo '<td><a href=deleteArticle.php?articleId='.$article['article_id'].'>Delete </a></td>';
    echo '</tr>';
    $index++;
  }
  ?>
</table>
</article>