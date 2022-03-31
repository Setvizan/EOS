<div>
    <?php foreach($data as $product): ?>
        <div class="card mb-2">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="/src/images/pic07.jpg" class="img-fluid rounded-start" alt="..." >
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product->NAME ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $product->COST ?></h6>
                        <p class="card-text"><?= $product->DESCRIPTION ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach;?>
</div>
