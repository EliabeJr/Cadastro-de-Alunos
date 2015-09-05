function addCampos(){  
    var add = document.getElementById('linha').cloneNode(true);  
    var setCampo = document.getElementById('received');  
    setCampo.appendChild(add);  
      
    var camposClonados = add.getElementsByTagValue('+');
      
}  
  
function removerCampos(){  
    var remove = document.getElementById('received');  
    remove.removeChild(remove.childNodes[0]);  
}

function valida() {
    if (formulario.nome.value == "") {
        alert("Preencha os campos anteriores para adicionar novos");
        formulario.nome.focus();
        return false;
    } else {
        addCampos();
    }
}
