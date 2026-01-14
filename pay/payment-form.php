<?php
$payment_config = include 'config/payment_config.php';
$stripe_public_key = $payment_config['stripe']['public_key'];
$square_application_id = $payment_config['square']['application_id'];
$square_environment = $payment_config['square']['environment'];
$square_script = ($square_environment === 'sandbox')
    ? "https://sandbox.web.squarecdn.com/v1/square.js"
    : "https://web.squarecdn.com/v1/square.js";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EcomGeekz | Payment</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="payment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">

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
            
              #forms-logo {
            max-width: 70% !important;
        }
            .mb-4x{ display:none;}
            .mb-6xx{width:100%;}
            .mb-8x{width:100%; display:none; }
            .header_top { display:none; }
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

        .card-container-authorize {
            background: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .card-container-authorize input,
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
            max-width: 40%;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }
        
        .img-secure-checkout {
    width: 14%;
}


.secure-pay-checkout {
    display: flex;
    align-items: center;
    justify-content: space-around;
    background: #ffffff;
    border-radius: 7px 7px 0 0;
    padding: 1rem 0rem;
}

.secure-pay-checkout h2 {
    text-align: center;
    position: relative;
    color: #1a1a1a;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 1.6rem;
    padding-top: 8px;
}

.payable-mns {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #ffffff;
    border-radius: 7px;
    padding: 15px 1rem 7px 1rem;
    border-top: 0.1px solid #e0e0e0;
    border-bottom: 0.1px solid #e0e0e0;
}


.pay-img {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    gap: 6rem;
    background: #ffffff;
    border-radius: 7px 7px 0 0;
    padding: 0rem 1rem 1.5rem 1rem;
    margin-top: 1.5rem;
}

.img-cc-checkout {
    width: 33%;
}

.section-title.text-start.mb-3 {
    margin: 25px 0px 5px 0px !important;
}


.payable-mns #titlez, .payable-mns #item_descriptionz {display:none !important;}


.x-img {
    display: inline-block;
    max-width: 130px;
    text-align: right;
}

#ff1 p.g-titlex {
    display: flex;
    flex-wrap: nowrap;
    justify-content: space-between;
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
                                <img id="img-top-header" src="https://trademarkrepublic.com/assets/images/phone.svg" alt=""><a href="tel:+1 (346) 347-6394">+1 (346) 347-6394</a>
                            </li>
                            <li class="mes"><img id="img-top-header" src="https://trademarkrepublic.com/assets/images/mes.svg" alt=""><a href="mailto:support@ecomgeekz.com">support@ecomgeekz.com</a></li>
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
                            <img src="https://ecomgeekz.com/assets/images/logo.svg" alt="" class="img-fluid" id="forms-logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="sec-1">
        <div class="container">
            <div class="navbar__container">
                <!-- <a class="logoxx" href="javascript:;" aria-current="page"><img
                        src="https://webbuildify.com/assets/images/logo.png" loading="lazy" alt="Web Buildify"></a> -->
            </div>
            <div class="pg-top">
                <!-- <p class="title">CHECKOUT TERMINAL</p>
                <p class="sub-title">PAY & PROCEED</p> -->
            </div>
            <form id="ff1" name="ff1" method="post" action="" enctype="multipart/form-data"
                onsubmit="return false;" class="payment-form">
                <div class="row hidex">
                    <div class="col-12">
                        <div class="form-group">
                            <p class="g-titlex">Payment Information</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="">Description</label>
                            <input type="text" name="item_description" id="item_description" readonly
                                value=""
                                onkeyup="checkFieldBack(this);">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="">Amount: USD</label>
                            <input name="semail" type="hidden" value="">
                            <input name="tw" type="hidden" value="">
                            <input type="text" name="amount" id="amount" readonly
                                value="" step="any"
                                onkeyup="checkFieldBack(this);noAlpha(this);" onkeypress="noAlpha(this);">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        
                        
                        
                        
                        
                        <div class="secure-pay-checkout">
                                <img src="images/secure-pay-white.jpg" class="img-secure-checkout" alt="">
                                <h2>Secure Payment Checkout</h2>
                            </div>
                        
                        
                         
                        
                        
                        <div class="payable-mns">
                                <h6> Total Payable </h6>
                                <span> <div class="amount-wrap">$<div id="duplicateDiv1"></div></span>
                            </div> 
                        
                        
                        
                        
                        
                        
                        
                        
                        <div class="form-group">
                            <p class="centerit"> <div id="titlez"></div></p>
                            <input class="hidex" type="text" name="titlex" id="titlex" readonly
                                value="">
                            <div class="clickx" onclick="showValue()"></div>
                           
                            </div>
                            
                            
                            
                         


                            <div class="section-title text-start"><div id="item_descriptionz"></div></div>
                            
                            
                         
                         
                            <script>
                                // function showValue() {
                                //     let amountValue = document.getElementById("amount").value;
                                //     // Update two separate locations
                                //     document.getElementById("duplicateDiv1").innerText = amountValue;
                                //     document.getElementById("duplicateDiv2").innerText = amountValue;
                                // }
                                // // Automatically show value when the page loads
                                // document.addEventListener("DOMContentLoaded", showValue);
                                // // Click the button every 1 second to update the values
                                // setInterval(() => {
                                //     document.querySelector(".clickx").click();
                                // }, 1000);








                                function showValue() {
    let amountValue = document.getElementById("amount").value;
    let titlexValue = document.getElementById("titlex").value;
    let item_descriptionValue = document.getElementById("item_description").value;

    
    
    // Update multiple locations
    document.getElementById("duplicateDiv1").innerText = amountValue;
    document.getElementById("duplicateDiv2").innerText = amountValue;
    document.getElementById("titlez").innerText = titlexValue;
    document.getElementById("item_descriptionz").innerText = item_descriptionValue;

}

// Automatically show value when the page loads
document.addEventListener("DOMContentLoaded", showValue);

// Click the button every 1 second to update the values
setInterval(() => {
    document.querySelector(".clickx").click();
}, 1000);








                            </script>





                        </div>
                    </div>
                    <div class="section-title text-start mb-3"><strong>Card Holder Name</strong></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 mb-6xx">
                        <div class="form-group">
                            <input type="text" placeholder="Email" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <input type="number" placeholder="Phone" name="phone_number" id="phone_number" required>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <!-- <label for="">First Name</label> -->
                            <input type="text" placeholder="First Name" name="fname" id="fname" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <!-- <label for="">Last Name</label> -->
                            <input type="text" placeholder="Last Name" name="lname"
                                id="lname" value="" required>
                        </div>
                    </div>
                </div>
                <hr class="divider mt-4 mb-4">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <!-- <p class="g-titlex">Payment</p> -->
                            <div class="section-title text-start"><strong>PAYMENT</strong><i class="fa-solid fa-lock mx-2" style="color: #A4ADB9;"></i></div>
                            <p class="g-titlex" style="font-size: 14px;"><strong>All transactions are secure and encrypted</strong> <img class="x-img" src="images/cc.png" /> </p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 hidex">
                        <div class="form-group radio-group">
                            <!-- <label class="d-block">I Have</label> -->
                            <div>
                                <!-- <input name="cctype" value="V" type="radio" id="visa"> -->
                                <label for="visa"><img class="img-fluid"
                                        src="images/visa.png"
                                        alt="visa"></label>
                            </div>
                            <div>
                                <!-- <input name="cctype" value="M" type="radio" id="master-card"> -->
                                <label for="master-card"><img class="img-fluid"
                                        src="images/master-card.png"
                                        alt="master-card"></label>
                            </div>
                            <div>
                                <!-- <input name="cctype" value="A" type="radio" id="american-express"> -->
                                <label for="american-express"><img class="img-fluid"
                                        src="images/american-express.png"
                                        alt="american-express"></label>
                            </div>
                            <div>
                                <!-- <input name="cctype" value="D" type="radio" id="discover"> -->
                                <label for="discover"><img class="img-fluid"
                                        src="images/discover.png"
                                        alt="discover"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="credit-card-box">
                            <div class="section-title d-flex justify-content-between mb-3"><span>Credit Card</span><i class="fa-solid fa-credit-card"></i></div>
                            <div id="payment-card-container">
                                <div id="card-container"></div>
                            </div>
                            <div id="card-container-easypay" class="card-container-easypay">
                                <input type="text" class="number " placeholder="Card Number" name="ccn"
                                    id="ccn"
                                    onkeyup="checkNumHighlight(this.value);checkFieldBack(this);noAlpha(this);"
                                    value="" onkeypress="checkNumHighlight(this.value);noAlpha(this);"
                                    onblur="checkNumHighlight(this.value);"
                                    onchange="checkNumHighlight(this.value);" maxlength="16">
                                <div class="card-input">
                                    <div class="card-info">
                                        <input type="text" id="expiry" name="expiry" placeholder="MM/YY" maxlength="5">
                                    </div>
                                    <div class="card-info">
                                        <input type="text" name="cvv" class="number" id="cvv" placeholder="CVV" maxlength="5">
                                    </div>
                                </div>
                            </div>
                            <div id="card-container-authorize" class="card-container-authorize">
                                <input
                                    type="text"
                                    class="number"
                                    id="cardNumber"
                                    name="cardNumber"
                                    placeholder="Card Number"
                                    onkeyup="formatCardNumber(this)"
                                    maxlength="19"
                                    required
                                />
                                <div class="card-input">
                                    <div class="card-info">
                                        <input 
                                            type="text" 
                                            id="expiryDate" 
                                            name="expiryDate" 
                                            placeholder="MM/YY" 
                                            onkeyup="formatExpiryDate(this)"
                                            maxlength="5"
                                            required
                                        />
                                    </div>
                                    <div class="card-info">
                                        <input
                                            type="text"
                                            id="cardCvv"
                                            name="cardCvv" 
                                            placeholder="CVV"
                                            onkeyup="formatCVV(this)"
                                            maxlength="4"
                                            required
                                        />
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 hidex">
                        <div class="form-group">
                            <label for="">Card Holder Name</label>
                            <input type="text" placeholder="Full Name" name="ccname" id="ccname">
                        </div>
                    </div>
                    <hr class="divider mt-4 mb-4">
                    <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group radio-group check-group">
                            <input type="checkbox" id="cc_terms" checked="checked">
                            <label>I agree to Terms and Conditions</label>
                        </div>
                    </div> -->
                    <div class="col-12">
                        <div class="captcha-box">
                            <style>
                                .g-recaptcha {
                                    margin: 25px 0px;
                                }

                                .captcha-box {
                                    display: none !important;
                                }
                            </style>
                            <!-- <div class="g-recaptcha" data-sitekey="6LfizeElAAAAAMS5v9694M1UNxNg1SP34eqQmIPf"
                                    required></div> -->
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                        <input type="hidden" name="process" value="yes" />
                        <input type="hidden" name="payment_gateway" value="" />
                        <input type="hidden" name="genId" id="genId" value="" />
                        <input type="hidden" name="_do_post" value="1" />
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <button id="pay_now" class="submit">Pay <div class="amount-wrap2">$<div id="duplicateDiv2"></div>
                            </div></button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <div id="loading-sp">
        <div id="load">
            Please Wait. Your transaction is processing...
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script src="terminal/js/ccvalidations.js"></script>
    <!-- Square Script -->
    <script type="text/javascript" src="<?php echo $square_script; ?>"></script>
    <!-- Stripe Script -->
    <script src="https://js.stripe.com/v3/"></script>
    <script>

        // Format card number with spaces
        function formatCardNumber(el) {
            el.value = el.value
                .replace(/\s/g, "")
                .replace(/(\d{4})/g, "$1 ")
                .trim()
                .slice(0, 19);
        };

        // Format expiry date
        function formatExpiryDate(el) {
            el.value = el.value
                .replace(/\D/g, "")           // remove non-digits
                .replace(/(\d{2})(\d)/, "$1/$2") // insert slash after 2 digits
                .slice(0, 5);                 // limit to MM/YY
        }
        // Auto-format CVV
        function formatCVV(el) {
            el.value = el.value
                .replace(/\D/g, "").slice(0, 4);
        };



        function checkFieldBack(fieldObj) {
            if (fieldObj.value != 0) {
                fieldObj.style.backgroundColor = '#F8F8F8';
            }
        }

        function noAlpha(obj) {
            reg = /[^0-9.,]/g;
            obj.value = obj.value.replace(reg, "");
        }
        $(document).ready(async function() {
            // Format Expiration Date (MM/YY) and validate against current date
            $('#expiry').on('input', function() {
                let value = $(this).val().replace(/\D/g, '').substring(0, 4);
                let currentYear = new Date().getFullYear().toString().slice(-2);
                let currentMonth = new Date().getMonth() + 1;

                if (value.length >= 2) {
                    let month = Math.min(12, Math.max(1, parseInt(value.substring(0, 2))));
                    value = month.toString().padStart(2, '0') + (value.length > 2 ? '/' + value.substring(2, 4) : '');
                }

                if (value.length === 5) {
                    let inputMonth = parseInt(value.substring(0, 2));
                    let inputYear = parseInt(value.substring(3, 5));

                    if (inputYear < parseInt(currentYear) || (inputYear === parseInt(currentYear) && inputMonth < currentMonth)) {
                        $('#expiration_error').text("You can't select an expired date.");
                        $(this).addClass('is-invalid');
                    } else {
                        $('#expiration_error').text("");
                        $(this).removeClass('is-invalid');
                    }
                }

                $(this).val(value);
                // validateForm();
            });

            var stripePublicKey = "<?php echo $stripe_public_key; ?>";
            var squareAppId = "<?php echo $square_application_id; ?>";
            var squareEnvironment = "<?php echo $square_environment; ?>";
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "timeOut": "3000"
            };
            $('#loading-sp').hide();
            $('#card-container-easypay').hide();
            $('#payment-card-container').hide();
            $('#card-container-authorize').hide();

            function validateForm() {
                let isValid = true;

                // Validate First Name
                const fname = $('#fname').val().trim();
                if (!fname) {
                    toastr.error("First Name is required.");
                    isValid = false;
                }

                // Validate Last Name
                const lname = $('#lname').val().trim();
                if (!lname) {
                    toastr.error("Last Name is required.");
                    isValid = false;
                }

                // Validate Address
                // const address = $('#address').val().trim();
                // if (!address) {
                //     toastr.error("Address is required.");
                //     isValid = false;
                // }

                // Validate City
                // const city = $('#city').val().trim();
                // if (!city) {
                //     toastr.error("City is required.");
                //     isValid = false;
                // }

                // Validate State
                // const state = $('#state').val();
                // if (!state) {
                //     toastr.error("State is required.");
                //     isValid = false;
                // }

                // Validate Zip/Postal Code
                // const zip = $('#zip').val().trim();
                // if (!zip) {
                //     toastr.error("Zip/Postal Code is required.");
                //     isValid = false;
                // } else if (!/^\d{5}(-\d{4})?$/.test(zip)) {
                //     toastr.error("Invalid Zip/Postal Code format.");
                //     isValid = false;
                // }

                // Validate Phone number
                const phone_number = $('#phone_number').val().trim();
                if (!phone_number) {
                    toastr.error("Phone number is required.");
                    isValid = false;
                }

                // Validate Email
                const email = $('#email').val().trim();
                if (!email) {
                    toastr.error("Email is required.");
                    isValid = false;
                } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                    toastr.error("Invalid Email format.");
                    isValid = false;
                }

                // Validate Card Holder Name
                // const ccname = $('#ccname').val().trim();
                // if (!ccname) {
                //     toastr.error("Card Holder Name is required.");
                //     isValid = false;
                // }

                // Validate Terms and Conditions
                // const termsChecked = $('#cc_terms').is(':checked');
                // if (!termsChecked) {
                //     toastr.error("You must agree to the Terms and Conditions.");
                //     isValid = false;
                // }

                return isValid;
            }

            function validateCardDetails() {
                let isValid = true;

                // Get input values
                const cardNumber = $('#ccn').val().replace(/\s+/g, ''); // Remove spaces
                const expiry = $('#expiry').val().trim();
                const cvv = $('#cvv').val().trim();

                // Validate Card Number (Luhn Algorithm & Length)
                if (!cardNumber || !/^\d{13,19}$/.test(cardNumber) || !luhnCheck(cardNumber)) {
                    toastr.error("Invalid Card Number.");
                    isValid = false;
                }

                // Detect Card Type (Visa, MasterCard, Amex, etc.)
                const cardType = getCardType(cardNumber);
                if (!cardType) {
                    toastr.error("Unsupported Card Type.");
                    isValid = false;
                }

                // Validate Expiry Month
                if (!expiry || !/^\d{2}\/\d{2}$/.test(expiry)) {
                    toastr.error("Invalid Expiry Format. Use MM/YY.");
                    isValid = false;
                } else {
                    let [month, year] = expiry.split('/').map(num => parseInt(num, 10));
                    let currentYear = new Date().getFullYear() % 100; // Last two digits of the year
                    let currentMonth = new Date().getMonth() + 1;

                    if (month < 1 || month > 12) {
                        toastr.error("Invalid Month. Use 01-12.");
                        isValid = false;
                    }

                    if (year < currentYear || (year === currentYear && month < currentMonth)) {
                        toastr.error("Card is expired.");
                        isValid = false;
                    }
                }

                // Validate CVV based on card type (3 digits for Visa/MasterCard, 4 for Amex)
                if (!cvv || !/^\d{3,4}$/.test(cvv) || (cardType === 'amex' && cvv.length !== 4) || (cardType !== 'amex' && cvv.length !== 3)) {
                    toastr.error("Invalid CVV.");
                    isValid = false;
                }

                return isValid;
            }

            function validateAuthorizeCardDetails() {
                let isValid = true;

                // Get input values
                const cardNumber = $('#cardNumber').val().replace(/\s+/g, ''); // Remove spaces
                const expiry = $('#expiryDate').val().trim();
                const cvv = $('#cardCvv').val().trim();

                // Validate Card Number (Luhn Algorithm & Length)
                const cleanedCardNumber = cardNumber.replace(/\s/g, "");
                if (!cardNumber || !/^\d{16}$/.test(cleanedCardNumber) || !luhnCheck(cardNumber)) {
                    toastr.error("Valid card number is required (16 digits)");
                    isValid = false;
                }

                // Validate Expiry Month
                if (!expiry || !/^\d{2}\/\d{2}$/.test(expiry)) {
                    toastr.error("Invalid Expiry Format. Use MM/YY.");
                    isValid = false;
                } else {
                    let [month, year] = expiry.split('/').map(num => parseInt(num, 10));
                    let currentYear = new Date().getFullYear() % 100; // Last two digits of the year
                    let currentMonth = new Date().getMonth() + 1;

                    if (month < 1 || month > 12) {
                        toastr.error("Invalid Month. Use 01-12.");
                        isValid = false;
                    }

                    if (year < currentYear || (year === currentYear && month < currentMonth)) {
                        toastr.error("Card is expired.");
                        isValid = false;
                    }
                }

                // Validate CVV based on card type (3 digits for Visa/MasterCard, 4 for Amex)
                if (!cvv || !/^\d{3,4}$/.test(cvv)) {
                    toastr.error("Invalid CVV.");
                    isValid = false;
                }

                return isValid;
            }

            // Luhn Algorithm for card number validation
            function luhnCheck(num) {
                let sum = 0;
                let alternate = false;
                for (let i = num.length - 1; i >= 0; i--) {
                    let digit = parseInt(num[i], 10);
                    if (alternate) {
                        digit *= 2;
                        if (digit > 9) digit -= 9;
                    }
                    sum += digit;
                    alternate = !alternate;
                }
                return sum % 10 === 0;
            }

            // Detect card type (Visa, MasterCard, Amex, etc.)
            function getCardType(cardNumber) {
                const patterns = {
                    visa: /^4\d{12,18}$/, // Visa: Starts with 4, 13-19 digits
                    mastercard: /^5[1-5]\d{14}$/, // MasterCard: Starts with 51-55, 16 digits
                    amex: /^3[47]\d{13}$/, // Amex: Starts with 34 or 37, 15 digits
                    discover: /^6(?:011|5\d{2})\d{12}$/, // Discover: Starts with 6011, 65, 16 digits
                    diners: /^3(?:0[0-5]|[68]\d)\d{11}$/, // Diners Club: Various, 14 digits
                    jcb: /^(?:2131|1800|35\d{3})\d{11}$/ // JCB: Various, 16-19 digits
                };

                for (const type in patterns) {
                    if (patterns[type].test(cardNumber)) {
                        return type;
                    }
                }
                return null;
            }

            // **Step 1: Get `payment_code` from URL**
            const urlParams = new URLSearchParams(window.location.search);
            const paymentCode = urlParams.get('payment_code');
            console.log("Payment Code:", paymentCode);
            var paymentGateway = '';

            if (!paymentCode) {
                console.error("Payment code is missing");
                toastr.error("Invalid Payment Code. Please check your link.");
                return;
            }

            // **Step 2: Fetch Data from `get-data-api.php`**
            $.ajax({
                url: 'get-data-api.php',
                type: 'GET',
                data: {
                    payment_code: paymentCode
                },
                success: function(response) {
                    console.log("Server Response:", response);

                    let res;
                    try {
                        res = typeof response === 'object' ? response : JSON.parse(response);
                    } catch (e) {
                        console.error("Failed to parse response:", response);
                        toastr.error("Error fetching payment details.");
                        return;
                    }

                    if (res.status === 'success') {
                        // 🔥 NEW: Check if payment is already paid
                        if (res.data.is_paid === true || res.data.is_paid == "1") {

                            window.location.href = "payment-already-paid.php?payment_code=" + paymentCode;

                            return; // stop execution
                        }

                        
                        // Populate form fields with fetched data
                        $("#genId").val(res.data.payment_id);
                      //  $("#email").val(res.data.customer_email);
                     //   $("#fname").val(res.data.customer_name);
                        $("#amount").val(res.data.package_amount);
                        $("#item_description").val(res.data.notes);
                        $("#payment_gateway").val(res.data.payment_gateway);
                        
                        $("#phone_number").val(res.data.phone_number);
                        $("#titlex").val(res.data.title);

                        paymentGateway = res.data.payment_gateway;
                        if (paymentGateway === "1") {
                            $('#card-container-easypay').hide();
                            $('#card-container-authorize').hide();
                            $('#payment-card-container').show();
                            initializeStripe();
                        } else if (paymentGateway === "2") {
                            $('#card-container-easypay').hide();
                            $('#card-container-authorize').hide();
                            $('#payment-card-container').show();
                            initializeSquare();
                        } else if (paymentGateway === "3") {
                            $('#card-container-easypay').show();
                            $('#card-container-authorize').hide();
                            $('#payment-card-container').hide();
                        } else if (paymentGateway === "4") {
                            $('#card-container-easypay').hide();
                            $('#payment-card-container').hide();
                            $('#card-container-authorize').show();
                        } else {
                            $('#pay_now').attr('disabled', true);
                            toastr.error("Invalid Payment Gateway kk");
                            return;
                        }
                    } else {
                        toastr.error("Error: " + res.message);
                    }
                },
                error: function(xhr) {
                    console.error("Errors:", xhr);
                    toastr.error("Error fetching data: " + xhr.responseText);
                }
            });

            // **Stripe Initialization**
            var stripe, card;
            async function initializeStripe() {
                stripe = Stripe(stripePublicKey); //use your live stripe public key
                var elements = stripe.elements();
                card = elements.create('card');
                card.mount('#card-container');
            }

            // **Square Initialization**
            var squareCard; // Store globally
            async function initializeSquare() {
                try {
                    squarePayments = Square.payments(squareAppId, squareEnvironment); //use your live square app key and replace sandbox to production
                    squareCard = await squarePayments.card(); // Store the card instance
                    await squareCard.attach('#card-container');
                } catch (error) {
                    console.error("Square Initialization Error:", error);
                    toastr.error("Failed to initialize Square Payments.");
                }
            }

            // **Payment Form Submission**
            $('#ff1').on('submit', async function(e) {
                e.preventDefault();
                if (!validateForm()) {
                    return; // Stop submission if validation fails
                }
                $('#loading-sp').show();
                $('#loader').show();

                // **Step 1: Tokenize Card**
                if (paymentGateway === "1") {
                    const {
                        token,
                        error
                    } = await stripe.createToken(card);
                    if (error) {
                        toastr.error("Payment Failed: " + error.message);
                        $('#loader').hide();
                        $('#loading-sp').hide();
                        return;
                    }

                    var formData = $("#ff1").serializeArray();
                    formData.push({
                        name: "token",
                        value: token.id
                    });

                    $.ajax({
                        url: 'stripe_payment.php',
                        type: 'POST',
                        data: $.param(formData),
                        success: function(response) {
                            let res;
                            try {
                                res = typeof response === 'object' ? response : JSON.parse(response);
                            } catch (e) {
                                toastr.error("Error processing payment. Try again.");
                                return;
                            }

                            if (res.success) {
                                toastr.success("Payment Successful");
                                window.location.href = "thankyou.php"; // Redirect instead of reload
                            } else {
                                toastr.error("Error Occurred: " + res.message);
                            }
                        },
                        error: function(xhr) {
                            toastr.error("Error: " + xhr.responseText);
                            $('#loading-sp').hide();
                        },
                        complete: function() {
                            $('#loader').hide();
                            $('#loading-sp').hide();
                        }
                    });

                } else if (paymentGateway === "2") {
                    if (!squareCard) {
                        toastr.error("Payment method is not initialized. Please refresh and try again.");
                        $('#loading-sp').hide();
                        return;
                    }

                    try {
                        const result = await squareCard.tokenize(); // Use stored instance
                        if (result.status !== 'OK') {
                            toastr.error("Payment Failed: " + result.errors[0].message);
                            $('#loader').hide();
                            $('#loading-sp').hide();
                            return;
                        }

                        var formData = $("#ff1").serializeArray();
                        formData.push({
                            name: "token",
                            value: result.token
                        });

                        $.ajax({
                            url: 'payment.php',
                            type: 'POST',
                            data: $.param(formData),
                            success: function(response) {
                                let res;
                                try {
                                    res = typeof response === 'object' ? response : JSON.parse(response);
                                } catch (e) {
                                    toastr.error("Error processing payment. Try again.");
                                    return;
                                }

                                if (res.success) {
                                    toastr.success("Payment Successful");
                                    window.location.href = "thankyou.php"; // Redirect
                                } else {
                                    toastr.error("Error Occurred: " + res.message);
                                }
                            },
                            error: function(xhr) {
                                toastr.error("Error: " + xhr.responseText);
                            },
                            complete: function() {
                                $('#loader').hide();
                                $('#loading-sp').hide();
                            }
                        });

                    } catch (error) {
                        console.error("Square Payment Error:", error);
                        toastr.error("An error occurred while processing the payment.");
                        $('#loading-sp').hide();
                    }

                } else if (paymentGateway === "3") {
                    if (!validateCardDetails()) {
                        toastr.error("Please Correct Card Details.");
                        $('#loading-sp').hide();
                        return;
                    }

                    try {

                        var formData = $("#ff1").serializeArray();

                        $.ajax({
                            url: 'easypay_payment.php',
                            type: 'POST',
                            data: $.param(formData),
                            success: function(response) {
                                let res;
                                try {
                                    res = typeof response === 'object' ? response : JSON.parse(response);
                                } catch (e) {
                                    toastr.error("Error processing payment. Try again.");
                                    return;
                                }

                                if (res.success) {
                                    toastr.success("Payment Successful");
                                    window.location.href = "thankyou.php"; // Redirect
                                } else {
                                    toastr.error("Error Occurred: " + res.message);
                                    console.log(res);
                                }
                            },
                            error: function(xhr) {
                                toastr.error("Error: " + xhr.responseText);
                            },
                            complete: function() {
                                $('#loader').hide();
                                $('#loading-sp').hide();
                            }
                        });

                    } catch (error) {
                        console.error("Square Payment Error:", error);
                        toastr.error("An error occurred while processing the payment.");
                        $('#loading-sp').hide();
                    }

                } else if (paymentGateway === "4") {
                    if (!validateAuthorizeCardDetails()) {
                        toastr.error("Please Correct Card Details.");
                        $('#loading-sp').hide();
                        return;
                    }

                    try {

                        var formData = $("#ff1").serializeArray();

                        $.ajax({
                            url: 'authorize_payment.php',
                            type: 'POST',
                            data: $.param(formData),
                            success: function(response) {
                                let res;
                                try {
                                    res = typeof response === 'object' ? response : JSON.parse(response);
                                } catch (e) {
                                    toastr.error("Error processing payment. Try again.");
                                    return;
                                }

                                if (res.success) {
                                    toastr.success("Payment Successful");
                                    window.location.href = "thankyou.php?message="+res.message+"&transaction_id="+res.transaction_id; // Redirect
                                } else {
                                    toastr.error("Error Occurred: " + res.message);
                                    console.log(res);
                                }
                            },
                            error: function(xhr) {
                                toastr.error("Error: " + xhr.responseText);
                            },
                            complete: function() {
                                $('#loader').hide();
                                $('#loading-sp').hide();
                            }
                        });

                    } catch (error) {
                        console.error("Square Payment Error:", error);
                        toastr.error("An error occurred while processing the payment.");
                        $('#loading-sp').hide();
                    }

                } else {
                    toastr.error("Invalid Payment Gateway");
                    $('#loading-sp').hide();
                    return;
                }
            });
        });
    </script>
















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
                        <h6><a href="https://ecomgeekz.com/privacy-policy" class="link-style-topbar">Privacy Policy</a></h6>
                        <p class="whitex">EcomGeekz is a technology company. We are not a law or financial firm, nor can we offer official legal or financial advice. What you see on our website, and any of our communication over email, Whatsapp, Slack, SMS, Zoom call, Intercom, social media and any other forms of communication is purely for general and educational matters, and should not be taken as official legal or financial advice. By using our website and service, you are explicitly accepting our <a style="    text-decoration: underline;" href="https://ecomgeekz.com/terms-of-service">Terms of Service</a>, <a style="text-decoration: underline;" href="https://ecomgeekz.com/privacy-policy">Privacy Policy</a>, and Data Processing Addendum.</p>
                    </div>
                    <div class="col-md-3">
                        <span>© Copyright 2025 EcomGeekz</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>



</body>

</html>