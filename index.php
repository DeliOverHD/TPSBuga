<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body background="DP.jpg" style="color: #33ccff">

        <h2><font size=42 color="green" face="pricedown">APP DISFRUTECA</font></h2>
        <TABLE BORDER=3>
            <form action="procesarFormulario.php" method="post">
                <tr>
                    <td>
                        <label for="inputNombre">Nombre : </label>
                    </td>
                    <td>
                        <input required type="text" id="inputNombre" name="inputNombre" placeholder="Ingrese su nombre">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Sexo: </label>
                    </td>
                    <td>
                        <input type="radio" name="sexo" id="hombre" value="Hombre">
                        <label for="hombre" color="green"> Hombre</label>
                        <input type="radio" name="sexo" id="mujer" value="Mujer">
                        <label for="mujer"> Mujer</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="inputEdad">Edad : </label>
                    </td>
                    <td>
                        <input required type="number" id="inputEdad" name="inputEdad" placeholder="Ingresa tu edad">
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>
                        <label for="inputVestuario">Vestuario : </label>
                    </td>
                    <td>
                        <select name="vestuario" size="1"> 
                            <option value="r">Camisa manga larga con pantalon de tela y zapatos de material</option> 
                            <option value="g">Camiseta manga corta con pantalon de pana y zapatos deportivos</option> 
                            <option value="b"></option> 
                        </select> 
                    </td>
                </tr>
                <td>
                    Comentarios:
                </td>
                <td>
                    <textarea name="comentarios" rows="2" cols="30" placeholder="Ingresa tus comentarios aquí"></textarea>
                </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit">Registrar</button>
                    </td>
                    <td>
                        <input type="reset">
                    </td>
                </tr>
        </TABLE>    
    </form>



</body>
</html>
