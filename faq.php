<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="stylesheet" href="./assets/css/faq.css" />
    <link rel="stylesheet" href="./assets/css/common/common.css">
    <link rel="stylesheet" href="./assets/css/common/support-and-services-common.css">
    <link rel="stylesheet" href="./assets/css/common/quotes.css" />
    <script src="./assets/js/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            var speed = "500";
            $('.faq-qust').click(function() {
                $(this).next().slideToggle(speed).siblings('.faq-content').slideUp();
                var img = $(this).find('svg');
                $('svg').not(img).removeClass('rotat faq-btn');
                img.toggleClass('rotat faq-btn');
            });
        });
    </script>
</head>

<body>
    <?php
    include_once "./header.php"
    ?>
    <main>
        <section class="main-srvc-n-suprt-itms-wrapr">
            <ul class="main-srvc-n-suprt-nav-items">
                <li class="srvc-n-suprt-nav-list"><a class="srvc-n-suprt-nav" href="contact-us.php">Contact Information</a></li>
                <li class="srvc-n-suprt-nav-list"><a class="srvc-n-suprt-nav srvc-n-suprt-actv-lnk" href="faq.php">Frequently Asked Questions</a></li>
                <li class="srvc-n-suprt-nav-list"><a class="srvc-n-suprt-nav" href="./terms-and-condition.php">Terms and Conditions</a></li>
                <li class="srvc-n-suprt-nav-list"><a class="srvc-n-suprt-nav" href="privacy-policy.php">Privacy Policy</a></li>

            </ul>
            <div class="main-srvc-n-suprt-contnt-items">
                <div class="main-srvc-n-suprt-contnt-wrapr">
                    <div class="main-titl-wrapr">
                        <h1 class="faq-main-titl">FAQ</h1>
                    </div>
                    <div class="faq-wrpr">
                        <div class="faq-qust">
                            <h2 class="sub-titl">Orders</h2>
                            <span class="arow-wrpr"><svg version="1.1" class="clk-arow" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="404.308px" height="404.309px" viewBox="0 0 404.308 404.309" fill="#38251d" style="enable-background:new 0 0 404.308 404.309;" xml:space="preserve">
                                    <g>
                                        <path d="M0,101.08h404.308L202.151,303.229L0,101.08z" />
                                    </g>
                                </svg>
                            </span>
                        </div>
                        <div class="faq-content">
                            <div class="faq-main-content-wrpr">
                                <h3 class="contnt-sub-titl">Can I order by phone?</h3>
                                <p class="faq-sub-content">
                                    Simply call our Customer Service Team on +44 (0) 20 7730 6091 who will gladly provide you with product advice and
                                    process your order.
                                </p>
                                <h3 class="contnt-sub-titl">Customer service opening hours</h3>
                                <p class="faq-sub-content">
                                    Simply call our Customer Service Team on +44 (0) 20 7730 6091 who will gladly provide you with product advice and
                                    process your order.
                                </p>
                                <h3 class="contnt-sub-titl">Will my item come gift wrapped?</h3>
                                <p class="faq-sub-content">
                                    Simply call our Customer Service Team on +44 (0) 20 7730 6091 who will gladly provide you with product advice and
                                    process your order.
                                </p>
                            </div>
                        </div>
                        <div class="faq-qust">
                            <h2 class="sub-titl">Payments</h2>
                            <span class="arow-wrpr"><svg version="1.1" class="clk-arow" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="404.308px" height="404.309px" viewBox="0 0 404.308 404.309" fill="#38251d" style="enable-background:new 0 0 404.308 404.309;" xml:space="preserve">
                                    <g>
                                        <path d="M0,101.08h404.308L202.151,303.229L0,101.08z" />
                                    </g>
                                </svg>
                            </span>
                        </div>
                        <div class="faq-content">
                            <div class="faq-main-content-wrpr">
                                <h3 class="contnt-sub-titl">Can I order by phone?</h3>
                                <p class="faq-sub-content">
                                    Simply call our Customer Service Team on +44 (0) 20 7730 6091 who will gladly provide you with product advice and
                                    process your order.
                                </p>
                                <h3 class="contnt-sub-titl">Customer service opening hours</h3>
                                <p class="faq-sub-content">
                                    Simply call our Customer Service Team on +44 (0) 20 7730 6091 who will gladly provide you with product advice and
                                    process your order.
                                </p>
                                <h3 class="contnt-sub-titl">Will my item come gift wrapped?</h3>
                                <p class="faq-sub-content">
                                    Simply call our Customer Service Team on +44 (0) 20 7730 6091 who will gladly provide you with product advice and
                                    process your order.
                                </p>
                            </div>
                        </div>

                        <div class="faq-qust">
                            <h2 class="sub-titl">Fruits & Care</h2>
                            <span class="arow-wrpr"><svg version="1.1" class="clk-arow" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="404.308px" height="404.309px" viewBox="0 0 404.308 404.309" fill="#38251d" style="enable-background:new 0 0 404.308 404.309;" xml:space="preserve">
                                    <g>
                                        <path d="M0,101.08h404.308L202.151,303.229L0,101.08z" />
                                    </g>
                                </svg>
                            </span>
                        </div>
                        <div class="faq-content">
                            <div class="faq-main-content-wrpr">
                                <h3 class="contnt-sub-titl">Can I order by phone?</h3>
                                <p class="faq-sub-content">
                                    Simply call our Customer Service Team on +44 (0) 20 7730 6091 who will gladly provide you with product advice and
                                    process your order.
                                </p>
                                <h3 class="contnt-sub-titl">Customer service opening hours</h3>
                                <p class="faq-sub-content">
                                    Simply call our Customer Service Team on +44 (0) 20 7730 6091 who will gladly provide you with product advice and
                                    process your order.
                                </p>
                                <h3 class="contnt-sub-titl">Will my item come gift wrapped?</h3>
                                <p class="faq-sub-content">
                                    Simply call our Customer Service Team on +44 (0) 20 7730 6091 who will gladly provide you with product advice and
                                    process your order.
                                </p>
                            </div>
                        </div>
                        <div class="faq-qust">
                            <h2 class="sub-titl">Press Enquiries</h2>
                            <span class="arow-wrpr"><svg version="1.1" class="clk-arow" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="404.308px" height="404.309px" viewBox="0 0 404.308 404.309" fill="#38251d" style="enable-background:new 0 0 404.308 404.309;" xml:space="preserve">
                                    <g>
                                        <path d="M0,101.08h404.308L202.151,303.229L0,101.08z" />
                                    </g>
                                </svg>
                            </span>
                        </div>
                        <div class="faq-content">
                            <div class="faq-main-content-wrpr">
                                <h3 class="contnt-sub-titl">Can I order by phone?</h3>
                                <p class="faq-sub-content">
                                    Simply call our Customer Service Team on +44 (0) 20 7730 6091 who will gladly provide you with product advice and
                                    process your order.
                                </p>
                                <h3 class="contnt-sub-titl">Customer service opening hours</h3>
                                <p class="faq-sub-content">
                                    Simply call our Customer Service Team on +44 (0) 20 7730 6091 who will gladly provide you with product advice and
                                    process your order.
                                </p>
                                <h3 class="contnt-sub-titl">Will my item come gift wrapped?</h3>
                                <p class="faq-sub-content">
                                    Simply call our Customer Service Team on +44 (0) 20 7730 6091 who will gladly provide you with product advice and
                                    process your order.
                                </p>
                            </div>
                        </div>
                        <div class="faq-qust">
                            <h2 class="sub-titl">Bulk purchase</h2>
                            <span class="arow-wrpr"><svg version="1.1" class="clk-arow" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="404.308px" height="404.309px" viewBox="0 0 404.308 404.309" fill="#38251d" style="enable-background:new 0 0 404.308 404.309;" xml:space="preserve">
                                    <g>
                                        <path d="M0,101.08h404.308L202.151,303.229L0,101.08z" />
                                    </g>
                                </svg>
                            </span>
                        </div>
                        <div class="faq-content">
                            <div class="faq-main-content-wrpr">
                                <h3 class="contnt-sub-titl">Can I order by phone?</h3>
                                <p class="faq-sub-content">
                                    Simply call our Customer Service Team on +44 (0) 20 7730 6091 who will gladly provide you with product advice and
                                    process your order.
                                </p>
                                <h3 class="contnt-sub-titl">Customer service opening hours</h3>
                                <p class="faq-sub-content">
                                    Simply call our Customer Service Team on +44 (0) 20 7730 6091 who will gladly provide you with product advice and
                                    process your order.
                                </p>
                                <h3 class="contnt-sub-titl">Will my item come gift wrapped?</h3>
                                <p class="faq-sub-content">
                                    Simply call our Customer Service Team on +44 (0) 20 7730 6091 who will gladly provide you with product advice and
                                    process your order.
                                </p>
                            </div>
                        </div>
                        <div class="faq-qust"></div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        include_once "./quotes.php"
        ?>
    </main>
    <?php
    include_once "./footer.php"
    ?>
</body>

</html>