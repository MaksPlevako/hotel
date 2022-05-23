var rest = document.getElementsByClassName("rest_more")[0];
var cafe = document.getElementsByClassName("cafe_more")[0];
var busines = document.getElementsByClassName("busines_more")[0];
var fitnes = document.getElementsByClassName("fitnes_more")[0];
var bar = document.getElementsByClassName("bar_more")[0];
var spa = document.getElementsByClassName("spa_more")[0];
var btn_rest = document.getElementsByClassName("rest_text")[0];
var btn_cafe = document.getElementsByClassName("cafe_text")[0];
var btn_busines = document.getElementsByClassName("busines_text")[0];
var btn_fitnes = document.getElementsByClassName("fitnes_text")[0];
var btn_bar = document.getElementsByClassName("bar_text")[0];
var btn_spa = document.getElementsByClassName("spa_text")[0];
var close_rest = document.getElementsByClassName("rest_close")[0];
var close_cafe = document.getElementsByClassName("cafe_close")[0];
var close_busines = document.getElementsByClassName("busines_close")[0];
var close_fitnes = document.getElementsByClassName("fitnes_close")[0];
var close_bar = document.getElementsByClassName("bar_close")[0];
var close_spa = document.getElementsByClassName("spa_close")[0];

btn_rest.onclick = function() {
	rest.style.display = "block";
}

btn_cafe.onclick = function() {
	cafe.style.display = "block";
}

btn_busines.onclick = function() {
	busines.style.display = "block";
}

btn_fitnes.onclick = function() {
	fitnes.style.display = "block";
}

btn_bar.onclick = function() {
	bar.style.display = "block";
}

btn_spa.onclick = function() {
	spa.style.display = "block";
}

close_rest.onclick = function() {
	rest.style.display = "none";
}

close_cafe.onclick = function() {
	cafe.style.display = "none"; 
}

close_busines.onclick = function() {
	busines.style.display = "none";
}

close_fitnes.onclick = function() {
	fitnes.style.display = "none";
}

close_bar.onclick = function() {
	bar.style.display = "none";
}

close_spa.onclick = function() {
	spa.style.display = "none";
}

window.onclick = function() {
	if (event.target == rest || event.target == cafe || event.target == busines || event.target == fitnes || event.target == bar || event.target == spa) {
		rest.style.display = "none";
		busines.style.display = "none";
		cafe.style.display = "none";
		fitnes.style.display = "none";
		bar.style.display = "none";
		spa.style.display = "none";
	}
}