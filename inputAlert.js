function contactUsForWeb() {
  var input = document.form1.name1.value;
  var input2 = document.form1.email1.value;
  var input3 = document.form1.subject1.value;
  var input4 = document.form1.message1.value;

  if (input === "") {
    document.getElementById("react2").style.display = "block";
    return false;
  }
  if (input2 === "") {
    document.getElementById("react3").style.display = "block";
    return false;
  }
  if (input3 === "") {
    document.getElementById("react4").style.display = "block";
    return false;
  }
  if (input4 === "") {
    document.getElementById("react5").style.display = "block";
    return false;
  } else {
    document.getElementById("react1").style.display = "block";
    document.getElementById("react2").style.display = "none";
    document.getElementById("react3").style.display = "none";
    document.getElementById("react4").style.display = "none";
    document.getElementById("react5").style.display = "none";
    return true;
  }
}
function contactUsForUiUx() {
  var inputUxUi = document.form2.name2.value;
  var inputUxUi2 = document.form2.email2.value;
  var inputUxUi3 = document.form2.subject2.value;
  var inputUxUi4 = document.form2.message2.value;

  if (inputUxUi === "") {
    document.getElementById("uiUxDesign2").style.display = "block";
    return false;
  }
  if (inputUxUi2 === "") {
    document.getElementById("uiUxDesign3").style.display = "block";
    return false;
  }
  if (inputUxUi3 === "") {
    document.getElementById("uiUxDesign4").style.display = "block";
    return false;
  }
  if (inputUxUi4 === "") {
    document.getElementById("uiUxDesign5").style.display = "block";
    return false;
  } else {
    document.getElementById("uiUxDesign1").style.display = "block";
    document.getElementById("uiUxDesign2").style.display = "none";
    document.getElementById("uiUxDesign3").style.display = "none";
    document.getElementById("uiUxDesign4").style.display = "none";
    document.getElementById("uiUxDesign5").style.display = "none";
    return true;
  }
}
function contactUsForGraphics() {
  var inputGraphics = document.form3.name3.value;
  var inputGraphics2 = document.form3.email3.value;
  var inputGraphics3 = document.form3.subject3.value;
  var inputGraphics4 = document.form3.message3.value;

  if (inputGraphics === "") {
    document.getElementById("graphics2").style.display = "block";
    return false;
  }
  if (inputGraphics2 === "") {
    document.getElementById("graphics3").style.display = "block";
    return false;
  }
  if (inputGraphics3 === "") {
    document.getElementById("graphics4").style.display = "block";
    return false;
  }
  if (inputGraphics4 === "") {
    document.getElementById("graphics5").style.display = "block";
    return false;
  } else {
    document.getElementById("graphics1").style.display = "block";
    document.getElementById("graphics2").style.display = "none";
    document.getElementById("graphics3").style.display = "none";
    document.getElementById("graphics4").style.display = "none";
    document.getElementById("graphics5").style.display = "none";
    return true;
  }
}
