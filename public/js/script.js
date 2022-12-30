const formInput = document.querySelector(".form-control");
const formButton = document.querySelector(".form-button");
const formSelect = document.querySelector(".form-select");

// the default state is 'disabled'
formButton.disabled = true;

// alternative is to use "change" - explained below
formInput.addEventListener("keyup", buttonState);

function buttonState() {
  var nilaiPilihan = statusOption.options[statusOption.selectedIndex].innerHTML;
  var nilaiAwal = statusOption.value;
  // alert("Selected Text: " + sleTex + " Value: " + selVal);
  if (document.querySelector(".form-control").value === "") {
    formButton.disabled = true; // return disabled as true whenever the input field is empty
  } else {
    formButton.disabled = false; // enable the button once the input field has content
  }
}

function optionState(statusOption) {
  var nilaiPilihan = statusOption.options[statusOption.selectedIndex].innerHTML;
  var nilaiAwal = statusOption.value;
  // alert("Selected Text: " + sleTex + " Value: " + selVal);
  // if (document.querySelector(".form-control").value === "") {
  if (nilaiAwal != nilaiPilihan) {
    formButton.disabled = false; // return disabled as true whenever the input field is empty
  }
  formButton.disabled = true; // return disabled as true whenever the input field is empty
  // } else {
  //   formButton.disabled = false; // enable the button once the input field has content
  // }
}

// just verifying that the button has been clicked

// formButton.addEventListener("click", () => {
//   console.log("You entered:", document.querySelector(".form-control").value);
// });
