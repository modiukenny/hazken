function contactUs() {
  var inputName = document.form.name.value;
  var inputEmail = document.form.email.value;
  var inputSubject = document.form.subject.value;
  var inputMessage = document.form.message.value;

  if (inputName === "") {
    document.getElementById("contact2").style.display = "block";
    return false;
  }
  if (inputEmail === "") {
    document.getElementById("contact3").style.display = "block";
    return false;
  }
  if (inputSubject === "") {
    document.getElementById("contact4").style.display = "block";
    document.getElementById("contact2").style.display = "none";
    return false;
  }
  if (inputMessage === "") {
    document.getElementById("contact5").style.display = "block";
    return false;
  } else {
    document.getElementById("contact1").style.display = "block";
    document.getElementById("contact2").style.display = "none";
    document.getElementById("contact3").style.display = "none";
    document.getElementById("contact4").style.display = "none";
    document.getElementById("contact5").style.display = "none";
    return true;
  }
}
function mailUs() {
  var inputMail = document.formMail.email1.value;
  var inputMessage1 = document.formMail.message1.value;

  if (inputMail === "") {
    document.getElementById("emptyEmail").style.display = "block";
    return false;
  }
  if (inputMessage1 === "") {
    document.getElementById("emptyMessage").style.display = "block";
    return false;
  } else {
    document.getElementById("alertMessage").style.display = "block";
    document.getElementById("emptyEmail").style.display = "none";
    document.getElementById("emptyMessage").style.display = "none";
    return true;
  }
}
function mailUsForPillows() {
  var formPillowEmail = document.formPillow.email2.value;
  var formPillowMessage = document.formPillow.message2.value;

  if (formPillowEmail === "") {
    document.getElementById("emptyEmail1").style.display = "block";
    return false;
  }
  if (formPillowMessage === "") {
    document.getElementById("emptyMessage1").style.display = "block";
    return false;
  } else {
    document.getElementById("alertMessage1").style.display = "block";
    document.getElementById("emptyEmail1").style.display = "none";
    document.getElementById("emptyMessage1").style.display = "none";
    return true;
  }
}
const inputText = document.querySelector("#con-email1");
inputText.addEventListener("input", () => {
  const len = inputText.value;
  if (len.length === 0) {
    document.getElementById("emptyEmail").style.display = "block";
  } else {
    document.getElementById("emptyEmail").style.display = "none";
  }
});
const inputMessage = document.querySelector("#con-message1");
inputMessage.addEventListener("input", () => {
  const message = inputMessage.value;
  if (message.length === 0) {
    document.getElementById("emptyMessage").style.display = "block";
  } else {
    document.getElementById("emptyMessage").style.display = "none";
  }
});
const inputProduct = document.querySelector("#inputProduct");
inputProduct.addEventListener("input", () => {
  const inputEmail = inputProduct.value;
  if (inputEmail.length === 0) {
    document.getElementById("emptyEmail1").style.display = "block";
  } else {
    document.getElementById("emptyEmail1").style.display = "none";
  }
});
const inputProduct1 = document.querySelector("#messageProduct");
inputProduct1.addEventListener("input", () => {
  const inputMessage1 = inputProduct1.value;
  if (inputMessage1.length === 0) {
    document.getElementById("emptyMessage1").style.display = "block";
  } else {
    document.getElementById("emptyMessage1").style.display = "none";
  }
});
