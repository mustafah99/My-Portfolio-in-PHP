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