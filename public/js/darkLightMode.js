function darkMode() {
	document.body.classList.add("dark-mode");
	localStorage.setItem("darkMode", "on")
}

function lightMode() {
	document.body.classList.remove("dark-mode");
	localStorage.setItem("darkMode", "off")
}

if (localStorage.getItem("darkMode")) {
	body.style.backgroundColor = localStorage.getItem("dark-mode");
	backgroundColor.value = localStorage.getItem("dark-mode");
}