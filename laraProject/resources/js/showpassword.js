 function showPassword() {
  var text = document.getElementById("password");
  if (text.type === "password") {
    text.type = "text";
  } else {
    text.type = "password";
  }
}
