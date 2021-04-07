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
2. Los archivos ``php_sqlsrv.dll`` y ``php_sqlsrv_80_ts.dll`` colocarlos en el directorio ``.\xampp\htdocs\admon`` (si no se tiene esa carpeta, crear una).
3. En el programa XAMPP, modulo Apache recuadro con la leyenda ``Config`` darle clic izquierdo, se abrirá un menú desplegable, darle clic a ``PHP (php.ini)``
   - Estando en el archivo ``.ini`` buscar ``;extension=shmop`` y justo debajo de eso escribir:
```
extension=php_sqlsrv.dll
extension=php_sqlsrv_80_ts.dll
```
