<?php

## Mail

$sent = null;
if(!empty($_POST))
{
  $message = sprintf("De %s (%s)\n %s", $_POST['name'], $_POST['email'], $_POST['message']);
  $sent = mail('vincent.agnano@particul.es', 'Contact par agnanov.free.fr', $message);
}


## Tweets

require 'JSON.class.php';

$tweets_feed = @file_get_contents('http://twitter.com/status/user_timeline/vinyll.json?count=4');

$tweets = JSON::decode($tweets_feed, false);

//var_dump($tweets);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title>Développeur Symfony et Django à Montpellier - Vincent Agnano</title>
	<meta name="keywords" content="développeur django, formateur django, développeur django, django montpellier, django,, indépendant django, développeur python, développeur PHP">
	<meta name="description" content="Développeur de projets Web sous Django (Python) ou Symfony (PHP) basé à Montpellier, organisation scrum, travail collaboratif en réseau." />
	<meta name="author" content="Vincent Agnano">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="styles/layout.css" type="text/css" />
	<link rel="stylesheet" href="styles/custom.css" type="text/css" />
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-2011654-7']);
	  _gaq.push(['_trackPageview']);
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
	  })();
	</script>
</head>
<body id="top">
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h2><a href="/">Vincent Agnano</a></h2>
      <h1>Développeur Symfony / Django</h1>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col2">
  <div id="intro">
    <div class="fl_left">
      <h3>
      Développeur d'applications web sous <strong><a href="http://www.symfony-project.org" title="Framework PHP Symfony">Symfony</a> et <a href="http://www.djangoproject.org" title="Framework Python Django">Django</a></strong> en méthodologie <strong><a href="http://fr.wikipedia.org/wiki/Scrum_(m%C3%A9thode)" title="Méthode agile Scrum">scrum</a></strong>, basé à Montpellier.<br />
      <strong>Développeur Python, Django</strong>, PHP et Symfony impliqué dans le développement d'applications et de plugins <strong>open-source</strong>.
      </h3>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col3">
  <div id="latest">
    <ul>
      <li>
        <h2>Curriculum Vitae</h2>
        <a class="image" href="/fr/agnanovince.pdf" lang="en">C.V.</a>
        <p>Connectez-vous sur <a href="http://www.linkedin.com/in/vincentagnano" lang="en">Linked-in</a> ou sur <a href="http://www.viadeo.com/fr/profile/vincent.agnano" title="CV développeur Web Symfony / Django" lang="fr">Viadeo</a></p>
      </li>
      <li>
        <h2>Présentation</h2>
        <a class="image" href="/fr/travaux.htm">Travaux</a>
        <p><a href="http://github.com/vinyll" lang="fr">Développement open-source</a> en cours, <br />
        et <a href="http://particul.es/opensource">projets Particul.es</a></p>
      </li>
      <li class="last">
        <h2>Contact</h2>
        <a class="image" href="/fr/contact.htm">Contact</a>
        <p>Enregistrez-vous sur <a href="http://twitter.com/vinyll" lang="en" title="Voir le profil de Vincent Agnano sur Twitter">twitter</a></p> ou contactez <a href="http://particul.es" lang="fr" title="Particules, développement symfony Montpellier">Particul.es</a>
      </li>
    </ul>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col4">
  <div id="container">
    <div id="content">
      <h2>Davantage d'informations</h2>
      <p><a href="http://particul.es" lang="fr" title="Particules, Experts symfony et développement Web" lang="fr">Particul.es</a> : Fédérateur de compétences, collectif d'experts.</p>
      <p><a href="http://particul.es/blog" title="blog symfony, linux, maintenance et expertise">Blog Particul.es</a> : Solutions techniques et comptes rendus.</p>
      <p><a href="http://vinyll.particul.es" title="blog python, web, html5, css3" lang="en">Blog perso</a> : Notes techniques et partages.</p>
      <p> … <a href="http://twitter.com/vinyll" lang="en" title="Vincent Agnano sur Twitter">Twitter</a>, <a href="http://www.linkedin.com/in/vincentagnano" lang="en" title="CV architecte/développeur django">CV</a>, <a href="http://www.delicious.com/v.agnano" title="Ressources et marques-pages">Delicious</a>, <a href="http://onanga.com" title="développeur web indépendant à Montpellier">Onanga</a></p>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col5">
  <div id="footer">
    <div id="contactform">
      <h2>Contact direct</h2>
      <form action="#contactform" method="post">
        <?php if($sent !== null): ?>
          <?php if($sent === true): ?>
            <p class="notice">Message envoyé.</p>
          <?php else: ?>
            <p class="error">Erreur lors de l'envoi. Veuillez réessayer ou contacter <a href="http://particul.es" title="Contacter Particules" lang="fr">Particul.es</a>.</p>
          <?php endif ?>
        <?php endif ?>
        <fieldset>
			<legend>Formulaire de contact</legend>
			<div class="row" id="fullname_row">
				<label for="fullname">Nom :</label>
				<input id="fullname" name="name" type="text" value="" />
			</div>
			<div class="row" id="emailaddress_row">
				<label for="emailaddress" class="margin">Email :</label>
				<input id="emailaddress" name="email" type="text" value="" />
			</div>
			<div class="row" id="message_row">
				<label for="message">Message :</label>
				<textarea id="message" name="message" cols="40" rows="4"></textarea>
			</div>
			
			<input id="submitform" name="submitform" type="submit" value="Envoyer" />
			
        </fieldset>
      </form>
    </div>
    <div class="fl_right">
      <div class="footbox">
        <?php if(isset($tweets[0])): ?>
        <h2>Derniers tweets</h2>
        <img src="<?php echo $tweets[0]->user->profile_image_url ?>" alt="Développeur Symfony / Django sur Twitter" />
        <ul id="tweets">
		  <?php foreach($tweets as $tweet): ?>
		  <li><a href="http://twitter.com/vinyll" lang="en" title="Voir les tweets de Vinyll"><?php echo $tweet->text ?></a></li>
		  <?php endforeach ?>
        </ul>
        <?php endif ?>
        <a href="http://twitter.com/vinyll" lang="en" title="Tweets sur Django et Symfony">Voir tous les tweets -></a>
      </div>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col6">
  <div id="copyright">
  </div>
</div>
</body>
</html>
