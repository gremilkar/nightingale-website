<?php
if (!($_COOKIE["nightingale_installed"] == "yes")) {
  if ($_POST['have'] == yes) {
	  if ( setcookie("nightingale_installed", 'yes', time()+315360000, "/", "getnightingale.com", false, true)) {
	  //if (setcookie("nightingale_installed", $value, time()+315360000)) {
		header('Location:index.php?url='.$_POST['url']);
	  }
      else {
		echo "failed";
	  }
  }
}
?>
<!DOCTYPE html>
<html>
<head>
<?php
if ($_COOKIE["nightingale_installed"] == "yes") {
  echo	"
  <title data-l10n-id='launch_inprogress'>Launching Nightingale...</title>
	<script type='text/javascript'>
		function nightingaleOpen(stay) {
			var gotourl = ".$_GET['url'].";
			if(gotourl!='') {
				var url = 'ngale:open?url='+gotourl;
				setTimeout(function() {
					window.location.href = url;
					if (!stay) {
						if (window.history.length < 2))
							setTimeout('window.close()', 100);
						else {
							setTimeout('window.history.back()', 100);
						}
					}
					return true;
				}, 1);
			}
			else {
				setTimeout('window.close()', 100);
			}
		}
	</script>  ";
  }
  else {
    echo "<title data-l10n-id='launch_question'>Got Nightingale?</title>";
  }
?>
	<link rel='stylesheet' type='text/css' href='css/launch.css' />
    
    <script type="text/javascript" src="//static.getnightingale.com/javascript/l10n.js"></script>
    <link rel="prefetch" type="application/l10n" href="//static.getnightingale.com/l10n/locales.ini">
</head>

<?php
if ($_COOKIE["nightingale_installed"] == "yes") {
  echo	"
  <body id='launch' onload='nightingaleOpen(false)'>
	<div id='wrap'>
		<h1 data-l10n-id='launch_wait'>One Moment Please</h1>
		<p class='note' data-l10n-id='launch_inprogress'>
			Launching Nightingale...
		</p>
		<p class='link'>
			<a href='ngale:open?url=".$_GET['url']."'>ngale:open?url=".htmlspecialchars($_GET['url'])."</a>
		</p>
		<img src='images/launch.png' />
		<div id='options'>
			<form action='http://getnightingale.com/' method='GET'>
				<input type='submit' value='Download Nightingale' data-l10n-id='launch_download'/>
			</form>
		</div>
	</div>
</body>";
  }
  else {
    echo "
      <body id='detect'>
        <div id='wrap'>
          <h1 data-l10n-id='launch_question'>Got Nightingale?</h1>
          <p class='note' data-l10n-id='launch_nogale'>
          You tried to open the following link in Nightingale but
          Nightingale has not yet been detected.
        </p>
        <p class='link'>
          <a href='ngale:open?url=".$_GET['url']."'>ngale:open?url=".htmlspecialchars($_GET['url'])."</a>
        </p>
        <img src='images/detect.png' />
        <div id='options'>
          <form action='http://" . $_SERVER["HTTP_HOST"].$_SERVER["SCRIPT_NAME"] . "' method='POST'>
            <input type='hidden' name='have' value='yes' />
            <input type='hidden' name='url' value='".$_GET['url']."' />
            <input type='submit' value='I have Nightingale'".($_GET['url']==''?" disabled='true'":'')." data-l10n-id='launch_yes'/>
          </form>
          <form action='http://getnightingale.com/' method='GET'>
            <input type='submit' value='Download Nightingale' data-l10n-id='launch_download'/>
          </form>
        </div>
      </div>
    </body>";
  }
?>

</html>
