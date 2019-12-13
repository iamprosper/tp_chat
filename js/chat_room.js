// alert('Hello');
$('#btnsend').on('click', function(event) {
	event.preventDefault();
	// alert("clicked");
	/* Act on the event */
	var form_data = $('#form').serialize();
	
	$.post('../php/insert.php', form_data, process_,'text');

	function process_(data, textStatus, xhr) {
		alert(data);
	}
});
