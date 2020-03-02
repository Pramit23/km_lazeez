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
              <h2> Food </h2>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
           <div class="row mb-4">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header bg-white font-weight-bold">
                        Foods Items
                        <button type="submit" class="btn btn-secondary float-right customs-btn-bd" data-toggle="modal" data-target="#foodCategory">
                            Add New
                        </button>
                    </div>
                    <div class="card-body ">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Food name</th>
                                <th scope="col">Food Price</th>
                                <th scope="col">Category name</th>
                                
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                                        <tr>
                                <th scope="col">1</th>
                                <th scope="col">Tea</th>
                                <th scope="col">10</th>
                                <th scope="col">Beverages</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="Tea" data-food_price="10" data-food_category_id="1" data-food_description="Tea energizing you" data-food_image="202001071645_tea-cup-bag-high-res-stock-photography-1570544677.jpg" data-id="1" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="1" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">2</th>
                                <th scope="col">Special Tea</th>
                                <th scope="col">20</th>
                                <th scope="col">Beverages</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="Special Tea" data-food_price="20" data-food_category_id="1" data-food_description="Special Tea very tasty" data-food_image="202001071613_07_2018-tea.jpg" data-id="2" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="2" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">3</th>
                                <th scope="col">Special Cofee</th>
                                <th scope="col">30</th>
                                <th scope="col">Beverages</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="Special Cofee" data-food_price="30" data-food_category_id="1" data-food_description="Special Coffee at your fingertips" data-food_image="202001071658_img_8420.jpg" data-id="3" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="3" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">4</th>
                                <th scope="col">Assorted Veg Pakora(10PCs)</th>
                                <th scope="col">70</th>
                                <th scope="col">Snacks &amp; Sandwiches</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="Assorted Veg Pakora(10PCs)" data-food_price="70" data-food_category_id="2" data-food_description="The yummy veg pakora" data-food_image="202001071617_mix-veg-pakora-recipe24.jpg" data-id="4" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="4" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">5</th>
                                <th scope="col">Onion Pakora(10Pcs)</th>
                                <th scope="col">70</th>
                                <th scope="col">Snacks &amp; Sandwiches</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="Onion Pakora(10Pcs)" data-food_price="70" data-food_category_id="2" data-food_description="Tasty Onion Pakora" data-food_image="202001071655_3211402=s1280=h960.jpg" data-id="5" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="5" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">6</th>
                                <th scope="col">Chicken Pakora(BONLESS 8PCs)</th>
                                <th scope="col">160</th>
                                <th scope="col">Snacks &amp; Sandwiches</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="Chicken Pakora(BONLESS 8PCs)" data-food_price="160" data-food_category_id="2" data-food_description="Yummy chicken pakora" data-food_image="202001071618_chicken pakoda-620.jpg" data-id="6" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="6" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">7</th>
                                <th scope="col">PANEER PAKORA(8PCs)</th>
                                <th scope="col">140</th>
                                <th scope="col">Snacks &amp; Sandwiches</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="PANEER PAKORA(8PCs)" data-food_price="140" data-food_category_id="2" data-food_description="Panner pakora" data-food_image="202001071644_paneer-pakoda-480x270.jpg" data-id="7" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="7" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">8</th>
                                <th scope="col">VEG SANDVICH</th>
                                <th scope="col">50</th>
                                <th scope="col">Snacks &amp; Sandwiches</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="VEG SANDVICH" data-food_price="50" data-food_category_id="2" data-food_description="Veg Sandwich" data-food_image="202001071602_download.jpg" data-id="8" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="8" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">9</th>
                                <th scope="col">Grilled Chicken Sandwich</th>
                                <th scope="col">70</th>
                                <th scope="col">Snacks &amp; Sandwiches</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="Grilled Chicken Sandwich" data-food_price="70" data-food_category_id="2" data-food_description="Grilled Chicken" data-food_image="202001071607_tandoori-chicken-sandwich-recipe.jpg" data-id="9" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="9" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">10</th>
                                <th scope="col">CHICKEN LOLIPOP(8PCs)</th>
                                <th scope="col">150</th>
                                <th scope="col">Snacks &amp; Sandwiches</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="CHICKEN LOLIPOP(8PCs)" data-food_price="150" data-food_category_id="2" data-food_description="Chicken Lollipop" data-food_image="202001071613_fb.jpg" data-id="10" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="10" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">11</th>
                                <th scope="col">Saka Papad</th>
                                <th scope="col">10</th>
                                <th scope="col">Snacks &amp; Sandwiches</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="Saka Papad" data-food_price="10" data-food_category_id="2" data-food_description="Roasted Papad" data-food_image="202001071646_e5aghgqk5ennbxxullkuvcqtp21otsipyi4nvdsgms8cwnzitoyge78ggn1y4r1k-.jpg" data-id="11" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="11" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">12</th>
                                <th scope="col">CHICKEN TIKA-(8Pcs)</th>
                                <th scope="col">200</th>
                                <th scope="col">Starter Menu</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="CHICKEN TIKA-(8Pcs)" data-food_price="200" data-food_category_id="3" data-food_description="Chicken Tikka" data-food_image="202001071635_download (1).jpg" data-id="12" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="12" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">13</th>
                                <th scope="col">CHICKEN PUDINA TIKKA(8Pcs)</th>
                                <th scope="col">200</th>
                                <th scope="col">Starter Menu</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="CHICKEN PUDINA TIKKA(8Pcs)" data-food_price="200" data-food_category_id="3" data-food_description="Chicken Pudina" data-food_image="202001071652_maxresdefault.jpg" data-id="13" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="13" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">14</th>
                                <th scope="col">CHICKEN RESHMI KAWAB(8PCs)</th>
                                <th scope="col">120</th>
                                <th scope="col">Starter Menu</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="CHICKEN RESHMI KAWAB(8PCs)" data-food_price="120" data-food_category_id="3" data-food_description="Chicken Reshmi Kabab" data-food_image="202001071709_chicken-reshmi-kebab1.jpg" data-id="14" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="14" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">15</th>
                                <th scope="col">CHICKEN MALAI KAWAB(8Pcs)</th>
                                <th scope="col">220</th>
                                <th scope="col">Starter Menu</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="CHICKEN MALAI KAWAB(8Pcs)" data-food_price="220" data-food_category_id="3" data-food_description="Chicken Malai" data-food_image="202001071705_Chicken Malai Kebab.jpg" data-id="15" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="15" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">16</th>
                                <th scope="col">GANDHARAJ CHICKEN TIKKA(8Pcs)</th>
                                <th scope="col">210</th>
                                <th scope="col">Starter Menu</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="GANDHARAJ CHICKEN TIKKA(8Pcs)" data-food_price="210" data-food_category_id="3" data-food_description="GANDHARAJ CHICKEN TIKKA" data-food_image="202001071734_Gondhoraj-Chicken-by-tanya-munshi.jpg" data-id="16" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="16" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">17</th>
                                <th scope="col">TANDOORI CHICKEN(FULL)</th>
                                <th scope="col">320</th>
                                <th scope="col">Starter Menu</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="TANDOORI CHICKEN(FULL)" data-food_price="320" data-food_category_id="3" data-food_description="Tandoori Chicken(Full)" data-food_image="202001071740_chicken-tandori-1526595014.jpg" data-id="17" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="17" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">18</th>
                                <th scope="col">TANDOORI CHICKEN(HALF)</th>
                                <th scope="col">170</th>
                                <th scope="col">Starter Menu</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="TANDOORI CHICKEN(HALF)" data-food_price="170" data-food_category_id="3" data-food_description="TANDOORI CHICKEN(HALF)" data-food_image="202001071745_chicken-tandori-1526595014.jpg" data-id="18" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="18" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">19</th>
                                <th scope="col">FISH TIKKA(6Pcs)</th>
                                <th scope="col">260</th>
                                <th scope="col">Starter Menu</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="FISH TIKKA(6Pcs)" data-food_price="260" data-food_category_id="3" data-food_description="FISH TIKKA(6Pcs)" data-food_image="202001071708_fish_tikka.jpg" data-id="19" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="19" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">20</th>
                                <th scope="col">BONLESS CHILLY CHICKEN DRY(8PCs)</th>
                                <th scope="col">200</th>
                                <th scope="col">Starter Menu</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="BONLESS CHILLY CHICKEN DRY(8PCs)" data-food_price="200" data-food_category_id="3" data-food_description="BONLESS CHILLY CHICKEN DRY(8PCs)" data-food_image="202001071727_chilli-chicken-boneless.jpg" data-id="20" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="20" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">21</th>
                                <th scope="col">PANEER TIKKA(8PCS)</th>
                                <th scope="col">180</th>
                                <th scope="col">Starter Menu</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="PANEER TIKKA(8PCS)" data-food_price="180" data-food_category_id="3" data-food_description="PANEER TIKKA(8PCS)" data-food_image="202001071734_paneer-tikka.jpg" data-id="21" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="21" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">22</th>
                                <th scope="col">CHILLY PANEEER DRY (10PIC) Full</th>
                                <th scope="col">180</th>
                                <th scope="col">Starter Menu</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="CHILLY PANEEER DRY (10PIC) Full" data-food_price="180" data-food_category_id="3" data-food_description="CHILLY PANEEER DRY (10PIC) Full" data-food_image="202001071719_chilli_paneer_dry.jpg" data-id="22" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="22" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">23</th>
                                <th scope="col">CHRISPY CHICKEN(FULL)</th>
                                <th scope="col">130</th>
                                <th scope="col">Starter Menu</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="CHRISPY CHICKEN(FULL)" data-food_price="130" data-food_category_id="3" data-food_description="CHRISPY CHICKEN(FULL)" data-food_image="202001071731_crispy_chicken.jpg" data-id="23" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="23" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">24</th>
                                <th scope="col">CHILLLY GARLIC MUSHROOM</th>
                                <th scope="col">180</th>
                                <th scope="col">Starter Menu</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="CHILLLY GARLIC MUSHROOM" data-food_price="180" data-food_category_id="3" data-food_description="CHILLLY GARLIC MUSHROOM" data-food_image="202001071744_chilly_garlic_mushroom.jpg" data-id="24" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="24" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">25</th>
                                <th scope="col">FISH FRY (Bhetki)(2PCs)</th>
                                <th scope="col">220</th>
                                <th scope="col">Starter Menu</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="FISH FRY (Bhetki)(2PCs)" data-food_price="220" data-food_category_id="3" data-food_description="FISH FRY (Bhetki)(2PCs)" data-food_image="202001071746_bhetki_fish_fry.jpg" data-id="25" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="25" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">26</th>
                                <th scope="col">PLAIN RICE</th>
                                <th scope="col">50</th>
                                <th scope="col">Indian Rice</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="PLAIN RICE" data-food_price="50" data-food_category_id="4" data-food_description="PLAIN RICE" data-food_image="202001071730_plain_rice.png" data-id="26" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="26" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">27</th>
                                <th scope="col">JEERA RICE</th>
                                <th scope="col">70</th>
                                <th scope="col">Indian Rice</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="JEERA RICE" data-food_price="70" data-food_category_id="4" data-food_description="JEERA RICE" data-food_image="202001071759_jeera_rice.jpg" data-id="27" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="27" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">28</th>
                                <th scope="col">PEAS PULAO</th>
                                <th scope="col">90</th>
                                <th scope="col">Indian Rice</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="PEAS PULAO" data-food_price="90" data-food_category_id="4" data-food_description="PEAS PULAO" data-food_image="202001071746_peas_pulao.jpg" data-id="28" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="28" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">29</th>
                                <th scope="col">VEG PULAO</th>
                                <th scope="col">90</th>
                                <th scope="col">Indian Rice</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="VEG PULAO" data-food_price="90" data-food_category_id="4" data-food_description="VEG PULAO" data-food_image="202001071708_veg_pulao.png" data-id="29" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="29" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">30</th>
                                <th scope="col">LEMON RICE</th>
                                <th scope="col">80</th>
                                <th scope="col">Indian Rice</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="LEMON RICE" data-food_price="80" data-food_category_id="4" data-food_description="LEMON RICE" data-food_image="202001071737_lemon_rice.jpg" data-id="30" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="30" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">31</th>
                                <th scope="col">CURD RICE</th>
                                <th scope="col">70</th>
                                <th scope="col">Indian Rice</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="CURD RICE" data-food_price="70" data-food_category_id="4" data-food_description="CURD RICE" data-food_image="202001071745_curd_rice.jpg" data-id="31" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="31" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">32</th>
                                <th scope="col">VEG BIRIYANI</th>
                                <th scope="col">110</th>
                                <th scope="col">Indian Rice</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="VEG BIRIYANI" data-food_price="110" data-food_category_id="4" data-food_description="VEG BIRIYANI" data-food_image="202001071739_vegetable.biryani.jpg" data-id="32" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="32" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">33</th>
                                <th scope="col">CHICKEN BIRIYANI(Full)</th>
                                <th scope="col">140</th>
                                <th scope="col">Indian Rice</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="CHICKEN BIRIYANI(Full)" data-food_price="140" data-food_category_id="4" data-food_description="CHICKEN BIRIYANI" data-food_image="202001071701_chicken_biriyani.jpg" data-id="33" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="33" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">34</th>
                                <th scope="col">CHICKEN BIRIYANI(Half)</th>
                                <th scope="col">80</th>
                                <th scope="col">Indian Rice</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="CHICKEN BIRIYANI(Half)" data-food_price="80" data-food_category_id="4" data-food_description="CHICKEN BIRIYANI(Half)" data-food_image="202001071754_chicken_biriyani.jpg" data-id="34" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="34" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">35</th>
                                <th scope="col">TANDOORI ROTI</th>
                                <th scope="col">10</th>
                                <th scope="col">Roti Nan</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="TANDOORI ROTI" data-food_price="10" data-food_category_id="5" data-food_description="TANDOORI ROTI" data-food_image="202001071703_tandoori_roti.jpg" data-id="35" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="35" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">36</th>
                                <th scope="col">TANDOORI  BUTTER ROTI</th>
                                <th scope="col">15</th>
                                <th scope="col">Roti Nan</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="TANDOORI  BUTTER ROTI" data-food_price="15" data-food_category_id="5" data-food_description="TANDOORI  BUTTER ROTI" data-food_image="202001071709_tandoori-butter-roti.jpg" data-id="36" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="36" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">37</th>
                                <th scope="col">LACHHA PARATHA</th>
                                <th scope="col">25</th>
                                <th scope="col">Roti Nan</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="LACHHA PARATHA" data-food_price="25" data-food_category_id="5" data-food_description="LACHHA PARATHA" data-food_image="202001071711_lachha-paratha-.jpg" data-id="37" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="37" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">38</th>
                                <th scope="col">PLAIN NAN</th>
                                <th scope="col">25</th>
                                <th scope="col">Roti Nan</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="PLAIN NAN" data-food_price="25" data-food_category_id="5" data-food_description="PLAIN NAN" data-food_image="202001071719_plain_naan.jpg" data-id="38" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="38" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">39</th>
                                <th scope="col">BUTTER NAN</th>
                                <th scope="col">30</th>
                                <th scope="col">Roti Nan</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="BUTTER NAN" data-food_price="30" data-food_category_id="5" data-food_description="BUTTER NAN" data-food_image="202001071722_Butter-Naan.png" data-id="39" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="39" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">40</th>
                                <th scope="col">GARLIC NAN</th>
                                <th scope="col">30</th>
                                <th scope="col">Roti Nan</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="GARLIC NAN" data-food_price="30" data-food_category_id="5" data-food_description="GARLIC NAN" data-food_image="202001071726_garlic_naan.jpg" data-id="40" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="40" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">41</th>
                                <th scope="col">MASALA KULCHA</th>
                                <th scope="col">40</th>
                                <th scope="col">Roti Nan</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="MASALA KULCHA" data-food_price="40" data-food_category_id="5" data-food_description="MASALA KULCHA" data-food_image="202001071752_Masala-Kulcha-recipe-how-to-make-masala-kulcha.jpg" data-id="41" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="41" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">42</th>
                                <th scope="col">YELLOW DAL PLAIN</th>
                                <th scope="col">30</th>
                                <th scope="col">Dal</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="YELLOW DAL PLAIN" data-food_price="30" data-food_category_id="6" data-food_description="YELLOW DAL PLAIN" data-food_image="202001071734_yellow_dal_plain.jpg" data-id="42" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="42" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">43</th>
                                <th scope="col">DAL TARKA</th>
                                <th scope="col">40</th>
                                <th scope="col">Dal</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="DAL TARKA" data-food_price="40" data-food_category_id="6" data-food_description="DAL TARKA" data-food_image="202001071728_dal-tadka-recipe-1.jpg" data-id="43" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="43" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">44</th>
                                <th scope="col">DAL TARKA(EGG)</th>
                                <th scope="col">50</th>
                                <th scope="col">Dal</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="DAL TARKA(EGG)" data-food_price="50" data-food_category_id="6" data-food_description="DAL TARKA(EGG)" data-food_image="202001071726_Bengali_Style_Dimer_Torka_Recipe_Egg_Tadka_Dal_Recipe_.jpg" data-id="44" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="44" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">45</th>
                                <th scope="col">CHICKEN TARKA</th>
                                <th scope="col">90</th>
                                <th scope="col">Dal</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="CHICKEN TARKA" data-food_price="90" data-food_category_id="6" data-food_description="CHICKEN TARKA" data-food_image="202001071749_Chicken-Tadka.jpg" data-id="45" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="45" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">46</th>
                                <th scope="col">DAL MAKHANI</th>
                                <th scope="col">70</th>
                                <th scope="col">Dal</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="DAL MAKHANI" data-food_price="70" data-food_category_id="6" data-food_description="DAL MAKHANI" data-food_image="202001071753_dal_makhni.png" data-id="46" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="46" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">47</th>
                                <th scope="col">DAL MAKHANI(EGG)</th>
                                <th scope="col">80</th>
                                <th scope="col">Dal</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="DAL MAKHANI(EGG)" data-food_price="80" data-food_category_id="6" data-food_description="DAL MAKHANI(EGG)" data-food_image="202001071747_Eggs-Makhani.jpg" data-id="47" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="47" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">48</th>
                                <th scope="col">DAL MAKHANI(EGG+CHICKEN)</th>
                                <th scope="col">120</th>
                                <th scope="col">Dal</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="DAL MAKHANI(EGG+CHICKEN)" data-food_price="120" data-food_category_id="6" data-food_description="DAL MAKHANI(EGG+CHICKEN)" data-food_image="202001071727_chicken_dal_makhni.jpg" data-id="48" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="48" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">49</th>
                                <th scope="col">CHANA MASLA</th>
                                <th scope="col">70</th>
                                <th scope="col">Dal</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="CHANA MASLA" data-food_price="70" data-food_category_id="6" data-food_description="CHANA MASLA" data-food_image="202001071717_chana-masala.jpg" data-id="49" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="49" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">50</th>
                                <th scope="col">GREEN SALAD</th>
                                <th scope="col">50</th>
                                <th scope="col">Salad &amp; Raita</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="GREEN SALAD" data-food_price="50" data-food_category_id="7" data-food_description="GREEN SALAD" data-food_image="202001071842_green_salad.jpg" data-id="50" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="50" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">51</th>
                                <th scope="col">ONION SALAD</th>
                                <th scope="col">50</th>
                                <th scope="col">Salad &amp; Raita</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="ONION SALAD" data-food_price="50" data-food_category_id="7" data-food_description="ONION SALAD" data-food_image="202001071830_onion-rings-salad.jpg" data-id="51" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="51" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">52</th>
                                <th scope="col">PLAIN RAITA</th>
                                <th scope="col">50</th>
                                <th scope="col">Salad &amp; Raita</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="PLAIN RAITA" data-food_price="50" data-food_category_id="7" data-food_description="PLAIN RAITA" data-food_image="202001071819_plain_raita.jpg" data-id="52" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="52" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                                            <tr>
                                <th scope="col">53</th>
                                <th scope="col">MIXED RAITA</th>
                                <th scope="col">60</th>
                                <th scope="col">Salad &amp; Raita</th>
                                
                                
                                
                                
                                
                                
                                <th scope="col">
                                    <a href="" class="btn btn-info btn-sm btn-square" data-food_name="MIXED RAITA" data-food_price="60" data-food_category_id="7" data-food_description="MIXED RAITA" data-food_image="202001071822_mixed_veg_raita.jpg" data-id="53" data-toggle="modal" data-target="#foodEdit">Edit</a>

                                    <a href="" class="btn btn-danger btn-sm btn-square" data-id="53" data-toggle="modal" data-target="#foodDelete">Delete</a>
                                </th>

                            </tr>
                                
                            </tbody>
                        </table>
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