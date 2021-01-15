<!doctype html>
<html lang="en">

<head>
    <title>Read News - Naradee Store</title>
    <?php require('header.php'); ?>
    <style>
        .text-black {
            color: #000 !important;
        }

        font-weight-medium {
            font-weight: 500;
        }

        #fontreadmoreN {
            font-size: 16px;
        }

        #text-lage {
            color: #ff8201;
            font-weight: 400;
            font-size: 25px !important;
        }

        .text-gray {
            color: #898989;
        }

        #text-span {
            font-size: 16px;
        }

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
    </style>
</head>

<body>
    <?php require('navbar.php'); ?>
    <div style="background: url(images/bg-per-1.png)" class="page-holder bg-cover">
        <div class="container py-5">
            <h5 class="font-weight-medium mt-5" id="text-lage">เคล็ดลับ 5 ประการ เพื่อให้ใช้ประโยชน์จากยางรถยนต์สูงสุด</h5>
            <small class="text-gray" style="font-weight: 400;font-size: 16px;">โพส :09/06/2020</small>
            <img class="mw-100 my-3" src="images/blog/car-01.jpg">
            <a id="fontreadmoreN">
                <h5 style="font-weight: 600; color: #252525">ระยะทางที่มากขึ้นเพื่อให้คุณประหยัดได้มากขึ้น</h5>
                <span id="text-span" style="color: #252525">ไม่ว่าจะเป็นการเติมน้ำมัน เปลี่ยนถ่ายน้ำมันเครื่อง ไปจนถึงการเปลี่ยนอะไหล่ต่างๆ เราทุกคนใช้จ่ายเงินไปไม่น้อยสำหรับรถคันเก่ง ขอแนะนำ
                    เคล็ดลับ 5 ประการ เพื่อให้ใช้ประโยชน์จากยางรถยนต์สูงสุด</span>
                <br>
                <br>
                <h5 style="font-weight: 600; color: #252525">1. เติมลมยางที่เหมาะสม</h5>
                <span id="text-span" style="color: #252525">แรงดันลมยางส่งผลโดยตรงต่ออายุของยางรถยนต์ การเติมลมยางที่ถูกต้องจะสามารถใช้งานได้อย่างเต็มประสิทธิภาพ การเติมลมที่มากไปหรือ
                    น้อยไป จะส่งผลให้ยางสึกหรอเร็วขึ้น ส่งผลถึงประสิทธิภาพในการควบคุมรถรวมทั้งสิ้นเปลืองน้ำมัน บริษัทผู้ผลิตรถยนต์แนะนำปริมาณลมยางที่
                    เหมาะสมโดยสามารถดูได้ที่ขอบประตูฝั่งคนขับหรือคู่มือประจำรถยนต์ อย่าลืมตรวจสอบความดันลมยาง ในขณะที่ยางมีอุณหภูมิเย็น ซึ่งหมาย
                    ความว่ารถยนต์ต้องจอดแล้วอย่างน้อย 3 ชั่วโมง</span>
                <br>
                <br>
                <h5 style="font-weight: 600; color: #252525">2. ตั้งศูนย์ถ่วงล้อได้ระนาบที่ถูกต้อง</h5>
                <span id="text-span" style="color: #252525">ถ้ารถของคุณมีศูนย์ถ่วงล้อที่ผิดเพี้ยนไป จะทำให้ยางสึกหรอไม่เท่ากัน ทำให้ต้องเปลี่ยนยางเร็วขึ้น ยิ่งกว่านั้นรถยนต์ที่มีศูนย์ถ่วงล้อที่ผิดเพี้ยน
                    ยังบ่งบอกถึงปัญหาด้านอื่นๆ ซึ่งกระทบต่อประสิทธิภาพของยางโดยตรง</span>
                <br>
                <br>
                <h5 style="font-weight: 600; color: #252525">3. สลับตำแหน่งยางสม่ำเสมอ</h5>
                <span id="text-span" style="color: #252525">แรงกดต่อยางแต่ละเส้นนั้นไม่เหมือนกันขึ้นอยู่กับตำแหน่งของรถ ซึ่งนำไปสู่การสึกหรอของยางที่ไม่เท่ากัน การสลับยางอย่างสม่ำเสมอ (แนะนำ
                    โดยบริษัทผลิตรถยนต์ที่ทุกๆ 8,000 ถึง 10,000 กิโลเมตร) นำไปสู่การสึกหรอแบบสม่ำเสมอ ซึ่งช่วยให้ยางสามารถทำงานได้อย่างมีประสิทธิ
                    ภาพสูงสุด</span>
                <br>
                <br>
                <h5 style="font-weight: 600; color: #252525">4. ตรวจสอบความสมดุล </h5>
                <span id="text-span" style="color: #252525">ยางและวงล้อที่ไร้สมดุลนำไปสู่อาการสั่นและการสึกหรอไม่เท่ากัน ซึ่งส่งผลให้การเดินทางของคุณขาดความนุ่มนวล และนำไปสู่การเปลี่ยนยางใหม่
                    เร็วขึ้น</span>
                <br>
                <br>
                <h5 style="font-weight: 600; color: #252525">5. ความต้านทานต่อการหมุนต่ำ </h5>
                <span id="text-span" style="color: #252525">แรงต้านทานต่อการหมุนมีค่าเท่ากับพลังงานที่ต้องใช้ในการทำให้ยางเคลื่อนที่ไปข้างหน้าเป็นเส้นตรงอย่างต่อเนื่อง ดังนั้นแรงต้านทานในการหมุน
                    จึงมีผลกระทบโดยตรงต่ออัตราการประหยัดน้ำมัน ซึ่งการเลือกยางที่มีแรงต้านทานในการหมุนที่ต่ำจะสามารถช่วยคุณได้ เลือกยางประหยัดน้ำมัน
                    ในกลุ่มยาง ECOPIA ช่วยลดพลังงานที่สูญเสียไปโดยเพิ่มระยะทางได้ถึง 11 กม. ต่อน้ำมันหนึ่งถัง</span>
                <br>
                <br>
                <span id="text-span" style="color: #252525">*ทดสอบโดยสถาบัน TUV Rheinland (ประเทศมาเลเซีย) ด้วยวิธี Chassis Dynamo Test (UNECE-R38 UNECE-R101)
                    <br>
                    รถยนต์ที่ใช้ โตโยต้า แคมรี่ รุ่น 2.0 G ขนาดยาง 215/60R16
                    <br>
                    แรงดันลมยาง : 230 kpa (เทียบเท่า 33ps)
                    <br>
                    ผลการทดสอบอัตราการสิ้นเปลืองน้ำมัน ในพื้นที่ในเมือง
                    <br>
                    ผลของการทดสอบอาจเปลี่ยนแปลงขึ้นอยู่กับการดูแลยางรถยนต์, สภาพรถ, วิธีการขับขี่ และข้อจำกัดในเงื่อนไขอื่นๆ</span>
            </a>
        </div>
        <div class="container mb-5">
            <a id="text-white" href="blog.php"><button type="button" class="btn btn-black rounded-0" style="padding: 10px 1.75rem!important;color: #fff!important">กลับหน้าข่าวสาร</button></a>
        </div>
        <div class="container-fluid mt-5" style="background-color: #ebebeb">
            <div class="container pt-5 pb-5 pr-0 pl-0">
                <div class="card-deck mb-5 mt-5">
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
        </div>
        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#dismiss, .overlay').on('click', function() {
                    $('#sidebar').removeClass('active');
                    $('.overlay').removeClass('active');
                });

                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').addClass('active');
                    $('.overlay').addClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>

        <?php require('footer.php'); ?>

</body>

</html>