<h1>Lista de Estudiantes</h1>

<table border=2>
    <tr>
        <td>Nombre</td>
        <td>Codigo</td>
        <td>Carrera</td>
        <td>Telefono</td>
        <td>Editar</td>
        <td>Eliminar</td>
    </tr>
    <tr>
        <td>Daniel</td>
        <td>123456789</td>
        <td>Ing Sistemas</td>
        <td>57 1 1234567</td>
        <td><input type="button" value="Editar" onclick="window.location.href='/editarEstudiante'"></td>
        <td><input type="button" value="Eliminar" onclick="window.location.href='/eliminarEstudiante'"></td>
    </tr>
</table>
<p><input type="button" value="Crear nuevo estudiante" onclick="window.location.href='/crearEstudiante'"></p>
<p><input type="button" value="Ir a Inicio" onclick="window.location.href='/home'"></p>

