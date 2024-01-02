;(function($){
	$(document).ready(function(){
		$('input[type="radio"]').click(function(){
			var inputValue = $(this).attr("value");
			var targetBox = $("." + inputValue);
			$(".bank-method-desc").not(targetBox).hide();
			$(targetBox).slideDown(400);
		});
	});
}(jQuery))