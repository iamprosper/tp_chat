$("#login_btn").click(function() {
	// e.preventDefault();
    
    $.post("./php/scripts/auth.php", {login : $("#username").val(), password : $("#password").val()}, function(data) {
        if(data == false) {
            $("#connexion_error").text("login ou mot de passe invalide!").show();
        }else {
            $("#connexion_error").text("login ou mot de passe invalide!").hide();
        	console.clear();
        	console.log(data);
            window.location = "php/chat_room.php";
        }
    });
});

// var s = new A