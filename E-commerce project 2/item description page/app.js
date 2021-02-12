
const price=+document.querySelector('.price').innerHTML.replace('$','');
document.getElementById("hidden").value=price;

document.querySelector("input[type='number']").addEventListener('input',(e)=>{
   const quantity=e.target.value;
   document.querySelector('.price').innerHTML=(quantity*price).toFixed(2)+'$';
   document.getElementById("hidden").value=(quantity*price).toFixed(2);
   
  
})


