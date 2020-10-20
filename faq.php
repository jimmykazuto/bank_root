<?php 
  $site_title = "FAQ";
  include ("view/template/doctype_html.php");
  include ("view/template/nav.php");
  include ("view/template/header.php");

  require ("view/faqView.php");

  $script = "<script src='public/js/faq.js'></script>";

  include ("view/template/footer.php");