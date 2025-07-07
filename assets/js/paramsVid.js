const myBtn = document.querySelectorAll(".admin__menu--btn");
const myForm = document.querySelectorAll(".admin__vid--modif");

myBtn.forEach((btnVid, index) => {
  btnVid.addEventListener("click", () => {
    myForm.forEach((form) => form.classList.remove("view__form"));
    myForm[index].classList.add("view__form");
  });
});
