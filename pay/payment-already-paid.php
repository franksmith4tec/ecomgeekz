<?php
$payment_config = include 'config/payment_config.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $brand_name ?? '' ?> | Payment Already Completed</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="payment.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    
    <style>
        body {
           
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }

.thank-you-container {
    text-align: center;
    background: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    width: 100%;
    margin: 120px auto;
}

        .thank-you-container h2 {
            margin: 0 0 10px;
            color: #27ae60;
            font-size: 24px;
        }

        .thank-you-container p {
            color: #333;
            margin-bottom: 10px;
            font-size: 16px;
        }

        .thank-you-container a {
            display: block;
            color: #3498db;
            font-size: 16px;
            margin-top: 4px;
            text-decoration: none;
        }

        .thank-you-container a:hover {
            text-decoration: underline;
        }

        .success-checkmark {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #28a745;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 15px;
        }

        .success-checkmark svg {
            width: 40px;
            height: 40px;
            stroke: #fff;
            stroke-width: 5;
            fill: none;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .thank-you-text {
            font-size: 22px;
            font-weight: bold;
            color: #333;
        }

        .thank-you-description {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
        }

        .btn-home {
            background-color: #ff66a3;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            transition: 0.3s;
        }

        .btn-home:hover {
            background-color: #e05591;
        }
    </style>
</head>

<body>
    
    
    
    
    
    
    
     <header>
        <div class="header_top desktop">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-4 mb-4x">
                        <div class="hdr_r">
                            <!--<a href=""><i class="fas fa-lock"></i> My Account</a>-->
                        </div>
                    </div>
                    <div class="col-8 mb-8x d-flex justify-content-end align-items-center hdr_1">
                        <ul class="header-icon">
                            <li class="phone">
                                <img id="img-top-header" src="https://trademarkrepublic.com/assets/images/phone.svg" alt=""><a href="tel:<?= $brand_phone ?? '' ?>"><?= $brand_phone ?? '' ?></a>
                            </li>
                            <li class="mes"><img id="img-top-header" src="https://trademarkrepublic.com/assets/images/mes.svg" alt=""><a href="mailto:<?= $support_email ?? '' ?>"><?= $support_email ?? '' ?></a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <div class="main-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6 col-md-3">
                        <a href="#" class="logo">
                            <img src="<?= $base_pay_url ?? '' ?>/assets/images/logo.svg" alt="" class="img-fluid" id="forms-logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    
    
    
    
    
    
    
    <div class="thank-you-container">
        <h2>Payment Already Completed</h2>
        <p>This payment has already been processed.</p>
        <p>Contact with support team</p>

        <a href="tel:<?= $brand_phone ?? '' ?>">📞 <?= $brand_phone ?? '' ?></a>
        <a href="mailto:<?= $support_email ?? '' ?>">✉️ <?= $support_email ?? '' ?></a>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    <style>
        .amount-wrap {
            /*font-family: "Manrope", sans-serif;*/

        }

        .payment-form .submit {
            background: #016bff !important;
            border-radius: 8px;
        }

        body {
            background-color: #f5f6f8;
            /*font-family: "Manrope", sans-serif;*/
        }

        .navbar__container {
            text-align: center;
        }

        .logoxx {
            margin: -15px auto 0px auto;
            text-align: center;
            display: inline-block;
        }

        .logoxx img {
            width: 150px;
            margin: 0px auto;
        }

        .sec-1 {
            max-width: 38%;
            padding: 25px 20px;
            margin: 50px auto 50px auto;
            border: 1px solid #eee;
            border-radius: 20px;
            background: #fff;
        }

        .card-row {
            text-align: right;
        }

        .hidex {
            display: none;
        }

        input.InputElement.is-complete.Input {
            background: #ff2222 !important;
            padding: 20px !important;
            /*font-family: "Manrope", sans-serif;*/
        }

        input.InputElement.is-empty.Input.Input--empty {
            background: red !important;
            /*font-family: "Manrope", sans-serif;*/
        }

        .card-row span {
            width: 48px;
            height: 30px;
            margin-right: 3px;
            background-repeat: no-repeat;
            display: inline-block;
            background-size: contain;
            /*font-family: "Manrope", sans-serif;*/
        }

        .visa {
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAeCAMAAABdem3zAAAAA3NCSVQICAjb4U/gAAABvFBMVEUAAADQ0NDa2tra2trZ2dnY2Nja2trt7e3t7e0mM3onNHspNXkqN30rN30sOH4tN3ovO4AwPIAyPoE1QYM3Q4Q4Q4U4RIU5RYY8R4g9SIhCTYtDToxGUY5HUo5JU49JVJBOWJJQW5RSXJVTXZZVX5dXYZhYYplaY5pfaJ1kbaBlbqFoaZFocaNpcqNqc6RtdqZvd6dzcpV0fKp2f6x5ga18g698hK99hK99hbB+hrCAh7GDi7OHjrWIj7aJkLeNk7mNlLqOlbqRl7yUmr6WnL6YnsCbocKepMSjqMekqceprsqrsMysscytss2uss2xts+xttC0uNG1udK1utK2utK3u9O6vdS7v9W8wNa9wda9wdfBxNnDx9rEx9vFyNzFydvHy93Kzd/Mz+DR0+LS1OPT1uTVnV/V1+XX2ebY2NjZuJbZ2+faoVza3Ojc3+rf4evf4ezi5O7j5e7n6fHp6/Lq6/Lr7PPsmC3snTfs7fPunjnu7/Tu7/Xw8fbx8vfy8/f09fj09fn19vn29/r3z5332LH39/r42LD42bL42bP5+fv76tX77dz7+/v7+/387dv9/f7+9ev//v3///9+dhG/AAAACXRSTlMAGxuq7e7u+vsOT6YMAAABbklEQVQ4y+WUV1cTYRQAlwSIsxoLltgLKgZ7AwV777FiL9gT1x4FGxpb0Gg0On/YBx83D+wz8z7nu+fe800QpNKtpTHSmk4FQUt7pu4YqWfaW4L0BBOQSQdt9SRCvS0omYjSOBZ+fB0d/f5T/VQoDHi6cF4b1/Zt6d9fUZ+cLFyMvfDny6vhN3/1EOwegW4/LAHgpb6bBpNr8ZE2PBz+rQvIvrgJ2+2DdaeOba7pXoBbceHAxHvfHIRNHoHjLobLqlZnkIeDcaHIlAeuh6Jb4bb9EG58rh6G4nTWNNnSHFYNZcnrcsKK1d4Qpl63MY9lrmRmE6GHcCdc0Q7mqt5ZAfM9C7uKvfA0LlyASSzUt7Daz+pIyGw7+c+JuPAxCxzV+7DHrq5tOzqhbxA6crlcSE+TS+dhVk0vwRk7AFhb64a76lIWva7EhKEoKqvvo6jqs6sD526UNYoeq5ajR78a4/k/JM5M4pAlTGUqSBrjf5znrWNE0ZcCAAAAAElFTkSuQmCC) #fff;
        }

        .mastercard {
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAeCAMAAABdem3zAAAAA3NCSVQICAjb4U/gAAACc1BMVEUAAADQ0NDa2tra2trZ2dnY2Nja2trt7e3t7e3MAADMAQHMBATNCQnOCwvODAzODg7PDwnPERHRGxvSFgfSHh7SHx/SIB7THhDTJCTTJibTJyfUKSnVIAXVLS3VMDDWMjLWNTXWNjbXIQDXLyLXNS7XNzfXOzvYLxbYPT3YPj7Y2NjZOy/ZRUXaSEjaSUnbLQDbLgDbS0vbTU3cSj/cU1PdNADdSjTdVVXdVlbeNwDeW1vfYmLgUDPgZWXgZmbgaGjhXkvhamrhbW3ia2Lib2/jXDfja1njdXXkeHjkeXnke3vlgIDlgYHmg4PmhITmhobnh4fniIjni4voVgDojIzokJDqXADqaiTqlpbqmJjqmZnqmprrnJzrn5/tpqbuqqrura3urq7vsbHvsrLvs7PwbADwbQDwtLTwtbXwt7fxvLzycgDyjULyvr7yv7/zdQDzmVvzn2fzxMTzxcXzx8f2fwD21tb3gQD3x6/3ybL32Nj4hAD43t7439/44OD5iQD54eH54uL65ub65+f76+v7+/v88vL89PT99/f9+Pj9+fn+lwD+/f3/mQD/mgT/nQv/nw//oRT/oRX/oRb/ohj/qCf/qSn/qSr/qy3/rDH/rjX/rjb/sT7/sj//s0L/tEX/tUf/tUj/tkn/t0v/uVD/uVH/u1X/vFj/vVr/vl7/v2H/w2n/xGz/x3P/yHb/yXr/zob/z4j/0Iv/1Zj/1pr/153/2J7/26X/3q7/4LL/4LP/4bX/4bb/5cD/5sL/58P/58T/58X/6sz/7NH/7dL/8d7/8t//9OX/9eb/9ef/9ur/9+v/+vT/+/X//Pj//fz///90HdR0AAAACXRSTlMAGxuq7e7u+vsOT6YMAAABmElEQVQ4y2NgYGJm0SISsDAzMTAwsrG3XiAStLKzMTIwc1wgAbAzM7C2kqKhlZVB6wJJQItSDS3R5orSmo7pPUD2+d2r506bvWzLKdwaOr14OSFAMuXCzqm9ENC//hwODc2KnHDAVdCLALNOYNXQLo9QzylgGoykY+YZbBqckNSrpKamdSPpWINFQw03kgZhJSUlSyQNfUcxNfjzyfFISUDUi5WCQO+EOZOgGmZswNSgY3VBpyPOxJZf1d4uWdxZW9k45+SBtStWTVowffH8o/MxNUgHNsY0entmxrW5R6VnhNb6NlVu6p247uCOs3sOH941DYuG9MTa3JCiGp+S+CzdrrziBOuK5b1L9x8/tG3vko0bsWjQafCKaIhNqon0qyvzqApyKZMtPLZl8/bTR1Zv3Xd6JRYnBeiJChkJGqppWIgoKKi7mTnIVC9YPHnhnHlTJiyaM3EDgWANz87OLicQrCgRx6VvYJBPIOJQk4ZNWD3BpIGS+DhdCSc+0pM3JAOpkpCBaJOnSS5mSC7ISCwqgYUriYUxAINRRW57ksG5AAAAAElFTkSuQmCC) #fff;
        }

        .amex {
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAeCAMAAABdem3zAAAAA3NCSVQICAjb4U/gAAACi1BMVEUAAAAAAAAAdKIAdqcGdqoDeqkDeKoDe6sFeqoFeqwCeqoGe6wGeasGeqwGe6wFeqwFeqwFeqsGe6oFeawEeqwEeqwFe6wHeaoFe6oFeasFe6wFeawHe6wIfKwJfKwKfa0Lfa0Mfq0Of64Pf64QgK8RgK8Sga8TgbAUgrAVgrAWg7EXg7EYhLEZhLIahbIbhbIdhrMfh7QgiLQhiLQjirUkirUli7YnjLYojLcqjbcsj7gtj7kukLkvkLkwkbkxkboykrozkro0k7s1k7s2lLs3lLw4lbw5lbw6lr07lr08l709l75Amb9Bmr9Dm8BFnMBHncFIncFJnsJKnsJLn8JMn8NNoMNOocRPocRQosRRosVUpMZVpMZWpcZXpcdYpsdZp8dap8dbqMheqclgqslhq8pjrMpkrMtnrsxpr8xqr81tsc5vss5wss9xs89ztNB0tdB1ttF6uNJ8udN9utN+utR/u9SAu9SBvNWCvNWDvdWEvdWGvtaHv9aIv9eKwNeMwdiPw9mQw9mRxNqTxdqUxtuVx9uWx9yXyNyYyNyZyd2ayd2byt2cyt6dy96fzN+gzN+hzd+izeCjzuCkzuCn0OGp0eKq0eKr0uOs0+Ot0+Ov1OSw1eSy1uWz1uW01+W32Oa62ui72+i82+i+3Om/3enC3urE3+vF4OvH4ezI4uzJ4u3K4+3L4+3N5O7O5e7P5e/R5u/S5/DT5/DV6PHW6fHX6fHY6vHa6/Lb7PPc7PPd7fPe7fTf7vTg7vTi7/Xj8PXk8fbm8vbn8vfo8/fp8/fq9Pjr9Pjs9fjt9fnu9vnv9vnw9/rx9/ry+Prz+Pv0+fv1+fv2+vz4+/z5+/37/P38/f7+/v7///+B6xdgAAAAHHRSTlMAARYaJ0FIT1pcYG6YmZyssrPDys3T2tvt9PX+1nJQbwAAAnFJREFUOMtjYOAWESMWiAqwMzBwyZAEOBn4SdMgzCBImgYJUjVI0UeDkoGBrq6BgZ6MhgECqAA56nJ6ICZIWN3AQAeuoevIrvOHDuy6ZLl1366ru3ft2nVl167dJ08cOXHo/P6Dl3Yd33Nm15mdJw+thGnQO2ei2nzDRaZp405Zmd2KxhYWW2TMTeUmJOWv0NOPKVJ1uNEi4329LByuoXKaabvZNZcQw8u5IUANrYuX7pA5eNSxJCk/OPfGBe2ZKotbnAw6kTSs8Axslpnh0mtRr74YqME7LGaHjI6G4uakfOfGG21q3c5hLf7TNDMQGhqUMjN9vFz6O2TCjgA11M+Zs13m4oXIvKT8bOs+i7DMNJks/xuhcggNKQ3b+vfGpS65kLTqVNyRpLi4uP1xl6d09jRPPF+blHC29WB+SsX5PXF1cA0lE/1lWiZOnFg2saZrIgxkgojiyr6JZTLxQFZ5ycSJpRTHdOAmMMiM2Agk103esGnTxiWzwELTVwOJyes29aFqiFtrCQR+x05FuVpaWqcfA3I8FlQDyandjpaWh5KtLI3RNCxTA8ZypHewb7vNrvWKk2QW7wiIzU3YteusXtXWrQvllm+diK5BRl6+4JyW2omJ2qkRiqtknN2VF+UCxWbmKCi5b3GU1fRE16B+4cK5RCe3pH6z6bP3nZOZsyYoMzftwsWrp4+skZt/4kA1mqfjVqgAgcORw/Z23kejg86r7JxXm1AIFOqzVdFLAEoahaNqiDgMBplZQGKNjC6QbD0MA3vmAomN5XTLcaQASQZe0jSIM3CQpoGPgZFHmgT1QkwMDAzMrOxEAjYWBgYAvI9h1MHdhQIAAAAASUVORK5CYII=) #fff;
        }

        .discover {
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAeCAMAAABdem3zAAAAA3NCSVQICAjb4U/gAAACLlBMVEUAAADQ0NDa2tra2trZ2dnY2Nja2trt7e3t7e3vzbDvzbEBAQECAgIDAwMTExMUFBQWFhYYGBgZGRkeHh4jIyMmJiYnJycpKSksLCwtLS0uLi4wMDAzMzM0NDQ3Nzc6Ojo8PDw/Pz9CQkJDQ0NHR0dJSUlKSkpMTExOTk5PT09RUVFWVlZYWFhcXFxgYGBiYmJjY2Nra2tsbGxtbW1wcHBxcXF0dHR1dXV2dnZ3d3d4eHh8fHx9fX1+fn6AgICBgYGCgoKDg4OLi4uMjIyPj4+VlZWWlpabm5udnZ2enp6fn5+hoaGjo6OoqKirq6usrKyvr6+wsLCysrKzs7O4uLi7u7u8vLy9vb2/v7/AwMDBwcHExMTGxsbHx8fJycnLy8vQ0NDR0dHS0tLU1NTW1tbY2NjZ2dnb29vd3d3f39/h4eHi4uLn5+fo6Ojp6enr6+vs7Ozt7e3v7+/x8fHy8vL1giD1giH1gyP1hCT1iS31ii71izD1jDL2kTv2kjz2kz/2lED2lkP2lkT2l0X2mUn2pmH2pmL3m033n1X3oVf3pF73pV739/f4q2n4q2r4rWz4r3D4r3H4sXT4s3f5uoT5u4b5vov5+fn6xJb6yJ36yqD6zKT6+vr7zqj70a372Ln7+/v83sT838b84Mj84sv848785M/85dD89O78/Pz959X96Nb969z9/f3+8+r+9e7+9u/+9/H++PP++vb++vf+/Pn+/Pr+/fz+/v7////OeAUcAAAAC3RSTlMAGxuq7e7u+vv7+w/+RoMAAAGnSURBVDjLY2BgYmZJJRKwMDMxMDCysS/YSSRYwM7GyMDMsZMEwM7MwLqAFA0LWBlSd5IEUumkwc7A0HPBTuvcTAN13535FuqWJTsXdrdP2+IZuHOnR6iNgYHVDgMDsySEBin3QE2NnWJpKk6x8T1iDsku6UvKSktL+4Kld84RzBb3Co9ZyRPnJYikIXHnAr5ssTR9hYCVIfIg8UmlILBCOMFfa6e4jWvQWh5/e0kUDTuFMsTSpvvI6gUog8QngzVsdDRVC9spbu7st5bbmL8ASUNEipEi0ElRRQEyhYL+K/2Tl5cD1U/cmSMgsXOneHRe3krenSpuCA26ckp2xTu1s2xFZSJ3JqiJqKbvXNrbOWPrzp0m3jt36sjJyS2Q35ms0rNz53wSg3VRI2kaVlc1kKRhVU0pSRoWVZaSpGF2RSkpGjZNAMcM0RoW15aSomE9JOKJ1bB1VnUpCRq2z6srLSVew+ZZyMoJalgzpbq0lGgNG+Z2lGKAplQcxcy6uV3lpVhAKyuWgmzLwqktpTgAJzNaUblt2cz+xnocoLmNiw1YuJJYGAMAEKBGzN/0FVAAAAAASUVORK5CYII=) #fff;
        }

        .form-group.radio-group.check-group {
            margin: 0px;
            padding: 0px;
        }

        .payment-form .form-group input,
        .payment-form .form-group select {
            width: 100%;
            height: 38px;
            background: #fff;
            border: 1px solid #c1c1c1;
            border-radius: 10px;
            padding: 5px 15px;
            outline: none;
            box-shadow: none;
            border-radius: 8px;
            /*font-family: "Manrope", sans-serif;*/
            font-size: 14px !important;
        }

        .g-title {
            background: #f0f0f0;
            padding: 15px 20px 15px 20px;
            border-radius: 20px;
            margin: 20px 0 20px 0;
            text-align: center;
            border: 1px solid #c5c5c5;
            font-size: 15px !important;
            /*font-family: "Manrope", sans-serif;*/
        }

        p.sub-titlex.centerit {
            margin: 0px;
        }

        .sec-1 .pg-top .sub-title {

            margin: 0px !important;
        }

        .amount-wrap2 {
            display: inline-block;
            text-align: center;
            width: auto;
            margin: 0 0px 0px 10px;
            font-weight: 300;
            /*font-family: "Manrope", sans-serif;*/
        }

        .clickx {
            display: none;
        }

        .amount-wrap {
            display: inline-block;
            text-align: center;
            width: 100%;
            font-size: 20px;
            letter-spacing: 0.5px;
        }

        .amount-wrap {
            font-weight: bold;
            font-size: 26px;
        }

        div#duplicateDiv1,
        div#duplicateDiv2 {
            display: inline;
        }

        .centerit {
            text-align: center;
        }

        p.centerit, #titlez {
            font-weight: bold;
            font-size: 22px;
            letter-spacing: 0.5px;
            text-align:center;
        
            /*font-family: "Manrope", sans-serif;*/
        }

        button#pay_now {
            text-transform: capitalize;
        }

        @media only screen and (min-width: 0px) and (max-width: 767px) {
            
            
            .mb-4x{ display:none;}
            .mb-6xx{width:100%;}
            .mb-8x{width:100%;}
            .header_top a {    font-size: 12px !important; }
            li.mes { position: relative; top: -5px; }
            
            section.sec-1 {
                max-width: 100%;
                 margin: 45px 15px;
                         padding: 5px 0px 30px 0px;
            }
            
            .credit-card-box {
    padding: 25px 15px;
    border: 2px solid #000;
    border-radius: 2px;
}

            .centerit {
                text-align: center;
            }

            .card-row {
                text-align: center;
                margin: 20px 0 0 0;
            }
        }

        .credit-card-box {
            padding: 30px;
            border: 3px solid #000;
            border-radius: 2px;
        }

        .card-container-easypay {
            background: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .card-container-easypay input,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .card-input {
            display: flex;
            gap: 10px;
        }

        .card-input input {
            flex: 1;
        }
    </style>
    <style type="text/css">
        body .container {
            width: auto;
        }

        .logoxx {
            margin: 0px auto 20px auto;
            display: block;
            text-align: center;
        }

        .logoxx img {
            text-align: center;
            margin: 0px auto;
            width: auto;
        }

        #loading-sp {
            display: none;
            background: #000;
            opacity: 0.77;
            bottom: 0;
            left: 0;
            position: fixed;
            right: 0;
            top: 0;
            z-index: 9999999;
        }

        #load {
            position: absolute;
            height: 36px;
            top: 40%;
            overflow: visible;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            cursor: default;
            color: #fff;
            text-align: center;
            width: 100%;
        }

        #load div {
            position: absolute;
            width: 20px;
            height: 36px;
            opacity: 0;
            font-family: Helvetica, Arial, sans-serif;
            animation: move 2s linear infinite;
            -o-animation: move 2s linear infinite;
            -moz-animation: move 2s linear infinite;
            -webkit-animation: move 2s linear infinite;
            transform: rotate(180deg);
            -o-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -webkit-transform: rotate(180deg);
            color: #cdcdcd;
            font-weight: bold;
            font-size: 16px;
        }

        #load div:nth-child(2) {
            animation-delay: 0.2s;
            -o-animation-delay: 0.2s;
            -moz-animation-delay: 0.2s;
            -webkit-animation-delay: 0.2s;
        }

        #load div:nth-child(3) {
            animation-delay: 0.4s;
            -o-animation-delay: 0.4s;
            -webkit-animation-delay: 0.4s;
            -webkit-animation-delay: 0.4s;
        }

        #load div:nth-child(4) {
            animation-delay: 0.6s;
            -o-animation-delay: 0.6s;
            -moz-animation-delay: 0.6s;
            -webkit-animation-delay: 0.6s;
        }

        #load div:nth-child(5) {
            animation-delay: 0.8s;
            -o-animation-delay: 0.8s;
            -moz-animation-delay: 0.8s;
            -webkit-animation-delay: 0.8s;
        }

        #load div:nth-child(6) {
            animation-delay: 1s;
            -o-animation-delay: 1s;
            -moz-animation-delay: 1s;
            -webkit-animation-delay: 1s;
        }

        #load div:nth-child(7) {
            animation-delay: 1.2s;
            -o-animation-delay: 1.2s;
            -moz-animation-delay: 1.2s;
            -webkit-animation-delay: 1.2s;
        }

        @keyframes move {
            0% {
                left: 0;
                opacity: 0;
            }

            35% {
                left: 41%;
                -moz-transform: rotate(0deg);
                -webkit-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
                opacity: 1;
            }

            65% {
                left: 59%;
                -moz-transform: rotate(0deg);
                -webkit-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
                opacity: 1;
            }

            100% {
                left: 100%;
                -moz-transform: rotate(-180deg);
                -webkit-transform: rotate(-180deg);
                -o-transform: rotate(-180deg);
                transform: rotate(-180deg);
                opacity: 0;
            }
        }

        @-moz-keyframes move {
            0% {
                left: 0;
                opacity: 0;
            }

            35% {
                left: 41%;
                -moz-transform: rotate(0deg);
                transform: rotate(0deg);
                opacity: 1;
            }

            65% {
                left: 59%;
                -moz-transform: rotate(0deg);
                transform: rotate(0deg);
                opacity: 1;
            }

            100% {
                left: 100%;
                -moz-transform: rotate(-180deg);
                transform: rotate(-180deg);
                opacity: 0;
            }
        }

        @-webkit-keyframes move {
            0% {
                left: 0;
                opacity: 0;
            }

            35% {
                left: 41%;
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                opacity: 1;
            }

            65% {
                left: 59%;
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                opacity: 1;
            }

            100% {
                left: 100%;
                -webkit-transform: rotate(-180deg);
                transform: rotate(-180deg);
                opacity: 0;
            }
        }

        @-o-keyframes move {
            0% {
                left: 0;
                opacity: 0;
            }

            35% {
                left: 41%;
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
                opacity: 1;
            }

            65% {
                left: 59%;
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
                opacity: 1;
            }

            100% {
                left: 100%;
                -o-transform: rotate(-180deg);
                transform: rotate(-180deg);
                opacity: 0;
            }
        }






        @media only screen and (max-width: 600px) {
            .payment-form .g-title {
                font-size: 18px;
                text-align: center;
            }


            .sec-1 .pg-top .title {
                font-size: 26px;

            }

            body .container {
                width: auto;
                padding: 0 20px;
            }

            .form-group.radio-group img {
                width: 50px;
            }

        }


        .header_top {
            background-color: #0E101A;
            padding: 0px 0px 2px 0px;
        }

        ul.header-icon {
            margin-bottom: 0;
            padding: 2px;
            text-align: center;
            margin-right: 4px;
        }

        .header_top ul li {
            display: inline-block;
            padding: 0 16px;
        }

        .header_top ul li {
            display: inline-block;
            padding: 0 16px;
        }

        .align-items-center ul li img {
            padding-right: 8px;
            max-width: 26px;
            padding-bottom: 0px;
            margin-bottom: -1px;
        }

        .header_top a {
            font-size: 14px;
            font-weight: 500;
            font-family: "Manrope", sans-serif;
            color: #fff;

            text-decoration: none !important;
        }

        .align-items-center ul li img {
            padding-right: 8px;
            max-width: 26px;
            padding-bottom: 0px;
            margin-bottom: -1px;
        }

        .header_top a {
            font-size: 14px;
            font-weight: 500;
            color: #fff;

        }

        .main-header {
            padding: 10px 0;
            background: #fff;
        }

        #forms-logo {
            max-width: 40% !important;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }
    </style>
    
    
    
    
    
    
    
    
    
    
    
    
    
    


    <style>
        .site-footer {
            background: #0E101A;
            font-family: "Manrope", sans-serif;
        }

        .site-footer .ftr_btm p {
            width: 85%;
            margin-bottom: 0;
            color: #ffffff;
            font-size: 0.75rem;
            line-height: 1.4;
            letter-spacing: 0.2px;
            font-family: "Manrope", sans-serif;
            font-weight: normal;
            -webkit-font-smoothing: antialiased;
        }

        #footer-link {
            font-size: 0.75rem;
            line-height: 1.4;
            letter-spacing: 0.2px;
            font-weight: 400;
            color: #fff;
            font-family: "Manrope", sans-serif;
        }

        .site-footer .ftr_btm h6 {
            color: #ffffff;
            font-weight: 700;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .site-footer .ftr_btm {
            padding-top: 2.2rem;
            font-size: 13px;
            padding-bottom: 3rem;
        }

        .site-footer .ftr_btm span {
            font-family: "Manrope", sans-serif;
            margin-bottom: 0;
            color: #ffffff;
            font-size: 0.82rem;
            text-align: right;
            display: block;
            font-family: 'Manrope', sans-serif;
            -webkit-font-smoothing: antialiased;
        }

        .whitex a {
            color: #fff !important;
        }

        h6 a {
            color: #fff;
        }
    </style>



    <footer class="site-footer" id="checkout-footer">
        <div class="container">
            <div class="row">
                <div class="row ftr_btm">
                    <div class="col-md-9">
                        <h6><a href="<?= $base_url ?? '' ?>/privacy-policy" class="link-style-topbar">Privacy Policy</a></h6>
                        <p class="whitex"><?= $brand_name ?? '' ?> is a technology company. We are not a law or financial firm, nor can we offer official legal or financial advice. What you see on our website, and any of our communication over email, Whatsapp, Slack, SMS, Zoom call, Intercom, social media and any other forms of communication is purely for general and educational matters, and should not be taken as official legal or financial advice. By using our website and service, you are explicitly accepting our <a style="    text-decoration: underline;" href="<?= $base_url ?? '' ?>/terms-of-service">Terms of Service</a>, <a style="text-decoration: underline;" href="<?= $base_url ?? '' ?>/privacy-policy">Privacy Policy</a>, and Data Processing Addendum.</p>
                    </div>
                    <div class="col-md-3">
                        <span>© Copyright <?= date('Y') ?> <?= $brand_name ?? '' ?></span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    
    
    
    
    
    
    
    
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
