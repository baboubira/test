<?php
// $Id: page.tpl.php,v 1.1.2.4 2010/08/13 22:08:24 troy Exp $
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <title><?php echo $head_title ?></title>
  <?php echo $head ?>
  <?php echo $styles ?>
  <?php echo $scripts ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>

<!--[if lte IE 6]>
<link rel="stylesheet" href="<?php echo base_path() . path_to_theme() ?>/ie6-fixes.css" type="text/css">
<![endif]-->

<!--[if lte IE 7]>
<link rel="stylesheet" href="<?php echo base_path() . path_to_theme() ?>/ie7-fixes.css" type="text/css">
<![endif]-->
</head>

<body class="html">
	<div class="container body">
		<!--nav class="navbar navbar-inverse">
			<div class="row">
				<?php if ($_GET['q'] == 'user/register') ?>
					<?php if (!$user->uid): ?>
					<div class="col-md-2">
						<?php echo l(t("Se Connecter"), "user");?>
					</div>
					
						<?php if ($registration_enabled): ?>   
							<div class="col-md-offset-7 col-md-3">
								<?php echo l(t("Créer un nouveau compte"), "user/register");?>
							</div>
						<?php endif; ?>
						<?php else: ?> 
							<div class="col-md-2">
								<?php echo t("<strong>!user</strong>", array('!user' => l($user->name, "user"))); ?>&nbsp;|&nbsp;<?php echo l(t("Modifier"), "user/" . $user->uid . "/edit");?>
							</div>
							<div class="col-md-offset-7 col-md-3">
								<?php echo l(t("Se déconnecter"), "logout"); ?>
							</div>
				<?php endif; ?>
			</div>
		</nav-->

			
	<?php //if ($_GET['q'] == 'user/register') ?>
		<?php if (!$user->uid): ?>
		<div class="row">
			<div class="col-md-12 banniere">
				<div class="row">
					<div class="logo-1 text-center col-md-offset-1 col-md-2">
						<img src="/sites/all/themes/padticeucad/images/logoUCAD.png" />
					</div>
					<div class="col-md-9">
						<h2 class="univ">UNIVERSITE CHEIKH ANTA DIOP DE DAKAR</h2>
						<p class="sous-titre">
							Logiciel pour Etudiant et Personnel de l'administration des Etablissements d'enseignement
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="text-center peut_faire">
							Le système d'information de l'étudiant peut faire
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="text-center offre">
							Administration et Personnel -
							Scolarite -
							Finance -
							Nouvelles et Communication -
							Enseignement, Apprentissage et Recherche
						</p>
					</div>
				</div>
				<div class="row">
					<div class="text-center col-md-12">
						<?php echo $left; ?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row text-center milieu">
			<div class="col-md-4">
				<div class="thumbnail">
				  <img src="/sites/all/themes/padticeucad/images/icons/Ico1.png" alt="Admnistration et Personnel">
				  <div class="caption">
					<h3 class="center">
						Admnistration et Personnel
					</h3>
					<p>
						Paphius quin etiam et Cornelius senatores, ambo venenorum artibus pravis se polluisse confessi, eodem pronuntiante Maximino sunt interfecti. pari sorte etiam procurator monetae extinctus est.
					</p>
				  </div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
				  <img src="/sites/all/themes/padticeucad/images/icons/Ico2.png" alt="Admnistration et Personnel">
				  <div class="caption">
					<h3 class="center">
						Scolarité
					</h3>
					<p>
						Paphius quin etiam et Cornelius senatores, ambo venenorum artibus pravis se polluisse confessi, eodem pronuntiante Maximino sunt interfecti. pari sorte etiam procurator monetae extinctus est.
					</p>
				  </div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
				  <img src="/sites/all/themes/padticeucad/images/icons/Ico3.png" alt="Admnistration et Personnel">
				  <div class="caption">
					<h3 class="center">
						Finances
					</h3>
					<p>
						Paphius quin etiam et Cornelius senatores, ambo venenorum artibus pravis se polluisse confessi, eodem pronuntiante Maximino sunt interfecti. pari sorte etiam procurator monetae extinctus est.
					</p>
				  </div>
				</div>
			</div>
			</div>
			
			<div class="row text-center">
				<div class="col-md-4">
					<div class="thumbnail">
					  <img src="/sites/all/themes/padticeucad/images/icons/Ico4.png" alt="Admnistration et Personnel">
					  <div class="caption">
						<h3 class="center">
							Nouvelles et communications
						</h3>
						<p>
							Paphius quin etiam et Cornelius senatores, ambo venenorum artibus pravis se polluisse confessi, eodem pronuntiante Maximino sunt interfecti. pari sorte etiam procurator monetae extinctus est.
						</p>
					  </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
					  <img src="/sites/all/themes/padticeucad/images/icons/Ico5.png" alt="Administration et personnel">
					  <div class="caption">
						<h3 class="center">
							Enseignement, Apprentissage et Recherche
						</h3>
						<p>
							Paphius quin etiam et Cornelius senatores, ambo venenorum artibus pravis se polluisse confessi, eodem pronuntiante Maximino sunt interfecti. pari sorte etiam procurator monetae extinctus est.
						</p>
					  </div>
					</div>
				</div>
			</div>
		
	<?php endif; ?>
	</div>

	<?php if (module_exists('contact')): ?>
		<a class="mail" href="<?php echo url('contact'); ?>"></a>
	<?php endif; ?>
								
	<?php if ($top_menu): ?>
		<?php echo $top_menu; ?> 
	<?php endif; ?> 		   

	<!--table class="table">
		<tr>
		<?php if ($logo!=""):?>
			<td class="logo">
				<?php if(!drupal_is_front_page()):?>
					<a href="<?php echo base_path();?>">
						<?php endif;?>
							<img src="<?php echo $logo;?>" alt=""/>
						<?php if(!drupal_is_front_page()):?>
					</a>
				<?php endif;?>
			</td>
		<?php endif;?>  

			<td class="slogan">
				<h2>
					<?php if(!drupal_is_front_page()):?>
						<a href="<?php echo $front_page; ?>" title="<?php echo t('Home') ?>">
						<?php endif;?>
						<?php echo $site_name ?>
						<?php if(!drupal_is_front_page()):?>
						</a>
					<?php endif;?>
				</h2>
			<?php if ($site_slogan): ?>
			<p><?php echo $site_slogan; ?></p>
			<?php endif; ?>
			</td>
		</tr>
	</table-->

	<?php if ($user->uid): ?>
	<div class="container body">
		<div class="row ligne1">
			<nav class="navbar navbar-inverse">
				<?php if ($_GET['q'] == 'user/register') ?>
					<?php if (!$user->uid): ?>
						<div class="col-md-2">
							<?php echo l(t("Se Connecter"), "user");?>
						</div>
					
						<?php if ($registration_enabled): ?>   
							<div class="col-md-offset-4 col-md-3">
								<?php echo l(t("Créer un nouveau compte"), "user/register");?>
							</div>
						<?php endif; ?>
						<?php else: ?> 
							<div class="col-md-3">
								<?php echo t("<strong>!user</strong>", array('!user' => l($user->name, "user"))); ?>&nbsp;|&nbsp;<?php echo l(t("Modifier"), "user/" . $user->uid . "/edit");?>
							</div>
							<div class="col-md-2">
								<div class="rss-box">
									<?php if ($feed_icons): ?>
									<a href="<?php echo url("rss.xml"); ?>"><img src="<?php echo base_path() . path_to_theme() ?>/images/rss-bg.gif"  alt="RSS" /></a>
									<?php endif; ?>
									<a class="home" href="<?php print $base_path ?>" title="<?php print t('Home') ?>"></a>
									<?php if (module_exists('contact')): ?>
									<a class="mail" href="<?php echo url('contact'); ?>"></a>
									<?php endif; ?>
								</div>
							</div>	
							<div class="col-md-offset-4 col-md-3">
								<?php echo l(t("Se déconnecter"), "logout"); ?>
							</div>
							
				<?php endif; ?>
			</nav>
		</div>
		<div class="row banniere1">
			<div class="col-md-offset-1 col-md-2">
				<img class="logo-petit" src="/sites/all/themes/padticeucad/images/logoUCAD.png" />
			</div>
			<div class="col-md-9">
				<h2 class="univ">UNIVERSITE CHEIKH ANTA DIOP DE DAKAR</h2>
				<p class="sous-titre">
					Logiciel pour Etudiant et Personnel de l'administration des Etablissements d'enseignement
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<?php if ($left): ?>
					<?php echo $left; ?>
				<?php endif; ?>
			</div>
			<div class="col-md-9">
				<?php if ($show_messages): ?>
					<div class="alert alert-danger alert-1" role="alert">
						<?php echo $messages; ?>
					</div>
				<?php endif; ?>
				
				<div class="alert alert-success" role="alert">
					<?php echo $help ?>
				</div>

				<?php if ($content_top): ?>
					<?php echo $content_top ?>
				<?php endif; ?>

				<?php echo $breadcrumb ?>

				<?php if ($tabs): ?>
					<?php echo $tabs; ?>
				<?php endif; ?>

				<?php if ($title): ?>
					<h1>
						<?php echo $title ?>
					</h1>
				<?php endif; ?>

				<?php if ($content_bottom): ?>
					<?php echo $content_bottom ?>
				<?php endif; ?>

				<?php if ($right): ?>     
					<?php echo $right; ?>
				<?php endif; ?>
				
				<?php echo $content; ?>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<?php if (!$user->uid): ?>
	<div class="container">
		<div class="row">
			<div id="myCarousel" class="carousel carousel-padtice" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
				</ol>

				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<div class="row">
							<div class="col-md-offset-2 col-md-5 text-center">
								<h1>Un design responsive</h1>
								<h2>Version mobile</h2>
								<p>
									EduERP est basé sur du drupal qui est une option viable pour une version mobile.
								</p>
							</div>
							<div class="col-md-5">
								<img src="/sites/all/themes/padticeucad/images/portable.png" alt="Responsive design">
							</div>
						</div>
					</div>

					<div class="item">
						<img src="/sites/all/themes/padticeucad/images/Footer.png" alt="Multiplateforme">
					</div>
				</div>
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Précédent</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Suivant</span>
				</a>
			</div>
		</div>
	</div>
	<?php endif; ?>
	
	
	<div class="container">
		<div class="row pied3">
			<div class="col-md-12 ">
				<div class="row ">
					<div class="col-md-offset-1 col-md-11">
						<h1>Caractéristiques</h1>
						<p>
							"EduERP est modulaire et facile à configurer selon les besoins individuels <br />
							Cela aide les institutions à une meilleure configuration pour une utilisation optimale"
						</p>
					</div>
					<div class="col-md-offset-8 col-md-4">
						<a href="#">
							<img src="/sites/all/themes/padticeucad/images/icons/in.png" />
						</a>
						<a href="#">
							<img src="/sites/all/themes/padticeucad/images/icons/g.png" />
						</a>
						<a href="#">
							<img src="/sites/all/themes/padticeucad/images/icons/t.png" />
						</a>
						<a href="#">
							<img src="/sites/all/themes/padticeucad/images/icons/f.png" />
						</a>
						<a href="#">
							<img src="/sites/all/themes/padticeucad/images/icons/p.png" />
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 pied2 text-center">
				<a href="#"> Administration et Personnel </a> |
				<a href="#"> Scolarite </a> |
				<a href="#"> Finance </a> |
				<a href="#"> Nouvelles et Communication </a> |
				<a href="#"> Enseignement, Apprentissage et Recherche </a> 
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 pied1 text-center">
				Copyright &copy; 2015 - Tous droits reserves UCAD
			</div>
		</div>
	</div>
</body>
</html>