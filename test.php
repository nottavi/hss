<?php 
	//error_reporting(E_ALL ^ E_NOTICE);
	
	$id = ( isset($_GET['id']) ) ? $_GET['id'] : 1;
	$sep = (stristr ('php_os', 'WIN')) ? "\\" : "/";
	include( "photo.php" );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
 
		<head>
			<link href="css/style.css" rel="stylesheet" type="text/css" />
			<!--[if IE]> <link href="/templates/trucsetdeco/css/ie.css" rel="stylesheet" type="text/css" /> <![endif]-->
			<link href="/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
			  
			  <meta name="robots" content="index, follow" />
			  <meta name="keywords" content="déco, deco, décoration intérieur, decoration, décoration intérieure, decoration interieure, déco intérieure, deco interieure, idée déco, idée décoration, idee deco, idee decoration, astuce decoration, astuce deco" />
			  <meta name="description" content="Conception d'espaces et réalisation d'équipements pour l'intérieur et l'extérieur de la maison." />
			  <title>ATELIER SAINT SAUVEUR</title>
			  <meta http-equiv="Content-Language" content="fr" /></head> 
			<script type="text/javascript" src="js/jquery.js"></script>
			<script type="text/javascript" src="js/str_replace.js"></script>
			<script type="text/javascript">document.getElementsByTagName('html')[0].id = 'js';</script> 
			<script type="text/javascript">
			
			$(document).ready( function() { 
				$('.imgHeader').click( function() {
					$('#popup').hide();
					var imageName = $(this).attr('src');
					var altText = $(this).attr('alt'); 					
					imageName = str_replace( 'images/Top','',imageName );
					imageName = str_replace( '.jpg', '', imageName );
					var id = <?php echo $id; ?>;
					var imageLeftPos = imageName.substring(1,2);
					
					<?php if( $id == 9 ): ?>
					$('#popup').css('top','0');
					$('#popup').css('margin-left','585px');
					<?php else: ?>
					switch( imageLeftPos)
					{
						case 'A':
						$('#popup').css('margin-left','0px');
						break;
						case 'B':
						$('#popup').css('margin-left','195px');
						break;
						case 'C':
						$('#popup').css('margin-left','390px');
						break;
						case 'D':
						$('#popup').css('margin-left','585px');
						break;
					}
					<?php endif; ?>
					$('#popup').html( '<p>'+altText+'</p>' );
			$('#popup').slideDown('slow',function()
					{
					});
				});
				
				$('#popup').click( function() {
					
					$('#popup').slideUp('fast',function(){});
				});
			});
			</script>
			
		<body>
		<div id="global">
			<div id="popup"></div>
			<div id="header" <?php if ( $id == 1): ?>style="background:url('images/Olivier.jpg') no-repeat; background-position:250px 0; height:200px;"<?php endif; ?>>
			<?php if( $id > 3 ): ?>
				<img src="images/Top<?php echo $id; ?>A.jpg" height="192" border=0 class="imgHeader" alt="<?php echo $photoDescr[$id."A"]; ?>"/>
				<img src="images/Top<?php echo $id; ?>B.jpg" height="192" border=0 class="imgHeader" alt="<?php echo $photoDescr[$id."B"]; ?>"/>
				<?php if( file_exists( dirname(__FILE__).$sep."images".$sep."Top".$id."C.jpg" ) ): ?><img src="images/Top<?php echo $id; ?>C.jpg" height="192" border=0 class="imgHeader"/ alt="<?php echo $photoDescr[$id."C"]; ?>"><?php endif; ?>
				<?php if( file_exists( dirname(__FILE__).$sep."images".$sep."Top".$id."D.jpg" ) ): ?><img src="images/Top<?php echo $id; ?>D.jpg" height="192" border=0 class="imgHeader"/ alt="<?php echo $photoDescr[$id."D"]; ?>"><?php endif; ?>
			<?php elseif( $id == 1 ): ?>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p class="mea">
			<strong>Conception d'espaces<br/>et réalisation d'équipements<br/> pour l'intérieur et l'extérieur<br/> de la maison.</strong><br/>
			<br/>
			<span class="address">1, place Saint Sauveur<br/>34630 Saint-Thibéry France<br/>GSM: 06 73 45 22 50</span>
			<br/><br/>
			<i><a href="mailto:info@ateliersaintsauveur.com" class="active"><strong>info@ateliersaintsauveur.com</strong></a></i></p>
			<?php elseif( $id == 2): ?>
			<p class="mea"><strong>Concepteur d'espaces<br/> et réalisateurs d'équipements<br/> pour l'intérieur et l'extérieur<br/> de la maison.</strong>
			<br/>Dans un studio, un appartement, une villa,<br/> ou une grande demeure, un commerce... <br/>en ville ou à la campagne, l'aménagement,
			l'amélioration de votre mobilier et la décoration tiennent une place primordiale dans la <br/>recherche d'une meilleure qualité de vie.<br/>
			Nous personnalisons vos projets dans un souci permanent d'harmonie et de bien-être.</p>
			<p>A l'écoute de vos besoins nous analysons et proposons les solutions les mieux adaptées <br/>à vos désirs et à votre budget.
			<br/><br/>
			Dans le cadre d'un projet global, après avoir établi les plans d'exécution, nous coordonnons tous les corps de métier succeptibles d'intervenir
			lors de la réalisation de votre ouvrage : maçonnerie, charpente, plomberie, plaquiste, électricité, menuiserie, peinture, carrelage...</p>
			<p><strong>ATELIER SAINT SAUVEUR conçoit, dessine, propose et réalise des mobiliers originaux, objets et éléments de décoration, aménagements sur 
			mesure pour l'intérieur et l'extérieur.</strong><br/><br/>
			ATELIER SAINT SAUVEUR s'engage sur les délais de réalisation qui permettront<br/> de concrétiser vos idées.</p>
			<?php elseif( $id == 3 ): ?>
			<p><strong>Création, fabrication de mobiliers originaux, objets et éléments de décoration pour l'intérieur et l'extérieur.</strong></p>
			<p class="mea"><strong>Aménagement d'espaces intérieurs <br/>et extérieurs, extensions, réhabilitation de bâtiments, redistribution et optimisation des volumes, amélioration 
			du confort, économie d'énergie, modification de façade ou recherche de lumière.<br/> Habitation de loisirs.</strong></p>
			<p><strong>Recherche, conception et réalisation<br/> de dossiers pour demande d'autorisation <br/>de travaux ou permis de construire.<br/>
			Conseil et accompagnement, <nobr>home staging</nobr>.<br/>Architecture intérieure et décoration.<br/>Consultation d'entreprises pour <br/>la réalisation d'un projet.<br/> Suivi et coordination des travaux.</strong><br/><br/>
			</p>
			<?php endif; ?>
			</div>
			<div id="logo">
				<a href="index.php" title="Retour à la page d'accueil"><img src="images/logo.jpg" border=0 alt="Atelier Saint Sauveur"/></a>
			</div>
			
			<div id="main" style="background:url('images/Base<?php echo $id; ?>.jpg') no-repeat; min-height:265px; <?php if( $id == 9): ?>background-position:70px 0;<?php endif; ?>">
				<ul class="nav">
					<li><a href="index.php?id=2" <?php if( $id == 2): ?> class="active"<?php endif; ?>>Notre mission</a></li>
					<li><a href="index.php?id=3" <?php if( $id == 3): ?> class="active"<?php endif; ?>>Notre savoir-faire</a></li>
				</ul>
				<ul class="nav" style="margin-top:25px;">
					<li><a href="index.php?id=4" <?php if( $id == 4): ?>class="active"<?php endif; ?>>Autour d'une table</a></li>
					<li><a href="index.php?id=5" <?php if( $id == 5): ?>class="active"<?php endif; ?>>Asseyez-vous</a></li>
					<li><a href="index.php?id=6" <?php if( $id == 6): ?>class="active"<?php endif; ?>>A l'air libre</a></li>
					<li><a href="index.php?id=7" <?php if( $id == 7): ?>class="active"<?php endif; ?>>Et si l'on rangeait</a></li>
					<li><a href="index.php?id=8" <?php if( $id == 8): ?>class="active"<?php endif; ?>>D'autres idées</a></li>
				</ul>
				<ul class="nav" style="margin-top:25px;">
					<li><a href="index.php?id=9" <?php if( $id == 9): ?>class="active"<?php endif; ?>>Les news</a></li>
				</ul>
				<ul class="nav" style="margin-top:25px;">
					<li><a href="mailto:info@ateliersaintsauveur.com">Contact</a></li>
				</ul>
			</div>
			
			<div id="footer">
					&copy; 2010 Atelier Saint Sauveur - réalisation: <a href="http://www.agence-differente.fr" target="_blank">Agence Différente</a>
					<script type="text/javascript">
						var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
						document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
						</script>
						<script type="text/javascript">
						try {
						var pageTracker = _gat._getTracker("UA-12981088-2");
						pageTracker._trackPageview();
						} catch(err) {}
					</script>
			</div>
		</div>
		</body>
</html>
