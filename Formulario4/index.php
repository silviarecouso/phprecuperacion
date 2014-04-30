<html>
    <body>
        <form action="recoge.php"> 
            <p>Nombre:<input type="text" name="nombre" /></p>
            <p>Fecha Nacimiento:<input type="date" name="FechaNacimiento" /></p>
            <p>Email<input type="text" name="email" /></p>
            <p>Sexo:<select name="sexo">
                    <option selected="selected" value="Selecciona">Selecciona...</option>
                    <option  value="Mujer">Mujer</option>
                    <option value="Hombre">Hombre</option>
                </select></p>
                <p>Familia Numerosa: 
                    <input type="checkbox" name="familianumerosa" value="Si"/>
                </p>
            <p><input type="submit" value="Enviar" /></p>
        </form>
    </body>
</html>