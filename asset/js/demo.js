

// Hero section js
const html = document.querySelector('html');
html.setAttribute('data-bs-theme', 'dark');

function ready (fn) {
  if (document.readyState != 'loading') {
    fn()
  } else {
    document.addEventListener('DOMContentLoaded', fn)
  }
}

ready(() => {
  // --- Function to add and remove CSS animation classes
  function doAnimations(elems) {
    const animEndEv = 'animationend';

    elems.forEach((elem) => {
      elem.classList.add('animate__animated', 'animate__flipInX');
      elem.addEventListener(animEndEv, () => {
        elem.classList.remove('animate__animated', 'animate__flipInX');
      });
    });
  }

  // --- Variables on page load
  const carouselKenBurns = document.querySelector('#carouselKenBurns');
  const firstAnimatingElems = Array.from(
    carouselKenBurns.querySelector('.carousel-item:first-child')
      .querySelectorAll("[data-animation^='animated']")
  );

  // --- Animate captions in the first slide on page load
  doAnimations(firstAnimatingElems);

  // --- Other slides to be animated on carousel slide event
  carouselKenBurns.addEventListener('slid.bs.carousel', (e) => {
    const animatingElems = Array.from(e.relatedTarget.querySelectorAll("[data-animation^='animated']"));
    doAnimations(animatingElems);
  });
  
 // --- Auto slide carousel
    setInterval(() => {
        carouselKenBurns.carousel('next');
      }, 5000); // Change image every 5 seconds
})
// hero section js end

// counter js
document.addEventListener("DOMContentLoaded", function() {
  const counters = document.querySelectorAll(".stats .counting");
  counters.forEach(function(counter) {
    const countTo = counter.dataset.count;
    let count = 0;
    const increment = Math.ceil(countTo / 100);
    const interval = setInterval(function() {
      count += increment;
      if (count > countTo) {
        count = countTo;
        clearInterval(interval);
      }
      counter.textContent = count.toLocaleString();
    }, 20);
  });
});
// counter js end

// logo slider

 $('.logos-slider').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1500,
  arrows: false,
  dots: false,
  pauseOnHover: false,
  responsive: [{
  breakpoint: 768,
  settings: {
  slidesToShow: 3
  }
  }, {
  breakpoint: 520,
  settings: {
  slidesToShow: 2
  }
  }]
  });


// service slider cards
    $(document).ready(function(){
        $('.service_slider').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,  // Adjust the speed as needed (2000ms = 2s)
            arrows: false,    
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });

  