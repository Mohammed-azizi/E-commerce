<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ecom-Nazih | الصفحة الرئيسية</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <!-- <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png"> -->
</head><!--/head-->
 

<?php
if (isset($_SESSION['gcCart'])){
  if (@count($_SESSION['gcCart'])>0) {
    $cart = '<span class="carttxtactive">('.@count($_SESSION['gcCart']) .')</span>';
  } 
 
} 
 ?>
 
<script type="text/javascript">
   

</script>
</head>

<body style="background-color:white" onload="totalprice()" >

  <header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
      <div class="container">
        <div class="row">

        <div class="col-sm-4">
            <div class="contactinfo">
              <ul class="nav nav-pills pull-left">
                <li><a href="<?php echo web_root?>">العربية</a></li>
                <li><a href="ecommerceFr">Français</a></li>
              </ul>
            </div>
          </div>

          
          <div class="col-sm-4">
            <div class="social-icons ">
              <ul class="nav navbar-nav ">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="contactinfo">
              <ul class="nav nav-pills pull-right">
                <li><a href="#"><i class="fa fa-phone"></i> +212 5 43 67 65 43</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> @gmail.com</a></li>
              </ul>
            </div>
          </div>


         
        </div>
      </div>
    </div><!--/header_top-->
    
    <div class="header-middle"><!--header-middle-->
      <div class="container">
        <div class="row">
        <div class="col-md-8 clearfix">
            <div class="shop-menu clearfix pull-left">
              <ul class="nav navbar-nav">     
                <li><a href="<?php echo web_root;?>index.php?q=cart">عربة التسوق<i class="fa fa-shopping-cart"></i> </a></li>
                <!-- <?php if (isset($_SESSION['CUSID'] )) { ?>  
                  <li><a href="<?php echo web_root?>index.php?q=profile"><i class="fa fa-user"></i> Account</a></li>     
                  <li><a   href="<?php echo web_root?>logout.php"><i class="fa fa-lock"></i> Logout</a></li>
                <?php }else{ ?> 
                <li><a data-target="#smyModal" data-toggle="modal"  href=""><i class="fa fa-lock"></i> Login</a></li>
              <?php } ?> -->
              </ul>
            </div>
          </div>
          <div class="col-md-4 clearfix">
            <div class="logo pull-right">
              <a href="<?php echo web_root?>"><img src="images/home/log.png" alt="" /></a>
            </div> 
          </div>
         
        </div>
      </div>
    </div><!--/header-middle-->
  
   
    <div class="header-bottom"><!--header-bottom-->
      <div class="container">
        <div class="row">
        <div class="col-sm-3">
            <form action="<?php echo web_root?>index.php?q=product" method="POST" > 
              <div class="search_box pull-left">
                <input type="text" name="search" placeholder="...البحث عن المنتجات، بالاسم"/>
              </div>
            </form>
          </div>
          <div class="col-sm-9">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="mainmenu pull-right">
              <ul class="nav navbar-nav collapse navbar-collapse">
              <!-- <li><a href="<?php web_root?>index.php?q=contact">للتواصل بنا</a></li> -->
              <li><a href="<?php web_root?>index.php?q=product">المنتجات</a></li>
                
              
                <li class="dropdown"><a href="#">جميع الفئات<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                       <?php 
                                            $mydb->setQuery("SELECT * FROM `tblcategoryAr`");
                                            $cur = $mydb->loadResultList();
                                           foreach ($cur as $result) { 
                                       echo '<li><a href="index.php?q=product&category='.$result->CATEGORIES.'" >'.$result->CATEGORIES.'</a></li>';
                                        } ?> 
                                    </ul>
                                </li> 

         
                                <li><a href="<?php echo web_root;?>" class="active">الصفحة الرئيسية</a></li>
              </ul>
            </div>
          </div>
          
        </div>
      </div>
    </div><!--/header-bottom-->
  
  </header><!--/header-->

 
   



          <?php 
            require_once $content; 
         ?> 





    <footer id="footer"><!-- Footer -->
   
    
    <div class="footer-widget">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <div class="single-widget">
              <h2> :خدمة الزبائن</h2>
              <ul class="nav nav-pills nav-stacked">
                <li><a href=""> :الهاتف</a></li>
                <li><a href="#"> :الواتساب</a></li>
                <li><a href="#"> :البريد الإلكتروني</a></li>
                
              </ul>
            </div>
          </div>
          <div class="col-sm-3 text-center">
            <div class="single-widget">
              <h2>التسوق السريع</h2>
              <ul class="nav nav-pills nav-stacked">
                 <?php 
                      $mydb->setQuery("SELECT * FROM `tblcategoryAr` LIMIT 6");
                      $cur = $mydb->loadResultList();
                     foreach ($cur as $result) {
                      echo '<li><a href="index.php?q=product&category='.$result->CATEGORIES.'" >'.$result->CATEGORIES.'</a></li>';
                      }
                  ?>
              </ul>
            </div>
          </div>
          <div class="col-sm-3 pull-right">
            <div class="single-widget">
              <h2>وسائل التواصل الاجتماعي</h2>
              <ul class="nav nav-pills nav-stacked">
                <a target="_blank1"  href=""><span class="fa-stack fa-lg"><i class="fa fa-facebook fa-stack-1x" ></i><i class="fa fa-square-o fa-stack-2x"></i></span></a>            

    
                <a target="_blank" href=""> <span class="fa-stack fa-lg">
  <i class="fa fa-square-o fa-stack-2x"></i>
  <i class="fa fa-twitter fa-stack-1x"></i>
</span>
</a>
               
              </ul>
            </div>
          </div>
          
          
      
          
        </div>
      </div>
    </div>
    
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
        </div>
      </div>
    </div>
    
  </footer><!-- Footer -->

 <!-- modalorder -->
 <div class="modal fade" id="myOrdered">
 </div>


 <?php include "LogSignModal.php"; ?> 
<!-- end -->
 
    <!-- jQuery -->
    <script src="<?php echo web_root; ?>jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo web_root; ?>js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript --> 
    <!-- DataTables JavaScript -->
    <script src="<?php echo web_root; ?>js/jquery.dataTables.min.js"></script>
    <script src="<?php echo web_root; ?>js/dataTables.bootstrap.min.js"></script>


<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/ekko-lightbox.js"></script> 
<script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo web_root; ?>js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>

   
<script src="<?php echo web_root; ?>js/jquery.scrollUp.min.js"></script>
<script src="<?php echo web_root; ?>js/price-range.js"></script>
<script src="<?php echo web_root; ?>js/jquery.prettyPhoto.js"></script>
<script src="<?php echo web_root; ?>js/main.js"></script> 

  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/gmaps.js"></script>
  <script src="js/contact.js"></script>

    <!-- Custom Theme JavaScript --> 
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/janobe.js"></script> 
 <script type="text/javascript">
  $(document).on("click", ".proid", function () {
    // var id = $(this).attr('id');
      var proid = $(this).data('id')
    // alert(proid)
       $(".modal-body #proid").val( proid )

      });

</script>
 <script>
    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })

    // popover demo
    $("[data-toggle=popover]")
        .popover()
    </script>


      <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>

<script type="text/javascript">


$('#date_picker').datetimepicker({
  format: 'mm/dd/yyyy',
    language:  'ar',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });

 
 
 
function validatedate(){ 
 
 

    var todaysDate = new Date() ;

    var txtime =  document.getElementById('ftime').value
    // var myDate = new Date(dateme); 

    var tprice = document.getElementById('alltot').value 
    var BRGY = document.getElementById('BRGY').value
    var onum = document.getElementById('ORDERNUMBER').value

     
     var mytime = parseInt(txtime)  ;
     var todaytime =  todaysDate.getHours()  ;
       if (txtime==""){
     alert("You must set the time enable to submit the order.")
     }else 
     if (mytime<todaytime){ 
        alert("Selected time is invalid. Set another time.")
      }else{
        window.location = "index.php?page=7&price="+tprice+"&time="+txtime+"&BRGY="+BRGY+"&ordernumber="+onum; 
      }
  }
</script>  


    <script type="text/javascript">
  $('.form_curdate').datetimepicker({
        language:  'ar',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
  $('.form_bdatess').datetimepicker({
        language:  'ar',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
</script>
<script>
 


  function checkall(selector)
  {
    if(document.getElementById('chkall').checked==true)
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=true;
      }
    }
    else
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=false;
      }
    }
  }
   function checkNumber(textBox){
        while (textBox.value.length > 0 && isNaN(textBox.value)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
      //
      function checkText(textBox)
      {
        var alphaExp = /^[a-zA-Z]+$/;
        while (textBox.value.length > 0 && !textBox.value.match(alphaExp)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
  

       
  </script>     

</body>
</html>