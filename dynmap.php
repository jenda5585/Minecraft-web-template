<?php
require('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo"$nazev_serveru";?></title>
    <meta name="description" content="<?php echo"$popis_serveru";?>">
    <link rel="stylesheet" href="../style/bg2.css">
    <link rel="stylesheet" href="../style/dynmap.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="<?php echo"$logo_serveru";?>" type="image/x-icon">
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
                 echo '<li><a href="../hlasovani.php">Hlasování <i style="font-size:125%;" class="fa-solid fa-coins" aria-hidden="true"></i></a></li>';
        }
?>

        <?php if($store_enabled == "true"){
                 echo '<li><a href="'.$store_odkaz.'" target="_blank">Store <i style="font-size:125%;" class="fa-solid fa-store" aria-hidden="true"></i></a></li>';
        }
?>

      <?php if($dynmap_enabled == "true"){
        echo '<li><a style="color:rgb(161, 228, 255);" href="../dynmap.php">Dynmapy <i style="font-size:125%;"  class="fa-solid fa-map-location-dot" aria-hidden="true"></i></a></li>';
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
    <h2 class="at-jmeno">Dynmapy</h2>
    <div class="at-team">

<?php if($dynmap_server_1 == "true"){
echo '<div style="background-image:url('.$dynmap_server_1_pozadi.')">
        <a href="'.$dynmap_server_1_odkaz.'" target="_blank"><div class="button">'.$dynmap_server_1_nazev.'</div></a>
      </div>';
}
?>

<?php if($dynmap_server_2 == "true"){
echo '<div style="background-image:url('.$dynmap_server_2_pozadi.')">
        <a href="'.$dynmap_server_2_odkaz.'" target="_blank"><div class="button">'.$dynmap_server_2_nazev.'</div></a>
      </div>';
}
?>

<?php if($dynmap_server_3 == "true"){
echo '<div style="background-image:url('.$dynmap_server_3_pozadi.')">
        <a href="'.$dynmap_server_3_odkaz.'" target="_blank"><div class="button">'.$dynmap_server_3_nazev.'</div></a>
      </div>';
}
?>

<?php if($dynmap_server_4 == "true"){
echo '<div style="background-image:url('.$dynmap_server_4_pozadi.')">
        <a href="'.$dynmap_server_4_odkaz.'" target="_blank"><div class="button">'.$dynmap_server_4_nazev.'</div></a>
      </div>';
}
?>

<?php if($dynmap_server_5 == "true"){
echo '<div style="background-image:url('.$dynmap_server_5_pozadi.')">
        <a href="'.$dynmap_server_5_odkaz.'" target="_blank"><div class="button">'.$dynmap_server_5_nazev.'</div></a>
      </div>';
}
?>

<?php if($dynmap_server_6 == "true"){
echo '<div style="background-image:url('.$dynmap_server_6_pozadi.')">
        <a href="'.$dynmap_server_6_odkaz.'" target="_blank"><div class="button">'.$dynmap_server_6_nazev.'</div></a>
      </div>';
}
?>

<?php if($dynmap_server_7 == "true"){
echo '<div style="background-image:url('.$dynmap_server_7_pozadi.')">
        <a href="'.$dynmap_server_7_odkaz.'" target="_blank"><div class="button">'.$dynmap_server_7_nazev.'</div></a>
      </div>';
}
?>

<?php if($dynmap_server_8 == "true"){
echo '<div style="background-image:url('.$dynmap_server_8_pozadi.')">
        <a href="'.$dynmap_server_8_odkaz.'" target="_blank"><div class="button">'.$dynmap_server_8_nazev.'</div></a>
      </div>';
}
?>

<?php if($dynmap_server_9 == "true"){
echo '<div style="background-image:url('.$dynmap_server_9_pozadi.')">
        <a href="'.$dynmap_server_9_odkaz.'" target="_blank"><div class="button">'.$dynmap_server_9_nazev.'</div></a>
      </div>';
}
?>

<?php if($dynmap_server_10 == "true"){
echo '<div style="background-image:url('.$dynmap_server_10_pozadi.')">
        <a href="'.$dynmap_server_10_odkaz.'" target="_blank"><div class="button">'.$dynmap_server_10_nazev.'</div></a>
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