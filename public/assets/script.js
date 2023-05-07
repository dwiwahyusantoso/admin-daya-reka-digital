let menu = document.querySelector('#menu-bars');
menu.onclick = () =>{
  menu.classList.toggle('fa-times');
}

// ini ambil elemen navbar
let navbar = document.querySelector('.navbar');
navbar.onclick = (evt) => {
  nav_link = document.getElementsByClassName("nav-link");
  for (i = 0; i < nav_link.length; i++) {
    nav_link[i].className = nav_link[i].className.replace("active", "");
  }
  evt.target.className += " active";
}

let btn_nav = document.getElementById("btn-nav");
btn_nav.onclick = () => {
  let x = document.getElementById("navbar");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}

let article = document.querySelectorAll('article');
let navLinks = document.querySelectorAll('.nav-link');

window.onscroll = () =>{

  menu.classList.remove('fa-times');
  navbar.classList.remove('active');

  article.forEach(item =>{
    let top = window.scrollY;
    let height = item.offsetHeight;
    let offset = item.offsetTop - 100;
    let id = item.getAttribute('id');

    if(top >= offset && top < offset + height){
      navLinks.forEach(links =>{
        links.classList.remove('active');
        document.querySelector('header .navbar a[href*='+id+']').classList.add('active');
      });
    };

  });

}

document.querySelector('#search-icon').onclick = () =>{
  document.querySelector('#search-form').classList.toggle('active');
}

document.querySelector('#close').onclick = () =>{
  document.querySelector('#search-form').classList.remove('active');
}

var swiper = new Swiper(".review-slider", {
  spaceBetween: 20,
  centeredSlides: true,
  autoplay: {
    delay: 6000,
    disableOnInteraction: false,
  },
  loop:true,
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    640: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});
