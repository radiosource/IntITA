$(document).ready(function() {
	
// ----------------------------- C compiler -----------------------------------

    $('#C_Code').click(function() {
        var code = $('#code').val();
        if(code == "") {
			$("#response").css("color","red").text("You haven't input your code!");
		} else {
			$.ajax({
				type: "POST",
				url: "php/toCompiler.php",
				data: { code: code},
				dataType: "json",
				success: function(response){
					alert( "length" + response.length );
					alert( "data" + this.error );
					$("#response").text(this.error);
				},
				error: function(result){
					console.log(result);
				}
			});
		}
        
    })
    
 // ------------------------- Javascipt interpreter ---------------------------
 
    $('#JS_Code').click(function() {
        var code = $('#code').val();
        if(code == "") {
			$("#response").css("color","red").text("You haven't input your code!");
		} else {
			try {
				$("#response").text(""); // for cases when a user uses alert/prompt/confirm
				var response = eval(code);
				$("#response").css("color","green").text(response);
			} catch(e) {
				$("#response").css("color","red").text(e);
			}
		}
    })
})

