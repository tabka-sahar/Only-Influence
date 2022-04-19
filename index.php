<!DOCTYPE html>
<html lang="en">

<head>
    <!--
     - Roxy: Bootstrap template by GettTemplates.com
     - https://gettemplates.co/roxy
    -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Only Influence</title>
    <meta name="description" content="Roxy">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/lightcase/lightcase.css">
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Signika+Negative:300,400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Kameron:400,700' rel='stylesheet' type='text/css'>
    
  

    <!-- CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/style.count.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <script defer src = "./script.js"></script>
    <!-- <script defer src = "./mail.php"></script> -->

</head>
<body data-spy="scroll" data-target="#navbar" class="static-layout" >

<ul class="social-media-container">
	<li class="social-media blog">
		<i class="fab fa-facebook"></i>
		<a href="#" target="_blank">Follo me on facebook</a>
	</li>
	<li class="social-media pinterest">
		<i class="fab fa-pinterest"></i>
		<a href="https://www.pinterest.com/fr/" target="_blank">Follow me on Pinterest</a>
	</li>
	<li class="social-media linkedin">
		<i class="fab fa-linkedin-in"></i>
		<a href="https://www.linkedin.com/fr/" target="_blank">Connect on Linkedin</a>
	</li>
	<li class="social-media instagram">
		<i class="fab fa-instagram"></i>
		<a href="https://www.instagram.com" target="_blank">Follow me on Instagram</a>
	</li>
	<li class="social-media github">
		<i class="fab fa-github"></i>
		<a href="https://github.com/liloo2040" target="_blank">See my projects on Github</a>
	</li>
</ul>
    <div id="popup-reg" class="popup">
        <div class="popup-content">
            <div>
            <form  action="mail.php"  id = "demoForm" method="post" class="send-form"  name="contact_form">
                  <!-- <form action = "../Only-Influence/oi.zip" method = "GET"  class="send-form"> -->
                    <h4> Veuillez remplir ce formulaire</h4>
                    <div id = "error">  </div>
                  <div class="form-group">
                    <input type="text" placeholder="Nom" id="nom" name="nom" required>
                    <label for="name">
                      <i class="fa fa-user"></i>
                    </label>
                  </div>
                  <div class="form-group">
                    <input type="text" placeholder="Prénom" id="prénom" name="prénom" required>
                    <label for="name">
                      <i class="fa fa-user"></i>
                    </label>
                  </div>
     
     
                
                  <div class="form-group">
                    <input type="email" placeholder="Mail..." id="mail" name="mail" required>
                    <label for="mail">
                      <i class="fa fa-envelope"></i>
                    </label>
                
                   
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Nom de l 'entreprise" id="entreprise" name="entreprise">
                    <label for="nomentreprise">
                      <i class="fas fa-building"></i>
                    </label>
                  </div>
                  <div class="form-group">
                    <input type="text" placeholder="Téléphone" id="téléphone" name="téléphone">
                    <label for="téléphone">
                        <i class="fa fa-phone"></i>
                    </label>
                  </div>
                  <span class="input-group-btn"><button onClick="mail.php" type="submit" class="btn btn-secondary btn-form display-4">Download</button></span>

                  <!-- <input type="submit" value="Submit" id="submit-form" > -->
                  <!-- <input type="submit" id="submit-form" 
            value="submit" hidden /> -->
                <!-- <input type="submit" value="Submit" class="w3-button w3-indigo" href = "../Only-Influence/oi.zip" download = "../Only-Influence/oi.zip" > <i class="fa fa-download"></i>Télécharger</input> -->
                 <!-- <button id="download-pdf" > kooo </button> -->

       
                         
    
                    <!-- <button class="w3-button w3-indigo" id = "download-pdf"  type="submit" name = "submit" > <i class="fa fa-download"></i> Télécharger</button> -->
                <!-- <button class="w3-button w3-indigo" type="submit" id="send-email" > <i class="fa fa-download"></i> Télécharger</button> -->
                    <!-- <button class="w3-button w3-indigo" type="submit" id="send-email" > <i class="fa fa-download"></i> Télécharger</button> -->
                    
                    <!-- <button id="download-pdf">Submit</button> -->
                </form>
             

   
                
         

            
             

              </div>
              <div id = status></div>

              <!-- <button type="submit" class="btn btn-lg btn-success btn-block"><a id="send-email" > <i class="fa fa-download"></i>Télécharger</a></button> -->


          <span class="fade-out main-btn-circle">╳</span>
        </div>
    </div>














    <div class=""></div>
<div id="modal-content" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                
            </div>
            <!-- <div class="modal-body">
                <p class="signCenter">
                  <span class="closeSymbol">X</span>
                </p>
            </div> -->
          <div sty class="modal-footer signCenter"> <p style =   "    margin-top: -6%;
            margin-right: 26%;"class="snapHdr">Téléchargez notre livre blanc!</p> </div>
            <h3 style = " font-weight: bold;    margin-left: 5%;margin-top: 7%;">Notre livre blanc est présente à notre public <br>ciblé Les livres blancs que nous concevons <br>pour nos clients permettent de prouver <br>une expertise sur  un sujet et générer <br>            des leads grâce à leur diffusion</h3>
            <img  width="30%" style = "margin-top: -20%;
            margin-left: 66%;" src ="img/livre.png">
            <button style = "      margin-left: 33%;
            margin-top: 15%;" class="btn btn-default popup-btn closeftr"data-popup="popup-reg"data-dismiss="modal"> <i class="fa fa-download"></i> Télécharger <a href = "#"></a>

            </button>
           
                <!-- <a style = "margin-bottom:-23%;margin-left: 20%"  href="#" class="btn closeftr" data-dismiss="modal">Fermer</a> -->


          
             
    

                
           
        </div>
    </div>
</div>




    

    
	
       
       
        
   


<div id="side-nav" class="sidenav">
	<a href="javascript:void(0)" id="side-nav-close">&times;</a>
	
	<div class="sidenav-content">
		<p>
			Avenue des Etats unis Tunis
		</p>
		<p>
			<span class="fs-16 primary-color">(+216) 29 171 745</span>
		</p>
		<p>hello@onlyinfluence.com</p>
	</div>
</div>
<div id="side-search" class="sidenav">
	<a href="javascript:void(0)" id="side-search-close">&times;</a>
	<div class="sidenav-content">
		<form action="">

			<div class="input-group md-form form-sm form-2 pl-0">
			  <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
			  <div class="input-group-append">
			    <button class="input-group-text red lighten-3" id="basic-text1">
			    	<span class="lnr lnr-magnifier"></span>
			    </button>
			  </div>
			</div>

		</form>
	</div>
	
</div>

  <!-- <script>
  let countDownBox	= document.querySelector(".allTime");
		let daysBox			= document.querySelector(".days");
		let hrsBox			= document.querySelector(".hrs");
		let minBox			= document.querySelector(".min");
		let secBox			= document.querySelector(".sec");
		let countDownDate	= new Date("Dec 31, 2022 00:01:00").getTime();

		// COUNT DOWN FUNCTION
		let x = setInterval(function() {

			// GET DATE
			let now = new Date().getTime();

			// TIME BETWEEN NOW AND DATE
			let distance = countDownDate - now;

			// CALCULATION TIME
			let days 	= Math.floor(distance / (1000 * 60 * 60 * 24));
			let hours 	= Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			let minutes	= Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			let seconds	= Math.floor((distance % (1000 * 60)) / 1000);

			daysBox.innerHTML	= days + "<span>jours</span>";
			hrsBox.innerHTML 	= hours + "<span>heures</span>";
			minBox.innerHTML 	= minutes + "<span>Minutes</span>";
			secBox.innerHTML 	= seconds + "<span>Secondes</span>";

			// IF FINISH
			if (distance < 0) {
				clearInterval(x);
				countDownBox.innerHTML = "¡FELICIDADES!";
			}
		}, 1000);

  </script> -->
<!-- 
	<div class="jumbotron d-flex align-items-center">
        <div class="text-box">
            <h1 class="heading-primary">
             <span style = "font-family: helvetica;"class="heading-primary-main">Only Influence</span>
              <h2 class="heading-primary-sub">Votre Solution D'influence <br> Marketing</h2>
             </h1>
             <div>
                <p style = "margin-left:-30%;margin-top: 10%;font-family: helvetica;"> <a  href = #features class="w3-button w3-deep-purple">Je suis une marque</a></p>
                  <p style = "margin-left:10%;margin-top: -5.5%;font-family: helvetica;"><a href = influenceurs.html class="w3-button w3-deep-purple">Je suis influenceur</a></p>
                 
                 </div>

       </div>
     
  </div> -->
  
<!--   
  <div class="rectangle-1"></div>
  <div class="rectangle-2"></div>
  <div class="rectangle-transparent-1"></div>
  <div class="rectangle-transparent-2"></div>
  <div class="circle-1"></div>
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="triangle triangle-1">
  	<img src="img/obj_triangle.png" alt="">
  </div>
  <div class="triangle triangle-2">
  	<img src="img/obj_triangle.png" alt="">
  </div>
  <div class="triangle triangle-3">
  	<img src="img/obj_triangle.png" alt="">
  </div>
  <div class="triangle triangle-4">
  	<img src="img/obj_triangle.png" alt="">
  </div> -->
	<!-- Features Section----------------------------------------------------------------------------------------------------------------------------------------------->
    <div class = "divcontainer">
    <img  style = "width: 100%;"src = "img/BG.png">
    <img  style = "width: 10%;    margin-left: 5%; margin-top:-108%"src="img/logo 1.png" alt="">
        
    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav-header" aria-controls="navbar-nav-header" aria-expanded="false" aria-label="Toggle navigation"> -->
        <!-- <span class="lnr lnr-menu"></span> -->
    </button>
       <div class="topnav">

        <ul class="navbar-nav ml-auto">
            <li  class="nav-item">
                <a style = "color: white;margin-left: 68%;margin-top: -56%;font-family: Helvetica;" class="nav-link" href="index.html">Accueil</a>
            </li>
            <li class="nav-item">
                <a style = "color: white ; margin-top: -56%;margin-left: 72%;font-family: Helvetica;" class="nav-link" href="#qui">Qui sommes nous</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
            </li> -->
            <li class="nav-item">
                <a style = "color: white; margin-left:80%;margin-top: -56%;font-family: Helvetica;"class="nav-link" href="influenceurs.html">Influenceurs</a>
            </li>
            <li class="nav-item">
                <a style = "color: white;margin-left: 86%;margin-top:-56%;font-family: Helvetica;" class="nav-link" href="#reservation">Contact</a>
            </li>
           
            <!-- <li class="nav-item">
                <a id="side-search-open" class="nav-link" href="#">
                    <span class="lnr lnr-magnifier"></span>
                </a>
            </li> -->
             <li class="nav-item only-desktop">
                <a style = "color: white ;margin-left: 90%;margin-top:-56%;font-family: Helvetica;" class="nav-link" id="side-nav-open" href="#">
                    <span class="lnr lnr-menu"></span>
                </a>
            </li>
        </ul>
        </div>
    <div style = " font-family: helvetica;" class="imgtext">Only Influence </div>
    <div class="votre">Votre solution d'influence marketing </div>
    <div>
        <a style = "margin-top:-45%; margin-left:40%" href = #features class="w3-button w3-pink">Je suis une marque</a>
        <a style = "margin-top:-47.5%; margin-left:50%" href = influenceurs.html class="w3-button w3-pink" >Je suis influenceur</a>

         
         </div>

</div>
<section id="features" class="bg-white">
    <div class="container">
        <div class="section-content">
            <!-- Section Title -->
            <div class="title-wrap mb-5" data-aos="fade-up">
                <h2 class=" center subtitle-width" id = "qui">
                    Qui sommes nous?
                    <br></br>
                    <br></br>
                    
                    <img style = "margin-right:50%;width:45%;height:45%;" alt="DES CONTENUS RÉSEAUX SOCIAUX" src="https://assets-global.website-files.com/60d304c04a4fa6dc684afabc/61b1c8720078da872be65c0a_618d21b72f0c17fc42c9febb_AgencePlateforme.png">


            
                <h5 style = "margin-left:54%;margin-top:-25%;font-family: CMU-serif;;line-height:41px"class="section-title">
                    Only Influence est uu label d'influence élaborant des stratégies advertising complètes du concept à l'execution . Elle inclut des influenceurs nationaux de pemier plan qui ont contribué à lancer des marques mondiales sur le marché tunisien.
                    <!-- Only Inluence est la plateforme d'influence marketing idéale pour les marques qui souhaitent entrer en contact en trois clics avec une communauté de plus de 40k influenceurs et 300k consommateurs. -->
                </h5>
                
                <br></br> 
                <br></br> 
                <br></br> 
                <br></br> 
                <div class = "marque">
                <h2 class=" center subtitle-width">
                    Choisissez votre campagne
                    </h2>
                    <h5  style = "font-family: CMU-serif;line-height:41px" class="section-title">
                        Un accompagnement personnalisé pour vous assurer la réussite de chacune de vos collaborations avec les influenceurs , créateurs de contenu ou personnalités publiques selon une 
                        methode simple et éprouvée en 5 étapes de la selection jusqu'au bilan des retombées de la compagne crée.

                    </h5>
                    <!-- <h5 style = "font-family: CMU-serif;line-height:41px" class="section-title">
                        Only Influence connecte les marques, selon leurs objectifs, à des influenceurs aux audiences engagées, dans le but de produire des avis produits authentiques sur les réseaux sociaux ou sur des plateformes e-commerce. 
                        Découvrez nos solutions en fonction de votre challenge actuel :
                    </h5> -->
            </div>
            <img style = "margin-right:50%" alt="DES CONTENUS RÉSEAUX SOCIAUX" src="https://d22nxggd4m5y99.cloudfront.net/production/assets/home/explainA-03b3ffe117553efbcd65c02da3e8ce7eba25b99c772e75c5dbe2180d3b6957e7.gif">
            <div class="explainright text first" style = "margin-left:70%;margin-top:-33%">
                <div class="pixel16 pink-light uppercase">
                <p style = "color:rgb(155, 20, 101)">DES CONTENUS RÉSEAUX SOCIAUX</p>
                </div>
                <h2 class=" center subtitle-width">
                Augmentez votre visibilité
                </h2>
                <p class="text-block">
                Touchez jusqu'à 3 milliards de nouveaux clients potentiels en mobilisant des nano-, micro- et macro-influenceurs engagés à parler de votre marque auprès de leur communauté sur YouTube, Instagram (UGC) et TikTok.
                </p>
                <p style = "font-family: helvetica;"> <a  href = #features class="w3-button w3-pink">Ca m'interesse</a></p>
            </p>        
                <br></br>
                
                <div class="clearfix">
                    <div class="explainleft">
                    <img  style = "margin-left:-390%"alt="DES ÉVÉNEMENTS" src="https://d22nxggd4m5y99.cloudfront.net/production/assets/home/explainC-883e6adbb7c795c9020daaafef7fd11859331b70db3139192e3158abe9f20a88.gif">
                    </div>
                    <div style = "margin-top: -93%;"class="explainright text">
                    <div class="pixel16 pink-light uppercase">
                        <p style = "color:rgb(155, 20, 101)">DES EVENEMENTS</p>
                    </div>
                    <h2 class=" center subtitle-width">
                    Faites grandir votre communauté
                    </h2>
                    <p class="text-block">
                    Faites le buzz autour de vos lancements de produits, de l'ouverture d'une nouvelle boutique ou de vos jeux-concours en invitant des influenceurs à participer et à amplifier vos messages !
                    </p>
                    <div class="bpadtop">
                    </p>
                    <p style = "font-family: helvetica;"> <a  href = #features class="w3-button w3-pink">Ca m'interesse</a></p>
                </p>   
                    </div>
                    </div>
                    </div>
            </div>
            
            <!-- End of Section Title -->


            <!-- <div class="row">
               
                <div class="col-md-10 offset-md-1 features-holder">
                    <div class="row">
                       
                        <div class="col-md-4 col-sm-12 text-center mt-4">
                            <div class="shadow rounded feature-item p-4 mb-4" data-aos="fade-up">
                                <div class="my-4">
                                    <i class="lnr lnr-cog fs-40"></i>
                                </div>
                                <h4>Easy to Customize</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                            <div class="shadow rounded feature-item p-4 mb-4" data-aos="fade-up">
                                <div class="my-4">
                                    <i class="lnr lnr-frame-contract fs-40"></i>
                                </div>
                                <h4>Pixel Perfect</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                      
                     
                        <div class="col-md-4 col-sm-12 text-center">
                            <div class="shadow rounded feature-item p-4 mb-4" data-aos="fade-up">
                                <div class="my-4">
                                    <i class="lnr lnr-bubble fs-40"></i>
                                </div>
                                <h4>Full Support</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                            <div class="shadow rounded feature-item p-4 mb-4" data-aos="fade-up">
                                <div class="my-4">
                                    <i class="lnr lnr-magic-wand fs-40"></i>
                                </div>
                                <h4>Clean Design</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                      
                
                        <div class="col-md-4 col-sm-12 text-center mt-4">
                            <div class="shadow rounded feature-item p-4 mb-4" data-aos="fade-up">
                                <div class="my-4">
                                    <i class="lnr lnr-clock fs-40"></i>
                                </div>
                                <h4>Ontime Project</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                            <div class="shadow rounded feature-item p-4 mb-4" data-aos="fade-up">
                                <div class="my-4">
                                    <i class="lnr lnr-thumbs-up fs-40"></i>
                                </div>
                                <h4>Built with SASS</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                
                    </div>
                </div>
            
            </div> -->
        </div>
    </div>
</section>

      
      <!-- <a target="_blank" href="?hsLang=fr"><img class=" lazyloaded" data-src="https://www.resopso.fr/wp-content/uploads/2018/10/logo-uriage-300x200.png" alt="logo partenaire – 8" src="https://www.resopso.fr/wp-content/uploads/2018/10/logo-uriage-300x200.png"></a>
      
      <a target="_blank" href="https://www.e-marketing.fr/Thematique/retail-1095/Breves/Comment-Sud-Express-capitalise-influence-attirer-nouvelle-cible-340737.htm"><img class=" lazyloaded" data-src="https://f.hubspotusercontent10.net/hubfs/5114618/MARKENTIVE%202020/Website/Expertise/logo%20partenaire%20%E2%80%93%209.png" alt="logo partenaire – 9" src="https://www.solibra.ci/files/images/photo090417201716.png"></a>
      
      <a target="_blank" href="https://www.cbnews.fr/etudes/image-plateforme-hivency-publie-nouvelle-etude-influence-55440"><img class=" lazyloaded" data-src="https://f.hubspotusercontent10.net/hubfs/5114618/MARKENTIVE%202020/Website/Expertise/logo%20partenaire%20%E2%80%93%203.png" alt="logo partenaire – 3" src="https://www.sipatunisia.com/wp-content/uploads/2020/12/safia.jpg"></a>
       -->
      <!-- <a target="_blank" href="https://www.strategies.fr/actualites/agences/4038792W/hivency-plateforme-de-micro-influence-leve-4-millions-d-euros.html"><img class=" lazyloaded" data-src="https://f.hubspotusercontent10.net/hubfs/5114618/MARKENTIVE%202020/Website/Expertise/logo%20partenaire.png" alt="logo partenaire" src="https://f.hubspotusercontent10.net/hubfs/5114618/MARKENTIVE%202020/Website/Expertise/logo%20partenaire.png"></a>
      
      <a target="_blank" href="https://www.airofmelty.fr/valeurs-produits-gratuits-remuneration-quelles-sont-les-reelles-motivations-des-influenceurs-a735613.html"><img class=" lazyloaded" data-src="https://f.hubspotusercontent10.net/hubfs/5114618/MARKENTIVE%202020/Website/Expertise/logo%20partenaire%20%E2%80%93%204.png" alt="logo partenaire – 4" src="https://f.hubspotusercontent10.net/hubfs/5114618/MARKENTIVE%202020/Website/Expertise/logo%20partenaire%20%E2%80%93%204.png"></a> -->
      
   
    <!-- <div class="row-logo d-flex align-items-center">
      
      <a target="_blank" href="https://fr.fashionnetwork.com/news/Bijorhca-joue-la-carte-de-l-influence-et-des-reseaux-sociaux,1174894.html"><img class=" lazyloaded" data-src="https://f.hubspotusercontent10.net/hubfs/5114618/MARKENTIVE%202020/Website/Expertise/logo%20partenaire%20%E2%80%93%206.png" alt="logo partenaire – 6" src="https://f.hubspotusercontent10.net/hubfs/5114618/MARKENTIVE%202020/Website/Expertise/logo%20partenaire%20%E2%80%93%206.png"></a>
      
      <a target="_blank" href="https://www.influenth.com/les-micro-et-nano-influenceurs-au-coeur-des-nouvelles-strategies-de-marketing-digital/"><img class=" lazyloaded" data-src="https://f.hubspotusercontent10.net/hubfs/5114618/MARKENTIVE%202020/Website/Expertise/logo%20partenaire%20%E2%80%93%207.png" alt="logo partenaire – 7" src="https://f.hubspotusercontent10.net/hubfs/5114618/MARKENTIVE%202020/Website/Expertise/logo%20partenaire%20%E2%80%93%207.png"></a>
      
      <a target="_blank" href="https://www.frenchweb.fr/marketing-dinfluence-hivency-soffre-la-startup-lucette-pour-etendre-son-champ-daction/402429"><img class=" lazyloaded" data-src="https://f.hubspotusercontent10.net/hubfs/5114618/MARKENTIVE%202020/Website/Expertise/logo%20partenaire%20%E2%80%93%205.png" alt="logo partenaire – 5" src="https://f.hubspotusercontent10.net/hubfs/5114618/MARKENTIVE%202020/Website/Expertise/logo%20partenaire%20%E2%80%93%205.png"></a>
      
      <a target="_blank" href="https://www.journalducm.com/social-media-et-influence-comment-parler-et-faire-parler-votre-marque/"><img class=" lazyloaded" data-src="https://f.hubspotusercontent10.net/hubfs/5114618/MARKENTIVE%202020/Website/Expertise/logo%20partenaire%20%E2%80%93%202.png" alt="logo partenaire – 2" src="https://f.hubspotusercontent10.net/hubfs/5114618/MARKENTIVE%202020/Website/Expertise/logo%20partenaire%20%E2%80%93%202.png"></a>
      
      <a target="_blank" href="https://capitalfinance.lesechos.fr/deals/capital-risque/marketing-dinfluence-hivency-leve-4-m-avec-alliance-entreprendre-1161652"><img class=" lazyloaded" data-src="https://f.hubspotusercontent10.net/hubfs/5114618/MARKENTIVE%202020/Website/Expertise/logo%20partenaire%20%E2%80%93%201.png" alt="logo partenaire – 1" src="https://f.hubspotusercontent10.net/hubfs/5114618/MARKENTIVE%202020/Website/Expertise/logo%20partenaire%20%E2%80%93%201.png"></a>
      
    </div> -->
  <!-- </div> -->


<br>
<br>
<br>


  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class=" center subtitle-width">NOTRE METHODE DE TRAVAIL</h3>
          <br>
          <br>
          <div class="titleHR"><span></span></div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-4"> <!-- Service-item -->
          <div class="text-center services-item">
            <div class="col-wrapper">
              <div class="icon-border"> 
                <i class="icon-design-graphic-tablet-streamline-tablet color-l-orange"></i> 
              </div>
              <a style = "    margin-top: -15%;
              margin-left: 5%;" class="w3-button w3-pink" href="">1</a>
              <h5>Matchmaking</h5>
              <p>
                  Pour chaque marque , il y a un profil adapté et nous savons toujours où le trouver pour matcher avec votre identité et vos objectifs. 
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-4"> <!-- Service-item -->
            <div class="text-center services-item">
              <div class="col-wrapper">
                <div class="icon-border"> 
                  <i class="icon-design-graphic-tablet-streamline-tablet color-l-orange"></i> 
                </div>
                <a style = "    margin-top: -15%;
                margin-left: 5%;" class="w3-button w3-pink" href="">2</a>
                <h5>Accompagenement complet</h5>
<p>
    Nous nous chargeons de la négociation, des échanges avec le(s) proffil(s) retenu(s) et de la définition de la collaboration (cahier des charges, calendrier).
</p>              </div>
            </div>
          </div>
          <div class="col-sm-4"> <!-- Service-item -->
            <div class="text-center services-item">
              <div class="col-wrapper">
                <div class="icon-border"> 
                  <i class="icon-design-graphic-tablet-streamline-tablet color-l-orange"></i> 
                </div>
                <a style = "    margin-top: -15%;
                margin-left: 5%;" class="w3-button w3-pink" href="">3</a>
                <h5>Statgie sur-mesure</h5>
<p>
    Plus que des compagnes , nous imaginons de véritables mises en scènes personnalisées pour atteindre vos objctifs. 
</p>              </div>
            </div>
          </div>
        <div class="col-sm-4"> <!-- Service-item -->
          <div class="text-center services-item">
            <div class="col-wrapper">
              <div class="icon-border"> 
                <i class="icon-design-pencil-rule-streamline color-l-blue"></i> 
              </div>
              <a style = "    margin-top: -15%;
              margin-left: 18%;" class="w3-button w3-pink" href="">4</a>
              <h5>Suivi</h5>
<p>
    A chaque étape de la collaboration, nous nous assurons que tous les contenus diffusés sont de la meilleure qualité et respectent les directives.
</p>            </div>
          </div>
        </div>
        <div class="col-sm-4"> <!-- Service-item -->
            <div class="text-center services-item">
              <div class="col-wrapper">
                <div class="icon-border"> 
                  <i class="icon-caddie-shopping-streamline color-l-green"></i>
                </div>
                <a style = "    margin-top: -15%;
                margin-left: 5%;" class="w3-button w3-pink" href="">5</a>
                <h5>Bilan</h5>
<p>
    A la in de la compagne nous vous remettons un bilan détaillé desd statistiques et des retombées de la collaboration menées
</p>              </div>
            </div>
          </div>
    </div> 
</section>


	<!-- <section id="section-featurettes" class="featurettes overlay bg-fixed" style="background-image: url(img/bg.jpg);">

    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="row align-items-center text-white">

                        <div class="talk-inner d-flex flex-column align-items-center text-align-center col-md-4 offset-md-2 col-sm-6" data-aos="fade-right">
                            <h1 style = "margin-top:-56%">NOTRE METHODE DE TRAVAIL</h1>
                         
                        </div>
                

                        <div class="col-md-4 offset-md-right-2 col-sm-6" data-aos="flip-right">
                            
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

</section> -->
<!-- 
	<section id="section-featurettes" class="featurettes">

    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="row align-items-center">

                        <div class="col-md-4 offset-md-2 col-sm-6" data-aos="flip-left">
                            <img class="my-5" src="img/app-profile-mockup.png" alt="">
                        </div>

                        <div class="col-md-4 offset-md-right-2 col-sm-6" data-aos="fade-left">
                            <h4 class="mb-4">Capture every moments and share it to all your friends</h4>
                            <p>Nulla vitae elit libero, a pharetra augue. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras mattis consectetur purus sit amet.</p>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">HTML5 95%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">CSS3 90%</div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

</section>	
<section id="testimonial" class="section-padding bg-fixed bg-white overlay" style="background-image: url(img/bg-white.jpg);">
    <div class="container">
        <div class="section-content" data-aos="fade-up">
            <div class="heading-section text-center">
                <h2>
                    User Testimonials
                </h2>
            </div>
            <div class="row">
                
                <div class="testi-content testi-carousel owl-carousel">
                    <div class="testi-item text-center">
                        <i class="testi-icon fa fa-3x fa-quote-left"></i>
                        <h4 class="testi-text"><b>ROXY</b> is best theme i used so far.<br> It’s ideal for guys without coding knowledge like me!</h4>
                        <div class="testi-meta-inner d-flex justify-content-center align-items-center">
                            <div class="testi-img mr-2">
                                <img src="img/testi-1.jpg" alt="">
                            </div>
                            <div class="testi-details">
                                <p class="testi-author mb-0 font-weight-bolder">John Doe</p>
                                <p class="testi-desc mb-0">Web Designer</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="testi-item text-center">
                        <i class="testi-icon fa fa-3x fa-quote-left"></i>
                        <h4 class="testi-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci <br> non doloribus ut, alias doloremque perspiciatis.</h4>
                        <div class="testi-meta-inner d-flex justify-content-center align-items-center">
                            <div class="testi-img mr-2">
                                <img src="img/testi-1.jpg" alt="">
                            </div>
                            <div class="testi-details">
                                <p class="testi-author mb-0 font-weight-bolder">John Doe</p>
                                <p class="testi-desc mb-0">Web Designer</p>
                            </div>
                        </div>
                    </div>
                     <div class="testi-item text-center">
                        <i class="testi-icon fa fa-3x fa-quote-left"></i>
                        <h4 class="testi-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci <br> non doloribus ut, alias doloremque perspiciatis.</h4>
                        <div class="testi-meta-inner d-flex justify-content-center align-items-center">
                            <div class="testi-img mr-2">
                                <img src="img/testi-1.jpg" alt="">
                            </div>
                            <div class="testi-details">
                                <p class="testi-author mb-0 font-weight-bolder">John Doe</p>
                                <p class="testi-desc mb-0">Web Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
</section> -->

<section id="portfolio" class="bg-white">
    <div class="container">
        <div class="section-content">
           
            <div class="title-wrap">
                <h2 class="section-title">Notre <b>Collaboration</b> impressionnante</h2>
                <p class="section-sub-title">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. <br> pharetra augue. Donec id elit non mi.</p>
            </div>
           
            <div class="row">
         
                <div class="col-md-12 portfolio-holder mt-3">
                 
               
                  
                 
                    <div class="grid-portfolio">
                        <div class="grid-sizer"></div>
                        <div class="gutter-sizer"></div>
                     
                        <div class="grid-item minimalism" data-aos="fade-up">
                            <div class="grid-item-wrapper">
                                <img src="img/photo-1.jpg" alt="portfolio-img" class="portfolio-item">
                                <div class="grid-info">
                                    <div class="grid-link d-flex justify-content-center">
                                        <a class="img-pop" data-rel="lightcase" href="img/photo-1.jpg" title="Photo-1">
                                            <span class="lnr lnr-move"></span>
                                        </a>
                                        <a class="ext-link" href="https://unsplash.com/" target="_blank">
                                            <span class="lnr lnr-link"></span>
                                        </a>
                                    </div>
                                    <div class="grid-title">
                                        <h4>Camera</h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                       
                       
                        <div class="grid-item vintage" data-aos="fade-up">
                            <div class="grid-item-wrapper">
                                <img src="img/photo-6.jpg" alt="portfolio-img" class="portfolio-item">
                                <div class="grid-info">
                                    <div class="grid-link d-flex justify-content-center">
                                        <a class="img-pop" data-rel="lightcase" href="img/photo-6.jpg" title="Ship">
                                            <span class="lnr lnr-move"></span>
                                        </a>
                                        <a class="ext-link" href="https://unsplash.com/" target="_blank">
                                            <span class="lnr lnr-link"></span>
                                        </a>
                                    </div>
                                    <div class="grid-title">
                                        <h4>Flower</h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                   
                        <div class="grid-item creative grid-item-height" data-aos="fade-up">
                            <div class="grid-item-wrapper">
                                <img src="img/photo-2.jpg" alt="portfolio-img" class="portfolio-item">
                                <div class="grid-info">
                                    <div class="grid-link d-flex justify-content-center">
                                        <a class="img-pop" data-rel="lightcase" href="img/photo-2.jpg" title="Tracy Portrait">
                                            <span class="lnr lnr-move"></span>
                                        </a>
                                        <a class="ext-link" href="https://unsplash.com/" target="_blank">
                                            <span class="lnr lnr-link"></span>
                                        </a>
                                    </div>
                                    <div class="grid-title">
                                        <h4>Breakfast</h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                     
                        <div class="grid-item creative" data-aos="fade-up">
                            <div class="grid-item-wrapper">
                                <img src="img/photo-7.jpg" alt="portfolio-img" class="portfolio-item">
                                <div class="grid-info">
                                    <div class="grid-link d-flex justify-content-center">
                                        <a class="img-pop" data-rel="lightcase" href="img/photo-7.jpg" title="Guitar">
                                            <span class="lnr lnr-move"></span>
                                        </a>
                                        <a class="ext-link" href="https://unsplash.com/" target="_blank">
                                            <span class="lnr lnr-link"></span>
                                        </a>
                                    </div>
                                    <div class="grid-title">
                                        <h4>Chair</h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                      
                     
                        <div class="grid-item vintage" data-aos="fade-up">
                            <div class="grid-item-wrapper">
                                <img src="img/photo-4.jpg" alt="portfolio-img" class="portfolio-item">
                                <div class="grid-info">
                                    <div class="grid-link d-flex justify-content-center">
                                        <a class="img-pop" data-rel="lightcase" href="img/photo-4.jpg" title="Bookself">
                                            <span class="lnr lnr-move"></span>
                                        </a>
                                        <a class="ext-link" href="https://unsplash.com/" target="_blank">
                                            <span class="lnr lnr-link"></span>
                                        </a>
                                    </div>
                                    <div class="grid-title">
                                        <h4>Hidden Book</h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                      
                     
                        <div class="grid-item creative" data-aos="fade-up">
                            <div class="grid-item-wrapper">
                                <img src="img/photo-9.jpg" alt="portfolio-img" class="portfolio-item">
                                <div class="grid-info">
                                    <div class="grid-link d-flex justify-content-center">
                                        <a class="img-pop" data-rel="lightcase" href="img/photo-9.jpg" title="Guitar">
                                            <span class="lnr lnr-move"></span>
                                        </a>
                                        <a class="ext-link" href="https://unsplash.com/" target="_blank">
                                            <span class="lnr lnr-link"></span>
                                        </a>
                                    </div>
                                    <div class="grid-title">
                                        <h4>Red</h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                      
                    </div>
                  
                </div>
             
            </div>
        </div>
    </div>
</section>

<section id="client" class="overlay bg-fixed" style="background-image: url(img/bg.jpg);">
    <div class="container">
        <div class="section-content" data-aos="fade-up">
            <div class="row ">
                <div class="col-md-12">
                   
                    <div class="title-wrap mb-5">
                        <h2>IL NOUS <span> FONT</span> CONFIANCE</h2>
                    </div>
                   
                </div>
            
                <div class="col-md-12 client-holder">
                    <div class="client-slider owl-carousel">
                        <div class="client-item">
                            <img class="img-responsive" src="https://upload.wikimedia.org/wikipedia/fr/thumb/e/ec/LogoMoulinex.tif/lossy-page1-1200px-LogoMoulinex.tif.jpg" alt=" ">
                        </div>
                        <div class="client-item">
                            <img class="img-responsive" src="https://www.solibra.ci/files/images/photo090417201716.png" alt=" ">
                        </div>
                        <div class="client-item">
                            <img class="img-responsive" src="https://www.sipatunisia.com/wp-content/uploads/2020/12/safia.jpg" alt=" ">
                        </div>
                        <div class="client-item">
                            <img class="img-responsive" src="https://maroc-diplomatique.net/wp-content/uploads/2019/02/Jumia.jpg" alt=" ">
                        </div>
                        <div class="client-item">
                            <img class="img-responsive" src="https://www.nicepng.com/png/detail/121-1211062_lotus-logo-png-transparent-lotus-papier-toilette-logo.png" alt=" ">
                        </div>
                        <div class="client-item">
                            <img class="img-responsive" src="https://www.cafesbenyedder.com.tn/wp-content/uploads/2018/11/logo_footer-1.png" alt=" ">
                        </div>
                        <div class="client-item">
                            <img class="img-responsive" src="https://toparvea.com/wp-content/uploads/2017/11/logo-arvea.png" alt=" ">
                        </div>
                        <div class="client-item">
                            <img class="img-responsive" src="data:image/jpeg;base64,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" alt=" ">
                        </div>
                        <div class="client-item">
                            <img class="img-responsive" src="https://www.tunisienumerique.com/wp-content/uploads/c59d8698282f91d90692f296960d5cfbb7d57b5f.jpg" alt=" ">
                        </div>
                        <div class="client-item">
                            <img class="img-responsive" src="https://sitedesmarques.com/var/uploads/l/logo-zara-home.jpg" alt=" ">
                        </div>
                        <div class="client-item">
                            <img class="img-responsive" src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/c3279328085249.5636f62340ac8.png" alt=" ">
                        </div>
                        <div class="client-item">
                            <img class="img-responsive" src="data:image/png;base64,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" alt=" ">
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</section>

<h1 class="center subtitle-width">
  Envie d’une stratégie d’influence impactante ?
  <u> <a href = "" id="btnOpenForm" >Écrivez-nous ! </a> </u>
  
  </h1>

  <div class="form-popup-bg">
    <div class="form-container">
      <button id="btnCloseForm" class="close-button">X</button>
      <h1>Contactez-nous</h1>
      <form action="">
        <div class="form-group">
          <label for="">Société</label>
          <input type="text" class="form-control" required="required" />
        </div>
        <div class="form-group">
          <label for="">Nom,Prénom</label>
          <input class="form-control" type="text" required="required" />
        </div>
        <div class="form-group">
          <label for="">Adresse mail</label>
          <input class="form-control" type="text" required="required" />
        </div>
        <div class="form-group">
          <label for="">Téléphone</label>
          <input class="form-control" type="text" required="required" />
        </div>
        <div class = "form-group">
          <label for="message">Message</label>
          <textarea class="form-control" name="message" id="message" name="message" required="required" placeholder="Message"></textarea>

        </div>
     
        <button style = "margin-Left:43%;margin-Top:5%">Submit</button>
      </form>
    </div>
  </div>







<!-- 
<section id="cta" class="bg-fixed overlay" style="background-image: url(img/bg.jpg);">
    <div class="container">
        <div class="section-content" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="mb-2">BOOSTER AVEC NOUS LE TAUX DE CONOSOMMATION DE VOTRE PRODUIT</h2>
               
                </div>
            </div>
        </div>
    </div>
</section> -->
</div>
<footer class="mastfoot my-3">
    
    <div class="inner container">
         <div class="row">
         	<div class="col-lg-4 col-md-12 d-flex align-items-center">
         		
         	</div>
         	<div class="col-lg-4 col-md-12 d-flex align-items-center">
         		<p class="mx-auto text-center mb-0">&copy; Only Influence<a href="https://gettemplates.co" target="_blank"></a>.</p>
         	</div>
           
            <div class="col-lg-4 col-md-12">
            	<nav class="nav nav-mastfoot justify-content-center">
	                <a class="nav-link" href="#">
	                	<i class="fab fa-facebook-f"></i>
	                </a>
	                <a class="nav-link" href="#">
	                	<i class="fab fa-twitter"></i>
	                </a>
	                <a class="nav-link" href="#">
	                	<i class="fab fa-instagram"></i>
	                </a>
	                <a class="nav-link" href="#">
	                	<i class="fab fa-linkedin"></i>
	                </a>
	                <a class="nav-link" href="#">
	                	<i class="fab fa-youtube"></i>
	                </a>
	            </nav>
            </div>
            
        </div>
    </div>
</footer>	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script src="vendor/bootstrap/popper.min.js"></script>
	<script src="vendor/bootstrap/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js "></script>
	<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
	<script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
	<script src="vendor/isotope/isotope.min.js"></script>
	<script src="vendor/lightcase/lightcase.js"></script>
	<script src="vendor/waypoints/waypoint.min.js"></script>
	 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
     
        <script language="JavaScript">
    var frmvalidator  = new Validator("contactform");
    frmvalidator.addValidation("nom","req","Please provide your name");
    frmvalidator.addValidation("prénom","req","Please provide your name");
    frmvalidator.addValidation("mail","req","Please provide your email");
    frmvalidator.addValidation("entreprise","req","Please provide your society");
    frmvalidator.addValidation("téléphone","req","Please provide your phone-number");
    frmvalidator.addValidation("email","email",
      "Please enter a valid email address");
    </script>
<script>
    var pdfUrl = "/oi.zip"
    

    $('#demoForm').on('submit', function () {
        window.open(pdfUrl, '_blank');
    });
</script>
    

	



	 
	
	<script src="js/app.min.js "></script>
	<script src = "https://smtpjs.com/v3/smtp.js"></script>
	<script src="//localhost:35729/livereload.js"></script>
    
</body>
</html>
