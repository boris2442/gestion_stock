const select=document.querySelector("select[name='produit']");
const quantite=document.getElementById('quantite');
let prix;
select.addEventListener("change", ()=>{
    const selectOption=select.selectedOptions[0];
    prix=selectOption.document.getAttribute("prix");
console.log(prix);
})

quantite.addEventListener('input', (e)=>{
    const currentValue=e.target.value;
    let totalPrice=prix*currentValue;
    document.querySelector("#price").value=totalPrice;
})