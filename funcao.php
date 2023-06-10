<?

function pedroupa ($pijamap,$pijamam,$pijamag,$pijamagg,$pijamaxgg){
  include "conexao_ljroupa.php";
  $sqli="INSERT INTO `rouparia`(`camisa`, `moleton`, `calca`, `calcao`,)
   VALUES ($pijamap,$pijamam,$pijamag,$pijamagg,$pijamaxgg)";
  $resultado=$conn-> query($sqli);
  if ($resultado>0){
    echo "Pedido Recebido,faremos a preparação dos itens para enviar
     o mais rapido possivel!";
   }
  $conn-> close();
}