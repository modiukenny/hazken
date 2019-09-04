function contactUs() {
  var inputName = document.form.name.value;
  var inputEmail = document.form.email.value;
  var inputSubject = document.form.subject.value;
  var inputMessage = document.form.message.value;

  if (inputName === "") {
    document.getElementById("contact2").style.display = "block";
    document.getElementById("contact3").style.display = "none";
    document.getElementById("contact4").style.display = "none";
    document.getElementById("contact5").style.display = "none";
    return false;
  }
  if (inputEmail === "") {
    document.getElementById("contact3").style.display = "block";
    document.getElementById("contact2").style.display = "none";
    document.getElementById("contact4").style.display = "none";
    document.getElementById("contact5").style.display = "none";
    return false;
  }
  if (inputSubject === "") {
    document.getElementById("contact4").style.display = "block";
    document.getElementById("contact3").style.display = "none";
    document.getElementById("contact2").style.display = "none";
    document.getElementById("contact5").style.display = "none";
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
function contactUs1() {
  var inputName1 = document.form1.name1.value;
  var inputEmail1 = document.form1.email1.value;
  var inputSubject1 = document.form1.subject1.value;
  var inputMessage1 = document.form1.message1.value;

  if (inputName1 === "") {
    document.getElementById("contact21").style.display = "block";
    document.getElementById("contact31").style.display = "none";
    document.getElementById("contact41").style.display = "none";
    document.getElementById("contact51").style.display = "none";
    return false;
  }
  if (inputEmail1 === "") {
    document.getElementById("contact31").style.display = "block";
    document.getElementById("contact21").style.display = "none";
    document.getElementById("contact41").style.display = "none";
    document.getElementById("contact51").style.display = "none";
    return false;
  }
  if (inputSubject1 === "") {
    document.getElementById("contact41").style.display = "block";
    document.getElementById("contact31").style.display = "none";
    document.getElementById("contact21").style.display = "none";
    document.getElementById("contact51").style.display = "none";
    return false;
  }
  if (inputMessage1 === "") {
    document.getElementById("contact51").style.display = "block";
    document.getElementById("contact21").style.display = "none";
    document.getElementById("contact31").style.display = "none";
    document.getElementById("contact41").style.display = "none";
    return false;
  } else {
    document.getElementById("contact11").style.display = "block";
    document.getElementById("contact21").style.display = "none";
    document.getElementById("contact31").style.display = "none";
    document.getElementById("contact41").style.display = "none";
    document.getElementById("contact51").style.display = "none";
    return true;
  }
}
