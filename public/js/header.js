let nav = document.getElementById('header');
window.onscroll = () => {
   nav.classList.toggle("active", window.scrollY > 0);
}

const navLinks = document.querySelectorAll('.nav-link');
const PageURL = window.location.pathname;
navLinks.forEach(navLink => {
   if (navLink.closest('.dropdown')) {
      return;
   }
   const linkURL = new URL(navLink.getAttribute('href'), window.location.origin);
   if (linkURL.origin === window.location.origin && PageURL === linkURL.pathname) {
      navLink.classList.add("active");
   } else if (PageURL === linkURL.pathname || PageURL.includes('linn_services')) {
      if (navLink.textContent.trim().toLowerCase() === 'services') {
         navLink.classList.add("active");
      }
   }
});

document.addEventListener('DOMContentLoaded', () => {
   const languageToggle = document.getElementById('language-toggle');
   const dropdownItems = document.querySelectorAll('.dropdown-item');
   const storedLang = sessionStorage.getItem('lang');
 
   // Update language toggle if stored language exists
   if (storedLang) {
     const selectedItem = [...dropdownItems].find(item => item.getAttribute('data-lang') === storedLang);
     if (selectedItem) {
       const selectedImg = selectedItem.querySelector('img').src;
       languageToggle.innerHTML = `<img class="me-0" height="18" width="auto" src="${selectedImg}" alt="lang"> ${storedLang}`;
     }
   }
 
   dropdownItems.forEach(item => {
     item.addEventListener('click', (event) => {
       const selectedLang = item.getAttribute('data-lang');
       const selectedImg = item.querySelector('img').src;
 
       // Update sessionStorage and reload
       sessionStorage.setItem('lang', selectedLang);
       sessionStorage.setItem('img', selectedImg);
       window.location.reload();
     });
   });
 });
 