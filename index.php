<!DOCTYPE html>
<html lang="en">

<head>

    <title>Home Page</title>
    
    <!-- For CSS -->
    <?php include "./assets/partials/css.php" ; ?>

</head>

<body>
   
    <!-- For NavBar -->
    <?php include "./assets/partials/navbar.php" ; ?>

    <!-- For Slide Show -->
    <div class="carousel slide" data-bs-ride="carousel" id="carousel-1">
        <div class="carousel-inner" style="border-radius: 1rem;">
            <div class="carousel-item active">
                <img class="w-100 d-block" src="assets/img/lord-shiva.jpg" alt="Slide Image">
            </div>
            <div class="carousel-item">
                <img class="w-100 d-block" src="assets/img/lord-shiva.jpg" alt="Slide Image">
            </div>
            <div class="carousel-item">
                <img class="w-100 d-block" src="assets/img/lord-shiva.jpg" alt="Slide Image">
            </div>
        </div>

        <div>
            <a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span>
            </a>
        </div>

        <ol class="carousel-indicators">
            <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
            <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
        </ol>
    </div>

    <!-- For New Updates Section -->
    <div>
        <marquee behavior="alternate" bgcolor="#e20b0b" direction="right" style="color: #ffffff; font-size: 20px; font-weight: bolder; line-height: 150%; text-shadow: #000000 0px 1px 1px;" onmousedown="this.stop()" onmouseup="this.start()">New Updates will be shown here
        </marquee>
    </div>

    <div class="container"> </div>

    <!-- For Body Section -->
    <div class="container">

        <!-- For Upcoming Events and New Updates Section -->
        <div class="row">

            <!-- For Upcoming Events -->
            <div class="col-md-6" style="padding: 20px;">
                <div style="padding: 1em;border-radius: 1rem;background: linear-gradient(rgba(252,56,56,0.3), rgba(252,89,53,0.46799999999999997) 21%, #fbc02d);">
                    <h4 style="color: var(--bs-red);font-weight: bold;">Upcoming Events</h4>
                    <hr style="height: 3px;color: var(--bs-red);width:70%;">
                    <ul class="list-group">
                        <li class="list-group-item d-inline-flex" style="background: rgba(255,255,255,0.5);margin: 4px;padding: 4px;border-radius: 1rem;border-style: none;">
                            <div class="d-flex flex-column justify-content-center" style="width: 20%;border-right: 2px solid var(--bs-dark);padding: 0.2rem 0.5rem;">
                                <p style="margin: 0px;text-align: center;font-weight: bold;"> 18 </p>
                                <p style="margin: 0px;text-align: center;font-weight: bold;"> July </p>
                            </div>
                            <div class="flex-grow-1" style="width: auto;padding: 0rem 0.5rem;">
                                <h5>Holi Milan Samaroh</h5>
                                <a href="#"> View Details </a>
                            </div>
                        </li>
                        <li class="list-group-item d-inline-flex" style="background: rgba(255,255,255,0.5);margin: 4px;padding: 4px;border-radius: 1rem;">
                            <div class="d-flex flex-column justify-content-center" style="width: 20%;border-right: 2px solid var(--bs-dark);padding: 0.2rem 0.5rem;">
                                <p style="margin: 0px;text-align:center;font-weight: bold;">20</p>
                                <p style="margin: 0px;text-align:center;font-weight: bold;">July</p>
                            </div>
                            <div class="flex-grow-1" style="width:auto;padding: 0rem 0.5rem;">
                                <h5>Sapath Grahan Samaroh</h5>
                                <a href="#"> View Details </a>
                            </div>
                        </li>
                        <li class="list-group-item d-inline-flex" style="background: rgba(255,255,255,0.5);margin: 4px;padding: 4px;border-radius: 1rem;">
                            <div class="d-flex flex-column justify-content-center" style="width: 20%;border-right: 2px solid var(--bs-dark);padding: 0.2rem 0.5rem;">
                                <p style="margin: 0px;text-align: center;font-weight: bold;">03</p>
                                <p style="margin: 0px;text-align: center;font-weight: bold;">June</p>
                            </div>
                            <div class="flex-grow-1" style="width: auto;padding: 0rem 0.5rem;">
                                <h5>Holi Milan Samaroh</h5>
                                <a href="#"> View Details </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- For New Updates -->
            <div class="col-md-6" style="padding: 20px;">
                <div style="padding: 1em;border-radius: 1rem;height:100%;background: linear-gradient(rgba(68,154,255,0.52), rgba(119,247,74,0.51));">
                    <h4 style="color: var(--bs-purple);font-weight: bold;">News Updates</h4>
                    <hr style="height: 3px;color: var(--bs-red);width:70%;background: var(--bs-purple);">
                    <ul class="list-group">
                        <li class="list-group-item" style="background:rgba(255,255,255,0.5);margin: 4px;border-radius: 1rem;">
                            <span class="fs-6 fw-normal">List Group Item 1</span>
                        </li>
                        <li class="list-group-item" style="background:rgba(255,255,255,0.5);margin: 4px;border-radius: 1rem;">
                            <span class="fs-6 fw-normal">List Group Item 1</span>
                        </li>
                        <li class="list-group-item" style="background:rgba(255,255,255,0.5);margin: 4px;border-radius:
                        1rem;">
                            <span class="fs-6 fw-normal">List Group Item 1</span>
                        </li>
                        <li class="list-group-item" style="background:rgba(255,255,255,0.5);margin: 4px;border-radius:
                        1rem;">
                            <span class="fs-6 fw-normal">List Group Item 1</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- For Sansthan Section -->
        <div class="row">
            <div class="col">
                <h6 class="display-3 text-uppercase" style="padding:10px;padding-right: 10px;padding-bottom: 10px;font-size:2.5em; margin: 8px;border-bottom: 4px solid var(--bs-gray-900) ;">
                <strong> संस्थाएँ </strong> </h6>
            </div>
        </div>

        <!-- For Category Card -->
        <div class="row">

            <!-- Card - 1 -->
            <div class="col-md-4 d-flex justify-content-center" style="padding: 20px 10px;">
                <div class="card" style="width: 18rem;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;box-shadow: 5px 5px 16px 4px rgba(0,0,0,0.2);min-width: 280px;max-width: 300px;border-style: none;">
                    <div style="width: 100%;height: 200px;background: url(&quot;assets/img/maheshwari_bhavan_chennai_resize.jpg&quot;) center / cover;border-top-left-radius: 20px;border-top-right-radius: 20px;"></div>
                        <div class="card-body d-flex flex-column" style="height:max-content;">
                            <div>
                                <h4 style="font-family: 'Source Sans Pro',sans-serif;font-weight: 700;color: var(--bs-danger);">माहेश्वरी भवन&nbsp;</h4>
                                <h6 class="text-muted mb-2" style="font-family:'Source Sans Pro', sans-serif;color: #757575;font-weight: 600;">सभी सुविधायो से संपन्न ठहरने&nbsp; हेतु व अन्य कार्यकर्मों हेतु&nbsp; समाज बंधुयों के लिए भवन उपलब्ध है&nbsp;</h6>
                            </div>
                            <a class="card-link align-self-end" data-bss-hover-animate="pulse" href="#" style="padding: 4px;background: #b86868;color:rgb(255,255,255);border-radius: 17px;padding-right: 14px;padding-left: 14px;padding-bottom: 6px;font-family: 'Source Sans Pro', sans-serif;margin-top:auto;box-shadow: 2px 2px 16px 1px rgba(117,117,117,0.8);">Explore</a>
                        </div>
                    </div>
            </div>

            <!-- Card - 2 -->
            <div class="col-md-4 d-flex justify-content-center" style="padding: 20px 10px;">
                <div class="card" style="width: 18rem;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;box-shadow: 5px 5px 16px 4px rgba(0,0,0,0.2);min-width: 280px;max-width: 300px;border-style: none;">
                    <div style="width: 100%;height: 200px;background: url(&quot;assets/img/maheshwari_bhavan_chennai_resize.jpg&quot;)  / cover;border-top-left-radius: 20px;border-top-right-radius: 20px;"></div>
                    <div class="card-body d-flex flex-column" style="height:max-content;">
                        <div>
                            <h4 style="font-family: 'Source Sans Pro', sans-serif;font-weight: 700;color:var(--bs-danger);">विद्यालय</h4>
                            <h6 class="text-muted mb-2" style="font-family: 'Source Sans Pro', sans-serif;color: #757575;font-weight: 600;">सभी सुविधायो से संपन्न ठहरने&nbsp; हेतु व अन्य कार्यकर्मों हेतु&nbsp; समाज बंधुयों के लिए भवन उपलब्ध है&nbsp;</h6>
                        </div>
                        <a class="card-link align-self-end" data-bss-hover-animate="pulse" href="#" style="padding: 4px;background: #b86868;color:rgb(255,255,255);border-radius:17px;padding-right: 14px;padding-left:14px;padding-bottom: 6px;font-family: 'Source Sans Pro', sans-serif;margin-top: auto;box-shadow: 2px 2px 16px 1px rgba(117,117,117,0.8);">Explore</a>
                    </div>
                </div>
            </div>

            <!-- Card - 3 -->
            <div class="col-md-4 d-flex justify-content-center" style="padding: 20px 10px;">
                <div class="card" style="width: auto;border-top-left-radius:20px;border-top-right-radius: 20px;border-bottom-right-radius:20px;border-bottom-left-radius: 20px;box-shadow: 5px 5px 16px 4px rgba(0,0,0,0.2);min-width: 280px;max-width: 300px;border-style: none;">
                    <div style="width: 100%;height: 200px;background: url(&quot;assets/img/maheshwari_bhavan_chennai_resize.jpg&quot;) center / cover;border-top-left-radius: 20px;border-top-right-radius: 20px;"></div>
                    <div class="card-body d-flex flex-column" style="height: max-content;">
                        <div>
                            <h4 style="font-family: 'Source Sans Pro', sans-serif;font-weight: 700;color: var(--bs-danger);">शिवालय</h4>
                            <h6 class="text-muted mb-2" style="font-family:'Source Sans Pro', sans-serif;color: #757575;font-weight: 600;">सभी सुविधायो से संपन्न ठहरने&nbsp; हेतु व अन्य कार्यकर्मों हेतु&nbsp; समाज बंधुयों के लिए भवन उपलब्ध है&nbsp;</h6>
                        </div>
                        <a class="card-link align-self-end" data-bss-hover-animate="pulse" href="#" style="padding: 4px;background: #b86868;color:rgb(255,255,255);border-radius: 17px;padding-right: 14px;padding-left: 14px;padding-bottom: 6px;font-family: 'Source Sans Pro', sans-serif;margin-top: auto;box-shadow: 2px 2px 16px 1px rgba(117,117,117,0.8);">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- For Image -->
    <div class="container">
        <picture><img src="assets/img/ad1.jpg" style="width: 100%;height:auto;max-height: 100vh;" title="advertisement"></picture>
    </div>

    <!-- For Message Section  -->
    <section class="justify-content-xl-start" style="padding: 10px 0px;">
        <div class="container" style="padding: 20px 10px;">
            <div class="photo-card" style="margin: 0px 20px;width: auto;max-width: 100%;background: rgba(0,0,0,0);">
                <div class="photo-background" style="background-image: url(assets/img/pres_img.jpeg);min-width: 250px;max-width: 400px;width: auto;margin: 0px auto;">
                </div>
                <div class="photo-details" style="padding: 20px;width:100%;">
                    <h1 style="color: var(--bs-body-color);font-weight: bold;font-family: 'Source Sans Pro',sans-serif;padding: 5px;border-bottom-style: solid;border-bottom-color: var(--bs-gray-700);">अध्यक्ष का संदेश&nbsp;
                    </h1>
                    <p style="color: var(--bs-body-color);text-align: justify;padding: 1rem;width: auto;margin: 0px;">
                        <strong>जय महेश |</strong> &nbsp;
                        <strong>सभी समाज बंधुओं को हार्दिक शुभकामनाएं |</strong> 
                        सभी समाज बंधुओं से अपेक्षा है कि अपने परिवार में हर खुशी , जैसे - परिवार में संतान प्राप्ति के अवसर पर , जन्मदिन, उच्च शिक्षा की सफलता , उत्तम नियुक्ति की खुशी , विवाह-शादी , धार्मिक समारोह , तीर्थयात्रा , मकर-सक्रांति जैसे पुण्यदानदिवस , नूतन गृहप्रवेश , सालगिरह आदि यादगार अवसर , एवं व्यापार, प्रोफेशन में मिली सफलता , अपने पुरखों की पुण्य स्मृति जैसे हर अवसर पर कुछ राशि इस ट्रस्ट को समर्पित करें। इस राशि का उपयोग समाज के परिवारों पर असमय आयी आपदा-विपदा पर उन्हें सहयोग करने में किया जायेगा। ऐसे सहयोग से आपके प्रसंग अविस्मरणीय बनेंगे ।<br>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- For Footer -->
    <?php include "./assets/partials/footer.php" ; ?>

    <!-- For JavaScript -->
    <?php include "./assets/partials/js.php" ; ?>

</body>

</html>