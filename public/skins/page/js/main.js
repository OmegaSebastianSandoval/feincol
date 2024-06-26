var videos = [];
$(document).ready(function () {
  $(".dropdown-toggle").dropdown();
  $(".carouselsection").carousel({
    quantity: 4,
    sizes: {
      900: 3,
      500: 1,
    },
  });

  $(".banner-video-youtube").each(function () {
    // console.log($(this).attr('data-video'));
    const datavideo = $(this).attr("data-video");
    const idvideo = $(this).attr("id");
    const playerDefaults = {
      autoplay: 0,
      autohide: 1,
      modestbranding: 0,
      rel: 0,
      showinfo: 0,
      controls: 0,
      disablekb: 1,
      enablejsapi: 0,
      iv_load_policy: 3,
    };
    const video = {
      videoId: datavideo,
      suggestedQuality: "hd1080",
    };
    videos[videos.length] = new YT.Player(idvideo, {
      videoId: datavideo,
      playerVars: playerDefaults,
      events: {
        onReady: onAutoPlay,
        onStateChange: onFinish,
      },
    });
  });

  $(function () {
    $(".doc-item-theme").on("click", function () {
      let id = $(this).attr("data-id");
      console.log(id);
      $("#" + id).slideToggle();
    });
  });

  function onAutoPlay(event) {
    event.target.playVideo();
    event.target.mute();
  }

  function onFinish(event) {
    if (event.data === 0) {
      event.target.playVideo();
    }
  }
  const tooltipTriggerList = document.querySelectorAll(
    '[data-bs-toggle="tooltip"]'
  );
  const tooltipList = [...tooltipTriggerList].map(
    (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
  );
});

/* header scroll */
document.addEventListener("scroll", () => {
  const navbar = document.querySelector(".navbar");
  // console.log(window.scrollY);
  if (window.scrollY > 184) {
    navbar.classList.add("static");

    setTimeout(() => {
      navbar.classList.add("released");
    }, 400); // Retraso mínimo para activar la transición
  } else {
    navbar.classList.remove("static");
    navbar.classList.remove("released");

    // Retrasa la eliminación de la clase 'released' para permitir la transición
  }
});
document.addEventListener("DOMContentLoaded", () => {
  $('.counter').counterUp({
    delay: 10,
    time: 1000
});
  /* $(document).ajaxStart(function () {
    $(".loader-bx").addClass("show");
  });

  $(document).ajaxStop(function () {
    $(".loader-bx").removeClass("show");
  });
 */
  document
    .getElementById("formulario-contacto")
    ?.addEventListener("submit", function (e) {
      e.preventDefault();
      var response = grecaptcha.getResponse();
      if (response.length === 0) {
        Swal.fire({
          icon: "warning",
          text: "Por favor, verifica que no eres un robot.",
          confirmButtonColor: "#192a4b",
          confirmButtonText: "Continuar",
        });
      } else {
        $(".loader-bx").addClass("show");

        let submitBtn = document.getElementById("submit-btn");
        // Deshabilitar botón y mostrar animación
        submitBtn.disabled = true;

        let formData = new FormData(this);
        let data = {};
        formData.forEach((value, key) => {
          data[key] = value;
        });

        // console.log(data);

        fetch(this.getAttribute("action"), {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify(data),
        })
          .then((response) => response.json())
          .then((data) => {
            if (data.status === "success") {
              Swal.fire({
                icon: "success",
                text: "Hemos recibido tu mensaje, te responderemos a la brevedad.",
                confirmButtonColor: "#192a4b",
                confirmButtonText: "Continuar",
              });
            } else if (data.status === "error") {
              Swal.fire({
                icon: "error",
                text: "Ha ocurrido un error, por favor intenta de nuevo.",
                confirmButtonColor: "#192a4b",
                confirmButtonText: "Continuar",
              });
            }
            document.getElementById("formulario-contacto").reset();
            // Habilitar botón y ocultar animación
            submitBtn.disabled = false;
            $(".loader-bx").removeClass("show");
          })

          .catch((error) => {
            Swal.fire({
              icon: "error",
              text: "Ha ocurrido un error, por favor intenta de nuevo.",
              confirmButtonColor: "#192a4b",
              confirmButtonText: "Continuar",
            });
            // Habilitar botón y ocultar animación
            submitBtn.disabled = false;
            $(".loader-bx").removeClass("show");
          });
      }
    });
});
