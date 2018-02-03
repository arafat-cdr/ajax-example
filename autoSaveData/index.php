<?php $filepath = realpath(dirname(__FILE__)); include('assets/menu.php'); ?>

<div class="container">
	<div class="row">
	<!-- 	<h1 class="text-center alert">My Ajax learning</h1>  -->
	</div>
	
</div>

<div class="container">

	  <form class="navbar-form navbar-left" role="search" action="arafat.php" method="post">
        <div class="form-group">
        	<textarea class="form-control" name="autoSave" id="autoSave"></textarea>
        </div>
       <input type="hidden" name="autoSaveId" id="autoSaveId">
      </form>
</div>
<style type="text/css">
	#autoSaveStatus{color: green;}
</style>
 <div id="autoSaveStatus"></div>


<?php include('assets/footer.php');?>