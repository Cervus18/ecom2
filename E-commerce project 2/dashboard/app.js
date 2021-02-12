const buttons=document.querySelectorAll('.toggle');

buttons.forEach(button=>{
   button.addEventListener('click',()=>{
    const details=button.parentElement.parentElement.nextElementSibling ;
    details.classList.toggle('active');
    button.classList.toggle('active');

    if(button.classList.contains('active')){
        button.innerHTML='Hide'
    }else{
        button.innerHTML='More'
    }
   })
})

