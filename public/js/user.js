const menuContent = document.querySelector('#menuContent');
const sidebar = document.querySelector('#sidebar');

menuContent.addEventListener('click', () => {
    if(sidebar.classList.contains('hidden')){
        sidebar.classList.remove('hidden')
        menuContent.classList.add('left-64')
    }else{
        sidebar.classList.add('hidden')
        menuContent.classList.remove('left-64')
    }
})