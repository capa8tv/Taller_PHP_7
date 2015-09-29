<?php
if( isset($_POST["nom"]) )
{
    //esto es una función CALLBACK
    //las funciones de tipo CALLBACK deben retornar siempre un boleado
    function validaSelect($valor)
    {
        if($valor==0)
        {
            return false;
        }else
        {
            return true;
        }
    }
    //el formulario llegó correctamente con los datos vía POST
    if(filter_var( trim($_POST["nom"]) )==false)
    {
        echo "el nombre tiene error";
    }else
    {
        echo "todo bien";
    }
    echo "<hr />";
    if(filter_var($_POST["correo"],FILTER_VALIDATE_EMAIL)==false)
    //if(filter_var(trim($_POST["correo"],FILTER_VALIDATE_EMAIL))==false)
    {
        echo "error con el email";
    }else
    {
        echo "el email esta bien";
    }
     echo "<hr />";
     $opciones = array
        (
            'options' => array(
                //'default' => 3, // valor a retornar si el filtro falla
                // más opciones aquí
                'min_range' => 1,
                'max_range'=>5,
            ),
            'flags' => FILTER_FLAG_ALLOW_OCTAL,
        );
     if(filter_var( $_POST["edad"],FILTER_VALIDATE_INT,$opciones)==false)
    {
        echo "el edad no es un numero";
    }else
    {
        echo "todo bien con la edad";
    }
    echo "<hr />";
     if(filter_var($_POST["pais"],FILTER_CALLBACK,array("options"=>"validaSelect"))==false)
     {
        echo "no se ha seleccionado ningun pais";
     }else
     {
        echo "el pais esta good";
     }
     exit;
}else
{
    //esta función header no debe tener ninguna salida DOM previa
    header("Location: uno.php");
}
