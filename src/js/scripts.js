function scrollTop() {
  window.scrollTo({ top: 0, behavior: "smooth" });
}

var body = document.querySelector("body");

function openMenu() {
  var element = document.querySelectorAll(".navbar .navbar__menu");
  element.forEach(function (el) {
    el.classList.add("openned");
  });
  scrollTop();
  body.classList.add("overflow-hidden");
}

function closeMenu() {
  var close = document.querySelectorAll(".navbar .navbar__menu");
  close.forEach(function (item) {
    item.classList.remove("openned");
  });
  body.classList.remove("overflow-hidden");
}

document.addEventListener('DOMContentLoaded', function() {
  var menuModal = document.querySelector('.navbar .navbar__menu');
  var menuItems = document.querySelectorAll('.navbar .navbar__menu li a.item');

  // Close the modal when any menu item is clicked
  menuItems.forEach(function(item) {
    item.addEventListener('click', function() {
      menuModal.classList.remove("openned");
      body.classList.remove("overflow-hidden");
    });
  });
});

document.addEventListener('DOMContentLoaded', () => {
  const blocks = document.querySelectorAll('.scroll-effect');

  const handleScroll = () => {
      const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      const windowHeight = window.innerHeight;

      blocks.forEach(block => {
          const blockTop = block.getBoundingClientRect().top + scrollTop;
          if (scrollTop + windowHeight > blockTop + 50) {
              block.classList.add('visible');
          } else {
              block.classList.remove('visible');
          }
      });
  };

  window.addEventListener('scroll', handleScroll);
  handleScroll();
});
