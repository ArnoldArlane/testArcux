<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title>Certificado</title>
        <style type="text/css">
        #cabecera{
            background:#eee;
            padding:20px;
        }
        h2,h3{
            float:left;
        }
        #cabecera img{
            width: 140px;
            float:right;
        }
        </style>
    </head>
    <body>
        <div style="width:1020px; height:690px; padding:20px; text-align:center; border: 10px solid #787878">
            <br><br>
            <span style="font-size:60px; font-weight:bold">ARCUX</span>
            <br><br><br><br>
            <span style="font-size:50px"><i>Curso de <?php if(isset($_POST['course'])): echo $_POST['course']; endif; ?></i></span>
            <br><br><br><br><br>
            <span style="font-size:30px;"><i>CERTIFICADO OTORGADO A:</i></span>
            <br><br><br><br><br>
            <span style="font-size:50px; text-decoration: underline dotted black;"><b> <?php if(isset($_POST['student'])): echo $_POST['student']; endif; ?></b></span>
            <br/><br/><br><br><br>
            <span style="font-size:20px"><i>Ha realizado el Curso de <?php if(isset($_POST['course'])): echo $_POST['course']; endif; ?> de  <?php if(isset($_POST['hours'])): echo $_POST['hours']; endif; ?>h de duración, cumpliendo  con los requisitos académicos exigidos y superando  con éxito los test de todos los módulos.
            </i></span> <br/><br/><br/><br/>
            <span style="font-size:20px">Y para que así conste, hacemos  entrega del presente certificado </span> <br/><br/><br/><br/>
            <span style="font-size:20px"><i><?php setlocale(LC_TIME, "spanish"); echo strftime("%B del %Y"); ?></i></span><br>
        </div>
    </body>
</html>
