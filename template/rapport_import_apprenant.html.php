
<style>
.pagination{
    margin-top: 2%;
    display: flex;
    column-gap: 10px;
}
.container-rapport {
  width: 80%;
  margin: 20px auto;
  font-size: 0.7rem!important;
}

table {
  width: 100%;
  border-collapse: collapse;
  font-size: 0.7rem!important;
}

th, td {
  padding: 12px 15px;
  text-align: left;
  border-bottom: 1px solid #ddd;
  font-size: 0.7rem!important;
}

thead {
  background-color: #333;
  color: #fff;
  font-size: 0.7rem!important;
}

tbody tr:nth-child(even) {
  background-color: #f2f2f2;
}

tbody tr:hover {
  background-color: #ddd;
}
.activer{
    background-color: rgba(0, 255, 0, 0.2);
    color: green;
    
}
.desactiver{
    background-color: rgba(0, 0, 255, 0.2);
    color: red;
}
.header-rappor{
    display: flex;
    column-gap: 5px;
}
.header-rappor a{
    text-decoration: none;
    padding: 0.5% 1%;
    border: none;
    color: white;
    font-size: 0.8rem;

}

.rap-link1{
    background-color: rgba(0, 255, 0, 0.5);
    color: black!important;
}
.rap-link2,.rap-link3,.rap-link4,.rap-link5{
    background-color: rgba(255, 0, 0, 0.5);
}
</style>
<div class="container-rapport">
    <div class="header-rappor">
        <a class="rap-link1" href="/rapport-import">Import réussit(<?= count($rapport_import['importer']) ?? 0 ?>)</a>
        <a class="rap-link2" href="/rapport-import">Erreur champs requis (<?= count($rapport_import['err_requis']) ?? 0 ?>) </a>
        <a class="rap-link3" href="/rapport-import">Erreur doublon (<?= count($rapport_import['err_doublon_all']) ?? 0 ?>)</a>
        <a class="rap-link4" href="/rapport-import">Doublon dans le fichier (<?= count($rapport_import['err_doublon_new']) ?? 0 ?>)</a>
        <a class="rap-link5" href="/rapport-import">Erreur email (<?= count($rapport_import['err_send_mail']) ?? 0 ?>)</a>
    </div>
  <table>
    <thead>
      <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Date de naissance</th>
        <th>Téléphone</th>
        <th>Référentiel</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
    <?php 
            if(isset($rapport_import) && !empty($rapport_import)){
                foreach($importerPaginate as $key => $value){
        ?>
    <tr>
        <td><?= $value['nom'] ?></td>
        <td><?= $value['prenom'] ?></td>
        <td><?= $value['email'] ?></td>
        <td><?= date('d-m-Y',strtotime($value['datenaiss'])) ?></td>
        <td><?= $value['tel'] ?></td>
        <td><?= $value['referentiel'] ?></td>
        <td class="activer">Importer</td>
    </tr>
        <?php
                }
            } 
        ?>
    </tbody>
  </table>
  <div>
  <?php 
        genererPaginationTemplate($uri_, $current_page, $nbrPage,$per_page, $rapport_import['importer']);
    ?>
  </div>

</div>