<!DOCTYPE html>
<html lang="en">
<head>

    <title>Committee</title>

    <!-- For CSS -->
    <?php include "./assets/partials/css.php" ; ?>

</head>

<body>
    
    <!-- For NavBar -->
    <?php include "./assets/partials/navbar.php" ; ?>

    <!-- For Member Grid Section -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-body row">
                        <div class="col-6">
                            <a href=""><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" class="img-fluid rounded-circle
                                        w-60"></a>
                        </div>
                        <div class="col-6 card-title align-self-center
                                mb-0">
                            <h5>Emma A. Main</h5>
                            <p class="m-0">Graphics Designer</p>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fa fa-envelope
                                    float-right"></i>Email : <a href="#"><span class="__cf_email__"
                                    data-cfemail="237342564f644c5a4657574663444e424a4f0d404c4e">[email&nbsp;protected]</span></a>
                        </li>
                        <li class="list-group-item"><i class="fa fa-phone
                                    float-right"></i>Phone : 000 123-456</li>
                    </ul>
                    <div class="card-body">
                        <div class="float-right btn-group btn-group-sm">
                            <!-- <a href="#" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip"
                                data-original-title="Edit"><i class="fa
                                        fa-pencil"></i> </a>
                            <a href="#" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip"
                                data-original-title="Delete"><i class="fa
                                        fa-times"></i></a> -->
                        </div>
                        <ul class="social-links list-inline mb-0">
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                    class="tooltips" href="" data-original-title="Facebook"><i
                                        class="fa fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                    class="tooltips" href="" data-original-title="Twitter"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                    class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-body row">
                        <div class="col-6">
                            <a href=""><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" class="img-fluid rounded-circle
                                        w-60"></a>
                        </div>
                        <div class="col-6 card-title align-self-center
                                mb-0">
                            <h5>Paul L. Goyette</h5>
                            <p class="m-0">Graphics Designer</p>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fa fa-envelope
                                    float-right"></i>Email : <a href="#"><span class="__cf_email__"
                                    data-cfemail="6d3d0c18012a0214081919082d0a000c0401430e0200">[email&nbsp;protected]</span></a>
                        </li>
                        <li class="list-group-item"><i class="fa fa-phone
                                    float-right"></i>Phone : 000 123-456</li>
                    </ul>
                    <div class="card-body">
                        <div class="float-right btn-group btn-group-sm">
                            <a href="#" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip"
                                data-original-title="Edit"><i class="fa
                                        fa-pencil"></i> </a>
                            <a href="#" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip"
                                data-original-title="Delete"><i class="fa
                                        fa-times"></i></a>
                        </div>
                        <ul class="social-links list-inline mb-0">
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                    class="tooltips" href="" data-original-title="Facebook"><i
                                        class="fa fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                    class="tooltips" href="" data-original-title="Twitter"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                    class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
    
    <!-- For Footer -->
    <?php include "./assets/partials/footer.php" ; ?>

    <!-- For JavaScript -->
    <?php include "./assets/partials/js.php" ; ?>

    <script type="text/javascript">
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>

</body>

</html>
