<!DOCTYPE html>
<!--[if lt IE 7]><html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7 ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js lt-ie9 lt-ie8 ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js lt-ie9 ie8"><![endif]-->
<!--[if IE 9]><html lang="en" class="no-js lt-ie10 ie9"><![endif]-->
<!--[if gt IE 9]><!--><html lang="en" class="no-js"><!--<![endif]-->

<head<?php print $rdf->profile; ?>>
<?php print $head; ?>
<meta name="format-detection" content="telephone=no">
<title><?php print $head_title; ?></title>
<!-- viewport tag -->
<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- load css -->
<?php print $styles; ?>

<?php
/* remove IE8 styles 
<!--[if (lt IE 9) & (!IEMobile) & (gt IE 7)]>
<link href="/<?php print $theme_path; ?>/css/theme_oldIE.css" type="text/css" rel="stylesheet" media="all" />
<![endif]-->
*/
?>

<link href="/sites/all/themes/common/css/theme_print.css" type="text/css" rel="stylesheet" media="print" />

<!-- load js that has to be in the header  -->
<?php print $head_scripts; ?>

<!--[if lt IE 9]>
<script src="/sites/all/themes/common/js/html5shiv-printshiv.js"></script>
<script src="/sites/all/themes/common/js/selectivizr-min.js"></script>
<![endif]-->


<!-- 
 ======================================================================
        
	Big Mallet's Mallet
	Version: 3.0.1
	URL: http://bigmallet.co.uk
	Made from bits and pieces from the internet. 
	Roughly based on:
    320andup by Andy Clarke
    Stark by John Albin
    inuitcss by Harry roberts

=======================================================================
-->


</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
    <?php print $page_top; ?>
    <?php print $page; ?> 
    <?php print $page_bottom; ?>
  

  <!-- load js --> 
<?php print $scripts; ?> 
<!-- load fonts -->
<script>  

  WebFontConfig = {
  google: {
    families: ['Lato', 'Open+Sans:400,700,300' ]
  }	
  };
  
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
              '://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })();
</script>
<?php global $user; if ($user->uid == 0) : ?>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MCJP59" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script type="text/javascript">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0];var j=d.createElement(s);var dl=l!='dataLayer'?'&l='+l:'';j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;j.type='text/javascript';j.async=true;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-MCJP59');</script>
<!-- End Google Tag Manager -->
<?php endif; ?>
  </body>
</html>