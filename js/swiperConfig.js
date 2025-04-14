const swiper = new Swiper('.swiper', {
  // Nastavení swiperu
  loop: true, // Nekonečný loop
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});