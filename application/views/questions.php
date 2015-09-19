<html>

<script type="text/javascript">
    /**
     * Created by Ershadi on 9/19/2015.
     */
    var loadDistricts = function (value) {
        if (value == "Southern") {
            var districtSelect = document.getElementById("districtSelect");
            districtSelect.options.length = 0;
            var districtsArray = ["Galle", "Hambanthota", "Matara"];

            for (var i = 0; i < districtsArray.length; i++) {
                var opt = districtsArray[i];
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = opt;
                districtSelect.appendChild(el);
            }
        } else {
            districtSelect.options.length = 0;
        }
    }

    var loadPoliceDevisions = function (value) {
        if (value == "Hambanthota") {
            var policeStationSelect = document.getElementById("policeStationSelect");
            policeStationSelect.options.length = 0;
            var policeStationsArray = ["Embilipitiya", "Tangalle", "Lunugamwehera", "Katuwana"];

            for (var i = 0; i < policeStationsArray.length; i++) {
                var opt = policeStationsArray[i];
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = opt;
                policeStationSelect.appendChild(el);
            }
        } else {
            policeStationSelect.options.length = 0;
        }
    }

</script>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        $(function () {

            function swapDivs(tohide, toshow) {
                $("#" + tohide).hide();
                $("#" + toshow).show();
            }

            $('button').click(function () {

                //when police is selected and next clicked
                if ($(this).attr('id') == "policeSelectedNextBtn") {
                    swapDivs("q1police", "q2complaintype");
                }

                //when complain type is entered
                if ($(this).attr('id') == "complaintypebtn") {
                    swapDivs("q2complaintype", "writtendowndiv");
                }

                //if the complain is written down
                if ($(this).attr('id') == "yeswrittenbtn") {
                    swapDivs("writtendowndiv", "howlongdiv");
                }

                //if complain is not written
                if ($(this).attr('id') == "notwrittenbtn") {
                    swapDivs("writtendowndiv", "efficiantdev");
                }


                //how long taken for the complain
                if ($(this).attr('id') == "howlongbtn") {
                    swapDivs("howlongdiv", "yourlangdiv");
                }

                //your language?
                if ($(this).attr('id') == "yourlangyesbtn") {
                    swapDivs("yourlangdiv", "yourlangyesdiv");
                }

                //your language no menu
                if ($(this).attr('id') == "yourlangnobtn") {
                    swapDivs("yourlangdiv", "translatordiv");
                }

                //translator menu
                if ($(this).attr('id') == "translatorbtn") {
                    swapDivs("translatordiv", "womenchilddev");
                }

                //your language yes menu
                if ($(this).attr('id') == "yourlangyesmenubtn") {
                    swapDivs("yourlangyesdiv", "womenchilddev");
                }

                //women child menu
                if ($(this).attr('id') == "womenchildbtn") {
                    swapDivs("womenchilddev", "medicalreq");
                }

                //if medical assistant needed
                if ($(this).attr('id') == "medicalreqyes") {
                    swapDivs("medicalreq", "medicaldev");
                }

                //medical assistance not needed
                if ($(this).attr('id') == "medicalreqbtn") {
                    swapDivs("medicalreq", "efficiantdev");
                }

                //medical service menu
                if ($(this).attr('id') == "medicaldevbtn") {
                    swapDivs("medicaldev", "efficiantdev");
                }

                //efficient menu
                if ($(this).attr('id') == "efficientbtn") {
                    swapDivs("efficiantdev", "friendlydev");
                }

                //friendly menu
                if ($(this).attr('id') == "friendlybtn") {
                    swapDivs("friendlydev", "intimidatedev");

                }

                //intimidate menu
                if ($(this).attr('id') == "intimidatebtn") {
                    swapDivs("intimidatedev", "humiliatedev");

                }

                //intimidate menu
                if ($(this).attr('id') == "humiliatebtn") {
                    swapDivs("humiliatedev", "thankyoudev");

                }

            })


        });


    </script>

    <style type="text/css">@charset "UTF-8";
        [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak, .ng-hide {
            display: none !important;
        }

        ng\:form {
            display: block;
        }

        .ng-animate-start {
            clip: rect(0, auto, auto, 0);
            -ms-zoom: 1.0001;
        }

        .ng-animate-active {
            clip: rect(-1px, auto, auto, 0);
            -ms-zoom: 1;
        }</style>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Bootply snippet - Bootstrap </title>
    <meta name="generator" content="Bootply">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap  example snippet for Bootstrap.">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>

    <!-- CSS code from Bootply.com editor -->

    <style type="text/css">
        @import url(http://fonts.googleapis.com/css?family=Antic+Slab);

        html, body {
            height: 100%;
        }

        h1 {
            font-family: 'Antic Slab', serif;
            font-size: 80px;
            color: #DDCCEE;
        }

        .lead {
            color: #DDCCEE;
        }

        /* Custom container */
        .container-full {
            margin: 0 auto;
            width: 100%;
            min-height: 100%;
            background-color: #110022;
            color: #eee;
            overflow: hidden;
        }

        .container-full a {
            color: #efefef;
            text-decoration: none;
        }

        .v-center {
            margin-top: 7%;
        }

    </style>


</head>

<!-- HTML code from Bootply.com editor -->

<body>

<div class="container-full details">

    <div class="row" id="q1police">

        <div class="col-lg-12 text-center v-center">

            <p class="lead" data-i18n="details.province.question"></p>

            <div class="input-group input-group-lg col-sm-offset-4 col-sm-4">
                <select class="form-control" id="provinceSelect" onclick="loadDistricts(this.value)">
                    <option data-i18n="details.province.province1"></option>
                    <option data-i18n="details.province.province2"></option>
                    <option data-i18n="details.province.province3"></option>
                    <option data-i18n="details.province.province4"></option>
                    <option value="Southern" data-i18n="details.province.province5"></option>
                </select>
            </div>

            <br><br>

            <p class="lead" data-i18n="details.district.question"></p>

            <div class="input-group input-group-lg col-sm-offset-4 col-sm-4">
                <select class="form-control" id="districtSelect" onclick="loadPoliceDevisions(this.value)">
                </select>
            </div>

            <br><br>

            <p class="lead" data-i18n="details.questions.question1"></p>

            <div class="input-group input-group-lg col-sm-offset-4 col-sm-4">
                <select class="form-control" id="policeStationSelect">
                </select>


            </div>
            <br><br>

            <div class="input-group input-group-lg col-sm-offset-4 col-sm-4">
                <button id="policeSelectedNextBtn" value="ooi" class="btn btn-primary btn-lg btn-block"
                        toshow="q2complaintype" tohide="q1police">Next
                </button>
            </div>

            <br><br>


        </div>
    </div>

    <!-- PAGE 2 -->

    <div id="q2complaintype" class="row" style="display: none;">

        <div class="col-lg-12 text-center v-center">

            <p class="lead" data-i18n="details.questions.question2.value"></p>
            <br>

            <div class="container-fluid">
                <button id="complaintypebtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question2.answers.answer1"></button>
                <br>
                <button id="complaintypebtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question2.answers.answer2"></button>
                <br>
                <button id="complaintypebtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question2.answers.answer3"></button>
                <br>
                <button id="complaintypebtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question2.answers.answer4"></button>
                <br>
                <button id="complaintypebtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question2.answers.answer5"></button>
                <br>
                <button id="complaintypebtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question2.answers.answer6"></button>
                <br>
                <button id="complaintypebtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question2.answers.answer7"></button>
                <br>
            </div>

        </div>

    </div>
    <!-- /row -->

    <!-- PAGE 3-->

    <div class="row" id="writtendowndiv" style="display: none;">

        <div class="col-lg-12 text-center v-center">

            <p class="lead" data-i18n="details.questions.question3.value"></p>
            <br>

            <div class="container-fluid">
                <button id="yeswrittenbtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question3.answers.answer1"></button>
                <br>
                <button id="notwrittenbtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question3.answers.answer2"></button>
            </div>

        </div>

    </div>
    <!-- /row -->

    <!-- PAGE 4 IF YES COMPLAIN WRITTEN DOWN -->

    <div id="howlongdiv" class="row" style="display: none;">

        <div class="col-lg-12 text-center v-center">

            <p class="lead" data-i18n="details.questions.question4.value"></p>
            <br>

            <div class="container-fluid">
                <button id="howlongbtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question4.answers.answer1"></button>
                <br>
                <button id="howlongbtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question4.answers.answer2"></button>
                <br>
                <button id="howlongbtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question4.answers.answer3"></button>
                <br>
                <button id="howlongbtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question4.answers.answer4"></button>
                <br>
            </div>

        </div>

    </div>
    <!-- /row -->

    <!-- PAGE 5  WAS IT RECORDED IN YOUR LANGUAGE -->

    <div id="yourlangdiv" class="row" style="display: none;">

        <div class="col-lg-12 text-center v-center">

            <p class="lead" data-i18n="details.questions.question5.value"></p>
            <br>

            <div class="container-fluid">
                <button id="yourlangyesbtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question5.answers.answer1.value"></button>
                <br>
                <button id="yourlangnobtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question5.answers.answer2.value"></button>
            </div>

        </div>

    </div>

    <!-- PAGE 5 NO -->

    <div id="translatordiv" class="row" style="display: none;">

        <div class="col-lg-12 text-center v-center">

            <p class="lead" data-i18n="details.questions.question5.answers.answer2.option1.value"></p>
            <br>

            <div class="container-fluid">
                <button id="translatorbtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question5.answers.answer2.option1.answer1"></button>
                <br>
                <button id="translatorbtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question5.answers.answer2.option1.answer2"></button>
            </div>

        </div>

    </div>
    <!-- /row -->

    <!-- PAGE 5 YOUR LANGUAGE YES -->

    <div id="yourlangyesdiv" class="row" style="display: none;">
        3
        <div class="col-lg-12 text-center v-center">

            <p class="lead" data-i18n="details.questions.question5.answers.answer1.value"></p>
            <br>

            <div class="container-fluid">
                <button id="yourlangyesmenubtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question5.answers.answer1.option1"></button>
                <br>
                <button id="yourlangyesmenubtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question5.answers.answer1.option2"></button>
                <br>
                <button id="yourlangyesmenubtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question5.answers.answer1.option3"></button>
                <br>
                <button id="yourlangyesmenubtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question5.answers.answer1.option4"></button>
            </div>

        </div>

    </div>
    <!-- /row -->


    <!-- PAGE 6 WOMEN CHILD -->
    <div id="womenchilddev" class="row" style="display: none;">

        <div class="col-lg-12 text-center v-center">

            <p class="lead" data-i18n="details.questions.question6.value"></p>
            <br>

            <div class="container-fluid">
                <button id="womenchildbtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question6.answers.answer1"></button>
                <br>
                <button id="womenchildbtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question6.answers.answer2"></button>
                <br>
                <button id="womenchildbtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question6.answers.answer3"></button>
            </div>

        </div>

    </div>
    <!-- /row -->

    <!-- MEDICAL SERVICES -->

    <div id="medicalreq" style="display: none;" class="row">

        <div class="col-lg-12 text-center v-center">

            <p class="lead" data-i18n="details.questions.question7.value"></p>
            <br>

            <div class="container-fluid">
                <button id="medicalreqbtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question7.answers.answer1"></button>
                <br>
                <button id="medicalreqyes" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question7.answers.answer2.value"></button>
                <br>
                <button id="medicalreqbtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question7.answers.answer3"></button>
            </div>

        </div>

    </div>
    <!-- /row -->

    <!-- MEDICAL SERVICES NEEDED -->

    <div id="medicaldev" style="display: none;" class="row">

        <div class="col-lg-12 text-center v-center">

            <p class="lead" data-i18n="details.questions.question7.value"></p>
            <br>

            <div class="container-fluid">

                <button id="medicaldevbtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question7.answers.answer2.option1"></button>
                <br>
                <button id="medicaldevbtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question7.answers.answer2.option2"></button>
                <br>
                <button id="medicaldevbtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question7.answers.answer2.option3"></button>
                <br>
                <button id="medicaldevbtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question7.answers.answer2.option4"></button>
                <br>
            </div>

        </div>

    </div>
    <!-- /row -->

    <div id="efficiantdev" style="display: none;" class="row">

        <div class="col-lg-12 text-center v-center">

            <p class="lead" data-i18n="details.questions.question8..answer1.value"></p>
            <br>

            <div class="container-fluid">
                <button id="efficientbtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question8.answers.answer1.option1"></button>
                <br>
                <button id="efficientbtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question8.answers.answer1.option2"></button>
            </div>

        </div>

    </div>
    <!-- /row -->


    <div id="friendlydev" style="display: none;" class="row">

        <div class="col-lg-12 text-center v-center">

            <p class="lead" data-i18n="details.questions.question8.answers.answer2.value"></p>
            <br>

            <div class="container-fluid">
                <button id="friendlybtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question8.answers.answer2.option1"></button>
                <br>
                <button id="friendlybtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question8.answers.answer2.option2"></button>
            </div>

        </div>

    </div>
    <!-- /row -->

    <div id="intimidatedev" style="display: none;" class="row">

        <div class="col-lg-12 text-center v-center">

            <p class="lead" data-i18n="details.questions.question8.answers.answer3.value"></p>
            <br>

            <div class="container-fluid">
                <button id="intimidatebtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question8.answers.answer3.option1"></button>
                <br>
                <button id="intimidatebtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question8.answers.answer3.option2"></button>
            </div>

        </div>

    </div>
    <!-- /row -->

    <div id="humiliatedev" style="display: none;" class="row">

        <div class="col-lg-12 text-center v-center">

            <p class="lead" data-i18n="details.questions.question8.answers.answer4.value"></p>
            <br>

            <div class="container-fluid">
                <button id="humiliatebtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question8.answers.answer4.option1"></button>
                <br>
                <button id="humiliatebtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.questions.question8.answers.answer4.option2"></button>
            </div>

        </div>

    </div>
    <!-- /row -->


</div>
<!-- /container full -->


<script async="" src="//www.google-analytics.com/analytics.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.1/angular.min.js"></script>


<!-- JavaScript jQuery code from Bootply.com editor  -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-40413119-1', 'bootply.com');
    ga('send', 'pageview');
</script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/i18next/1.9.0/i18next.js"></script>

    <script type="text/javascript">
        var lang = localStorage.getItem('lan');
        var options = {
            lng: lang,
            resGetPath: "http://localhost/paminili.org/assets/locales/" + lang + "/translation.json"
        };
        i18n.init(options, function (t) {
            console.log(t);
            $(".details").i18n();
        });
    </script>


</body>
</html>