<div class="row">
    <?php foreach ($termekek as $termek) : ?>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card">
                <div class="card-header">
                <?php echo $termek['kep'] ?>
                </div>
                <div class="card-body">
                    <h2 class="card-title"><?php echo $termek['nev'] ?></h2>
                    <?php echo $termek['leiras'] ?>
                </div>
                <div class="card-footer">
                    <?php echo $termek['ar'] ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>