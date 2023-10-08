// Function chạy carousel slider
$(".carousel-slider").owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  responsive: {
    0: {
      items: 1,
    },
    762: {
      items: 2,
    },
    992: {
      items: 3,
    },
    1200: {
      items: 3,
    },
  },
});


$(".owl-carousel").owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  responsive: {
    0: {
      items: 2,
    },
    762: {
      items: 3,
    },
    992: {
      items: 4,
    },
    1200: {
      items: 5,
    },
  },
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

//function kiểm tra animation

const elements = document.querySelectorAll('.animation-element');
const windowHeight = window.innerHeight;

function checkScroll() {
  elements.forEach((element) => {
    const elementTop = element.getBoundingClientRect().top;
    if (elementTop < windowHeight) {
      element.classList.add('animate'); 
    }
  });

  const allAnimated = Array.from(elements).every((element) => element.classList.contains('animate'));
  if (allAnimated) {
    window.removeEventListener('scroll', checkScroll);
  }
}

window.addEventListener('scroll', checkScroll);

// Function chuyển filter sang offcanvas

var offCanvasFilter = document.querySelector('.filter_offcanvas')
var offCanvasMenu = document.querySelector('#offcanvasMenu .offcanvas-body')

offCanvasMenu.innerHTML = offCanvasFilter.innerHTML

//
function category_main(category) {
  $.ajax({
    url: "product-main.php",
    type: "POST",
    data: {
      category: category
    },
    success: function(response) {
      $("#category").html(response);
    },
    error: function(jqXHR, textStatus, errorThrown) {
      console.error("Error:", textStatus, errorThrown);
    }
  });
}