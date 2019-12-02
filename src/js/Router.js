const links = document.querySelectorAll("a[href]");

links.forEach(link => {
  link.addEventListener("click", function(event) {
    event.preventDefault();
    const uri = this.getAttribute("href");
    const ext = uri === "/" ? "" : ".php";
    window.history.pushState({}, null, uri);
    $.get(`views/${uri}${ext}`, data => $("#root").html(data));
  });
});
