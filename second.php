<?php
  $vaardigheid_Error = $goedOpschieten_Error = $getal_Error = $vakantie_Error = $besteEigenschap = $slechtsteEigenschap_Error = $ergsteOverkomen_Error = "";
  $vaardigheid = $goedOpschieten = $getal = $vakantie = $besteEigenschap = $slechtsteEigenschap = $ergsteOverkomen = "";
  $error =
  $display_Q = initial;
  $display_T = none;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["vaardigheid"])) {
      $vaardigheid_Error = "Verplicht veld";
      $error = True;
    }
    else {
      $vaardigheid = $_POST["vaardigheid"];
      $error = False;
    }

    if (empty($_POST["goedOpschieten"])) {
      $goedOpschieten_Error = "Verplicht veld";
      $error = True;
    }
    else {
      $goedOpschieten = $_POST["goedOpschieten"];
      $error = False;
    }

    if (empty($_POST["getal"])) {
      $getal_Error = "Verplicht veld";
      $error = True;
    }
    else {
      $getal = $_POST["getal"];
      $error = False;
    }

    if (empty($_POST["vakantie"])) {
      $vakantie_Error = "Verplicht veld";
      $error = True;
    }
    else {
      $vakantie = $_POST["vakantie"];
      $error = False;
    }

    if (empty($_POST["besteEigenschap"])) {
      $besteEigenschap_Error = "Verplicht veld";
      $error = True;
    }
    else {
      $besteEigenschap = $_POST["besteEigenschap"];
      $error = False;
    }

    if (empty($_POST["slechtsteEigenschap"])) {
      $slechtsteEigenschap_Error = "Verplicht veld";
      $error = True;
    }
    else {
      $slechtsteEigenschap = $_POST["slechtsteEigenschap"];
      $error = False;
    }

    if (empty($_POST["ergsteOverkomen"])) {
      $ergsteOverkomen_Error = "Verplicht veld";
      $error = True;
    }
    else {
      $ergsteOverkomen = $_POST["ergsteOverkomen"];
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
    <title></title>
    <link rel="stylesheet" href="master.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
  </head>
  <body>
    <div id="box">
      <h1>Mad libs</h1>
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php">Er heerst paniek...</a>
        <a class="navbar-brand" href="second.php">Onkunde</a>
      </nav>
      <div class="main_box">
        <div class="full_text"><?php include 'form2.php'; ?></div>
        <div class="text">
          <h2>Onkunde</h2>
          <p>Wat zou je graag willen kunnen?</p>
          <p>Met welk persoon kun je goed opschieten?</p>
          <p>Wat is je favoriete getal?</p>
          <p>Wat heb je altijd bij je als je op vakantie gaat?</p>
          <p>Wat is je beste persoonlijke eigenschap</p>
          <p>Wat is je slechtste persoonlijke eigenschap?</p>
          <p>Wat is het ergste dat je kan overkomen?</p>
        </div>
        <div class="input">
          <form action="" method="post">
            <input type="text" name="vaardigheid" value="<?php echo $vaardigheid; ?><?php echo $vaardigheid_Error; ?>" id="top_input">
            <input type="text" name="goedOpschieten" value="<?php echo $goedOpschieten; ?><?php echo $goedOpschieten_Error; ?>">
            <input type="text" name="getal" value="<?php echo $getal; ?><?php echo $getal_Error; ?>">
            <input type="text" name="vakantie" value="<?php echo $vakantie; ?><?php echo $vakantie_Error; ?>">
            <input type="text" name="besteEigenschap" value="<?php echo $besteEigenschap; ?><?php echo $besteEigenschap_Error; ?>">
            <input type="text" name="slechtsteEigenschap" value="<?php echo $slechtsteEigenschap; ?><?php echo $slechtsteEigenschap_Error; ?>">
            <input type="text" name="ergsteOverkomen" value="<?php echo $ergsteOverkomen; ?><?php echo $ergsteOverkomen_Error; ?>">
            <input type="submit" name="Verzenden" value="Verzenden" id="button">
          </form>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
  </body>
</html>
