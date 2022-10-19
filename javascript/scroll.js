// const scrollNav = document.querySelector(".navigation");
// const navMenu = document.querySelector(".nav-item");
const hiddenlink = document.getElementById("hiddenlink");
const jumpButton = document.querySelector("#jump");



window.addEventListener('scroll', () => {
    if(scrollY>100){
        // scrollNav.classList.add('bg');
        // navMenu.classList.add('bg');
        hiddenlink.style.display = 'block';
        jumpButton.style.display = 'block';
    }else {
        // scrollNav.classList.remove('bg');
        // navMenu.classList.remove('bg');
        hiddenlink.style.display = 'none';
        jumpButton.style.display = 'none';
    }        
})

jumpButton.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
})


