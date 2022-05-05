
let setProducto = document.getElementById("producto");
let idProducto=document.getElementById("descripcion");
if(idProducto!=null){
    idProducto.addEventListener("click",()=>{
        console.log('object + '+idProducto.value);
        setProducto.innerText = idProducto.value;
    });
}

Livewire.on('producto-cambiado', () => {
    alert('f');
});