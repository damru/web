<?php
	$print_pic=false;
	$print_contact=true;
	$print_loisirs=false;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv=Content-Type content="text/html; charset=UTF-8">
		<link href="./fonts/fonts.css" rel="stylesheet" type="text/css" />
		<link href="./style.css" rel="stylesheet" type="text/css" />
		<link href="./progress.css" rel="stylesheet" type="text/css" />
	</head>
	<body style="">
		<div class="body">
			<div style="width: 100%">
				<table style="width: 100%">
					<tr style="width: 100%">
						<td><span class="blue" style="font-size: 30px; font-weight: bold;">Damien Rubio</span></td>
						<?php if ($print_contact) echo '<td>(514)915-6290 | <a class="blue" href="mailto:job@damienrubio.com">job@damienrubio.com</a> | Montreal, QC, Canada</td>'; ?>
						<?php if ($print_pic) echo '<td rowspan=5 style="width: 112px; height:135px"><img src="id.png" /></td>'; ?>
					</tr>
				</table>
			</div>
			<table class="main">
				<tr>
					<td>
						<div class="table">
							<table>
								<tr>
									<td class="head blue" colspan=2>PROFESSIONAL EXPERIENCES</td>
								</tr>
								<tr>
									<td class="date blue">
										feb. 2017<br>present
									</td>
									<td>
										<span class="mission">Société Général CIB, IT Engineer, Technical Leader</span>
										<br><span class="subtitle">Montreal, QC, Canada<br>Paris, France</span>
										<br><span class="mission-desc">Microservice architecture • Backend development (mostly) • Frontend development (some) • Build automation </span>
										<br><span class="mission-skills">Java 8 • Spring • Spring Boot • OAuth2 • Consul • Zuul • Jenkins • Sonar • Git • Maven • Docker • Angular • Python • BDD • TDD</span>
									</td>
								</tr>
								<tr>
									<td class="date blue">
										oct. 2016<br>feb. 2017
									</td>
									<td>
										<span class="mission">SFEIR, IT Engineer</span>
										<br><span class="subtitle">Neuilly sur Seine, France</span>
										<br><span class="mission-desc">Contribution to the development of an internal application dedicated to the employees.</span>
										<br><span class="mission-skills">Java 8 • Docker • Spring • Spring Boot • Neo4J database • Google Cloud (AppEngine, ComputeEngine)</span>
										<br><span class="mission">Generali, IT Engineer</span>
										<br><span class="subtitle">La Plaine Saint-Denis, France</span>
										<br><span class="mission-desc">Good practices implementation (industrialization, TDD, BDD, intergration testings) • Webservice migration (Corba to Java)</span>
										<br><span class="mission-skills">J2EE • Javascript • Angular JS • Selenium/Fluentlenium  • Jenkins</span>
									</td>
								</tr>
								<tr>
									<td class="date blue">
										feb. 2013<br>oct. 2016
									</td>
									<td>
										<span class="mission">Crédit Agricole CIB, IT Engineer</span>
										<br><span class="subtitle">Courbevoie, France</span>
										<br><span class="mission-desc">Study and development for Treasury IT • Front-to-back application Kondor+ • Support L3 • Offshore team management (India)</span>
										<br><span class="mission-skills">Java • Kondor • Shell scripting • STP • Sybase ASE (T/SQL) • Management</span>
										<br><span class="mission-desc">Complete makeover of the CTRLM (scheduler) architecture for CACIB New-York</span>
										<br><span class="mission-skills">CTRLM • Shell scripting</span>
										<br><span class="mission-desc">Complete makeover of Front application • Struts to Spring • Java 5 to Java 8</span>
										<br><span class="mission-skills">J2EE • Spring • Hibernate • jUnit • SVN • Maven • Javascript</span>
									</td>
								</tr>
								<tr>
									<td class="date blue">
										may 2012<br>nov. 2012
									</td>
									<td>
										<span class="mission">BNP Paribas, Programmer Analyst</span>
										<br><span class="subtitle">Montreuil, France</span>
										<br>Développement shell, C++, PowerBuilder, SQL (Sybase).
										<br>Développements sur l’outil de reporting de la trésorerie de Paris « WARM » (10 personnes) :
										<br>• Etude et recueil des besoins
										<br>• Développement et test des modules :
										<br>• Création, développement et optimisation de procédures stockées (Sybase ASE) sur une volumétrie de plusieurs millions de lignes. Utilisation de tables temporaires, surveillance temps réel et optimisation du code pour réduire un maximum le temps d’exécution
										<br>• Intégration des données de marché issues des systèmes Front Office (Westminster, Sierra)
										<br>• Développement de scripts shell pour openservers (interfacage Linux/Windows sur des batchs automatiques)
										<br>• Développement de dll C++ pour rapatrier des données Front depuis une base Oracle distante vers la base Sybase WARM
										<br>• Intégration des modules dans l’IHM de WARM (Powerbuilder)
									</td>
								</tr>
								<tr>
									<td class="date blue">
										apr. 2011<br>july 2011
									</td>
									<td>
										<span class="mission">buzzing light, Développeur web (Stage)</span>
										<br><span class="subtitle">Paris, France</span>
										<br>Création d’une application web dédiée aux petits boulots, jobs temporaires et CDD.
										<br>Développement PHP, HTML, AJAX et MySQL
										<br>Intervention dans la création de la charte graphique du site.
										<br>• Géolocalisation via l’API Google. Analyse algorithmique de la position de l’utilisateur afin de lui proposer les annonces autour de chez lui
										<br>• Création d’un moteur de recherche interne basé sur plusieurs critères : type de contrat, distance, intitulé, pertinence, date etc.
									</td>
								</tr>
								<tr>
									<td class="date blue">
										june 2010<br>sept. 2010
									</td>
									<td>
										<span class="mission">NDS Technology, Assistant chef de projet marketing (Stage)</span>
										<br><span class="subtitle">Issy les Moulineaux, France</span>
										<br>Création d’un intranet pour le service “Sales & Marketing France » grâce à l’utilisation du CMS Drupal.
										<br>Communication B2B et B2C.
									</td>
								</tr>
								<tr>
									<td class="date blue">
										apr. 2009<br>june 2009
									</td>
									<td>
										<span class="mission">Association « Comité Français de Cartographie », Développeur web (Stage)</span>
										<span class="subtitle">Saint Mandé, France</span>
										<br>Refonte graphique et logicielle du site internet de l’association
									</td>
								</tr>
								<tr>
									<td class="head blue" colspan=2>FORMATIONS</td>
								</tr>
								<tr>
									<td class="date blue">2012</td>
									<td>
										<span class="title">Cycle Ingénieur, ECE Paris<br>Spécialisation Systèmes d’Information et Réseaux</span>
										<br><span class="subtitle">option Audiovisuel & Médias Numériques</span>
										<br><i>2009-2012</i> : ECE Paris École d’Ingénieurs - Paris, France
										<br><i>Sept. – Dec. 2011</i> : Concordia University – Montréal, Canada
									</td>
								</tr>
								<tr>
									<td class="date blue">2009</td>
									<td>
										<span class="title">DUT Informatique<br>Spécialisation Génie Logiciel</span>
										<br><span class="subtitle">option Génie Logiciel</span>
										<br>IUT de Montreuil - Université Paris 8 - Vincennes-Saint-Denis
									</td>
								</tr>
								<tr>
									<td class="date blue">2007</td>
									<td>
										<span class="title">DEUG Administration Économique et Sociale</span>
										<br>Université Paris 1 - Panthéon-Sorbonne
									</td>
								</tr>
								<tr>
									<td class="date blue">2004</td>
									<td>
										<span class="title">Baccalauréat Économique et Social</span>
										<br><span class="subtitle">option Économie</span>
										<br>Lycée Romain Rolland - Ivry sur Seine
									</td>
								</tr>
								<?php if ($print_loisirs) : ?>
								<tr>
									<td class="head blue" colspan=2>LOISIRS</td>
								</tr>
								<tr>
									<td class="date blue">Sports</td>
									<td>Football, basketball, vô-thuat, natation, parachutisme, roller.</td>
								</tr>
								<tr>
									<td class="date blue">Cinéma</td>
									<td>Passionné de cinéma, je suis de près l’actualité cinématographique française et étrangère.</td>
								</tr>
								<tr>
									<td class="date blue">Lecture</td>
									<td>Presse nationale, romans, essais, blogs (veille technologique)</td>
								</tr>
								<tr>
									<td class="date blue">Développement</td>
									<td>Réalisation de projets web et logiciels : <b>création graphique et programmation</b>.<br>
									Projets Android et Kinect</td>
								</tr>
								<?php endif; ?>
								<tr>
									<td></td>
									<td></td>
								</tr>
							</table>
						</div>
					</td>
					<td>
						<div class="pre-skills">Skills</div>
						<div class="skills">
							<table>
								<tr>
									<td class="head2" colspan=2>Architecture, Conception & Methodology</td>
								</tr>
								<tr>
									<td class="title">UML</td>
									<td>
										<progress max="100" value ="90">
											<div class="progress-bar"><span style="width: 90%">90%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="title">Merise</td>
									<td>
										<progress max="100" value ="75">
											<div class="progress-bar"><span style="width: 75%">75%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="title">TDD (jUnit) / BDD (Cucumber)</td>
									<td>
										<progress max="100" value ="100">
											<div class="progress-bar"><span style="width: 100%">100%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="title">Agile / Scrum</td>
									<td>
										<progress max="100" value ="100">
											<div class="progress-bar"><span style="width: 100%">100%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="title">API Design</td>
									<td>
										<progress max="100" value ="100">
											<div class="progress-bar"><span style="width: 100%">100%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="title">Microservice</td>
									<td>
										<progress max="100" value ="100">
											<div class="progress-bar"><span style="width: 100%">100%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="title">Consul</td>
									<td>
										<progress max="100" value ="85">
											<div class="progress-bar"><span style="width: 85%">85%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="head2" colspan=2>Languages & frameworks</td>
								</tr>
								<tr>
									<td class="title">Java</td>
									<td>
										<progress max="100" value ="95">
											<div class="progress-bar"><span style="width: 95%">95%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="title">Spring / Spring Boot</td>
									<td>
										<progress max="100" value ="95">
											<div class="progress-bar"><span style="width: 95%">95%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="title">Hibernate / JPA</td>
									<td>
										<progress max="100" value ="95">
											<div class="progress-bar"><span style="width: 95%">95%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="title">C, C++</td>
									<td>
										<progress max="100" value ="40">
											<div class="progress-bar"><span style="width: 40%">30%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="title">PHP</td>
									<td>
										<progress max="100" value ="90">
											<div class="progress-bar"><span style="width: 90%">80%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="title">HTML</td>
									<td>
										<progress max="100" value ="95">
											<div class="progress-bar"><span style="width: 95%">90%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="title">CSS</td>
									<td>
										<progress max="100" value ="90">
											<div class="progress-bar"><span style="width: 90%">90%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="title">JavaScript</td>
									<td>
										<progress max="100" value ="80">
											<div class="progress-bar"><span style="width: 80%">80%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="title">Angular</td>
									<td>
										<progress max="100" value ="20">
											<div class="progress-bar"><span style="width: 20%">20%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="title">Python</td>
									<td>
										<progress max="100" value ="40">
											<div class="progress-bar"><span style="width: 40%">40%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="title">Shell scripting</td>
									<td>
										<progress max="100" value ="80">
											<div class="progress-bar"><span style="width: 80%">80%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="head2" colspan=2>OS</td>
								</tr>
								<tr>
									<td class="title">Unix</td>
									<td>
										<progress max="100" value ="90">
											<div class="progress-bar"><span style="width: 90%">90%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="title">Windows</td>
									<td>
										<progress max="100" value ="90">
											<div class="progress-bar"><span style="width: 90%">90%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="head2" colspan=2>Databases</td>
								</tr>
								</tr>
									<td class="title">SQL, MySQL, T/SQL, MariaDB, PostgreSQL</td>
									<td>
										<progress max="100" value ="95">
											<div class="progress-bar"><span style="width: 95%">95%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="head2" colspan=2>Industrialization & Platforms</td>
								</tr>
								<tr>
									<td class="title">Git / SVN</td>
									<td>
										<progress max="100" value ="95">
											<div class="progress-bar"><span style="width: 95%">95%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="title">Google Cloud</td>
									<td>
										<progress max="100" value ="20">
											<div class="progress-bar"><span style="width: 20%">20%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="title">Docker</td>
									<td>
										<progress max="100" value ="60">
											<div class="progress-bar"><span style="width: 60%">60%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="title">Jenkins, Maven, Sonar</td>
									<td>
										<progress max="100" value ="85">
											<div class="progress-bar"><span style="width: 85%">85%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="head2" colspan=2>Communication</td>
								</tr>
								<tr>
									<td class="title"><img src="fr.png" /></td>
									<td><span class="title">mother tongue</span></td>
								</tr>
								<tr>
									<td class="title"><img src="en.png" /></td>
									<td>
										<span class="title">operational</span>
									</td>
								</tr>
								<tr>
									<td class="title"><img src="de.png" /></td>
									<td><span class="title">basic</span></td>
								</tr>
								<tr>
									<td class="head2" colspan=2>CERTIFICATES</td>
								</tr>
								<tr>
									<td>Applied Computing</td>
									<td>Glyndwr University, Pays de Galles</td>
								</tr>
							</table>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>
