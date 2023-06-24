let scroll_pos = 0;
let sidebar_condition = 0;
const icon = document.getElementsByClassName('navbar-link')
const main = document.getElementById('main')
const logo_icon = document.querySelector('.logo-icon')
const logo_text = document.querySelector('.logo-text')
const sidebar = document.getElementById('sidebar')
const link_text = document.getElementsByClassName('link-text')

console.log(link_text)
main.addEventListener('scroll', function(){
  if(main.scrollTop > scroll_pos && window.innerWidth <= 1000){
    sidebar.style.transform = 'translateY(110%)';
    scroll_pos = main.scrollTop
  }else if(main.scrollTop < scroll_pos && window.innerWidth <= 1000){
    sidebar.style.transform = 'translateY(0%)';
    scroll_pos = main.scrollTop
  }
})

console.log(logo_icon)

logo_icon.addEventListener('click', () => {
    if(sidebar_condition == 0){
        sidebar.style.width = '18rem'
        logo_icon.style.transform = 'rotate(-180deg)'
        setTimeout(() => {
            logo_text.style.display = 'flex'
        }, 100);
        for (let i = 0; i < link_text.length; i++){
            link_text[i].style.display = 'flex'
        }
        sidebar_condition = 1;
    }else if(sidebar_condition == 1){
        logo_icon.style.transform = 'rotate(0deg)'
        logo_text.style.display = 'none'
        sidebar.style.width = '5rem'
        for (let i = 0; i < link_text.length; i++){
            link_text[i].style.display = 'none'
        }
        sidebar_condition = 0;
    }
})

sidebar.addEventListener('mouseleave', () => {
    setTimeout(() => {
    logo_icon.style.transform = 'rotate(0deg)'
    logo_text.style.display = 'none'
    sidebar.style.width = '5rem'
    for (let i = 0; i < link_text.length; i++){
        link_text[i].style.display = 'none'
    }
    sidebar_condition = 0;
    }, 50);
})






