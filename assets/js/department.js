const dropdownButton = document.querySelector("#dropdown-button");
const dropdownContainer = document.querySelector("#dropdown-container");

dropdownButton.addEventListener("click", () => {
  dropdownContainer.classList.toggle("active");
});
