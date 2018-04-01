<html>
<head>
  <title>CI3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <style>
  body {
      position: relative; 
  }
  	  #Home {padding-top:50px;height:600px;color: 500; background-color:#8bc34a;}
	  #Biodata {padding-top:40px;height:500px;color: A200; background-color:#ffab40;}
	  #Riwayat {padding-top:50px;height:500px;color: 300; background-color:#ba68c8;}
	  #Favorite {padding-top:50px;height:680px;color: 200; background-color:#80deea;}
	  #Other {padding-top:50px;height:500px;color: 700; background-color:#5d4037;}
	
  .navbar{
	background-color:#000000;
	}
	
  .affix {
      top:0;
      width: 100%;
      z-index: 9999 !important;
  }
  .navbar {
      margin-bottom: 0px;
  }

  .affix ~ .container-fluid {
     position: relative;
     top: 50px;
  }
	  
  	.vcenter{
		display:inline;
		vertical-align:middle;
		float:none;
		background-color:#99CCFF;
	}
	.navbar-brand{
		padding:0px;
		background-color:#000000;
	}
	.navbar-brand>img{
		height:100%;
		width:auto;
	}
	.page-header{
		color:#7cb342;
	}
	.active{
	background-color:#FFCCCC;
	color:#990000;
	}
	td {
	cellpadding: 4px;
    height: 50px;
    vertical-align: bottom;
	}
	
	.panel-body{
	height:auto
	}

  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<div class ="container-fluid text-center" style="background-color:#66CCCC; background-position:top; background-image:url(assets/picture/1.jpg);color:#fff;height:200px;">
</div>

<nav class="navbar navbar-default" data-spy="affix" data-offset-top="197">
	<a class="navbar-Brand" href="#"><img class="img-responsive" alt="Brand" src="assets/picture/ajeng1.jpg"></a>
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
     	</button>
    </div>

    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
		 		<li class="active"><a href="#Home"><b>Home</b></a></li>
				<li><a href="#Biodata"><b>About</b></a></li>
				<li><a href="#Riwayat"><b>Blog</b></a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<div id="Home" class="container-fluid">
	<div class="container">
		<h1 style="size:portrait"></h1>
		<div class="jumbotron">
			<div class="page-header">
			<p> Assalamuailaikum Wr.Wb.. </p>
			<p> Pada website ini menggunakan elemen CSS dan Boostrap, yang dimana Boostrap digunakan untuk mempercantik tampilan Web. </p>
			<p> Website ini bertujuan untuk praktikum pada mata kuliah Framework. </p>
			<p> Ini adalah Web Design sederhana yang berisikan menu Home dan About. </p>
			</div>
		</div>
	</div>
</div>

<div id="Biodata" class="container-fluid">
	<div class="container">
		<div class="right">
		<font face="Tempus Sans ITC"><h1 align="right">	About Me </h1>
		<img class="img-rounded" src="assets/picture/6.jpg" height="350" width="350" style="float:left; margin: 9px">
		<p align="justify">	Nama lengkap saya Ajeng Mastuti Kartini.</p>
		<p align="justify">	Saya lahir di Mataram tanggal 10 November 1997 dan saya anak pertama dari pasangan Abdul Rahman dan Rahmayani.</p>
		<p align="justify">	Saya mempunyai 2 adik perempuan dan 1 adik laki-laki.</p>
		<p align="justify">	Hobby saya membaca novel dan renang. Dan saya punya cita-cita menjadi atlet renang, namun tidak kesampaian.</p>
		<p align="justify">	Alasan saya merantau ke Malang dan memilih kuliah di POLINEMA karena sahabat baik saya "Arnum" juga merantau di Bali. </p>
		<p align="justify">	Jadi, kalau kami pulang libur semester diharapkan ada pengalaman seru dan unik dari tanah rantau.</p></font>

		</div>
	</div>
</div>

<div id="Riwayat" class="container-fluid">
	<div class="container">
	  <div class="row">
	    <font face="Kristen ITC"><h1>Blog</h1>
	    <br>
		<p align="justify">	Pada website ini, saya juga mempunyai beberapa artikel favorit.</p>
		<p align="justify">	Check this out guyss! just klik the Button-> <a href="<?=site_url('home/blog') ?>"><button type="button" class="btn btn-primary">Artikel</button></a></p>
		</font>
	  </div>
	</div>
</div>
<div class="container-fluid text-center" style="background-color:#ff4081">
	<div style="color:#FFCC99">
		<div class="panel-body">
		<h3><a href="#top"><span class="glyphicon glyphicon-chevron-up"></span></a><br>No Copyright </h3>
		</div>
		<div class="panel-footer" style="background-color:#f50057">
			<p align="center">087864866013 || Ajeng Mastuti Kartini || Anyenk.scoriiy@gmail.com </p>
		</div>
	</div>
</div>
</body>
</html>