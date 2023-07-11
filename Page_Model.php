<?php
require_once 'inc_header.php';
require_once 'fun.php';
require_once 'inc_menu.php';

echo '<main id="main" class="HanyBody" ><div class="breadcrumbs"></div>';
echo '<div class="container">';


$PageId ="ModelPage";



formOpen($PageId,"Model");

PrintFiled('1',"model name");
formClosed($PageId);




echo '<section id="blog" class="blog"><div class="container" data-aos="fade-up"><div class="row">';
echo '<div class="col-lg-12">';
Print_blocline('1',"php artisan make:model ");
Print_blocline('2',"php artisan make:model ",'form_1');
Print_blocline('3',"php artisan make:model ",'form_1',' -m');
Print_blocline('4',"php artisan make:model ",'form_1',' -c -r -m');
Print_blocline('5',"php artisan make:model ",'form_1',' -c -r -m -s -R');

echo '</div>';
echo '</div></div></section>';




echo '</div></main>';


require_once 'inc_footer.php';
?>

<script>
    chageOnform('form_1',2);
    chageOnform('form_1',3);
</script>

