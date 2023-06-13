let loadMoreBtn = document.querySelector('#load-more');
let currentItem = 9;

loadMoreBtn.onclick = () =>{
   let boxes = [...document.querySelectorAll('.container .box-container .box')];
   console.log(boxes)
   for (let i = currentItem; i < currentItem + 12; i++){
      boxes[i].style.display = 'inline-block';
   }
   currentItem += 12;

   if(currentItem >= boxes.length){
      loadMoreBtn.style.display = 'none'
   }
}

const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
})

document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}))