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