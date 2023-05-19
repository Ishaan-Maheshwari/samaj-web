<?php

$navbar = "

<nav class='navbar navbar-light navbar-expand-md sticky-top d-lg-flex' style='background: linear-gradient(148deg, var(--bs-orange) 17%, var(--bs-yellow)), var(--bs-orange);border-radius: 0.5rem;padding: 0px;'>

    <div class='container-fluid'>
        <a class='navbar-brand' href='#'><img src='assets/img/logo.png' style='height: 50px;'></a>
        <button data-bs-toggle='collapse' class='navbar-toggler' data-bs-target='#navcol-1'> <span class='visually-hidden'>Toggle navigation</span><span class='navbar-toggler-icon'> </span> </button>
        
        <div class='collapse navbar-collapse' id='navcol-1'>
            <ul class='navbar-nav d-xxl-flex flex-grow-1' style='padding: 8px;'>
                <li class='nav-item'> <a class='nav-link active' href='index.php'>मुखपृष्ठ&nbsp;<br></a> </li>
                <li class='nav-item'> <a class='nav-link' href='about.php'>हमारे बारे में<br></a> </li>
                <li class='nav-item'> <a class='nav-link' href='committe.php'>कार्यकारिणी<br></a> </li>
                <li class='nav-item dropdown' style='color:var(--bs-dark);'> <a class='dropdown-toggle nav-link' aria-expanded='false'data-bs-toggle='dropdown' href='#'>विद्यालय</a>
                    <div class='dropdown-menu' style='background:transparent;border-style: none;'>
                        <a class='dropdown-item' href='schoolpage/index.php' style='background:rgba(255,193,7,1.0);margin: 4px 0px;border-radius: 0.7em;color: #000000;font-style: italic;' target='_blank'><em>श्री गौरीशंकर शारडा जू .हा. स्कूल</em><br></a>
                        <a class='dropdown-item' href='#' style='background:rgba(255,193,7,1.0);margin: 4px 0px;border-radius: 0.7em;color: #000000;font-style: italic;'>श्री रामस्वरूप बिरला चमेली देविदेवी क. जू. हा. स्कूल</a>
                        <a class='dropdown-item' href='#' style='background:rgba(255,193,7,1.0);margin: 4px 0px;border-radius: 0.7em;color: #000000;font-style: italic;'>श्री आनादीलाल बिड़ला जू. हा. स्कूल</a>
                    </div>
                </li>
                <li class='nav-item'> <a class='nav-link active' href='bhawan/index.php'>माहेश्वरी भवन&nbsp;<br></a> </li>
                <li class='nav-item'> <a class='nav-link active' href='Shivalaya/index.html'>शिवालय<br></a> </li>
                <li class='nav-item'> <a class='nav-link active' href='#'>समाज&nbsp;<br></a> </li>
                <li class='nav-item'> <a class='nav-link active' href='photogallery.php'>&nbsp;चित्र प्रदर्शनी<br></a> </li>
                <li class='nav-item'> <a class='nav-link active' href='#'>समाचार<br></a> </li>
                <li class='nav-item'> <a class='nav-link active' href='#'>दान&nbsp;<br></a> </li>
                <li class='nav-item'> <a class='nav-link active' href='http://maheshwarimahasabha.org/' target='_blank'>महासभा<br></a> </li>
            </ul>
        </div>
        
    </div>
</nav>

" ;

echo $navbar ;

?>