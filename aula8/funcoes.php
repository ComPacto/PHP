<<?php
$n=10;

echo !is_numeric($n) ?"E numero ": "Nao e";//if ternario
echo "<br>";

if(is_numeric($n)){
  echo "E numero: ";
}else{
  echo "Nao e: ";
}
echo "<br>";

$n = null;

if(is_null($n)){
  echo "é nula";
}else{
  echo "nao é";
}

echo "<br>";

echo is_null($n) ?"e": "Nao";

echo "<br>";

$n="Thiago";

echo$n;
echo"<br>";

unset($n);//Desaloca  da mémoria a variável.

//null Coalesce Opearator.
echo $n ?? "n exite";
echo "<br>";

if(isset($n)){
  echo $n;
}else{
  echo "n existe";
  "<br>";
}

//spaceship - php7
echo 2<=>3; // retorna -1
echo "<br>";
echo 3<=>3; // retorna 0
echo "<br>";
echo 4<=>3; // retorna 1
echo "<br>";

//testa pradonisação de email
$n = "xxx@gmail.com";

echo filter_var($n,FILTER_VALIDATE_EMAIL) ? "ok" : "n ok";
echo "<br>";
if(filter_var($n,FILTER_VALIDATE_EMAIL)){
  echo "email valido";
}else{
  echo "email invalido";
}

//para colcar data é hora no front.
echo "<br>";
echo "<br>".date('Y-m-d');
echo "<br>".date('y-m-d');
echo "<br>".date('Y-m-D');
echo "<br>".date('Y-m-j');


echo "<br>".date('d/m/Y');
//Para buscar a hora local
Date_default_timezone_set('America/Sao_paulo');
echo "<br>".date('G:i:s');

echo "<br>".date('d');

//Para chamar o dia da semana na forma brasileira.
echo "<br>";
$dia = date('l');
switch ($dia) {
  case 'Wednesday': echo"Quarta-feira";
  break;
  case 'Monday': echo"Quarta-feira";
  break;
}
echo "<br>";

//Para verificar se a data é valida ou invalida.
$d=29;
$m=02;
$a=2017;
if(checkdate($m,$d,$a)) {
  echo "data valida";
}else{
  echo " data invalida";
}
echo "<br>";
//com if ternario.
echo checkdate($m,$d,$a)? "dt valida": "dt invalida";

echo "<br>";

$n = "thiago ESPInDoLA cUrY";
echo "<br>original: ".$n;
echo "<br>".strtolower($n);
echo "<br>".strtoupper($n);
echo "<br>".ucwords($n);
echo "<br>".ucwords(strtolower($n));
echo "<br>".str_word_count($n);
echo "<br>".strlen($n);


$n= " thiago espindola cury 'OR' 1'=1' ";
echo "<br>original: ".$n;

echo"<br>".trim($n);
echo"<br>".addslashes($n);

//fomra de colocar segurança na senha de usuarrio
$senha ="melancia";
echo"<br>";
echo md5("aula".$senha."php");


// para criar $array.

$b[] = "joao";
$b[] = 20;
$b[] = 80.546;
echo $b[2];

echo "<br>";
var_dump($b);//mostra todo o Array.
echo "<br>";
print_r($b);

$a = array("a","b");
echo "<br>".$a[0];

echo "<br>";

// para criar senhas aleatorias

$s= range(1,60);
shuffle($s);
echo$s[0];

$let = range("a","z");
shuffle($let);

$car= array('@','$','#','&');
shuffle($car);

echo "<br>".$let[0].$s[0].$car[0];

$final = array($let[0],$s[0],$car[0] );
shuffle($final);
echo "<br>final: ".$final[0].$final[1].$final[2];

echo "<br>";

//implode
$n ="ze";
$s = "silva";
echo "<br>";
$array = array($n,$s);
$nome = implode(" ",$array);
echo $nome;

//explode
$arrayNome = explode(" ",$nome);
var_dump($arrayNome);

echo "<br>";

$n[] = "ze";
$n[] = "joao";
$n[] = "pedro";

$cont=0;
while($cont<count($n)){
  echo "<br>".$n[$cont];
  $cont++;
}

for($i=0 ; $i<sizeof($n) ; $i++){
  echo "<br>".$n[$i];
}

foreach($n as $x){
  echo "<br>".$x;
}
