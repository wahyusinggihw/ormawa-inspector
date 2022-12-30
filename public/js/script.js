const formInput = document.querySelector(".form-control");
const formButton = document.querySelector(".form-button");
const formSelect = document.querySelector(".form-select");

// the default state is 'disabled'
formButton.disabled = true;

// alternative is to use "change" - explained below
formInput.addEventListener("keyup", buttonState);

function buttonState() {
  if (document.querySelector(".form-control").value === "") {
    formButton.disabled = true; // return disabled as true whenever the input field is empty
  } else {
    formButton.disabled = false; // enable the button once the input field has content
  }
}

function optionState(statusOption) {
  var nilaiPilihan = statusOption.options[statusOption.selectedIndex].innerHTML;
  var nilaiAwal = statusOption.value;
  if (nilaiAwal != nilaiPilihan) {
    formButton.disabled = true; // return disabled as true whenever the input field is empty
  }
  formButton.disabled = false; // return disabled as true whenever the input field is empty
}

// just verifying that the button has been clicked

// formButton.addEventListener("click", () => {
//   console.log("You entered:", document.querySelector(".form-control").value);
// });

var count = 0;

function result() {
  if (count != 0) {
    document.getElementById("result").innerHTML =
      "<h4>Rating: <label class='text-primary'>" +
      count +
      "</label></h4>" +
      "<h4>Comments: </h4>" +
      "<p>" +
      document.getElementById("review").value +
      "</p>";
  } else {
  }
}

function startRating(item) {
  count = item.id[0];
  sessionStorage.star = count;
  for (var i = 0; i < 5; i++) {
    if (i < count) {
      document.getElementById(i + 1).style.color = "yellow";
    } else {
      document.getElementById(i + 1).style.color = "black";
    }
  }
}
