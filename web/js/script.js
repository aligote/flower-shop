function showForm() {
  display = document.getElementById('registration-form').style.display;
  if (display === "none") {
    document.getElementById('registration-form').style.display = "block";
  } else {
    document.getElementById('registration-form').style.display = "none";
  }
}