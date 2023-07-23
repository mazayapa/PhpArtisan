<?php
require_once 'inc_header.php';
require_once 'fun.php';
require_once 'inc_menu.php';

echo '<main id="main" class="HanyBody" ><div class="breadcrumbs"></div>';
echo '<div class="container">';


$PageId ="OnlyControllerPage";



formOpen($PageId,"Only Controller");

PrintFiled('1',"Controller Name");
PrintFiled('2',"View Folder");
PrintFiled('3',"View prefix Name");
formClosed($PageId);




echo '<section id="blog" class="blog"><div class="container" data-aos="fade-up"><div class="row">';
echo '<div class="col-lg-12">';
//Print_blocline('1',"php artisan make:controller ");
Print_blocline('1',"php artisan make:model ",'form_1'," -m");
Print_blocline('3',"php artisan make:seeder ",'form_1',"Seeder");
Print_blocline('2',"php artisan make:controller ",'form_1','Controller');
Print_blocline('4',"php artisan make:request ",'form_1','Request');
Print_blocline_View('5',"php artisan make:view ",'form_2','index','form_3');
Print_blocline_View('6',"php artisan make:view ",'form_2','form','form_3');
 echo '<hr>';

Print_blocline('7',"php artisan make:model ",'form_1',"Translation -m");
Print_blocline('8',"php artisan make:seeder ",'form_1',"TranslationSeeder");

echo '</div>';
echo '</div></div></section>';




echo '</div></main>';


require_once 'inc_footer.php';
?>

<script>
    /*
    chageOnform('form_1',2);
    chageOnform('form_1',3);
    */

</script>

