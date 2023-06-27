const titreSpans = document.querySelectorAll('h1 span');
const medias = document.querySelectorAll('.bulle');
const l1 = document.querySelector('.l1');
const l2 = document.querySelector('.l2');

window.addEventListener('load', () => {

    const TL = gsap.timeline({paused: true});

    TL
    .staggerFrom(titreSpans, 1, {top: -50, opacity: 0, ease: "power2.out"}, 0.3)
    .from(l1, 1, {width: 0, ease: "power2.out"}, '-=2')
    .from(l2, 1, {width: 0, ease: "power2.out"}, '-=2')
    .staggerFrom(medias, 1, {right: -200, ease: "power2.out"}, 0.3, '-=1');

    
    

    TL.play();
})




/*function Products(pic,name,price){
    this.pic = pic,
    this.name = name,
    this.price = price
}
const product1 = new Products('image/im1.jpg', 'Nsk 4100', 70);
const product2 = new Products('image/im12.jpg', 'nx 310', 50);
const product3 = new Products('image/im13.jpg', 'p5', 40);
const product4 = new Products('image/im1.jpg', 'vsk 3000 elite', 88.75);

let products = [];
products.push(product1,product2,product3,product4);
function populate() {
    let listOfProducts = '';

  products.forEach(prod => 
        listOfProducts += '<tr class="text-center"><td><img src = ${prod.pic} class="img-fluid img-thumbnail w-50></td><td class=w-25 align-middle">${prod.name}</td><td class=w-25 align-middle">${prod.price}</td><td class="w-25 align-middle"><button class="btn btn-info">view</button></td>'
)
document.getElementById('productList').innerHTML = listOfProducts
}
*/

