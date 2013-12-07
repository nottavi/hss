<?php
	$sep = (stristr ('php_os', 'WIN')) ? "\\" : "/";
	$request = str_replace( "/", "", $_SERVER['REQUEST_URI'] );
	
	$pageArray = array( 1 => "index.html",
						2 => "visitez-la-maison.html",
						3 => "tarifs-reservation.html",
						4 => "acces.html",
						5 => "guesthouse-near-pezenas.html",
						6 => "visit-the-house.html",
						7 => "prices-booking.html",
						8 => "directions.html" );

	$pageTitle = array( 1 => "Chambres d'hôtes Saint-Thibery - Pezenas - Herault - Home Saint Sauveur",
						2 => "4 chambres d'hôtes à proximité d'Agde, Pezenas, Sètes, Canal du Midi, Béziers - Home Saint Sauveur",
						3 => "Nos Tarifs - Chambres d'hôtes Saint-Thibery à 30 kilomètres de Montpellier - Languedoc Roussillon",
						4 => "Accès depuis Béziers, Montpellier, Agde - Chambres d'hôtes Saint-Thibery - Hérault",
						5 => "Guest house in Saint-Thibery - Pezenas - Herault - France - Home Saint Sauveur",
						6 => "4 guest houses near Agde, Pezenas, Sètes, Canal du Midi, Béziers - Home Saint Sauveur",
						7 => "Pricing and Booking french guest house near Pezenas in France",
						8 => "Direction from Béziers, Montpellier, Agde - Guesthouse Saint-Thibery - France Hérault" );
	
	$accroche = array( 1 => "<strong>Chambres d'hôtes de charme</strong><br/>à Saint-Thibéry pour vos séjours en Pays de <strong>Pézenas</strong>",
				2 => "<strong>Chambres d'hôtes de charme</strong><br/>proches du <strong>Canal du Midi</strong> et de la Méditerranée",
				3 => "<strong>Chambres d'hôtes de charme</strong><br/>pour une simple escapade ou un séjour professionnel",
				4 => "<strong>Chambres d'hôtes de charme</strong><br/>à la découverte de <strong>l'Hérault</strong>",
				5 => "<strong>CHARMING GUEST HOUSE</strong><br/> IN SAINT-THIBERY NEAR <strong>PEZENAS</strong>",
				6 => "<strong>CHARMING GUEST HOUSE</strong><br/> IN SAINT-THIBERY NEAR <strong>PEZENAS</strong>",
				7 => "<strong>CHARMING GUEST HOUSE</strong><br/> IN SAINT-THIBERY NEAR <strong>PEZENAS</strong>",
				8 => "<strong>CHARMING GUEST HOUSE</strong><br/> IN SAINT-THIBERY NEAR <strong>PEZENAS</strong>");
				
	$id = ( array_search( $request, $pageArray ) !== FALSE ) ? array_search( $request, $pageArray ) : 1;
	$lang = ( $id < 5 ) ? "fr" : "en";
	
?>	
