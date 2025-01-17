fetch("website/index.html")
  .then((x) => x.text())
  .then((y) => (document.querySelector("#admin-website").innerHTML = y));

fetch("website/functions/structure.php")
  .then((x) => x.text())
  .then((y) => (document.querySelector("#website").innerHTML = y));
