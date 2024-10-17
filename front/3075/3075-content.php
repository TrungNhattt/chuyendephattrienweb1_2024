<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="contact-header">
        <h1>Contact</h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Contact</li>
        </ol>
    </div>
    <div class="container">
        <div class="row contact-info">
            <div class="col-md-6">
                <h3>Contact Information</h3>
                <ul>
                    <li><i class="fas fa-home"></i>3224 Junkins Avenue, GA 31750, United States</li>
                    <li><i class="fas fa-envelope"></i>support@example.com</li>
                    <li><i class="fas fa-phone"></i>+000 000 000 000</li>
                    <li><i class="fas fa-fax"></i>+1-212-9876543</li>
                </ul>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-md-6 contact-form">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <br>
                    <input type="text" class="form-control" placeholder="Subject">
                    <br>
                    <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                    <br>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
