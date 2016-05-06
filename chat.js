var bottom = true;

jQuery(document).ready(function() {
	
	$("#text").focus();
	
	listChat();
	setInterval(function() {
		listChat();
	}, 500);
	
	listOnline();
	setInterval(function() {
		listOnline();
	}, 5000);
	
	$( "#sendform" ).submit(function(e) {
		if($('#text').val() != "") {
			$.post("send.php", {text: $('#text').val()});
			$('#text').val("");
		}
		e.preventDefault();
	});
	
	$("#msg").scroll(function() {
		if($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
			bottom = true;
			//console.log("bottom");
		}
		else {
			bottom = false;
			//console.log("not bottom");
		}
	});
	
	$("#clickClear").click(function(e) {
		$.post("clear.php");
		$("#msg").text("Cleared chat");
	});
});

function listChat() 
{
	$.get("list.php", function (data) {
		$("#msg").append(data);
		if(window.bottom) {
			//console.log("scrolled down");
			$('#msg').scrollTop($('#msg')[0].scrollHeight);
		}
	});
	//console.log("Updated chat");
}

function listOnline()
{
	$("#online").load("online.php");
	//console.log("Updated online");
}
	