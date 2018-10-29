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
						<td><span class="blue" style="font-size: 30px; font-weight: bold;">Damien RUBIO</span></td>
						<?php if ($print_contact) echo '<td>Téléphone: <a class="blue">(514)915-6290</a><br>Courriel: <a class="blue" href="mailto:job@damienrubio.com">job@damienrubio.com</a></td>'; ?>
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
									<td class="head blue" colspan=2>EXPÉRIENCES PROFESSIONNELLES</td>
								</tr>
								<tr>
									<td class="date blue">
										Depuis Fév. 2017
									</td>
									<td>
										<br><span class="esn">CGI, Contractor (Oct. 2017)</span>
										<br><span class="subtitle">Montreal, QC, Canada</span>
										<span class="esn">Addstones, Consultant IT (Sept. 2017)</span>
										<br><span class="subtitle">Paris, France</span>
										<br><span class="mission">Société Général CIB, Technical Leader + Développeur</span>
										<br>Développement backend d'une application en mode DevOps et architecture micro-services (services REST, gateway, service discovery).
										<ul><li>Java 8, Spring, Spring Boot, OAuth2, Consul, Zuul, Jenkins, Sonar, Git, Docker</li></ul>
									</td>
								</tr>
								<tr>
									<td class="date blue">
										Oct. 2016 - Fév. 2017
									</td>
									<td>
										<span class="esn">SFEIR, Consultant IT</span>
										<br><span class="subtitle">Neuilly sur Seine, France</span>
										<br><span class="mission">SFEIR, Développeur</span><br>Participation au développement d'une application web "SFEIR People" dédiée aux compétences des collaborateurs.
										<ul><li>Java 8, Docker, Spring, Spring Boot, Neo4J database, Google Cloud (AppEngine, ComputeEngine)</li></ul>
										<span class="mission">Generali, Développeur</span><br>Mission Etudes & Développements au sein du centre de service Java de Generali.
										<br>- Bonnes pratiques<br>Mise en oeuvre de bonnes pratiques pour l'industrialisation du développement.
										<ul><li>Selenium/Fluentlenium, Jenkins</ul></li>
										- Front Epargne<br>Développement de webservices REST
										<ul><li>Java J2EE, Javascript, Angular JS</ul></li>
									</td>
								</tr>
								<tr>
									<td class="date blue">
										Fév. 2013 - Oct. 2016
									</td>
									<td>
										<span class="esn">Adneom, Consultant IT</span>
										<br><span class="subtitle">Levallois-Perret, France</span>
										<br><span class="mission">Crédit Agricole CIB, Développeur</span><br>Mission Etudes & Développements/Support au sein de la trésorerie de Crédit Agricole Corporate & Investment Bank.
										<br><br><b>Kondor+</b><br>Développements shell, SQL et java autour du progiciel Kondor+. Support niveau 3.
										<ul><li>Java, Kondor, Scripting shell, STP, Sybase ASE (T/SQL)</ul></li>
										<br>- Mission de 2 mois à CACIB New-York : Refonte complète de l’architecture CTRLM
										<ul><li>Scheduler Control-M</ul></li>
										<br>- Gestion de l’équipe offshore (6 personnes en Inde) et coordination avec l’équipe onshore
										<br><br><b>BLOFI</b><br>Refonte de l'application afin de migrer de Struts vers Spring et de Java 5 vers Java 7 essentiellement, avec une équipe composée de 6 personnes en Inde et 3 personnes à Paris.
										<ul><li>Java J2EE, Spring, Hibernate, JUnit, SVN, Maven, Javascript</ul></li>
									</td>
								</tr>
								<tr>
									<td class="date blue">
										2012
										<br>Mai – Nov.
									</td>
									<td>
										<span class="mission">BNP Paribas, Développeur (Stage de fin d’études)</span>
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
										2011
										<br>Avril – Juillet
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
										2010
										<br>Juin – Sept.
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
										2009
										<br>Avril - Juin
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
									<td class="date blue">2009 - 2012</td>
									<td>
										<span class="title">Cycle Ingénieur, ECE Paris<br>Spécialisation Systèmes d’Information et Réseaux</span>
										<br><span class="subtitle">option Audiovisuel & Médias Numériques</span>
										<br><i>2009-2012</i> : ECE Paris École d’Ingénieurs - Paris, France
										<br><i>Sept. – Dec. 2011</i> : Concordia University – Montréal, Canada
									</td>
								</tr>
								<tr>
									<td class="date blue">2007 - 2009</td>
									<td>
										<span class="title">DUT Informatique<br>Spécialisation Génie Logiciel</span>
										<br><span class="subtitle">option Génie Logiciel</span>
										<br>IUT de Montreuil - Université Paris 8 - Vincennes-Saint-Denis
									</td>
								</tr>
								<tr>
									<td class="date blue">2004 - 2007</td>
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
						<div class="skills">
							<table>
								<tr>
									<td class="head2" colspan=2>COMPÉTENCES<BR> INFORMATIQUES</td>
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
								<tr><td>&nbsp;</td></tr>
								<tr>
									<td class="title">Java</td>
									<td>
										<progress max="100" value ="95">
											<div class="progress-bar"><span style="width: 95%">95%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="title">Spring, Spring Boot</td>
									<td>
										<progress max="100" value ="95">
											<div class="progress-bar"><span style="width: 95%">95%</span></div>
										</progress>
									</td>
								</tr>
								<tr><td>&nbsp;</td></tr>
								</tr>
									<td class="title">SQL</td>
									<td>
										<progress max="100" value ="95">
											<div class="progress-bar"><span style="width: 95%">90%</span></div>
										</progress>
									</td>
								</tr>
								<tr><td>&nbsp;</td></tr>
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
								<tr><td>&nbsp;</td></tr>
								<tr>
									<td class="title">Docker</td>
									<td>
										<progress max="100" value ="50">
											<div class="progress-bar"><span style="width: 50%">50%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="title">Industrialisation (Jenkins, JUnit, Maven, Sonar)</td>
									<td>
										<progress max="100" value ="85">
											<div class="progress-bar"><span style="width: 85%">85%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="title">Angular JS</td>
									<td>
										<progress max="100" value ="20">
											<div class="progress-bar"><span style="width: 20%">20%</span></div>
										</progress>
									</td>
								</tr>
								<tr><td>&nbsp;</td></tr>
								<tr>
									<td class="title">Shell</td>
									<td>
										<progress max="100" value ="95">
											<div class="progress-bar"><span style="width: 95%">95%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="title">Python<br></td>
									<td>
										<progress max="100" value ="25">
											<div class="progress-bar"><span style="width: 25%">25%</span></div>
										</progress>
									</td>
								</tr>
								<tr><td>&nbsp;</td></tr>
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
									<td class="head2" colspan=2>LANGUES</td>
								</tr>
								<tr>
									<td class="title">Français <br><img src="fr.png" /></td>
									<td><span class="title">Langue maternelle</span></td>
								</tr>
								<tr>
									<td class="title">Anglais<br><img src="en.png" /></td>
									<td>
										<span class="title">Courant</span>
										<br><b>Toefl</b> 97/110
										<br><b>Toeic</b> 825
										<br><b>Glyndwr University</b> - Wrexham, Pays de Galles - Eté 2008
										<br><b>Concordia University</b> - Montréal, Canada - 2011
										<br><b>CACIB - New-York</b>, Etats-Unis - 2014
									</td>
								</tr>
								<tr>
									<td class="title">Allemand<br><img src="de.png" /></td>
									<td><span class="title">Baccalauréat (LV2)</span></td>
								</tr>
								<tr>
									<td class="head2" colspan=2>CERTIFICATS</td>
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
