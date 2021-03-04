dropdown = document.querySelector(".dropdown");
logout = document.querySelector(".dropdown-content");
app = document.querySelector(".app");

dropdown.addEventListener("click", () => {
    const caretClicked = logout.style.display;

    if (caretClicked == "none") {
        logout.style.display = "inline-block";
    } else {
        logout.style.display = "none";
    }
});

logout.addEventListener("mouseout", () => {
    logout.style.display = "none";
});
