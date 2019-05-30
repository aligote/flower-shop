function showForm() {
  const display = document.getElementById('registration-form').style.display;
  if (display === "block") {
    document.getElementById('registration-form').style.display = "none";
  } else {
    document.getElementById('registration-form').style.display = "block";
  }
}