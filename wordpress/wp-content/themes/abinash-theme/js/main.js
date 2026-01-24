document.addEventListener("DOMContentLoaded", () => {
  const toggle = document.getElementById("darkToggle");

  if (!toggle) return;

  toggle.addEventListener("click", () => {
    document.body.classList.toggle("dark");

    localStorage.setItem(
      "theme",
      document.body.classList.contains("dark") ? "dark" : "light"
    );
  });

  if (localStorage.getItem("theme") === "dark") {
    document.body.classList.add("dark");
  }
});
