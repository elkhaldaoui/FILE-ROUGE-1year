<?php
  require_once "./views/includes/alerts.php";
  require_once './views/includes/head.php';
  require_once './autoload.php';
  require_once "./controllers/HomeController.php";



  $home= new HomeController();
  $pages= ['home','agents','anomalies','dashboard','login','rapports','releves'];
if(isset($_GET['page'])){
   if(in_array($_GET['page'],$pages)){
           $page=$_GET['page'];
           $home->index($page);
   }else{
     include('./views/404.php');
   }
}else{
  $home->index('home');
}
?> 
<?php
require_once './views/includes/footer.php';
?>