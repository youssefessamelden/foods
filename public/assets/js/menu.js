const menu = document.querySelectorAll('.btm a');
currentloc = location.href;
menu.forEach((lin) => {
    if (lin.href === currentloc) {
        lin.classList.add('active-a')
    }
    else (
        lin.classList.remove('active-a')
    )
})
