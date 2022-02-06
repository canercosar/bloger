<!DOCTYPE html>
<html>
<head>
  <title>gidengunler.com</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <link rel="stylesheet" href="still.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<link href='https://fonts.googleapis.com/css?family=Bahiana' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Indie Flower' rel='stylesheet'>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
// göster/gizle
function showMe(blockId) {
     if ( document.getElementById(blockId).style.display == 'none' ) {
          document.getElementById(blockId).style.display = ''; }
else if ( document.getElementById(blockId).style.display == '' ) {
          document.getElementById(blockId).style.display = 'none'; }
}
</script>
</head>

<body >

<div class="div1">
<img width="100%" height="100%" src="Boring-Colors-Abstract-4K-Wallpaper.jpg">-->

<div class="yazi1">
Giden Günlerinizi Bizimle Paylaşın.
 </div>

<div class="giris">
  <form class="form-horizontal" action="../index.php" method="post">
     <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Kullanıcı Adı</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputText3" name="kadi" placeholder="Kullanıcı Adı">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Şifre</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="inputPassword3" name="sifre" placeholder="Şifre">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Giriş Yap</button>
    </div>
  </div>
</form>
</div>

<div class="babadiv">
  <div class="ustmenu"> 
<div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li id="sol"><a href="#" onclick="showMe('kayitac');">KAYIT OL!</a></li>
                <li id="orta"><a href="#" onclick="showMe('neden');">NEDEN YAZIYORUM</a></li>
            </ul>
        </div>
    </div>

        <div class="kayitol" id="kayitac">
          <form class="form-horizontal" action="" method="">
     <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Kullanıcı Adı</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputText3" name="kadi" placeholder="Kullanıcı Adı">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Şifre</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="inputPassword3" name="sifre" placeholder="Şifre">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Kayıt Ol</button>
    </div>
  </div>
</form>
        </div>
        <div class="kayitol" id="neden">
          <br>Yazı; Kalıcı ve en geniş iletişim türüdür.<br>
        <hr width="50%">
          <br>Giden günlerinizi bizimle paylaşınki giden günlerinizde yaşadığınız deneyimler başkalarına fikir, sorunlar çözüm olsun.
        </div>

</div>

 </div>

</body>
</html>