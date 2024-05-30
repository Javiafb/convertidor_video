// funcion para modificar el tema

(function () {
  try {
    var d = document.documentElement,
      c = d.classList;
    c.remove("light", "dark");
    var e = localStorage.getItem("theme");
    if ("system" === e || (!e && true)) {
      var t = "(prefers-color-scheme: dark)",
        m = window.matchMedia(t);
      if (m.media !== t || m.matches) {
        d.style.colorScheme = "dark";
        c.add("dark");
      } else {
        d.style.colorScheme = "light";
        c.add("light");
      }
    } else if (e) {
      c.add(e || "");
      d.style.colorScheme = e;
    }

    // Event listener for theme change button
    var modeButton = document.getElementById("mode");
    if (modeButton) {
      modeButton.addEventListener("click", function () {
        if (c.contains("dark")) {
          c.remove("dark");
          c.add("light");
          d.style.colorScheme = "light";
          localStorage.setItem("theme", "light");
        } else {
          c.remove("light");
          c.add("dark");
          d.style.colorScheme = "dark";
          localStorage.setItem("theme", "dark");
        }
      });
    }
  } catch (e) {}
})();

const colores = [
  "#4188e6",
  "#ff0000",
  "#d3ff00",
  "#ff0075",
  "#00d3ff",
  "#1100ff",
];
let barra = document.getElementById("barra");

function cambiocolor() {
  let i = 0;

  let cambio = setInterval(() => {
    i = (i + 1) % colores.length;
    barra.style.setProperty("--bottom", colores[i]);
  }, 7000);

  // Para detener el cambio de color después de un tiempo, descomenta esta línea:
  // setTimeout(() => clearInterval(cambio), 35000);
}

cambiocolor();
