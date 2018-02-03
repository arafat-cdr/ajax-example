<?php $filepath = realpath(dirname(__FILE__)); include('assets/menu.php'); ?>

<div class="container">
	<div class="row">
	<!-- 	<h1 class="text-center alert">My Ajax learning</h1>  -->
	</div>
	
</div>

<div class="container">

	  <form class="navbar-form navbar-left" role="search" action="arafat.php" method="post">
        <div class="form-group">
        	<textarea class="form-control" name="body" id="body"></textarea>
        </div>
       <input type="submit"  class="btn btn-default" name="autosubmit" value="autopost" id="autosubmit">
      </form>
</div>
 <div id="autoStatus"></div>


<?php include('assets/footer.php');?>