const menue = document.querySelectorAll(".menue a");
const fhome = document.querySelectorAll(".f-home");
const booking = document.querySelectorAll(".booking button a");
const livea = document.querySelectorAll(".live-a");
// const liveparent = menues.parentElement
currentloc = location.href;


menue.forEach((menue) => {
    if (menue.href === currentloc) {
        menue.classList.add("active-j");
    } else menue.classList.remove("active-j");
});

booking.forEach((menu) => {
    if (menu.href === currentloc) {
        menu.classList.add("active-j");
    } else menu.classList.remove("active-j");
});

fhome.forEach((menu) => {
    if (menu.href === currentloc) {
        menu.classList.add("active");
    } else menu.classList.remove("active");
});

livea.forEach((livea) => {
    if (livea.href === currentloc) {
        livea.classList.add("active-j");
    } else livea.classList.remove("active-j");
});

$(".header .fa-bars").click(() => {
    $(".menues").slideToggle(500);
    // $('.menues').css('display' , 'flex');
    $(".booking").slideToggle(500);
    $(".booking").css("display", "flex");
    $(".tobbar-con").slideToggle(500);
    $(".tobbar-con").css("display", "flex");
    $(".profile-hid").slideToggle(500);
    $(".profile-hid").css("display", "flex");
});

$(window).ready(function () {
    $(".load-con").fadeOut(500);
});

$('.jo').click(() => {
    $('.hide').slideToggle();
});

$('.jo2').click(() => {
    $('.hide2').slideToggle();
});
