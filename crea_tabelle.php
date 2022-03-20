<?php
  include("config.php");
  $query="
    create table if not exists marca(
      IdMarca int(10) primary key auto_increment,
      nome varchar(20),
      sedeLegale varchar(30),
      nomeAD varchar(20)
    );
  ";
  mysqli_query($conn,$query) or die("Errore creazione tabella".mysqli_error());  
  echo"tabella marca creata correttamente!!";

  $query2="
    create table if not exists prodotto(
      IdProdotto int(10) primary key auto_increment,
      descrizione varchar(40),
      quantita int(10),
      IDMarca int(10),
      foreign key (IDMarca) references marca(IdMarca) on delete cascade on update cascade
    );
  ";
  
  mysqli_query($conn,$query2) or die("Errore creazione tabella".mysqli_error());  
  echo"tabella prodotto creata correttamente!!";
  mysqli_close($conn);
?>