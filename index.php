	<?php
	require_once('class.translator.php');

	if(isset($_GET['lang']))
		$translate = new Translator($_GET['lang']);
	else
		$translate = new Translator('en');
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>phpTranslator</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" href="https://rawgit.com/HAPwebsite/MP.css/master/mp.min.css">
  	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/styles/default.min.css">
</head>
<body>
	
	<style>
		.x {
			width: 100%;
			height: 10px;
			background: #5596e6;
		}
		.x-hero {
			background: url('https://developer.ibm.com/design/wp-content/uploads/sites/35/2014/12/languagesketch.png');
			background-color: #5596e6;
			background-position: center;
			background-repeat: no-repeat;
			width: 100%;
			height: auto;
		}
		.x-nav {
			background: white !important;
		}
		.white {
			background: white;
		}
	</style>

	<div class="x"></div>
	<section class="hero is-large is-bold x-hero">
	<?php include('nav.php'); ?>
	  <div class="hero-body">
	  </div>
	</section>

	<div class="p40 white">

	<div class="container">
		<div class="columns">
		  <div class="column has-text-centered">
		    <h1 class="title is-2">
		    	<i class="fa fa-github"></i> <br>
		    	<span class="title"><?php $translate->__('Open Source'); ?></span>
		    </h1>
		    <p><?php $translate->__('Open Source, you will get everything. Modify and use it for you or for your clients.'); ?></p>
		  </div>
		  <div class="column has-text-centered">
		    <h1 class="title is-2">
		    	<i class="fa fa-language"></i>
		    	<br>
		    	<span class="title"><?php $translate->__('Translate Easy'); ?></span>
		    </h1>
		    <p><?php $translate->__('Easy way to translate your website, read documentation for how to use it.'); ?></p>
		  </div>
		  <div class="column has-text-centered">
		    <h1 class="title is-2">
		    	<i class="fa fa-code"></i>
		    	<br>
		    	<span class="title"><?php $translate->__('Clean Code'); ?></span>
		    </h1>
		    <p><?php $translate->__('I will try to provide clean code, even that I`m a mess.'); ?></p>
		  </div>
		  <div class="column has-text-centered">
		    <h1 class="title is-2">
		    	<i class="fa fa-credit-card"></i>
		    	<br>
		    	<span class="title"><?php $translate->__('It`s free!'); ?></span>
		    </h1>
		    <p><?php $translate->__('Yes!'); ?></p>
		  </div>
		</div>			
	</div>

	</div>

	<div class="notification is-dark is-bold">
		<div class="p80-0">
			<div class="container">
				
				<div class="columns">
					<div class="column">
						<h1 class="title is-1"><?php $translate->__('Public Version'); ?> <span class="tag is-info">1.0.0</span></h1>
					</div>
					<div class="column">
						<a class="button is-info is-large is-pulled-right"><?php $translate->__('Download Now'); ?></a>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="container p40-0">
		<div class="columns">
			<div class="column">
				<h2><b><?php $translate->__('Required in everypage.'); ?></b></h2>
				<div class="p10"></div>
				<pre><code class="php">
	&lt;?php
	require_once('class.translator.php');

	if(isset($_GET['lang']))
		$translate = new Translator($_GET['lang']);
	else
		$translate = new Translator('en');
	?>
				</code></pre>
			</div>
			<div class="column">
				<h2><b><?php $translate->__('Replace everything that you want to translate!'); ?></b></h2>
				<div class="p10"></div>
				<pre><code class="html">
	&lt;p>&lt;php $translate->__('Hello Galaxy'); ?>&lt;/p>
				</code></pre>	
				<div class="m40-0"></div>
				<div class="has-text-centered">
					<h1 class="title"><i class="fa fa-file-text-o"></i></h1>
					<h2><b><?php $translate->__('Check'); ?> <a href="#"><?php $translate->__('Documentations'); ?></a> <?php $translate->__('for how-to use.'); ?></b></h2>
				</div>

			</div>
		</div>
	</div>
	
	<?php include('footer.php'); ?>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/highlight.min.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>
	<script>
		$(".link").click(function(){

		    var safeLangs = ['en','al','de','fr','gr','ru'];
		  
		    var rand = function() {
		        return Math.floor(Math.random()*6);
		    };
		    var randomLangFunction = function() {
		        var randomLang = safeLangs[rand()];
		        return randomLang;
		    };

		   url = "?lang=" + randomLangFunction();
		   console.log(url);
		   window.location = url;
		})
	</script>
</body>
</html>