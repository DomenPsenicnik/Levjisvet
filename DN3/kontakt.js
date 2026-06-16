function validateForm() {
  'use strict';
  const ime = document.getElementById("ime").value.trim(),
      priimek = document.getElementById("priimek").value.trim(),
      email = document.getElementById("email").value.trim(),
      telefon = document.getElementById("telefon").value.trim(),
      alertBox = document.getElementById("alertBox"),
      nameRegex = /^[A-Za-zČčŠšŽžĐđĆć]+$/,
      phoneRegex = /^[0-9 ]+$/,
      emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  alertBox.innerHTML = "";

  if (!nameRegex.test(ime)) {
    showAlert("Ime mora vsebovati samo črke.", "danger");
    return false;
  }

  if (!nameRegex.test(priimek)) {
    showAlert("Priimek mora vsebovati samo črke.", "danger");
    return false;
  }

  if (!emailRegex.test(email)) {
    showAlert("Prosim vnesi veljaven e-poštni naslov.", "danger");
    return false;
  }

  if (!phoneRegex.test(telefon)) {
    showAlert("Telefon lahko vsebuje samo številke in presledke.", "danger");
    return false;
  }

  showAlert("Obrazec je bil uspešno poslan!", "success");
  return false;
}
