<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Document</title>
</head>
<body>
     <main>
       
        <div class= "gauche">
               <div class="profil">
                   <div class="profil1">
        
                       
                    <?php  
                    include 'contenaire/Profil.php';
                    
               ?> 
                    </div>
               </div>


               <?php  
           
            include 'contenaire/Competence.php';
       ?> 
        </div>


        <div class="droite"> 
          <div class="droite1">
        <?php  
              include 'contenaire/expro.php';
           ?>  



           <div class="divers">
           <?php  
              include 'contenaire/divers.php';
           ?>  
           </div>
           <?php  
            include 'contenaire/cursac.php';
        ?>
    
    
           </div>
    
    </div>
     
    </main>
</body>
</html>