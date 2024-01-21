let menu = document.querySelector("#menu-icon");
let navbar = document.querySelector(".navbar");
let buttons = document.querySelectorAll(".button");
let popup = document.querySelector("#popup");

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
    duration: 5000,
    delay: 400,
    reset: false
})

sr.reveal('.text',{delay:50,origin:'top'})
sr.reveal('.car img',{delay:50,origin:'bottom'})
sr.reveal('.form-container form',{delay:50,origin:'left'})
// sr.reveal('.heading',{delay:100,origin:'top'})
// // sr.reveal('.car-container .box',{delay:200,origin:'top'})
// // sr.reveal('.heading1',{delay:100,origin:'top'})
// // sr.reveal('.heading2',{delay:200,origin:'top'})
// sr.reveal('.about-container .about-image',{delay:300,origin:'top'})
// sr.reveal('.about-container .about-text',{delay:300,origin:'top'})
// // sr.reveal('.heading3',{delay:300,origin:'top'})
// sr.reveal('.reviews-container .box',{delay:400,origin:'top'})
// // sr.reveal('.heading4',{delay:400,origin:'top'})
// sr.reveal('.faq-container .box',{delay:500,origin:'top'})
// sr.reveal('.newsletter .box',{delay:600,origin:'bottom'})

// function to get information of specific car

function rentbutton(id){
    $.ajax({
        url:"rentbutton.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('#popup').html(data);
        }
    });
}

function getinfo(id){
    $.ajax({
        url:"getinfo.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('#popup').html(data);
        }
    });
}

function toggle()
{
    var blur = document.getElementById('blur');
    blur.classList.toggle('active');
    var popup = document.getElementById('popup');
    popup.classList.toggle('active');
}

function sec_toggle()
{
    var popup2 = document.getElementById('profile_popup');
    popup2.classList.toggle('hide');
}

function addOrder(){
    var Id = $('#Id').val();
    var brand = $('#Brand').val();
    var userName = $('#userName').val();
    var location = $('#location').val();
    var address = $('#address').val();
    var pickDate = $('#pickDate').val();
    var returnDate = $('#returnDate').val();
    var carName = $('#carName').val();
    var carImg = $('#path').val();
    var price = $('#price').val();
    var card_num = $('#card_num').val();
    var card_hol = $('#card_hol').val();
    var expire_mo = $('#expire_mo').val();
    var expire_year = $('#expire_year').val();
    var cvv = $('#cvv').val();

    var fd = new FormData();
    fd.append('Id', Id);
    fd.append('userName', userName);
    fd.append('location', location);
    fd.append('address', address);
    fd.append('pickDate', pickDate);
    fd.append('returnDate', returnDate);
    fd.append('carName', carName);
    fd.append('brand', brand);
    fd.append('carImg', carImg);
    fd.append('price', price);
    fd.append('card_num', card_num);
    fd.append('card_hol', card_hol);
    fd.append('expire_mo', expire_mo);
    fd.append('expire_year', expire_year);
    fd.append('cvv', cvv);
   
    $.ajax({
      url:'addOrder.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('Order Placed Success.');
        $('form').trigger('reset');
        showProductItems();
      }
    });
}

// fetch particular data from database

let brand = document.querySelector("#brand");
let heading = document.querySelector(".cars .head");
let container = document.querySelector(".cars-container");

window.onload = function car() {
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
                    <div class="box ${item.category}">
                        <div class="box-image">
                            <img src='${item.path}' alt="">
                        </div>
                        <div class="right">
                        <h3 class="name">${item.brand} ${item.name}</h3>
                        <h2 class="price">&#8377;${item.price}<span>/Day</span></h2>
                        <script>
                            rentbutton(<?php${item.Id}?>);
                        </script>
                        </div>
                    </div>
                `;
            }
            container.innerHTML = out;
        }
    };
    http.open('POST', "getdata.php", true);
    http.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    http.send("brand="); 
};

brand.addEventListener("change", function() {
    let brandName = this.value;

    heading.classList.remove("hide");
    heading.innerHTML = this[this.selectedIndex].text;

    buttons.forEach((button) => {
        if(button.value == "all")
        {
            button.classList.add("active");
        }
        else
        {
            button.classList.remove("active");
        }
    });

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

            // <?php
            // session_start();
            // if (isset($_SESSION['name'])) {
            //     $temp = true;
            // } else {
            //     $temp = false;
            // }
            // ?>

            for(let item of response)
            {
                out += `
                    <div class="box ${item.category}">
                        <div class="box-image">
                            <img src='${item.path}' alt="">
                        </div>
                        <div class="right">
                        <h3 class="name">${item.brand} ${item.name}</h3>
                        <h2 class="price">&#8377;${item.price}<span>/Day</span></h2>
                        <a href="#cars" onclick="toggle(); getinfo(${item.Id})" class="btn">Rent Now</a>
                        </div>
                    </div>
                `;
            }
            container.innerHTML = out;
        };
    }

    http.open('POST', "getdata.php", true);
    http.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    http.send("brand=" + brandName);
});

// Category-Wise

function filterProduct(value){

    buttons.forEach((button) => {
        if(button.value == value)
        {
            button.classList.add("active");
        }
        else
        {
            button.classList.remove("active");
        }
    });

    let boxes = document.querySelectorAll(".cars-container .box");

    boxes.forEach((box) =>{
        if(value == "all")
        {
            box.classList.remove("hide");
        }
        else
        {
            if(box.classList.contains(value))
            {
                box.classList.remove("hide");
            }
            else
            {
                box.classList.add("hide");
            }
        }
    });
}