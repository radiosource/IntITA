<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
<title> </title>
<link type="text/css" rel="stylesheet" href="aboutusstyles.css" />
</head>
<body>
<div class="mainAbout">
    <div class="header">
<?php

    $headerText = 'Про нас';
    $subheaderText = 'дещо, що Вам потрібно знати про наші курси';
    $subLineImage='line1.png';
    $linkName="подробніше »";

    
    $objAbout1=new AboutUS('line2.png','image1.png','Про що мрієш ти?','Спробуємо вгадати: власна квартира чи навіть будинок? Гарний автомобіль?
                        Закордонні подорожі, можливо, до екзотичних країн?','https://www.google.com.ua/');
    $objAbout2=new AboutUs ('line2.png','image2.png','Що очікується від тебе','Програмування – Програмування – це не так складно, як ти можеш уявляти. 
                        Безумовно, щоб стати хорошим програмістом, потрібен час та зусилля.','https://www.google.com.ua/');
    $objAbout3=new AboutUs('line2.png','image3.png','Три кити Академії  Програмування ІНТІТА','Самостійний графік навчання. 
                        Лише 100% необхідні знання. Засвоєння 100% знаннь!','https://www.google.com.ua/');
    $massAbout=array($objAbout1,$objAbout2,$objAbout3);
     
    
        echo $headerText;
?>  
        <p>
 <?php
        echo $subheaderText;
?>  </div>
    <div class="line1">
    <img src="<?php echo $subLineImage;?>">
    </div> 

<?php 
    foreach ($massAbout as $val)
    {
?>      
        <div class="block"><ul><li>
            <div class="line2">
                <img src="<?php echo $val->line2Image;?>">
            </div>   
            <div class="icon">
                <img src="<?php echo $val->iconImage;?>">
            </div>
            <div class="title">
    <?php       echo $val->titleText; ?>
             
            <p>
    <?php       echo $val->textAbout; ?> 
            </div><a href="<?php echo $val->linkAdress ?>">
            <?php echo $linkName; ?>
            </a>
            </li></ul> </div> 
        
<?php
        
    }
?>
        
        </div>  
</div>
</body>
</html>
