<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="container">
    <h1>
        OUR NEWS
    </h1>
    <div class="news-container">
        <div class="news-item">
            <img src="https://storage.googleapis.com/a1aa/image/kSHVLygrFJYEPRPUxRrWTp9h6UGYDAJ1KKA10Cjw0ODu5p5E.jpg" />
            <h2>
                HOW TO CHOOSE HEADPHONES FOR YOUR SMARTPHONE
            </h2>
            <p>
                Praesent sit amet erat ornare, sodales risus quis, tempus risus. Sed leo enim, pharetra vestibulum metus lobortis, ultricies efficitur eros.
            </p>
            <div class="meta">
                <span>
                    <!-- <i class="far fa-calendar-alt">
                        </i> -->
                    Dec 9, 2016
                </span>
                <span>
                    <!-- <i class="far fa-user">
                        </i> -->
                    arman
                </span>
                <a href="#">
                    READ MORE
                </a>
            </div>
        </div>
        <div class="news-item">
            <img src="https://storage.googleapis.com/a1aa/image/cWpI4CHruaqbJBzgd5gWsj7CqBFg185dGpSByHQel5AbzTzJA.jpg" />
            <h2>
                THE TRANSFER OF DATA FROM TABLET TO PHONE
            </h2>
            <p>
                Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam nec blandit magna. Proin hendrerit molestie porttitor.
            </p>
            <div class="meta">
                <span>
                    <!-- <i class='fa fa-calendar-o fa-5x'></i> -->
                    Dec 2, 2016
                </span>
                <span>
                    <!-- <i class="far fa-user">
                        </i> -->
                    arman
                </span>
                <a href="#">
                    READ MORE
                </a>
            </div>
        </div>
        <div class="news-item">
            <img src="https://storage.googleapis.com/a1aa/image/hUPlXOUBUiavHJ4CyIRkickuiiiPrGXFOeZyfZCeTJErNPNnA.jpg" />
            <h2>
                TERMS OF USE OF PHONES AND TABLETS IN HOT COUNTRIES
            </h2>
            <p>
                Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam nec blandit magna. Proin hendrerit molestie porttitor.
            </p>
            <div class="meta">
                <span>
                    <!-- <i class="far fa-calendar-alt">
                        </i> -->
                    Dec 2, 2016
                </span>
                <span>
                    <!-- <i class="far fa-user">
                        </i> -->
                    arman
                </span>
                <a>
                    READ MORE
                </a>
            </div>
        </div>
    </div>
</div>