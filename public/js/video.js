document.getElementById("converinput").addEventListener("input", function () {
  let loader = document.getElementById("loader");
  loader.style.display = "inline-block";

  let video = document.getElementById("videoContainer");
  video.innerHTML = "";
  video.classList.add("videoc");
  var url = this.value;
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == XMLHttpRequest.DONE) {
      if (xhr.status == 200) {
        document.getElementById("videoContainer").innerHTML = xhr.responseText;
      } else {
        document.getElementById("videoContainer").innerHTML =
          "Error al cargar el video.";
      }
      document.getElementById("loader").style.display = "none";
    }
  };
  xhr.open("POST", "index.php?action=download", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.send("url=" + encodeURIComponent(url));
});
