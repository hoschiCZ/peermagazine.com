<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>PeerMagazine</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
<body>

<header class="navbar navbar-bright navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/" class="navbar-brand">Home</a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <a href="#">Category</a>
        </li>
        <li>
          <a href="#">Category</a>
        </li>
        <li>
          <a href="#">Category</a>
        </li>
        <li>
          <a href="#">Category</a>
        </li>
      </ul>
      <ul class="nav navbar-right navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-search"></i></a>
          <ul class="dropdown-menu" style="padding:12px;">
            <form class="form-inline">
              <button type="submit" class="btn btn-default pull-right"><i class="glyphicon glyphicon-search"></i></button><input type="text" class="form-control pull-left" placeholder="Search">
            </form>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</header>

<div id="masthead">  
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1>Peermagazine
          <p class="lead"></p>
        </h1>
      </div>
      <div class="col-md-5">
        <div class="well well-lg"> 
          <div class="row">
            <div class="col-sm-12">
              
			
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div><!-- /cont -->
  
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="top-spacer"> </div>
      </div>
    </div> 
  </div><!-- /cont -->
  
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12"> 
      <div class="panel">
        <div class="panel-body">
          
<?php
$lastarticlefile=fopen("lastarticle.dat", "r"); //here is stored info about last article - that number
$lastarticlenumber = fread($lastarticlefile,filesize("lastarticle.dat"));
fclose($lastarticlefile);
$thisarticlefile = fopen("articles/".intval($lastarticlenumber),"r");
$thisarticleraw = fread($thisarticlefile,filesize("articles/".intval($lastarticlenumber))); //now, last article is echoed. printing last 5 articles (only previews, and these previews include anchor to full article by fullarticle.php)
$thisarticleparts = explode('<endtitle>',$thisarticleraw);
echo('<div class="row">    
            <br>
            <div class="col-md-2 col-sm-3 text-center">
              <a class="story-title" href="#"><img alt="" src="http://api.randomuser.me/portraits/thumb/women/56.jpg" style="width:100px;height:100px" class="img-circle"></a>
            </div>
            <div class="col-md-10 col-sm-9">
              <h3>'.$thisarticleparts[0].'</h3>
              <div class="row">
                <div class="col-xs-3">'.$thisarticleparts[1].'</div>
              </div>
              <br><br>
            </div>
          </div>
          <hr>');
fclose($thisarticlefile);
$echoedarticles = 1;
if(isset($_GET['view'])){
  $articlestoview = $_GET['view'];
}else{
  $articlesroview = 6; //default number of articles to view
}


while($echoedarticles < $articlestoview){
  if($lastarticlenumber > 0){ //to prevent errors like: cannot open file articles/-1
    $lastarticlenumber = $lastarticlenumber-1;
    $thisarticlefile = fopen("articles/".intval($lastarticlenumber),"r");
    $thisarticleraw = fread($thisarticlefile,filesize("articles/".intval($lastarticlenumber))); //now, last article is echoed. printing last 5 articles (only previews, and these previews include anchor to full article by fullarticle.php)
    $thisarticleparts = explode('<endtitle>',$thisarticleraw);
    echo('<div class="row">    
                <br>
                <div class="col-md-2 col-sm-3 text-center">
                  <a class="story-title" href="#"><img alt="" src="http://api.randomuser.me/portraits/thumb/women/56.jpg" style="width:100px;height:100px" class="img-circle"></a>
                </div>
                <div class="col-md-10 col-sm-9">
                  <h3>'.$thisarticleparts[0].'</h3>
                  <div class="row">
                    <div class="col-xs-3">'.$thisarticleparts[1].'</div>
                  </div>
                  <br><br>
                </div>
              </div>
              <hr>');
    fclose($thisarticlefile);
  }
  $echoedarticles = $echoedarticles + 1;
}
//now, last 5 articles (previews) are echoed.
?>
          
          
          <a href="?view=<?php echo($articlestoview+20) ?>" class="btn btn-primary pull-right btnNext">20 More<i class="glyphicon glyphicon-chevron-right"></i></a>
        
          
        </div>
      </div>
                                                                                       
	                                                
                                                      
   	</div><!--/col-12-->
  </div>
</div>
                                                
                                                                                
<hr>

<div class="container" id="footer">
  <div class="row">
    <div class="col col-sm-12">
      
      <h1>Follow Us</h1>
      <div class="btn-group">
       <a class="btn btn-twitter btn-lg" href="#"><i class="icon-twitter icon-large"></i> Twitter</a>
	   <a class="btn btn-facebook btn-lg" href="#"><i class="icon-facebook icon-large"></i> Facebook</a>
	   <a class="btn btn-google-plus btn-lg" href="#"><i class="icon-google-plus icon-large"></i> Google+</a>
      </div>
      
    </div>
  </div>
</div>

<hr>

<hr>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <ul class="list-inline">
          <li><i class="icon-facebook icon-2x"></i></li>
          <li><i class="icon-twitter icon-2x"></i></li>
          <li><i class="icon-google-plus icon-2x"></i></li>
          <li><i class="icon-pinterest icon-2x"></i></li>
        </ul>
        
      </div>
      <div class="col-sm-6">
          <p class="pull-right">Theme built with <i class="icon-heart-empty"></i> at <a href="http://www.bootply.com">Bootply</a></p>      
      </div>
    </div>
  </div>
</footer>
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
