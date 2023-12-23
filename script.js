let menu = document.querySelector("#menu-icon");
let navbar = document.querySelector(".navbar");

menu.addEventListener("click",() =>{
    menu.classList.toggle("bx-x");
    navbar.classList.toggle('active');
});

document.addEventListener("scroll",() => {
    menu.classList.remove("bx-x");
    navbar.classList.remove('active');
});

const sr = ScrollReveal ({
    distance: '60px',
    duration: 2500,
    delay: 400,
    reset: true
})

sr.reveal('.text',{delay:50,origin:'top'})
sr.reveal('.car img',{delay:50,origin:'bottom'})
sr.reveal('.form-container form',{delay:200,origin:'left'})
sr.reveal('.heading',{delay:50,origin:'top'})
sr.reveal('.ride-container .box',{delay:150,origin:'top'})
sr.reveal('.services-container .box',{delay:150,origin:'top'})
sr.reveal('.about-container .about-image',{delay:150,origin:'top'})
sr.reveal('.about-container .about-text',{delay:150,origin:'top'})
sr.reveal('.reviews-container .box',{delay:150,origin:'top'})
sr.reveal('.newsletter .box',{delay:100,origin:'bottom'})