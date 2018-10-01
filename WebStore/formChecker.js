function revealRequired() {
  let checkboxes = document.getElementsByClassName("checkbox");
  let hiddenFields = document.getElementsByClassName("hidden");
  let quantities = document.getElementsByClassName("quantity");

  for (let i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i].checked == true) {
      hiddenFields[i].style.display = "block";
      quantities[i].required = true;
    }
    else {
      hiddenFields[i].style.display = "none";
      quantities[i].required = false;
      quantities[i].value = "0";
    }
  }
}
