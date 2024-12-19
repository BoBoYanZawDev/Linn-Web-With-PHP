let nav = document.getElementById('header');
window.onscroll = () => {
   nav.classList.toggle("active",window.scrollY > 0);
}

const navLinks = document.querySelectorAll('.nav-link');
const PageURL = window.location.pathname;
navLinks.forEach(navLink => {
   const linkURL = new URL(navLink.href);
   if (linkURL.origin === window.location.origin && PageURL === linkURL.pathname) {
      navLink.classList.add("active");
   }
});
