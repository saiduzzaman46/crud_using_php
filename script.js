window.addEventListener("DOMContentLoaded", function () {
    const urlHasId = new URLSearchParams(window.location.search);
    if (urlHasId.has("id")) {
      document.querySelector("label.pass").classList.add("visible");
      document.querySelector("input.pass").classList.add("visible");
    }
  });