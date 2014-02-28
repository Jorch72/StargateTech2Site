<!DOCTYPE html>
<html>
<head>
	<!-- Standard Meta -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	
	<!-- Site Properties -->
	<title> StargateTech 2 </title>
	<link rel="stylesheet" type="text/css" href="../_resources/semantic/css/semantic.css">
	<link rel="stylesheet" type="text/css" href="../_resources/css/root.css">
	
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.address/1.6/jquery.address.js"></script>
	<script src="../_resources/semantic/javascript/semantic.js"></script>
	<script src="../_resources/js/menu.js"></script>
</head>


<body>
	<div id="root">
		<!-- LOGO -->
		<div id="logo"></div>
		
		<!-- MENU -->
		<div id="menu" class="ui tiered menu">
			<div class="menu" id="menu-tabs">
				<a class="active item orange" id="tab-misc">
					<i class="globe icon"></i>
					Miscellaneous
				</a>
				<a class="item orange" id="tab-block">
					<i class="users icon"></i>
					Blocks
				</a>
				<a class="item orange" id="tab-item">
					<i class="users icon"></i>
					Items
				</a>
				<a class="item orange" id="tab-res">
					<i class="truck icon"></i>
					Resources
				</a>
				<a class="item orange" id="tab-mech">
					<i class="settings icon"></i>
					Mechanics
				</a>
				<a class="item orange" id="tab-tut">
					<i class="users icon"></i>
					Tutorials
				</a>
			</div>
			<div class="ui sub menu" id="sub-misc">
				<a class="active item" href="../miscellaneous/home.html">
					<i class="home icon"></i>
					Home
				</a>
				<a class="item" href="../miscellaneous/downloads.html">
					<i class="download disk icon"></i>
					Downloads
				</a>
				<a class="item" href="../miscellaneous/changelog.html">
					<i class="text file icon"></i>
					Changelog
					</a>
				<a class="item" href="http://www.youtube.com/user/L0RDF0KAS" target="_blank">
					<i class="youtube icon"></i>
					YouTube Channel
				</a>
				<a class="item" href="http://www.minecraftforum.net/topic/1584795-" target="_blank">
					<i class="chat outline icon"></i>
					Forum Thread
				</a>
				<a class="item" href="https://github.com/LordFokas/StargateTech2" target="_blank">
					<i class="github alternate icon"></i>
					Source Code
				</a>
				<a class="item" href="http://webchat.esper.net/?nick=wikiUser&channels=StargateTech" target="_blank">
					<i class="chat outline icon"></i>
					IRC Channel
				</a>
			</div>
			<div class="ui sub menu" id="sub-block">
				<a class="item"> Shield Emitter </a>
				<a class="item"> Particle Ionizer </a>
				<a class="item"> Transport Ring </a>
				<a class="item"> Naquadah Ore </a>
				<a class="item"> Lantean Wall </a>
				<a class="item"> Naquadah Rail </a>
				<a class="item"> Stargate </a>
				<a class="item"> Abstract Bus Cable </a>
				<a class="item"> Abstract Bus Adapter </a>
			</div>
			<div class="ui sub menu" id="sub-item">
				<a class="item"> Personal Shield </a>
				<a class="item"> Tablet PC </a>
				<a class="item"> Power Crystals </a>
				<a class="item"> Naquadah Ingot </a>
				<a class="item"> Naquadah Dust </a>
				<a class="item"> Naquadah Bar </a>
				<a class="item"> Naquadah Plate </a>
				<a class="item"> Semiconductor Lattice </a>
				<a class="item"> Circuit Crystal </a>
			</div>
			<div class="ui sub menu" id="sub-res">
				<a class="item"> Power </a>
				<a class="item"> Ionized Particles </a>
			</div>
			<div class="ui sub menu" id="sub-mech">
				<a class="item"> Abstract Bus </a>
				<a class="item"> Lazy Intercom Protocol (LIP)</a>
			</div>
			<div class="ui sub menu" id="sub-tut">
				<a class="item">
					<i class="frown icon"></i>
					There are no tutorials yet
					<i class="frown icon"></i>
				</a>
			</div>
		</div>
		
		<!-- CONTENT -->
		<div id="content">
			<?php
				switch($tab){
					case "misc":
						if($item == "home"){ require "./_builder/rendering/misc/home.php"; }
						if($item == "downloads"){ require "./_builder/rendering/misc/downloads.php"; }
						if($item == "changelog"){ require "./_builder/rendering/misc/changelog.php"; }
						break;
					default: break;
				}
			?>
		</div>
		
		<!-- FOOTER -->
		<div class="ui inverted segment" id="footer">
			<span>
				<i class="blue code icon"></i>
				Designed and coded by LordFokas
			</span>
			<span>
				<i class="red bolt icon"></i>
				Powered by PHP and Semantic-UI
			</span>
		</div>
	</div>
</body>
</html>