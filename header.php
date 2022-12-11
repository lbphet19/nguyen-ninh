<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/node_modules/@glidejs/glide/dist/css/glide.core.min.css">
<?php wp_head(); ?>
<style>

/* fonts */
@font-face {
  font-family: prata ;
  src: url(<?php echo get_template_directory_uri(); ?>/src/assets/fonts/Prata-Regular.ttf);
}

@font-face {
  font-family: raleway ;
  src: url(<?php echo get_template_directory_uri(); ?>/src/assets/fonts/Raleway-VariableFont_wght.ttf);
}

body{
  font-family: 'Raleway'
}
@media (min-width:320px) {
  body{
    font-size:14px
  } 
}
/* resposive */
@media (min-width:1280px) {
  body{
    font-size:16px
  } 
}
</style>
</head> 
<body <?php body_class(); ?>>
<div class="flex items-center justify-between px-14 py-5 w-full">
<p class="text-4xl leading-10 text-gray-900 font-raleway">Nguyên Ninh</p>
<div class="flex items-center justify-center">
<div class = "flex flex-col items-center gap-1 mr-16 last:mr-0 text-[#383A36] tracking-widest uppercase font-raleway">Sản phẩm</div>
<div class = "flex flex-col items-center gap-1 mr-16 last:mr-0 text-[#383A36] tracking-widest uppercase font-raleway">Về Nguyên Ninh</div>
<div class = "flex flex-col items-center gap-1 mr-16 last:mr-0 text-[#383A36] tracking-widest uppercase font-raleway">Câu chuyện</div>
<div class="flex space-x-1 items-center  gap-1 mr-16 last:mr-0 rounded-full">
<div class="relative bg-[#306701] rounded-full w-[11rem] h-12">
<p class="absolute text-xs font-medium tracking-widest leading-none text-center text-white left-[2.5rem] top-4 font-raleway">0243 828 3573</p>
</div>
</div>
<!-- <div class = "flex flex-col items-center gap-1 mr-16 last:mr-0 px-8 py-4">0243 828 3573</div> -->

</div>
</div>