nav.js
document.querySelectorAll('.nav-link').forEach -
  (link => {
    console.log(link.href === window.location.href)
  })
