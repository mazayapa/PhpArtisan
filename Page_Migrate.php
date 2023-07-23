<?php
require_once 'inc_header.php';
require_once 'fun.php';
require_once 'inc_menu.php';

echo '<main id="main" class="HanyBody" ><div class="breadcrumbs"></div>';
echo '<div class="container">';


$PageId ="MigratePage";



formOpen($PageId,"Migrate");

PrintFiled('1',"table name");
PrintFiled('2',"translations_table");
formClosed($PageId);




echo '<section id="blog" class="blog"><div class="container" data-aos="fade-up"><div class="row">';
echo '<div class="col-lg-12">';
Print_blocline('1',"php artisan make:migration create_",'form_1','_table');
Print_blocline('2',"php artisan make:migration create_",'form_2','_translations_table');
Print_blocline('3',"php artisan migrate");
Print_blocline('4',"php artisan migrate:refresh");
Print_blocline('5',"php artisan migrate:refresh --seed");
Print_blocline('6',"php artisan migrate:reset");
Print_blocline('7',"php artisan db:seed");
echo '</div>';
echo '</div></div></section>';




echo '</div></main>';


require_once 'inc_footer.php';
?>

<script>
    chageOnform('form_1',1);
    chageOnform('form_2',2);
</script>

