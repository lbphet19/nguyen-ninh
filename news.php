<?php 
/*
* Template Name:News Page
*/
?>
<?php
get_header(); ?>


<div class="px-14 mobile:px-4 w-full mobile:mt-4 max-h-[444px] h-[444px]"
    style="background:linear-gradient(0deg, rgba(56, 58, 54, 0.72), rgba(56, 58, 54, 0.72)),url(<?php echo get_template_directory_uri(); ?>/src/assets/imgs/HO-GUOM.jpg);background-size:contain; ">
    <div class="flex pt-24 items-end justify-between">
        <div class="flex flex-col w-1/2 mr-[196px]">
            <p class="text-base font-medium tracking-wider leading-7 ml-4 mobile:ml-0 text-white font-raleway">NHẬT KÝ
                CỦA NGUYÊN NINH
            </p>
            <div class="inline-flex items-center justify-center w-full mt-8">
                <p
                    class="text-[84px] laptop:text-7xl laptop:leading-[6rem] mobile:text-[3.5rem] mobile:!leading-[5rem] leading-[7rem] text-white font-prata mobile:text-center">
                    Những mảnh chuyện nho nhỏ</p>
            </div>
        </div>
        <div class="w-1/4 mb-6">
            <p class="font-medium leading-7 font-raleway text-white">Chào mừng bạn tới với nhật ký của Nguyên Ninh, nơi
                chúng mình sẻ chia những mẩu chuyện của mình và của thủ đô thân thương</p>
        </div>
    </div>
</div>
<div class="px-14 bg-[#F9F8F1] py-24">
    <div class="flex">
        <div class="mr-[52px]">
            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M24 4C21.4918 13.7869 13.7869 21.4918 4 24C13.7869 26.5082 21.4918 34.2131 24 44C26.5082 34.2131 34.2131 26.5082 44 24C34.2131 21.4918 26.5082 13.7869 24 4Z"
                    fill="#383A36" />
            </svg>
        </div>
        <div>
            <p class="font-prata text-5xl leading-[56px] font-normal">Câu chuyện của tuần</p>
        </div>
    </div>

    <div class="mt-16 max-h-[550px] ">
        <div class="relative mobile:static mobile:flex mobile:flex-col inline-flex col-span-2 space-y-10 items-center justify-center max-h-[600px] w-full">
            <img src="https://via.placeholder.com/664x514" class="w-full max-h-[600px]" alt="">
            <div class="absolute bg-[#D53128] px-8 py-4 left-0 top-0">
                <p class="uppercase font-semibold text-sm text-white">Nổi bật tuần này</p>
            </div>
            <div
                class="absolute flex flex-col mb-8 justify-between mobile:static mobile:!mt-0 mobile:h-[50%] h-1/2 bottom-0 bg-red-50 border border-red-200 w-1/3 left-auto right-0">
                <div class="flex flex-col px-8 pt-8">
                    <div class="font-bold text-3xl desktop:text-2xl leading-8 text-[#383A36] mb-4">
                        <p>Món quà từ những người phụ nữ trong gia đình</p>
                    </div>
                    <div class="text-sm font-medium desktop:text-sm leading-7 text-[#636366]">
                        <p>Có một điều mà thực khách có thể ít biết tới, đó là bánh cốm Nguyên Ninh chủ yếu được làm
                            ra bởi những người phụ nữ trong gia đình. Thương hiệu...</p>
                    </div>
                </div>
                <div class="flex justify-between pt-8 px-8 mobile:pb-4 pb-4">
                    <div class="text-sm font-bold tracking-widest leading-none text-center text-black">
                        ĐỌC CÂU CHUYỆN
                        <i class="fa-solid fa-arrow-up rotate-45 text-black"></i>
                    </div>
                    <div class="text-xs font-medium tracking-widest leading-none text-center text-black">11.02.2022
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="px-14 bg-[#F9F8F1] pt-24">
    <div class="flex">
        <div class="mr-[52px]">
            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M24 4C21.4918 13.7869 13.7869 21.4918 4 24C13.7869 26.5082 21.4918 34.2131 24 44C26.5082 34.2131 34.2131 26.5082 44 24C34.2131 21.4918 26.5082 13.7869 24 4Z"
                    fill="#383A36" />
            </svg>
        </div>
        <div>
            <p class="font-prata text-5xl leading-[56px] font-normal">Khám phá nhật ký Nguyên Ninh</p>
        </div>
    </div>
</div>


<?php get_footer();