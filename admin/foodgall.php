<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Km Lazeez</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="images/favicon.png" />
    <style>
        .text-muted{
            text-align: center;
        }
      </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.php -->
    <?php
        include("include/header.php");
        ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.php -->
      <?php
          include("Include/sidebar.php");
          ?>
        <!-- partial -->
         <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h2> Our Food Gallery </h2>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
          <div class="row ">
            <div class="col-md-12 mb-4">
                <div class="card">
                    <div class="card-header bg-white font-weight-bold">
                        Food Photo list
                        <a href="" class="btn btn-primary btn-md float-right customs_btn" data-toggle="modal" data-target="#foodGallery">
                            <i class="fa fa-plus"></i> ADD NEW
                        </a>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071624_tea-cup-bag-high-res-stock-photography-1570544677.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/1" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071640_07_2018-tea.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/2" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071617_img_8420.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/3" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071616_mix-veg-pakora-recipe24.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/4" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071612_3211402=s1280=h960.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/5" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071630_chicken pakoda-620.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/6" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071643_download.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/7" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071653_tandoori-chicken-sandwich-recipe.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/8" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071604_fb.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/9" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071612_e5aghgqk5ennbxxullkuvcqtp21otsipyi4nvdsgms8cwnzitoyge78ggn1y4r1k-.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/10" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071651_download (1).jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/11" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071602_maxresdefault.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/12" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071721_chicken-reshmi-kebab1.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/13" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071716_Chicken Malai Kebab.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/14" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071744_Gondhoraj-Chicken-by-tanya-munshi.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/15" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071705_chicken-tandori-1526595014.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/16" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071731_fish_tikka.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/17" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071741_chilli-chicken-boneless.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/18" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071746_paneer-tikka.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/19" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071730_chilli_paneer_dry.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/20" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071744_crispy_chicken.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/21" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071753_chilly_garlic_mushroom.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/22" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071701_bhetki_fish_fry.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/23" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071742_plain_rice.png" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/24" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071713_jeera_rice.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/25" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071758_peas_pulao.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/26" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071719_veg_pulao.png" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/27" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071750_lemon_rice.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/28" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071755_curd_rice.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/29" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071751_vegetable.biryani.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/30" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071711_chicken_biriyani.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/31" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071715_tandoori_roti.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/32" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071722_tandoori-butter-roti.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/33" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071726_lachha-paratha-.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/34" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071736_plain_naan.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/35" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071738_Butter-Naan.png" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/36" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071741_garlic_naan.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/37" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071705_Masala-Kulcha-recipe-how-to-make-masala-kulcha.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/38" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071706_yellow_dal_plain.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/39" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071738_dal-tadka-recipe-1.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/40" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071737_Bengali_Style_Dimer_Torka_Recipe_Egg_Tadka_Dal_Recipe_.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/41" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071722_Chicken-Tadka.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/42" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071707_dal_makhni.png" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/43" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071757_Eggs-Makhani.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/44" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071704_chicken_dal_makhni.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/45" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071734_chana-masala.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/46" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071831_green_salad.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/47" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001071858_onion-rings-salad.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/48" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001080827_2 vada.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/50" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001080803_2 idli.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/51" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001080849_masala dosa.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/52" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001080825_plain dosa.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/53" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001080828_msala uttapam.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/54" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                            <div class="col-md-2 text-center">
                                    <img src="http://lazeez.softwareretailsolutions.com/assets/user/images/foodGallery/202001080835_dahi vada.jpg" class="img-thumbnail" width="200" height="200">
                                    <a href="http://lazeez.softwareretailsolutions.com/admin/foodGalleryDelete/55" class="btn btn-danger btn-sm btn-square mt-2" onclick="return confirm('Are you sure ?')">Remove</a>
                                </div>
                                                    </div>
                    </div>
                </div>
            </div>
        </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.php -->
          <?php
            include("Include/footer.php");
            ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="js/dashboard.js"></script>
    <script src="js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>