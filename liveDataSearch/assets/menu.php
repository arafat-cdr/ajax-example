<!DOCTYPE html>
<html>
<head>
	<title>Ajax</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<!-- Menu code start -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="">Ajax</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">HOME<span class="sr-only">(current)</span></a></li>
        <li><a href=""></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href=""></a></li>
           
          </ul>
        </li>
        
        <li><a>
                <?php
                date_default_timezone_set('Asia/Dhaka');
                $timestamp = time();
                $date_time = date("d-m-Y (D) H:i:s", $timestamp);
                echo "$date_time";
                ?>
    <a/></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <form class="navbar-form navbar-left" role="search" action="search_product_name.php" method="get">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="product name" name="res">
        </div>
        <button type="submit" class="btn btn-default" name="btn">Search</button>
      </form>
          <div class="btn-group">
            <a href="#" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></a>
            <ul class="dropdown-menu">
            </ul>
               <li class="active"><a href=""><span class="badge">
               </span></a></li>
</div>
    </div>
  </div>
</nav>
<!-- Menu code End -->