
<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $Name = $_POST['Name'];
    $FamilyName = $_POST['FamilyName'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];

    // Remove the extra comma in your SQL query
    $sql = "INSERT INTO tbl_person (Name, FamilyName, Email, Phone) VALUES ('$Name', '$FamilyName', '$Email', '$Phone')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Data inserted successfully";
    } else {
        die('Could not connect to the database server' . mysqli_error($con));
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@1,700&family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@1,700&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech-Dev/Contact</title>
</head>
<body>
    <main>
        <section class="top">

        <nav id="nav" class="nav">
             
             <div id="logoandmenu" class="logoandmenu">
                 
                 <div id="logo" class="logo"><p id="green" class="green">Tech</p>-Dev</div>
                 <img  src="IMG/image (5).png" alt="Hamburger menu" class="menu">

             </div>


                 <ul id="ul" class="ul">
                     <li id="li"><a id="a" class="linknav" target="_blank" href="Homepage.html">Home</a></li>
                     <li id="li1"><a id="a1" class="linknav" href="Projects.html">Projects</a></li>
                     <li id="li2"><a id="a2" class="linknav" href="Services.html">Services</a></li>
                     <li id="li3"><a id="a3" class="linknav" href="Technologies.html">Technologies</a></li>
                 </ul>
           


             <div id="languages" class="languages">
                 <a target="_blank" href="Contact.php" id="subscribe" class="subscribe">Contact</a>
                 <div id="threelanguages" class="threelanguages">
                     
                     <img id="language" src="IMG/united-kingdom.png" alt="united-kingdom" class="language" onclick="ChangeLanguage('en');">
                     <img id="language1" src="IMG/belgium.png" alt="belgium" class="language" onclick="ChangeLanguage('nl');">
                     <img id="language2" src="IMG/france.png" alt="france" class="language" onclick="ChangeLanguage('fr');">
                 </div>
            
             </div>

             
             
         </nav>

            

            <div class="contactFormular">
                
                 <div class="map">
                    <iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15300.465832677944!2d4.722903652728564!3d50.881458231679424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sro!2sbe!4v1698613502398!5m2!1sro!2sbe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                 </div>

                 <div class="verticalLine"></div>
                 <div class="verticalLine730"></div>

                 <div class="information">
                     <h2 class="titleContact">Contact Us</h2>
                     <form method="post">
                       <div class="nameandfamilyname"> <input placeholder="Name" class="name" type="text" name="Name">  <input placeholder="Family Name" class="name" type="text" name="FamilyName"> </div>
                       <input placeholder="Email" class="otherinfo" type="text" name="Email">
                       <input placeholder="Phone" class="otherinfo" type="text" name="Phone">
                       <input class="otherinfo" type="date" name="Date">
                       <div class="gender">
                          <h3 class="gendertitle">Select Gender</h3>
                          <input type="radio" name="gender" class="right" value="m">Male
                          <input type="radio" name="gender" class="right" value="f">Female
                          <input type="radio" name="gender" class="right" value="n">Dont't tell
                        </div>
                       <textarea  placeholder="About what would you like to talk" name="About" id="" cols="30" rows="5"></textarea>
                       <button class="send" name="submit">Send</button>
                     </form>
                 </div>

            </div>

        </section>

        <footer>
          

            <div class="thingsaboutus">

                <div class="thing">
                    <h2 class="titlething">About Us</h2>
                    <div class="smallline"></div>
                    <p class="aboutthing">We at ByteFusion provide software solutions that help you realise your digital dreams.</p>

                </div>

                <div class="thing">
                    <h2 class="titlething">Location</h2>
                    <div class="smallline"></div>
                    <div class="location">
                        <img class="locationphoto" src="IMG/image (6).png" alt="Location">
                        <p class="locationname">Diestsestraat, Louvain</p>
                    </div>
                </div>

                <div class="thing">
                    <h2 class="titlething">Contacts</h2>
                    <div class="smallline"></div>
                    <div class="telNummer">tel:098879898686</div>
                    <div class="email">email:dev-tech@gmail.com</div>
                </div>

            </div>

            <div class="copyrights">

                <div class="linefooter"></div>

                <div class="underline">
                    <div class="thetwo"> © 2023 <p class="logofooter"><p class="greenfooter">Tech</p>-dev</p></div>

                    <div class="socialmedia">
                    <a href="https://twitter.com/i/flow/login" target="_blank"><img src="IMG/image (1).png" alt="Platform" class="platform"></a> 
                        <a href="https://www.tiktok.com/" target="_blank"><img src="IMG/image (2).png" alt="Platform" class="platform"></a>
                        <a href="https://www.instagram.com/" target="_blank"> <img src="IMG/image (3).png" alt="Platform" class="platform"></a>
                        <a href="https://www.facebook.com/" target="_blank"><img src="IMG/image (4).png" alt="Platform" class="platform"></a>
                    </div>
                </div>

            </div>
           
        </footer>
    </main>
</body>
</html>