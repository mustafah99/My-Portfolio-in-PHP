<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<!-- Style for Body -->
<style>
    body {
        /* Height Set to 100vh for Background Image Responsiveness */
        height: 100vh;
    }
</style>

<body style="background-image: url('./Pictures/Background Image/Galaxy.jpg'); background-size: cover;">
    <!-- Header -->
    <div class="container">
        <!-- Navbar Included from 'navbar.php' -->
        <?php
        // Links for Navbar
        $secondLinkArray = array("Home" => "portfolio.php", "About Me" => "mailto:mustafasaidhelal@gmail.com", "Contact Me" => "https://www.linkedin.com/in/mustafa-said-helal-bb7483228");
        include "components/navbar.php"
        ?>

        <!-- Profile Name & Description Included from 'profile.php' -->
        <?php
        // Name of Profile
        $whoIam = "I'm Mustafa";
        // Description of Profile
        $myDescription = "And I wanted to make my portfolio simple, because why not simplicity?";
        // Link Icons & Links to Social Media for Profile
        $linkNames = array("<i class='bi bi-github'></i>" => "https://github.com/mustafah99", "<i class='bi bi-google'></i>" => "mailto:mustafasaidhelal@gmail.com", "<i class='bi bi-linkedin'></i>" => "https://www.linkedin.com/in/mustafa-said-helal-bb7483228");
        include "components/profile.php"
        ?>
    </div>
</body>

</html>

<!-- I'm a .NET and Full-Stack Developer with experience in developing with React.js in both JavaScript and TypeScript, Web Application Development & Web API Development with C# .NET and ASP .NET Core, App Development in iOS with Swift-UI and PHP, HTML, CSS and Front-End Libraries, etc and more. Contact me for an inquiry! -->