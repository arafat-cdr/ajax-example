<?php $filepath = realpath(dirname(__FILE__)); include('assets/menu.php'); ?>

<div class="container">
	<div class="row">
	<!-- 	<h1 class="text-center alert">My Ajax learning</h1>  -->
	</div>
	
</div>

<div class="container">

	  <form class="navbar-form navbar-left" role="search" action="" method="post">
	  <table>
	  	<tr>
	  		<td>Name :</td>
	  		<td></td>
	  		<td>        
	  			<div class="form-group">
          			<input type="text" class="form-control" placeholder="Enter your name" name="userName" id="userName">
        		</div>
        	</td>
	  	</tr>
	  	<tr>
	  		<td>PassWord :</td>
	  		<td></td>
	  		<td>        
	  			<div class="form-group">
          			<input type="passWord" class="form-control" placeholder="Enter password" name="userName" id="password">
        		</div>
        	</td>
	  	</tr>
	  	 	<tr>
	  		<td></td>
	  		<td></td>
	  		<td><button type="button" value="Show PassWord" class="btn btn-danger" id="showpassword">Show PassWord</button></td>
	  	</tr>
	  </table>
       <!--  <button type="submit" class="btn btn-default" name="btn">Search</button> -->
      </form>
      <div id="userStatus"></div>
	
</div>


<?php include('assets/footer.php');?>