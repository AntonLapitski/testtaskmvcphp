<div class="container">
    <div class="jumbotron mt-4">
        <h1 class="display-4">Login to the app</h1>
        <hr class="my-4">
        <a href="http://localhost/phpmvc/code/public/?url=create">Create</a>
        <ul class="list-group">
            <?php foreach( $data as $record ) : ?>
                <li class="list-group-item">
                    <?= $record ?>
                </li>
            <?php endforeach; ?>
        </ul>

    </div>
</div>