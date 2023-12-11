/* Set CSS in JS */

/* Set header vh */

const otherDiv = document.querySelector(".navbar");
const myDiv = document.querySelector(".hero-image");
myDiv.style.height = `calc(100vh - ${otherDiv.clientHeight}px)`;
