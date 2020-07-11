# TestArcux

Formulario en php para generar archivos pdf

## Instalación

Dependiendo del sistema operativo donde lo ejecuten, los pasos de instalación serán distintos, pero lo principal es que instalen la librería html2pdf,
yo cree el proyecto en windows(xampp) para lo cual necesite instalar composer para poder agregar la librería html2pdf 

Se debe instalar [Composer](https://github.com/composer/composer)

Se debe instalar la librería [html2pdf](https://github.com/spipu/html2pdf)

una vez que se esté en el directorio principal del proyecto, para mi caso en windows utilice 
```bash
composer install
```

ya que en el directorio está el archivo composer.json, se agregarán los archivos necesarios de la librería html2pdf


## Uso

Completar los datos del formulario, y darle el botón de generar PDF, el cual generará un pdf en la carpeta pdfs_folder, el nombre del archivo será el código de curso que se pide en el formulario

## License
[MIT](https://choosealicense.com/licenses/mit/)