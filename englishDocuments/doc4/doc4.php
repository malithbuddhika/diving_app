<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/connection.php';

// Query to retrieve resort from the database
$participantnameQuery = "SELECT participantname FROM doc0 WHERE userID = $userID ORDER BY id DESC LIMIT 1;";
$participantnameResult = mysqli_query($conn, $participantnameQuery);
$participantnameRow = mysqli_fetch_assoc($participantnameResult);
$participantname = $participantnameRow['participantname'];

// Query to retrieve instructors from the database
$instructorQuery = "SELECT instructorName FROM doc2 WHERE userID = $userID ORDER BY id DESC LIMIT 1;";
$instructorResult = mysqli_query($conn, $instructorQuery);
$instructorRow = mysqli_fetch_assoc($instructorResult);
$instructor = $instructorRow['instructorName'];

// Query to retrieve birthday from the database
$birthdayQuery = "SELECT birthday FROM user_data WHERE id = $userID ORDER BY id DESC LIMIT 1;";
$birthdayResult = mysqli_query($conn, $birthdayQuery);
$birthdayRow = mysqli_fetch_assoc($birthdayResult);
$birthday = $birthdayRow['birthday'];

// Query to retrieve resort from the database
$resortNameQuery = "SELECT resortName FROM doc2 WHERE userID = $userID ORDER BY id DESC LIMIT 1;";
$resortNameResult = mysqli_query($conn, $resortNameQuery);
$resortNameRow = mysqli_fetch_assoc($resortNameResult);
$resortName = $resortNameRow['resortName'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Diver Medical</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/includes/style.css">
</head>

<body class="container">
    <div class="row">
        <div class="col-12 text-center">
            <img class="logo-Doc4" src="logo.png" alt="logo">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2 class="title-Doc4"> <strong>Diver Medical |</strong> Participant Questionnaire</h2>
        </div>
        <div class="col-md-12">
            <p class="paragraph">Recreational scuba diving and freediving requires good physical and mental health. There are a few medical conditions which can be hazardous while diving, listed below. Those who have, or are predisposed to, any of these conditions, should be evaluated by a physician. This Diver Medical Participant Questionnaire provides a basis to determine if you should seek out that evaluation. If you have any concerns about your diving fitness not represented on this form, consult with your physician before diving. If you are feeling ill, avoid diving. If you think you may have a contagious disease, protect yourself and others by not participating in dive training and/or dive activities. References to “diving” on this form encompass both recreational scuba diving and freediving. This form is principally designed as an initial medical screen for new divers, but is also appropriate for divers taking continuing education. For your safety, and that of others who may dive with you, answer all questions honestly.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4 class="title2-Doc4">Directions</h4>
            <h5>Complete this questionnaire as a prerequisite to a recreational scuba diving or freediving course.</h5>
            <span><b>Note to women:</b> If you are pregnant, or attempting to become pregnant, <i>do not dive.</i></span>
        </div>
    </div>


    <form method="post">
        <div class="form-group">
            <!-- Question 01 -->
            <table class="table question-table">
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>I have had problems with my lungs, breathing, heart and/or blood affecting my normal physical or mental performance.</td>
                        <td><input class="form-check-input" type="radio" name="q1" value="yes" required><Label>Yes</Label></td>
                        <td><input class="form-check-input" type="radio" name="q1" value="no" required><Label>No</Label></td>
                    </tr>
                </tbody>
            </table>

            <!-- Box A -->
            <div id="boxA" style="display: none;">
                <table class="table">
                    <thead class="table-secondary">
                        <tr>
                            <th scope="col">Box A – I HAVE/HAVE HAD:</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Chest surgery, heart surgery, heart valve surgery, an implantable medical device (eg, stent, pacemaker, neurostimulator), pneumothorax, and/or chronic lung disease.</td>
                            <td><input class="form-check-input" type="radio" name="q1_1" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q1_1" value="no" required><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Asthma, wheezing, severe allergies, hay fever or congested airways within the last 12 months that limits my physical activity/exercise.</td>
                            <td><input class="form-check-input" type="radio" name="q1_2" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q1_2" value="no" required><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>A problem or illness involving my heart such as: angina, chest pain on exertion, heart failure, immersion pulmonary edema, heart attack or stroke, OR am taking medication for any heart condition.</td>
                            <td><input class="form-check-input" type="radio" name="q1_3" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q1_3" value="no" required><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Recurrent bronchitis and currently coughing within the past 12 months, OR have been diagnosed with emphysema.</td>
                            <td><input class="form-check-input" type="radio" name="q1_4" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q1_4" value="no" required><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Symptoms affecting my lungs, breathing, heart and/or blood in the last 30 days that impair my physical or mental performance.</td>
                            <td><input class="form-check-input" type="radio" name="q1_5" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q1_5" value="no" required><Label>No</Label></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Question 02 -->
            <table class="table question-table">
                <tbody>
                    <tr>
                        <td>2.</td>
                        <td text-align: left;>I am over 45 years of age.</td>
                        <td><input class="form-check-input" type="radio" name="q2" value="yes" required><Label>Yes</Label></td>
                        <td><input class="form-check-input" type="radio" name="q2" value="no" required><Label>No</Label></td>
                    </tr>
                </tbody>
            </table>


            <!-- Box B -->
            <div id="boxB" style="display: none;">
                <table class="table">
                    <thead class="table-secondary">
                        <tr>
                            <th scope="col">Box B – I AM OVER 45 YEARS OF AGE AND:</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>I currently smoke or inhale nicotine by other means.</td>
                            <td><input class="form-check-input" type="radio" name="q2_1" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q2_1" value="no" required><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>I have a high cholesterol level.</td>
                            <td><input class="form-check-input" type="radio" name="q2_2" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q2_2" value="no" required><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>I have high blood pressure.</td>
                            <td><input class="form-check-input" type="radio" name="q2_3" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q2_3" value="no" required><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>I have had a close blood relative die suddenly or of cardiac disease or stroke before the age of 50, OR have a family history of heart disease before age 50 (including abnormal heart rhythms, coronary artery disease or cardiomyopathy).</td>
                            <td><input class="form-check-input" type="radio" name="q2_4" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q2_4" value="no" required><Label>No</Label></td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <!-- Question 03 -->
            <table class="table question-table">
                <tbody>
                    <tr>
                        <td>3.</td>
                        <td text-align: left;>I struggle to perform moderate exercise (for example, walk 1.6 kilometer/one mile in 14 minutes or swim 200 meters/yards without resting), OR I have been unable to participate in a
                            normal physical activity due to fitness or health reasons within the past 12 months.</td>
                        <td><input class="form-check-input" type="radio" name="q3" value="yes" required><Label>Yes</Label></td>
                        <td><input class="form-check-input" type="radio" name="q3" value="no" required><Label>No</Label></td>
                    </tr>
                </tbody>
            </table>


            <!-- Question 04 -->
            <table class="table question-table">
                <tbody>
                    <tr>
                        <td>4.</td>
                        <td text-align: left;>I have had problems with my eyes, ears, or nasal passages/sinuses.</td>
                        <td><input class="form-check-input" type="radio" name="q4" value="yes" required><Label>Yes</Label></td>
                        <td><input class="form-check-input" type="radio" name="q4" value="no" required><Label>No</Label></td>
                    </tr>
                </tbody>
            </table>


            <!-- Box C -->
            <div id="boxC" style="display: none;">
                <table class="table">
                    <thead class="table-secondary">
                        <tr>
                            <th scope="col">Box C – I HAVE/HAVE HAD:</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sinus surgery within the last 6 months.</td>
                            <td><input class="form-check-input" type="radio" name="q4_1" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q4_1" value="no" required><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Ear disease or ear surgery, hearing loss, or problems with balance.</td>
                            <td><input class="form-check-input" type="radio" name="q4_2" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q4_2" value="no" required><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Recurrent sinusitis within the past 12 months.</td>
                            <td><input class="form-check-input" type="radio" name="q4_3" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q4_3" value="no" required><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Eye surgery within the past 3 months.</td>
                            <td><input class="form-check-input" type="radio" name="q4_4" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q4_4" value="no" required><Label>No</Label></td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- Question 05 -->
            <table class="table question-table">
                <tbody>
                    <tr>
                        <td>5.</td>
                        <td text-align: left;>I have had surgery within the last 12 months, OR I have ongoing problems related to past surgery.</td>
                        <td><input class="form-check-input" type="radio" name="q5" value="yes" required><Label>Yes</Label></td>
                        <td><input class="form-check-input" type="radio" name="q5" value="no" required><Label>No</Label></td>
                    </tr>
                </tbody>
            </table>

            <!-- Question 06 -->
            <table class="table question-table">
                <tbody>
                    <tr>
                        <td>6.</td>
                        <td text-align: left;>I have lost consciousness, had migraine headaches, seizures, stroke, significant head injury, or suffer from persistent neurologic injury or disease.</td>
                        <td><input class="form-check-input" type="radio" name="q6" value="yes" required><Label>Yes</Label></td>
                        <td><input class="form-check-input" type="radio" name="q6" value="no" required><Label>No</Label></td>
                    </tr>
                </tbody>
            </table>

            <!-- Box D -->
            <div id="boxD" style="display: none;">
                <table class="table">
                    <thead class="table-secondary">
                        <tr>
                            <th scope="col">Box D – I HAVE/HAVE HAD:</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Head injury with loss of consciousness within the past 5 years.</td>
                            <td><input class="form-check-input" type="radio" name="q6_1" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q6_1" value="no" required><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Persistent neurologic injury or disease.</td>
                            <td><input class="form-check-input" type="radio" name="q6_2" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q6_2" value="no" required><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Recurring migraine headaches within the past 12 months, or take medications to prevent them.</td>
                            <td><input class="form-check-input" type="radio" name="q6_3" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q6_3" value="no" required><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Blackouts or fainting (full/partial loss of consciousness) within the last 5 years.</td>
                            <td><input class="form-check-input" type="radio" name="q6_4" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q6_4" value="no" required><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Epilepsy, seizures, or convulsions, OR take medications to prevent them.</td>
                            <td><input class="form-check-input" type="radio" name="q6_5" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q6_5" value="no" required><Label>No</Label></td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- Question 07 -->
            <table class="table question-table">
                <tbody>
                    <tr>
                        <td>7.</td>
                        <td text-align: left;>I am currently undergoing treatment (or have required treatment within the last five years) for psychological problems, personality disorder, panic attacks, or an addiction to drugs or alcohol; or, I have been diagnosed with a learning or developmental disability.</td>
                        <td><input class="form-check-input" type="radio" name="q7" value="yes" required><Label>Yes</Label></td>
                        <td><input class="form-check-input" type="radio" name="q7" value="no" required><Label>No</Label></td>
                    </tr>
                </tbody>
            </table>

            <!-- Box E -->
            <div id="boxE" style="display: none;">
                <table class="table">
                    <thead class="table-secondary">
                        <tr>
                            <th scope="col">Box E – I HAVE/HAVE HAD:</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Behavioral health, mental or psychological problems requiring medical/psychiatric treatment.</td>
                            <td><input class="form-check-input" type="radio" name="q7_1" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q7_1" value="no" required><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Major depression, suicidal ideation, panic attacks, uncontrolled bipolar disorder requiring medication/psychiatric treatment.</td>
                            <td><input class="form-check-input" type="radio" name="q7_2" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q7_2" value="no" required><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Been diagnosed with a mental health condition or a learning/developmental disorder that requires ongoing care or special accommodation.</td>
                            <td><input class="form-check-input" type="radio" name="q7_3" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q7_3" value="no" required><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>An addiction to drugs or alcohol requiring treatment within the last 5 years.</td>
                            <td><input class="form-check-input" type="radio" name="q7_4" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q7_4" value="no" required><Label>No</Label></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Question 08 -->
            <table class="table question-table">
                <tbody>
                    <tr>
                        <td>8.</td>
                        <td text-align: left;>I have had back problems, hernia, ulcers, or diabetes.</td>
                        <td><input class="form-check-input" type="radio" name="q8" value="yes" required><Label>Yes</Label></td>
                        <td><input class="form-check-input" type="radio" name="q8" value="no" required><Label>No</Label></td>
                    </tr>
                </tbody>
            </table>

            <!-- Box F -->
            <div id="boxF" style="display: none;">
                <table class="table">
                    <thead class="table-secondary">
                        <tr>
                            <th scope="col">Box F – I HAVE/HAVE HAD:</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Recurrent back problems in the last 6 months that limit my everyday activity.</td>
                            <td><input class="form-check-input" type="radio" name="q8_1" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q8_1" value="no" required><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Back or spinal surgery within the last 12 months.</td>
                            <td><input class="form-check-input" type="radio" name="q8_2" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q8_2" value="no" required><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Diabetes, either drug or diet controlled, OR gestational diabetes within the last 12 months.</td>
                            <td><input class="form-check-input" type="radio" name="q8_3" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q8_3" value="no" required><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>An uncorrected hernia that limits my physical abilities.</td>
                            <td><input class="form-check-input" type="radio" name="q8_4" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q8_4" value="no" required><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Active or untreated ulcers, problem wounds, or ulcer surgery within the last 6 months.</td>
                            <td><input class="form-check-input" type="radio" name="q8_5" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q8_5" value="no" required><Label>No</Label></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Question 09 -->
            <table class="table question-table">
                <tbody>
                    <tr>
                        <td>9.</td>
                        <td text-align: left;>I have had stomach or intestine problems, including recent diarrhea.</td>
                        <td><input class="form-check-input" type="radio" name="q9" value="yes" required><Label>Yes</Label></td>
                        <td><input class="form-check-input" type="radio" name="q9" value="no" required><Label>No</Label></td>
                    </tr>
                </tbody>
            </table>

            <!-- Box G -->
            <div id="boxG" style="display: none;">
                <table class="table">
                    <thead class="table-secondary">
                        <tr>
                            <th scope="col">Box G – I HAVE HAD:</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ostomy surgery and do not have medical clearance to swim or engage in physical activity.</td>
                            <td><input class="form-check-input" type="radio" name="q9_1" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q9_1" value="no" required><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Dehydration requiring medical intervention within the last 7 days.</td>
                            <td><input class="form-check-input" type="radio" name="q9_2" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q9_2" value="no" required><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Active or untreated stomach or intestinal ulcers or ulcer surgery within the last 6 months.</td>
                            <td><input class="form-check-input" type="radio" name="q9_3" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q9_3" value="no" required><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Frequent heartburn, regurgitation, or gastroesophageal reflux disease (GERD).</td>
                            <td><input class="form-check-input" type="radio" name="q9_4" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q9_4" value="no" required><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Active or uncontrolled ulcerative colitis or Crohn’s disease.</td>
                            <td><input class="form-check-input" type="radio" name="q9_5" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q9_5" value="no" required><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Bariatric surgery within the last 12 months.</td>
                            <td><input class="form-check-input" type="radio" name="q9_6" value="yes" required><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q9_6" value="no" required><Label>No</Label></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Question 10 -->
            <table class="table question-table">
                <tbody>
                    <tr>
                        <td>10.</td>
                        <td text-align: left;>I am taking prescription medications with the exception of birth control or anti-malarial drugs other than mefloquine (Lariam).</td>
                        <td><input class="form-check-input" type="radio" name="q10" value="yes" required><Label>Yes</Label></td>
                        <td><input class="form-check-input" type="radio" name="q10" value="no" required><Label>No</Label></td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="title2">Participant Signature</h4>
                    <p><strong>If you answered NO</strong> to all 10 questions above, a medical evaluation is not required. Please read and agree to the participant statement below by signing and dating it.</p>
                    <p><strong>Participant Statement: </strong>I have answered all questions honestly, and understand that I accept responsibility for any consequences resulting from any questions I may have answered inaccurately or for my failure to disclose any existing or past health conditions.</p>
                </div>
            </div>
        </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form class="mt-3 position-relative" id="participantSignatureForm">
                    <div class="form-group canvas-container">
                        <div class="toast-container" id="signatureToastContainer">
                            <div class="toast" id="signatureToast">
                                <div class="toast-body">
                                    Please kindly press the <strong>"Draw Signature"</strong> button, and then use your finger to draw your signature inside the box.
                                </div>
                                <div class="toast-body">
                                    <img src="sign.gif" alt="SIGN.GIF" class="centered-image">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>
                                Participant Signature
                                <i id="participant-signature-info-icon" class="bi bi-info-circle" style="cursor: pointer;"></i>
                            </label>
                        </div>
                        <!-- Preview Canvas -->
                        <div>
                            <canvas id="participantSignatureCanvasPreview" class="signature-canvas" style="display: none; "></canvas>
                            <button type="button" class="btn btn-primary btn-sm mt-3" data-toggle="modal" data-target="#signatureModal">Draw Signature</button>
                        </div> <!-- Button to trigger modal -->

                        <!-- Modal -->
                        <div class="modal fade" id="signatureModal" tabindex="-1" role="dialog" aria-labelledby="signatureModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="signatureModalLabel">Participant Signature</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body overflow-hidden no-scroll" style="overflow: hidden;">
                                        <canvas id="participantSignatureCanvas" class="signature-canvas"></canvas>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" onclick="clearSignature()">Clear</button>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="saveAndCloseSignature()">Save Signature</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form class="mt-3 position-relative" id="parentSignatureForm">
                    <div class="form-group canvas-container">
                        <div class="toast-container" id="parentSignatureToastContainer">
                            <div class="toast" id="parentSignatureToast">
                                <div class="toast-body">
                                    Please kindly provide your (Parent/Guardian) signature by pressing the <strong>"Draw Signature"</strong> button, and then using your finger to draw your signature inside the box.
                                </div>
                                <div class="toast-body">
                                    <img src="sign.gif" alt="SIGN.GIF" class="centered-image">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>
                                Parent Signature
                                <i id="parent-signature-info-icon" class="bi bi-info-circle" style="cursor: pointer;"></i>
                            </label>
                        </div>
                        <!-- Preview Canvas -->
                        <div>
                            <canvas id="parentSignatureCanvasPreview" class="signature-canvas" style="display: none;"></canvas>
                            <button type="button" class="btn btn-primary btn-sm mt-3" data-toggle="modal" data-target="#parentSignatureModal">Draw Signature</button>
                        </div> <!-- Button to trigger modal -->

                        <!-- Modal -->
                        <div class="modal fade" id="parentSignatureModal" tabindex="-1" role="dialog" aria-labelledby="parentSignatureModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="parentSignatureModalLabel">Parent Signature</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body overflow-hidden no-scroll" style="overflow: hidden;">
                                        <canvas id="parentSignatureCanvas" class="signature-canvas"></canvas>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" onclick="clearParentSignature()">Clear</button>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="saveAndCloseParentSignature()">Save Signature</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

        <div class="row">
            <div class="col-md-12">
                <span class="info">Participant Name : </span> <?php echo '<label class="spaces">' . $participantname . '</label>'; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <span class="info">Birthday : </span> <?php echo '<label class="spaces">' . $birthday . '</label>'; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <span class="info">Instructor Name :</span> <?php echo '<label class="spaces">' . $instructor . '</label>'; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <span class="info">Facility Name :</span> <?php echo '<label class="spaces">' . $resortName . '</label>'; ?>
            </div>
        </div>
        <div id="alert-container"></div>

        <div class="row">
            <div class="col-md-12 btn-container">
                <button type="button" id="submit-doc4" class="btn btn-primary btn-sm" onclick="handleFormSubmission()">Submit</button>
            </div>
        </div>
    </form>
    </div>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Select2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/js/standalone/selectize.min.js"></script>
   
   <script>
        $(document).ready(function() {
            $('input[type=radio][name=q1]').change(function() {
                if (this.value == 'yes') {
                    $('#boxA').show();
                    $('#boxA input').prop('required', true); // Make Box A questions required
                } else if (this.value == 'no') {
                    $('#boxA').hide();
                    $('#boxA input').prop('required', false); // Remove required attribute from Box A questions
                    $('#boxA input[type="radio"]').prop('checked', false); // Uncheck all radio buttons in Box A
                }
            });
        });

        $(document).ready(function() {
            $('input[type=radio][name=q2]').change(function() {
                if (this.value == 'yes') {
                    $('#boxB').show();
                    $('#boxB input').prop('required', true); // Make Box B questions required
                } else if (this.value == 'no') {
                    $('#boxB').hide();
                    $('#boxB input').prop('required', false); // Remove required attribute from Box B questions
                    $('#boxB input[type="radio"]').prop('checked', false); // Uncheck all radio buttons in Box B
                }
            });
        });

        $(document).ready(function() {
            $('input[type=radio][name=q4]').change(function() {
                if (this.value == 'yes') {
                    $('#boxC').show();
                    $('#boxC input').prop('required', true); // Make Box C questions required
                } else if (this.value == 'no') {
                    $('#boxC').hide();
                    $('#boxC input').prop('required', false); // Remove required attribute from Box C questions
                    $('#boxC input[type="radio"]').prop('checked', false); // Uncheck all radio buttons in Box C
                }
            });
        });

        $(document).ready(function() {
            $('input[type=radio][name=q6]').change(function() {
                if (this.value == 'yes') {
                    $('#boxD').show();
                    $('#boxD input').prop('required', true); // Make Box D questions required
                } else if (this.value == 'no') {
                    $('#boxD').hide();
                    $('#boxD input').prop('required', false); // Remove required attribute from Box D questions
                    $('#boxD input[type="radio"]').prop('checked', false); // Uncheck all radio buttons in Box D
                }
            });
        });

        $(document).ready(function() {
            $('input[type=radio][name=q7]').change(function() {
                if (this.value == 'yes') {
                    $('#boxE').show();
                    $('#boxE input').prop('required', true); // Make Box E questions required
                } else if (this.value == 'no') {
                    $('#boxE').hide();
                    $('#boxE input').prop('required', false); // Remove required attribute from Box E questions
                    $('#boxE input[type="radio"]').prop('checked', false); // Uncheck all radio buttons in Box E
                }
            });
        });

        $(document).ready(function() {
            $('input[type=radio][name=q8]').change(function() {
                if (this.value == 'yes') {
                    $('#boxF').show();
                    $('#boxF input').prop('required', true); // Make Box F questions required
                } else if (this.value == 'no') {
                    $('#boxF').hide();
                    $('#boxF input').prop('required', false); // Remove required attribute from Box F questions
                    $('#boxF input[type="radio"]').prop('checked', false); // Uncheck all radio buttons in Box F
                }
            });
        });

        $(document).ready(function() {
            $('input[type=radio][name=q9]').change(function() {
                if (this.value == 'yes') {
                    $('#boxG').show();
                    $('#boxG input').prop('required', true); // Make Box G questions required
                } else if (this.value == 'no') {
                    $('#boxG').hide();
                    $('#boxG input').prop('required', false); // Remove required attribute from Box G questions
                    $('#boxG input[type="radio"]').prop('checked', false); // Uncheck all radio buttons in Box G
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const participantSignatureInfoIcon = document.getElementById('participant-signature-info-icon');
            const signatureToast = document.getElementById('signatureToast');

            participantSignatureInfoIcon.addEventListener('click', function() {
                positionToast(participantSignatureInfoIcon, signatureToast);
                $(signatureToast).toast('show');
            });

            window.addEventListener('resize', function() {
                // Adjust toast position on window resize
                positionToast(participantSignatureInfoIcon, signatureToast);
            });

            // Scroll event listener to keep toast position updated
            window.addEventListener('scroll', function() {
                positionToast(participantSignatureInfoIcon, signatureToast);
            });

            // Function to calculate and set the position of the toast relative to the icon
            function positionToast(targetElement, toastElement) {
                const targetRect = targetElement.getBoundingClientRect();
                const toastWidth = toastElement.offsetWidth;
                const toastHeight = toastElement.offsetHeight;

                // Position the toast near the icon
                let toastTop = targetRect.top + (targetRect.height / 2) - (toastHeight / 2);
                let toastLeft = targetRect.left + targetRect.width + 10; // 10px right of the icon

                // Set the toast position
                toastElement.style.top = toastTop + 'px';
                toastElement.style.left = toastLeft + 'px';
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const parentSignatureInfoIcon = document.getElementById('parent-signature-info-icon'); // Corrected variable name
            const parentSignatureToast = document.getElementById('parentSignatureToast'); // Corrected variable name

            parentSignatureInfoIcon.addEventListener('click', function() { // Corrected event listener
                positionToast(parentSignatureInfoIcon, parentSignatureToast); // Corrected variable names
                $(parentSignatureToast).toast('show');
            });

            window.addEventListener('resize', function() {
                // Adjust toast position on window resize
                positionToast(parentSignatureInfoIcon, parentSignatureToast); // Corrected variable names
            });

            // Scroll event listener to keep toast position updated
            window.addEventListener('scroll', function() {
                positionToast(parentSignatureInfoIcon, parentSignatureToast); // Corrected variable names
            });

            // Function to calculate and set the position of the toast relative to the icon
            function positionToast(targetElement, toastElement) {
                const targetRect = targetElement.getBoundingClientRect();
                const toastWidth = toastElement.offsetWidth;
                const toastHeight = toastElement.offsetHeight;

                // Position the toast near the icon
                let toastTop = targetRect.top + (targetRect.height / 2) - (toastHeight / 2);
                let toastLeft = targetRect.left + targetRect.width - 40; // 10px right of the icon

                // Set the toast position
                toastElement.style.top = toastTop + 'px';
                toastElement.style.left = toastLeft + 'px';
            }
        });

        //Signature

         // Get the canvas elements
        var participantCanvas = document.getElementById('participantSignatureCanvas');
        var participantCanvasPreview = document.getElementById('participantSignatureCanvasPreview');
        var ctx = participantCanvas.getContext('2d');
        var ctxPreview = participantCanvasPreview.getContext('2d');
        var drawing = false;
        var points = [];
        var prevPoint = null; // Track previous point for smoother curves

        // Set margin
        var margin = 0;

        // Calculate width and height based on screen size
        var screenWidth = window.innerWidth;
        var screenHeight = window.innerHeight;

        // Set canvas width and height
        participantCanvas.width = 0.86 * screenWidth; // 85% of the width
        participantCanvas.height = 0.9 * screenHeight; // 90% of the height
        participantCanvasPreview.width = participantCanvas.width;
        participantCanvasPreview.height = participantCanvas.height;

        // Set canvas style for margin
        participantCanvas.style.margin = margin + 'px';

        function startDrawing(e) {
            drawing = true;
            points = [];
            prevPoint = null;

            // Prevent default behavior for touch events to prevent page scrolling
            if (e.type === 'touchstart') {
                e.preventDefault();
            }

            draw(e);
        }

        function draw(e) {
            if (!drawing) return;

            e.preventDefault();

            // Adjust touch coordinates
            const currentX = e.clientX || e.touches[0].clientX - participantCanvas.getBoundingClientRect().left;
            const currentY = e.clientY || e.touches[0].clientY - participantCanvas.getBoundingClientRect().top;

            points.push({
                x: currentX,
                y: currentY
            });

            // Draw only if there are more than 1 point
            if (points.length > 1) {
                ctx.beginPath();
                ctx.moveTo(points[0].x, points[0].y);

                for (let i = 1; i < points.length; i++) {
                    const midPoint = {
                        x: (points[i].x + points[i - 1].x) / 2,
                        y: (points[i].y + points[i - 1].y) / 2
                    };

                    // Adjust the line width and opacity randomly for a more natural look
                    ctx.lineWidth = Math.random() * 3 + 1; // Random line width between 1 and 4
                    ctx.strokeStyle = `rgba(0, 0, 0, ${Math.random() * 0.5 + 0.3 + 0.1})`; // Random opacity between 0.2 and 0.7

                    // Draw a quadratic curve using the previous and current points
                    ctx.quadraticCurveTo(points[i - 1].x, points[i - 1].y, midPoint.x, midPoint.y);

                    // Draw the stroke
                    ctx.stroke();

                    // Store the current point as the previous point for the next iteration
                    prevPoint = points[i];
                }
            }

            // Update preview canvas
            updatePreview();
        }

        function drawDot(x, y) {
            ctx.beginPath();
            ctx.arc(x, y, 2, 0, Math.PI * 2);
            ctx.fillStyle = 'black';
            ctx.fill();
        }

        function stopDrawing() {
            if (drawing) {
                drawing = false;
                prevPoint = null;
            }
        }

        // Event listeners for mouse input
        participantCanvas.addEventListener('mousedown', startDrawing);
        participantCanvas.addEventListener('mousemove', draw);
        participantCanvas.addEventListener('mouseup', stopDrawing);

        // Event listeners for touch input
        participantCanvas.addEventListener('touchstart', function(e) {
            // Draw a dot at the touch location
            drawDot(e.touches[0].clientX - participantCanvas.getBoundingClientRect().left, e.touches[0].clientY - participantCanvas.getBoundingClientRect().top);
            startDrawing(e);
        });
        participantCanvas.addEventListener('touchmove', draw);
        participantCanvas.addEventListener('touchend', stopDrawing);

        function updatePreview() {
            ctxPreview.drawImage(participantCanvas, 0, 0);
        }

        function saveSignature() {
            let participantSignatureData = participantCanvas.toDataURL();
            let formData = new FormData(document.getElementById('participantSignatureForm'));

            formData.append('participantSignatureData', participantSignatureData);
            // Send the formData to the server using AJAX
            // sendToServer(formData);
            console.log('Signature saved:', participantSignatureData);
        }

        function clearSignature() {
            ctx.clearRect(0, 0, participantCanvas.width, participantCanvas.height);
            ctxPreview.clearRect(0, 0, participantCanvasPreview.width, participantCanvasPreview.height);
        }

        function updatePreview() {
            // Clear the preview canvas
            ctxPreview.clearRect(0, 0, participantCanvasPreview.width, participantCanvasPreview.height);

            // Scale and draw the content from the participantCanvas to the preview canvas
            ctxPreview.save(); // Save the current state of the context
            ctxPreview.scale(1, 1); // Scale the context to 30%
            ctxPreview.drawImage(participantCanvas, 0, 0);
            ctxPreview.restore(); // Restore the saved state to avoid affecting other drawings

            // Set the scaled dimensions for the canvas element
            participantCanvasPreview.style.width = (participantCanvas.width * 0.3) + 'px';
            participantCanvasPreview.style.height = (participantCanvas.height * 0.3) + 'px';
        }

        function saveAndCloseSignature() {
            // saveSignature();
            // Close the modal
            $('#signatureModal').modal('hide');

            updatePreview();

            // Make the participantSignatureCanvasPreview visible
            participantSignatureCanvasPreview.style.display = "block";
        }

        // Get the canvas elements
        var parentCanvas = document.getElementById('parentSignatureCanvas');
        var parentCanvasPreview = document.getElementById('parentSignatureCanvasPreview');
        var parentCtx = parentCanvas.getContext('2d');
        var parentCtxPreview = parentCanvasPreview.getContext('2d');
        var parentDrawing = false;
        var parentPoints = [];
        var parentPrevPoint = null; // Track previous point for smoother curves

        // Set margin
        var parentMargin = 0;

        // Set canvas width and height
        parentCanvas.width = 0.86 * screenWidth; // 85% of the width
        parentCanvas.height = 0.9 * screenHeight; // 90% of the height
        parentCanvasPreview.width = parentCanvas.width;
        parentCanvasPreview.height = parentCanvas.height;

        // Set canvas style for margin
        parentCanvas.style.margin = parentMargin + 'px';

        function startParentDrawing(e) {
            parentDrawing = true;
            parentPoints = [];
            parentPrevPoint = null;

            // Prevent default behavior for touch events to prevent page scrolling
            if (e.type === 'touchstart') {
                e.preventDefault();
            }

            drawParent(e);
        }

        function drawParent(e) {
            if (!parentDrawing) return;

            e.preventDefault();

            // Adjust touch coordinates
            const currentX = e.clientX || e.touches[0].clientX - parentCanvas.getBoundingClientRect().left;
            const currentY = e.clientY || e.touches[0].clientY - parentCanvas.getBoundingClientRect().top;

            parentPoints.push({
                x: currentX,
                y: currentY
            });

            // Draw only if there are more than 1 point
            if (parentPoints.length > 1) {
                parentCtx.beginPath();
                parentCtx.moveTo(parentPoints[0].x, parentPoints[0].y);

                for (let i = 1; i < parentPoints.length; i++) {
                    const midPoint = {
                        x: (parentPoints[i].x + parentPoints[i - 1].x) / 2,
                        y: (parentPoints[i].y + parentPoints[i - 1].y) / 2
                    };

                    // Adjust the line width and opacity randomly for a more natural look
                    parentCtx.lineWidth = Math.random() * 3 + 1; // Random line width between 1 and 4
                    parentCtx.strokeStyle = `rgba(0, 0, 0, ${Math.random() * 0.5 + 0.3 + 0.1})`; // Random opacity between 0.2 and 0.7

                    // Draw a quadratic curve using the previous and current points
                    parentCtx.quadraticCurveTo(parentPoints[i - 1].x, parentPoints[i - 1].y, midPoint.x, midPoint.y);

                    // Draw the stroke
                    parentCtx.stroke();

                    // Store the current point as the previous point for the next iteration
                    parentPrevPoint = parentPoints[i];
                }
            }

            // Update preview canvas
            updateParentPreview();
        }

        function drawParentDot(x, y) {
            parentCtx.beginPath();
            parentCtx.arc(x, y, 2, 0, Math.PI * 2);
            parentCtx.fillStyle = 'black';
            parentCtx.fill();
        }


        function stopParentDrawing() {
            if (parentDrawing) {
                parentDrawing = false;
                parentPrevPoint = null;
            }
        }

        // Event listeners for mouse input
        parentCanvas.addEventListener('mousedown', startParentDrawing);
        parentCanvas.addEventListener('mousemove', drawParent);
        parentCanvas.addEventListener('mouseup', stopParentDrawing);

        // Event listener for touch input
        parentCanvas.addEventListener('touchstart', function(e) {
            // Draw a dot at the touch location
            drawParentDot(e.touches[0].clientX - parentCanvas.getBoundingClientRect().left, e.touches[0].clientY - parentCanvas.getBoundingClientRect().top);
            startParentDrawing(e);
        });

        parentCanvas.addEventListener('touchmove', drawParent);
        parentCanvas.addEventListener('touchend', stopParentDrawing);

        function updateParentPreview() {
            // Clear the preview canvas
            parentCtxPreview.clearRect(0, 0, parentCanvasPreview.width, parentCanvasPreview.height);

            // Scale and draw the content from the parentCanvas to the preview canvas
            parentCtxPreview.save(); // Save the current state of the context
            parentCtxPreview.scale(1, 1); // Scale the context to 30%
            parentCtxPreview.drawImage(parentCanvas, 0, 0);
            parentCtxPreview.restore(); // Restore the saved state to avoid affecting other drawings

            // Set the scaled dimensions for the canvas element
            parentCanvasPreview.style.width = (parentCanvas.width * 0.3) + 'px';
            parentCanvasPreview.style.height = (parentCanvas.height * 0.3) + 'px';
        }


        function saveParentSignature() {
            let parentSignatureData = parentCanvas.toDataURL();
            let formData = new FormData(document.getElementById('parentSignatureForm'));

            formData.append('parentSignatureData', parentSignatureData);
            // sendToServer(formData);
            console.log('Signature saved:', parentSignatureData);

        }

        function clearParentSignature() {
            parentCtx.clearRect(0, 0, parentCanvas.width, parentCanvas.height);
            parentCtxPreview.clearRect(0, 0, parentCanvasPreview.width, parentCanvasPreview.height);
        }

        function saveAndCloseParentSignature() {
            saveParentSignature();
            // Close the modal
            $('#parentSignatureModal').modal('hide');

            updateParentPreview();

            // Make the parentSignatureCanvasPreview visible
            parentSignatureCanvasPreview.style.display = "block";
        }

        function handleFormSubmission() {

            // Question 01

            let q1Value = document.querySelector('input[name="q1"]:checked');
            if (q1Value === null) {
                showAlert('danger', 'Please answer Question 01.');
                return;
            }
            if (q1Value.value === 'yes') {
                let q1_1Value = document.querySelector('input[name="q1_1"]:checked');
                let q1_2Value = document.querySelector('input[name="q1_2"]:checked');
                let q1_3Value = document.querySelector('input[name="q1_3"]:checked');
                let q1_4Value = document.querySelector('input[name="q1_4"]:checked');
                let q1_5Value = document.querySelector('input[name="q1_5"]:checked');

                if (!q1_1Value || !q1_2Value || !q1_3Value || !q1_4Value || !q1_5Value) {
                    showAlert('danger', ' You must answers for all the Question in Box A');
                    return;
                }
            } else {
                // If q1 answer is "no", ignore Box A answers
            }

            // Question 02

            let q2Value = document.querySelector('input[name="q2"]:checked');
            if (q2Value === null) {
                showAlert('danger', 'Please answer Question 02.');
                return;
            }

            if (q2Value.value === 'yes') {
                let q2_1Value = document.querySelector('input[name="q2_1"]:checked');
                let q2_2Value = document.querySelector('input[name="q2_2"]:checked');
                let q2_3Value = document.querySelector('input[name="q2_3"]:checked');
                let q2_4Value = document.querySelector('input[name="q2_4"]:checked');


                if (!q2_1Value || !q2_2Value || !q2_3Value || !q2_4Value) {
                    showAlert('danger', ' You must answers for all the Question in Box B');
                    return;
                }
            } else {
                // If q2 answer is "no", ignore Box B answers
            }

            // Question 03

            let q3Value = document.querySelector('input[name="q3"]:checked');
            if (q3Value === null) {
                showAlert('danger', 'Please answer Question 03.');
                return;
            }

            // Question 04

            let q4Value = document.querySelector('input[name="q4"]:checked');
            if (q4Value === null) {
                showAlert('danger', 'Please answer Question 04.');
                return;
            }
            if (q4Value.value === 'yes') {
                let q4_1Value = document.querySelector('input[name="q4_1"]:checked');
                let q4_2Value = document.querySelector('input[name="q4_2"]:checked');
                let q4_3Value = document.querySelector('input[name="q4_3"]:checked');
                let q4_4Value = document.querySelector('input[name="q4_4"]:checked');


                if (!q4_1Value || !q4_2Value || !q4_3Value || !q4_4Value) {
                    showAlert('danger', ' You must answers for all the Question in Box C');
                    return;
                }
            } else {
                // If q4 answer is "no", ignore Box C answers
            }

            // Question 05

            let q5Value = document.querySelector('input[name="q5"]:checked');
            if (q5Value === null) {
                showAlert('danger', 'Please answer Question 05.');
                return;
            }

            // Question 06
            let q6Value = document.querySelector('input[name="q6"]:checked');
            if (q6Value === null) {
                showAlert('danger', 'Please answer Question 06.');
                return;
            }

            if (q6Value.value === 'yes') {
                let q6_1Value = document.querySelector('input[name="q6_1"]:checked');
                let q6_2Value = document.querySelector('input[name="q6_2"]:checked');
                let q6_3Value = document.querySelector('input[name="q6_3"]:checked');
                let q6_4Value = document.querySelector('input[name="q6_4"]:checked');
                let q6_5Value = document.querySelector('input[name="q6_5"]:checked');

                if (!q6_1Value || !q6_2Value || !q6_3Value || !q6_4Value || !q6_5Value) {
                    showAlert('danger', ' You must answers for all the Question in Box D');
                    return;
                }
            } else {
                // If q6 answer is "no", ignore Box D answers
            }

            let q7Value = document.querySelector('input[name="q7"]:checked');
            if (q7Value === null) {
                showAlert('danger', 'Please answer Question 07.');
                return;
            }
            if (q7Value.value === 'yes') {
                let q7_1Value = document.querySelector('input[name="q7_1"]:checked');
                let q7_2Value = document.querySelector('input[name="q7_2"]:checked');
                let q7_3Value = document.querySelector('input[name="q7_3"]:checked');
                let q7_4Value = document.querySelector('input[name="q7_4"]:checked');


                if (!q7_1Value || !q7_2Value || !q7_3Value || !q7_4Value) {
                    showAlert('danger', ' You must answers for all the Question in Box E');
                    return;
                }
            } else {
                // If q7 answer is "no", ignore Box E answers
            }


            let q8Value = document.querySelector('input[name="q8"]:checked');
            if (q8Value === null) {
                showAlert('danger', 'Please answer Question 08.');
                return;
            }

            if (q8Value.value === 'yes') {
                let q8_1Value = document.querySelector('input[name="q8_1"]:checked');
                let q8_2Value = document.querySelector('input[name="q8_2"]:checked');
                let q8_3Value = document.querySelector('input[name="q8_3"]:checked');
                let q8_4Value = document.querySelector('input[name="q8_4"]:checked');
                let q8_5Value = document.querySelector('input[name="q8_5"]:checked');

                if (!q8_1Value || !q8_2Value || !q8_3Value || !q8_4Value || !q8_5Value) {
                    showAlert('danger', ' You must answers for all the Question in Box F');
                    return;
                }
            } else {
                // If q8 answer is "no", ignore Box F answers
            }


            let q9Value = document.querySelector('input[name="q9"]:checked');
            if (q9Value === null) {
                showAlert('danger', 'Please answer Question 09.');
                return;
            }
            if (q9Value.value === 'yes') {
                let q9_1Value = document.querySelector('input[name="q9_1"]:checked');
                let q9_2Value = document.querySelector('input[name="q9_2"]:checked');
                let q9_3Value = document.querySelector('input[name="q9_3"]:checked');
                let q9_4Value = document.querySelector('input[name="q9_4"]:checked');
                let q9_5Value = document.querySelector('input[name="q9_5"]:checked');
                let q9_6Value = document.querySelector('input[name="q9_6"]:checked');

                if (!q9_1Value || !q9_2Value || !q9_3Value || !q9_4Value || !q9_5Value || !q9_6Value) {
                    showAlert('danger', ' You must answers for all the Question in Box G');
                    return;
                }
            } else {
                // If q9 answer is "no", ignore Box G answers
            }


            let q10Value = document.querySelector('input[name="q10"]:checked');
            if (q10Value === null) {
                showAlert('danger', 'Please answer Question 10.');
                return;
            }

            // Capture current date for participant and parent signatures
            let participantDate = new Date().toISOString();
            let parentDate = new Date().toISOString();

            // Capture the final point before form submission
            let participantSignatureData = participantCanvas.toDataURL();
            // drawFinalPoint(); // Capture the final point for participant signature
            let parentSignatureData = parentCanvas.toDataURL();
            // drawParentFinalPoint(); // Capture the final point for parent signature

            let formData = new FormData();

            // Retrieve and append the value of the selected radio button for each question
            appendRadioValue(formData, 'q1');
            appendRadioValue(formData, 'q1_1');
            appendRadioValue(formData, 'q1_2');
            appendRadioValue(formData, 'q1_3');
            appendRadioValue(formData, 'q1_4');
            appendRadioValue(formData, 'q1_5');

            appendRadioValue(formData, 'q2');
            appendRadioValue(formData, 'q2_1');
            appendRadioValue(formData, 'q2_2');
            appendRadioValue(formData, 'q2_3');
            appendRadioValue(formData, 'q2_4');

            appendRadioValue(formData, 'q3');

            appendRadioValue(formData, 'q4');
            appendRadioValue(formData, 'q4_1');
            appendRadioValue(formData, 'q4_2');
            appendRadioValue(formData, 'q4_3');
            appendRadioValue(formData, 'q4_4');

            appendRadioValue(formData, 'q5');

            appendRadioValue(formData, 'q6');
            appendRadioValue(formData, 'q6_1');
            appendRadioValue(formData, 'q6_2');
            appendRadioValue(formData, 'q6_3');
            appendRadioValue(formData, 'q6_4');
            appendRadioValue(formData, 'q6_5');

            appendRadioValue(formData, 'q7');
            appendRadioValue(formData, 'q7_1');
            appendRadioValue(formData, 'q7_2');
            appendRadioValue(formData, 'q7_3');
            appendRadioValue(formData, 'q7_4');

            appendRadioValue(formData, 'q8');
            appendRadioValue(formData, 'q8_1');
            appendRadioValue(formData, 'q8_2');
            appendRadioValue(formData, 'q8_3');
            appendRadioValue(formData, 'q8_4');
            appendRadioValue(formData, 'q8_5');

            appendRadioValue(formData, 'q9');
            appendRadioValue(formData, 'q9_1');
            appendRadioValue(formData, 'q9_2');
            appendRadioValue(formData, 'q9_3');
            appendRadioValue(formData, 'q9_4');
            appendRadioValue(formData, 'q9_5');
            appendRadioValue(formData, 'q9_6');

            appendRadioValue(formData, 'q10');



            formData.append('participantSignatureData', participantSignatureData);
            formData.append('participantDate', participantDate);
            formData.append('parentSignatureData', parentSignatureData);
            formData.append('parentDate', parentDate);

            // Send the formData to the server using AJAX
            sendToServer(formData);
        }

        function appendRadioValue(formData, name) {
            let element = document.querySelector(`input[name="${name}"]:checked`);
            if (element) {
                formData.append(name, element.value);
            } else {
                formData.append(name, null); // Or whatever default value you want to use for unanswered questions
            }
        }

        function sendToServer(formData) {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'doc4_save_data.php', true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        // Display success message using Bootstrap alert
                        showAlert('success', 'Form submitted successfully');
                        // Redirect to doc4_view.php
                        window.location.href = '/englishDocuments/doc4/doc4_view.php';

                    } else {
                        // Display error message using Bootstrap alert
                        showAlert('danger', 'Error submitting form. Check console for details.');
                        console.error('Error:', xhr.status, xhr.statusText);
                    }
                }
            };
            xhr.onerror = function() {
                // Display network error message using Bootstrap alert
                showAlert('danger', 'Network error. Check console for details.');
                console.error('Network error occurred');
            };
            xhr.send(formData);
        }

        function showAlert(type, message) {
            let alertContainer = document.getElementById('alert-container');
            let alertElement = document.createElement('div');
            alertElement.className = `alert alert-${type} mt-3`;
            alertElement.textContent = message;
            alertContainer.appendChild(alertElement);

            // Remove the alert after a few seconds (optional)
            setTimeout(function() {
                alertContainer.removeChild(alertElement);
            }, 5000);


        }
    </script>

    </div>
</body>

</html>