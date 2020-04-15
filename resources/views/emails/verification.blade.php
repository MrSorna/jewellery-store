<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>

    <style>
        @media only screen and (max-width: 390px) {
            .header {
                width: 100% !important;
                height: 10% !important;
            }

            .header div img {
                width: 90px;
                height: 90%;
            }

            #div-1 {
                width: 340px !important;
            }

            #div-3 {
                width: 320px !important;
            }

            #div-4 {
                width: 340px !important;
            }
        }

        /* Extra small devices (phones, 600px and down) */
        @media only screen and (max-width: 600px) {
            .header {
                height: 11%;
            }

            .header div img {
                width: 100px;
            }

            #div-1 {
                width: 380px;
            }

            #div-3 {
                width: 340px;
            }

            #div-4 {
                width: 390px;
            }

            #p1 {
                font-size: 16px !important;
            }

            #p2 {
                font-size: 16px !important;
            }

            #p3 {
                font-size: 13px !important;
            }

            #p4 {
                font-size: 13px !important;
            }

            #p5 {
                font-size: 13px !important;
            }

            .img-service {
                height: 60px;
            }

            .faq {
                font-size: 1.3rem;
            }
        }

        /* Small devices (portrait tablets and large phones, 600px and up) */
        @media only screen and (min-width: 600px) {
            #div-1 {
                width: 600px;
            }

            #div-3 {
                width: 450px;
            }

            #div-4 {
                width: 600px;
            }

            .img-service {
                height: 70px;
            }

            .faq {
                font-size: 1.5rem;
            }
        }

        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (min-width: 768px) {
            #div-1 {
                width: 700px;
            }

            #div-3 {
                width: 500px;
            }

            #div-4 {
                width: 700px;
            }

            .img-service {
                height: 100px;
            }

            .faq {
                font-size: 1.6rem;
            }
        }

        /* Large devices (laptops/desktops, 992px and up) */
        @media only screen and (min-width: 992px) {
            #div-1 {
                width: 800px;
            }

            #div-4 {
                width: 800px;
            }

            .img-service {
                height: 100px;
            }

            .faq {
                font-size: 2rem;
            }
        }

        /* Extra large devices (large laptops and desktops, 1200px and up) */
        @media only screen and (min-width: 1200px) {
            #div-1 {
                margin-top: 50px;
                width: 1000px;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 70px;
            }

            #div-4 {
                width: 1000px;
            }

            .img-service {
                height: 100px;
            }

            .faq {
                font-size: 2.5rem;
            }
        }

        body {
            width: 100%;
            height: 100%;
            margin: 0px;
        }

        .header {
            background-color: #015347;
            max-width: 100%;
            text-align: center;
        }

        .header img {
            width: 12%;
            position: relative;
            top: 5px;
        }

        #div-1 {
            max-width: 1100px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 70px;
            margin-top: 100px;
        }

        #p1 {
            color: #015347;
            font-size: 20px;
        }

        #p2 {
            font-size: 20px;
            text-align: justify;
            font-weight: 200;
        }

        #span1 {
            font-weight: bold;
        }

        #div-2 {
            text-align: center;
            margin: 30px auto;
            padding-top: 20px;
        }

        .a--1 {
            color: white;
            font-size: 25px;
            padding: 6px 80px;
            border: 0px;
            background-color: #015347;
            border-radius: 5px;
            text-decoration: none;
        }

        #div-3 {
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }

        #p3 {
            text-align: center;
            font-size: 19px;
            width: 100%;
        }

        .hr {
            width: 30%;
            margin: 10px auto;
        }

        #p4 {
            text-align: center;
            font-size: 16px;
            color: black;
        }

        #span2 a {
            text-decoration: none;
            font-weight: 500;
            color: #015347;
        }

        #p5 {
            text-align: center;
            font-size: 18px;
        }

        #div-4 {
            max-width: 1100px;
            margin: 50px auto;
        }

        #p6 {
            font-size: 20px;
        }

        #p7 {
            font-size: 22px;
        }

        #span4 {
            font-weight: 600;
        }

        #div-5 {
            max-width: 300px;
            margin: 50px auto;
        }

        #p8 {
            position: relative;
            top: 30px;
            text-align: center;
            font-size: 9.5px;
        }

        #div-5 img {
            width: 45px;
            height: 45px;
            padding-top: 8px;
        }

        .footer {
            background-color: #015347;
            width: 100%;
            height: 9%;
            text-align: center;
        }

        #p9 {
            padding: 20px 0px 10px 0px;
            color: white;
            font-weight: 500;
            font-size: 15px;
        }

        #hr-media {
            width: 20px;
            position: relative;
            transform: rotate(90deg);
        }

        #div-6 #a-img1 {
            position: relative;
            left: 80px;
            top: 30px;
        }

        #div-6 #a-img2 {
            position: relative;
            left: 175px;
            bottom: 41px;
        }
    </style>
</head>
<body>
<section>
    <div class="header">
        <div>
            <img
                src="https://visatoiran.com/assets/images/logo-white.png"
                alt=""
            />
        </div>
    </div>
</section>
<section>
    <div id="div-1">
        <p id="p1">Hi {{ $name }},</p>
        <p id="p2">
            Welcome to <span id="span1">VisaToIran</span>. In order to verify your
            Email address and complete your profile,just click on verify button
            below.
        </p>
        <div id="div-2"><a href="{{ url('verify?').'email='.$email.'&code='.$verification_code }}"
                           class="a--1">Verify</a></div>
    </div>
</section>
<section>
    <div id="div-3">
        <p id="p3">
            If you not make this request,Please ignore this email and created
            profile wont be activated.
        </p>
        <div class="hr">
            <hr/>
        </div>
        <p id="p4">
            You received this message because this email address is entered to
            create a profile on
            <span id="span2"><a href="#">VisaToIran.com</a></span>
        </p>
        <div class="hr">
            <hr/>
        </div>
        <p id="p5">
            This email can't receive replies.For any enquiry or support you can
            check our <span id="span3">Contact Us</span> page.
        </p>
    </div>
</section>
<section>
    <div id="div-4">
        <p id="p6">Sincerely yours,</p>
        <p id="p7">The <span id="span4">VisaToIran</span> Support Team</p>
    </div>
</section>
<section>
    <div id="div-5">
        <p id="p8">follow Us On Socail Media.</p>
        <div id="div-6">
            <a id="a-img1" href="#">
                <img
                    src="https://visatoiran.com/assets/images/instagram.png"
                    alt=""
                /></a>
            <hr id="hr-media"/>
            <a id="a-img2" href="#">
                <img src="https://visatoiran.com/assets/images/linkedin.png" alt=""
                /></a>
        </div>
    </div>
</section>
<section>
    <div class="footer">
        <p id="p9">VisaToIran , Tehran , iran</p>
    </div>
</section>
</body>
</html>










