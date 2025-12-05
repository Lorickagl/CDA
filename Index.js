const form = document.getElementById("formulaire");
const message = document.getElementById("message");

form.addEventListener("submit", function(event) {
  event.preventDefault(); // empêche le rechargement de la page

  const name = document.getElementById("nom").value.trim();
  const prenom = document.getElementById("prenom").value.trim();
  const email = document.getElementById("email").value.trim();

  // Vérifie si les champs sont remplis
  if (name !== "" && prenom !== "" && email !== "") {
    message.style.display = "block"; // affiche le message
  } else {
    message.style.display = "none";  // cache le message
    alert("Vos informations ne sont pas correctes !");
  }
});