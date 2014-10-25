<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

	<head>

		<title>Test unitaire</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link href="../css/global.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
		<div id="header">
			<h1>Test - Modèles Statistiques</h1>
		</div>
		<div id="contenu">
			<?php 
                // Placer vos tests unitaires ici...
                /* La classe à tester */
				require_once("../modeles/Statistique.class.php");
				require_once("../lib/TypeException.class.php");
            ?>
			
			<h2>rechercherNbVisitesParMois($user_id) => integer 25</h2>
				<?php 
				
					try{
						$oStatistique = new Statistique();
						$oStatistique->rechercherNbVisitesParMois(25);
						
					}catch(Exception $e){
						echo "<p>".$e->getMessage()."</p>";
					}
				
				?>
				
				
			<h2>rechercherNbVisitesParMois($user_id) => chaine "Silvia"</h2>
				<?php 
				
					try{
						$oStatistique = new Statistique();
						$oStatistique->rechercherNbVisitesParMois("Silvia");
						
					}catch(Exception $e){
						echo "<p>".$e->getMessage()."</p>";
					}
				
				?>
				<br/>
				<h2>rechercherNbTutoratsCrees($commmission_ID) => integer 25</h2>
				<?php 
				
					try{
						$oStatistique = new Statistique();
						$oStatistique->rechercherNbTutoratsCrees(25);
						
					}catch(Exception $e){
						echo "<p>".$e->getMessage()."</p>";
					}
				
				?>
				
				
			<h2>rechercherNbTutoratsCrees($commmission_ID) => chaine "Silvia"</h2>
				<?php 
				
					try{
						$oStatistique = new Statistique();
						$oStatistique->rechercherNbTutoratsCrees("Silvia");
						
					}catch(Exception $e){
						echo "<p>".$e->getMessage()."</p>";
					}
				
				?>
				<br/>
				<h2>rechercherNbTutoratsApprouves($commission_ID) => integer 30</h2>
				<?php 
				
					try{
						$oStatistique = new Statistique();
						$oStatistique->rechercherNbTutoratsApprouves(30);
						
					}catch(Exception $e){
						echo "<p>".$e->getMessage()."</p>";
					}
				
				?>
				
				
			<h2>rechercherNbTutoratsApprouves($commission_ID) => chaine "Silvia"</h2>
				<?php 
				
					try{
						$oStatistique = new Statistique();
						$oStatistique->rechercherNbTutoratsApprouves("Silvia");
						
					}catch(Exception $e){
						echo "<p>".$e->getMessage()."</p>";
					}
				
				?>
				<br/>
				<h2>rechercherNbTuteursConversation($iEleveId) => integer 1</h2>
				<?php 
				
					try{
						$oStatistique = new Statistique();
						$oStatistique->rechercherNbTuteursConversation(1);
						
					}catch(Exception $e){
						echo "<p>".$e->getMessage()."</p>";
					}
				
				?>
				
				
			<h2>rechercherNbTuteursConversation($iEleveId) => chaine "Silvia"</h2>
				<?php 
				
					try{
						$oStatistique = new Statistique();
						$oStatistique->rechercherNbTuteursConversation("Silvia");
						
					}catch(Exception $e){
						echo "<p>".$e->getMessage()."</p>";
					}
				
				?>
				<br/>
				<h2>rechercherNbElevesConversation($iTuteurId) => integer 5</h2>
				<?php 
				
					try{
						$oStatistique = new Statistique();
						$oStatistique->rechercherNbElevesConversation(5);
						
					}catch(Exception $e){
						echo "<p>".$e->getMessage()."</p>";
					}
				
				?>
				
				
			<h2>rechercherNbElevesConversation($iTuteurId) => chaine "Silvia"</h2>
				<?php 
				
					try{
						$oStatistique = new Statistique();
						$oStatistique->rechercherNbElevesConversation("Silvia");
						
					}catch(Exception $e){
						echo "<p>".$e->getMessage()."</p>";
					}
				
				?>
				<br/>
				<h2>rechercherNbTuteursParEcole($ecole_ID) => integer 25</h2>
				<?php 
				
					try{
						$oStatistique = new Statistique();
						$oStatistique->rechercherNbTuteursParEcole(25);
						
					}catch(Exception $e){
						echo "<p>".$e->getMessage()."</p>";
					}
				
				?>
				
				
			<h2>rechercherNbTuteursParEcole($ecole_ID) => chaine "Silvia"</h2>
				<?php 
				
					try{
						$oStatistique = new Statistique();
						$oStatistique->rechercherNbTuteursParEcole("Silvia");
						
					}catch(Exception $e){
						echo "<p>".$e->getMessage()."</p>";
					}
				
				?>
				<br/>
				<h2>rechercherNbProfsParEcole($ecole_ID) => integer 25</h2>
				<?php 
				
					try{
						$oStatistique = new Statistique();
						$oStatistique->rechercherNbProfsParEcole(25);
						
					}catch(Exception $e){
						echo "<p>".$e->getMessage()."</p>";
					}
				
				?>
				
				
			<h2>rechercherNbProfsParEcole($ecole_ID) => chaine "Silvia"</h2>
				<?php 
				
					try{
						$oStatistique = new Statistique();
						$oStatistique->rechercherNbProfsParEcole("Silvia");
						
					}catch(Exception $e){
						echo "<p>".$e->getMessage()."</p>";
					}
				
				?>
				<br/>
				<h2>rechercherNbElevesParEcole($ecole_ID) => integer 25</h2>
				<?php 
				
					try{
						$oStatistique = new Statistique();
						$oStatistique->rechercherNbElevesParEcole(25);
						
					}catch(Exception $e){
						echo "<p>".$e->getMessage()."</p>";
					}
				
				?>
				
				
			<h2>rechercherNbElevesParEcole($ecole_ID) => chaine "Silvia"</h2>
				<?php 
				
					try{
						$oStatistique = new Statistique();
						$oStatistique->rechercherNbElevesParEcole("Silvia");
						
					}catch(Exception $e){
						echo "<p>".$e->getMessage()."</p>";
					}
				
				?>
				<br/>
				<h2>rechercherNbTutorielsParEcole($ecole_ID) => integer 25</h2>
				<?php 
				
					try{
						$oStatistique = new Statistique();
						$oStatistique->rechercherNbTutorielsParEcole(25);
						
					}catch(Exception $e){
						echo "<p>".$e->getMessage()."</p>";
					}
				
				?>
				
				
			<h2>rechercherNbTutorielsParEcole($ecole_ID) => chaine "Silvia"</h2>
				<?php 
				
					try{
						$oStatistique = new Statistique();
						$oStatistique->rechercherNbTutorielsParEcole("Silvia");
						
					}catch(Exception $e){
						echo "<p>".$e->getMessage()."</p>";
					}
				
				?>
				
				<br/>
				<h2>rechercherNbTutoratsParMatiere($tuteur_ID, $mois) => integer (25, 12)</h2>
				<?php 
				
					try{
						$oStatistique = new Statistique();
						$oStatistique->rechercherNbTutoratsParMatiere(25, 12);
						
					}catch(Exception $e){
						echo "<p>".$e->getMessage()."</p>";
					}
				
				?>
				
				<h2>rechercherNbTutoratsParMatiere($tuteur_ID, $mois) => integer (25, 30)</h2>
				<?php 
				
					try{
						$oStatistique = new Statistique();
						$oStatistique->rechercherNbTutoratsParMatiere(25, 30);
						
					}catch(Exception $e){
						echo "<p>".$e->getMessage()."</p>";
					}
				
				?>
				
				
			<h2>rechercherNbTutoratsParMatiere($tuteur_ID, $mois) => chaine "Silvia"</h2>
				<?php 
				
					try{
						$oStatistique = new Statistique();
						$oStatistique->rechercherNbTutoratsParMatiere("Silvia", "12");
						
					}catch(Exception $e){
						echo "<p>".$e->getMessage()."</p>";
					}
				
				?>
				
				<br/>
				<h2>rechercherNbTutoratsApprouvesParProf($prof_ID, $mois) => integer (25, 2)</h2>
				<?php 
				
					try{
						$oStatistique = new Statistique();
						$oStatistique->rechercherNbTutoratsApprouvesParProf(25, 2);
						
					}catch(Exception $e){
						echo "<p>".$e->getMessage()."</p>";
					}
				
				?>
				
				<h2>rechercherNbTutoratsApprouvesParProf($prof_ID, $mois) => integer (25, 30)</h2>
				<?php 
				
					try{
						$oStatistique = new Statistique();
						$oStatistique->rechercherNbTutoratsApprouvesParProf(25, 30);
						
					}catch(Exception $e){
						echo "<p>".$e->getMessage()."</p>";
					}
				
				?>
				
				
			<h2>rechercherNbTutoratsApprouvesParProf($prof_ID, $mois) => chaine ("Silvia", "12")</h2>
				<?php 
				
					try{
						$oStatistique = new Statistique();
						$oStatistique->rechercherNbTutoratsApprouvesParProf("Silvia", "12");
						
					}catch(Exception $e){
						echo "<p>".$e->getMessage()."</p>";
					}
				
				?>
            
            
            <div class="panel panel-primary col-xs-12">
    <div class="panel-heading">
        Test de la vue afficheStatsPersonnellesEleve()
    </div>
    <div class="panel-body">
        <?php    
            $aDonnees = array(
                            array('Aoû', 7), 
                            array('Sep', 7), 
                            array('Oct', 9), 
                            array('Nov', 15), 
                            array('Déc', 12),
                            array('Jan', 7), 
                            array('Fév', 9), 
                            array('Mar', 15), 
                            array('Avr', 12),
                            array('Mai', 7), 
                            array('Jui', 9)
                        );

            $oVue = new StatistiqueVue();

            $oVue->hGraphiqueTutosParMois = $oVue->genererGraphique('test', 300, 555, $aDonnees);

            $oVue->afficheStatsPersonnellesEleve();
        ?>
    </div>
</div>
		</div>
		<div id="footer">

		</div>
	</body>
</html>








