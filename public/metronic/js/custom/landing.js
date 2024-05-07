"use strict";var KTLandingPage={init:function(){}};"undefined"!=typeof module&&(module.exports=KTLandingPage),KTUtil.onDOMContentLoaded((function(){KTLandingPage.init()}));
window.addEventListener('scroll', function() {
  var logo = document.getElementById('logo');
  if (window.scrollY > 100) { 
      logo.style.opacity = '0';
  } else {
      logo.style.opacity = '1';
  }
});
