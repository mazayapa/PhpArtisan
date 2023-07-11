<?php
require_once 'inc_header.php';
require_once 'fun.php';
require_once 'inc_menu.php';

echo '<main id="main"><div class="breadcrumbs"></div>';
echo '<div class="container HanyBody">';

$PageId ="ComponentPage";



formOpen($PageId,"Component");
PrintFiled('1',"Component name");

formClosed($PageId);




echo '<section id="blog" class="blog"><div class="container" data-aos="fade-up"><div class="row">';
echo '<div class="col-lg-12">';
Print_blocline('1',"php artisan make:component ");
Print_blocline('2',"php artisan make:component ",'form_1');
Print_blocline('3',"php artisan make:component ",'form_1',' --inline ');

echo '</div>';
echo '</div></div></section>';



echo '</div></main>';

require_once 'inc_footer.php';
?>

<script>

    chageOnform('form_1',2);
</script>

