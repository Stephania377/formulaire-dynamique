<?php session_start(); ?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" style="text/css" href="../reservation.css" />

<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

<div class="container-fluid">
    <div class="row">
    <div id="imgbg" class="col-5">
          logo
          <h2 style="text-align:center; margin-top: 25%; margin-bottom: 10%;">TUP Trans-frontalières avec des options</h2>
          <p style="font-size: 18px;margin-bottom: 5%;">-> SARL/SAS : contrats:  PV de sessions des parts, Mises à jour des status, PV de dissolution/TUP, Formulaire M2, Annonce légale  </p>
          <p style="font-size: 18px;margin-bottom: 5%;"">-> SASU/SARLU : contrats : PV de sessions des parts, Mises à jour des status, PV de dissolution/TUP, Formulaire M2, Annonce légale  </p>
        </div>
        <div class="col-7">
            <h2 class="fs-title tittre"> TUP-transfrontalière pour SAS: </h2> 
            <form action="test.php" method="post">
                <div class="form-group">
                    <div class="wpb_wrapper" style="text-align: center;">
                        <p class="titreb">A PROPOS DE L'ASSOCIÉ</p>
                    </div>
                    <select class="form-control" name="societe" id="societe" placeholder="test">
                        <option value="">Civilité</option>
                        <option value="SAS">Monsieur</option>
                        <option value="SARL">Madame</option>
                        <option value="SASU">Mademoiselle</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="nom"  id="nom" placeholder="Nom" required /><br/>
                    <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom" required /><br/>
                    <input type="text" class="form-control" name="adr" id="adr" placeholder="Adresse" required/><br/>
                    <input type="number" class="form-control" name="code" id="code" placeholder="Code postal" required /> <br/>
                    <input type="text" class="form-control" name="ville" id="ville" placeholder="Ville" required /> <br/>
                    <input type="text" class="form-control" name="date" id="date" placeholder="Date de naissance" onfocus="(this.type='date')" required /><br/>
                    <input type="text" class="form-control" name="villen" id="villen" placeholder="Ville de naissance" required /> <br/>
                    <input type="text" class="form-control" name="paysn" id="paysn" placeholder="Pays de naissance" required /> <br/>
                    <input type="text" class="form-control" name="nat" id="nat" placeholder="Nationalité" required /> <br/>

                </div>
                
                <button type="submit" id="choisir" class="valider" name="continuer"> Valider <img src="ajaxloader.gif" alt="chargement" id="chgt"> </button>
            </form>
        </div>
</div>


<?php
if(isset($_POST['continuer'])){
  header('Location: /formulaire4.php');
}



?>

<style>
  .test{
      width:100%;
      height:102% !important;
  }
    label{
        position: relative;
        cursor: pointer;
        color: #666;
        font-size: 12px !important;
        font-weight: normal !important;
    }

    .tittre{
        color:#a25610 !important;
        font-size:25px !important;
        margin-bottom:5%;
        text-align: center;
        font-family: "FontAwesome";
    }
    #choisir{
        background-color:#a25610 !important;
        color:#ffffff !important;
        border:solid 2px #a25610 !important;
        border-radius: 4px;
        width: 50%;
        height :5%;
        margin: auto;
        font-size:16px;
        transition: all 0.5s ease-out;
        display: flex;
        justify-content: center;
        align-items: center;
    }

  #choisir:hover, #choisir:focus{
    background-color:#ffffff !important;
    color:#a25610 !important;
    border:solid 2px #a25610 !important;
  }

  .row{
    margin-bottom: 10%;
  }

    #chgt{
        display:none;
    }
  
  .titreb{
    text-align: center; 
    font-weight:bold;
  }
  #imgbg{
    background-color:#ff5300;
    color: #ffffff;
  }
</style>
