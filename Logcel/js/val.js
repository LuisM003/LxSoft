function validacion() {


    var nam = document.getElementById("name").value;
    var ncont = document.getElementById("nucont").value;
    var ncont2 = document.getElementById("nucont2").value;
    var marc = document.getElementById("marc").value;
  

    if (!nam || !ncont || !ncont2 || !marc) 
    {
        alert("Faltan datos por llenar");
        return false;
    }

    if (!/^[A-Z\s ]+$/i.test(nam) )
    {
        alert("Datos no validos en campo dueño");
        return false;
    }

    if(isNaN(ncont) || isNaN(ncont2))
    {
        alert("Solo se aceptan números en los campos Nº de contacto");
        return false;
    } 

    if(ncont.length > 10 || ncont.length > 10 ){
        alert("Solo se aceptan  10 números en los campos Nº de contacto");
        return false;
    }



}