<div class="row">
    <?php var_dump($termekek); ?>
    <?php var_dump($_SESSION); ?>
    <?php foreach ($termekek as $termek) : ?>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title"><?php echo $termek['nev'] ?></h2>
                </div>
                <div class="card-body">

                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>