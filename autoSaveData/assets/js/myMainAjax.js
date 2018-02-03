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

/*//Fb like post without refresh pages
$(document).ready(function(){
	$("#autosubmit").click(function(){
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

	},2000); //this is reload time in every 2000ms;
})*/

//AutoSave Data
$(document).ready(function(){
	function contentSave() {
		var autoSave = $("#autoSave").val();
		var autoSaveId = $("#autoSaveId").val();
		if(autoSave != "")
		{
				$.ajax({
		 		url:"../../ajax/autoSaveData/arafat.php",
		 		method:"POST",
		 		data:{autoSave:autoSave,autoSaveId:autoSaveId},
		 		dataType:"text",
		 		success:function(data){
		 			if(data != '')
		 			{
		 				$("#autoSaveId").val(data);
		 			}
		 			$("#autoSaveStatus").text("Content Save as draft....");
		 			setInterval(function(){
		 			$("#autoSaveStatus").text("");

		 			},2000);
		 		}
		 	}); 
		}
	}

	setInterval(function(){
		contentSave(); //i call my above function
	},10000); //this is reload time in every 2000ms;
});
