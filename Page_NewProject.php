<?php
require_once 'inc_header.php';
require_once 'fun.php';
require_once 'inc_menu.php';

echo '<main id="main" class="HanyBody" ><div class="breadcrumbs"></div>';
echo '<div class="container">';


$PageId ="NewProjectPage";



formOpen($PageId,"New Project");
PrintFiled('1',"Project Name");
PrintFiled('2',"folde name");
formClosed($PageId);




echo '<section id="blog" class="blog"><div class="container" data-aos="fade-up"><div class="row">';
echo '<div class="col-lg-12">';
Print_blocline('1',"composer create-project laravel/laravel ",'form_1');
Print_blocline('2',"cd ",'form_1');

echo '</div>';
echo '</div></div></section>';




echo '</div></main>';


require_once 'inc_footer.php';
?>

<script>
    chageOnform('form_1',2);
    chageOnform('form_2',3);
</script>

