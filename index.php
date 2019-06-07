<?php
defined('_JEXEC') or die;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
  <jdoc:include type="head" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/argus/css/style.css" type="text/css" media="screen,projection" />
    <!--[if IE]>
    <link href="<?php echo $this->baseurl ?>/templates/argus/css/ie.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo $this->baseurl ?>/templates/argus/js/DD_roundies.js"></script>
    <script>
      DD_roundies.addRule('.menu_left', '8px');
          DD_roundies.addRule('.modh3', '8px 8px 0px 0px');
          DD_roundies.addRule('.mod_roundgreen', '8px');
          DD_roundies.addRule('.mod_search', '8px');
      </script>
    <?php
            if(stristr($_SERVER['HTTP_USER_AGENT'],"MSIE 8.0")){ ?>
                <link href="<?php echo $this->baseurl ?>/templates/argus/css/ie8.css" rel="stylesheet" type="text/css" />
        <?php } ?>
  <![endif]-->
  <script src="<?php echo $this->baseurl ?>/templates/argus/js/jquery.js"></script>
  <script src="<?php echo $this->baseurl ?>/templates/argus/js/js.js"></script>
  <meta name='wmail-verification' content='a682dd12a289e72b' />
    <meta name='wmail-verification' content='454e7984ff1c7d67' />
    <meta name='wmail-verification' content='b57c03595cbcd279' />
    <meta name='wmail-verification' content='a153233ca34d9d4a' />
    <meta name="google-site-verification" content="P_TMF_MPbJGSI3D4UYevA3wvDlZdiFNWbnsdIsAcah4" />
    <meta name='yandex-verification' content='7ad364d79166c2ed' />
    <link rel="stylesheet" href="/templates/argus/css/custom.css" type="text/css" />
    <!-- <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow|Open+Sans+Condensed:300|Podkova|Rubik+Mono+One|Ubuntu|Yeseva+One&display=swap" rel="stylesheet">
    <script type="text/javaScript" src="/templates/argus/js/custom_js.js"></script>
</head>
<body>

<div id="loader">
  <p>Добро пожаловать в "АРГУС-ЭКО"</p>
</div>

<div id="wrapper">
  <div id="header">
      <div id="head_inner">
        <div id="screen_cvr"></div>
          <div id="logo"><span class="clrI">АРГУС</span>-<span class="clrII">ЭКО</span>
            <!-- <a class="logo_link"></a> -->
          </div>
            <div id="header_links1"><jdoc:include type="modules" name="top_link1" style="none" /></div>
            <div id="header_links2"><jdoc:include type="modules" name="top_link2" style="none" /></div>
            <div id="top_right"><jdoc:include type="modules" name="top_right" style="none" /></div>
      </div>
  </div>
    <div id="top_icon"><jdoc:include type="modules" name="top_icon" style="none" /></div>

<div id="lg_screen_cvr">
    <div id="left"><jdoc:include type="modules" name="left" style="skaneris" /></div>
    <div id="right"><jdoc:include type="modules" name="right" style="skaneris" /></div>
    <div id="content">
        <div class="mobilmenu">
            <jdoc:include type="modules" name="newposition" />
        </div>
        <?php if($this->countModules('addmenu')) : ?>
           <div class="addmenu">
                 <jdoc:include type="modules" name="addmenu" style="none" />
           </div>  
        <?php endif; ?>
      <jdoc:include type="component" />
    </div>
    <div class="clr"></div>
    <div class="spacer"></div>
</div>
</div>
<div id="footer">
  <div id="footer_left"><jdoc:include type="modules" name="bottom_left" style="none" /></div>
    <div id="footer_right">    
    <jdoc:include type="modules" name="bottom_right" style="none" />
    </div>
</div>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter18115219 = new Ya.Metrika({
                    id:18115219,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/18115219" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!--Start of UniSender PopUp Form script-->
  <script type="text/javascript" src="//popup-static.unisender.com/service/loader.js?c=7004" id="unisender-popup-forms"></script>
<!--End of UniSender PopUp Form script-->

<!--script src="https://cdn.pact.im/static/widget/20180831/build.js"></script-->

<script id='chat-24-widget-code' type="text/javascript">
  !function (e) {
    var t = {};
    function n(c) { if (t[c]) return t[c].exports; var o = t[c] = {i: c, l: !1, exports: {}}; return e[c].call(o.exports, o, o.exports, n), o.l = !0, o.exports }
    n.m = e, n.c = t, n.d = function (e, t, c) { n.o(e, t) || Object.defineProperty(e, t, {configurable: !1, enumerable: !0, get: c}) }, n.n = function (e) {
      var t = e && e.__esModule ? function () { return e.default } : function () { return e  };
      return n.d(t, "a", t), t
    }, n.o = function (e, t) { return Object.prototype.hasOwnProperty.call(e, t) }, n.p = "/packs/", n(n.s = 0)
  }([function (e, t) {
    window.chat24WidgetCanRun = 1, window.chat24WidgetCanRun && function () {
      window.chat24ID = "b6508f37dc315a54460326713f3e25ed", window.chat24io_lang = "ru";
      var e = "https://livechat.chat2desk.com", t = document.createElement("script");
      t.type = "text/javascript", t.async = !0, fetch(e + "/packs/manifest.json?nocache=" + (new Date()).getTime()).then(function (e) {
        return e.json()
      }).then(function (n) {
        t.src = e + n["widget.js"];
        var c = document.getElementsByTagName("script")[0];
        c ? c.parentNode.insertBefore(t, c) : document.documentElement.firstChild.appendChild(t);
        var o = document.createElement("link");
        o.href = e + n["widget.css"], o.rel = "stylesheet", o.id = "chat-24-io-stylesheet", o.type = "text/css", document.getElementById("chat-24-io-stylesheet") || document.getElementsByTagName("head")[0].appendChild(o)
      })
    }()
  }]);
</script>

<script>
    var current = window.addEventListener;
    window.addEventListener = function (type, listener, opt) {
        if((type =="scroll")||(type =="resize")||(type =="touchstart")||(type =="touchmove"))
        {
            //do nothing
        }
        else
        {
            var args = [];
            args[0] = type;
            args[1] = listener;
            args[2] = opt;
            current.apply(this, args);
        }
    };
function fixscroll()
{var x=document.getElementById('pozvonim-button');
  if (x) {x.style.bottom='300px';x.style.right='164px'; x.style.position='fixed'; x.style.top=null; x.style.left=null; x.style.removeProperty('top'); x.style.removeProperty('left');}
 }



    var observer = new MutationObserver(fixscroll);
    const config = {
        attributes: true,
        // childList: true,
        // characterData: true,
        subtree: true,
    };
    observer.observe(document.body,config);

window.addEventListener('load',function ()
{window.onscroll = fixscroll;
 window.onresize = fixscroll;
 fixscroll();
 }
);

</script>

<script crossorigin="anonymous" async type="text/javascript" src="//api.pozvonim.com/widget/callback/v3/f1f503723bf876e75892eddb552c0bad/connect" id="check-code-pozvonim" charset="UTF-8"></script>

</body>
</html>
