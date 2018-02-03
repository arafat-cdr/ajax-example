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
/*$("#userName").keyup(function(){
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


})*/

//Fb like post without refresh pages
$(document).ready(function(){
/*	$("#autosubmit").click(function(){
		var content = $("#body").val();
		if($.trim(content) != "")
		{
				$.ajax({
		 		url:"../../ajax/FbLikePostWithoutRefresh/arafat.php",
		 		method:"POST",
		 		data:{body:content},
		 		dataType:"text",
		 		success:function(data){
		 			//$('#autoStatus').html(data); //ata dorkar nai
		 			$("#body").val("");
		 		}
		 	}); 
			return false;
		}
	});
	setInterval(function(){
	$("#autoStatus").load("../../ajax/FbLikePostWithoutRefresh/arafat.php").fadeIn("slow");

	},2000); //this is reload time in every 2000ms;*/

	//Live Data Search From database
	$("#liveSearch").keyup(function(){
		var live = $(this).val();
		if(live != '') {
			$.ajax({
		 		url:"../../ajax/liveDataSearch/arafat.php",
		 		method:"POST",
		 		data:{liveSearch:live},
		 		dataType:"text",
		 		success:function(data){
		 			$('#liveStatus').html(data);
		 		}
			});
		}
		else
		{
			$('#liveStatus').html("");;
		}
	});
})