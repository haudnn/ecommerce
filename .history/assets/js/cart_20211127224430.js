
let getCart = document.querySelector('.headerr__active-list.cart');
let getShadow = document.querySelector('.cart-shadow');
let modal = document.querySelector('.modal');
let id = document.querySelectorAll('.id-hidden')
let listcart = document.querySelector('.content__cart-items')
let carttoatl = document.querySelector('.cart-total')

getCart.onclick = function (){
  getShadow.classList.toggle('open')
  modal.classList.toggle('open')
}
