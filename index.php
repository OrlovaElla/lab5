<?php

$xml = simplexml_load_file("data.xml") or die("Error: Cannot create object");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css"> <!--type="text/css"-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header class="head__container">
        <img src="image_2022-10-06_13-17-29.png" class="main_pic">
        <div class="head__half">
        <ul class="items">                
            <button class="ul_els"><img src="cart.png" class="icon"></button> <!-- not sure if it should a button tho -->
            <button class="ul_els"><img src="cart2.png" class="icon"></button>
            <button class="ul_els" id="signup">Sign up</button> <!--these two are links -->
            <button class="ul_els" id="signin">Sign in</button>
        </ul>   
        <div id="firstwords">
            <h1 id="titlename">Kembang Flower Mantap</h1>
            <p id="titledisc">Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's 
            standard dummy text ever since the 1500s, 
            </p>
        </div>            
        </div>        
    </header>

    <main>

        <section class="head container">
         <!--the heck is that? -->
        </section>

        <section class="sections container">            
            <div class="new__body">
                <div class="new__item">
                    <div class="new__itemhead">
                        <div class="new__img"> <img src="icon1.png" id="icon1" class="new__img"> </div>
                        <div class="new__name">
                            Fast Dilivery
                        </div>                    
                    </div>                    
                    <div class="new__descr">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                    </div>
                </div>
                <div class="new__item">
                    <div class="new__itemhead">
                        <div class="new__img"> <img src="icon2.png" id="icon2" class="new__img"></div>
                        <div class="new__name">
                            Great Customer Service
                        </div>
                    </div>    
                    <div class="new__descr">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                    </div>               
                </div>
                <div class="new__item">
                    <div class="new__itemhead">                    
                        <div class="new__img"> <img src="icon3.png" id="icon3" class="new__img"></div>
                        <div class="new__name">
                            Original Plants
                        </div>
                    </div>
                    <div class="new__descr">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                    </div>
                </div>
                <div class="new__item">
                    <div class="new__itemhead">
                        <div class="new__img"> <img src="icon4.png" id="icon4" class="new__img"></div>
                        <div class="new__name">
                            Affordable Price
                        </div>
                    </div>                     
                    <div class="new__descr">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                    </div>
                </div>
                
            </div>
        </section>
        
        <section class="plants container">
            <div class="new__title">            
                <h1 id="newcome">Featured Plants</h1>
            </div>
            <div class="new__body">
                <?php
                    foreach ($xml->item as $item) {
                ?>
                <div class="new__item2">
                    <div class="new__img2">
                        <img src="<?= $item->img ?>" class="plant_icon">
                    </div>
                    <div class="new__descr2">
                        <div class="new_name2"><?= $item->name ?></div>
                        <div class="new__price"><?= $item->price ?></div>
                    </div>
                </div>
               <?php } ?>
            </div>
        </section>
        <section class="relax">
            <div class="relax-article">
                <div class="relax-title">
                    Buy more plants, it helps you to be relaxed 
                </div>
                <div class="relax-descr">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi gravida gravida aliquam. Pellentesque et lobortis nisl. Sed et mauris justo. Nulla eu enim non mauris maximus dignissim. Maecenas vitae eros sapien. Quisque pellentesque tempus dignissim.
                </div>
            <img class="relax-img1" src="relax1.png">            
            </div>            
                <img class="relax-img2" src="relax2.png">
        </section>
        <section class="buy">
            <div class="buy-div">
                <div class="buy-additional">
                    <div class="buy-title">
                        Get your favourites plant on our shop now
                    </div>
                    <button class="buy-button">Visit shop</button>                    
                </div>
                <img class="buy-img" src="buy.png">
            </div>
        </section>
    </main>
    <footer>
        <div class="foot1">
            <div class="foot1-title">PLANTKU</div>
            <div class="foot234-title">Plantku House</div>
            <div class="foot1-desc">Jl. Laksda Adisucipto No.51, Demangan, Kec. Depok, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55282</div>
        </div>
        <div class="foot2">
            <div class="foot234-title">Perusahaan</div>
            <div class="foot-text">Tentang Kami</div>
            <div class="foot-text">Hubungi Kami</div>
        </div>
        <div class="foot3">
            <div class="foot234-title">Produk</div>
            <div class="foot-text">Tanaman</div>
            <div class="foot-text">Tanaman Lain</div>
        </div>
        <div class="foot4">
            <div class="foot234-title">Berlangganan Email Kami</div>
            <div class="Masukan">
                <input id="Masukan" type="email" placeholder="Masukan Alamat Email">            
                <button class="foot-button">Submit</button>
            </div>
        </div>
    </footer>
</body>
</html>