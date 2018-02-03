/*User name availability checking*/
/*$(document).ready(function(){
	$('#userName').blur(function(){
		var userName = $(this).val();
		 	$.ajax({
		 		url:"../../ajax/ajaxAutoComplete/arafat.php",
		 		method:"POST",
		 		data:{userName:userName},
		 		dataType:"text",
		 		success:function(data){
		 			$('#userStatus').html(data); 
		 		}
		 	});

	});
});*/ 

/*AutoComplete Username*/
$("#userName").keyup(function(){
	var userName = $(this).val();
	if (userName != '') {
				$.ajax({
		 		url:"../../ajax/ajaxAutoComplete/arafat.php",
		 		method:"POST",
		 		data:{userName:userName},
		 		dataType:"text",
		 		success:function(data){
		 			$('#userStatus').fadeIn(); 
		 			$('#userStatus').html(data); 
		 		}
		 	});
	}
});

$(document).on('click', 'li',function(){
	$("#userName").val($(this).text());
	$('#userStatus').fadeOut();


})