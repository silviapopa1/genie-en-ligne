<?php
class AdminVue extends Vue {
    
    
    public function __construct(){?>
        
    <?php
    }
    
     public function afficheAjouterTuteurs(){?>
    
    <?php
    }

    /*=====================================*/
    /*======GESTION DES RESPONSABLES=======*/
    /*==========DROITS SUPERADMIN==========*/
    /*=====================================*/

     public function afficheListeResponsables(){?>

        <div id="message">
            <?php 
                if($this->getMessage()){
                    $aMessage = $this->getMessage();
                    echo '<div class="alert alert-'.$aMessage[1].'">'.$aMessage[0].'</div>';
                }
            ?>
        </div>
                    
        <div class="col-lg-12">
            <div class="page-header">
                <div class="navbar navbar-default">
                    <h2 class="navbar-text">Rechercher un responsable</h2>
                </div>
            </div>
        </div>
        <div class="col-sm-11 col-sm-offset-1">
            <form id="frmChercherResponsable" method="GET" action="" enctype="" class="form-horizontal" role="form">
                <div class="row">
                    <div class="form-group">
                        <div class="col-sm-5 col-sm-offset-2">
                            <label for="sltRechercherRespCommission" class="col-sm-5 control-label">Commisions scolaires :</label>
                            <div class="col-sm-7 col-md-7">
                                <select id="sltRechercherRespCommission" class="form-control" name="commission">
                                    <option value="">Sélection</option> 
                                </select>
                            </div>
                        </div>
                    </div> <!-- .form-group -->
                </div>  <!-- .row -->  
                <div class="col-xs-3 col-sm-3 col-md-3 pull-right">
                    <button type="submit" id="subChercherProf" class="btn btn-success pull-right">
                    <span class="glyphicon glyphicon-search"></span>Rechercher</button>
                </div> 
                <div class="col-xs-3 col-sm-3 col-md-3 pull-right">
                </div>        
            </form> 
        </div>   

        <div class="contenu">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <div class="">
                            
                        </div>
                    </div>
                </div>
            </div>
            <form >
                <div class="row">
                    <div class="col-lg-12">
                        <table id="tabRechercherProf" class="table table-striped text-center">
                            <tr>
                                <th class="text-center">Prénom</th>
                                <th class="text-center">Nom</th>
                                <th class="text-center">Courriel</th>
                                <th class="text-center">Pseudo</th>
                                <th class="text-center">Mot de passe</th>
                                <th class="text-center">Commission scolaire</th>
                                <th class="text-center">Action</th>
                            </tr>
                            <tr>
                                <td id="txtPrenomTabResp"></td>
                                <td id="txtNomTabPResp"></td>
                                <td id="txtCourrielTabResp"></td>
                                <td id="txtPseudoTabResp"></td>
                                <td id="txtMdpTabResp"></td>
                                <td id="txtCommissionTabResp"></td>
                                <td>
                                    <button type="submit" id="subModifierProfRecherche" class="btn btn-primary btn-xs">
                                        <span title="Modifier" class="glyphicon glyphicon-pencil"></span>
                                    </button>
                                    <button type="submit" id="subSupprimerProfRecherche" class="btn btn-danger btn-xs">
                                        <span title="Supprimer" class="glyphicon glyphicon-remove"></span>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div> <!-- .col-lg-12 -->
                </div> <!-- .row -->
            </form>
            <div class="col-sm-10 col-sm-offset-10">
                <button type="button" id="btnAjouterResp" class="btn btn-success col-sm-offset-1">
                <span class="glyphicon glyphicon-plus"></span>Ajouter</button>
            </div>
        </div> <!-- .contenu -->
    
    <?php
    }

    public function afficheAjouterResponsable(){?>
          
        <div id="message">
            <?php 
                if($this->getMessage()){
                    $aMessage = $this->getMessage();
                    echo '<div class="alert alert-'.$aMessage[1].'">'.$aMessage[0].'</div>';
                }
            ?>
        </div>

        <div class="col-sm-6 col-sm-offset-2">
            
            <div class="col-sm-offset-2 col-sm-9">
                <div class="col-sm-offset-4  col-sm-8">
                    <div class="navbar navbar-default text-center">
                        <h3 class="navbar-text">Ajouter un responsable</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-offset-4 col-sm-8 page-header">
                     
            </div>

            <div class="col-sm-12 col-sm-offset-1">
                <form id="frmAjoutProf" action="" method="POST" enctype="" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="txtAjoutPrenomResp" class="col-sm-4 control-label">Prénom :</label>
                        <div class="col-sm-6">
                            <input type="text" id="txtAjoutPrenomResp" class="form-control" name="prenom" placeholder="Prenom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtAjoutNomResp" class="col-sm-4 control-label">Nom  :</label>
                        <div class="col-sm-6">
                            <input type="text" id="txtAjoutNomResp" class="form-control" name="nom" placeholder="Nom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtAjoutCourrielResp" class="col-sm-4 control-label">Courriel :</label>
                        <div class="col-sm-6">
                            <input type="email" id="txtAjoutCourrielResp" class="form-control" name="courriel" placeholder="Courriel">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sltAjouterCommissionResp" class="col-sm-4 control-label">Commissions scolaires :</label>
                        <div class="col-sm-6">
                            <select multiple  id="sltAjouterCommissionResp" class="form-control col-sm-6" name="commissions">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group"></div>
                    <div class="form-group"></div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-6 text-right">
                             <a href="#" class="btn btn-danger" role="button">
                                <span class="glyphicon glyphicon-remove-circle"></span>Annuler
                            </a>
                            <button type="submit" id="subAjouterResp" class="btn btn-success col-sm-offset-1 ">
                                <span class="glyphicon glyphicon-plus"></span>Ajouter
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    <?php
    }

     public function afficheModifierResponsables(){?>
        
        <div id="message">
            <?php 
                if($this->getMessage()){
                    $aMessage = $this->getMessage();
                    echo '<div class="alert alert-'.$aMessage[1].'">'.$aMessage[0].'</div>';
                }
            ?>
        </div>


        <div class="col-sm-6 col-sm-offset-2">


            <div class="col-sm-offset-3 col-sm-9">
                <div class="col-sm-offset-2  col-sm-9">
                    <div class="navbar navbar-default text-center">
                        <h3 class="navbar-text">Modifier les informations d'un responsable</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-offset-4 col-sm-8 page-header">
                     
            </div>

            <div class="col-sm-12 col-sm-offset-1">
                <form id="frmModifProf" acion="" method="POST" enctype="" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="txtModifPrenomResp" class="col-sm-4 control-label">Prénom :</label>
                        <div class="col-sm-6">
                            <input type="text" id="txtModifPrenomResp" class="form-control" name="prenom" placeholder="Prenom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtModifNomResp" class="col-sm-4 control-label">Nom  :</label>
                        <div class="col-sm-6">
                            <input type="text" id="txtModifNomResp" class="form-control" name="nom" placeholder="Nom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtModifCourrielResp" class="col-sm-4 control-label">Courriel :</label>
                        <div class="col-sm-6">
                            <input type="email" id="txtModifCourrielResp" class="form-control" name="courriel" placeholder="Courriel">
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="txtModifPseudoResp" class="col-sm-4 control-label">Pseudo :</label>
                        <div class="col-sm-6">
                            <input type="email" id="txtModifPseudoResp" class="form-control" name="courriel" placeholder="Pseudo">
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="txtModifPseudoResp" class="col-sm-4 control-label">Mot de passe :</label>
                        <div class="col-sm-6">
                            <input type="email" id="txtModifPseudoResp" class="form-control" name="mdp" placeholder="Courriel">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sltModifEcoleProf" class="col-sm-4 control-label">Commissions scloaires :</label>
                        <div class="col-sm-6">
                            <select multiple  id="sltModifRespCommission" name="commissions" class="form-control col-sm-6">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group"></div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-6 text-right">
                            <a href="#" class="btn btn-danger" role="button">
                                <span class="glyphicon glyphicon-remove-circle"></span>Annuler
                            </a>
                            <button type="submit" id="subModifierProf" class="btn btn-success col-sm-offset-1">
                                <span class="glyphicon glyphicon-ok"></span> Modifier
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        
    <?php
    }

    public function afficheListeCommissions(){?>
    
        <div id="message">
            <?php 
                if($this->getMessage()){
                    $aMessage = $this->getMessage();
                    echo '<div class="alert alert-'.$aMessage[1].'">'.$aMessage[0].'</div>';
                }
            ?>
        </div>    

        <div class="col-lg-12">
            <div class="page-header">
                <div class="navbar navbar-default">
                    <h2 class="navbar-text">Rechercher une commission scolaire</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <form id="form-trouver-tuteur" class="form-horizontal" role="form">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="select-mois" class="col-xs-3 col-sm-3 col-md-5 control-label">MRC :</label>
                                <div class="col-sm-9 col-md-7">

                                    <select class="form-control" id="select-mois">
                                        <option value="">Sélection</option>
                                        <option value="1">Laval</option>
                                        <option value="2">Montcalm</option>
                                        <option value="3">Pontiac</option>
                                        <option value="4">Rivière-du-loup</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="select-annee" class="col-xs-3 col-sm-3 col-md-5 control-label">Nom :</label>
                                <div class="col-sm-9 col-md-7">
                                    <select class="form-control" id="select-annee">
                                        <option value="1">Gatineau</option>
                                        <option value="2">Montréal</option>
                                        <option value="3">Sherbrooke</option>
                                        <option value="4">Val-d'or</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="select-matiere" class="col-xs-3 col-sm-3 col-md-5 control-label">Responsable :</label>
                                <div class="col-sm-9 col-md-7">
                                    <select class="form-control" id="select-matiere">
                                        <option value="1">Louis Riel</option>
                                        <option value="2">Ste-Béatrice</option>
                                        <option value="3">Valcartier</option>
                                    </select>
                                </div>
                            </div>
                        </div> <!-- .form-group -->
                    </div> <!-- .col-lg-12 -->
                </div>  <!-- .row -->  
                <div class="col-xs-3 col-sm-3 col-md-3 pull-right">
                    <button type="button" id="rechercherTuteur" class="btn btn-success pull-right">
                    <span class="glyphicon glyphicon-search"></span>Rechercher</button>
                </div> 
                <div class="col-xs-3 col-sm-3 col-md-3 pull-right">
                </div>        
            </form> 
        </div>   

    <?php   
    }

    /*================================================*/
    /*============GESTION DES PROFESSEURS=============*/
    /*==DROITS RESPONSABLES DES COMMISSIONS SCOLAIRE==*/
    /*================================================*/
    
    public function afficheListeProfesseurs(){?>
        
        <div id="message">
            <?php 
                if($this->getMessage()){
                    $aMessage = $this->getMessage();
                    echo '<div class="alert alert-'.$aMessage[1].'">'.$aMessage[0].'</div>';
                }
            ?>
        </div>
                    
        <div class="col-lg-12">
            <div class="page-header">
                <div class="navbar navbar-default">
                    <h2 class="navbar-text">Rechercher un professeur</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <form id="frmChercherProf" method="GET" action="" enctype="" class="form-horizontal" role="form">
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="txtRechercherProfCourriel" class="col-xs-3 col-sm-3 col-md-5 control-label">Courriel :</label>
                            <div class="col-sm-9 col-md-7">
                                 <input type="email" id="txtRechercherProfCourriel" name="courriel" class="form-control" placeholder="Courriel" pattern="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="txtRechercherProfNom" class="col-xs-3 col-sm-3 col-md-5 control-label">Nom :</label>
                            <div class="col-sm-9 col-md-7">
                                 <input type="text" id="txtRechercherProfNom" name="nom" class="form-control" placeholder="Nom" pattern="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="sltRechercherProfEcole" class="col-xs-3 col-sm-3 col-md-5 control-label">École :</label>
                            <div class="col-sm-9 col-md-7">
                                <select id="sltRechercherEcoleProf" class="form-control" name="ecole">
                                    <option value="">Sélection</option> 
                                </select>
                            </div>
                        </div>
                    </div> <!-- .form-group -->
                </div>  <!-- .row -->  
                <div class="col-xs-3 col-sm-3 col-md-3 pull-right">
                    <button type="submit" id="subChercherProf" class="btn btn-success pull-right">
                    <span class="glyphicon glyphicon-search"></span>Rechercher</button>
                </div> 
                <div class="col-xs-3 col-sm-3 col-md-3 pull-right">
                </div>        
            </form> 
        </div>   

            <div class="contenu">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <div class="">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table id="tabRechercherProf" class="table table-striped text-center">
                        <tr>
                            <th class="text-center">Prénom</th>
                            <th class="text-center">Nom</th>
                            <th class="text-center">Courriel</th>
                            <th class="text-center">Commission scolaire</th>
                            <th class="text-center">École</th>
                            <th class="text-center">Matière</th>
                            <th class="text-center">Action</th>
                        </tr>
                        <tr>
                            <td id="txtPrenomTabProf"></td>
                            <td id="txtNomTabProf"></td>
                            <td id="txtCourrielTabProf"></td>
                            <td id="txtCommissionTabProf"></td>
                            <td id="txtEcoleTabProf"></td> <!-- Si plus d'une afficher valeurs multiples -->
                            <td id="txtMatiereTabProf"></td> <!-- Si plus d'une afficher valeurs multiples -->
                            <td>
                                <button type="submit" id="subModifierProfRecherche" class="btn btn-primary btn-xs"><span title="Modifier" class="glyphicon glyphicon-pencil"></span></button>
                                <button type="submit" id="subSupprimerProfRecherche" class="btn btn-danger btn-xs"><span title="Supprimer" class="glyphicon glyphicon-remove"></span></button>
                                <!-- <a href="#" title="">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                <a href="#" class="supprimerTuteur">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </a> -->
                            </td>
                        </tr>
                    </table>
                </div> <!-- .col-lg-12 -->
            </div> <!-- .row -->
            <div class="col-sm-10 col-sm-offset-10">
                <button type="button" id="btnAjouterProf" class="btn btn-success col-sm-offset-1">
                <span class="glyphicon glyphicon-plus"></span>Ajouter</button>
            </div>
        </div> <!-- .contenu -->
    <?php
    }
    
    public function afficheAjouterProfesseur(){?>
          
        <div id="message">
            <?php 
                if($this->getMessage()){
                    $aMessage = $this->getMessage();
                    echo '<div class="alert alert-'.$aMessage[1].'">'.$aMessage[0].'</div>';
                }
            ?>
        </div>

        <div class="col-sm-6 col-sm-offset-2">
            
            <div class="col-sm-offset-2 col-sm-9">
                <div class="col-sm-offset-4  col-sm-8">
                    <div class="navbar navbar-default text-center">
                        <h3 class="navbar-text">Ajouter un professeur</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-offset-4 col-sm-8 page-header">
                     
            </div>

            <div class="col-sm-12 col-sm-offset-1">
                <form id="frmAjoutProf" action="" method="POST" enctype="" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="txtAjoutPrenomProf" class="col-sm-4 control-label">Prénom :</label>
                        <div class="col-sm-6">
                            <input type="text" id="txtAjoutPrenomProf" class="form-control" name="prenom" placeholder="Prenom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtAjoutNomProf" class="col-sm-4 control-label">Nom  :</label>
                        <div class="col-sm-6">
                            <input type="text" id="txtAjoutNomProf" class="form-control" name="nom" placeholder="Nom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtAjoutCourrielProf" class="col-sm-4 control-label">Courriel :</label>
                        <div class="col-sm-6">
                            <input type="email" id="txtAjoutCourrielProf" class="form-control" name="courriel" placeholder="Courriel">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sltAjouterEcole" class="col-sm-4 control-label">Écoles :</label>
                        <div class="col-sm-6">
                            <select multiple  id="sltAjouterEcole" class="form-control col-sm-6" name="ecoles">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div id="chkAddDiv" class="form-group">
                        <label for="matieres" class="col-sm-4 control-label">Matières :</label>
                        <div class="col-sm-8">
                            <div class="checkbox-inline col-sm-4">
                                <label for="chkAjoutFran">
                                <input type="checkbox" id="chkAjoutFran" name="ajoutMatières[]" value="francais">
                                   Français
                                </label>
                            </div>
                            <div class="checkbox-inline col-sm-4">
                                <label for="chkAjoutMath">
                                <input type="checkbox" id="chkAjoutMath" name="ajoutMatières[]" value="mathematique">
                                   Mathématique
                                </label>
                            </div>
                        </div>
                        <label class="col-sm-4 control-label"></label>
                        <div class="col-sm-8">
                            <div class="checkbox-inline col-sm-4">
                                <label for="chkAjoutChim">
                                <input type="checkbox" id="chkAjoutChim" name="ajoutMatières[]" value="chimie">
                                   Chimie
                                </label>
                            </div>
                            <div class="checkbox-inline col-sm-4">
                                <label for="chkAjoutPhys">
                                <input type="checkbox" id="chkAjoutPhys" name="ajoutMatières[]" value="physique">
                                   Physique
                                </label>
                            </div>
                        </div>
                         <label class="col-sm-4 control-label"></label>
                        <div class="col-sm-8">
                            <div class="checkbox-inline col-sm-4">
                                <label for="chkAjoutHist">
                                <input type="checkbox" id="chkAjoutHist" name="ajoutMatières[]" value="histoire">
                                   Histoire
                                </label>
                            </div>
                            <div class="checkbox-inline col-sm-4">
                                <label for="chkAjoutGeo">
                                <input type="checkbox" id="chkAjoutGeo" name="ajoutMatières[]" value="geographie">
                                   Géographie
                                </label>
                            </div>
                        </div>
                        <label class="col-sm-4 control-label"></label>
                        <div class="col-sm-8">
                            <div class="checkbox-inline col-sm-4">
                                <label for="chkAjoutAng">
                                <input type="checkbox" id="chkAjoutAng" name="ajoutMatières[]" value="anglais">
                                   Anglais
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group"></div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-6 text-right">
                             <a href="#" class="btn btn-danger" role="button">
                                <span class="glyphicon glyphicon-remove-circle"></span>Annuler
                            </a>
                            <button type="submit" id="subAjouterProf" class="btn btn-success col-sm-offset-1">
                                <span class="glyphicon glyphicon-plus"></span> Ajouter
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    <?php
    }

    public function afficheModifierProfesseurs(){?>
        
        <div id="message">
            <?php 
                if($this->getMessage()){
                    $aMessage = $this->getMessage();
                    echo '<div class="alert alert-'.$aMessage[1].'">'.$aMessage[0].'</div>';
                }
            ?>
        </div>


        <div class="col-sm-6 col-sm-offset-2">


            <div class="col-sm-offset-3 col-sm-9">
                <div class="col-sm-offset-2  col-sm-9">
                    <div class="navbar navbar-default text-center">
                        <h3 class="navbar-text">Modifier les informations d'un professeur</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-offset-4 col-sm-8 page-header">
                     
            </div>

            <div class="col-sm-12 col-sm-offset-1">
                <form id="frmModifProf" acion="" method="POST" enctype="" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="txtModifPrenomProf" class="col-sm-4 control-label">Prénom :</label>
                        <div class="col-sm-6">
                            <input type="text" id="txtModifPrenomProf" class="form-control" name="prenom" placeholder="Prenom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtModifNomProf" class="col-sm-4 control-label">Nom  :</label>
                        <div class="col-sm-6">
                            <input type="text" id="txtModifNomProf" class="form-control" name="nom" placeholder="Nom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtModifCourrielProf" class="col-sm-4 control-label">Courriel :</label>
                        <div class="col-sm-6">
                            <input type="email" id="txtModifCourrielProf" class="form-control" name="courriel" placeholder="Courriel">
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="txtModifPseudoProf" class="col-sm-4 control-label">Pseudo :</label>
                        <div class="col-sm-6">
                            <input type="email" id="txtModifPseudoProf" class="form-control" name="courriel" placeholder="Pseudo">
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="txtModifMdpProf" class="col-sm-4 control-label">Mot de passe :</label>
                        <div class="col-sm-6">
                            <input type="email" id="txtModifMdpProf" class="form-control" name="mdp" placeholder="Mot de passe">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sltModifEcoleProf" class="col-sm-4 control-label">Écoles :</label>
                        <div class="col-sm-6">
                            <select multiple  id="sltModifEcoleProf" name="ecoles" class="form-control col-sm-6">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div id="chkModDiv" class="form-group">
                        <label for="matiere" class="col-sm-4 control-label">Matières :</label>
                        <div class="col-sm-8">
                            <div class="checkbox-inline col-sm-4">
                                <label for="chkModifFran">
                                <input type="checkbox" id="chkModifFran" name="modifMatieres[]" value="francais">
                                   Français
                                </label>
                            </div>
                            <div class="checkbox-inline col-sm-4">
                                <label for="chkModifMath">
                                <input type="checkbox" id="chkModifMath" name="modifMatieres[]" value="mathematique">
                                   Mathématique
                                </label>
                            </div>
                        </div>
                        <label class="col-sm-4 control-label"></label>
                        <div class="col-sm-8">
                            <div class="checkbox-inline col-sm-4">
                                <label for="chkModifChimie">
                                <input type="checkbox" id="chkModifChimie" name="modifMatieres[]" value="chimie">
                                   Chimie
                                </label>
                            </div>
                            <div class="checkbox-inline col-sm-4">
                                <label for="chkModifPhy">
                                <input type="checkbox" id="chkModifPhy" name="modifMatieres[]" value="physique">
                                   Physique
                                </label>
                            </div>
                        </div>
                         <label class="col-sm-4 control-label"></label>
                        <div class="col-sm-8">
                            <div class="checkbox-inline col-sm-4">
                                <label for="chkModifHist">
                                <input type="checkbox" id="chkModifHist" name="modifMatieres[]" value="histoire">
                                   Histoire
                                </label>
                            </div>
                            <div class="checkbox-inline col-sm-4">
                                <label for="chkModifGeo">
                                <input type="checkbox" id="chkModifGeo" name="modifMatieres[]" value="geographie">
                                   Géographie
                                </label>
                            </div>
                        </div>
                        <label class="col-sm-4 control-label"></label>
                        <div class="col-sm-8">
                            <div class="checkbox-inline col-sm-4">
                                <label for="chkModifAng">
                                <input type="checkbox" id="chkModifAng" name="modifMatieres[]" value="anglais">
                                   Anglais
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group"></div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-6 text-right">
                            <a href="#" class="btn btn-danger" role="button">
                                <span class="glyphicon glyphicon-remove-circle"></span>Annuler
                            </a>
                            <button type="submit" id="subModifierProf" class="btn btn-success col-sm-offset-1">
                                <span class="glyphicon glyphicon-ok"></span> Modifier
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        
    <?php
    }


    /*================================================*/
    /*============GESTION DES TUTEURS=================*/
    /*==========DROITS DES PROFESSEURS================*/
    /*================================================*/

     public function afficheSupprimerUtilisateurs(){?>
        
        <div id="message">
            <?php 
                if($this->getMessage()){
                    $aMessage = $this->getMessage();
                    echo '<div class="alert alert-'.$aMessage[1].'">'.$aMessage[0].'</div>';
                }
            ?>
        </div>

        <div class="col-sm-6 col-sm-offset-2">
            
            <div class="col-sm-offset-3 col-sm-9">
                <div class="col-sm-offset-2  col-sm-9">
                    <div class="navbar navbar-default text-center">
                        <h3 class="navbar-text">Supprimer un utilisateur</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-offset-4 col-sm-8 page-header">
                     
            </div>
            <div class="col-sm-12 col-sm-offset-1">
                <form id="frmSupprimerAdmin" class="form-horizontal" action="" method="POST" enctype="" role="form">
                    <div class="form-group">
                        <label for="txtSupprimerPrenom" class="col-sm-4 control-label">Prénom :</label>
                        <div class="col-sm-6">
                            <span id="txtSupprimerPrenom" name="prenom"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtSupprimerNom" class="col-sm-4 control-label">Nom  :</label>
                        <div class="col-sm-6">
                            <span id="txtSupprimerNom" name="nom"></span>
                        </div>
                    </div>
                    <div class="form-group"></div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-6 text-right">
                             <a href="#" class="btn btn-danger" role="button">
                                <span class="glyphicon glyphicon-remove-circle"></span>Annuler
                            </a>
                            <button type="submit" id="subValiderSupprimerProf" class="btn btn-success col-sm-offset-1">
                                <span class="glyphicon glyphicon-ok"></span> Supprimer
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php
    }

      
    
    public function afficheListeEcoles(){?>
        
        <div id="message">
            <?php 
                if($this->getMessage()){
                    $aMessage = $this->getMessage();
                    echo '<div class="alert alert-'.$aMessage[1].'">'.$aMessage[0].'</div>';
                }
            ?>
        </div>    

        <div class="col-lg-12">
            <div class="page-header">
                <div class="navbar navbar-default">
                    <h2 class="navbar-text">Rechercher une école</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <form id="form-trouver-tuteur" class="form-horizontal" role="form">
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="select-mois" class="col-xs-3 col-sm-3 col-md-5 control-label">MRC :</label>
                            <div class="col-sm-9 col-md-7">
                                <select class="form-control" id="select-mois">
                                    <option value="">Sélection</option>
                                    <option value="1">Laval</option>
                                    <option value="2">Montcalm</option>
                                    <option value="3">Pontiac</option>
                                    <option value="4">Rivière-du-loup</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="select-annee" class="col-xs-3 col-sm-3 col-md-5 control-label">Nom :</label>
                            <div class="col-sm-9 col-md-7">
                                <select class="form-control" id="select-annee">
                                    <option value="1">Gatineau</option>
                                    <option value="2">Montréal</option>
                                    <option value="3">Sherbrooke</option>
                                    <option value="4">Val-d'or</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="select-matiere" class="col-xs-3 col-sm-3 col-md-5 control-label">École :</label>
                            <div class="col-sm-9 col-md-7">
                                <select class="form-control" id="select-matiere">
                                    <option value="1">Louis Riel</option>
                                    <option value="2">Ste-Béatrice</option>
                                    <option value="3">Valcartier</option>
                                </select>
                            </div>
                        </div>
                    </div> <!-- .form-group -->
                </div>  <!-- .row -->  
                <div class="col-xs-3 col-sm-3 col-md-3 pull-right">
                    <button type="button" id="rechercherTuteur" class="btn btn-success pull-right">
                    <span class="glyphicon glyphicon-search"></span>Rechercher</button>
                </div> 
                <div class="col-xs-3 col-sm-3 col-md-3 pull-right">
                </div>        
            </form> 
        </div>   

    <?php
    }
    
    public function afficheFormulaireSelectionModulesCommission(){?>
    
    <?php
    }


    
    //TODO: Ajouter des méthodes au besoin
}
?>