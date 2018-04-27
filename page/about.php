<?php 
$stmt = $pdo->prepare('SELECT * from about where userId=1');
if($stmt->execute() && $data = $stmt->fetch());
else
  redir(URL,0);


?>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?php echo URL.LAYOUT; ?>img/about-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>About Me</h1>
              <span class="subheading"><?php echo $data['bio'] ?></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
      <?php  echo $data['shortParagraph'];?></div>
      </div>
    </div>

    <hr>
