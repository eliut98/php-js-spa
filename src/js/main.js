ls("a[href]").forEach((link) => {
  link.addEventListener("click", function (event) {
    event.preventDefault();

    const uri = this.getAttribute("href");
    const ext = uri === "/" ? "" : ".php";

    window.history.pushState({}, null, uri);

    fetch(`controllers/${uri}${ext}`).then((response) => {
      response.text().then((text) => (ls("#root").innerHTML = text));
    });
  });
});
