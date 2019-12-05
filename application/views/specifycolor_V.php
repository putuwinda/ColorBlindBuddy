<!DOCTYPE html>
<html lang="en" dir="ltr">


  <head>
    <meta charset="utf-8">

          <script src="https://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
          <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
          <script src="https://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
          <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
          <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
          <link rel="stylesheet" href="#">
    <script type="text/javascript" language="javacript" src="<?php echo base_url()?>assets/js/specifycolor.js"></script>
    <title> COLOR IDENTIFY </title>

  </head>
  <body>
    <!--
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
<div class="container">
<a class="navbar-brand" href="#">ColorBlind Buddy</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarResponsive">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item active">
      <a class="nav-link" href="#">Home
        <span class="sr-only">(current)</span>
      </a>
    </li>
  </ul>
</div>
</div>
</nav>
-->
<section class="content-section text-white text-center" style="background-image: linear-gradient(#7AB3B0, #ddb075); height: 600px">
  <div class="main">
    <div class="jumbotron">
    <h1 id="title"> SPECIFY A COLOR  </h1>

        <form method="post" action="" enctype="multipart/form-data">
            <div id="image-preview-before"></div>

              <input type="file" id="image-file" name="test" style="margin-left:580px; margin-top:100px;">
              <p id="file-info"></p>


        </form>
        <div id="finalDisplay"></div>
        <div class="push"></div>


     </div>
       </div>

</section>

  </body>
</html>
