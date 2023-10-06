// Function chạy carousel slider
$(".owl-carousel").owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  responsive: {
    0: {
      items: 2,
    },
    762: {
      items: 2,
    },
    992: {
      items: 3,
    },
    1000: {
      items: 5,
    },
  },
});

// Function chay tab
const itemTab = document.querySelector.bind(document);
const paneTab = document.querySelectorAll.bind(document);

const tabs = paneTab(".hn-tab-item");
const panes = paneTab(".hn-tab-pane");

const tabActive = itemTab(".hn-tab-item.active");
const line = itemTab(".hn-tabs .line");

requestIdleCallback(function () {
  line.style.left = tabActive.offsetLeft + "px";
  line.style.width = tabActive.offsetWidth + "px";
});

tabs.forEach((tab, index) => {
  const pane = panes[index];

  tab.onclick = function () {
    itemTab(".hn-tab-item.active").classList.remove("active");
    itemTab(".hn-tab-pane.active").classList.remove("active");

    line.style.left = this.offsetLeft + "px";
    line.style.width = this.offsetWidth + "px";

    this.classList.add("active");
    pane.classList.add("active");
  };
});

//Function search bar
const searchFocus = document.getElementById("search-focus");
const keys = [
  { keyCode: "AltLeft", isTriggered: false },
  { keyCode: "ControlLeft", isTriggered: false },
];

window.addEventListener("keydown", (e) => {
  keys.forEach((obj) => {
    if (obj.keyCode === e.code) {
      obj.isTriggered = true;
    }
  });

  const shortcutTriggered =
    keys.filter((obj) => obj.isTriggered).length === keys.length;

  if (shortcutTriggered) {
    searchFocus.focus();
  }
});

window.addEventListener("keyup", (e) => {
  keys.forEach((obj) => {
    if (obj.keyCode === e.code) {
      obj.isTriggered = false;
    }
  });
});
