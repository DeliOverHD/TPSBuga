<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>FORMULARIO PARA LA ENTRADA</h2>
        <TABLE BORDER=3>
        <form action="procesarFormulario.php" method="post">
        <tr><th COLSPAN=2>
        <label for="inputNombre">Nombre : </label>
        <input required type="text" id="inputNombre" name="inputNombre" placeholder="Ingrese su nombre aquí, por favor">
        <br/>    
        <input type="radio" name="sexo" id="hombre" value="Hombre">
        <label for="hombre">Hombre : </label>
        <br/>
        <input type="radio" name="sexo" id="mujer" value="Mujer">
        <label for="mujer">Mujer: </label>
        <br/>
        <label for="inputEdad">Edad : </label>
        <input required type="number" id="inputEdad" name="inputEdad">
        <br/>
        Ingresa tus comentarios si tienes alguna duda:
        <br/>
        <textarea name="comentarios" rows="2" cols="30">...Tus comentarios aquí...</textarea>
        <tr><td><button type="submit">Registrar</button> <input type="reset">
        </TABLE>    
        </form>
        
        
       
    </body>
</html>
