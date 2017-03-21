$(document).ready(function() {
	if(window.rcmail.buttons.settings){
		var id = window.rcmail.buttons.settings[0].id;
		var button = document.getElementById(id);
		button.onclick = redir;
	}
});

function redir(){
 	window.location = window.rcmail.env.settings_link_url;
	return false;
}
