<?php
require('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TropicLand</title>
    <meta name="description" content="TropicLand je nový server zaměřený na ekonomické a rpg servery. Najdeš u nás různé typy survivalu, oneblock a další. Vyber si jeden z našich herních modů, poznej fajn komunitu a užívej si požitek ze serveru!">
    <link rel="stylesheet" href="../style/bg2.css">
    <link rel="stylesheet" href="../style/hlasovani.css">
    <link rel="stylesheet" href="../style/style.css">
    <meta property="og:image" content="../img/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/cf6d4472b1.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Andada+Pro&family=Montserrat&display=swap" rel="stylesheet">
  
</head>
<body>
<style>body { background-image: url("<?php echo"$pozadi_serveru";?>"); }</style>
  <nav id="navbar" class="navbar">
    <a href="..">
    <img src="<?php echo"$logo_serveru";?>" alt="logo" style="border-radius: 25px;">
    </a>
    <a href="#" class="toggle-button">
      <i class="bar" class="fa-solid fa-bars"></i>
      <i class="bar" class="fa-solid fa-bars"></i>
      <i class="bar" class="fa-solid fa-bars"></i>
    </a>
    <div class="navbar-links">
      <ul>
        <?php if($discord_enabled == "true"){
                 echo '<li><a href="'.$discord_pozvanka.'" target="_blank">Discord <i style="font-size:125%;" class="fa-brands fa-discord" aria-hidden="true"></i></a></li>';
        }
?>

        <?php if($hlasovani_enabled == "true"){
                 echo '<li><a style="color:rgb(161, 228, 255);" href="../hlasovani.php">Hlasování <i style="font-size:125%;" class="fa-solid fa-coins" aria-hidden="true"></i></a></li>';
        }
?>

        <?php if($store_enabled == "true"){
                 echo '<li><a href="'.$store_odkaz.'" target="_blank">Store <i style="font-size:125%;" class="fa-solid fa-store" aria-hidden="true"></i></a></li>';
        }
?>

      <?php if($dynmap_enabled == "true"){
        echo '<li><a href="../dynmap.php">Dynmapy <i style="font-size:125%;"  class="fa-solid fa-map-location-dot" aria-hidden="true"></i></a></li>';
}
?>
        <?php if($banlist_enabled == "true"){
                 echo '<li><a href="'.$banlist_odkaz.'" target="_blank">Banlist <i style="font-size:125%;" class="fa-solid fa-ban" aria-hidden="true"></i></a></li>';
        }
?>
        <?php if($adminteam_enabled == "true"){
                 echo '<li><a href="../adminteam.php">Admin Team <i style="font-size:125%;" class="fa-solid fa-users" aria-hidden="true"></i></a></li>';
        }
?>
      </ul>
    </div>
  </nav>
  <div class="at">
    <h2 class="at-jmeno">Hlasování</h2>
    <div class="at-team">
<?php
    if($czechcraft_enabled == "true"){
      echo '
      <div class="czech-craft">
        <img alt="" src="https://czech-craft.eu/static/logo.svg">
        <a href="'.$czechcraft_odkaz.'" target="_blank"><div class="majitel">Czech-Craft.eu</div></a>
      </div>';
}

    if($craftlist_enabled == "true"){
      echo '
      <div class="craftlist">
        <img alt="" src="https://craftlist.org/img/favicons/128x128.png">
        <a href="'.$craftlist_odkaz.'" target="_blank"><div class="admin">Craftlist.org</div></a>
      </div>';
}

    if($minecraftlist_enabled == "true"){
      echo '
      <div class="minecraft-list">
        <img alt="" src="https://www.minecraft-list.cz/assets/images/logo.svg">
        <a href="'.$minecraftlist_odkaz.'" target="_blank"><div class="helper">Minecraft-list.cz</div></a>
      </div>';
}

    if($minecraftservery_enabled == "true"){
      echo '
      <div class="minecraftservery">
        <img alt="" src="../img/minecraftservery.png">
        <a href="'.$minecraftservery_odkaz.'" target="_blank"><div class="builder">Minecraftservery.eu</div></a>
      </div>';
}
?>
  </div>



<script>
  const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
})
</script>


</body>
</html>