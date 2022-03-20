<?php
  include("config.php");
  $query="
    insert into marca(nome,sedeLegale,nomeAD) values
       ('Samsung','Brescia','pinco pallo'),
  	   ('Apple','Milano','Marco Rossi'),
  	   ('Hp','Venezia','Luca Bianchi'),
  	   ('Huawei','Mantova','Gianni Verdi'),
  	   ('Asus','Cremona','Anna Azzurri');
  ";
  mysqli_query($conn,$query)or die ("Errore negli inserimenti".mysqli_error());

  $query2="
    insert into prodotto(descrizione,quantita,IDMarca) values
       ('Samsung galaxy A5',5,1),
       ('Iphone X',4,2),
       ('HP A15674',8,3),
       ('Huawei P10',3,4),
       ('ASUS A465',7,5);
  ";
  mysqli_query($conn,$query2)or die ("Errore negli inserimenti".mysqli_error());
?>