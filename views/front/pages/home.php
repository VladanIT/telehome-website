<div id="filter">
    <div class="btnContainer">
        <div class="form-group btnButtons col-lg-3 col-xs-12 col-xl-3">
            <input type="button" id="btnSearchById" name="btnSearchById" class="btn btn-primary" value="Pretraga po sifri korisnika"/>
        </div>
        <div class="form-group btnButtons col-lg-3 col-xs-12 col-xl-3">
            <input type="button" id="btnInsertCostumer" name="btnInsertCostumer" class="btn btn-primary" value="Unesi novog potrosaca"/>
        </div>
        <div class="form-group btnButtons col-lg-3 col-xs-12 col-xl-3">
            <input type="button" id="btnInsertIntervention" name="btnInsertIntervention" class="btn btn-primary" value="Unesi intervenciju"/>
        </div>
    </div>

    <div class="filter_form hidden" id="filter_form">
        <div class="form-group col-lg-3 col-xs-12 col-xl-3">
            <input type="text" id="idConsumer" name="idConsumer" class="form-control" placeholder="Sifra korisnika"/>
        </div>
        <div class="form-group">
            <input type="button" id="btnSearch" name="btnSearch" class="btn btn-primary" value="Trazi"/>
        </div>
    </div>

    <div class="insert_form hidden" id="insert_form">
        <div class="form-group col-lg-3 col-xs-12 col-xl-3">
            <input type="text" id="consumerId" name="consumerId" class="form-control" placeholder="Sifra korisnika"/>
        </div>
        <div class="form-group col-lg-3 col-xs-12 col-xl-3">
            <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Ime korisnika"/>
        </div>
        <div class="form-group col-lg-3 col-xs-12 col-xl-3">
            <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Prezime korisnika"/>
        </div>
        <div class="form-group col-lg-3 col-xs-12 col-xl-3">
            <input type="text" id="address" name="address" class="form-control" placeholder="Adresa korisnika"/>
        </div>
        <div class="form-group col-lg-3 col-xs-12 col-xl-3">
            <input type="text" id="place" name="place" class="form-control" placeholder="Mesto"/>
        </div>
        <div class="form-group col-lg-3 col-xs-12 col-xl-3">
            <textarea id="description" name="description" class="form-control" placeholder="Opis"></textarea>
        </div>
        <div class="form-group col-lg-3 col-xs-12 col-xl-3">
            <input type="date" id="date" name="date" class="form-control" placeholder="Datum"/>
        </div>
        <div class="form-group col-lg-3 col-xs-12 col-xl-3">
            <input type="text" id="packet" name="packet" class="form-control" placeholder="Paket"/>
        </div>
        <div class="form-group">
            <input type="button" id="btnInsert" name="btnInsert" class="btn btn-primary" value="Dodaj"/>
        </div>
    </div>

    <div class="insert_intervention_form hidden" id="insert_intervention_form">
        <div class="form-group col-lg-3 col-xs-12 col-xl-3">
            <input type="text" id="consumerIdIntervention" name="consumerIdIntervention" class="form-control" placeholder="Sifra korisnika"/>
        </div>
        <div class="form-group col-lg-3 col-xs-12 col-xl-3">
            <textarea id="descriptionIntervention" name="descriptionIntervention" class="form-control" placeholder="Opis"></textarea>
        </div>
        <div class="form-group col-lg-3 col-xs-12 col-xl-3">
            <input type="date" id="dateIntervention" name="dateIntervention" class="form-control" placeholder="Datum"/>
        </div>
        <div class="form-group">
            <input type="button" id="btnInsertIntervention" name="btnInsertIntervention" class="btn btn-primary" value="Dodaj"/>
        </div>
    </div>
    
</div>
<div id="content">
    <?php
        include "models/users/users.php";
    ?>
    <div class="content-label">
        <h1>Tabela intervencija</h1>
    </div>
    <div class="sort">
        <select class="form-control" name="sortConsumers" id="sortConsumers">
            <option value="" disabled selected>Odaberi mesec</option>
            <option value="1">Januar</option>
            <option value="2">Februar</option>
            <option value="3">Mart</option>
            <option value="4">April</option>
            <option value="5">Maj</option>
            <option value="6">Jun</option>
            <option value="7">Jul</option>
            <option value="8">Avgust</option>
            <option value="9">Septembar</option>
            <option value="10">Oktobar</option>
            <option value="11">Novembar</option>
            <option value="12">Decembar</option>
        </select>
    </div>
    <table class="content-of-users" id="content-of-users">
        <tr>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Sifra</th>
            <th>Adresa</th>
            <th>Mesto</th>
            <th>Opis</th>
            <th>Datum</th>
            <th>Info</th>
        </tr>

        <?php
            $result = getUsers();

            foreach($result as $r):
        ?>

        
        <tr>
            <td><?= $r->first_name ?></td>
            <td><?= $r->last_name ?></td>
            <td><?= $r->consumerId ?></td>
            <td><?= $r->address ?></td>
            <td><?= $r->place ?></td>
            <td><?= $r->description ?></td>
            <td><?= date("d-M-Y", strtotime($r->date)) ?></td>
            <td><a href="index.php?page=consumer&value=<?= $r->id_consumer ?>">Info</a></td>
        </tr>
        

        <?php
            endforeach;
        ?>
    </table>
</div>
