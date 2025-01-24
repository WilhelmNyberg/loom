fetch("website/functions/structure.php")
  .then((x) => x.text())
  .then((y) => (document.querySelector("#admin-website").innerHTML = y));