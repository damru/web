<?php
	$print_pic=false;
	$print_contact=true;
	$print_loisirs=false;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv=Content-Type content="text/html; charset=UTF-8">
		<link href="fonts/fonts.css" rel="stylesheet" type="text/css" />
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<link href="css/progress.css" rel="stylesheet" type="text/css" />
	</head>
	<body style="">
		<div class="body dark-gray">
			<div class="damien">
				<table style="width: 100%">
					<tr style="width: 100%">
						<td>
							<span class="dark-green" style="font-size: 30px; font-weight: bold;">Damien Rubio</span>
						<?php if ($print_contact) echo '<br><br>(514) 915-6290 | <a class="green" href="mailto:job@damienrubio.com">job@damienrubio.com</a> | Montreal, QC, Canada'; ?>
						</td>
						<?php if ($print_pic) echo '<td rowspan=5 style="width: 112px; height:135px"><img src="img/id.png" /></td>'; ?>
					</tr>
				</table>
			</div>
			<table class="main">
				<tr>
					<td>
						<div class="background">
							<div class="category light-green">WORK EXPERIENCE</div>
							<table>
								<tr class="position">
									<td colspan=2>Senior Software Engineer / Technical Leader</td>
								</tr>
								<tr class="mission">
									<td class="date">
										<span class="dark-green">feb. 2017<br>present</span>
                                        <br><span class="duration light-green">
                                        <?php 
                                            $start = new DateTime("2017-02");
                                            $now = new DateTime("now");
                                            $interval = $start->diff($now);
                                            $y = $interval->y;
                                            $m = $interval->m;
                                            $y_label = $y . " year";
                                            $m_label = $m . " month";
                                            if ($y > 1) $y_label .= "s";
                                            if ($m > 1) $m_label .= "s";
                                            echo $y_label . " " . $m_label; 

                                        ?></span>
									</td>
									<td>
										<span class="company">Société Général CIB</span>
										<br><span class="location light-green">Montreal, QC, Canada<br>Paris, France</span>
										<br><span class="tasks">
											<ul>
												<li>Kickstarted a new project by creating guidelines for development, testing, build etc. in order to provide the future feature teams with strong and common basis.</li>
												<li>Designed a microservice architectured application providing many APIs to process legal contracts and provide services on them.</li>
												<li>Backend development with a TDD/BDD approach. Created integration testings and scenarios with business users and their requirements.
												<li>Successfully created build pipelines in order to have a continuous integration environment and flawlessly deliver in production.</li>
												<li>Contribution to the frontend client development.</li>
											</ul></span>
										<span class="job-skills">Java • Spring • Spring Boot • OAuth2 • Consul • Zuul • Jenkins • Sonar • Git • Maven • Docker • Angular • Python • BDD • TDD • DevOps</span>
									</td>
								</tr>
								<tr class="position">
									<td colspan=2>Software Engineer</td>
								</tr>
								<tr class="mission">
									<td class="date">
										<span class="dark-green">nov. 2016<br>feb. 2017</span>
										<br><span class="duration light-green">4 months</span>
									</td>
									<td>
										<span class="company">Generali</span>
										<br><span class="location light-green">La Plaine Saint-Denis, France</span>
										<br><span class="tasks">
											<ul>
												<li>Implemented good practices and development guidelines in order to stabilize and standardize all Java applications of the IT department (industrialization, TDD, BDD, intergration testings).</li>
												<li>Migrated an obsolete webservice from Corba to Java.</li>
											</ul></span>
										<span class="job-skills">J2EE • Javascript • Angular JS • Selenium/Fluentlenium  • Jenkins</span>
									</td>
								</tr>
								<tr class="position">
									<td colspan=2>Software Engineer</td>
								</tr>
								<tr class="mission">
									<td class="date">
										<span class="dark-green">oct. 2016</span>
										<br><span class="duration light-green">1 month</span>
									</td>
									<td>
										<span class="company">SFEIR</span>
										<br><span class="location light-green">Neuilly sur Seine, France</span>
										<br><span class="tasks">
											<ul>
												<li>Contribution to the backend development of an application dedicated to the employees skillsets with a graph database and graphic representation.</li>
											</ul></span>
										<span class="job-skills">Java • Docker • Spring • Spring Boot • Neo4J database • Google Cloud (AppEngine, ComputeEngine)</span>
									</td>
								</tr>
								<tr class="position">
									<td colspan=2>Software Engineer</td>
								</tr>
								<tr class="mission">
									<td class="date">
										<span class="dark-green">feb. 2013<br>oct. 2016</span>
										<br><span class="duration light-green">3 years 8 months</span>
									</td>
									<td>
										<span class="company">Crédit Agricole CIB</span>
										<br><span class="location light-green">Courbevoie, France<br>New-York, NY, USA (2014)</span>
										<br><span class="tasks">
											<ul>
												<li>Designed and implemented the complete refactoring of inhouse front-to-back booking application from Struts to Spring, and from Java 5 to Java ith teams in Paris and Noida (India).</li>
												<li>Completed the makeover of the CTRLM (scheduler) architecture for CACIB New-York IT Treasury department.</li>
												<li>Study and development for Treasury IT on front-to-back proprietary application Kondor+.</li>
												<li>Handled support L3 and managed offshore team in Noida (6 peoples, India).
											</ul></span>
										<span class="job-skills">Java • Spring • Hibernate • jUnit • SVN • Maven • Javascript • Kondor+ • Shell scripting • STP • Sybase ASE (T/SQL) • CTRLM • Management</span>
									</td>
								</tr>
								<tr class="position">
									<td colspan=2>Programmer Analyst</td>
								</tr>
								<tr class="mission">
									<td class="date">
										<span class="dark-green">may 2012<br>nov. 2012</span>
										<br><span class="duration light-green">7 months</span>
									</td>
									<td>
										<span class="company">BNP Paribas</span>
										<br><span class="location light-green">Montreuil, France</span>
										<br><span class="tasks">
											<ul>
												<li>Detailed analysis of business requirements to enhance the reporting tool of the Treasury.</li>
												<li>Development of new reports through the creation of complex stored procedures.</li>
												<li>Optimization of the stored procedures through indexes and complex sql joins with temporary tables.</li>
											</ul></span>
										<span class="job-skills">SVN • Shell scripting • Sybase ASE (T/SQL) • C++ • Powerbuilder</span>
									</td>
								</tr>
								<tr class="position">
									<td colspan=2>Web Developper</td>
								</tr>
								<tr class="mission">
									<td class="date">
										<span class="dark-green">apr. 2011<br>july. 2011</span>
										<br><span class="duration light-green">6 months</span>
									</td>
									<td>
										<span class="company">buzzing light</span>
										<br><span class="location light-green">Paris, France</span>
										<br><span class="tasks">
											<ul>
												<li>Backend and frontend development for a short-term jobs web and mobile platform.</li>
												<li>Creation of the search engine based on the user location. Enhancement of this search engine to take into account many criterias (distance, type of contract, relevance)</li>
												<li>Contribution to the design of the visual identity.</li>
											</ul></span>
										<span class="job-skills">PHP • HTML • CSS • Javascript • AJAX • MySQL • Google Geolocation API</span>
									</td>
								</tr>
							</table>
							<div class="category light-green">EDUCATION</div>
							<table>
								<tr class="position">
									<td colspan=2>
                                        <span>Diplôme d'Ingénieur</span>
                                        <br><span class="location grey">5th year degree in Computer Engineering</span>
                                    </td>
								</tr>
								<tr>
									<td class="date dark-green">2009 2012</td>
									<td>
                                        <span class="school">ECE Paris École d’Ingénieurs - Paris, France</span>
										<br><span class="dark-green">Major Information Technologies</span>
										<br><span class="location light-green">Minor Audiovisual & Multimedia</span>
										<br><span class="school grey">Concordia University – Montréal, QC, Canada (<i>sept. – dec. 2011</i>)</span>
										<br><span class="location light-green">Computer Science</span>
									</td>
								</tr>
								<tr class="position">
									<td colspan=2>
                                        <span>Diplôme Universitaire de Technologie (DUT) Informatique</span>
                                        <br><span class="location grey">2 years technical degree in Computer Engineering</span>
                                    </td>
								</tr>
								<tr>
									<td class="date dark-green">2007<br>2009</td>
									<td>
										<span class="school">IUT de Montreuil Université Paris 8 - Montreuil, France</span>
										<br><span class="dark-green">Major Software Development</span>
										<br><span class="location light-green">Minor Software Development</span>
										<br><span class="school grey">Wrexham Glyndwr University – Wrexham, Wales (<i>jun. – aug. 2008</i>)</span>
										<br><span class="light-green">Applied Computing</span>
									</td>
								</tr>
								<tr class="position">
									<td colspan=2>
                                        <span>Diplôme d'Etudes Universitaires Générales (DEUG) d'Admistration Economique et Sociale</span>
                                        <br><span class="location grey">2 years University degree in Administration, Economics and Social Science</span>
                                    </td>
								</tr>
								<tr>
									<td class="date dark-green">2004<br>2007</td>
									<td>
										<span class="school">Université Paris 1 Panthéon-Sorbonne - Paris, France</span>
										<br><span class="location light-green"></span>
									</td>
								</tr>
								<tr class="position">
									<td colspan=2>
                                        <span>Baccalauréat Economique et Social</span>
                                        <br><span class="location grey">French High-School diploma in Economics And Social Science</span>                                        
                                    </td>
								</tr>
								<tr>
									<td class="date dark-green">2004</td>
									<td>
										<span class="school">Lycée Romain Rolland - Ivry sur Seine, France</span>
										<br><span>Major Economics</span>
									</td>
								</tr>
							</table>
						</div>
					</td>
					<td>
						<div class="skills">
							<div class="header light-green">Skills</div>
							<div class="category" colspan=2>Architecture / Conception / Methodology</div>
							<table>
								<tr>
									<td class="title">UML / Merise</td>
									<td>
										<progress max="100" value ="90">
											<div class="progress-bar"><span style="width: 90%">90%</span></div>
										</progress>
									</td>
								</tr>
								<tr>
									<td class="title">TDD / BDD</td>
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
									<td class="title">DevOps</td>
									<td>
										<progress max="100" value ="85">
											<div class="progress-bar"><span style="width: 85%">85%</span></div>
										</progress>
									</td>
								</tr>
							</table>
							<div class="category" colspan=2>Languages / Frameworks</div>
							<table>
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
										<progress max="100" value ="75">
											<div class="progress-bar"><span style="width: 75%">75%</span></div>
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
							</table>
							<div class="category" colspan=2>OS</div>
							<table>
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
							</table>
							<div class="category" colspan=2>Databases</div>
							<table>
								<tr>
									<td class="title">MySQL, TSQL, PostgreSQL</td>
									<td>
										<progress max="100" value ="95">
											<div class="progress-bar"><span style="width: 95%">95%</span></div>
										</progress>
									</td>
								</tr>
							</table>
							<div class="category" colspan=2>Industrialization / Platforms</div>
							<table>
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
									<td class="title">AWS</td>
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
							</table>
							<div class="category" colspan=2>Communication</div>
							<table>
								<tr>
									<td class="title"><img src="img/fr.png" /></td>
									<td><span class="title">mother tongue</span></td>
								</tr>
								<tr>
									<td class="title"><img src="img/en.png" /></td>
									<td>
										<span class="title">operational</span>
									</td>
								</tr>
							</table>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>
