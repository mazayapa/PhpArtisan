<?php
require_once 'inc_header.php';
require_once 'fun.php';
require_once 'inc_menu.php';

echo '<main id="main" class="HanyBody" ><div class="breadcrumbs"></div>';
echo '<div class="container">';


$PageId ="uploadPage";



formOpen($PageId,"Upload");
PrintFiled('1',"git clone url");
PrintFiled('2',"folde name");
formClosed($PageId);



echo '<section id="blog" class="blog"><div class="container" data-aos="fade-up"><div class="row">';
echo '<div class="col-lg-12">';
Print_blocline('1',"cd public_html");
Print_blocline('2',"git clone ",'form_1');
if(isset($_SESSION['uploadPage'])){
    Print_blocline('7',"git clone ",'form_1'," ".$_SESSION['uploadPage']['form_2']);
}

Print_blocline('3',"cd ",'form_2');
Print_blocline('4',"composer install");
Print_blocline('5',"php artisan key:generate");
Print_blocline('6',"php artisan migrate:refresh --seed");
echo '</div>';
echo '</div></div></section>';




echo '</div></main>';


require_once 'inc_footer.php';
?>

<script>
    chageOnform('form_1',2);
    chageOnform('form_2',3);
</script>

