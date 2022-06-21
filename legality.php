<!DOCTYPE html>
<?php include 'includes/session.php'; ?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <title>Play online</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">


    <link rel="stylesheet" href="assets/css/templatemo-softy-pinko.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <!-- ***** Features Small Item Start ***** -->
                    <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                        <div class="features-small-item">
                            <div class="modal-header">
                                <h2 style="color: purple;"><b>Legality</b></h2>
                            </div>
                            <div class="modal-body" style="text-align: left;">
                                <br>
                                <div class="modal-header">
                                    <h5 style="color: purple;"><b>What is gambling and how is it different from Skill Games under Indian laws?</b></h5>
                                </div>
                                <br>
                                Gambling or gaming has been defined by the Supreme Court in 1996 as betting and wagering on games
                                of chance only. The Supreme Court in this judgment specifically excludes games of skill,
                                irrespective of whether they are played for money or not, from the definition of gambling.
                                The exact quote from the 1996 judgment is as follows:
                                <br><br>
                                <i>"The expression 'gaming' in the two Acts has to be interpreted in the light of the law
                                    laid-down by this Court in the two1957 cases, wherein it has been authoritatively held
                                    that a competition which substantially depends on skill is not gambling. Gaming is the
                                    act or practice of gambling on a game of chance. It is staking on chance where chance is
                                    the controlling factor. 'Gaming' in the two Acts would, therefore, mean wagering or betting
                                    on games of chance. It would not include games of skill like horse racing"</i>
                                <br><br>
                                Further, the Public Gambling Act, which was the central law on gambling and most subsequent
                                state laws on the subject substantially state that<b> "nothing in this Act shall apply to
                                    games of mere skill wherever played"</b>. This is also mentioned in the 1996 Supreme Court
                                judgment with regards Tamil Nadu laws.
                                <br><br>
                                "In any case...Section 11 of the Gaming Act specifically saves the games of mere
                                skill from the penal provisions of the two Acts."
                                <br><br>
                                <div class="modal-header">
                                    <h5 style="color: purple;"><b>What is a game of skill under Indian laws?</b></h5>
                                </div>
                                <br>
                                Supreme Court of India in 1996 defined a game of mere skill as follows:
                                <br><br>
                                &nbsp;&nbsp;-> The competitions where success depends on substantial degree of skill are not "gambling" and<br>
                                &nbsp;&nbsp;-> Despite there being an element of chance if a game is preponderantly a game of skill it would nevertheless be a game of "mere skill".
                                <br><br>
                                We, therefore, hold that the expression "mere skill" would mean substantial degree or preponderance of skill.
                                <br><br>
                                <div class="modal-header">
                                    <h5 style="color: purple;"><b>Is freefire and BGMI game of skill?</b></h5>
                                </div>
                                <br>
                                "A <b>game of skill</b>, is one in which success depends principally upon the superior knowledge, training,
                                attention, experience and adroitness of the player. Golf, chess, Rummy, even Freefire and BGMI
                                are considered to be games of skill. The Courts have reasoned that there are few games, if any,
                                which consist purely of chance or skill, and as such a game of chance is one in which the element
                                of chance predominates over the element of skill, and a game of skill is one in which the element of skill
                                predominates over the element of chance. It is the dominant element --"skill" or "chance" --
                                which determines the character of the game."
                                <br><br>
                                <div class="modal-header">
                                    <h5 style="color: purple;"><b>Do games of skill enjoy any other protection legally?</b></h5>
                                </div>
                                <br>
                                Yes, in 1957 the Supreme Court stated that prize competitions which involve substantial skill
                                are business activities that are protected under Article 19(1)(g) of the Constitution of India.
                                <br><br>
                                <div class="modal-header">
                                    <h5 style="color: purple;"><b>Is it legal to play freefire and BGMI for cash on balaji?</b></h5>
                                </div>
                                <br>
                                The various Supreme Court rulings and the Gaming Acts of India imply the following:<br><br>
                                &nbsp;&nbsp;-> Gaming or gambling means betting and wagering on games of chance.<br>
                                &nbsp;&nbsp;-> Playing games of skill for cash does not constitute gambling.<br>
                                &nbsp;&nbsp;-> Games of skill are exempt from the penal provisions of most gambling acts.<br>
                                &nbsp;&nbsp;-> Freefire and BGMI is a game of skill.<br><br>
                                <hr>
                                So yes, it is perfectly legal to play Freefire and BGMI for cash on balaji as long as you
                                are not playing from the states of Assam, Odisha, Telangana, Kerala, Andhra Pradesh,
                                Nagaland and Sikkim. As we get more clarity on the laws in these states, we might
                                consider offering our services to residents of these States as well.
                            </div>
                        </div>
                    </div>
                    <!-- ***** Features Small Item End ***** -->
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- ***** Features Small End ***** -->

    <!-- ***** Footer Start ***** -->
    <footer style="position:relative;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="social">
                        <p style="color:white;">Contact Admin @ <?php
                                                                $conn = $pdo->open();
                                                                $stmt = $conn->prepare("SELECT adminphone FROM message");
                                                                $stmt->execute();
                                                                foreach ($stmt as $row)
                                                                    if (!empty($row['adminphone']))
                                                                        echo $row['adminphone']; ?></p>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright"><a style="color:black;" href="terms_and_conditions.php">Terms And Conditions</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>


    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

</body>
<?php include 'req_end.php'; ?>

</html>