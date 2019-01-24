<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Google FAQ</title>
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
  </head>
  <body>
    <?php include 'data.php' ?>
    <div class="container-header">
      <div class="only-logo">
        <div class="logo">
          <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_74x24dp.png" alt="">
        </div>
        <div class="text-logo">
          <h2>Privacy & Terms</h2>
        </div>
      </div>
    </div>
    <div class="container-menu">
      <div class="menu">
        <div class="menu-left">
          <ul>
            <li>Overview</li>
            <li>Privacy Policy</li>
            <li>Terms of Service</li>
            <li>Technologies</li>
            <li class="blue">FAQ</li>
          </ul>
        </div>
        <div class="menu-right">
          <p>Google Account</p>
        </div>
      </div>
    </div>
    <div class="container-faq">
      <div class="faq">
        <?php foreach ($faqs as $domanda => $faq) { ?>
          <h2><?php echo $domanda; ?></h2>
        <p><?php echo $faq ?></p><br>
        <?php } ?>
      </div>
    </div>
  </body>
</html>
