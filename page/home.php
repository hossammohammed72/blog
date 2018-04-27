    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Hossam Mohammed </h1>
              <span class="subheading">just another  Web Developer saying his thoughts to brand himself </span>
            </div>
          </div>
        </div>
      </div>
    </header>
 <?php 
 $stmt = $pdo->prepare('SELECT * FROM post where 1 order by `date` DESC ');
 $stmt->execute();
 while($data = $stmt->fetch()){
 ?>
    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href='<?php echo URL.'?page=post&postid='.$data['id'] ?>'>
              <h2 class="post-title">
                <?php echo $data['title']; ?>
              </h2>
              <h3 class="post-subtitle">
              <?php echo substr($data['title'],0,50); ?>
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Hossam Mohammed </a>
              on  <?php echo  date('F j, Y,',strtotime($data['date'])); ?> </p>
          </div>
          <hr>
          
        </div>
      </div>
    </div>

    <hr>
    <?php 
 }
    ?>
