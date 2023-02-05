<article>
    <h1><?php
        echo $articleTitle;
        ?></h1>
    <em>Published on: <?php
                        echo $publishDate;
                        ?></em>
    <br><br>
    <p><?php
        echo $articleContent;
        ?></p>
    <hr>
    <h3>Comments: </h3>
    <ul>
        <?php
        //  getting all the comments
        $select = "comment.*, users.firstname";
        $where = "JOIN users ON comment.user_id = users.user_id
        WHERE comment.article_id = $article_id";
        $fetchComments = selectSpecific($pdo,$select,'comment',$where);
        // var_dump($fetchComments);
        
        foreach ($fetchComments as $comments){
            echo '<li>'. $comments['firstname'] .' commented: '. $comments['comment'] .'</li>';
        }
        ?>
    </ul>



    <?php
    // if logged in
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    ?>
        <form action="#" method="POST">
            <h3>Add your Comment:</h3>
            <textarea name="commentText" cols="10" rows="100"></textarea>
            <input type="submit" name="submit" value="Comment">
        </form>
    <?php
    }
    ?>
</article>