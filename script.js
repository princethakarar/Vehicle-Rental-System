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
    duration:2500,
    delay:400,
    reset:true
})

sr.reveal('.text',{delay:200,origin:'top'})