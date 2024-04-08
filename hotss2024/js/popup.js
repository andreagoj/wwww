const overlay = document.getElementById("overlay");
const check = document.getElementById("checkbox")

overlay.addEventListener("click", () => {
	overlay.classList.add("active");
});

check.addEventListener("click", () => {
	overlay.classList.add("active")
})