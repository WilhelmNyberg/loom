fetch("functions/structure.php")
  .then((x) => x.text())
  .then((y) => (document.querySelector("#website").innerHTML = y));
