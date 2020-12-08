var formulario_registro = document.getElementById('form-r').style;
var formulario_ingreso = document.getElementById('form-ing').style.displa;

function Registro(){

if(formulario_ingreso.display === "block")
{
    formulario_registro.display = 'none';
}
else
{
    formulario_registro.display = 'block';
}


}