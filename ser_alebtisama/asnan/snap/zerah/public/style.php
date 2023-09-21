<?php 
header("Content-type: text/css; charset: UTF-8");
 
include "../info.php";

//include "../info.php"
//<?php echo $form_bg_color; ?>

?>
@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Cairo&display=swap');

body {
    margin: 0px;
    font-family: Cairo !important;
}

.logo {
    padding-bottom: 0px;
    padding-top: 0px;
}

    .logo img {
        margin-top: -15px;
    }

    .logo h1 {
        padding-left: 10px;
    }

h1 {
    display: inline-block;
    font-weight: 300;
    font-size: 2em;
    font-family: Cairo;
}

p {
    line-height: 26px;
    font-family: Cairo;
}

a {
    text-decoration: none;
    font-family: Cairo;
}

.head-nav p {
    padding-top: 20px;
}

.social-media a {
    background-color: white;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    padding-top: 7px;
}

a:hover {
    text-decoration: none;
}

.appointment {
    background: url(./image/<?php echo $bg_image;?>) center center;
    background-repeat: no-repeat;
    background-size: cover;
}

.appointment-section {
    background: rgba(0, 0, 0, 0.6);
    height: 550px;
}
/*for settings*/
.appointment-form {
    /*background-color: rgba(0, 0, 0, 0.7); */
    background-color:<?php echo $form_bg_color;?> !important;/*form bg*/
    padding: 10px 10px;
    margin: 5% 37%;
    max-width: 420px;
    margin-right: 0px;
    margin-left: 0px;
}

    .appointment-form .appointment-title {
        font-size: 28px;
        font-weight: 500;
        margin-bottom: 3%;
        font-family: unset;
    }

    .appointment-form p {
        font-size: 16px;
        font-family: Cairo;
    }

.form-control {
    border-radius: 0px;
    padding-top: 25px;
    padding-bottom: 25px;
}

input {
    color: white;
}

.submit-btn {
    width: 100%;
    background-color: #E12454;
    border-radius: 0px;
    padding-top: 13px;
    padding-bottom: 13px;
    color: white;
}

.passion {
    margin-top: 23%;
    margin-bottom: 3%;
}

    .passion h1 {
        /* font-family: Cairo;*/
        font-size: 42px;
        margin: 0px;
        line-height: 56px;
        font-weight: 900;
        margin-bottom: 5%;
    }

.title {
    padding-top: 100px;
    margin-bottom: 60px;
}

    .title h1, h2 {
        font-family: Cairo;
        font-size: 32px;
    }

    .title p {
        font-family: Cairo;
        font-weight: 900;
        color: #8D8D8D;
    }

.hospital-services .card {
    border: unset;
}

.hospital-services {
    margin-bottom: 100px;
    max-width: 1140px;
}

    .hospital-services .card-title {
        font-family: Cairo;
        font-size: 16px;
        font-weight: bold;
    }

.icon-card {
    margin-top: -55px;
    padding-bottom: 20px;
    height: 80px;
}

.card-title {
    font-size: 16px;
    font-weight: bold;
}

.card p {
    font-family: Cairo;
    line-height: 26px;
    font-size: 15px;
    color: #949494;
}

.card .name {
    color: black;
}

.notification {
    background-color: #F4F4F4;
    padding-bottom: 30px;
}

.blood-bank, .quality-medicine {
    margin-top: 20px;
}

    .blood-bank img, .quality-medicine img {
        padding-top: 30px;
    }

    .notification h4, .quality-medicine h4 {
        /*font-family: Cairo;*/
        font-size: 18px;
        display: inline-block;
        padding-left: 20px;
    }

    .blood-bank span, .quality-medicine span {
        display: inline-block;
        padding-left: 90px;
        margin-top: -25px;
        font-family: Cairo;
        color: #949494;
        line-height: 24px;
        font-weight: 400;
        font-size: 15px;
    }

.service-image {
    background-color: white;
}

.cardiology, .neurology, .diagnostic, .x-ray {
    margin-bottom: -18px;
    padding-left: 0px;
    padding-right: 0px;
}

.neurology, .diagnostic {
    margin-left: -16px;
}

.service .card a {
    font-family: Cairo;
    color: #E12454;
    font-size: 12px;
    line-height: 24px;
    text-transform: uppercase;
    font-weight: bold;
    letter-spacing: 1px;
    padding-left: 11px;
}

.service .card-title {
    font-family: Cairo;
    font-size: 20px;
    font-weight: 500;
    line-height: 24px;
}

.service .card-body {
    padding-bottom: 0px;
    padding-top: 0px;
}

.service .card-text {
    padding-bottom: 10px;
    margin-bottom: 0px;
}

.service-icon {
    margin-top: 20px;
    padding-bottom: 20px;
}

.other-service {
    background-color: #F4F9FF;
    margin-top: 100px;
    padding-top: 120px;
}

    .other-service h4 {
        font-size: 17px;
        display: inline-block;
        padding-left: 20px;
    }

    .other-service span {
        display: inline-block;
        padding-left: 100px;
        margin-top: -25px;
        font-family: Cairo;
        color: #949494;
        line-height: 24px;
        font-weight: 400;
        font-size: 15px;
    }

    .other-service img {
        padding-top: 20px;
    }

.change-direction {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: flex-start;
    align-items: stretch;
    align-content: stretch;
    max-height: 400px !important;
    margin-top: 50px;
}

.emergency {
    background-color: #396CF0;
    padding: 40px 0;
}

    .emergency .emergency-title {
        font-size: 28px;
        padding-left: 60px;
        display: inline-block;
    }

    .emergency span {
        font-weight: 900;
    }

    .emergency button {
        background-color: #E12454;
        color: white;
        font-family: Cairo;
        font-size: 18px;
        margin-left: 60px;
        margin-bottom: 20px;
        padding: 10px 30px;
        font-weight: 600;
        line-height: 26px;
        letter-spacing: 2px;
    }

        .emergency button:hover {
            color: white;
        }

.team .card a, p {
    color: black;
    text-decoration: none;
}

.team .card-title {
    margin-bottom: 0px;
}

.team .card-text {
    color: #E12454;
    font-size: 14px;
    font-family: Cairo;
    line-height: 26px;
}

.team .card {
    border: unset;
}

.team .card-body {
    padding-left: 0px;
}

.partner {
    margin-top: 100px;
}

.partner-logo {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

    .partner-logo img {
        margin: 5px;
    }

.newsletter {
    margin-top: 0px;
}

    .newsletter h1 {
        color: #E12454;
    }

    .newsletter button {
        color: #fff;
        background-color: #E12454;
        outline-offset: 2px;
        position: absolute !important;
        top: 0;
        right: 0px;
        padding: 9px 20px;
        font-family: Cairo;
        font-size: 20px;
        z-index: 3 !important;
    }

        .newsletter button:hover {
            color: #fff;
            background-color: #E45C7E;
            border-color: #6c757d;
        }

    .newsletter .form-control {
        outline: 2px solid #E45C7E;
        outline-offset: 2px;
        border: unset;
    }

    .newsletter .subscribe {
        color: #e12454;
        font-size: 32px;
        font-weight: 500;
        line-height: 38px;
    }

.before-footer {
    height: 466px;
    background-color: #0C2530;
    padding-top: 100px;
}

    .before-footer h1 {
        display: block;
        font-weight: 900;
        padding-top: 0px;
        margin-top: 0px;
    }

    .before-footer h2 {
        padding-bottom: 30px;
    }

    .before-footer button {
        background-color: #E12454;
        color: white;
        padding: 9px 30px;
        border-radius: 0px;
        margin-right: 20px;
        font-size: 18px;
        font-family: Cairo;
    }

        .before-footer button:hover {
            color: white;
        }

    .before-footer a {
        color: white;
        font-size: 18px;
    }

.appoint {
    margin-top: 50px;
    font-size: 18px;
    font-family: Cairo;
}

.testiminionals {
    height: 580px;
    background-color: #F6F6F6;
    margin-top: 100px;
}

    .testiminionals .quotes {
        padding-top: 100px;
    }

    .testiminionals p {
        padding: 50px;
        text-align: center;
        padding-bottom: 0px;
        font-size: 16px;
        line-height: 28px;
        color: #949494;
        font-family: Cairo;
    }

    .testiminionals span {
        color: #E12454;
        font-size: 18px;
        font-family: "Roboto";
    }

.testiminionals-img {
    max-width: 270px;
}

.slick-dots li button:before {
    content: url(/public/image/selected-dot.png) !important;
}

.hours {
    color: white;
    font-size: 32px;
    line-height: 38px;
    font-weight: 500;
}

.working-days {
    font-size: 40px;
    line-height: 48px;
    color: white;
    font-weight: 800;
}

footer {
    height: 80px;
    background-color: #F4F8FC;
}

    footer p, a {
        padding-top: 30px;
    }

    footer a {
        padding-left: 25px;
        color: black;
        text-decoration: none;
    }

        footer a:hover {
            color: #007BFF !important;
        }

    footer .copy {
        padding-left: 0px;
    }

        footer .copy:hover {
            color: #007BFF;
        }

    footer a:hover {
        color: black;
        text-decoration: none;
    }

.maps {
    padding: 0px;
    line-height: 0px;
    ;
}

.newsletter .input-group {
    width: 80%;
    margin: 0px auto;
}


@media (max-width:410px) {
    .service .card-img {
        margin-top: 20%;
    }

    .other-service img {
        margin-left: 0px !important;
    }

    .blood-bank span, .quality-medicine span {
        margin-top: 0px;
        padding-left: 0px;
    }

    .blood-bank h3, .quality-medicine h3 {
        padding-left: 0px;
        margin-top: 10px;
    }

    .emergency h1 {
        padding-left: 10px;
    }

    .emergency button {
        margin: auto;
    }

    .testiminionals .quotes {
        padding-top: 10px;
    }
}

@media (max-width: 576px) {
    .appointment-form {
        padding: 10px 19px;
    }

    .before-footer h1 {
        font-size: 30px !important;
    }

    .appoint, .appoint a {
        font-size: 15px;
    }

    .menu-footer {
        padding: 0px;
    }

    .newsletter button {
        padding: 12px 10px;
        font-size: 16px;
    }
}

@media (max-width: 1000px) {
    .appointment-form {
        margin: auto;
        max-width: unset;
    }

    .passion {
        margin-top: 0px;
        margin-bottom: 10px;
    }

    .other-service span {
        padding-left: 0px;
        margin-top: 0px;
    }

    .other-service h4:first-child {
        margin-top: 20px;
    }

    .other-service h4 {
        margin-left: 0px;
        padding-left: 0px;
        margin-top: 20px;
    }

    .other-service img {
        display: block;
        margin-left: 15%;
    }

        .other-service img:last-child {
            margin: auto;
        }

    .before-footer h1 {
        font-size: 40px;
    }

    footer {
        height: auto;
    }
}

@media (max-width: 992px) {
    .appointment-form {
        margin-bottom: 0px;
        margin-top: 5%;
        margin-left: 10%;
        margin-right: 10%;
        max-width: unset;
    }

    .passion {
        margin-top: 10px;
        margin-bottom: 100px;
    }

        .passion h1 {
            font-size: 30px;
        }

    .cardiology, .neurology, .x-ray, .diagnostic {
        margin-left: 0px;
    }

    .change-direction {
        max-height: unset !important;
    }

    .doctor-asking {
        margin-left: 30%;
    }

    .before-footer {
        padding-top: 100px;
    }

    .appoint button {
        display: block;
        margin: auto;
        margin-bottom: 10px;
    }

    .testiminionals p {
        padding: 0px;
    }

    .working-days {
        font-size: 24px;
        line-height: 1.1;
    }
}

@media (max-width: 1200px) {
    .doctor-asking {
        max-width: 283px;
    }

    .appointment {
        height: auto;
    }

    .emergency .ambulance {
        text-align: center;
    }

    .change-direction {
        margin-top: 0px !important;
    }

    .other-service {
        padding-top: 30px;
    }
}

.polygon {
    clip-path: polygon(100% 0, 70% 50%, 100% 100%, 0 100%, 0 0);
}

.polygon-invers {
    clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%, 30% 50%);
}

.first-quote p, .second-quote p {
    margin-top: 20px;
    padding: 20px 15px;
    -webkit-box-shadow: 1px 1px 7px 7px #D6D6D6;
    box-shadow: 1px 1px 7px 7px #D6D6D6;
}
/*  logo bg*/
.bg-primary {
    background-color: #ffffff !important;
}

.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    font-family: Cairo;
}
