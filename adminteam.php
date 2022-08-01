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
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/adminteam.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="<?php echo"$logo_serveru";?>" type="image/x-icon">
    <script src="https://kit.fontawesome.com/cf6d4472b1.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Andada+Pro&family=Montserrat&display=swap" rel="stylesheet">
  
</head>
<body>
  <style>body { background-image: url("<?php echo"$pozadi_serveru";?>"); }</style>
<main>

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
                 echo '<li><a style="color:rgb(161, 228, 255);" href="../adminteam.php">Admin Team <i style="font-size:125%;" class="fa-solid fa-users" aria-hidden="true"></i></a></li>';
        }
?>
      </ul>
    </div>
  </nav>
  <div class="at">
    <h2 class="at-jmeno">Náš Admin Team</h2>
    <div class="at-team">
<?php
  if($majitel_1 == "true"){
  echo    '<div>
        <h3>'.$majitel_1_nick.'</h3>
        <div class="button-clen" style="background-color:'.$majitel_barva.'">'.$majitel_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$majitel_1_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($majitel_2 == "true"){
  echo    '<div>
        <h3>'.$majitel_2_nick.'</h3>
        <div class="button-clen" style="background-color:'.$majitel_barva.'">'.$majitel_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$majitel_2_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($majitel_3 == "true"){
  echo    '<div>
        <h3>'.$majitel_3_nick.'</h3>
        <div class="button-clen" style="background-color:'.$majitel_barva.'">'.$majitel_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$majitel_3_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($hlavni_developer == "true"){
  echo    '<div>
        <h3>'.$hlavni_developer_nick.'</h3>
        <div class="button-clen" style="background-color:'.$hlavni_developer_barva.'">'.$hlavni_developer_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$hlavni_developer_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($developer_1 == "true"){
  echo    '<div>
        <h3>'.$developer_1_nick.'</h3>
        <div class="button-clen" style="background-color:'.$developer_barva.'">'.$developer_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$developer_1_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($developer_2 == "true"){
  echo    '<div>
        <h3>'.$developer_2_nick.'</h3>
        <div class="button-clen" style="background-color:'.$developer_barva.'">'.$developer_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$developer_2_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($developer_3 == "true"){
  echo    '<div>
        <h3>'.$developer_3_nick.'</h3>
        <div class="button-clen" style="background-color:'.$developer_barva.'">'.$developer_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$developer_3_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($developer_4 == "true"){
  echo    '<div>
        <h3>'.$developer_4_nick.'</h3>
        <div class="button-clen" style="background-color:'.$developer_barva.'">'.$developer_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$developer_4_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($developer_5 == "true"){
  echo    '<div>
        <h3>'.$developer_5_nick.'</h3>
        <div class="button-clen" style="background-color:'.$developer_barva.'">'.$developer_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$developer_5_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($zkusebni_developer_1 == "true"){
  echo    '<div>
        <h3>'.$zkusebni_developer_1_nick.'</h3>
        <div class="button-clen" style="background-color:'.$zkusebni_developer_barva.'">'.$zkusebni_developer_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$zkusebni_developer_1_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($zkusebni_developer_2 == "true"){
  echo    '<div>
        <h3>'.$zkusebni_developer_2_nick.'</h3>
        <div class="button-clen" style="background-color:'.$zkusebni_developer_barva.'">'.$zkusebni_developer_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$zkusebni_developer_2_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($zkusebni_developer_3 == "true"){
  echo    '<div>
        <h3>'.$zkusebni_developer_3_nick.'</h3>
        <div class="button-clen" style="background-color:'.$zkusebni_developer_barva.'">'.$zkusebni_developer_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$zkusebni_developer_3_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($zkusebni_developer_4 == "true"){
  echo    '<div>
        <h3>'.$zkusebni_developer_4_nick.'</h3>
        <div class="button-clen" style="background-color:'.$zkusebni_developer_barva.'">'.$zkusebni_developer_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$zkusebni_developer_4_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($zkusebni_developer_5 == "true"){
  echo    '<div>
        <h3>'.$zkusebni_developer_5_nick.'</h3>
        <div class="button-clen" style="background-color:'.$zkusebni_developer_barva.'">'.$zkusebni_developer_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$zkusebni_developer_5_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($hlavni_technik == "true"){
  echo    '<div>
        <h3>'.$hlavni_technik_nick.'</h3>
        <div class="button-clen" style="background-color:'.$hlavni_technik_barva.'">'.$hlavni_technik_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$hlavni_technik_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($technik_1 == "true"){
  echo    '<div>
        <h3>'.$technik_1_nick.'</h3>
        <div class="button-clen" style="background-color:'.$technik_barva.'">'.$technik_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$technik_1_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($technik_2 == "true"){
  echo    '<div>
        <h3>'.$technik_2_nick.'</h3>
        <div class="button-clen" style="background-color:'.$technik_barva.'">'.$technik_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$technik_2_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($technik_3 == "true"){
  echo    '<div>
        <h3>'.$technik_3_nick.'</h3>
        <div class="button-clen" style="background-color:'.$technik_barva.'">'.$technik_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$technik_3_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($technik_4 == "true"){
  echo    '<div>
        <h3>'.$technik_4_nick.'</h3>
        <div class="button-clen" style="background-color:'.$technik_barva.'">'.$technik_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$technik_4_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($technik_5 == "true"){
  echo    '<div>
        <h3>'.$technik_5_nick.'</h3>
        <div class="button-clen" style="background-color:'.$technik_barva.'">'.$technik_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$technik_5_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($zkusebni_technik_1 == "true"){
  echo    '<div>
        <h3>'.$zkusebni_technik_1_nick.'</h3>
        <div class="button-clen" style="background-color:'.$zkusebni_technik_barva.'">'.$zkusebni_technik_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$zkusebni_technik_1_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($zkusebni_technik_2 == "true"){
  echo    '<div>
        <h3>'.$zkusebni_technik_2_nick.'</h3>
        <div class="button-clen" style="background-color:'.$zkusebni_technik_barva.'">'.$zkusebni_technik_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$zkusebni_technik_2_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($zkusebni_technik_3 == "true"){
  echo    '<div>
        <h3>'.$zkusebni_technik_3_nick.'</h3>
        <div class="button-clen" style="background-color:'.$zkusebni_technik_barva.'">'.$zkusebni_technik_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$zkusebni_technik_3_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($zkusebni_technik_4 == "true"){
  echo    '<div>
        <h3>'.$zkusebni_technik_4_nick.'</h3>
        <div class="button-clen" style="background-color:'.$zkusebni_technik_barva.'">'.$zkusebni_technik_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$zkusebni_technik_4_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($zkusebni_technik_5 == "true"){
  echo    '<div>
        <h3>'.$zkusebni_technik_5_nick.'</h3>
        <div class="button-clen" style="background-color:'.$zkusebni_technik_barva.'">'.$zkusebni_technik_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$zkusebni_technik_5_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($hlavni_admin == "true"){
  echo    '<div>
        <h3>'.$hlavni_admin_nick.'</h3>
        <div class="button-clen" style="background-color:'.$hlavni_admin_barva.'">'.$hlavni_admin_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$hlavni_admin_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($admin_1 == "true"){
  echo    '<div>
        <h3>'.$admin_1_nick.'</h3>
        <div class="button-clen" style="background-color:'.$admin_barva.'">'.$admin_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$admin_1_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($admin_2 == "true"){
  echo    '<div>
        <h3>'.$admin_2_nick.'</h3>
        <div class="button-clen" style="background-color:'.$admin_barva.'">'.$admin_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$admin_2_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($admin_3 == "true"){
  echo    '<div>
        <h3>'.$admin_3_nick.'</h3>
        <div class="button-clen" style="background-color:'.$admin_barva.'">'.$admin_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$admin_3_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($admin_4 == "true"){
  echo    '<div>
        <h3>'.$admin_4_nick.'</h3>
        <div class="button-clen" style="background-color:'.$admin_barva.'">'.$admin_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$admin_4_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($admin_5 == "true"){
  echo    '<div>
        <h3>'.$admin_5_nick.'</h3>
        <div class="button-clen" style="background-color:'.$admin_barva.'">'.$admin_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$admin_5_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($zkusebni_admin_1 == "true"){
  echo    '<div>
        <h3>'.$zkusebni_admin_1_nick.'</h3>
        <div class="button-clen" style="background-color:'.$zkusebni_admin_barva.'">'.$zkusebni_admin_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$zkusebni_admin_1_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($zkusebni_admin_2 == "true"){
  echo    '<div>
        <h3>'.$zkusebni_admin_2_nick.'</h3>
        <div class="button-clen" style="background-color:'.$zkusebni_admin_barva.'">'.$zkusebni_admin_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$zkusebni_admin_2_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($zkusebni_admin_3 == "true"){
  echo    '<div>
        <h3>'.$zkusebni_admin_3_nick.'</h3>
        <div class="button-clen" style="background-color:'.$zkusebni_admin_barva.'">'.$zkusebni_admin_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$zkusebni_admin_3_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($zkusebni_admin_4 == "true"){
  echo    '<div>
        <h3>'.$zkusebni_admin_4_nick.'</h3>
        <div class="button-clen" style="background-color:'.$zkusebni_admin_barva.'">'.$zkusebni_admin_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$zkusebni_admin_4_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($zkusebni_admin_5 == "true"){
  echo    '<div>
        <h3>'.$zkusebni_admin_5_nick.'</h3>
        <div class="button-clen" style="background-color:'.$zkusebni_admin_barva.'">'.$zkusebni_admin_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$zkusebni_admin_5_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($hlavni_helper == "true"){
  echo    '<div>
        <h3>'.$hlavni_helper_nick.'</h3>
        <div class="button-clen" style="background-color:'.$hlavni_helper_barva.'">'.$hlavni_helper_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$hlavni_helper_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($helper_1 == "true"){
  echo    '<div>
        <h3>'.$helper_1_nick.'</h3>
        <div class="button-clen" style="background-color:'.$helper_barva.'">'.$helper_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$helper_1_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($helper_2 == "true"){
  echo    '<div>
        <h3>'.$helper_2_nick.'</h3>
        <div class="button-clen" style="background-color:'.$helper_barva.'">'.$helper_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$helper_2_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($helper_3 == "true"){
  echo    '<div>
        <h3>'.$helper_3_nick.'</h3>
        <div class="button-clen" style="background-color:'.$helper_barva.'">'.$helper_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$helper_3_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($helper_4 == "true"){
  echo    '<div>
        <h3>'.$helper_4_nick.'</h3>
        <div class="button-clen" style="background-color:'.$helper_barva.'">'.$helper_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$helper_4_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($helper_5 == "true"){
  echo    '<div>
        <h3>'.$helper_5_nick.'</h3>
        <div class="button-clen" style="background-color:'.$helper_barva.'">'.$helper_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$helper_5_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($zkusebni_helper_1 == "true"){
  echo    '<div>
        <h3>'.$zkusebni_helper_1_nick.'</h3>
        <div class="button-clen" style="background-color:'.$zkusebni_helper_barva.'">'.$zkusebni_helper_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$zkusebni_helper_1_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($zkusebni_helper_2 == "true"){
  echo    '<div>
        <h3>'.$zkusebni_helper_2_nick.'</h3>
        <div class="button-clen" style="background-color:'.$zkusebni_helper_barva.'">'.$zkusebni_helper_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$zkusebni_helper_2_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($zkusebni_helper_3 == "true"){
  echo    '<div>
        <h3>'.$zkusebni_helper_3_nick.'</h3>
        <div class="button-clen" style="background-color:'.$zkusebni_helper_barva.'">'.$zkusebni_helper_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$zkusebni_helper_3_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($zkusebni_helper_4 == "true"){
  echo    '<div>
        <h3>'.$zkusebni_helper_4_nick.'</h3>
        <div class="button-clen" style="background-color:'.$zkusebni_helper_barva.'">'.$zkusebni_helper_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$zkusebni_helper_4_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($zkusebni_helper_5 == "true"){
  echo    '<div>
        <h3>'.$zkusebni_helper_5_nick.'</h3>
        <div class="button-clen" style="background-color:'.$zkusebni_helper_barva.'">'.$zkusebni_helper_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$zkusebni_helper_5_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($hlavni_builder == "true"){
  echo    '<div>
        <h3>'.$hlavni_builder_nick.'</h3>
        <div class="button-clen" style="background-color:'.$hlavni_builder_barva.'">'.$hlavni_builder_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$hlavni_builder_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($builder_1 == "true"){
  echo    '<div>
        <h3>'.$builder_1_nick.'</h3>
        <div class="button-clen" style="background-color:'.$builder_barva.'">'.$builder_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$builder_1_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($builder_2 == "true"){
  echo    '<div>
        <h3>'.$builder_2_nick.'</h3>
        <div class="button-clen" style="background-color:'.$builder_barva.'">'.$builder_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$builder_2_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($builder_3 == "true"){
  echo    '<div>
        <h3>'.$builder_3_nick.'</h3>
        <div class="button-clen" style="background-color:'.$builder_barva.'">'.$builder_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$builder_3_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($builder_4 == "true"){
  echo    '<div>
        <h3>'.$builder_4_nick.'</h3>
        <div class="button-clen" style="background-color:'.$builder_barva.'">'.$builder_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$builder_4_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($builder_5 == "true"){
  echo    '<div>
        <h3>'.$builder_5_nick.'</h3>
        <div class="button-clen" style="background-color:'.$builder_barva.'">'.$builder_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$builder_5_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($zkusebni_builder_1 == "true"){
  echo    '<div>
        <h3>'.$zkusebni_builder_1_nick.'</h3>
        <div class="button-clen" style="background-color:'.$zkusebni_builder_barva.'">'.$zkusebni_builder_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$zkusebni_builder_1_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($zkusebni_builder_2 == "true"){
  echo    '<div>
        <h3>'.$zkusebni_builder_2_nick.'</h3>
        <div class="button-clen" style="background-color:'.$zkusebni_builder_barva.'">'.$zkusebni_builder_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$zkusebni_builder_2_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($zkusebni_builder_3 == "true"){
  echo    '<div>
        <h3>'.$zkusebni_builder_3_nick.'</h3>
        <div class="button-clen" style="background-color:'.$zkusebni_builder_barva.'">'.$zkusebni_builder_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$zkusebni_builder_3_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($zkusebni_builder_4 == "true"){
  echo    '<div>
        <h3>'.$zkusebni_builder_4_nick.'</h3>
        <div class="button-clen" style="background-color:'.$zkusebni_builder_barva.'">'.$zkusebni_builder_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$zkusebni_builder_4_nick.'/720.png">
      </div>';
  }
?>
<?php
  if($zkusebni_builder_5 == "true"){
  echo    '<div>
        <h3>'.$zkusebni_builder_5_nick.'</h3>
        <div class="button-clen" style="background-color:'.$zkusebni_builder_barva.'">'.$zkusebni_builder_prefix.'</div>
        <img alt="" src="https://minotar.net/armor/body/'.$zkusebni_builder_5_nick.'/720.png">
      </div>';
  }
?>

    </div>
  </div>
  



<script>
  const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
})
</script>

</main>
</body>
</html>
