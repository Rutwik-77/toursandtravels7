let menu=Document.queryselector('#menu-btn');
let navbar=document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('.active')
};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('.active')
};

let loadmorebtn = document.querySelector('.packages .load-more .btn');
let currentitem = 6;

loadmorebtn.onclick =() =>{
    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
    for(var i= currentitem; i < currentitem + 3 ; i++){
        boxes[1].style.display ='inline-block';

    };
    currentitem +=3;
    if(currentitem >= boxes.length){
        loadmorebtn.style.display ='none';
    }
}