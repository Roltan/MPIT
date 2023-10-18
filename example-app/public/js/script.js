    document.getElementById('burger').addEventListener('click', function(){
        document.getElementById('header').classList.toggle("open")
    })

function scrollTo(element){
    window.scroll({
        left:0,
        top: element.offsetTop,
        behavior: 'smooth'
    })
}
var button2 = document.getElementById('btn-scroll2')
var button = document.getElementById('btn-scroll')
var footer = document.querySelector('#footer')
var main = document.getElementById('main-form')
button.addEventListener('click', ()=>{
    scrollTo(footer)
})
button2.addEventListener('click', () =>{
    scrollTo(main)
})

const go = document.getElementById('go')
window.addEventListener('scroll', ()=>{
    const offset = window.pageYOffset;
    const coords = document.documentElement.clientHeight;
    if(offset > coords){
        go.classList.add('go-show')
    }else{
        go.classList.remove('go-show')
    }
})
go.addEventListener('click', ()=>{
    if(window.pageYOffset > 0){
        window.scrollBy(0, -20000);
        setTimeout(go, 0)
    }
})