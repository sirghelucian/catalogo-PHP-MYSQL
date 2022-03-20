<?php
  include("config.php");
  
  $query="select * from marca;";
  $righe1=mysqli_query($conn,$query)or die ("Errore negli inserimenti".mysqli_error());
  echo"<table border='1'><tr><td>ID Marca</td><td>Nome</td><td>Sede legale</td><td>Nome AD</td></tr>";
  while($riga1=mysqli_fetch_array($righe1,MYSQLI_ASSOC)){
    
    echo"<tr>
          <td>$riga1[IdMarca]</td>
          <td>$riga1[nome]</td>
          <td>$riga1[sedeLegale]</td>
          <td>$riga1[nomeAD]</td>
         </tr>";
  }
  echo"</table>";

  $query2="select IdProdotto,descrizione,quantita,nome from prodotto p join marca m on m.IdMarca=p.IDMArca;";
  $righe2=mysqli_query($conn,$query2)or die ("Errore negli inserimenti".mysqli_error());
  echo"<table border='1'><tr><td>ID Prodotto</td><td>Descrizione</td><td>Quantita</td><td>Nome Marca</td></tr>";
  while($riga2=mysqli_fetch_array($righe2,MYSQLI_ASSOC)){
    
    echo"<tr>
          <td>$riga2[IdProdotto]</td>
          <td>$riga2[descrizione]</td>
          <td>$riga2[quantita]</td>
          <td>$riga2[nome]</td>
         </tr>";
  }
  echo"</table>";


?>