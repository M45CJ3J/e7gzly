if ((window.location.pathname.includes('php') && window.location.pathname.includes('index.php'))) {
  const header = document.querySelector("header");
  const sectionOne = document.querySelector("#particles-js");
  const menue = document.querySelector('#name-menu');
  const sectionOneOptions = {
    rootMargin: "-120px  0px 0px 0px"
  };

  const sectionOneObserver = new IntersectionObserver(function (
    entries,
    sectionOneObserver
  ) {
    entries.forEach(entry => {
      if (!entry.isIntersecting) {
        header.classList.add("nav-scrolled");
        if (menue) {
          menue.classList.remove("bg-transparent");
          menue.classList.remove("text-white");
        }

      } else {
        header.classList.remove("nav-scrolled");
        if (menue) {
          menue.classList.add("bg-transparent");
          menue.classList.add("text-white");
        }
      }
    });
  },
    sectionOneOptions);

  sectionOneObserver.observe(sectionOne);

}
////
const navSlide = () => {
  const burger = $('.burger, .nav-list-item');
  const nav = document.querySelector('.nav-list');
  const navLinks = document.querySelectorAll('.nav-list-item');

  burger.on('click', () => {
    //toggle nav
    nav.classList.toggle('nav-active');

    //Animate Links
    navLinks.forEach((link, index) => {
      if (link.style.animation) {
        link.style.animation = '';
      } else {
        link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + .3}s`;
      }
    });
    //burger animation
    burger.toggleClass('toggle');
    //  links.addEventListener('click', ()=>{
    //      nav.classList.toggle('nav-active');

  });


}

navSlide();


////


$(document).ready(function () {

  var scrollLink = $('.scroll');

  // Smooth scrolling
  scrollLink.click(function (e) {
    e.preventDefault();

    $('body,html').animate({
      scrollTop: $(this.hash).offset().top
    }, 1000);
  });

  // Active link switching
  $(window).scroll(function () {
    var scrollbarLocation = $(this).scrollTop();

    scrollLink.each(function () {
      var sectionOffset = ($(this.hash).offset().top) - 20;

      if (sectionOffset <= scrollbarLocation) {
        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');
      }
    })

  })

})

var counter = function () {
  $('#partners').waypoint(function (direction) {

    if (direction === 'down' && !$(this.element).hasClass('ftco-animated')) {

      var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
      $('.number').each(function () {
        var $this = $(this),
          num = $this.data('number');
        $this.animateNumber({
          number: num,
          numberStep: comma_separator_number_step
        }, 4000);
      });

    }

  }, {
    offset: '95%'
  });

}
setTimeout(() => {
  counter();
}, 1000);
