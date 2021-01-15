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
        </style>
</head>

<body>
        <?php require('navbar.php'); ?>
        <div style="background: url(images/bg-per-1.png)" class="page-holder bg-cover">
                <div class="container py-5">
                        <a href="news.php" class="text-black"><u>กลับ</u></a>
                        <h5 class="font-weight-medium mt-5">EVENT ประจำเดือนกุมภาพันธ์ 2561</h5>
                        <small class="text-muted" style="font-weight: 400;font-size: 16px;">12/12/2019</small>
                        <img class="mw-100 my-3" src="images/rmn.jpg">
                        <a id="fontreadmoreN">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It
                                has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                <br>
                                <br>
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
                                looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "
                                de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC.
                                <br>
                                <br>
                                This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                        </a>
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