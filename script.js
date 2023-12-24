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
sr.reveal('.form-container form',{delay:50,origin:'left'})
sr.reveal('.heading',{delay:50,origin:'top'})
sr.reveal('.faq-container .box',{delay:50,origin:'top'})
sr.reveal('.cars-container .box',{delay:50,origin:'top'})
sr.reveal('.cars-container .categories',{delay:50,origin:'top'})
sr.reveal('.about-container .about-image',{delay:50,origin:'top'})
sr.reveal('.about-container .about-text',{delay:50,origin:'top'})
sr.reveal('.reviews-container .box',{delay:50,origin:'top'})
sr.reveal('.newsletter .box',{delay:50,origin:'bottom'})

// fetch particular data from database

let brand = document.querySelector("#brand");
let heading = document.querySelector(".cars .head");
let container = document.querySelector(".cars-container");

window.onload = function() {
    let http = new XMLHttpRequest();
    heading.classList.add("hide");
    http.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let response = JSON.parse(this.responseText);
            let out = "";
            container.innerHTML = "";
            for(let item of response)
            {
                out += `
                    <div class="box">
                        <div class="box-image">
                            <img src='${item.path}' alt="">
                        </div>
                        <div class="right">
                            <p class="model">${item.model}</p>
                            <h3 class="name">${item.name}</h3>
                            <h2 class="price">&#8377;${item.price}<span>/Month</span></h2>
                            <a href="#" class="btn">Rent Now</a>
                        </div>
                    </div>
                `;
            }
            container.innerHTML = out;
        }
    };
    http.open('POST', "temp.php", true);
    http.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    http.send("brand="); 
};

brand.addEventListener("change", function() {
    let brandName = this.value;

    heading.classList.remove("hide");
    heading.innerHTML = this[this.selectedIndex].text;

    if(heading.innerText === "All Brands")
    {
        heading.classList.add("hide");
    }

    let http = new XMLHttpRequest();

    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200)
        {
            let response = JSON.parse(this.responseText);
            let out = "";
            container.innerHTML = "";
            for(let item of response)
            {
                out += `
                    <div class="box">
                        <div class="box-image">
                            <img src='${item.path}' alt="">
                        </div>
                        <div class="right">
                            <p class="model">${item.model}</p>
                            <h3 class="name">${item.brand} ${item.name}</h3>
                            <h2 class="price">&#8377;${item.price}<span>/Month</span></h2>
                            <a href="#" class="btn">Rent Now</a>
                        </div>
                    </div>
                `;
            }
            container.innerHTML = out;
        };
    }

    http.open('POST', "temp.php", true);
    http.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    http.send("brand=" + brandName);
});