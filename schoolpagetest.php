<!DOCTYPE html>
<html lang="en">

<head>

    <title> School </title>

    <!-- For CSS -->
    <?php include "./assets/partials/css.php"; ?>

</head>

<body>

    <!-- For NavBar -->
    <?php include "./assets/partials/navbar.php"; ?>

    <!-- For Slide Show Section -->
    <section class="py-4 py-xl-5" style="background: url(&quot;assets/img/bg-pattern.jpg&quot;);height: 60vh;">
        <div class="container h-100" style="background: rgba(255,255,255,0.6);">
            <div class="row h-100">
                <div class="col-md-10 col-xl-8 text-center d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
                    <div style="margin: 0px auto;">
                        <h2 class="text-uppercase fw-bold mb-3"><em>श्री गौरीशंकर शारडा जूनीयर हाई स्कूल</em><br></h2>
                        <p class="mb-4">नदरई गेट , कासगंज&nbsp;</p><button class="btn btn-outline-primary fs-5 py-2 px-4" type="button" style="border-radius: 2em;">Contact Us</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- For Feature Section -->
    <div class="row gx-0 gy-0 justify-content-center">
        <div class="col-md-3" style="margin: 0px;max-width: none;background: #142326;color: var(--bs-white);padding: 25px;text-align: center;">
            <h2>Feature 1</h2>
            <p>Paragraph</p>
        </div>

        <div class="col-md-3" style="margin: 0px;max-width: none;background: var(--bs-gray-100);color: var(--bs-gray-900);padding: 25px;text-align: center;">
            <h2>Feature 2</h2>
            <p>Paragraph</p>
        </div>

        <div class="col-md-3" style="margin: 0px;max-width: none;background: #142326;color: var(--bs-white);padding: 25px;text-align: center;">
            <h2>Feature 3</h2>
            <p>Paragraph</p>
        </div>

        <div class="col-md-3" style="margin: 0px;max-width: none;background: var(--bs-gray-100);color: var(--bs-gray-900);padding: 25px;text-align: center;">
            <h2>Feature 4</h2>
            <p>Paragraph</p>
        </div>

    </div>

    <!-- For Numbers Section -->
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 row-cols-2 row-cols-md-4">
            <div class="col">
                <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                    <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg" style="background: rgb(20,35,38);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-people-fill">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                            <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"></path>
                            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"></path>
                        </svg>
                    </div>
                    <div class="px-3">
                        <h2 class="fw-bold mb-0">123+</h2>
                        <p class="mb-0">Students</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                    <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg" style="background: rgb(20,35,38);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person-video3">
                            <path d="M14 9.5a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm-6 5.7c0 .8.8.8.8.8h6.4s.8 0 .8-.8-.8-3.2-4-3.2-4 2.4-4 3.2Z"></path>
                            <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h5.243c.122-.326.295-.668.526-1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v7.81c.353.23.656.496.91.783.059-.187.09-.386.09-.593V4a2 2 0 0 0-2-2H2Z"></path>
                        </svg>
                    </div>
                    <div class="px-3">
                        <h2 class="fw-bold mb-0">45+</h2>
                        <p class="mb-0">Teachers</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                    <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg" style="background: rgb(20,35,38);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-book">
                            <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"></path>
                        </svg>
                    </div>
                    <div class="px-3">
                        <h2 class="fw-bold mb-0">67+</h2>
                        <p class="mb-0">Subjects</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                    <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg" style="background: rgb(20,35,38);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-award">
                            <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z"></path>
                            <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"></path>
                        </svg>
                    </div>
                    <div class="px-3">
                        <h2 class="fw-bold mb-0">89</h2>
                        <p class="mb-0">Passed Students</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- For Contact Us Section -->
    <section class="getintouch" style="background: url(&quot;assets/img/back-from.jpg&quot;);">
        <div class="container" style="background: transparent;">
            <section id="contact" style="padding:40px;padding-right:5px;padding-left:4px;">
                <div class="container" style="border-radius: 1rem;">
                    <form id="contactForm" style="padding:15px;" action="javascript:void();" method="post">
                        <div class="row" style="margin-left:0px;margin-right:0px;padding:10px;">

                            <!-- For Contact Form -->
                            <div class="col-12 col-md-6" id="message" style="padding-right:20px;padding-left:20px;">
                                <fieldset>
                                    <legend><i class="fa fa-envelope"></i>&nbsp;Contact Form</legend>
                                </fieldset>
                                <div class="has-feedback form-group mb-3">
                                    <label class="form-label" for="from_name">Your Full Name</label>
                                    <input class="form-control" type="text" id="from_name" tabindex="-1" name="from_name" required="" placeholder="Voornaam en Achternaam">
                                </div>

                                <div class="has-feedback form-group mb-3">
                                    <label class="form-label" for="from_email">Email</label>
                                    <input class="form-control" type="email" id="from_email" name="from_email" required="" placeholder="Uw email adres">
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="has-feedback form-group mb-3">
                                            <label class="form-label" for="from_phone">Tile</label>
                                            <input class="form-control" type="text" id="from_phone" name="subject" placeholder="Titel van bericht">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="form-label" for="comments">Description</label>
                                    <textarea class="form-control" id="comments" name="Comments" placeholder="Type uw bericht hier.." rows="5"></textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <button class="btn btn-primary active d-block w-100" style="background-color:#303641;" type="submit">Send <i class="fa fa-chevron-circle-right"></i>
                                    </button>
                                </div>
                                <hr>
                            </div>

                            <!-- For Contact Info -->
                            <div class="col-md-6" style="padding-left:20px;padding-right:20px;">
                                <fieldset></fieldset>
                                <legend><i class="fa fa-info"></i>&nbsp;Contact Info.</legend>
                                <p></p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td><i class="fa fa-building"></i></td>
                                                <td><strong><em>श्री गौरीशंकर शारडा जूनीयर हाई स्कूल</em></strong><br></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-map-marker"></i></td>
                                                <td>Nadrai Gate, Kasganj</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-phone"></i></td>
                                                <td>085 - 301 90 77 </td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-envelope"></i></td>
                                                <td>info@stackip.nl</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </section>

    <!-- For Testimonial Section -->
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>What our students say ?</h2>
            </div>
        </div>

        <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-lg-3">
            <div class="col">
                <div>
                    <p class="bg-light border rounded border-0 border-light p-4">Nisi sit justo faucibus nec ornare amet, tortor torquent. Blandit class dapibus, aliquet morbi.</p>
                    <div class="d-flex">
                        <img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                        <div>
                            <p class="fw-bold text-primary mb-0">Student Name</p>
                            <p class="text-muted mb-0">Class VIII</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div>
                    <p class="bg-light border rounded border-0 border-light p-4">Nisi sit justo faucibus nec ornare amet, tortor torquent. Blandit class dapibus, aliquet morbi.</p>
                    <div class="d-flex">
                        <img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                        <div>
                            <p class="fw-bold text-primary mb-0">Student Name</p>
                            <p class="text-muted mb-0">Class V</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div>
                    <p class="bg-light border rounded border-0 border-light p-4">Nisi sit justo faucibus nec ornare amet, tortor torquent. Blandit class dapibus, aliquet morbi.</p>
                    <div class="d-flex">
                        <img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                        <div>
                            <p class="fw-bold text-primary mb-0">Student Name</p>
                            <p class="text-muted mb-0">Class VI</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- For Reach Us Section -->
    <div class="container">
        <div class="row">
            <div class="col">
                <h4 class="display-3 text-uppercase" style="padding-right: 10px;padding-bottom: 10px;font-size: 22px;margin: 8px;border-bottom-style: solid;">Reach Us</h4>
            </div>
            <div class="col-md-12"></div>
        </div>
    </div>

    <!-- For Footer -->
    <?php include "./assets/partials/footer.php"; ?>

    <!-- For JavaScript -->
    <?php include "./assets/partials/js.php"; ?>

</body>

</html>