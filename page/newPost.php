<?php 
$postAdded=false ;
if(isset($_POST['post'])){
    if(isset($_POST['title']) && !empty($_POST['title']) )
        $title=scr($_POST['title']);
    if(isset($_POST['content']) && !empty($_POST['content']) )
        $content=scr($_POST['content']);
    $query = $pdo->prepare('INSERT INTO post(`title`,`text`)VALUES(?,?)');
    $query->bindParam(1,$title);
    $query->bindParam(2,$content);   
    if($query->execute())
        $postAdded=true ;
}
?>
<div class='card' style='background-color:#91A3B0'>
    <div class='card panel panel-default' style='margin-top:80px; margin-left:50px; margin-bottom:20px; max-height:500px;width:500px;'>
        <div class='panel panel-headine'  style=''>
            <h3> add a post </h3>
            <?php 
            if($postAdded)
            echo "<h4 class='alert alert-success'>Post Added successfully<h4>";
            ?>
        </div>
        <div class='panel panel-content'>
        <form  method="POST" class="form-group">
            <div class='form-group' > 
            <label> Post Title </label>
            <input type='text'  class="form-control"  name='title' required placeholder="Post Title"  >
            </div>
            <div class='form-group' > 
                <label> Post Content </label>
                <textarea  class="form-control" name='content' required placeholder="Post Content"  ></textarea>
            </div>
            <input type='submit' class='btn btn-info' value='Post' name='post' > 
        </form>
        </div>
    </div>
</div>