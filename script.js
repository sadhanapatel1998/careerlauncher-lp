/* Career Launcher Vikaspuri – interactions + enquiry forms */
/* Vanilla JS */

(function () {
  "use strict";

  /* =========================================================
     WOW.JS SCROLL ANIMATIONS
  ========================================================= */

  if (window.WOW) {
    new WOW({
      offset: 60,
      mobile: true,
    }).init();
  }

  /* =========================================================
     NAVBAR + BACK TO TOP
  ========================================================= */

  var nav = document.getElementById("nav");
  var toTop = document.getElementById("toTop");

  function onScroll() {
    var y = window.scrollY;

    if (nav) {
      nav.classList.toggle("scrolled", y > 40);
    }

    if (toTop) {
      toTop.classList.toggle("show", y > 600);
    }
  }

  window.addEventListener("scroll", onScroll, {
    passive: true,
  });

  onScroll();

  if (toTop) {
    toTop.addEventListener("click", function () {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
  }

  /* =========================================================
     MOBILE MENU
  ========================================================= */

  var menu = document.getElementById("menu");

  if (menu && window.bootstrap) {
    menu.querySelectorAll("a").forEach(function (a) {
      a.addEventListener("click", function () {
        if (menu.classList.contains("show")) {
          bootstrap.Collapse.getOrCreateInstance(menu).hide();
        }
      });
    });
  }

  /* =========================================================
     ACTIVE NAV LINK
  ========================================================= */

  var links = document.querySelectorAll(".nav-link");

  var map = {};

  links.forEach(function (l) {
    var href = l.getAttribute("href");

    if (href && href.startsWith("#") && href.length > 1) {
      map[href.slice(1)] = l;
    }
  });

  if (window.IntersectionObserver) {
    var spy = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (e) {
          if (e.isIntersecting && map[e.target.id]) {
            links.forEach(function (l) {
              l.classList.remove("active");
            });

            map[e.target.id].classList.add("active");
          }
        });
      },

      {
        rootMargin: "-45% 0px -50% 0px",
      },
    );

    Object.keys(map).forEach(function (id) {
      var section = document.getElementById(id);

      if (section) {
        spy.observe(section);
      }
    });
  }

  /* =========================================================
     COUNTER ANIMATION
  ========================================================= */

  var counters = document.querySelectorAll(".count");

  if (window.IntersectionObserver) {
    var cObs = new IntersectionObserver(
      function (entries, observer) {
        entries.forEach(function (e) {
          if (!e.isIntersecting) {
            return;
          }

          var el = e.target;

          var to = Number(el.dataset.to) || 0;

          var start = null;

          function step(t) {
            start = start || t;

            var p = Math.min((t - start) / 1400, 1);

            el.textContent = Math.round(to * p);

            if (p < 1) {
              requestAnimationFrame(step);
            }
          }

          requestAnimationFrame(step);

          observer.unobserve(el);
        });
      },

      {
        threshold: 0.6,
      },
    );

    counters.forEach(function (c) {
      cObs.observe(c);
    });
  }

  /* =========================================================
     SLIDER
  ========================================================= */

  function initSlider(root) {
    var track = root.querySelector(".xs-track");

    var items = root.querySelectorAll(".xs-item");

    var dotsBox = root.querySelector(".xs-dots");

    var nextBtn = root.querySelector(".xs-next");

    var prevBtn = root.querySelector(".xs-prev");

    if (!track || !items.length) {
      return;
    }

    var desk = Number(root.dataset.desktop) || 3;

    var idx = 0;

    var auto;

    function perView() {
      var w = window.innerWidth;

      if (w >= 1200) {
        return desk;
      }

      if (w >= 992) {
        return Math.min(desk, 3);
      }

      if (w >= 768) {
        return 2;
      }

      return 1;
    }

    function max() {
      return Math.max(0, items.length - perView());
    }

    function layout() {
      var view = perView();

      items.forEach(function (it) {
        it.style.flexBasis = 100 / view + "%";
      });

      if (dotsBox) {
        dotsBox.innerHTML = "";

        for (var i = 0; i <= max(); i++) {
          var b = document.createElement("button");

          b.setAttribute("aria-label", "Go to slide " + (i + 1));

          (function (n) {
            b.addEventListener("click", function () {
              go(n);
            });
          })(i);

          dotsBox.appendChild(b);
        }
      }
    }

    function go(n) {
      idx = Math.max(0, Math.min(n, max()));

      var view = perView();

      track.style.transform = "translateX(" + -idx * (100 / view) + "%)";

      if (dotsBox) {
        dotsBox.querySelectorAll("button").forEach(function (d, i) {
          d.classList.toggle("active", i === idx);
        });
      }
    }

    function next() {
      go(idx >= max() ? 0 : idx + 1);
    }

    function previous() {
      go(idx <= 0 ? max() : idx - 1);
    }

    if (nextBtn) {
      nextBtn.addEventListener("click", next);
    }

    if (prevBtn) {
      prevBtn.addEventListener("click", previous);
    }

    function play() {
      stop();

      auto = setInterval(next, 5000);
    }

    function stop() {
      if (auto) {
        clearInterval(auto);
      }
    }

    root.addEventListener("mouseenter", stop);

    root.addEventListener("mouseleave", play);

    /* Touch swipe */

    var sx = null;

    root.addEventListener(
      "touchstart",
      function (e) {
        sx = e.touches[0].clientX;

        stop();
      },
      {
        passive: true,
      },
    );

    root.addEventListener("touchend", function (e) {
      if (sx === null) {
        return;
      }

      var dx = e.changedTouches[0].clientX - sx;

      if (Math.abs(dx) > 40) {
        if (dx < 0) {
          go(idx + 1);
        } else {
          go(idx - 1);
        }
      }

      sx = null;

      play();
    });

    window.addEventListener("resize", function () {
      layout();

      go(idx);
    });

    layout();

    go(0);

    play();
  }

  document.querySelectorAll(".xs").forEach(initSlider);

  /* =========================================================
     ENQUIRY FORM
     HERO + BOTTOM FORM
  ========================================================= */

  var examsByCourse = {
    "Law Entrances": [
      "CLAT",
      "AILET",
      "DU-LLB",
      "IP-CET",
      "Symbiosis",
      "Christ University",
    ],

    "CUET-UG": ["CUET-UG"],

    "CUET-PG": ["CUET-PG"],

    "Hotel Management": ["Hotel Management Entrance"],

    "NIFT Entrance": ["NIFT"],

    "IP-CET": ["IP-CET"],

    "11th & 12th Tuitions": ["Class 11 Tuition", "Class 12 Tuition"],

    "Other Entrance": ["Other"],
  };

  /* =========================================================
     RESET EXAM DROPDOWN
  ========================================================= */

  function resetExam(exam) {
    if (!exam) {
      return;
    }

    exam.innerHTML = '<option value="">Select a course first</option>';

    exam.disabled = true;
  }

  /* =========================================================
     INITIALIZE EACH FORM
  ========================================================= */

  function initEnquiry(form) {
    var course = form.querySelector(".f-course");

    var exam = form.querySelector(".f-exam");

    var mobile = form.querySelector(".f-mobile");

    if (!course || !exam) {
      return;
    }

    /* =======================================================
       COURSE CHANGE
    ======================================================= */

    course.addEventListener("change", function () {
      var list = examsByCourse[course.value];

      if (!list) {
        resetExam(exam);

        return;
      }

      exam.innerHTML =
        '<option value="">Choose an exam</option>' +
        list
          .map(function (x) {
            return (
              '<option value="' +
              escapeHTML(x) +
              '">' +
              escapeHTML(x) +
              "</option>"
            );
          })
          .join("");

      exam.disabled = false;

      /* If only one exam */

      if (list.length === 1) {
        exam.value = list[0];
      }
    });

    /* =======================================================
       MOBILE NUMBER
    ======================================================= */

    if (mobile) {
      mobile.addEventListener("input", function () {
        this.value = this.value.replace(/\D/g, "").slice(0, 10);
      });
    }

    /* =======================================================
   FORM SUBMIT
======================================================= */

    form.addEventListener("submit", async function (e) {
      e.preventDefault();
      e.stopPropagation();

      /* ================================================
       CHECK VALIDITY
    ================================================ */

      if (!form.checkValidity()) {
        form.classList.add("was-validated");

        return;
      }

      /* ================================================
       BUTTON
    ================================================ */

      var button = form.querySelector('button[type="submit"]');

      if (!button) {
        return;
      }

      var originalButton = button.innerHTML;

      button.disabled = true;

      button.innerHTML = `
      <span
        class="spinner-border spinner-border-sm me-2"
        aria-hidden="true">
      </span>
      Sending...
    `;

      /* ================================================
       FORM DATA
    ================================================ */

      var formData = new FormData(form);

      try {
        /* ==============================================
         SEND TO PHP
      ============================================== */

        var response = await fetch("send-mail.php", {
          method: "POST",
          body: formData,
        });

        /* ==============================================
         CHECK SERVER RESPONSE
      ============================================== */

        if (!response.ok) {
          throw new Error("Server returned " + response.status);
        }

        /* ==============================================
         READ PHP RESPONSE
      ============================================== */

        var responseText = await response.text();

        console.log("PHP RESPONSE:", responseText);

        /* ==============================================
         CONVERT RESPONSE TO JSON
      ============================================== */

        var result;

        try {
          result = JSON.parse(responseText);
        } catch (jsonError) {
          console.error("Invalid PHP response:", responseText);

          showErrorPopup("PHP Error: " + responseText.substring(0, 300));

          return;
        }

        /* ==============================================
         SUCCESS
      ============================================== */

        if (result.success) {
          form.reset();

          form.classList.remove("was-validated");

          resetExam(exam);

          window.location.href = "thankyou.php";
        } else {
          /* ==============================================
         PHP ERROR
      ============================================== */
          showErrorPopup(result.message || "Unable to send your enquiry.");
        }
      } catch (error) {
        /* ================================================
       NETWORK / SERVER ERROR
    ================================================ */

        console.error("Enquiry Error:", error);

        showErrorPopup(
          error.message || "Something went wrong. Please try again.",
        );
      } finally {
        /* ================================================
       RESTORE BUTTON
    ================================================ */

        button.disabled = false;

        button.innerHTML = originalButton;
      }
    });
  }

  /* =========================================================
     INITIALIZE ALL ENQUIRY FORMS
  ========================================================= */

  document.querySelectorAll(".js-enquiry").forEach(initEnquiry);

  /* =========================================================
     POPUP HTML
  ========================================================= */

  createPopupHTML();

  /* =========================================================
     ESC KEY
  ========================================================= */

  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
      closeSuccessPopup();

      closeErrorPopup();
    }
  });

  /* =========================================================
     OVERLAY CLICK
  ========================================================= */

  document.addEventListener("click", function (e) {
    if (e.target.classList.contains("form-popup-overlay")) {
      e.target.classList.remove("active");

      document.body.style.overflow = "";
    }
  });
})();

/* =============================================================
   ESCAPE HTML
============================================================= */

function escapeHTML(value) {
  return String(value)
    .replace(/&/g, "&amp;")
    .replace(/</g, "&lt;")
    .replace(/>/g, "&gt;")
    .replace(/"/g, "&quot;")
    .replace(/'/g, "&#039;");
}

/* =============================================================
   CREATE POPUPS
============================================================= */

function createPopupHTML() {
  if (document.getElementById("successPopup")) {
    return;
  }

  var popupHTML = `

    <!-- SUCCESS POPUP -->

    <div
      class="form-popup-overlay"
      id="successPopup"
    >

      <div class="form-popup">

        <button
          type="button"
          class="popup-close"
          onclick="closeSuccessPopup()"
          aria-label="Close"
        >
          <i class="bi bi-x-lg"></i>
        </button>


        <div class="popup-icon success">

          <i class="bi bi-check-lg"></i>

        </div>


        <h3>
          Thank You!
        </h3>


        <p>
          Your enquiry has been submitted
          successfully. Our counsellor will
          contact you shortly.
        </p>


        <button
          type="button"
          class="btn btn-accent px-4"
          onclick="closeSuccessPopup()"
        >
          Done
        </button>

      </div>

    </div>


    <!-- ERROR POPUP -->

    <div
      class="form-popup-overlay"
      id="errorPopup"
    >

      <div class="form-popup">

        <button
          type="button"
          class="popup-close"
          onclick="closeErrorPopup()"
          aria-label="Close"
        >
          <i class="bi bi-x-lg"></i>
        </button>


        <div class="popup-icon error">

          <i class="bi bi-exclamation-lg"></i>

        </div>


        <h3>
          Oops!
        </h3>


        <p id="errorPopupMessage">
          Something went wrong.
          Please try again.
        </p>


        <button
          type="button"
          class="btn btn-accent px-4"
          onclick="closeErrorPopup()"
        >
          Try Again
        </button>

      </div>

    </div>

  `;

  document.body.insertAdjacentHTML("beforeend", popupHTML);
}

/* =============================================================
   SUCCESS POPUP
============================================================= */

function showSuccessPopup() {
  var popup = document.getElementById("successPopup");

  if (!popup) {
    return;
  }

  popup.classList.add("active");

  document.body.style.overflow = "hidden";
}

/* =============================================================
   CLOSE SUCCESS POPUP
============================================================= */

function closeSuccessPopup() {
  var popup = document.getElementById("successPopup");

  if (!popup) {
    return;
  }

  popup.classList.remove("active");

  document.body.style.overflow = "";
}

/* =============================================================
   ERROR POPUP
============================================================= */

function showErrorPopup(message) {
  var popup = document.getElementById("errorPopup");

  var messageBox = document.getElementById("errorPopupMessage");

  if (messageBox) {
    messageBox.textContent =
      message || "Something went wrong. Please try again.";
  }

  if (!popup) {
    return;
  }

  popup.classList.add("active");

  document.body.style.overflow = "hidden";
}

/* =============================================================
   CLOSE ERROR POPUP
============================================================= */

function closeErrorPopup() {
  var popup = document.getElementById("errorPopup");

  if (!popup) {
    return;
  }

  popup.classList.remove("active");

  document.body.style.overflow = "";
}
