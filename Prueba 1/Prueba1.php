<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Deportenis</title>
    <link rel="stylesheet" href="prueba_dp.css">
</head>
<bo id="body2"> 
    <center>
<img href="#" class="imgDP" src="https://cloud.manoamano.com/attachments/efe0fb6d9d5da42d815a25ae187f3e0915344c79/store/fit/1200/400/b2b7bdf3c5ee4c7ec9ed01ee6df50a989a9e588c2cecae95981a9c13e66f/cover_store.gif" title="Deportenis"  id="imgDP" width="400px" height="200px">
</center>
</body>
<div>
<a href=""></a><br>
<a href=""></a><br>

<?php include 'validar.php'; ?>

</div>
<body>
<center>
<form class="" id="btnJS" action="" method="get" >
<script type ="text/javascript" src=""></script>
   <a href="Javascript:window.open('RespuestaJS.html','','width=400px',height=600)" name = "boton1" class="btn-neon">
    <span id="span1"></span>
    <span id="span2"></span>
    <span id="span3"></span>
    <span id="span4"></span>
    PROPIEDAD JAVASCRIPT RED



</a>

<script>
    function val(){
        $.ajax({url:"validar.php", success:function(validarphp){
            $("texto").text(validarphp);}
        })
    }
</script>





<form action="validar.php" onclick="<?php DescargarJSON();?>" id="btnPHP2" type="submit" name="btnPHP2" method="post" >
   <a href="" name="btnPHP" class="btn-neon2" value="Descarga" id="btnPHP">
   <span id="span5"></span>
   <span id="span6"></span>
   <span id="span7"></span>
   <span id="span8"></span>
   PROPIEDAD PHP GREEN  

</a>


</center>
</form>
</body>
</html>

