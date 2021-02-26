<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ace in the Hole Multisport Events</title>
        <meta name="description" content="Ace in the Hole Multisport Events, sports events in the Portland, Oregon area.">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href=css/reset.css rel="stylesheet" type="text/css">
        <link href=css/template.css rel="stylesheet" type="text/css">
        <link href=css/navigation.css rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
            <?php include '../includes/header.inc.html.php'; ?>
            <?php include '../includes/nav.inc.html.php'; ?>
            <main>
                <h1>Thank you!</h1>
                <p>Our records show you submitted the following:<br>
                  Name: <?php echo htmlspecialchars($myname, ENT_QUOTES, 'UTF-8'); ?><br>
                  Age: <?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?><br>
                  role: <?php echo htmlspecialchars($role, ENT_QUOTES, 'UTF-8'); ?><br>
                  Phone: <?php echo htmlspecialchars($myphone, ENT_QUOTES, 'UTF-8'); ?><br>
                  Email: <?php echo htmlspecialchars($myemail, ENT_QUOTES, 'UTF-8'); ?><br>
                  Emergancy Contact Name: <?php echo htmlspecialchars($ename, ENT_QUOTES, 'UTF-8'); ?><br>
                  Emergancy Contact Phone: <?php echo htmlspecialchars($ephone, ENT_QUOTES, 'UTF-8'); ?><br>
                  Gender: <?php echo htmlspecialchars($gender, ENT_QUOTES, 'UTF-8'); ?><br>
                  T-Shirt Size: <?php echo htmlspecialchars($shirt, ENT_QUOTES, 'UTF-8'); ?><br>
                  Saturday Event: <?php echo htmlspecialchars($event, ENT_QUOTES, 'UTF-8'); ?><br>
                  Sunday Event: <?php echo htmlspecialchars($sevent, ENT_QUOTES, 'UTF-8'); ?><br>
                  Accommodations: <?php echo htmlspecialchars($mycomments, ENT_QUOTES, 'UTF-8'); ?><br>
                </p>
            </main>
            <?php include '../includes/footer.inc.html.php'; ?>
        </div>
    </body>
</html>