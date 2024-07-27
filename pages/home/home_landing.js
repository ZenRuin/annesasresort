document.addEventListener("DOMContentLoaded", function () {
  function fadeOut(elements, duration, callback) {
    elements.forEach(function (element) {
      element.style.opacity = 1;
      (function fade() {
        if ((element.style.opacity -= 0.1) < 0) {
          element.style.display = "none";
          if (callback) callback();
        } else {
          requestAnimationFrame(fade);
        }
      })();
    });
  }

  function fadeIn(element, duration) {
    element.style.opacity = 0;
    element.style.display = "block";
    (function fade() {
      var val = parseFloat(element.style.opacity);
      if (!((val += 0.1) > 1)) {
        element.style.opacity = val;
        requestAnimationFrame(fade);
      }
    })();
  }

  document.querySelectorAll("a").forEach(function (link) {
    link.addEventListener("click", function (e) {
      e.preventDefault();

      var href = this.getAttribute("href");
      var targetSection = document.querySelector(href);
      fadeOut(document.querySelectorAll(".content.active"), 200, function () {
        document.querySelectorAll(".content").forEach(function (section) {
          section.classList.remove("active");
        });
        fadeIn(targetSection, 200);
        targetSection.classList.add("active");
      });
    });
  });
  document.getElementById("home").classList.add("active");

  document.getElementById("hamburger").addEventListener("click", function () {
    document.getElementById("side-menu").classList.add("active");
  });

  document.getElementById("close-menu").addEventListener("click", function () {
    document.getElementById("side-menu").classList.remove("active");
  });

  // ONLOAD FUNCTION
  window.onload = function () {
    function initializeScrollEvents() {
      const scrollBtn = document.getElementById("scrollButton");

      function handleScroll() {
        if (
          document.body.scrollTop > 50 ||
          document.documentElement.scrollTop > 50
        ) {
          scrollBtn.style.display = "none";
        } else {
          scrollBtn.style.display = "block";
        }
      }

      window.onscroll = handleScroll;

      handleScroll();

      scrollBtn.addEventListener("click", function (e) {
        e.preventDefault();

        window.scrollTo({
          top: 900,
          behavior: "smooth",
        });

        scrollBtn.style.display = "none";
      });
    }
    initializeScrollEvents();
  };

  // SWIPER
  let swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
    },
    breakpoints: {
      200: {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1320: {
        slidesPerView: 3,
        spaceBetween: 50,
      },
    },
  });

  const imagePaths = [
    "./assets/images/gallery/1.jpg",
    "./assets/images/gallery/2.jpg",
    "./assets/images/gallery/3.jpg",
    "./assets/images/gallery/4.jpg",
    "./assets/images/gallery/5.jpg",
    "./assets/images/gallery/6.jpg",
    "./assets/images/gallery/7.jpg",
    "./assets/images/gallery/8.jpg",
    "./assets/images/gallery/9.jpg",
    "./assets/images/gallery/10.jpg",
    "./assets/images/gallery/11.jpg",
    "./assets/images/gallery/12.jpg",
    "./assets/images/gallery/13.jpg",
    "./assets/images/gallery/14.jpg",
    "./assets/images/gallery/15.jpg",
    "./assets/images/gallery/16.jpg",
    "./assets/images/gallery/17.jpg",
    "./assets/images/gallery/18.jpg",
    "./assets/images/gallery/19.jpg",
    "./assets/images/gallery/20.jpg",
    "./assets/images/gallery/21.jpg",
    "./assets/images/gallery/22.jpg",
    "./assets/images/gallery/23.jpg",
    "./assets/images/gallery/24.jpg",
    "./assets/images/gallery/25.jpg",
    "./assets/images/gallery/26.jpg",
    "./assets/images/gallery/27.jpg",
    "./assets/images/gallery/28.jpg",
  ];

  const galleryContainer = document.getElementById("gallery");

  imagePaths.forEach((path, index) => {
    const swiperSlide = document.createElement("div");
    swiperSlide.classList.add("swiper-slide");
    const image = document.createElement("img");
    image.src = path;
    image.alt = `gallery-${index + 1}`;
    swiperSlide.appendChild(image);
    galleryContainer.appendChild(swiperSlide);
  });

  let idx = 0;
  const testimonialElement = document.querySelector(".testimonial");
  const userImage = document.querySelector(".user-image");
  const username = document.querySelector(".username");
  const role = document.querySelector(".role");

  function updateTestimonials() {
    const { name, position, photo, text } = testimonials[idx];
    testimonialElement.innerHTML = text;
    userImage.src = photo;
    username.innerHTML = name;
    role.innerHTML = position;

    idx = (idx + 1) % testimonials.length;
  }

  setInterval(updateTestimonials, 3990);

  const testimonials = [
    {
      name: "Miyah Myles",
      position: "Marketing",
      photo:
        "https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=707b9c33066bf8808c934c8ab394dff6",
      text: "I've worked with literally hundreds of HTML/CSS developers and I have to say the top spot goes to this guy. This guy is an amazing developer. He stresses on good, clean code and pays heed to the details. I love developers who respect each and every aspect of a throughly thought out design and do their best to put it in code. He goes over and beyond and transforms ART into PIXELS - without a glitch, every time.",
    },
    {
      name: "June Cha",
      position: "Software Engineer",
      photo: "https://randomuser.me/api/portraits/women/44.jpg",
      text: "This guy is an amazing frontend developer that delivered the task exactly how we need it, do your self a favor and hire him, you will not be disappointed by the work delivered. He will go the extra mile to make sure that you are happy with your project. I will surely work again with him!",
    },
    {
      name: "Iida Niskanen",
      position: "Data Entry",
      photo: "https://randomuser.me/api/portraits/women/68.jpg",
      text: "This guy is a hard worker. Communication was also very good with him and he was very responsive all the time, something not easy to find in many freelancers. We'll definitely repeat with him.",
    },
    {
      name: "Renee Sims",
      position: "Receptionist",
      photo: "https://randomuser.me/api/portraits/women/65.jpg",
      text: "This guy does everything he can to get the job done and done right. This is the second time I've hired him, and I'll hire him again in the future.",
    },
  ];
});
