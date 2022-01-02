<div class="text-white jumbotron jumbotron-fluid">
    <div class="container">
        <h1 <?php
            $titleAlignRight;
            if ($titleAlignRight ?? null == 'right') {
                # code...
                echo "style='text-align: right';";
            }
            ?> class="display-4">
            <?php $title;
            echo $title; ?></h1>
        <p class="lead">
            <?php $description;
            echo $description; ?>
        </p>
    </div>
</div>