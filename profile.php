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