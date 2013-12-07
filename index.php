<?php
require 'vendor/autoload.php';
include( 'controller.php' );

$loader = new Twig_Loader_String();
$twig = new Twig_Environment($loader);

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => 'cache',
));

echo $twig->render('index.html', array('name' => 'Nco'));


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns:fb="http://www.facebook.com/2008/fbml" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $lang; ?>" lang="<?php echo $lang; ?>">

		<head>
			<link href="css/style.css" rel="stylesheet" type="text/css" />
			<!--[if IE]> <link href="/templates/trucsetdeco/css/ie.css" rel="stylesheet" type="text/css" /> <![endif]-->
			<link href="/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
			  
			  <meta name="robots" content="index, follow" />
			  <meta name="keywords" content="" />
			  <?php if( $id < 5): ?>
			  <meta name="description" content="Chambres d'hôtes de charme à Saint-Thibéry pour vos séjours en Pays de Pézenas." />
			  <?php else: ?>
			  <meta name="description" content="Charming guesthouse in Saint-Thibery near Agde and Pezenas, in Languedoc France." />
			  <?php endif; ?>
			  <meta name="google-site-verification" content="oCuIAYfg4yu4CoWIrZwU_0XIyx8g4_pNw_7A8Q2DbkY" />
			  <meta property="og:image" content="http://www.homesaintsauveur.com/images/MaisonDroite/1.jpg" />
			  <link href="http://www.homesaintsauveur.com/images/MaisonDroite/1.jpg" rel="image_src" />
				<title><?php echo $pageTitle[$id]; ?></title>
			  <meta http-equiv="Content-Language" content="<?php echo $lang; ?>" /></head> 
			<script type="text/javascript" src="js/jquery.js"></script>
			<script src="js/jquery.cross-slide.min.js"></script>
			<script type="text/javascript" src="js/str_replace.js"></script>
			
		<body>
		<div id="global">
			<div id="header">
				<p style="padding: 2em 15px;"><?php echo $accroche[$id]; ?></p>
				<img src="images/saint-sauveur.png" border=0 alt="Maison d'hôte près de Agde, Pezenas, Saint Sauveur à Saint Thibéry" style="position:absolute; top: 10px; right: 170px;"/>
			</div>
			<div id="menu">
				<div id="lang" style="float: left; padding:10px;"><a href="/"><img src="images/btn-language-fre.gif" border="0" alt="fr"></a>&nbsp;
				<a href="<?php echo $pageArray[5]; ?>"><img src="images/btn-language-eng.gif" border="0" alt="en"></a></div>
			<?php if( $id > 4 ): ?>
				<ul>
				<li><a href="<?php echo $pageArray[5]; ?>">Homepage</a></li>
				<li><a href="<?php echo $pageArray[6]; ?>">Visit our house</a></li>
				<li><a href="<?php echo $pageArray[7]; ?>">Prices & booking</a></li>
				<li><a href="<?php echo $pageArray[8]; ?>">Directions</a></li>
				</ul>
			<?php else: ?>
				<ul>
				<li><a href="/">Accueil</a></li>
				<li><a href="visitez-la-maison.html">Visitez la maison</a></li>
				<li><a href="tarifs-reservation.html">Tarifs - Réservation</a></li>
				<li><a href="acces.html">Accès</a></li>
				</ul>
			<?php endif; ?>
			</div>
			<?php include($id.'.php');?>


			<div id="footer">
					<strong><cite>Saint-Sauveur - 3, place du Marché - 34630 Saint-Thibéry - Tél.: +33(0)9 50 40 10 37 - GSM : +33(0)6 71 16 44 01 - <a href="mailto:info@homesaintsauveur.com">info@homesaintsauveur.com</a></cite></strong>
					<script type="text/javascript">
					<!--
					  var _gaq = _gaq || [];
					  _gaq.push(['_setAccount', 'UA-12981088-3']);
					  _gaq.push(['_trackPageview']);

					  (function() {
					    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
					    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
					    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
					  })();
					  //-->
					</script>
			</div>
		</div>			
	
<div id="footerlink">
<center><table cellspacing="0" cellpadding="5" width="960">
<tr>
<td align="center" >&nbsp;</td>

<td align="center" ><a style="font-weight: bold;color: #000;" href="http://www.ot-pezenas-valdherault.com/">
<img src="images/LogoPezenas.png" alt="Office du tourisme de Pézenas" border=0 width="150"></a><BR><a style="font-weight: bold;color: #000;" href="http://www.ot-pezenas-valdherault.com/" target="_blank"><font size="-2">A la découverte d'un site d'exception :<br/>
la ville de Molière, son architecture,
ses métiers d'art et les villages vignerons voisins.</font></a><BR>
</td>

<!--

<td align="center"><a href="http://www.rivedefrance.fr" target="_blank"><img src="images/logo_rdf.png" border="0" /></a><br/>
<a style="font-weight: bold;color: #000;" href="http://www.rivedefrance.fr" target="_blank"><font size="-2">Complice de vos vacances sur le Canal du Midi.<br/>
Location de bateaux sans permis à l'heure, la demie journée, la journée.
Bateau Promenade avec pilote, balade de 2 heures.</a></td>

-->
<td align="center"><a href="http://www.europa-bed-breakfast.com/" target="_blank"><img src="http://www.europa-bed-breakfast.com/images/Logo_Europa_Bed_Breakfast.gif" alt="EUROPA BED and BREAKFAST : Réservation de gites et chambres d'hôtes en France" border="0" /></a></td>
<td align="center"><a href="http://www.domaine-soleil-couchant.com/" target="_blank"><img src="images/domainesoleil.jpg" border="0" /></a><br/>
<a style="font-weight: bold;color: #000;" href="http://www.domaine-soleil-couchant.com" target="_blank"><font size="-2">L'étape incontournable pour découvrir l'Aude,<br/>
les châteaux Cathares, l'Abbaye de Fontfroide,
Carcassonne et les produits régionaux autour
d'une table d'hôtes exceptionnelle.</a></td>
</tr>
<tr>
<td align="center">
<!--<a href="http://www.chambres-d-hotes-herault.com/" target="_blank" title="Chambres et Gîtes Hérault"><img src="http://www.chambres-d-hotes-herault.com/chambres-dhotes-herault/88x31.gif" alt="Chambres et Gîtes Hérault"></a>--></td>
<td align="center" ><a style="font-weight: bold;color: #000;" href="http://www.ateliersaintsauveur.com">
<img src="images/ass.jpg" alt="ATELIER SAINT SAUVEUR" border="0" /></a><BR><a style="font-weight: bold;color: #000;" href="http://www.ateliersaintsauveur.com"><font size="-2"> Conception d'espaces et réalisation d'équipements
pour l'intérieur et l'extérieur de la maison.</font></a>
</td>

<td align="center"><a href="http://www.agence-differente.fr" target="_blank"><img src="images/logo_ad.png" border="0" width="120" /></a><br/>
<a style="font-weight: bold;color: #000;" href="http://www.agence-differente.fr" target="_blank"><font size="-2">Développement de sites internet</a></td>
<td align="center"><a href="http://www.hervecoteplage.com/" target="_blank"><img src="images/coteplage.jpg" border="0" width="120" /></a><br/>
<a style="font-weight: bold;color: #000;" href="http://www.hervecoteplage.com" target="_blank"><font size="-2">Hervé Côté Plage - Restaurant Plage et Transats<br/>Rochelongue, Agde - Cap d’Agde</a></td>
</tr>
<tr>
<td><!-- AddThis Button BEGIN 
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4e271a92739c7099"></script>
<!-- AddThis Button END -->
</td>
</tr>
</table>
<!--<div id="fb-root"></div><script src="http://connect.facebook.net/fr_FR/all.js#xfbml=1"></script><fb:like-box href="http://www.facebook.com/pages/Chambres-dhôtes-Saint-Sauveur/234811026550842" width="920" show_faces="false" border_color="" stream="true" header="false"></fb:like-box>//-->
</center>
</div>
		
		</body>
</html>
