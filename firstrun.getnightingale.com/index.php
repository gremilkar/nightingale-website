<!DOCTYPE html>
<html>
    <head>
        <!-- meta info -->
        <meta charset="utf-8">
        <title>Nightingale - The tune of life, the tune of yours</title>
        <meta name="description" content="Nightingale is a community support project for the powerful media player Songbird. It is developed by a proud community and we are equally proud to bring you the most extensible and feature-rich media experience. Freaturing smart playlists, equalizer, Last.fm integration, customizeable look and hundreds of add-ons. Nightingale has it all.">
        <meta http-equiv="X-UA-Compatible" content="chrome=1"> 
        
        <!-- styles -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="css/style.css">
        <!--[if lt IE 9]>
            <link rel="stylesheet" href="css/legacy-ie.css">
            <script src="javascript/html5shiv.js"></script>
        <![endif]-->
        
        <!-- l10n -->
        <script src="javascript/l10n.js"></script>
        <link rel="prefetch" type="application/l10n" href="l10n/locales.ini" >
        
    </head>
    <body>
        <div id="ngalemainheadwrapper" class="wrapper">
            <header class="container">
                <nav role="navigation">
                    <button class="mobilenav" id="expandngalenav" data-l10n-id="menu">Menu</button>
                    <ul id="ngalenavlist">
                        <li><a href="http://getnightingale.com" data-l10n-id="home">Home</a></li>
                        <li><a href="http://blog.getnightingale.com" data-l10n-id="blog">Blog</a></li>
                        <li><a href="http://addons.getnightingale.com" data-l10n-id="add-ons">Add-ons</a></li>
                        <li><a href="http://forum.getnightingale.com" data-l10n-id="forum">Forum</a></li>
                        <li><a href="http://wiki.getnightingale.com" data-l10n-id="wiki">Wiki</a></li>
                        <li><a href="http://developers.getnightingale.com" data-l10n-id="developers">Developers</a></li>
                    </ul>
                </nav>
                <figure id="headerlogo" role="banner">
                    <div id="tabshadow" class="tab"></div>
                    <div id="birdtab" class="tab"></div>
                    <img src="images/nightingale_official_text_outline.png" alt="Nightingale - The tune of life, the tune of yours" data-l10n-id="headerlogo">
                </figure>
            </header>
        </div>
        <div class="wrapper" id="wrapper">
            <article id="main" class="container" role="main">
                <h1 data-l10n-id="firstrunWelcomeTitle">Welcome to Nightingale!</h1>
                <p data-l10n-id="firstrunWelcomeMessage" data-l10n='{"url":"http://wiki.getnightignale.com/release_notes"}'>You just installed the best music player. For information on whats new in this version, please read the <a href="http://wiki.getnightignale.com/release_notes">Release Notes.</a></p>
                <ul class="column">
                    <li>
                        <figure class="feature">
                            <img src="http://lorempixel.com/400/400" alt="" data-l10n-id="firstFeatureImage">
                            <figcaption data-l10n-id="firstFeature">Wide variety of supported media formats including MP3, Ogg, FLAC, WAV and many more.</figcaption>
                        </figure>
                    </li><li>
                        <figure class="feature">
                            <img src="http://lorempixel.com/404/404" alt="" data-l10n-id="secondFeatureImage">
                            <figcaption data-l10n-id="secondFeature">Highly customizable user interface due to hundreds of themes and add-ons.</figcaption>
                        </figure>
                    <li></li>
                        <figure class="feature">
                            <img src="http://lorempixel.com/401/401" alt="" data-l10n-id="thirdFeatureImage">
                            <figcaption data-l10n-id="thirdFeature">Support by an active and very ambitious community.</figcaption>
                        </figure>
                    </li>
                </ul>
            </article>
        </div>
        <div class="wrapper" id="ngalemainfooterwrapper">
            <footer class="container">
                <section id="footerinfo" role="contentinfo">
                    <div id="leftfooter">
                        <img id="footergale" alt="white outlined nightingale project logo" src="images/footergale.png">
                        <select id="l10nselect">
                            <option selected value="en">English</option>
                        </select>
                    </div>
                    <p data-l10n-id="footerInfo" data-l10n-args='{"license":"GNU General Public License v2 (GPL v2)"}'>Nightingale is free!<br>
                       It is an Open Source projcet release under the terms of the GNU General Public License v2 (GPL v2).<br>
                       For more details, please read the <a href="">license information</a>.
                   </p>
                   <p>
                       <b data-l10n-id="footerSocial">Follow us!</b><br>
                       <a href="http://www.facebook.com/pages/Nightingale/210174055669535" title="Nightingale on Facebook" class="socialicon">f</a>&nbsp;<a href="https://plus.google.com/103377471329459083108/posts" title="Nightingale on Google+" class="socialicon">g</a>&nbsp;<a href="http://twitter.com/getnightingale" title="Nightingale on Twitter" class="socialicon">t</a>
                   </p> 
                </section>
                <nav class="footerlinks">
                    <b data-l10n-id="footerSupport">Support</b>
                    <ul>
                        <li><a href="http://forum.getnightingale.com" title="Nightingale Forum" data-l10n-id="footerForum">Community Forum</a></li>
                        <li><a href="http://blog.getnightingale.com" title="Development Blog" data-l10n-id="footerBlog">Official Blog</a></li>
                        <li><a href="http://addons.getnightingale.com" title="Add-ons for Nightingale" data-l10n-id="footerAdd-ons">Add-ons</a></li>
                        <li><a href="http://wiki.getnightingale.com" title="Nightingale Wiki" data-l10n-id="footerWiki">Wiki</a></li>
                        <li><a href="http://forum.getnightingale.com/forum-13.html" title="Help" id="forumhelplink" data-l10n-id="footerHelpForum">Help Forum</a></li>
                    </ul>
                </nav>
                <nav class="footerlinks">
                    <b data-l10n-id="footerContribute">Contribute</b>
                    <ul>
                        <li><a href="http://wiki.getnightingale.com" title="Documentation and Wiki" data-l10n-id="footerDeveloperCenter">Developer's Center</a></li>
                        <li><a href="http://wiki.getnightingale.com/doku.php?id=ngale-locales" title="Translate Nightingale" data-l10n-id="footerTranslate">Translate Nightingale</a></li>
                        <li><a href="https://github.com/nightingale-media-player" title="Source Code on GitHub" data-l10n-id="footerSource">Source Code</a></li>
                        <li><a href="https://github.com/nightingale-media-player/nightingale-addons/issues/" title="Nightingale Issues on GitHub" data-l10n-id="footerBugs">Report a Bug</a></li>
                        <!--<li><a href="http://getnightingale.com/donate" title="Donate to Nightingale" data-l10n-id="footerDonate">Donate</a></li>-->
                    </ul>
                </nav>
                <nav class="footerlinks">
                    <b data-l10n-id="footerRessources">Ressources</b>
                    <ul>
                        <li><a href="http://getnightingale.com/download.php" title="Download Nightingale" data-l10n-id="footerDownload">Download Nightingale</a></li>
                        <li><a href="http://getnightingale.com/features.php" title="Nightingale Features" data-l10n-id="footerFeatures">Features</a></li>
                        <li><a href="http://getnightingale.com/nightlies.php" title="Nightingale Nightlies" data-l10n-id="footerNightlies">Nightlies</a></li>
                    </ul>
                </nav>
            </footer>
        </div>
        
        <script type="text/javascript" src="javascript/base.js"></script>
    </body>
</html>