// Function chạy carousel slider
$(".carousel .carousel-item").each(function () {
  var minPerSlide = 4;
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(":first");
  }
  next.children(":first-child").clone().appendTo($(this));

  for (var i = 0; i < minPerSlide; i++) {
    next = next.next();
    if (!next.length) {
      next = $(this).siblings(":first");
    }
    next.children(":first-child").clone().appendTo($(this));
  }
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
