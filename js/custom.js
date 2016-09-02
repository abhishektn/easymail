$(document).ready(function(){
	$(".image").click(function(){
		var name = $(this).attr("name");
		$("#toemail").val(name)
		$("#tomail").html(name)
		alert(name);
		$("#form1").submit();
	});
});