<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <link href="<?=site_url('public/assets/src/output.css');?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<style>
  .swiper-slide {
  width: auto;
}
</style>
</head>
<body>
  <div class="max-w-100 bg-red-500 m-auto relative">
    <div class="absolute flex items-center justify-between w-full px-4 py-3 ">
  <!-- Logo -->
  <div class="w-18 md:w-25">
    <img src="<?=validImg(base_url($cardInfo['logo']))?>" alt="Logo" class="h-auto w-full" />
  </div>

  <!-- Phone Number -->
  <div class="text-white text-sm md:text-base border border-gray-200  bg-black/70 overflow-hidden pr-4 hover:text-red-500 rounded-2xl">
    <a href="tel:<?=$cardInfo['phone'] ?? '';?>" class="cursor-pointer items-center flex font-semibold hover:text-red-500"><i class="fa fa-phone mr-2 bg-black/60 py-2 px-2 text-white-500 overflow-hidden "></i>+<?=$cardInfo['phone'] ?? '';?></a>
  </div>
</div>

    <div class="">
      <img src="<?=validImg(base_url($cardInfo['bannerimage']))?>" class="w-100">
    </div>

    <div class="mx-auto max-w-md overflow-hidden relative  rounded-2xl rounded-b-none bg-white shadow-md md:max-w-2xl card-header" style="margin-top:-25px">
      <div class="p-2 px-5">
        <div class="flex gap-2 mt-2 mb-2">
          <button id="saveContactBtn" class="flex-1 bg-black cursor-pointer border text-white border-gray-200 px-3 py-2 rounded-md shadow hover:bg-red-300 hover:text-white text-sm">
            Save Contact
          </button>

          <button id="exchangeContactBtn" class="flex-1 cursor-pointer border text-black border-gray-200 border-solid shadow rounded-md py-2 px-3 hover:bg-red-300 hover:text-white text-sm">
            Exchange Contact
          </button>
        </div>

        <div class="mt-5">
          <h3 class="text-lg font-bold text-gray-800"><?=$labels['about'] ?? '';?></h3>
          <div class="pt-2">
            <p class="antialiased text-sm">
                <?=$cardInfo['about_us'] ?? '' ;?>
            </p>
          </div>
        </div>

        <div class="mt-5 ">
          <h3 class="text-lg font-bold text-gray-800">Social Media</h3>
          <div class="flex grid grid-cols-5 md:gird-cols-5 gap-3 pt-2">
            <?php
            if(!empty($cardInfo['whatsapp_link'])) { ?>
            <div class="border bg-red-100 border-solid justify-items-center text-center border-gray-200 cursor-pointer hover:shadow:md px-2 py-2 rounded-lg overflow-hidden">
                <a href="<?=$cardInfo['whatsapp_link'];?>" target="_blank">
                    <img src="<?=site_url('public/assets/img/icons/whatsapp-svgrepo-com.svg');?>" class="">
                </a>
            </div>
            <?php }
            if(!empty($cardInfo['instagaram_link'])) {  ?>

            <div class="border bg-red-100 border-solid justify-items-center text-center border-gray-200 cursor-pointer hover:shadow:md px-2 py-2 rounded-lg overflow-hidden">
                <a href="<?=$cardInfo['instagaram_link'];?>" target="_blank">
                    <img src="<?=site_url('public/assets/img/icons/instagram-1-svgrepo-com.svg');?>" class="">
                </a>
            </div>
            <?php } 
            if(!empty($cardInfo['facebook_link'])) {  ?>
             <div class="border bg-red-100 border-solid justify-items-center text-center border-gray-200 cursor-pointer hover:shadow:md px-2 py-2 rounded-lg overflow-hidden">
              <img src="<?=site_url('public/assets/img/icons/icons8-facebook.svg');?>" class="">
            </div>
            <?php } 
              if(!empty($cardInfo['website_link'])) {  ?>
              <div class="border bg-red-100 border-solid justify-items-center text-center border-gray-200 cursor-pointer hover:shadow:md px-2 py-2 rounded-lg overflow-hidden">
                <a href="<?=$cardInfo['website_link'];?>" target="_blank">
                    <img src="<?=site_url('public/assets/img/icons/website-click-svgrepo-com.svg');?>" class="">
                </a>
            </div>
            <?php }
            if(!empty($cardInfo['twitter_link'])) {  ?>
             <div class="border bg-red-100 border-solid justify-items-center text-center border-gray-200 cursor-pointer hover:shadow:md px-2 py-2 rounded-lg overflow-hidden">
                <a href="<?=$cardInfo['twitter_link'];?>" target="_blank">
                <img src="<?=site_url('public/assets/img/icons/icons8-twitter.svg');?>" class="">
              </a>
            </div>
            <?php } ?>
        </div>
      </div>

      <div class="mt-5">
        <h3 class="text-gray-800 text-lg font-bold mb-2 mt-2"><?=$labels['menu'] ?? '';?></h3>
        <div class="overflow-x-auto whitespace-nowrap pl-1 p-4 space-x-4 flex">
          <?php 
          if(!empty($blog)) {
            foreach($blog as $blogItem) { ?>
              <div class="inline-block w-64 bg-white rounded-lg shadow p-4">
                <h3 class="text-lg font-semibold capitalize"> <?= $blogItem->title ;?></h3>
                <p class="text-sm text-gray-600 whitespace-break-spaces"> <?=($blogItem->description ? $blogItem->description :'') ;?></p>
              </div>
              <?php
            }
          } ?>
          
          
      </div>
      <!-- thumb CArousel -->
      <div class="mt-5">
        <h3 class="text-gray-800 text-lg font-bold"><?=$labels['products'] ?? '';?></h3>
         <div class="swiper myClientsSwiper   m-auto py-8 mt-3">
          <div class="swiper-wrapper items-center">
            <?php 
            if(!empty($services)) {
              foreach($services as $service) { ?>
                <div class="swiper-slide flex justify-center shadow-md border-gray-200 mb-2 border rounded-2xl overflow-hidden">
                  <img src="<?=validImg($service->image);?>" title="<?=($service->title ? $service->title :'');?>" class="w-full object-contain " />
                  <div class="position-relative mt-1 pb-1 pl-1 bg-white/90 rounded-lg">
                    <p class="text-sm "><?=($service->title ? $service->title :'');?></p>
                  </div>
                </div>
              <?php }
            } ?>  
            
          </div>
        </div>
      </div>

      <div class="mt-5">
        <h3 class="text-gray-800 text-lg font-bold"><?=$labels['contact'] ?? '';?></h3>
        <div class="w-full shadow border border-gray-200 p-4 rounded-2xl mt-5 mb-5 flex items-start gap-4">
          <!-- Avatar -->
          <div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center text-red-600 font-bold text-sm">
            <i class="fas fa-user"></i>
          </div>
          <!-- Info Section -->
          <div class="flex-1">
            <div class="flex items-center justify-between">
              <span class="text-gray-600 text-sm font-medium">Name</span>
            </div>
            <span class="text-black text-base font-semibold"><?=$cardInfo['title'] ?? '';?></span>
          </div>
        </div>

        <div class="w-full shadow border border-gray-200 p-4 rounded-2xl mt-5 mb-5 flex items-start gap-4">
          <!-- Avatar -->
          <div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center text-red-600 font-bold text-sm">
           <i class="fa-solid fa-phone"></i>
          </div>
          <!-- Info Section -->
          <div class="flex-1">
            <div class="flex items-center justify-between">
              <span class="text-gray-600 text-sm font-medium">Phone</span>
            </div>
            <span class="text-black text-base font-semibold"><a href="tel:<?=$cardInfo['phone'] ?? '';?>">+<?=$cardInfo['phone'] ?? '';?></a></span>
          </div>
        </div>
      

        <div class="w-full shadow border border-gray-200 p-4 rounded-2xl mt-5 mb-5 flex items-start gap-4">
          <!-- Avatar -->
          <div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center text-red-600 font-bold text-sm">
            <i class="fa-solid fa-envelope"></i>
          </div>
          <!-- Info Section -->
          <div class="flex-1">
            <div class="flex items-center justify-between">
              <span class="text-gray-600 text-sm font-medium">Email</span>
            </div>
            <span class="text-black text-base font-semibold"><a href="mailto:<?=$cardInfo['email'] ?? '';?>"><?=$cardInfo['email'] ?? '';?></a></span>
          </div>
        </div>

        <div class="w-full shadow border border-gray-200 p-4 rounded-2xl mt-5 mb-5 flex items-start gap-4">
          <!-- Avatar -->
          <div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center text-red-600 font-bold text-sm">
            <i class="fa-solid fa-map-marker"></i>
          </div>
          <!-- Info Section -->
          <div class="flex-1">
            <div class="flex items-center justify-between">
              <span class="text-gray-600 text-sm font-medium">Address</span>
            </div>
            <span class="text-black text-base font-medium"><?=$cardInfo['address'] ?? '';?> </span>
          </div>
        </div>

        <p class="mt-5 text-gray-500 font-semibold text-xs pb-5 hover:text-red cursor-pointer">
          Are you looking for a helping hand? Do you have questions that you would like to ask us? Go on! We are more than happy to answer all your queries and doubts.
        </p>
    </div>
      

      </div>
    </div>


  </div>

  <!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper(".myClientsSwiper", {
      slidesPerView: 3,
      spaceBetween: 10,
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        }
      }
    });



    
  </script>


<script>
var saveBtn = document.getElementById("saveContactBtn");
saveBtn.addEventListener("click", function () {
  // Get the contact information from the website
  var contact = {
    name: "<?=$cardInfo['title'] ?? '';?>",
    phone: "<?=$cardInfo['phone'] ?? '';?>",
    email: "<?=$cardInfo['email'] ?? '';?>"
  };
  // create a vcard file
  var vcard = "BEGIN:VCARD\nVERSION:4.0\nFN:" + contact.name + "\nTEL;TYPE=work,voice:" + contact.phone + "\nEMAIL:" + contact.email + "\nEND:VCARD";
  var blob = new Blob([vcard], { type: "text/vcard" });
  var url = URL.createObjectURL(blob);
  
  const newLink = document.createElement('a');
  newLink.download = contact.name + ".vcf";
  newLink.textContent = contact.name;
  newLink.href = url;
  
  newLink.click();
});


document.getElementById("exchangeContactBtn").addEventListener("click", function () {
    // Contact info
    const fullName = "John Doe";
    const phone = "+1234567890";
    const email = "john@example.com";
    const organization = "Acme Corp";

    // vCard format
    const vCardData = [
        "BEGIN:VCARD",
        "VERSION:3.0",
        `FN:${fullName}`,
        `TEL;TYPE=WORK,VOICE:${phone}`,
        `EMAIL:${email}`,
        `ORG:${organization}`,
        "END:VCARD"
    ].join("\r\n");

    // Create and download .vcf
    const blob = new Blob([vCardData], { type: "text/vcard;charset=utf-8" });
    const url = URL.createObjectURL(blob);
    const a = document.createElement("a");
    a.href = url;
    a.download = "contact.vcf";
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
    URL.revokeObjectURL(url);
});
</script>

</body>
</html>