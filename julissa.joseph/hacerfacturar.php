<?php

$findPatente=$_GET['Factura'];


//while(!feof($archivo)) {

  //echo fgets($archivo) . "<br>";

//}

$lineas = file("listadopatente.txt");
    
    // Podemos mostrar / trabajar con todas las líneas:
    foreach($lineas as $linea){
        
if (strstr($linea,$findPatente)){
            echo "si esta la palabra $linea";
            //echo (new \DateTime())->format('Y-m-d H:i:s');
            $lineaPatente=$linea;
            $lineaPatenSplit=explode (",", $lineaPatente);
           // print_r($lineaPatenSplit);
            $fechaSinSplit=$lineaPatenSplit[1];
            $fechaSplit=explode(":",$fechaSinSplit);
            $fecha=($fechaSplit[1].$fechaSplit[2]); //aca concateno los 2 ultimos indices
            //$stdate=str
            echo "La fecha es ".$fecha;
            $dt = (new \DateTime())->format('Y-m-d H:i:s');
           echo "startd $fecha";
		    //$dteStart = new DateTime($fecha);
			$dteEnd   = new DateTime($dt);
			

           
           //$date1 = date_format($dt,"Y/m/d H:i:s"); 
		   //$date2 = date_format($dt,"Y/m/d H:i:s");
            $diff=$dteEnd->diff($dteStart);
            $secs = ((($diff->format("%a") * 24) + $diff->format("%H")) * 60 + 
  				 $diff->format("%i")) * 60 + $diff->format("%s");
             /*$diff_sec = $diff->format('%r').( // prepend the sign - if negative, change it to R if you want the +, too
                ($diff->s)+ // seconds (no errors)
                (60*($diff->i))+ // minutes (no errors)
                (60*60*($diff->h))+ // hours (no errors)
                (24*60*60*($diff->d))+ // days (no errors)
                (30*24*60*60*($diff->m))+ // months (???)
                (365*24*60*60*($diff->y)) // years (???)
                );*/
             print_r($secs);
           

		   //$diff = abs($dt - $dt);
		   /*$years = floor($diff / (365*60*60*24));
		   $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
		   $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
		   $hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60)); 
		   $minutes = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60);*/

            //echo "la fecha de hoy es :$dt " ;
            


        }
        else{
            echo "no esta la patente en nuestro sistema";
    
}
}

//$archivo = file_get_contents("listadopatente.txt");

//$pos = strpos($archivo, $findPatente);

// Nótese el uso de ===. Puesto que == simple no funcionará como se espera
//if ($pos === false) {
//    echo "La cadena '$findPatente' no fue encontrada en la cadena dada";
//} else {
 //   echo "La cadena '$findPatente' fue encontrada en la cadena dada";
  //  echo " y existe en la posición $pos";
//}

//fclose($archivo);




?>