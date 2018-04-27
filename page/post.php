<?php 
if(isset($_GET['postid']) && !empty($_GET['postid'])){
  $postId=scr($_GET['postid']);   
  $stmt = $pdo->prepare('SELECT * FROM post where id=?');
  $stmt->bindParam(1,$postId);
  if($stmt->execute() && $data = $stmt->fetch()){
?>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?php echo URL.LAYOUT; ?>img/post-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
           <h1 class='text-center'> <?php echo $data['title']; ?></h1>
           Posted on <?php echo date('F j, Y,',strtotime($data['date'])); ?>
            </div>
            
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <?php echo $data['text']; ?>
            </div>
        </div>
      </div>
    </article>

    <hr>
<?php  
  }
  else{
    echo "<h1 class='alert alert-danger' >OH OH, POST NOT FOUND</h1>";
    redir(URL,1.4);  
    } 
}else{
  redir(URL,0);
  } ?>