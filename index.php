<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>desarrollo ejercicio cuatro</title>


</head>
<body>
      <p>el ejercicio cuatro se trata de:  Pedir un número entre 0 y 9.999 y mostrarlo con las cifras al revés.  </p>
                        
                        <h2>Desarrollo</h2>     
                        <form id="Dato" name="Dato" method="post" action="desarrollo_4.php">
         <label>Ingrese algun numero</label> 
         <input id="numero" name="numero" placeholder='Ingrese un numero' onKeypress="if (event.keyCode < 45 || event.keyCode >57) event.returnValue = false;" maxlength="10" minlength="2" required="required"/><br><br>
         <button type="submit">Enviar</button>
         <br /><br />
        
       
 
</body>
</html>
