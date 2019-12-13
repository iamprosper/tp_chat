<!DOCTYPE html>
<html>
<head>
	<title>Chat room</title>
	<link rel="stylesheet" type="text/css" href="../ressources/css/chat_room.css">
</head>
<body>
	<div class="chatbox">
		<div class="chatlogs">
			<div class="chat friend">
				<div class="chat-user"><!-- <img src="../ressources/img/userOne.jpg"> --></div>
				<div class="chat-message">Yo</div>
			</div>
			<div class="chat self">
				<div class="chat-user"><img src="../ressources/img/userTwo.jpg"></div>
				<div class="chat-message">What's up!!</div>
			</div>
			<div class="chat friend">
				<div class="chat-user"><!-- <img src="../ressources/img/userOne.jpg"> --></div>
				<div class="chat-message">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
			</div>
			<div class="chat self">
				<div class="chat-user"><img src="../ressources/img/userTwo.jpg"></div>
				<div class="chat-message">What's up!!</div>
			</div>
			<div class="chat friend">
				<div class="chat-user"><!-- <img src="../ressources/img/userOne.jpg"> --></div>
				<div class="chat-message">Yo</div>
			</div>
			<div class="chat self">
				<div class="chat-user"><img src="../ressources/img/userTwo.jpg"></div>
				<div class="chat-message">What's up!!</div>
			</div>
			<div class="chat friend">
				<div class="chat-user"><!-- <img src="../ressources/img/userOne.jpg"> --></div>
				<div class="chat-message">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
			</div>
			<div class="chat self">
				<div class="chat-user"><img src="../ressources/img/userTwo.jpg"></div>
				<div class="chat-message">What's up!!</div>
			</div>
			
		</div>
		<form class="chat-form" action="" method="post" id="form">
			<textarea name="txtmessage" id="txtmessage" placeholder="Put your message here !!"></textarea>
			<button name="btnsend" id="btnsend">Send</button>
		</form>
	</div>
<script src="../js/jquery.js"></script>
<script src="../js/chat_room.js"></script>
</body>

</html>