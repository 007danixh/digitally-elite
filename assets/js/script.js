const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");


hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
if (navMenu.classList.contains("active")) {
  // Disable scroll
 
  document.body.style.overflow = "hidden";
  document.body.style.position = "fixed";
} else {
  // Enable scroll
  document.body.style.overflow = "auto";
  document.body.style.position = "relative";
}
});

document.querySelectorAll(".nav-link").forEach((n) =>
  n.addEventListener("click", () => {
    console.log('in');
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
    document.body.style.overflow = "auto";
    document.body.style.position = "none";
  })
);



// 

