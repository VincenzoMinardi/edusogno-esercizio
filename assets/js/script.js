// Funzione per collegare il bottone alla registrazione

const registration = document.getElementById("registrazione");

registration.addEventListener("click", function () {
  window.location.href = "register.php";
});

// Funzione per collegare il bottone al login

const login = document.getElementById("login");

login.addEventListener("click", function () {
  window.location.href = "login.php";
});
