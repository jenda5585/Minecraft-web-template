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
    <link rel="stylesheet" href="../style/bg.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/hernimody.css">
    <meta name="description" content="<?php echo"$popis_serveru";?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="<?php echo"$logo_serveru";?>" type="image/x-icon">
    <script src="https://kit.fontawesome.com/cf6d4472b1.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Andada+Pro&family=Montserrat&display=swap" rel="stylesheet">
  
</head>
<body>

<style>header::before { background-image: url("<?php echo"$pozadi_serveru";?>"); }</style>

<header id="header">
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
<div style="text-align: right;width: 55%;">
<img style="border-radius: 25px;" src="<?php echo"$logo_serveru";?>" alt="logo" class="logo-serveru">
</div>
<h2 class="nazev-serveru"><?php echo"$nazev_serveru";?></h2>
<h2 class="popis-serveru"><?php echo"$popis_serveru";?></h2>
<button class="button-82-pushable" role="button" onclick="copy()">
  <span class="button-82-shadow"></span>
  <span class="button-82-edge"></span>
  <span class="button-82-front text">
    <?php echo"$text_ip_serveru";?>
  </span>
</button>
</header>
<main>
  <div class="at">
    <h2 class="at-jmeno">Co si u nás můžeš zahrát?</h2>
  <div class="at-team">
    
<?php
      if($herni_mod_1 == "true"){
        echo '
      <div>
        <h2>'.$herni_mod_1_nazev.'</h2>
        <p>'.$herni_mod_1_popis.'</p>
        <img alt="" src="'.$herni_mod_1_fotka.'" style="width: 13em">
      </div>';
    }

      if($herni_mod_2 == "true"){
        echo '
      <div>
        <h2>'.$herni_mod_2_nazev.'</h2>
        <p>'.$herni_mod_2_popis.'</p>
        <img alt="" src="'.$herni_mod_2_fotka.'" style="width: 13em">
      </div>';
    }

      if($herni_mod_3 == "true"){
        echo '
      <div>
        <h2>'.$herni_mod_3_nazev.'</h2>
        <p>'.$herni_mod_3_popis.'</p>
        <img alt="" src="'.$herni_mod_3_fotka.'" style="width: 13em">
      </div>';
    }

      if($herni_mod_4 == "true"){
        echo '
      <div>
        <h2>'.$herni_mod_4_nazev.'</h2>
        <p>'.$herni_mod_4_popis.'</p>
        <img alt="" src="'.$herni_mod_4_fotka.'" style="width: 13em">
      </div>';
    }

      if($herni_mod_5 == "true"){
        echo '
      <div>
        <h2>'.$herni_mod_5_nazev.'</h2>
        <p>'.$herni_mod_5_popis.'</p>
        <img alt="" src="'.$herni_mod_5_fotka.'" style="width: 13em">
      </div>';
    }

      if($herni_mod_6 == "true"){
        echo '
      <div>
        <h2>'.$herni_mod_6_nazev.'</h2>
        <p>'.$herni_mod_6_popis.'</p>
        <img alt="" src="'.$herni_mod_6_fotka.'" style="width: 13em">
      </div>';
    }

      if($herni_mod_7 == "true"){
        echo '
      <div>
        <h2>'.$herni_mod_7_nazev.'</h2>
        <p>'.$herni_mod_7_popis.'</p>
        <img alt="" src="'.$herni_mod_7_fotka.'" style="width: 13em">
      </div>';
    }

      if($herni_mod_8 == "true"){
        echo '
      <div>
        <h2>'.$herni_mod_8_nazev.'</h2>
        <p>'.$herni_mod_8_popis.'</p>
        <img alt="" src="'.$herni_mod_8_fotka.'" style="width: 13em">
      </div>';
    }

      if($herni_mod_9 == "true"){
        echo '
      <div>
        <h2>'.$herni_mod_9_nazev.'</h2>
        <p>'.$herni_mod_9_popis.'</p>
        <img alt="" src="'.$herni_mod_9_fotka.'" style="width: 13em">
      </div>';
    }

      if($herni_mod_10 == "true"){
        echo '
      <div>
        <h2>'.$herni_mod_10_nazev.'</h2>
        <p>'.$herni_mod_10_popis.'</p>
        <img alt="" src="'.$herni_mod_10_fotka.'" style="width: 13em">
      </div>
    </div>';
    }
?>
    
  </div>
</main>

<script>
  const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
})

  function copy(){
    const input = '<?php echo"$ip_serveru";?>'
    navigator.clipboard.writeText(input)
  }
</script>


</body>
</html>