
<!-- <?php

	// session_start();
	
	// if( !isset($_SESSION["login"]) || empty($_SESSION["login"]) ){
	// 	header("location:../index.php");
	// }

?>
 -->
<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
	<link rel="stylesheet" type="text/css" href="../ressources/css/chat.css">
</head>
<body>

	<div id="content">
		
		<div id="header"><em>Chat</em></div>
		
		<div id="chat">
			
			<div id="discussions">

				<div class="discussion">

					<div class="user-photo"></div>

					<div class="user-message">Just a simple message</div>

					<div class="unread">5</div>

				</div>

				<div class="discussion">

					<div class="user-photo"></div>

					<div class="user-message">Chat template</div>

					<div class="unread">6</div>

				</div>
				
				<div class="discussion">

					<div class="user-photo"></div>

					<div class="user-message">See the message</div>

					<div class="unread">10</div>

				</div>
				
				<div class="discussion">

					<div class="user-photo"></div>

					<div class="user-message">Go ahead bro</div>

					<div class="unread">1</div>

				</div>
				
			</div>
			<div id="chatbox">

				<div id="messages">
					
					<div class="chat-friend">
						<div class="user-tof"></div>
						<div class="friend-message">friend</div>
					</div>
					
					<div class="chat-self">
						<div class="user-tof"></div>
						<div class="self-message">Self</div>
					</div>
					
				</div>

				<div id="form">
					
					<textarea id="msgbox" name="msgbox"></textarea>
					<button id="send" name="send">Send</button>

				</div>
			</div>
			
		</div>
	</div>
	<script type="text/javascript" src="../js/jquery.js"></script>
	
	<script type="text/javascript" src="../js/chat.js"></script>
	
</body>
</html>