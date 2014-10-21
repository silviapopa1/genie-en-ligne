<?php
    class UtilisateurControleur extends Controleur {
        
        public function __construct($reqAction="erreur404", $reqId=""){            
            $this->setReqAction($reqAction);
            $this->setReqId($reqId);
        }
        
        public function gerer(){
            switch($this->getReqAction()){                

                case 'accueil':
                    $this -> accueil();
                    break;
                case 'bienvenue':
                    $this -> bienvenue();
                    break;
                case 'logout':
                    $this -> logout();
                    break;
                case 'profil':
                    $this -> profil();
                    break;
                case 'modifierProfil':
                    $this -> modifierProfil();
                    break;

                //TODO: Ajouter des cas au besoin

                //L'inscription des utilisateurs normaux et invités par courriel se fera par AJAX
                //La récupération de mot de passe sera aussi faite par AJAX
                default:
                    $this->erreur404();
                    break;
            }
        }
        
    
        
		private function accueil() {            
			$oVue = new UtilisateurVue();
            
            //Si login soumis, gestion du login
            if(isset($_POST['subLogin'])){
                $sPseudo = $_POST['txtPseudo'];
                $sPass = sha1($_POST['txtPass']);
                
                $oUtilisateur = new Utilisateur(0, $sPseudo, $sPass);
                if($oUtilisateur->validerInfosConnexion()){
                    $_SESSION['user_id'] = $oUtilisateur->getUserId();
                    
                    $oUtilisateur->ajouterActiviteLogin('login');
                    
                    if($oUtilisateur->getRole() < 3){
                        $oVue -> afficheBienvenue();
                    }
                    else{
                        header("location:".WEB_ROOT."/admin/bienvenue.html");
                    }
                }
                else{
                    $oVue -> setMessage("On ne retrouve pas ce compte", "danger");
                    $oVue -> afficheAccueil();
                }
            }
            //Si rien soumis, afficher l'accueil
            else{
                $oVue -> afficheAccueil();
            }
		}
        
        private function bienvenue(){
            $oVue = new UtilisateurVue();
			$oVue -> afficheBienvenue();
        }
        
        private function logout(){
            $oVue = new UtilisateurVue();
            
            //TODO: Détruire la session
            //TODO: update table activite_login
            
            $oVue -> setMessage("Votre session a bel et bien été fermée", "success");
			$oVue -> afficheAccueil();
        }
        
        private function profil(){
            $oVue = new UtilisateurVue();
            
            //TODO: Aller chercher les informations relatives au compte utilisateur (exemple mot de passe)
            
			$oVue -> afficheProfil();
        }
        
        private function modifierProfil(){
            $oVue = new UtilisateurVue();
            
            //TODO: Modifier les infos dans la DB
                //Si ok
                    $oVue -> setMessage("Les infos ont été enregistrées", "success");
                //Sinon
                    $oVue -> setMessage("Échec", "danger");
            
			$oVue -> afficheProfil();
        }        
       
		//TODO:  Placer les autres méthodes du controleur ici.
    }
?>