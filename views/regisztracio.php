<h1>Regisztráció</h1>
<form method="POST">
    <div class="mb-3">
        <label for="felhasznalonev_input" class="form-label">Felhasználónév</label>
        <input type="text" class="form-control" id="felhasznalonev_input" name="felhasznalonev">
    </div>
    <div class="mb-3">
        <label for="email_input" class="form-label">Email</label>
        <input type="email" class="form-control" id="email_input" name="email">
    </div>
    <div class="mb-3">
        <label for="jelszo_input" class="form-label">Jelszó</label>
        <input type="password" class="form-control" id="jelszo_input" name="jelszo">
    </div>
    <div class="mb-3">
        <label for="teljes_nev_input" class="form-label">Teljes név</label>
        <input type="text" class="form-control" id="teljes_nev_input" name="teljes_nev">
    </div>
    <div class="mb-3">
        <label for="szuldatum_input" class="form-label">Születési dátum</label>
        <input type="datetime-local" class="form-control" id="szuldatum_input" name="szuldatum">
    </div>
    <div class="mb-3">
        <label for="irszam_input" class="form-label">Irányítószám</label>
        <input type="number" class="form-control" id="irszam_input" name="irszam">
    </div>
    <div class="mb-3">
        <label for="varos_input" class="form-label">Város</label>
        <input type="text" class="form-control" id="varos_input" name="varos">
    </div>
    <div class="mb-3">
        <label for="cim_input" class="form-label">Cím</label>
        <input type="text" class="form-control" id="cim_input" name="cim">
    </div>
    <button type="submit" class="btn btn-primary">Regisztráció</button>
</form>