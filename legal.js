let content = document.querySelector('.content');

let span = document.getElementById('span');

let span_2 = document.getElementById('span_2');

let span_3 = document.getElementById('span_3');

document.querySelector('.header').addEventListener('click', ()=>{
    if(content.style.maxHeight){
        content.style.maxHeight = null;
        span.style.transform = 'rotate(0)';
    }else{
        span_2.style.transform = 'rotate(0)';
        span_3.style.transform = 'rotate(0)';
        span.style.transform = 'rotate(90deg)';
        content.style.maxHeight = content.scrollHeight + 'px';
        content_3.style.maxHeight = null;
        content_2.style.maxHeight = null;
    }
})
;

let content_2 = document.querySelector('.content_2')
;
document.querySelector('.header_2').addEventListener('click', ()=>{
    if(content_2.style.maxHeight){
        span_2.style.transform = 'rotate(0)';
        content_2.style.maxHeight = null;
    }else{
        span.style.transform = 'rotate(0)';
        span_3.style.transform = 'rotate(0)';
        span_2.style.transform = 'rotate(90deg)';
        content_2.style.maxHeight = content.scrollHeight + 'px';
        content.style.maxHeight = null;
        content_3.style.maxHeight = null;
    }
});

let content_3 = document.querySelector('.content_3');

document.querySelector('.header_3').addEventListener('click', ()=>{
    if(content_3.style.maxHeight){
        span_3.style.transform = 'rotate(0)';
        content_3.style.maxHeight = null   ;                 
    }else{
        span_2.style.transform = 'rotate(0)';
        span.style.transform = 'rotate(0)';
        span_3.style.transform = 'rotate(90deg)';
        content_3.style.maxHeight = content.scrollHeight + 'px';
        content.style.maxHeight = null;
        content_2.style.maxHeight = null;
    }
});