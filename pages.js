/* Inner-page helpers: exam filter + detail modal */
(function () {
  "use strict";
  var bar = document.querySelector(".filter-bar");
  if (bar) {
    bar.addEventListener("click", function (e) {
      var b = e.target.closest("button"); if (!b) return;
      bar.querySelectorAll("button").forEach(function (x) { x.classList.toggle("on", x === b); });
      var f = b.dataset.filter;
      document.querySelectorAll("[data-cat]").forEach(function (c) {
        c.classList.toggle("is-hidden", f !== "all" && c.dataset.cat !== f);
      });
      document.dispatchEvent(new CustomEvent("filterchange"));
    });
  }
  var dataEl = document.getElementById("examData"), modalEl = document.getElementById("examModal");
  if (dataEl && modalEl && window.bootstrap) {
    var exams = JSON.parse(dataEl.textContent), modal = new bootstrap.Modal(modalEl);
    var esc = function (s) { var d = document.createElement("div"); d.textContent = s; return d.innerHTML; };
    var chips = function (a) { return a.map(function (t) { return '<span class="chip">' + esc(t) + "</span>"; }).join(""); };
    document.addEventListener("click", function (e) {
      var b = e.target.closest("[data-exam]"); if (!b) return;
      var x = exams[b.dataset.exam]; if (!x) return;
      modalEl.querySelector(".mh h3").textContent = x.name;
      modalEl.querySelector(".mh p").textContent = x.full;
      modalEl.querySelector(".mb").innerHTML =
        "<h6>Conducted by</h6><p class='mb-0'>" + esc(x.by) + "</p>" +
        "<h6>Who should apply</h6><p class='mb-0'>" + esc(x.who) + "</p>" +
        "<h6>Pattern at a glance</h6><p class='mb-0'>" + esc(x.pattern) + "</p>" +
        "<h6>Key topics</h6>" + chips(x.topics) +
        "<h6>Preparation tips</h6><ul class='ticks mb-3'>" + x.tips.map(function (t) { return "<li><i class='bi bi-check-circle-fill'></i><span>" + esc(t) + "</span></li>"; }).join("") + "</ul>" +
        "<div class='note'><i class='bi bi-info-circle-fill me-1'></i>Dates, eligibility and pattern are revised every year. Our counsellors share the latest official details.</div>";
      modal.show();
    });
  }
})();
