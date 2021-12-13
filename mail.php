<?php
/*
(isset($_post)) && !empty['speudo']) && !empty ($_post['objet'])
!empty($_post['message'])))
{

extract($_post);
$destinataire = ''
$expediteur = $pseudo_exp.'<'.email_exp.'>;
$mail=mail($destinataire,$ogjet,$message,$expediteur': mail test:')
if ($mail)echo 'email envoye avec succes !!';else echo 'echec evoi' 
}

*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="mail.css"/>
  <title>Document</title>
</head>
<body>
  <section>
    <div class="mail">
     <form action="">
          
          <div class="form-group">
            <label for="$speudo">fisrt name</label>
             <input type="text" id="speudo" name="speudo">     
          </div>
             

          <div class="form-group">
            <label for="mail">mail expediteur</label>
            <input type="mail" id="mail" name="mail">
          </div>

          <div class="form-group">
            <label for="objet">ogjet</label>
            <input type="objet" id="objet" name="email">
          </div>

          <div class="form-group">
            <label for="message">message</label>
            <textarea name="message" id="message" cols="30" rows="10">
            PANMO Yongui <br>
            Devellopement web et Mobile<br>
            Nee le 26 mars 2001 <br>

            </textarea>
          </div>

          <button type ="submit">submit</button>
      </form>
    </div>
  </section>
</body>
</html>
