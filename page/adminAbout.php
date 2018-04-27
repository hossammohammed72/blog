<?php 
$postAdded=false ;
if(isset($_POST['about'])){
    if(isset($_POST['title']) && !empty($_POST['title']) )
        $title=scr($_POST['title']);
    if(isset($_POST['content']) && !empty($_POST['content']) )
        $content=scr($_POST['content']);
    $query = $pdo->prepare('INSERT INTO about(`userId`,`bio`,`shortParagraph`)VALUES(?,?,?)  ON DUPLICATE KEY UPDATE  `bio`=? , `shortParagraph`=?');
    $query->bindParam(1,$_SESSION['id']);
    $query->bindParam(2,$title);
    $query->bindParam(3,$content);
    $query->bindParam(4,$title);
    $query->bindParam(5 ,$content);   
    if($query->execute())
        $postAdded=true ;
}
?>
<div class='card' style='background-color:#91A3B0'>
    <div class='card panel panel-default' style='margin-top:80px; margin-left:50px; margin-bottom:20px; max-height:500px;width:500px;'>
        <div class='panel panel-headine'  style=''>
            <h3> Edit About</h3>
            <?php 
            if($postAdded)
            echo "<h4 class='alert alert-success'>About Edited  successfully<h4>";
            ?>
        </div>
        <div class='panel panel-content'>
        <form  method="POST" class="form-group">
            <div class='form-group' > 
            <label> bio </label>
            <input type='text'  class="form-control"  name='title' required placeholder="write cool things about you"  >
            </div>
            <div class='form-group' > 
                <label> paragraph about you </label>
                <textarea  class="form-control" name='content' required placeholder="about Content"  ></textarea>
            </div>
            <input type='submit' class='btn btn-info' value='Post' name='about' > 
        </form>
        </div>
    </div>
</div>