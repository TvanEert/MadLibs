<?php
  $dier_Error = $persoon_Error = $land_Error = $verveel_Error = $speelgoed_Error = $docent_Error = $kopen_Error = $bezigheid_Error = "";
  $dier = $persoon = $land = $verveel = $speelgoed = $docent = $kopen = $bezigheid = "";
  $error =
  $display_Q = initial;
  $display_T = none;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["dier"])) {
      $dier_Error = "Verplicht veld";
      $error = True;
    }
    else {
      $dier = $_POST["dier"];
      $error = False;
    }

    if (empty($_POST["persoon"])) {
      $persoon_Error = "Verplicht veld";
      $error = True;
    }
    else {
      $persoon = $_POST["persoon"];
      $error = False;
    }

    if (empty($_POST["land"])) {
      $land_Error = "Verplicht veld";
      $error = True;
    }
    else {
      $land = $_POST["land"];
      $error = False;
    }

    if (empty($_POST["verveel"])) {
      $verveel_Error = "Verplicht veld";
      $error = True;
    }
    else {
      $verveel = $_POST["verveel"];
      $error = False;
    }

    if (empty($_POST["speelgoed"])) {
      $speelgoed_Error = "Verplicht veld";
      $error = True;
    }
    else {
      $speelgoed = $_POST["speelgoed"];
      $error = False;
    }

    if (empty($_POST["docent"])) {
      $docent_Error = "Verplicht veld";
      $error = True;
    }
    else {
      $docent = $_POST["docent"];
      $error = False;
    }

    if (empty($_POST["kopen"])) {
      $kopen_Error = "Verplicht veld";
      $error = True;
    }
    else {
      $kopen = $_POST["kopen"];
      $error = False;
    }

    if (empty($_POST["bezigheid"])) {
      $bezigheid_Error = "Verplicht veld";
      $error = True;
    }
    else {
      $bezigheid = $_POST["bezigheid"];
      $error = False;
    }
  }
  if ($error == False) {
    $display_Q = none;
    $display_T = initial;
  }
?>
<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="master.css">
    <title></title>
  </head>
  <body>
    <?php include 'nav.php'; ?>
    <div class="main_box">
      <div class="full_text"><?php include 'form1.php'; ?></div>
      <div class="text">
        <h2>Er heerst paniek...</h2>
        <p>Welk dier zou je nooit alshuisdier willen hebben?</p>
        <p>Wie is de belangrijkste persoon in je leven?</p>
        <p>In welk land zou je graag willen wonen?</p>
        <p>Wat doe je als je je verveelt?</p>
        <p>Met welk speelgoed speelde je als kind het meest?</p>
        <p>Bij welke docent spijbel je het meest?</p>
        <p>Als je &euro; 100.000,- had wat zou je dan kopen?</p>
        <p>Wat is je favoriete bezigheid?</p>
      </div>
      <div class="input">
        <form action="index.php" method="post">
          <input type="text" name="dier" id="top_input" value="<?php echo $dier; ?><?php echo $dier_Error; ?>">
          <input type="text" name="persoon" value="<?php echo $persoon;  ?><?php echo $persoon_Error; ?>">
          <input type="text" name="land" value="<?php echo $land; ?><?php echo $land_Error; ?>">
          <input type="text" name="verveel" value="<?php echo $verveel; ?><?php echo $verveel_Error; ?>">
          <input type="text" name="speelgoed" value="<?php echo $speelgoed; ?><?php echo $speelgoed_Error; ?>">
          <input type="text" name="docent" value="<?php echo $docent; ?><?php echo $docent_Error; ?>">
          <input type="text" name="kopen" value="<?php echo $kopen; ?><?php echo $kopen_Error; ?>">
          <input type="text" name="bezigheid" value="<?php echo $bezigheid; ?><?php echo $bezigheid_Error; ?>">
          <input type="submit" name="Verzenden" value="Verzenden" id="button">
        </form>
      </div>
    </div>
  </body>
  <style>
    body{
      background-color: gray;
    }
    .input{
      display: <?php echo $display_Q; ?>;
    }
    .text{
      display: <?php echo $display_Q; ?>;
    }
    .full_text{
      display: <?php echo $display_T; ?>
    }
  </style>
</html>
