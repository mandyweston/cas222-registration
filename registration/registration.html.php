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
    <?php include "../includes/header.inc.html.php"; ?> <!-- Header -->
    <?php include "../includes/nav.inc.html.php"; ?> <!-- Nav -->
    <main>
      <h1>Register for an event today</h1>
      <div id="registration">
      <form method="post" action=" ">
        <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
        <label for="myname">First and last Name:</label>
          <input type="text" name="myname" id="myname"/>
        <label for="myage">Age:</label>
          <input type="text" name="myage" id="myage"/>
        <label for="role">Role:</label>
        <select size="1" name="role" id="role">
          <option>Select Your Role</option>
          <option value="athlete">Athlete</option>
          <option value="volunteer">Volunteer</option>
        </select>
        <label for="myphone">Phone:</label>
          <input type="tel" name="myphone" id="myphone"/>    
         <label for="myemail">Email:</label>
          <input type="email" name="myemail" id="myemail"/>
        <label for="ename">Emergency Contact Name:</label>
          <input type="text" name="ename" id="ename"/>    
        <label for="ephone">Emergency Contact Phone:</label>
          <input type="tel" name="ephone" id="ephone"/>
        <label for="gender">Gender:</label>
        <select size="1" name="gender" id="gender">
          <option>What is Your Gender</option>
          <option value="female">Female</option>
          <option value="male">Male</option>
          <option value="other">Non-binary/Other</option>
        </select>
        <label for="shirt">T-shirt Size:</label>
          <input type="text" name="shirt" id="shirt"/>
         <label for="event">Saturday Event Registering for:</label>
          <input type="text" name="event" id="event"/>
         <label for="sevent">Sunday Event Registering for:</label>
          <input type="text" name="sevent" id="sevent"/>
        <label for="mycomments">Any Special Accommodations Needed?</label>
          <textarea name="mycomments" id="mycomments" rows="2" cols="20"></textarea>
          <input id="mysubmit" type="submit" value="Submit"/>
      </form>
      </div>
    </main>
    <?php include "../includes/footer.inc.html.php"; ?> <!-- Footer -->
  </div>
</body>
</html>