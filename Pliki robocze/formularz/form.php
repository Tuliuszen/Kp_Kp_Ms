<?php 
  //połączenie z bazą danych
$con=mysqli_connect("localhost","root","","kpkpms") or die(mysqli_error());
  //czy przycisk jest kliknięty
if((isset($_POST['submit'])))
{
  //pobieranie i zapisywanie danych z formularza do zmiennych
$Name = $con->real_escape_string($_POST['imie']);
$Email = $con->real_escape_string($_POST['email']);
$comments = $con->real_escape_string($_POST['wiad']);
  //wrzucanie wartosci do bazy danych
$sql="INSERT INTO kpkpms_contact_details (name, email_to, message) VALUES ('".$Name."','".$Email."', '".$comments."')";
  //koncowy komunikat
if(!$result = $con->query($sql)){
die('Wystąpił błąd [' . $conn->error . ']');
}
else
   echo "Dziękujamy za wiadomość!";
}
?>