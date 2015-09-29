<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8" />
         <title>Hola Ñandú</title>
         
         <link type="text/css" rel="stylesheet" href="css/prism.css" />
        <link type="text/css" rel="stylesheet" href="css/chosen.css" />
    </head>
    <body>
        <h1>Ingrese sus datos</h1>
        <form method="post" action="respuesta.php" name="form">
            
            <p>
                Nombre : <input type="text" name="nom"  placeholder="Nombre" />
            </p>
            <p>
                E-Mail : <input type="text" name="correo" />
            </p>
             <p>
                Edad : <input type="text" name="edad" />
            </p>
            <p>
        País :
        <select name="pais" class="chosen-select">
        <option value="0">Seleccione.....</option>
        <?php
        $paises= array("Chile","Venezuela","Colombia","Perú","Bolivia","Argentina","Brasil","Costa Rica","México");
        ?>
            <?php
        
            for($i=0;$i< sizeof($paises);$i++)
            {
                ?>
                <option value="<?php echo $i+1?>"><?php echo $paises[$i]?></option>
                <?php
            }
            ?>
        </select>
        </p>
            <hr />
            <p>
                <input type="submit" value="Enviar" title="Enviar" />
            </p>
            
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script type="text/javascript" src="js/chosen.jquery.js"></script>
<script type="text/javascript" src="js/prism.js"></script>
<script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>
    </body>
</html>
