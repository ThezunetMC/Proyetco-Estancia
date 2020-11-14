<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-6">

    <title>Delete Hits</title>

    <link rel="stylesheet" href="css/estilosphp.css">

</head>

<script type="text/javascript">

  function confirmar(){
    var respuesta = confirm("Are you sure you want to delete the information?");

    if(respuesta == true){
      return true;
    }else{
      return false;
    }
  }

</script>

<body>
    <?php
        require 'funcionesBD.php';
        $consId=consultarId($_REQUEST['id']);
        $arrAct=mysqli_fetch_array($consId);

    ?>
   <form method="post" action="controlador.php" class="campoDatos">

     <p> 
         <h1> Delete Hits</h1>

    <input type="hidden" name="txtId" value = "<?php echo $arrAct['Id'];?>"></p>


      <p >Ubication:</p>
      <input class="campoDatos" type="text" name="txtubi" id="txtubi" value = "<?php echo $arrAct['Ubicacion'];?>" disabled="disabled">

      <p>Date:</p>
       <input type="text" name="txtfecha" id="txtfecha" value = "<?php echo $arrAct['Fecha'];?>" disabled="disabled">

       <p>Time:</p>
       <input type="text" name="txthora" id="txthora" value = "<?php echo $arrAct['Hora'];?>" disabled="disabled">

       <p>Hit Intensity:</p>
       <input type="text" name="txtint" id="txtint"  value = "<?php echo $arrAct['Intensidad_Impacto'];?>" disabled="disabled">

       <p >
         <input type="submit" name="btnEliminar" value="Delete" onclick="return confirmar()">
       </p>


   </form>


</body>
</html>