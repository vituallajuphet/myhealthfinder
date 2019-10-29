<div id="banner_area">
    <div class="bnr_cont ">
    <?php if($page_name == "home"){?>
        <figure class="bnr_img_fixed">
                <img src="<?=base_url()?>assets/images/guest/banner1.jpg" alt="medical">
            </figure>    
        <div class="jumbotron text-center">
                    
           <div class="container">
           <h1><?= $title;?></h1> 
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A maiores porro soluta velit neque dicta tenetur. Aperiam, distinctio tempora mollitia consectetur nesciunt, nam provident saepe perferendis ex minima delectus sed?</p> 
            <a href="" class="btn btn-success">Learn More</a>
            </div>
        </div>
    <?php }
     else{ ?>
        <div class="nhome_bnr">
            <div class="bnr_info">
                <figure><img src="<?=base_url()?>assets/images/guest/brn_img.jpg" alt="nurse smiling"></figure>
            </div>
            <div class="bnr_title">
                  <h2><?= $page_title;?></h2>
            </div>
        </div>
     <?php }?>
     </div>
</div>