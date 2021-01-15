<!doctype html>
<html lang="en">

<head>
    <title>Blog - SMB Wheel</title>
    <?php require('header.php'); ?>
    <style>
        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: none;
            border-radius: .25rem;
        }

        #cardT .card-title {
            margin-bottom: .5rem;
            font-weight: 600;
            line-height: 1.2;
            color: #ff8021;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            font-size: 0.93rem !important;
            font-weight: 500 !important;
        }

        .btn-black {
            display: inline-block;
            color: #000 !important;
            background-color: #ff8201;
            border: 2px solid transparent !important;
            padding: -0.625rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
        }

        .btn {
            font-weight: 400;
            color: #212529;
            text-align: center;
            border: 1px solid transparent;
            font-size: 1rem;
            line-height: 1;
            border-color: none !important;
            border-radius: none !important;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        .card-body {
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
            padding-top: 1.25rem !important;
            padding-bottom: 1.25rem !important;
            padding-left: 10px !important;
            padding-right: 10px !important;
            border: 1px solid #ebebeb;
            border-bottom-left-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
            box-shadow: 1px 4px 5px #e6e6e6;
        }

        #text-black {
            color: #000 !important;
        }

        @media screen and (max-width: 413px) and (min-width: 375px) {
            .card-body {
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                padding: 2.25rem;
            }
        }
    </style>
</head>

<body>
    <?php require('navbar.php'); ?>
    <div class="banner-page head-about-us">
        <div class="centered headPage-text">หน้าหลัก / BLOG</div>
    </div>
    <div class="container mt-5 my-5">
        <div class="card-deck mb-5">
            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card">
                    <img class="card-img-top img-fluid" src="images/blog/product-01.jpg" alt="Card image cap">
                    <div class="card-body" id="cardT">
                        <h4 class="card-title">เคล็ดลับ 5 ประการ เพื่อให้ใช้ประโยชน์จากยางรถยนต์สูงสุด</h4>
                        <p class="card-text">คุณสามารถเพิ่มค่าของเงินคุณได้อย่างไร เมื่อพูดถึงยางรถยนต์?</p>
                        <a href="blog-detail.php" id="text-black"><button type="button" class="btn btn-black btn-block rounded-0" style="color: #fff;">อ่านเพิ่ม</button></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card">
                    <img class="card-img-top img-fluid" src="images/blog/product-01.jpg" alt="Card image cap">
                    <div class="card-body" id="cardT">
                        <h4 class="card-title">เคล็ดลับ 5 ประการ เพื่อให้ใช้ประโยชน์จากยางรถยนต์สูงสุด</h4>
                        <p class="card-text">คุณสามารถเพิ่มค่าของเงินคุณได้อย่างไร เมื่อพูดถึงยางรถยนต์?</p>
                        <a href="blog-detail.php" id="text-black"><button type="button" class="btn btn-black btn-block rounded-0" style="color: #fff;">อ่านเพิ่ม</button></a>
                    </div>
                </div>
            </div>
            <div class="w-100 d-none d-sm-block d-md-none"></div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card">
                    <img class="card-img-top img-fluid" src="images/blog/product-01.jpg" alt="Card image cap">
                    <div class="card-body" id="cardT">
                        <h4 class="card-title">เคล็ดลับ 5 ประการ เพื่อให้ใช้ประโยชน์จากยางรถยนต์สูงสุด</h4>
                        <p class="card-text">คุณสามารถเพิ่มค่าของเงินคุณได้อย่างไร เมื่อพูดถึงยางรถยนต์?</p>
                        <a href="blog-detail.php" id="text-black"><button type="button" class="btn btn-black btn-block rounded-0" style="color: #fff;">อ่านเพิ่ม</button></a>
                    </div>
                </div>
            </div>
            <div class="w-100 d-none d-sm-block d-md-none"></div>
        </div>
        <div class="card-deck mb-5">
            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card">
                    <img class="card-img-top img-fluid" src="images/blog/product-01.jpg" alt="Card image cap">
                    <div class="card-body" id="cardT">
                        <h4 class="card-title">เคล็ดลับ 5 ประการ เพื่อให้ใช้ประโยชน์จากยางรถยนต์สูงสุด</h4>
                        <p class="card-text">คุณสามารถเพิ่มค่าของเงินคุณได้อย่างไร เมื่อพูดถึงยางรถยนต์?</p>
                        <a href="blog-detail.php" id="text-black"><button type="button" class="btn btn-black btn-block rounded-0" style="color: #fff;">อ่านเพิ่ม</button></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card">
                    <img class="card-img-top img-fluid" src="images/blog/product-01.jpg" alt="Card image cap">
                    <div class="card-body" id="cardT">
                        <h4 class="card-title">เคล็ดลับ 5 ประการ เพื่อให้ใช้ประโยชน์จากยางรถยนต์สูงสุด</h4>
                        <p class="card-text">คุณสามารถเพิ่มค่าของเงินคุณได้อย่างไร เมื่อพูดถึงยางรถยนต์?</p>
                        <a href="blog-detail.php" id="text-black"><button type="button" class="btn btn-black btn-block rounded-0" style="color: #fff;">อ่านเพิ่ม</button></a>
                    </div>
                </div>
            </div>
            <div class="w-100 d-none d-sm-block d-md-none"></div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card">
                    <img class="card-img-top img-fluid" src="images/blog/product-01.jpg" alt="Card image cap">
                    <div class="card-body" id="cardT">
                        <h4 class="card-title">เคล็ดลับ 5 ประการ เพื่อให้ใช้ประโยชน์จากยางรถยนต์สูงสุด</h4>
                        <p class="card-text">คุณสามารถเพิ่มค่าของเงินคุณได้อย่างไร เมื่อพูดถึงยางรถยนต์?</p>
                        <a href="blog-detail.php" id="text-black"><button type="button" class="btn btn-black btn-block rounded-0" style="color: #fff;">อ่านเพิ่ม</button></a>
                    </div>
                </div>
            </div>
            <div class="w-100 d-none d-sm-block d-md-none"></div>
        </div>
    </div>
    <div class="container mt-5 my-5">
        <div class="row">
            <div class="col-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item page-np"><a href="#" style="color: black;">Prev</a></li>
                        <li class="page-item page-np active"><a href="#" style="color: #ff8200;">1</a></li>
                        <li class="page-item page-np"><a href="#" style="color: black;">2</a></li>
                        <li class="page-item page-np"><a href="#" style="color: #ff8200;">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>


    <?php require('footer.php'); ?>
</body>

</html>