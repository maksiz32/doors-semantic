<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Наши работы</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" /> <!-- Решило проблему IE с отображением в режиме совместимости без CSS -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Maksim Manzulin">
	<meta name="keywords" content="двери, межкомнатные двери, дверь дерево, двери +из массива">
	<meta name="description" content="Брянск, +7-910-337-38-94. Межкомнатные двери из массива. г.Брянск, ул. 50 Армии, д. 1Б">
	<meta name="robots" content="all">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-161552936-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-161552936-2');
</script>


<!-- Top100 (Kraken) Counter -->
<script>
    (function (w, d, c) {
    (w[c] = w[c] || []).push(function() {
        var options = {
            project: 7013238,
            user_id: null,
        };
        try {
            w.top100Counter = new top100(options);
        } catch(e) { }
    });
    var n = d.getElementsByTagName("script")[0],
    s = d.createElement("script"),
    f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src =
    (d.location.protocol == "https:" ? "https:" : "http:") +
    "//st.top100.ru/top100/top100.js";

    if (w.opera == "[object Opera]") {
    d.addEventListener("DOMContentLoaded", f, false);
} else { f(); }
})(window, document, "_top100q");
</script>
<noscript>
  <img src="//counter.rambler.ru/top100.cnt?pid=7013238" alt="Топ-100" />
</noscript>
<!-- END Top100 (Kraken) Counter -->
	<link rel="stylesheet" type="text/css" href="./css/foundation.css">	
	<link rel="stylesheet" type="text/css" href="./css/dverki32.css?v=1">
	<script type="text/javascript" src="./js/vendor/jquery.js"></script>
	<script type="text/javascript" src="./js/vendor/foundation.js"></script>	
	<script type="text/javascript" src="./js/vendor/what-input.js"></script>
	
	<link rel="stylesheet" type="text/css" href="./css/lightbox.css">
	<script type="text/javascript" src="./js/lightbox.min.js"></script>	
	<script>
	$(document).ready(function(){
	$(document).foundation();
	});
	</script>
</head>
<body id="top">
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(61199230, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/61199230" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<div data-sticky-container>
	<div class="top-bar back-gray" data-sticky data-options="marginTop:0;" style="width:100%">
		<div class="top-bar-left text-white hide-for-small-only">
			Производим двери! <span class="text-yellow inl-bl"><strong>+7-910-337-38-94</strong></span>
		</div>
		<div class="top-bar-right">
			<?php require_once ('scripts/nav.php'); ?>
		</div>
	</div>
	</div>
	<header class="big2">
	<div class="row column text-center">
            <h1 class="text-center text-logo">Межкомнатные двери из дерева</h1>
			<br />
	</div>
	</header>
	<article class="grid-container">
	<div class="row column">
      <h3>Галлерея наших работ:</h3>
    </div>
    <div class="grid-x grid-margin-x medium-up-3 large-up-5">
		<?php require_once ('scripts/my-gallery.php');?>
	</div>
	<div class="row column callout success">
		Двери являются неотъемлемым элементом интерьера любого дома, квартиры или офиса. 
		Они не только украшают наши дома, участвуя в создании его уникального и неповторимого интерьера, 
		но и решают много прямых функциональных задач. <br />Межкомнатные двери позволяют разделить 
		пространство жилища на отдельные помещения, создавая таким образом в случае необходимости 
		обстановку уединения и чувство личного пространства.
	</div>
	</article>
	<article class="grid-container">
	<div class="row column">
      <h3>Наши партнеры (<a href="http://s-mebel32.ru" target=_blank>Современная мебель</a>):</h3>
    </div>
	<div class="grid-x grid-margin-x medium-up-3 large-up-5">
		<?php require_once ('scripts/meb-gallery.php');?>
	</div>
	</article>	
	<footer class="grid-x cell">
		<?php include_once ('scripts/footer.php');?>		
	</footer>
</body>
</html>