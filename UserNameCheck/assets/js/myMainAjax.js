$(document).ready(function(){
	$('#userName').blur(function(){
		var userName = $(this).val();
		 	$.ajax({
		 		url:"../../ajax/UserNameCheck/arafat.php",
		 		method:"POST",
		 		data:{userName:userName},
		 		dataType:"text",
		 		success:function(data){
		 			$('#userStatus').html(data); 
		 		}
		 	});

	});
}); 