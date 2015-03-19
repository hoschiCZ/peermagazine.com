<?php
include("header.php");
?>
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
while($echoedarticles < 6){
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
</body>
</html>
