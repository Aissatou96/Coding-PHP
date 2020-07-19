
  <div class="container-inscrip">

<div class="header-inscrip">
    <h1>ENREGISTRER UN ETUDIANT</h1>
 </div>
 
 <div class="container-body-inscrip">

 <form action="" method = "POST" id="form-inscrit">

  <div class="form-row">
    <div class="form-group col-md-5 mr-3"> 
      <label for="matr">Matricule</label>
      <input type="text" class="form-control" id="matr" name="matricule">
    </div>

    <div class="form-group col-md-5">
      <label for="prenom">Prénom</label>
      <input type="text" class="form-control" id="prenom" name="prenom">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-5 mr-3">
      <label for="nom">Nom:</label>
      <input type="text" class="form-control" id="nom" name="nom">
    </div>

    <div class="form-group col-md-5">
      <label for="mail">Email</label>
      <input type="email" class="form-control" id="mail" name="email">
    </div>

    <div class="form-row">
    <div class="form-group col-md-5 mr-3">
      <label for="tel">Téléphone:</label>
      <input type="text" class="form-control" id="tel" name="telephone">
    </div>

    <div class="form-group col-md-5">
      <label for="dn">Date Naissance</label>
      <input type="date" class="form-control" id="dn" name="datenaiss">
    </div>

    <div class="form-row">
    <div class="form-group col-md-5 mr-3">
      <label for="te">TypeEtudiant:</label>
      <select name="TypeEtu" id="te">
        <option value="">Choisir le type Etudiant</option>
        <option value="Boursier Logé">Boursier Logé</option>
        <option value="Boursier non Logé">Boursier non Logé</option>
        <option value=" Non Boursier"> Non Boursier</option>
      </select>
    
    </div>
    <div></div>
</div>
<br>
    
   <div> <button type="submit" class="btn btn-primary">ENREGISTRER</button></div>
 
</form>

       
   
         
 </div>

</div>

   