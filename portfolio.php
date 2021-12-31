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
    <!-- PHP Variables and Arrays -->
    <?php
    $whoIam = "I'm Mustafa";
    $myDescription = "I'm a studying .NET Web Developer and this is my first portfolio website built using PHP.<br>I do both projects both at my college as well as outside of my studies where I like to learn new technologies.";
    // Links to my Social Medias, GitHub & LinkedIn Profile
    $linkNames = array("<i class='bi bi-github'></i>" => "https://github.com/mustafah99", "<i class='bi bi-google'></i>" => "mailto:mustafasaidhelal@gmail.com", "<i class='bi bi-linkedin'></i>" => "https://www.linkedin.com/in/mustafa-said-helal-bb7483228");
    $secondLinkArray = array("Home" => "https://github.com/mustafah99", "About Me" => "mailto:mustafasaidhelal@gmail.com", "Contact Me" => "https://www.linkedin.com/in/mustafa-said-helal-bb7483228");
    ?>
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
        <nav class="navbar navbar-dark">
            <div class="container-fluid">
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">My Personal Portfolio</span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <?php
                        foreach ($secondLinkArray as $secondLink => $link) {
                            echo "<li class='nav-item'> <a class='nav-link' style='color: white' class='nav-link' href='$link'>$secondLink</a></li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="text-center mx-auto" style="margin: 0; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                <h1 class="display-3 text-white" style="font-weight: normal!important">
                    <?php
                    echo $whoIam;
                    ?>
                </h1>
                <p class="text-white">
                    <?php
                    echo $myDescription;
                    ?>
                </p>
                <nav class="nav justify-content-center">
                    <?php
                    foreach ($linkNames as $linkName => $link) {
                        echo "<a style='color: white' class='nav-link' href='$link'>$linkName</a>";
                    }
                    ?>
                </nav>
            </div>
        </div>
    </div>
</body>

</html>