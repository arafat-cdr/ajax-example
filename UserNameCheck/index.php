<?php $filepath = realpath(dirname(__FILE__)); include('assets/menu.php'); ?>

<div class="container">
	<div class="row">
	<!-- 	<h1 class="text-center alert">My Ajax learning</h1>  -->
	</div>
	
</div>

<div class="container">

	  <form class="navbar-form navbar-left" role="search" action="arafat.php" method="post">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter your name" name="userName" id="userName">
        </div>
       <!--  <button type="submit" class="btn btn-default" name="btn">Search</button> -->
      </form>
      <div id="userStatus"></div>
	
</div>


<?php include('assets/footer.php');?>