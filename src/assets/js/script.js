

function profileMenuToggle() {
   const toggleMenu = document.querySelector('.menu');
   toggleMenu.classList.toggle('active')

}
function profileCommentToggle() {
    const toggleMenu = document.querySelector('.show_response');
    toggleMenu.classList.toggle('active')
}

function checkConnection(){
    var status = navigator.onLine;
    if(status){
        alert('connecte');
    }else{
        alert('non connecte');
    }
}

