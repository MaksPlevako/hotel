var rules = document.getElementsByClassName("rules_modal")[0];
var btn = document.getElementsByClassName("rules_btn")[0];
var close = document.getElementsByClassName("rules_close")[0];

btn.onclick = function() {
	rules.style.display = "block";
    document.body.style.overflow = "hidden";
}

close.onclick = function() {
	rules.style.display = "none";
    document.body.style.overflow = "auto"; 
}

window.onclick = function() {
	if (event.target == rules) {
		rules.style.display = "none";
        document.body.style.overflow = "auto"; 
	}
}