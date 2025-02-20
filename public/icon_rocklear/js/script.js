const element = document.getElementById("image-compare");

const options = {
// UI Theme Defaults

controlColor: "#FFFFFF",
controlShadow: true,
addCircle: false,
addCircleBlur: true,

// Label Defaults

showLabels: false,
labelOptions: {
  before: "Before",
  after: "After",
  onHover: false,
},

// Smoothing

smoothing: true,
smoothingAmount: 100,

// Other options

hoverStart: false,
verticalMode: false,
startingPoint: 50,
fluidMode: false,
};

// Add your options object as the second argument
const viewer = new ImageCompare(element, options).mount();
/*
|--------------------------------------------------------------------------
| Cards animations bar 
|--------------------------------------------------------------------------
*/

document.addEventListener("DOMContentLoaded", function () {
// Define the object of progress bar data

// Function to create a progress bar element
function createProgressBar(label, value, maxValue) {
  const itemDiv = document.createElement("div");
  itemDiv.className = "progress-bar-item bdt-ep-advanced-progress-bar-item";
  itemDiv.setAttribute("data-max-value", maxValue);

  const labelDiv = document.createElement("div");
  labelDiv.className = "progress-bar-label";
  labelDiv.innerHTML = `<span>${label}</span><span class="progress-value">${value}</span>`;

  const progressBarDiv = document.createElement("div");
  progressBarDiv.className = "progress-bar";

  const progressBarFillDiv = document.createElement("div");
  progressBarFillDiv.className =
    "progress-bar-fill bdt-ep-advanced-progress-bar-fill";
  // progressBarFillDiv.style.width = `${(value / maxValue) * 100}%`;

  progressBarDiv.appendChild(progressBarFillDiv);
  itemDiv.appendChild(labelDiv);
  itemDiv.appendChild(progressBarDiv);

  return itemDiv;
}

// Function to create and append progress bars to the container
function appendProgressBars(type, containerId) {
  const container = document.getElementById(containerId);
  if (!container) {
    console.error(`Container with id '${containerId}' not found.`);
    return;
  }
  progressBars[type].forEach((bar) => {
    const progressBarElement = createProgressBar(
      bar.label,
      bar.value,
      bar.maxValue
    );
    container.appendChild(progressBarElement);
  });
}

// Append progress bars for each type
appendProgressBars("rocklear", "rocklear-progress-bar");
appendProgressBars("ceramic", "ceramic-progress-bar");
appendProgressBars("polymers", "polymers-progress-bar");
});

document.addEventListener("DOMContentLoaded", function () {
function animateProgressBar(progressBar) {
  const maxValue = progressBar.getAttribute("data-max-value");
  const widthValue =
    progressBar.querySelector(".progress-value").innerText + "%";
  const newWidth = (parseFloat(widthValue) / maxValue) * 100;
  progressBar.querySelector(".progress-bar-fill").style.width = 0; // Start width from 0

  setTimeout(() => {
    progressBar.querySelector(".progress-bar-fill").style.width =
      newWidth + "%"; // Animate to the new width
    // progressBar.querySelector(".progress-value").innerText = newWidth; // Animate to the new width
  }, 0);
}

// Intersection Observer to trigger animations when the progress bars come into view
const observer = new IntersectionObserver(
  (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const progressBar = entry.target;
        animateProgressBar(progressBar);
        observer.unobserve(entry.target); // Stop observing the entry after animation
      }
    });
  },
  {
    rootMargin: "0px", // Adjust this value if needed
    threshold: 0.1, // Try a lower threshold
  }
);

if (document.querySelectorAll(".bdt-ep-advanced-progress-bar-item")) {
  // Observe each progress bar
  const progressBarItems = document.querySelectorAll(
    ".bdt-ep-advanced-progress-bar-item"
  );
  progressBarItems.forEach((item) => observer.observe(item));
}
});

$(document).ready(function () {
var currentcustomTab = 0; // Current customTab is set to the first customTab (0)
showcustomTab(currentcustomTab); // Display the current customTab

function opencustomTab(evt, customTabName) {
  $(".customTab-content").fadeOut(100).removeClass("show");

  $(".customTab").removeClass("cta-primary");

  $("#" + customTabName)
    .fadeIn(100)
    .addClass("show");

  $(".customTab-pagination").text(
    $(evt.currentTarget).index() + 1 + "/" + $(".customTab").length
  ); // Update the pagination text
  $(evt.currentTarget).addClass("cta-primary");
}

function showcustomTab(n) {
  var customTabs = $(".customTab");
  var customTabContent = $(".customTab-content");

  if (n >= customTabs.length) {
    n = 0; // Loop back to first customTab
  }
  if (n < 0) {
    n = customTabs.length - 1; // Loop to last customTab
  }

  // Fade out the current customTab
  customTabContent.eq(currentcustomTab).fadeOut(100, function () {
    customTabContent.fadeOut(100).removeClass("show");

    customTabs.removeClass("cta-primary");

    // Fade in the new customTab
    customTabContent.eq(n).fadeIn(100, function () {
      customTabContent.eq(n).addClass("show");

      customTabs.eq(n).addClass("cta-primary");
      $(".customTab-pagination").text(n + 1 + "/" + customTabs.length); // Update the pagination text
      currentcustomTab = n; // Update the current customTab
    });
  });
}

function changecustomTab(n) {
  showcustomTab(currentcustomTab + n);
}

// Optional: Trigger Next/Prev with arrow keys
$(document).on("keydown", function (event) {
  if (event.key === "ArrowLeft") {
    changecustomTab(-1);
  }
  if (event.key === "ArrowRight") {
    changecustomTab(1);
  }
});

$(document).on("click", ".prev-btn", function () {
  changecustomTab(-1);
});
$(document).on("click", ".next-btn", function () {
  changecustomTab(1);
});

// Link the opencustomTab function to tab clicks if necessary
$(document).on("click", ".customTab", function (evt) {
  var customTabName = this.getAttribute("data-customTab");
  opencustomTab(evt, customTabName);
});

$(document).on("click", ".read-more", function () {
  $(this).prev(".content-details").slideToggle(100); // Use slideToggle() on the paragraph

  // Optionally, change the text of the link based on the state
  if ($(this).text() === "Read More") {
    $(this).text("Read Less");
  } else {
    $(this).text("Read More");
  }
});

$(".open-text").on("click", function () {
  $(this).next(".openable-text").slideToggle(100); // Use slideToggle() on the paragraph
});
});

$(document).ready(function () {
var container = $("#cards-container"); // Replace with your actual container ID or class

$.each(cards, function (index, card) {
  var cardHTML = `
          <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
              <div>
                  <img
                      loading="lazy"
                      decoding="async"
                      src="${card.imgSrc}"
                      class="img-fluid"
                      alt=""
                      srcset="${card.imgSrcset}"
                      sizes="${card.imgSizes}"
                  />
                  <div class="title-wrapper">
                      <h4 style="font-weight: 800; font-size:20px" class="mt-3">${card.title}</h4>
                  </div>
                  <div style="display: none" class="content-details">
                      ${card.description}
                  </div>
                  <a
                      class="text-dark nav-link read-more"
                      style="text-align: left"
                      href="javascript:void(0)"
                      >Read More</a
                  >
              </div>
          </div>
      `;

  container.append(cardHTML);
});
});

/*
|--------------------------------------------------------------------------
| Swipper First 
|--------------------------------------------------------------------------
*/

var swiper = new Swiper(".swiperFirst", {
autoplay: {
  delay: 5000,
},
loop: true,
speed: 500,
slidesPerView: 1,
slidesPerGroup: 1,
spaceBetween: 5,
effect: "carousel",
breakpoints: {
  767: {
    slidesPerView: 2,
    spaceBetween: 5,
    slidesPerGroup: 1,
  },
  1023: {
    slidesPerView: 1,
    spaceBetween: 5,
    slidesPerGroup: 1,
  },
},
navigation: {
  nextEl: ".swiper-button-next-first",
  prevEl: ".swiper-button-prev-first",
},
pagination: {
  el: ".swiper-pagination-first",
  type: "fraction",
  clickable: true,
},

paginationClickable: true,
scrollbar: {
  el: ".swiper-scrollbar-first",
  hide: true,
},
coverflowEffect: {
  rotate: 50,
  stretch: 0,
  depth: 100,
  modifier: 1,
  slideShadows: true,
},
// Enable mousewheel control
mousewheel: true,
});

// const swiperShowCase = new Swiper(".mySwiper", {
//   slidesPerView: 3,
//   centeredSlides: true,
//   spaceBetween: 30,
//   autoplay: {
//     delay: 5000,
//   },
//   loop: true,
//   speed: 500,
//   pagination: {
//     el: ".swiper-pagination",
//     type: "fraction",
//   },
//   navigation: {
//     nextEl: ".swiper-button-next",
//     prevEl: ".swiper-button-prev",
//   },
// });

const swiperShowCase = new Swiper(".mySwiper", {
autoplay: {
  delay: 5000,
},
loop: true,
speed: 500,
slidesPerView: 1,
slidesPerGroup: 1,
spaceBetween: 30,
effect: "carousel",
breakpoints: {
  767: {
    slidesPerView: 2,
    spaceBetween: 30,
    slidesPerGroup: 1,
  },
  1023: {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 1,
  },
},
navigation: {
  nextEl: ".swiper-button-next",
  prevEl: ".swiper-button-prev",
},
pagination: {
  el: ".swiper-pagination",
  type: "fraction",
  clickable: true,
  dynamicBullets: false,
},
scrollbar: {
  el: ".swiper-scrollbar",
  hide: true,
},
coverflowEffect: {
  rotate: 50,
  stretch: 0,
  depth: 100,
  modifier: 1,
  slideShadows: true,
},
});
