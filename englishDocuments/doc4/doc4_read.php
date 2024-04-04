<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
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
                        <td><input class="form-check-input" type="radio" name="q1" value="yes" required ><Label>Yes</Label></td>
                        <td><input class="form-check-input" type="radio" name="q1" value="no" required ><Label>No</Label></td>
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
                            <td><input class="form-check-input" type="radio" name="q1_1" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q1_1" value="no" required disabled><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Asthma, wheezing, severe allergies, hay fever or congested airways within the last 12 months that limits my physical activity/exercise.</td>
                            <td><input class="form-check-input" type="radio" name="q1_2" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q1_2" value="no" required disabled><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>A problem or illness involving my heart such as: angina, chest pain on exertion, heart failure, immersion pulmonary edema, heart attack or stroke, OR am taking medication for any heart condition.</td>
                            <td><input class="form-check-input" type="radio" name="q1_3" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q1_3" value="no" required disabled><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Recurrent bronchitis and currently coughing within the past 12 months, OR have been diagnosed with emphysema.</td>
                            <td><input class="form-check-input" type="radio" name="q1_4" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q1_4" value="no" required disabled><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Symptoms affecting my lungs, breathing, heart and/or blood in the last 30 days that impair my physical or mental performance.</td>
                            <td><input class="form-check-input" type="radio" name="q1_5" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q1_5" value="no" required disabled><Label>No</Label></td>
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
                        <td><input class="form-check-input" type="radio" name="q2" value="yes" required ><Label>Yes</Label></td>
                        <td><input class="form-check-input" type="radio" name="q2" value="no" required ><Label>No</Label></td>
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
                            <td><input class="form-check-input" type="radio" name="q2_1" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q2_1" value="no" required disabled><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>I have a high cholesterol level.</td>
                            <td><input class="form-check-input" type="radio" name="q2_2" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q2_2" value="no" required disabled><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>I have high blood pressure.</td>
                            <td><input class="form-check-input" type="radio" name="q2_3" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q2_3" value="no" required disabled><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>I have had a close blood relative die suddenly or of cardiac disease or stroke before the age of 50, OR have a family history of heart disease before age 50 (including abnormal heart rhythms, coronary artery disease or cardiomyopathy).</td>
                            <td><input class="form-check-input" type="radio" name="q2_4" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q2_4" value="no" required disabled><Label>No</Label></td>
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
                        <td><input class="form-check-input" type="radio" name="q3" value="yes" required ><Label>Yes</Label></td>
                        <td><input class="form-check-input" type="radio" name="q3" value="no" required ><Label>No</Label></td>
                    </tr>
                </tbody>
            </table>


            <!-- Question 04 -->
            <table class="table question-table">
                <tbody>
                    <tr>
                        <td>4.</td>
                        <td text-align: left;>I have had problems with my eyes, ears, or nasal passages/sinuses.</td>
                        <td><input class="form-check-input" type="radio" name="q4" value="yes" required ><Label>Yes</Label></td>
                        <td><input class="form-check-input" type="radio" name="q4" value="no" required ><Label>No</Label></td>
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
                            <td><input class="form-check-input" type="radio" name="q4_1" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q4_1" value="no" required disabled><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Ear disease or ear surgery, hearing loss, or problems with balance.</td>
                            <td><input class="form-check-input" type="radio" name="q4_2" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q4_2" value="no" required disabled><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Recurrent sinusitis within the past 12 months.</td>
                            <td><input class="form-check-input" type="radio" name="q4_3" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q4_3" value="no" required disabled><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Eye surgery within the past 3 months.</td>
                            <td><input class="form-check-input" type="radio" name="q4_4" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q4_4" value="no" required disabled><Label>No</Label></td>
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
                        <td><input class="form-check-input" type="radio" name="q5" value="yes" required ><Label>Yes</Label></td>
                        <td><input class="form-check-input" type="radio" name="q5" value="no" required ><Label>No</Label></td>
                    </tr>
                </tbody>
            </table>

            <!-- Question 06 -->
            <table class="table question-table">
                <tbody>
                    <tr>
                        <td>6.</td>
                        <td text-align: left;>I have lost consciousness, had migraine headaches, seizures, stroke, significant head injury, or suffer from persistent neurologic injury or disease.</td>
                        <td><input class="form-check-input" type="radio" name="q6" value="yes" required ><Label>Yes</Label></td>
                        <td><input class="form-check-input" type="radio" name="q6" value="no" required ><Label>No</Label></td>
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
                            <td><input class="form-check-input" type="radio" name="q6_1" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q6_1" value="no" required disabled><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Persistent neurologic injury or disease.</td>
                            <td><input class="form-check-input" type="radio" name="q6_2" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q6_2" value="no" required disabled><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Recurring migraine headaches within the past 12 months, or take medications to prevent them.</td>
                            <td><input class="form-check-input" type="radio" name="q6_3" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q6_3" value="no" required disabled><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Blackouts or fainting (full/partial loss of consciousness) within the last 5 years.</td>
                            <td><input class="form-check-input" type="radio" name="q6_4" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q6_4" value="no" required disabled><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Epilepsy, seizures, or convulsions, OR take medications to prevent them.</td>
                            <td><input class="form-check-input" type="radio" name="q6_5" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q6_5" value="no" required disabled><Label>No</Label></td>
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
                        <td><input class="form-check-input" type="radio" name="q7" value="yes" required ><Label>Yes</Label></td>
                        <td><input class="form-check-input" type="radio" name="q7" value="no" required ><Label>No</Label></td>
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
                            <td><input class="form-check-input" type="radio" name="q7_1" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q7_1" value="no" required disabled><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Major depression, suicidal ideation, panic attacks, uncontrolled bipolar disorder requiring medication/psychiatric treatment.</td>
                            <td><input class="form-check-input" type="radio" name="q7_2" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q7_2" value="no" required disabled><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Been diagnosed with a mental health condition or a learning/developmental disorder that requires ongoing care or special accommodation.</td>
                            <td><input class="form-check-input" type="radio" name="q7_3" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q7_3" value="no" required disabled><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>An addiction to drugs or alcohol requiring treatment within the last 5 years.</td>
                            <td><input class="form-check-input" type="radio" name="q7_4" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q7_4" value="no" required disabled><Label>No</Label></td>
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
                        <td><input class="form-check-input" type="radio" name="q8" value="yes" required ><Label>Yes</Label></td>
                        <td><input class="form-check-input" type="radio" name="q8" value="no" required ><Label>No</Label></td>
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
                            <td><input class="form-check-input" type="radio" name="q8_1" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q8_1" value="no" required disabled><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Back or spinal surgery within the last 12 months.</td>
                            <td><input class="form-check-input" type="radio" name="q8_2" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q8_2" value="no" required disabled><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Diabetes, either drug or diet controlled, OR gestational diabetes within the last 12 months.</td>
                            <td><input class="form-check-input" type="radio" name="q8_3" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q8_3" value="no" required disabled><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>An uncorrected hernia that limits my physical abilities.</td>
                            <td><input class="form-check-input" type="radio" name="q8_4" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q8_4" value="no" required disabled><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Active or untreated ulcers, problem wounds, or ulcer surgery within the last 6 months.</td>
                            <td><input class="form-check-input" type="radio" name="q8_5" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q8_5" value="no" required disabled><Label>No</Label></td>
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
                        <td><input class="form-check-input" type="radio" name="q9" value="yes" required ><Label>Yes</Label></td>
                        <td><input class="form-check-input" type="radio" name="q9" value="no" required ><Label>No</Label></td>
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
                            <td><input class="form-check-input" type="radio" name="q9_1" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q9_1" value="no" required disabled><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Dehydration requiring medical intervention within the last 7 days.</td>
                            <td><input class="form-check-input" type="radio" name="q9_2" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q9_2" value="no" required disabled><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Active or untreated stomach or intestinal ulcers or ulcer surgery within the last 6 months.</td>
                            <td><input class="form-check-input" type="radio" name="q9_3" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q9_3" value="no" required disabled><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Frequent heartburn, regurgitation, or gastroesophageal reflux disease (GERD).</td>
                            <td><input class="form-check-input" type="radio" name="q9_4" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q9_4" value="no" required disabled><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Active or uncontrolled ulcerative colitis or Crohn’s disease.</td>
                            <td><input class="form-check-input" type="radio" name="q9_5" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q9_5" value="no" required disabled><Label>No</Label></td>
                        </tr>
                        <tr>
                            <td>Bariatric surgery within the last 12 months.</td>
                            <td><input class="form-check-input" type="radio" name="q9_6" value="yes" required disabled><Label>Yes</Label></td>
                            <td><input class="form-check-input" type="radio" name="q9_6" value="no" required disabled><Label>No</Label></td>
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
                        <td><input class="form-check-input" type="radio" name="q10" value="yes" required ><Label>Yes</Label></td>
                        <td><input class="form-check-input" type="radio" name="q10" value="no" required ><Label>No</Label></td>
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
        <div class="row">
            <div class="col-md-12">
                <form class="mt-3 position-relative" id="participantSignatureForm">
                    <div class="form-group canvas-container">
                        <div class="toast-container" id="signatureToastContainer">
                            <div class="toast" id="signatureToast">
                                <div class="toast-body">
                                    Please kindly provide your (Participant) signature by drawing it in the designated box using your finger.
                                </div>
                                <div class="toast-body">
                                    <img src="sign.gif" alt="SIGN.GIF" class="centered-image">
                                </div>
                            </div>
                        </div>
                        <label>Participant Signature <i id="participant-signature-info-icon" class="bi bi-info-circle" style="cursor: pointer;"></i>
                        </label>
                        <!-- Set canvas dimensions relative to the screen size -->
                        <canvas id="participantSignatureCanvas" class="signature-canvas" width="350%" height="400%"></canvas>
                        <button type="button" class="btn btn-secondary clearbutton" onclick="clearSignature()"><span class="bi bi-x-lg"></span></button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <form class="mt-3 position-relative" id="parentSignatureForm">
                    <div class="form-group canvas-container">
                        <div class="toast-container" id="parentSignatureToastContainer">
                            <div class="toast" id="parentSignatureToast">
                                <div class="toast-body">
                                    Please kindly provide the signature of the parent or guardian by drawing it in the designated box using finger.
                                </div>
                                <div class="toast-body">
                                    <img src="sign.gif" alt="SIGN.GIF" class="centered-image">
                                </div>
                            </div>
                        </div>
                        <label>Signature of Parent of Guardian <i id="parent-signature-info-icon" class="bi bi-info-circle" style="cursor: pointer;"></i>
                        </label>
                        <!-- Set canvas dimensions relative to the screen size -->
                        <canvas id="parentSignatureCanvas" class="signature-canvas" width="350%" height="400%"></canvas>
                        <button type="button" class="btn btn-secondary clearbutton" onclick="clearParentSignature()"><span class="bi bi-x-lg"></span></button>
                    </div>
                </form>

                <div class="row">
                <div class="col-md-12">
                    <span class="info">Participant Name : </span> <label class="spaces">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp, </label>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <span class="info">Date : </span> <label class="spaces"> dd/mm/yyyy </label>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <span class="info">Birthday : </span> <label class="spaces"> dd/mm/yyyy</label>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <span class="info">Instructor(s) :</span> <label class="spaces"> Instructor(s) name </label>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <span class="info">Facility Name :</span> <label class="spaces">Facility name </label>
                </div>
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
    </script>

    </div>
</body>

</html>