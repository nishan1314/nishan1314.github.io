const topnav = document.querySelector('.top-nav')
const navlinks = document.querySelectorAll('.nav-link')
const subnav = document.querySelector('.sub-nav')
const navbarsearch = document.querySelector('.navbar-search')


window.addEventListener('scroll', () =>{
    let x = window.scrollY;
    let y = window.scrollY;
  
    
    if (x > 35){

        topnav.classList.add('top-nav-scroll')
        for (let i=0; i<navlinks.length; i++){
            navlinks[i].classList.add('nav-link-scroll')
        }
        navbarsearch.classList.remove('navbar-search') 
        if( y > 200){
            subnav.classList.add('sub-nav-scroll')
            subnav.classList.remove('sub-nav')
        }
        else{
            subnav.classList.remove('sub-nav-scroll')
            subnav.classList.add('sub-nav')
        }   
    }

   
    
    else{
        for (let i=0; i<navlinks.length; i++){
            navlinks[i].classList.remove('nav-link-scroll')
        }
        topnav.classList.remove('top-nav-scroll')
        navbarsearch.classList.add('navbar-search')
        subnav.classList.remove('sub-nav-scroll')
        subnav.classList.add('sub-nav')
    }
})


function opneSideNav(){
    document.getElementById("mySidenav").style.width = "250px";
}
function opneSideNavv(){
    document.getElementById("mySidenavv").style.width = "250px";
}

function closeSideNav(){
    document.getElementById("mySidenav").style.width = "0px";
}
function closeSideNavv(){
    document.getElementById("mySidenavv").style.width = "0px";
}