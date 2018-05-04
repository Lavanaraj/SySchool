<?php

$a = $_SERVER['PHP_SELF'];
$b = explode("/", $a);
$c = end($b);

$colorH = 'black';
$colorD = 'black';
$colorA = 'black';
$colorS = 'black';

if ($c=="index.php") {
   $colorH = '#16a085';
}
elseif ($c=="services.php") {
   $colorD = '#16a085';
}
elseif ($c=="about.php") {
   $colorA = '#16a085';
}
elseif ($c=="signup.php") {
   $colorS = '#16a085';
}

?>

<div class="logo">
            <a href="index.php">Sy<span>S</span>chool</a>
         </div>
         <!--end of logo-->
         <div class="login">
            <form>
               <input type="text" title="User Name" name="" placeholder="User Name">
               <input type="Password" title="Password" name="" placeholder="Password">
               <button>LOGIN </button>                           
            </form>
         </div>
         <!--end of login menu-->
         <div class="menu">
            <ul>
               <li><a style="color: <?php echo $colorH; ?>" href="index.php">HOME</a></li>
               <li><a style="color: <?php echo $colorD; ?>" href="services.php">DOWNLOADS</a></li>
               <li><a style="color: <?php echo $colorA; ?>" href="about.php">ABOUT</a></li>
               <!--<li ><a style='color: white' href="services.php">SERVICES</a></li>
               <li><a href="works.php">WORKS</a></li>
               <li ><a href="pricing.php"  >PRICING</a></li>-->
               <li class="selected" ><a  style="color: <?php echo $colorS; ?>" href="signup.php">SIGNUP</a></li>
            </ul>
         </div>
         <!--end of menu-->