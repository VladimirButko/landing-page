let preloderEl = document.querySelector('.preloader');
let headerEl = document.querySelector('header');
let iseeEls = document.querySelectorAll('.isee');
let arrowEl = document.querySelector('.scroll');
let containerHeaderEl = document.querySelector('.content-box');


document.body.onload = function(){
    setTimeout(()=> {
        if( !preloderEl.classList.contains('stop') ){
            preloderEl.classList.add('stop');
        }
        checkShow()
    },1000);
    function checkShow(){
        let animateShowEls = document.querySelectorAll('.animate-show');
        if( preloderEl.classList.contains('stop') ){
            animateShowEls.forEach((el)=>{
                let coord = el.getBoundingClientRect();
                if( coord.top <= window.innerHeight && coord.top > 0){
                    el.classList.add('show');
                }
            });
        }

    }
    window.addEventListener('scroll', ()=> {
        checkShow();

        let halfwindow = window.innerHeight / 2;
        let coord = iseeEls[0].getBoundingClientRect();
    
        iseeEls.forEach((item)=>{
    
            let coord = item.getBoundingClientRect();
            if( coord.top < halfwindow){
                headerEl.querySelectorAll('.active').forEach((activeLink)=>{
                    activeLink.classList.remove('active');
                });
                headerEl.querySelector( `[href='#${item.id}']`).classList.add('active');
            }
        });

        let coordarrow = arrowEl.getBoundingClientRect();
        let containerHeaderElCorord = containerHeaderEl.getBoundingClientRect();
        // console.log(coordarrow);
        if( containerHeaderElCorord.top > 0 ){
            arrowEl.style.display = 'none';
       }
       if( containerHeaderElCorord.top < 0 ){
           arrowEl.style.display = 'flex';
       }
    });
}


document.querySelector('.service-order').addEventListener('submit', function(e){
    e.preventDefault();

    let name = this.name.value;
    let email = this.email.value;
    let comment =this.comment.value;
    let action = this.action;

    let data = {
        name: name,
        email: email,
        comment: comment,
    }
    // console.log(JSON.stringify( data ));

    let xhr = new XMLHttpRequest();
    xhr.open( this.method, this.action);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send(`data=${JSON.stringify(data)}`);

    this.querySelector('.price-btn').disabled = true;

    xhr.addEventListener('load', ()=>{
        let response = JSON.parse(xhr.responseText);

        if( response.result === 'success'){
            document.querySelector('.price-form-content-message').style.display = 'flex';
            document.querySelector('.price-form-content-message').innerHTML = xhr.responseText = "Спасибо за ваш заказ! Менеджер свяжется с вами в течении 24 часов.";
        }else{
            if( response.result === 'fail' ){
                document.querySelector('.price-form-content-message').style.display= 'flex';
                document.querySelector('.price-form-content-message').innerHTML = xhr.responseText = "Что-то пошло не так!"
            }
        }
    });
});

document.querySelector('.order').addEventListener('submit', function(e){
    e.preventDefault();
    let name = this.name.value;
    let phone = this.phone.value;
    let email = this.email.value;
    let comment =this.comment.value;
    let action = this.action;

    let data = {
        name: name,
        phone: phone,
        email: email,
        comment: comment,
    }
    console.log(JSON.stringify( data ));

    let xhr = new XMLHttpRequest();
    xhr.open(this.method, this.action);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send(`data=${JSON.stringify(data)}`);

    this.querySelector('.order-btn').disabled = true;

    xhr.addEventListener('load', ()=>{
        let response = JSON.parse(xhr.responseText);

        if( response.result === 'success' ){
            document.querySelector('.popup-box-message').style.display= 'flex';
            document.querySelector('.popup-box-message').innerHTML = xhr.responseText = "Спасибо за ваш заказ скоро с Вами свяжется наш менеджер!"
        }else{
            if( response.result === 'fail' ){
                document.querySelector('.popup-box-message').style.display = 'flex';
                document.querySelector('.popup-box-message').innerHTML = xhr.responseText = "Что-то пошло не так";
            }
        }
    });
});
