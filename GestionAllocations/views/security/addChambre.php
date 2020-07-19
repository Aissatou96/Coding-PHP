
  <div class="container-chamb">
    <div class="chamb-header">
        <h1>ENREGISTRER CHAMBRE</h1>
    </div>

    <div class="chamb-body">
      <form class="form-group" method="post" action="<?=BASE_URL?>/security/addchambre">
          <div class="form-group">
            <label for="numB">Numero Batiment</label>

              <select name="numBatiment" id="numB">
                <option value="">Choisir un numéro de batiment</option>
                <option value="001">001</option>
                <option value="002">002</option>
                <option value="003">003</option>
                <option value="004">004</option>
                <option value="005">005</option>
              </select>
          </div>

          <div class="form-group">
          <label class="my-1 mr-2" for="type">Choisir le type de chambre</label>
          <select class="custom-select col-md-4" id="type"  name="typeChambre" placeholder="Choisir un type">
              <option selected></option>
              <option value="individuel">individuel</option>
              <option value="duo">Duo</option>
          </select>
          </div>
            <br>
          <button type="submit" class="btn btn-primary mr-5" name="addchambres">ENREGISTRER</button>
          <button type="reset" class="btn btn-primary">ANNULER</button>
      </form>
    </div>
  </div>
   