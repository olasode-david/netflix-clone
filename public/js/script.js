window.addEventListener('scroll', () => {
    if (window.scrollY > 100) {
        document.getElementById('navs').style.backgroundColor = "#111";
    } else {
        document.getElementById('navs').style.backgroundColor = "";
    }
}); //this operate the nav bar scroll color