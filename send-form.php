<?php 
/*
* Template Name:Send Form Template
*/
?>
<?php
get_header(); ?>
<style>
    .form-wrapper p{
        width: 100%;
        display: flex;
        justify-content: space-between;
    }
    .form-wrapper input{
        outline:none;
    }
    .wpcf7-not-valid-tip{
        position: absolute;
        top:80px
    }
    .wpcf7-response-output{
        display:none
    }
</style>
<div class="border-[0.5px] border-[#e6e6e6] w-[calc(100%_-_128px)] mx-auto my-24"></div>
<div class="px-14 mobile:px-4 w-full mb-24">
    <div class="flex flex-col items-start justify-start mb-24 mobile:my-8 w-full ">
        <p class="text-base font-medium tracking-wider mobile:!leading-[3rem] leading-[7rem] mobile:ml-0 text-gray-700">
            LIÊN HỆ VỚI NGUYÊN NINH</p>
        <div class="inline-flex items-start justify-start w-full mobile:mt-8">
            <div class="w-3/4 mobile:w-full mb-16 mobile:mb-0">
                <p
                    class="text-[84px] mobile:text-[3rem] mobile:!leading-[5rem] mobile:text-center text-gray-700 leading-[7rem] font-prata">
                    “Bạn có điều gì muốn nói với Nguyên Ninh?”
                </p>
            </div>
        </div>
        <div class="w-full h-[585px] max-h-[585px] flex">
            <div class="w-[30%]"></div>
            <div class="w-[70%] h-full">
                <img src="https://via.placeholder.com/664x514" class="w-full max-h-full" alt="">
            </div>
        </div>
    </div>
    <div class="mt-24 flex">
        <div class="w-[30%]"></div>
        <div class="w-[70%]">
            <?php echo do_shortcode('[contact-form-7 id="40" title="Contact form 1"]') ?>
        </div>
    </div>
</div>

<script>
    var submit = document.getElementById("submit");
    submit.classList.add( "px-6","mt-24", "py-4", "w-1/5", "mobile:self-center", "rounded-[26px]", "bg-[#D6E1CC]", "text-[#306701]", "focus:border-[#98B380]", "focus:border-[4.8px]", "mobile:focus:border-[1px]", "disabled:bg-[#D1D2D0]", "disabled:text-white","uppercase")
</script>
<?php get_footer();?>