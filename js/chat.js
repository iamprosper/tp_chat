$(".discussion").on('click',function() {
	$(".discussion").css({
		background: 'white',
		// property2: 'value2'
	});
	$(this).css({
		background : '#464866',
		// property2: 'value2'
	});
	// alert("hi");
});

function getAvailableUsers() {
	$.post('../php/select.php', function(data) {
		if (data == false) {
			alert("No users found");
		}else{
			console.log(data);
		}
	});
}

getAvailableUsers();
// $(".discussion").hover(function() {
// 	/* Stuff to do when the mouse enters the element */
// 	$(this).css({
// 		background: '#5680E9',
// 		// property2: 'value2'
// 	});
// }, function() {
// 	/* Stuff to do when the mouse leaves the element */
// 	$(this).css({
// 		background: '',
// 	});
// });

// var message = 
// "<div class=\"chat-friend\">"+
// "<div class =\"user-tof\"></div>"+
// "<div class=\"friend-message\"> New friend message from js</div>"+
// "</div>";

// var self = 
// "<div class=\"chat-self\">"+
// "<div class =\"user-tof\"></div>"+
// "<div class=\"self-message\"> New user message from js</div>"+
// "</div>";

// $("#messages").append(message,self);


function showFriendMessages(message) {
	var friend = 
	"<div class=\"chat-friend\">"+
	"<div class =\"user-tof\"></div>"+
	"<div class=\"friend-message\">" + message +" </div>"+
	"</div>"
	return friend;
}

function showSelfMessages(message) {
	var self =
	"<div class=\"chat-self\">"+
	"<div class =\"user-tof\"></div>"+
	"<div class=\"self-message\">" + message +" </div>"+
	"</div>";
	return self;

}
var friend = showFriendMessages("New friend message from js");
var self = showSelfMessages("New user message from js");

// alert(friend);
// alert(self);

$("#messages").append(friend,self);

var script_discussion_helper =
	"<script>"+
	"$(\".discussion\").on('click',function() {"+
		"$(\".discussion\").css({background: 'white',});"+
		"$(this).css({background : '#464866',});"+
	"});"+
	"</script>";


function loadUsersDiscussions(lastMessage, unread_number) {
	var user_discussion = 
	"<div class=\"discussion\">"+
	"<div class=\"user-photo\"></div>"+
	"<div class=\"user-message\">"+ lastMessage + "</div>"+
	"<div class=\"unread\">" + unread_number + "</div>"+
	script_discussion_helper+
	"</div>";
	return user_discussion;
}

var discussion = loadUsersDiscussions("hi",9);

$("#discussions").append(discussion);