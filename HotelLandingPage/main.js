new Swiper (".swiper-container", {
    speed: 1500,
    spaceBetween: 100,
    effect: 'slide',
    slidesPerView: 1,
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: 
    {
      delay: 2000,
    },
});

let menuBtn = document.getElementById("menuBtn");
let sidenav = document.getElementById("sidenav");

    sidenav.style.right = "-550px";
    menuBtn.onclick = function() {
        if(sidenav.style.right == "-550px") {
            sidenav.style.right = "0px";
        }
        else {
            sidenav.style.right = "-550px";
        }
    }


// -----book now buttons----->
const form = document.getElementById("form");

const books = document.querySelectorAll('.dish-book-main');
const ekis = document.querySelectorAll('.fa-minus');

books.forEach(book => book.addEventListener('click', function (e) {
    form.style.display = 'block';
}));

ekis.forEach(eks => eks.addEventListener('click', function (e) {
    form.style.display = 'none';
}))

// ----Icons Functionality---->

const guest = document.querySelector('.guest-container');
const dish = document.querySelector('.dish-container');
const bar = document.querySelector('.bar-container');
const wellness = document.querySelector('.wellness-container');

const icons = document.querySelectorAll('.feauture-icons');

function guestFunk() {
    dish.classList.add('hide')
    bar.classList.add('hide')
    wellness.classList.add('hide')
    guest.classList.remove('hide')
    guest.classList.add('open')
    
}
function dishFunk() {
    guest.classList.add('hide')
    bar.classList.add('hide')
    wellness.classList.add('hide')
    dish.classList.remove('hide')
    dish.classList.add('open')
    
}
function barFunk() {
    dish.classList.add('hide')
    guest.classList.add('hide')
    wellness.classList.add('hide')
    bar.classList.remove('hide')
    bar.classList.add('open')
    
}
function wellnessFunk() {
    dish.classList.add('hide')
    bar.classList.add('hide')
    guest.classList.add('hide')
    wellness.classList.remove('hide')
    wellness.classList.add('open')
    
}

icons.forEach(icon => icon.addEventListener('click', function(event) {
    if (event.target.classList[1] === 'fa-key') {
        guestFunk()
    } else if (event.target.classList[1] === 'fa-cutlery') {
        dishFunk();
    } else if (event.target.classList[1] === 'fa-glass') {
        barFunk();
    } else {
        wellnessFunk();
    }
}))


// ------Guest Contents------>

//images

const img1 = document.querySelector('.img-1');
const img2 = document.querySelector('.img-2');
const img3 = document.querySelector('.img-3');
const img4 = document.querySelector('.img-4');
const img5 = document.querySelector('.img-5');

//content
const solo = document.querySelector('.content-desc');
const twin = document.querySelector('.content-desc1');
const queen = document.querySelector('.content-desc2');
const barkada = document.querySelector('.content-desc3');
const family = document.querySelector('.content-desc4');


//buttons

const solo1 = document.querySelector('.btn-1')
.addEventListener('click', function() {
  family.classList.add('hide');
  img5.classList.add('hide');
  twin.classList.add('hide');
  img2.classList.add('hide');
  queen.classList.add('hide');
  img3.classList.add('hide');
  barkada.classList.add('hide');
  img4.classList.add('hide');
  solo.classList.remove('hide');
  img1.classList.remove('hide');
})


const twin2 = document.querySelector('.btn-2')
.addEventListener('click', function () {
  solo.classList.add('hide');
  img1.classList.add('hide');
  queen.classList.add('hide');
  img3.classList.add('hide');
  barkada.classList.add('hide');
  img4.classList.add('hide');
  family.classList.add('hide');
  img5.classList.add('hide');
  twin.classList.remove('hide');
  img2.classList.remove('hide');
});

const queen3 = document.querySelector('.btn-3')
.addEventListener('click', function () {
  twin.classList.add('hide');
  img2.classList.add('hide');
  solo.classList.add('hide');
  img1.classList.add('hide');
  barkada.classList.add('hide');
  img4.classList.add('hide');
  family.classList.add('hide');
  img5.classList.add('hide');
  queen.classList.remove('hide');
  img3.classList.remove('hide');
})

const barkada4 = document.querySelector('.btn-4')
.addEventListener('click', function () {
  queen.classList.add('hide');
  img3.classList.add('hide');
  family.classList.add('hide');
  img5.classList.add('hide');
  solo.classList.add('hide');
  img1.classList.add('hide');
  twin.classList.add('hide');
  img2.classList.add('hide');
  barkada.classList.remove('hide');
  img4.classList.remove('hide');
})

const family5 = document.querySelector('.btn-5')
.addEventListener('click', function () {
  barkada.classList.add('hide');
  img4.classList.add('hide');
  queen.classList.add('hide');
  img3.classList.add('hide');
  twin.classList.add('hide');
  img2.classList.add('hide');
  solo.classList.add('hide');
  img1.classList.add('hide');
  family.classList.remove('hide');
  img5.classList.remove('hide');
});

// ------Dish Contents------>

//images

const dishImg1 = document.querySelector('.dish-1');
const dishImg2 = document.querySelector('.dish-2');
const dishImg3 = document.querySelector('.dish-3');
const dishImg4 = document.querySelector('.dish-4');
const dishImg5 = document.querySelector('.dish-5');

//content
const dishCont1 = document.querySelector('.dish-content-desc');
const dishCont2 = document.querySelector('.dish-content-desc1');
const dishCont3 = document.querySelector('.dish-content-desc2');
const dishCont4 = document.querySelector('.dish-content-desc3');
const dishCont5 = document.querySelector('.dish-content-desc4');


//buttons

const dish1 = document.querySelector('.dish-btn-1')
.addEventListener('click', function() {
  dishCont5.classList.add('hide');
  dishImg5.classList.add('hide');
  dishCont2.classList.add('hide');
  dishImg2.classList.add('hide');
  dishCont3.classList.add('hide');
  dishImg3.classList.add('hide');
  dishCont4.classList.add('hide');
  dishImg4.classList.add('hide');
  dishCont1.classList.remove('hide');
  dishImg1.classList.remove('hide');
})


const dish2 = document.querySelector('.dish-btn-2')
.addEventListener('click', function () {
  dishCont1.classList.add('hide');
  dishImg1.classList.add('hide');
  dishCont3.classList.add('hide');
  dishImg3.classList.add('hide');
  dishCont4.classList.add('hide');
  dishImg4.classList.add('hide');
  dishCont5.classList.add('hide');
  dishImg5.classList.add('hide');
  dishCont2.classList.remove('hide');
  dishImg2.classList.remove('hide');
});

const dish3 = document.querySelector('.dish-btn-3')
.addEventListener('click', function () {
    dishCont1.classList.add('hide');
    dishImg1.classList.add('hide');
    dishCont2.classList.add('hide');
    dishImg2.classList.add('hide');
    dishCont4.classList.add('hide');
    dishImg4.classList.add('hide');
    dishCont5.classList.add('hide');
    dishImg5.classList.add('hide');
    dishCont3.classList.remove('hide');
    dishImg3.classList.remove('hide');
})

const dish4 = document.querySelector('.dish-btn-4')
.addEventListener('click', function () {
    dishCont1.classList.add('hide');
    dishImg1.classList.add('hide');
    dishCont3.classList.add('hide');
    dishImg3.classList.add('hide');
    dishCont2.classList.add('hide');
    dishImg2.classList.add('hide');
    dishCont5.classList.add('hide');
    dishImg5.classList.add('hide');
    dishCont4.classList.remove('hide');
    dishImg4.classList.remove('hide');
})

const dish5 = document.querySelector('.dish-btn-5')
.addEventListener('click', function () {
    dishCont1.classList.add('hide');
    dishImg1.classList.add('hide');
    dishCont3.classList.add('hide');
    dishImg3.classList.add('hide');
    dishCont2.classList.add('hide');
    dishImg2.classList.add('hide');
    dishCont4.classList.add('hide');
    dishImg4.classList.add('hide');
    dishCont5.classList.remove('hide');
    dishImg5.classList.remove('hide');
});

// ------Bar Contents------>

//images

const barImg1 = document.querySelector('.bar-img-1');
const barImg2 = document.querySelector('.bar-img-2');
const barImg3 = document.querySelector('.bar-img-3');
const barImg4 = document.querySelector('.bar-img-4');
const barImg5 = document.querySelector('.bar-img-5');

//content
const barCont1 = document.querySelector('.bar-content-desc');
const barCont2 = document.querySelector('.bar-content-desc1');
const barCont3 = document.querySelector('.bar-content-desc2');
const barCont4 = document.querySelector('.bar-content-desc3');
const barCont5 = document.querySelector('.bar-content-desc4');


//buttons

const bar1 = document.querySelector('.bar-btn-1')
.addEventListener('click', function() {
  barCont5.classList.add('hide');
  barImg5.classList.add('hide');
  barCont2.classList.add('hide');
  barImg2.classList.add('hide');
  barCont3.classList.add('hide');
  barImg3.classList.add('hide');
  barCont4.classList.add('hide');
  barImg4.classList.add('hide');
  barCont1.classList.remove('hide');
  barImg1.classList.remove('hide');
})


const bar2 = document.querySelector('.bar-btn-2')
.addEventListener('click', function () {
    barCont5.classList.add('hide');
    barImg5.classList.add('hide');
    barCont1.classList.add('hide');
    barImg1.classList.add('hide');
    barCont3.classList.add('hide');
    barImg3.classList.add('hide');
    barCont4.classList.add('hide');
    barImg4.classList.add('hide');
    barCont2.classList.remove('hide');
    barImg2.classList.remove('hide');
});

const bar3 = document.querySelector('.bar-btn-3')
.addEventListener('click', function () {
    barCont5.classList.add('hide');
    barImg5.classList.add('hide');
    barCont2.classList.add('hide');
    barImg2.classList.add('hide');
    barCont1.classList.add('hide');
    barImg1.classList.add('hide');
    barCont4.classList.add('hide');
    barImg4.classList.add('hide');
    barCont3.classList.remove('hide');
    barImg3.classList.remove('hide');
})

const bar4 = document.querySelector('.bar-btn-4')
.addEventListener('click', function () {
    barCont5.classList.add('hide');
    barImg5.classList.add('hide');
    barCont2.classList.add('hide');
    barImg2.classList.add('hide');
    barCont1.classList.add('hide');
    barImg1.classList.add('hide');
    barCont3.classList.add('hide');
    barImg3.classList.add('hide');
    barCont4.classList.remove('hide');
    barImg4.classList.remove('hide');
})

const bar5 = document.querySelector('.bar-btn-5')
.addEventListener('click', function () {
    barCont3.classList.add('hide');
    barImg3.classList.add('hide');
    barCont2.classList.add('hide');
    barImg2.classList.add('hide');
    barCont1.classList.add('hide');
    barImg1.classList.add('hide');
    barCont4.classList.add('hide');
    barImg4.classList.add('hide');
    barCont5.classList.remove('hide');
    barImg5.classList.remove('hide');
});

// ------Wellness Contents------>

//images

const wellImg1 = document.querySelector('.well-img-1');
const wellImg2 = document.querySelector('.well-img-2');
const wellImg3 = document.querySelector('.well-img-3');
const wellImg4 = document.querySelector('.well-img-4');
const wellImg5 = document.querySelector('.well-img-5');

//content
const wellCont1 = document.querySelector('.well-content-desc');
const wellCont2 = document.querySelector('.well-content-desc1');
const wellCont3 = document.querySelector('.well-content-desc2');
const wellCont4 = document.querySelector('.well-content-desc3');
const wellCont5 = document.querySelector('.well-content-desc4');


//buttons

const well1 = document.querySelector('.well-btn-1')
.addEventListener('click', function() {
  wellCont5.classList.add('hide');
  wellImg5.classList.add('hide');
  wellCont2.classList.add('hide');
  wellImg2.classList.add('hide');
  wellCont3.classList.add('hide');
  wellImg3.classList.add('hide');
  wellCont4.classList.add('hide');
  wellImg4.classList.add('hide');
  wellCont1.classList.remove('hide');
  wellImg1.classList.remove('hide');
})


const well2 = document.querySelector('.well-btn-2')
.addEventListener('click', function () {
  wellCont5.classList.add('hide');
  wellImg5.classList.add('hide');
  wellCont1.classList.add('hide');
  wellImg1.classList.add('hide');
  wellCont3.classList.add('hide');
  wellImg3.classList.add('hide');
  wellCont4.classList.add('hide');
  wellImg4.classList.add('hide');
  wellCont2.classList.remove('hide');
  wellImg2.classList.remove('hide');
});

const well3 = document.querySelector('.well-btn-3')
.addEventListener('click', function () {
    wellCont5.classList.add('hide');
    wellImg5.classList.add('hide');
    wellCont2.classList.add('hide');
    wellImg2.classList.add('hide');
    wellCont1.classList.add('hide');
    wellImg1.classList.add('hide');
    wellCont4.classList.add('hide');
    wellImg4.classList.add('hide');
    wellCont3.classList.remove('hide');
    wellImg3.classList.remove('hide');
})

const well4 = document.querySelector('.well-btn-4')
.addEventListener('click', function () {
    wellCont5.classList.add('hide');
    wellImg5.classList.add('hide');
    wellCont2.classList.add('hide');
    wellImg2.classList.add('hide');
    wellCont3.classList.add('hide');
    wellImg3.classList.add('hide');
    wellCont1.classList.add('hide');
    wellImg1.classList.add('hide');
    wellCont4.classList.remove('hide');
    wellImg4.classList.remove('hide');
})

const well5 = document.querySelector('.well-btn-5')
.addEventListener('click', function () {
  wellCont1.classList.add('hide');
  wellImg1.classList.add('hide');
  wellCont2.classList.add('hide');
  wellImg2.classList.add('hide');
  wellCont3.classList.add('hide');
  wellImg3.classList.add('hide');
  wellCont4.classList.add('hide');
  wellImg4.classList.add('hide');
  wellCont5.classList.remove('hide');
  wellImg5.classList.remove('hide');
});