# ¿Cómo correrlo en tu computadora?

**Requisitos:**
- Microsoft SQL Server (localhost).
- Microsoft SQL Server Management Studio 18.
- Microsoft Visual Studio.
- XAMPP
- Librerias de Python (PyPDF2 y reportlab). En un CMD prompt ingresando el texto siguiente en cualquier ubicación se pueden instalar las librerias:
```
pip install PyPDF2
pip install reportlab
```


**Pasos para correrlo:**
1. Descargar todos los archivos en algun lugar de tu computadora.
2. Los archivos ``php_sqlsrv.dll`` y ``php_sqlsrv_80_ts.dll`` colocarlos en el directorio ``.\xampp\php\ext``.
3. En el programa XAMPP, modulo Apache recuadro con la leyenda ``Config`` darle clic izquierdo, se abrirá un menú desplegable, darle clic a ``PHP (php.ini)``
   - Estando en el archivo ``.ini`` buscar ``;extension=shmop`` y justo debajo de eso escribir:
```
extension=php_sqlsrv.dll
extension=php_sqlsrv_80_ts.dll
```
4. En Microsoft SQL Server estando conectado a una maquina de bases de datos:
   - Abrir el archivo ``snippet_ADMON_MC`` y **ejecutar** todo el snippet.
   - Se necesita saber el **nombre de servidor**, para ello damos clic derecho al nombre de la maquina de bases de datos > Propiedades > Ver propiedades de conexion > Producto > Nombre de servidor, copiamos el nombre que se muestra a la derecha de ese apartado.
5. En Visual Studio / VS Code:
   - En el archivo ``conn.php`` línea 2, donde dice ``$serverName = "..."`` cambiar el string por el nombre de servidor que habiamos copiado anteriormente.

Hasta este punto ya debe ser posible usar el proyecto.
