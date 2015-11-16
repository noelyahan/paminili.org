<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <script type="text/javascript">
        var loadPoliceDevisions = function (value, lan) {
            var policeStationSelect = document.getElementById("policeStationSelect");
            policeStationSelect.options.length = 0;
            var policeStationsArray = ["Embilipitiya", "Tangalle", "Lunugamwehera", "Katuwana"];
            if (lan == 'sinhala') {
                policeStationsArray = ["??????????", "?????? ", "???????????? ", "?????"];
            } else if (lan == 'tamil') {
                policeStationsArray = ["???????ip?????", "?????????", "?????????????", "?????????"];
            }
            for (var i = 0; i < policeStationsArray.length; i++) {
                var opt = policeStationsArray[i];
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = opt;
                policeStationSelect.appendChild(el);
            }
        }
    </script>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Free Bootstrap Admin Template : Dream</title>
        <!-- Bootstrap Styles-->
        <link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet"/>
        <!-- FontAwesome Styles-->
        <link href="<?php echo base_url() ?>assets/css/font-awesome.css" rel="stylesheet"/>
        <!-- Custom Styles-->
        <link href="<?php echo base_url() ?>assets/css/custom-styles.css" rel="stylesheet"/>
        <!-- Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>
        $(function () {
            $("#thankyoudiv").hide();
            function swapDivs(tohide, toshow) {
                $("#" + tohide).hide();
                $("#" + toshow).show();
            }
            var post_data;
            var obj;
            $('button').click(function () {
                var value = $(this).attr('data-value');
                var score = $(this).attr('data-score');
                var questionNo = $(this).attr('data-qno');
                if (post_data == null) {
                    post_data = {};
                }
                if (obj == null) {
                    obj = new Object();
                }


                //when police is selected and next clicked
                if ($(this).attr('id') == "policeSelectedNextBtn") {
                    swapDivs("question1", "question3");
                    post_data["policestation"] = $("policeStationSelect").value;
                    obj.police_station_id = $("select[id='policeStationSelect'] option:selected").index() + 1;
                }

                //if the complain is written down
                if ($(this).attr('id') == "yeswrittenbtn") {
                    swapDivs("question3", "question4");
                    post_data["questions"]["isComplainNoted"] = {};
                    post_data["questions"]["isComplainNoted"]["answer"] = value;
                    post_data["questions"]["isComplainNoted"]["score"] = score;
                    obj.is_complain_written = value;
                }

                //if complain is not written
                if ($(this).attr('id') == "notwrittenbtn") {
                    swapDivs("question3", "question6");
                    post_data["questions"]["isComplainNoted"] = {};
                    post_data["questions"]["isComplainNoted"]["answer"] = value;
                    post_data["questions"]["isComplainNoted"]["score"] = score;
                    obj.is_complain_written = value;
                }

                //if yes, how long taken for the complain
                if ($(this).attr('id') == "howlongbtn") {
                    swapDivs("question4", "question5");
                    post_data["questions"]["complainTime"] = {};
                    post_data["questions"]["complainTime"]["answer"] = value;
                    post_data["questions"]["complainTime"]["score"] = score;
                    obj.complain_record_time = value;
                }

                //your language yes
                if ($(this).attr('id') == "yourlangyesbtn") {
                    swapDivs("question5", "question5yes");
                    post_data["questions"]["yourLanguage"] = {};
                    post_data["questions"]["yourLanguage"]["score"] = score;
                    post_data["questions"]["yourLanguage"]["answer"] = value;
                    obj.is_your_language = value;
                }

                //your language no menu
                if ($(this).attr('id') == "yourlangnobtn") {
                    swapDivs("question5", "question5no");
                    post_data["questions"]["yourLanguage"] = {};
                    post_data["questions"]["yourLanguage"]["score"] = score;
                    post_data["questions"]["yourLanguage"]["answer"] = value;
                    obj.is_your_language = value;
                }

                //translator menu
                if ($(this).attr('id') == "translatorbtn") {
                    swapDivs("question5no", "question6");
                    post_data["questions"]["isTranslatorAvailable"] = {}
                    post_data["questions"]["isTranslatorAvailable"]["score"] = score;
                    post_data["questions"]["isTranslatorAvailable"]["answer"] = value;
                    obj.is_your_language += "_" + value;
                }

                if ($(this).attr('id') == "yourlangyesmenubtn") {
                    swapDivs("question5yes", "question6");
                    post_data["questions"]["yourLanguage"] = {};
                    post_data["questions"]["yourLanguage"]["score"] = score;
                    post_data["questions"]["yourLanguage"]["answer"] = value;
                    obj.is_your_language = value;
                }

                //efficient menu
                if ($(this).attr('id') == "efficientbtn") {
                    swapDivs("question6", "question7");
                    post_data["questions"]["efficient"] = {};
                    post_data["questions"]["efficient"]["score"] = score;
                    post_data["questions"]["efficient"]["answer"] = value;
                    obj.efficient = value;
                }

                //friendly menu
                if ($(this).attr('id') == "intimidatebtn") {
                    swapDivs("question7", "question8");
                    post_data["questions"]["intimidate"] = {};
                    post_data["questions"]["intimidate"]["score"] = score;
                    post_data["questions"]["intimidate"]["answer"] = value;
                    obj.intimidating = value;
                }

                if ($(this).attr('id') == "friendlybtn") {
                    swapDivs("question8", "question9");
                    post_data["questions"]["friendly"] = {};
                    post_data["questions"]["friendly"]["score"] = score;
                    post_data["questions"]["friendly"]["answer"] = value;
                    obj.friendly = value;
                }

                if ($(this).attr('id') == "humilatebtn") {
                    swapDivs("question9", "question10");
                    post_data["questions"]["humilate"] = {};
                    post_data["questions"]["humilate"]["score"] = score;
                    post_data["questions"]["humilate"]["answer"] = value;
                    obj.humilating = value;
                }

                if ($(this).attr('id') == "rapebtn") {
                    swapDivs("question10", "question11");
                }

                if ($(this).attr('id') == "childabusebtn") {
                    swapDivs("question10", "question11");
                }

                if ($(this).attr('id') == "domesticviolencebtn") {
                    swapDivs("question10", "question11");
                }

                if ($(this).attr('id') == "question11btn") {
                    swapDivs("question11", "question12");
                    post_data["questions"]["femaleOfficer"] = {};
                    post_data["questions"]["femaleOfficer"]["score"] = score;
                    post_data["questions"]["femaleOfficer"]["answer"] = value;
                    obj.female_officer_provided = value;
                }

                if ($(this).attr('id') == "question12nobtn") {
                    swapDivs("question12", "thankyoudiv");
                    post_data["questions"]["jmoProvided"] = {};
                    post_data["questions"]["jmoProvided"]["score"] = score;
                    post_data["questions"]["jmoProvided"]["answer"] = value;
                    obj.jmo_provided = value;

                    calculateTotal();
                }

                if ($(this).attr('id') == "question12yesbtn") {
                    swapDivs("question12", "question12yes");
                    post_data["questions"]["jmoProvided"] = {};
                    post_data["questions"]["jmoProvided"]["score"] = score;
                    post_data["questions"]["jmoProvided"]["answer"] = value;
                    obj.jmo_provided = value;
                }

                if ($(this).attr('id') == "examinationtimebtn") {
                    swapDivs("question12yes", "thankyoudiv");
                    post_data["questions"]["examinationTime"] = {};
                    post_data["questions"]["examinationTime"]["score"] = score;
                    post_data["questions"]["examinationTime"]["answer"] = value;
                    obj.examination_time = value;

                    calculateTotal();
                }

                if ($(this).attr('id') == "sexualharassmentbtn") {
                    swapDivs("question10", "question11");
                }

                if ($(this).attr('id') == "theftbtn") {
                    swapDivs("question10", "question13");
                }

                if ($(this).attr('id') == "trafficoffencesbtn") {
                    swapDivs("question10", "question13");
                }

                if ($(this).attr('id') == "question13btn") {
                    swapDivs("question13", "thankyoudiv");
                    post_data["questions"]["policeOfficer"] = {};
                    post_data["questions"]["policeOfficer"]["score"] = score;
                    post_data["questions"]["policeOfficer"]["answer"] = value;
                    obj.police_officer = value;

                    calculateTotal();
                }

                if ($(this).attr('id') == "otherbtn") {
                    swapDivs("question10", "thankyoudiv");

                    calculateTotal();
                }
            });

            function calculateTotal() {
                var total = 0;
                $.each(post_data["questions"], function (i, item) {
                    if (parseInt(item.score) > 0) {
                        total += parseInt(item.score);
                    }
                });
                console.log("Your total is  : " + total);
                console.log(JSON.stringify(post_data))
                post_data["score"] = total;
                obj.score = total;
                $.get("http://localhost/paminili.org/Questioner/add", obj);
                $("#thankyoudiv").show();
            }
        });</script>



        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
            <meta charset="utf-8">
                <title>Paminili.org</title>
                <meta name="generator" content="Bootply">
                    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
                        <meta name="description" content="Bootstrap  example snippet for Bootstrap.">
                                <!--[if lt IE 9]>
                                <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
                                <![endif]-->
                                <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
                                    <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
                                        <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">
                                            <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
                                            </head>
                                            <body>
                                                <div id="wrapper">
                                                    <nav class="navbar navbar-default top-navbar" role="navigation">
                                                        <div class="navbar-header">
                                                            <a class="navbar-brand" href="<?php echo base_url() ?>">Paminili.org</a>
                                                        </div>

                                                        <ul class="nav navbar-top-links navbar-right">
                                                            <li>
                                                                <a href="<?php echo base_url() ?>">
                                                                    Home
                                                                </a>
                                                            </li>
                                                            <!-- /.dropdown -->
                                                            <li class="dropdown">
                                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                                                    View Statistics
                                                                </a>
                                                            </li>
                                                            <!-- /.dropdown -->
                                                            <li class="dropdown">
                                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                                                    About Us
                                                                </a>
                                                            </li>
                                                            <!-- /.dropdown -->
                                                            <li class="dropdown">
                                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                                                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-user">
                                                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                                                                    </li>
                                                                    <li><a href="#"><i class="fa fa-sign-in fa-fw"></i> Login</a>
                                                                    </li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="<?php echo base_url() ?>login/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                                                    </li>
                                                                </ul>
                                                                <!-- /.dropdown-user -->
                                                            </li>
                                                            <!-- /.dropdown -->
                                                        </ul>
                                                    </nav>
                                                    <!--    <div id="page-wrapper">-->
                                                    <div id="page-inner">
                                                        <div class="col-md-9">
                                                            <div class="panel panel-primary no-boder bg-color-blue panel-large-margin">
                                                                <div class="panel-body">
                                                                    <div class="container-full details">
                                                                        <div class="container-full">
                                                                            <div class="row">
                                                                                <div class="col-lg-12 text-center v-center">

                                                                                    <div class="container-full details">
                                                                                        <!-- PAGE 1 Select the Police Station -->
                                                                                        <div id="question1" class="row">
                                                                                            <div class="col-lg-12 text-center v-center">
                                                                                                <p class="lead" data-i18n="details.questions.question1"></p>
                                                                                                <div class="input-group input-group-lg col-sm-offset-4 col-sm-4">
                                                                                                    <select class="form-control" id="policeStationSelect">
                                                                                                        <option data-i18n="details.police_stations.station1" value="Embilipitiya"></option>
                                                                                                        <option data-i18n="details.police_stations.station2" value="Tamgalla"></option>
                                                                                                        <option data-i18n="details.police_stations.station3" value="Lunugamwehera"></option>
                                                                                                        <option data-i18n="details.police_stations.station4" value="Katuwana"></option>
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

                                                                                                                <!-- PAGE 2 Did the Police write down your complaint -->
                                                                                                                <div class="row" id="question3" style="display: none;">
                                                                                                                    <div class="col-lg-12 text-center v-center">
                                                                                                                        <p class="lead" data-i18n="details.questions.question3.value"></p>
                                                                                                                        <br>
                                                                                                                            <div class="container-fluid">
                                                                                                                                <button id="yeswrittenbtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                        data-score="10" data-value="Yes" data-qno="3"
                                                                                                                                        data-i18n="details.questions.question3.answers.answer1"></button>
                                                                                                                                <br>
                                                                                                                                    <button id="notwrittenbtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                            data-score="0" data-value="No" data-qno="3"
                                                                                                                                            data-i18n="details.questions.question3.answers.answer2"></button>
                                                                                                                            </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <!-- /row -->

                                                                                                                <!-- PAGE 3 IF YES COMPLAIN WRITTEN DOWN -->
                                                                                                                <div id="question4" class="row" style="display: none;">
                                                                                                                    <div class="col-lg-12 text-center v-center">
                                                                                                                        <p class="lead" data-i18n="details.questions.question4.value"></p>
                                                                                                                        <br>
                                                                                                                            <div class="container-fluid">
                                                                                                                                <button id="howlongbtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                        data-score="10" data-value="Within 10 minutes" data-qno="4"
                                                                                                                                        data-i18n="details.questions.question4.answers.answer1"></button>
                                                                                                                                <br>
                                                                                                                                    <button id="howlongbtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                            data-score="8" data-value="10-20 Minutes" data-qno="4"
                                                                                                                                            data-i18n="details.questions.question4.answers.answer2"></button>
                                                                                                                                    <br>
                                                                                                                                        <button id="howlongbtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                data-score="5" data-value="20-30 Minutes" data-qno="4"
                                                                                                                                                data-i18n="details.questions.question4.answers.answer3"></button>
                                                                                                                                        <br>
                                                                                                                                            <button id="howlongbtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                    data-score="0" data-value="More than 30 Minutes" data-qno="4"
                                                                                                                                                    data-i18n="details.questions.question4.answers.answer4"></button>
                                                                                                                                            <br>
                                                                                                                                                </div>
                                                                                                                                                </div>
                                                                                                                                                </div>
                                                                                                                                                <!-- /row -->

                                                                                                                                                <!-- PAGE 4  WAS IT RECORDED IN YOUR LANGUAGE -->
                                                                                                                                                <div id="question5" class="row" style="display: none;">
                                                                                                                                                    <div class="col-lg-12 text-center v-center">
                                                                                                                                                        <p class="lead" data-i18n="details.questions.question5.value"></p>
                                                                                                                                                        <br>
                                                                                                                                                            <div class="container-fluid">
                                                                                                                                                                <button id="yourlangyesbtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                        data-score="0" data-value="Yes" data-qno="5"
                                                                                                                                                                        data-i18n="details.questions.question5.answers.answer1.value"></button>
                                                                                                                                                                <br>
                                                                                                                                                                    <button id="yourlangnobtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                            data-score="0" data-value="No" data-qno="5"
                                                                                                                                                                            data-i18n="details.questions.question5.answers.answer2.value"></button>
                                                                                                                                                            </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>

                                                                                                                                                <!-- PAGE 5 YOUR LANGUAGE YES -->
                                                                                                                                                <div id="question5yes" class="row" style="display: none;">
                                                                                                                                                    <div class="col-lg-12 text-center v-center">
                                                                                                                                                        <p class="lead" data-i18n="details.questions.question5.answers.answer1.value"></p>
                                                                                                                                                        <br>
                                                                                                                                                            <div class="container-fluid">
                                                                                                                                                                <button id="yourlangyesmenubtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                        data-score="10" data-value="I read and signed it" data-qno="5"
                                                                                                                                                                        data-i18n="details.questions.question5.answers.answer1.option1"></button>
                                                                                                                                                                <br>
                                                                                                                                                                    <button id="yourlangyesmenubtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                            data-score="10" data-value="It was read to me and I signed" data-qno="5"
                                                                                                                                                                            data-i18n="details.questions.question5.answers.answer1.option2"></button>
                                                                                                                                                                    <br>
                                                                                                                                                                        <button id="yourlangyesmenubtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                data-score="0" data-value="It was not read but signed" data-qno="5"
                                                                                                                                                                                data-i18n="details.questions.question5.answers.answer1.option3"></button>
                                                                                                                                                                        <br>
                                                                                                                                                                            <button id="yourlangyesmenubtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                    data-score="0" data-value="It was neither read nor signed" data-qno="5"
                                                                                                                                                                                    data-i18n="details.questions.question5.answers.answer1.option4"></button>
                                                                                                                                                                            </div>
                                                                                                                                                                            </div>
                                                                                                                                                                            </div>
                                                                                                                                                                            <!-- /row -->

                                                                                                                                                                            <!-- PAGE 5 NO -->
                                                                                                                                                                            <div id="question5no" class="row" style="display: none;">
                                                                                                                                                                                <div class="col-lg-12 text-center v-center">
                                                                                                                                                                                    <p class="lead" data-i18n="details.questions.question5.answers.answer2.option1.value"></p>
                                                                                                                                                                                    <br>
                                                                                                                                                                                        <div class="container-fluid">
                                                                                                                                                                                            <button id="translatorbtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                                    data-score="10" data-value="Yes" data-qno="5"
                                                                                                                                                                                                    data-i18n="details.questions.question5.answers.answer2.option1.answer1"></button>
                                                                                                                                                                                            <br>
                                                                                                                                                                                                <button id="translatorbtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                                        data-score="0" data-value="No" data-qno="5"
                                                                                                                                                                                                        data-i18n="details.questions.question5.answers.answer2.option1.answer2"></button>
                                                                                                                                                                                        </div>
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                            <!-- /row -->

                                                                                                                                                                            <!-- PAGE 6 Efficiency -->
                                                                                                                                                                            <div id="question6" style="display: none;" class="row">
                                                                                                                                                                                <div class="col-lg-12 text-center v-center">
                                                                                                                                                                                    <p class="lead" data-i18n="details.questions.question6.answers.answer1.value"></p>
                                                                                                                                                                                    <br>
                                                                                                                                                                                        <div class="container-fluid">
                                                                                                                                                                                            <button id="efficientbtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                                    data-score="10" data-value="Yes" data-qno="6"
                                                                                                                                                                                                    data-i18n="details.questions.question6.answers.answer1.option1"></button>
                                                                                                                                                                                            <br>
                                                                                                                                                                                                <button id="efficientbtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                                        data-score="0" data-value="No" data-qno="6"
                                                                                                                                                                                                        data-i18n="details.questions.question6.answers.answer1.option2"></button>
                                                                                                                                                                                        </div>
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                            <!-- /row -->

                                                                                                                                                                            <div id="question7" style="display: none;" class="row">
                                                                                                                                                                                <div class="col-lg-12 text-center v-center">
                                                                                                                                                                                    <p class="lead" data-i18n="details.questions.question6.answers.answer2.value"></p>
                                                                                                                                                                                    <br>
                                                                                                                                                                                        <div class="container-fluid">
                                                                                                                                                                                            <button id="intimidatebtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                                    data-score="0" data-value="Yes" data-qno="7"
                                                                                                                                                                                                    data-i18n="details.questions.question6.answers.answer2.option1"></button>
                                                                                                                                                                                            <br>
                                                                                                                                                                                                <button id="intimidatebtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                                        data-score="10" data-value="No" data-qno="7"
                                                                                                                                                                                                        data-i18n="details.questions.question6.answers.answer2.option2"></button>
                                                                                                                                                                                        </div>
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                            <!-- /row -->

                                                                                                                                                                            <div id="question8" style="display: none;" class="row">
                                                                                                                                                                                <div class="col-lg-12 text-center v-center">
                                                                                                                                                                                    <p class="lead" data-i18n="details.questions.question6.answers.answer3.value"></p>
                                                                                                                                                                                    <br>
                                                                                                                                                                                        <div class="container-fluid">
                                                                                                                                                                                            <button id="friendlybtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                                    data-score="10" data-value="Yes" data-qno="8"
                                                                                                                                                                                                    data-i18n="details.questions.question6.answers.answer3.option1"></button>
                                                                                                                                                                                            <br>
                                                                                                                                                                                                <button id="friendlybtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                                        data-score="0" data-value="No" data-qno="8"
                                                                                                                                                                                                        data-i18n="details.questions.question6.answers.answer3.option2"></button>
                                                                                                                                                                                        </div>
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                            <!-- /row -->

                                                                                                                                                                            <div id="question9" style="display: none;" class="row">
                                                                                                                                                                                <div class="col-lg-12 text-center v-center">
                                                                                                                                                                                    <p class="lead" data-i18n="details.questions.question6.answers.answer4.value"></p>
                                                                                                                                                                                    <br>
                                                                                                                                                                                        <div class="container-fluid">
                                                                                                                                                                                            <button id="humilatebtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                                    data-score="0" data-value="Yes" data-qno="9"
                                                                                                                                                                                                    data-i18n="details.questions.question6.answers.answer4.option1"></button>
                                                                                                                                                                                            <br>
                                                                                                                                                                                                <button id="humilatebtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                                        data-score="10" data-value="No" data-qno="9"
                                                                                                                                                                                                        data-i18n="details.questions.question6.answers.answer4.option2"></button>
                                                                                                                                                                                        </div>
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                            <!-- /row -->

                                                                                                                                                                            <!-- complain category -->
                                                                                                                                                                            <div id="question10" class="row" style="display: none;">
                                                                                                                                                                                <div class="col-lg-12 text-center v-center">
                                                                                                                                                                                    <p class="lead" data-i18n="details.questions.question7.value"></p>
                                                                                                                                                                                    <br>
                                                                                                                                                                                        <div class="container-fluid">
                                                                                                                                                                                            <button id="rapebtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                                    data-score="0" data-value="Rape" data-qno="10"
                                                                                                                                                                                                    data-i18n="details.questions.question7.answers.answer1"></button>
                                                                                                                                                                                            <br>
                                                                                                                                                                                                <button id="childabusebtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                                        data-score="0" data-value="Child abuse" data-qno="10"
                                                                                                                                                                                                        data-i18n="details.questions.question7.answers.answer2"></button>
                                                                                                                                                                                                <br>
                                                                                                                                                                                                    <button id="domesticviolencebtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                                        data-score="0" data-value="Domestic Violence" data-qno="10"
                                                                                                                                                                                                        data-i18n="details.questions.question7.answers.answer3"></button>
                                                                                                                                                                                                    <br>
                                                                                                                                                                                                        <button id="sexualharassmentbtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                                        data-score="0" data-value="Sexual Harassment" data-qno="10"
                                                                                                                                                                                                        data-i18n="details.questions.question7.answers.answer4"></button>
                                                                                                                                                                                                        <br>
                                                                                                                                                                                                        <button id="theftbtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                                        data-score="0" data-value="Theft" data-qno="10"
                                                                                                                                                                                                        data-i18n="details.questions.question7.answers.answer5"></button>
                                                                                                                                                                                                        <br>
                                                                                                                                                                                                        <button id="trafficoffencesbtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                                        data-score="0" data-value="Traffic Offences" data-qno="10"
                                                                                                                                                                                                        data-i18n="details.questions.question7.answers.answer6"></button>
                                                                                                                                                                                                        <br>
                                                                                                                                                                                                        <button id="otherbtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                                        data-score="0" data-value="Other" data-qno="10"
                                                                                                                                                                                                        data-i18n="details.questions.question7.answers.answer7"></button>
                                                                                                                                                                                                        <br>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <!-- /row -->

                                                                                                                                                                                                        <!--Was there an officer from the Police Women’s and Children’s Bureau present to attend to your complaint?-->
                                                                                                                                                                                                        <div id="question11" class="row" style="display: none;">
                                                                                                                                                                                                        <div class="col-lg-12 text-center v-center">
                                                                                                                                                                                                        <p class="lead" data-i18n="details.questions.question8.value"></p>
                                                                                                                                                                                                        <br>
                                                                                                                                                                                                        <div class="container-fluid">
                                                                                                                                                                                                        <button id="question11btn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                                        data-score="10" data-value="Not applicable" data-qno="6"
                                                                                                                                                                                                        data-i18n="details.questions.question8.answers.answer1"></button>
                                                                                                                                                                                                        <br>
                                                                                                                                                                                                        <button id="question11btn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                                        data-score="0" data-value="Yes" data-qno="6"
                                                                                                                                                                                                        data-i18n="details.questions.question8.answers.answer2"></button>
                                                                                                                                                                                                        <br>
                                                                                                                                                                                                        <button id="question11btn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                                        data-score="2" data-value="No" data-qno="6"
                                                                                                                                                                                                        data-i18n="details.questions.question8.answers.answer3"></button>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <!-- /row -->

                                                                                                                                                                                                        <!--Were you taken to / facilitated to go to the JMO for a medical examination-->
                                                                                                                                                                                                        <div id="question12" class="row" style="display: none;">
                                                                                                                                                                                                        <div class="col-lg-12 text-center v-center">
                                                                                                                                                                                                        <p class="lead" data-i18n="details.questions.question9.value"></p>
                                                                                                                                                                                                        <br>
                                                                                                                                                                                                        <div class="container-fluid">
                                                                                                                                                                                                        <button id="question12nobtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                                        data-score="0" data-value="Not applicable" data-qno="6"
                                                                                                                                                                                                        data-i18n="details.questions.question9.answers.answer1"></button>
                                                                                                                                                                                                        <br>
                                                                                                                                                                                                        <button id="question12yesbtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                                        data-score="10" data-value="Yes" data-qno="6"
                                                                                                                                                                                                        data-i18n="details.questions.question9.answers.answer2.value"></button>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <!-- /row -->

                                                                                                                                                                                                        <div id="question12yes" class="row" style="display: none;">
                                                                                                                                                                                                        <div class="col-lg-12 text-center v-center">
                                                                                                                                                                                                        <p class="lead" data-i18n="details.questions.question9.answers.answer2.value"></p>
                                                                                                                                                                                                        <br>
                                                                                                                                                                                                        <div class="container-fluid">
                                                                                                                                                                                                        <button id="examinationtimebtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                                        data-score="10" data-value="Yes" data-qno="5"
                                                                                                                                                                                                        data-i18n="details.questions.question9.answers.answer2.option1"></button>
                                                                                                                                                                                                        <br>
                                                                                                                                                                                                        <button id="examinationtimebtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                                        data-score="6" data-value="No" data-qno="5"
                                                                                                                                                                                                        data-i18n="details.questions.question9.answers.answer2.option2"></button>
                                                                                                                                                                                                        <br>
                                                                                                                                                                                                        <button id="examinationtimebtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                                        data-score="3" data-value="No" data-qno="5"
                                                                                                                                                                                                        data-i18n="details.questions.question9.answers.answer2.option3"></button>
                                                                                                                                                                                                        <br>
                                                                                                                                                                                                        <button id="examinationtimebtn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                                        data-score="0" data-value="No" data-qno="5"
                                                                                                                                                                                                        data-i18n="details.questions.question9.answers.answer2.option4"></button>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        </div>

                                                                                                                                                                                                        <!--Did a Police officer visit the crime scene immediately / within an hour of your complaint?-->
                                                                                                                                                                                                        <div id="question13" style="display: none;" class="row">
                                                                                                                                                                                                        <div class="col-lg-12 text-center v-center">
                                                                                                                                                                                                        <p class="lead" data-i18n="details.questions.question10.value"></p>
                                                                                                                                                                                                        <br>
                                                                                                                                                                                                        <div class="container-fluid">
                                                                                                                                                                                                        <button id="question13btn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                                        data-score="10" data-value="Not applicable" data-qno="7"
                                                                                                                                                                                                        data-i18n="details.questions.question10.answers.answer1"></button>
                                                                                                                                                                                                        <br>
                                                                                                                                                                                                        <button id="question13btn" class="btn btn-primary btn-lg btn-block"
                                                                                                                                                                                                        data-score="0" data-value="Yes" data-qno="7"
                                                                                                                                                                                                        data-i18n="details.questions.question10.answers.answer2"></button>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <!-- /row -->

                                                                                                                                                                                                        <div id="thankyoudiv" style="display: none;" class="row">
                                                                                                                                                                                                        <div class="col-lg-12 text-center v-center">
                                                                                                                                                                                                        <h1>Thank You</h1>
                                                                                                                                                                                                        <p class="lead">You successfully submitted your feedback. Click below to view statistics.</p>
                                                                                                                                                                                                        <br>
                                                                                                                                                                                                        <div class="container-fluid">
                                                                                                                                                                                                        <a href="<?php echo base_url() ?>statistics/" class="btn btn-primary btn-lg btn-block" id="sinhala">View Statistics.</a>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <!-- /row -->
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <div class="container">
                                                                                                                                                                                                        <hr>
                                                                                                                                                                                                        <div class="row">
                                                                                                                                                                                                        <div class="col-lg-12">
                                                                                                                                                                                                        <br><br>

                                                                                                                                                                                                        <br><br>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        </div>

                                                                                                                                                                                                        </div>

                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <!-- /row -->

                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <!-- /container full -->

                                                                                                                                                                                                        <script async="" src="//www.google-analytics.com/analytics.js"></script>
                                                                                                                                                                                                        <script type="text/javascript"
                                                                                                                                                                                                        src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
                                                                                                                                                                                                        <!--                                <script type="text/javascript"
                                                                                                                                                                                                        src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>-->
                                                                                                                                                                                                        <script type="text/javascript"
                                                                                                                                                                                                        src="<?php echo base_url() ?>assets/js/angular.min.js"></script>
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
                                                                                                            ga('send', 'pageview');</script>
                                                                                                                                                                                                        <script type="text/javascript"
                                                                                                                                                                                                        src="<?php echo base_url() ?>/assets/js/i18next.js"></script>

                                                                                                                                                                                                        <script type="text/javascript">
                                                                                                            var lang = localStorage.getItem('lan');
                                                                                                            var options = {
                                                                                                                lng: lang,
                                                                                                                resGetPath: "<?php echo base_url() ?>assets/locales/" + lang + "/translation.json"
                                                                                                            };
                                                                                                            i18n.init(options, function (t) {
                                                                                                                console.log(t);
                                                                                                                $(".details").i18n();
                                                                                                            });
                                                                                                            //loadPoliceDevisions(null,lang);
                                                                                                                                                                                                        </script>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <div class="col-md-3">
                                                                                                                                                                                                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                                                                                                                                                                                                        <div class="panel-body">
                                                                                                                                                                                                        <img src="<?php echo base_url() ?>assets/img/add1.PNG"/>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        </div>

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
                                                                                                            ga('send', 'pageview');</script>
                                                                                                                                                                                                        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                                                                                                                                                                                                        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/i18next/1.9.0/i18next.js"></script>

                                                                                                                                                                                                        <script type="text/javascript">
                                                                                                            var lang = localStorage.getItem('lan');
                                                                                                            var options = {
                                                                                                                lng: lang,
                                                                                                                resGetPath: "<?php echo base_url() ?>assets/locales/" + lang + "/translation.json"
                                                                                                            };
                                                                                                            i18n.init(options, function (t) {
                                                                                                                console.log(t);
                                                                                                                $(".details").i18n();
                                                                                                            });
                                                                                                            //loadPoliceDevisions(null,lang);
                                                                                                                                                                                                        </script>
                                                                                                                                                                                                        </body>
                                                                                                                                                                                                        </html>