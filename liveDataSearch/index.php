<?php $filepath = realpath(dirname(__FILE__)); include('assets/menu.php'); ?>
<div class="container">
	<div class="row">
	<!-- 	<h1 class="text-center alert">My Ajax learning</h1>  -->
	</div>
	
</div>

<div class="container">

	  <form class="navbar-form navbar-left" role="search" action="" method="post">
       <input type="text"  class="form-control" name="liveSearch" placeholder="Enter your Keyword" id="liveSearch">
      </form>
</div>
 <div id="liveStatus"></div>

<?php include('arafat.php');?>
<?php include('assets/footer.php');?>