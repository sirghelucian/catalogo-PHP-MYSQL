<?php
  include("config.php");
  echo"<form action='$_SERVER[PHP_SELF]' method='post'>
        Scegli tra le marche disponibili: <select name='marca'>
          <option value='Samsung'>Samsung</option>
          <option value='Apple'>Apple</option>
          <option value='Huawei'>Huawei</option>
          <option value='HP'>HP</option>
          <option value='Asus'>Asus</option>
        </select><br>  
        Sede Legale: <input type='text' name='sedelegale'><br>
        Nome AD: <input type='text' name='nomead'><br>
        Quantita: <input type='number' name='quantita'><br>
        Descrizione: <input type='text' name='descrizione'><br>
        <input type='submit' name='ok' value='Invia dati'> 
      </form>
  ";
  if(isset($_POST['ok'])){
  	if($_POST['marca']=="" || $_POST['sedelegale']=="" || $_POST['nomead']=="" || $_POST['quantita']=="" || $_POST['descrizione']==""){
  		echo"Compila tutti i campi";
  	}
  	else{
       $query="insert into marca(nome,sedelegale,nomead) values
       			('".$_POST['marca']."','$_POST[sedelegale]','$_POST[nomead]');";
       mysqli_query($conn,$query)or die ("Errore negli inserimenti".mysqli_error());
       echo"Marca: $_POST[marca] situata a $_POST[sedelegale] con nome AD $_POST[nomead] aggiunto correttamente<br>";

       $query2="insert into prodotto(quantita,descrizione) values
            ('".$_POST['quantita']."','$_POST[descrizione]');";
       mysqli_query($conn,$query2)or die ("Errore negli inserimenti".mysqli_error());
       echo"Prodotto con quantita' $_POST[quantita] con seguente descrizione $_POST[descrizione] aggiunto correttamente";
       echo"<br><a href='stampa_tutto.php'>STAMPA TUTTO</a>";
  	}
  }

?>