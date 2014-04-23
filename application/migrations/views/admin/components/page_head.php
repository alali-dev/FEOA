<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content=""></meta>
<meta name="author" content=""></meta>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Title -->
<title><?php echo $meta_title;?> </title>
<meta name="description" content="">

<!-- CSS Stylesheet -->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo site_url("/css/bootstrap.css");?>" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url("/css/bootstrap-theme.css");?>" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url("/css/style.css");?>" media="screen" />
<link href="<?php echo site_url("/css/layout/boxed1.css");?>" rel="stylesheet" type="text/css" id="layout">
<link href="<?php echo site_url("/css/skin/green.css");?>" rel="stylesheet" type="text/css" id="skin">
<link href="<?php echo site_url('css/datepicker.css'); ?>" rel="stylesheet">
<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/respond.min.js" type="text/javascript"></script>
<![endif]-->

<!--Favicons -->
<link href="/images/icon/apple-touch-icon-144.png" sizes="144x144" rel="apple-touch-icon-precomposed"></link>
<link href="/images/icon/apple-touch-icon-114.png" sizes="114x114" rel="apple-touch-icon-precomposed"></link>
<link href="/images/icon/apple-touch-icon-72.png" sizes="72x72" rel="apple-touch-icon-precomposed"></link>
<link href="/images/icon/apple-touch-icon-57.png" rel="apple-touch-icon-precomposed"></link>
<link href="/images/icon/favicon.png" rel="shortcut icon"></link>

<!-- Scripts -->
<script src="<?php echo site_url('js/jquery-latest.js'); ?>" type="text/javascript"></script>
<script src="/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="/js/bootstrap.js"></script>
<script src="<?php echo site_url('js/bootstrap-datepicker.js'); ?>"></script>
<script src="/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
<script src="/js/jquery.prettyPhoto.js" type="text/javascript"></script>
<script src="/js/jquery.jcarousel.min.js" type="text/javascript"></script>
<script src="/js/jflickrfeed.js" type="text/javascript"></script>
<script src="/js/selectnav.js" type="text/javascript"></script>
<script src="/js/menu-lamp.js" type="text/javascript"></script>
<script src="/js/jquery.touchwipe.min.js" type="text/javascript"></script>
<script src="/js/home-script.js" type="text/javascript"></script></script>
<script src="/js/custom.js" type="text/javascript"></script>
<?php if(isset($sortable) && $sortable === TRUE): ?>
	<script src="<?php echo site_url('js/jquery-ui-1.9.1.custom.min.js'); ?>"></script>
	<script src="<?php echo site_url('js/jquery.mjs.nestedSortable.js'); ?>"></script>
        <link href="<?php echo site_url("/css/admin.css");?>" rel="stylesheet" type="text/css" id="skin">
	<?php endif; ?>
	
<script type="text/javascript" src="<?php echo site_url('js/tiny_mce/tiny_mce.js'); ?>"></script>
<script type="text/javascript">
    tinyMCE.init({
            // General options
            mode : "textareas",
            theme : "advanced",
            plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

            // Theme options
            theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
            theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
            theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
            theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
            theme_advanced_toolbar_location : "top",
            theme_advanced_toolbar_align : "left",
            theme_advanced_statusbar_location : "bottom",
            theme_advanced_resizing : true,
    });
</script>
<!-- /TinyMCE -->
</head>
