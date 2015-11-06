$(document).ready(function() {
	var status = "unread";

	if($(".status:contains("+status+")")) {

		$(".entry").css("border","1px solid #38BA8F");
		$(".entry").css("background-color","#E1F5EE");
		$(".entry").css("cursor","pointer");

		$(this).on("click", function() {

			$.ajax({

			});

			$(".entry").css("border","1px solid gray");
			$(".entry").css("background-color","white");
		});

		



		//alert("Messages are unread");
	} else {
		alert("All messages are read");
	}
});

