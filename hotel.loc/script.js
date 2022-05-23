var more = document.getElementsByClassName("about_button_more")[0];
var btn = document.getElementsByClassName("about_button")[0];
var close = document.getElementsByClassName("more_close")[0];

btn.onclick = function() {
	more.style.display = "block";
    document.body.style.overflow = "hidden";
}

close.onclick = function() {
	more.style.display = "none";
    document.body.style.overflow = "auto"; 
}

window.onclick = function() {
	if (event.target == more) {
		more.style.display = "none";
        document.body.style.overflow = "auto"; 
	}
}
