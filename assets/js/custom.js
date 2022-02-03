// Mobile Navigation Js
$('.menuToogle').click(function(){
	$('.all-links').addClass('show');
});
// Mobile Navigation Close Button Js
$('.closeBtn').click(function(){
	$('.all-links').removeClass('show');
});

// Progress Bar
let  numberPercent = document.querySelectorAll('.countbar')
let getPercent = Array.from(numberPercent)

getPercent.map((items) => {
    let startCount = 0
    let progressBar = () => {
        startCount ++
        items.innerHTML = `<h3>${startCount}%</h3>`
        items.style.width = `${startCount}%`
        if(startCount == items.dataset.percentnumber) {
            clearInterval(stop)
        }
    }
    let stop = setInterval(() => {
        progressBar()
    },25)
});
// Swiper-1 Banner section
var swiper = new Swiper(".mySwiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

//   Swiper-2 Service section 
var swiper = new Swiper(".mySwipertwo", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      300: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      480: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      575: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      586: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      910: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    }
  });

//   Swiper-3 Testimonials section
var swiper = new Swiper(".mySwiperthree", {
    slidesPerView: 2,
    spaceBetween: 20,
    slidesPerGroup: 2,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      300: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      480: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      575: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      586: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
    }
  });

  // swiper-4 client section
  var swiper = new Swiper(".mySwiperfour", {
    slidesPerView: 4,
    spaceBetween: 20,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      300: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      480: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      575: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      586: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 20,
      },
      910: {
        slidesPerView: 4,
        spaceBetween: 20,
      },
      992: {
        slidesPerView: 4,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 20,
      },
      1440: {
        slidesPerView: 4,
        spaceBetween: 20,
      }
    }
  });