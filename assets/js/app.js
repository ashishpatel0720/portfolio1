$(document).ready(function(){
	
	var __ = function($string){
		return (config["langTable"][config["lang"]] && config["langTable"][config["lang"]][$string]) ? config["langTable"][config["lang"]][$string] : $string;
	};
	
	$(document.body).removeClass("no-js");

	if(window.innerWidth >= 768){
		$("#bubbles").removeClass("hide").bubbler({color: "#1D2833", min: 1.5, max: 2, ammount: 6, time: 30});
		$(".tip").tooltip();
		var popoverPlacement = "left";
	} else {
		var popoverPlacement = "bottom";
	}

	$("*[data-switch]").on("click", function(e){
		var containersTemp = config["containers"].slice(0);
		var subjectId   = $(this).attr("data-switch");
		var subject     = $(config["containers"][subjectId]);

		window.history.pushState({"id":subjectId}, "", config["containers"][subjectId]);
		containersTemp.splice(subjectId, 1);

		if( ! subject.is(":visible")){
			$(containersTemp.join(",")).fadeOut().promise().done(function(){
				subject.fadeIn().removeClass("hide");
			});	  
		}
	
		e.preventDefault();
	});

	if($.inArray(window.location.hash, config["containers"])){
		$("*[data-switch='" + config["containers"].indexOf(window.location.hash) + "']").trigger("click");
	}

	$("#form").submit(function(e){
		var inputEmail      = $("#input-email").val();
		var inputMessage    = $("#input-message").val();
		var inputToken      = $("#input-token").val();
		var reCaptchaRes    = $("#g-recaptcha-response").val();
		var inputError      = false;

		if( inputEmail == null || inputEmail == "" || ! /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(inputEmail)){
			inputError = true;
			$("#input-error-email").html(__("You have to enter your E-Mail"));
		} else {
			$("#input-error-email").html("&nbsp;");
		}

		if(inputMessage == "" || inputMessage == null){
			inputError = true;
			$("#input-error-message").html(__("You have to enter a message"));
		} else {
			$("#input-error-message").html("&nbsp;");
		}

		if(inputError == false){
			$.ajax({
				type:       "post",
				dataType:   "json",
				url:        "index.php",
				data:       {email: inputEmail, message: inputMessage, token: inputToken, q: "contact", recaptcha: reCaptchaRes},
				success: function(response){
					if(typeof(response.alerts) != "undefined" && response.alerts != false){
						$("#alerts").html(response.alerts).removeClass("hide");
					}
				}
			});
		}

		e.preventDefault();
	});
});