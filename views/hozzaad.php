<h1>Termék felvétele</h1>
<form method="POST" onsubmit="hozzaad()">
    <div class="mb-3">
        <label for="termeknev_input" class="form-label">Termék neve</label>
        <input type="text" class="form-control" id="termeknev_input" name="termeknev" maxlength="100" required>
    </div>
    <div class="mb-3">
        <label for="leiras_input" class="form-label">Leírás</label>
        <input type="textarea" class="form-control" id="leiras_input" name="leiras">
    </div>
    <div class="mb-3">
        <label for="ar_input" class="form-label">Ár</label>
        <input type="number" class="form-control" id="ar_input" name="ar" required>
    </div>
    <div class="mb-3">
        <label for="kep_input" class="form-label">Kép</label>
        <input type="text" class="form-control" id="kep_input" name="kep" required>
    </div>
    <button type="submit" class="btn btn-primary">Termék felvétele</button>
</form>