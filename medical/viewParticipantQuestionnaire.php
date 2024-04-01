<?php
// Establish database connection
include $_SERVER['DOCUMENT_ROOT'] . '/connection.php';
session_start();

$medicalUserId = $_SESSION['id'];

// Query to retrieve medical examiner data from medical_examiner
$queryMedicalExaminer = "SELECT name, degree, clinic, address, phone, email, stamp FROM medical_examiner WHERE id = $medicalUserId;";
$resultMedicalExaminer = mysqli_query($conn, $queryMedicalExaminer);
$rowMedicalExaminer = mysqli_fetch_assoc($resultMedicalExaminer);
$examinerName = $rowMedicalExaminer['name'];
$degree = $rowMedicalExaminer['degree'];
$clinic = $rowMedicalExaminer['clinic'];
$address = $rowMedicalExaminer['address'];
$phone = $rowMedicalExaminer['phone'];
$email = $rowMedicalExaminer['email'];
$stamp = $rowMedicalExaminer['stamp'];

// Retrieve userID from URL query parameters
$userID = $_GET['userID'];
$name = $_GET['name'];
$birthday = $_GET['birthday'];

// Define your SQL query with a WHERE clause to filter by the retrieved userID
$query = "SELECT userID, q1, q1_1, q1_2, q1_3, q1_4, q1_5, q2, q2_1, q2_2, q2_3, q2_4, q3, q4, q4_1, q4_2, q4_3, q4_4, q5, q6, q6_1, q6_2, q6_3, q6_4, q6_5, q7, q7_1, q7_2, q7_3, q7_4, q8, q8_1, q8_2, q8_3, q8_4, q8_5, q9, q9_1, q9_2, q9_3, q9_4, q9_5, q9_6, q10, status FROM doc4 WHERE userID = $userID";

// Execute the query
$result = $conn->query($query);

// Check if the query was successful
if (!$result) {
    die("Error executing the query: " . $conn->error);
}

// Check if there are any rows returned
if ($result->num_rows > 0) {
    // Output data of the row (since there should be only one row with the retrieved userID)
    $row = $result->fetch_assoc();

    // Check the value of q1 to determine whether to show Box A initially
    $displayBoxA = ($row["q1"] == 'yes') ? 'block' : 'none';
    $displayBoxB = ($row["q2"] == 'yes') ? 'block' : 'none';
    $displayBoxC = ($row["q4"] == 'yes') ? 'block' : 'none';
    $displayBoxD = ($row["q6"] == 'yes') ? 'block' : 'none';
    $displayBoxE = ($row["q7"] == 'yes') ? 'block' : 'none';
    $displayBoxF = ($row["q8"] == 'yes') ? 'block' : 'none';
    $displayBoxG = ($row["q9"] == 'yes') ? 'block' : 'none';
} else {
    echo "No results found for userID = $userID";
}

// Query to retrieve participant name, instructor name, and resort name from doc2
$queryDoc2 = "SELECT instructorName, resortName FROM doc2 WHERE userID = $userID ORDER BY id DESC LIMIT 1;";
$resultDoc2 = mysqli_query($conn, $queryDoc2);
$rowDoc2 = mysqli_fetch_assoc($resultDoc2);
$instructor = $rowDoc2['instructorName'];
$resortName = $rowDoc2['resortName'];

$queryDoc0 = "SELECT participantname FROM doc0 WHERE userID = $userID ORDER BY id DESC LIMIT 1;";
$resultDoc0 = mysqli_query($conn, $queryDoc0);
$rowDoc0 = mysqli_fetch_assoc($resultDoc0);
$participantname = $rowDoc0['participantname'];

// Query to retrieve birthday from user_data
$queryUserData = "SELECT birthday FROM user_data WHERE id = $userID ORDER BY id DESC LIMIT 1;";
$resultUserData = mysqli_query($conn, $queryUserData);
$rowUserData = mysqli_fetch_assoc($resultUserData);
$birthday = $rowUserData['birthday'];

// Query to retrieve participant and parent signature data from doc4
$queryDoc4 = "SELECT participantSignatureData, parentSignatureData, participantDate, parentDate FROM doc4 WHERE userID = $userID ORDER BY id DESC LIMIT 1;";
$resultDoc4 = mysqli_query($conn, $queryDoc4);
$rowDoc4 = mysqli_fetch_assoc($resultDoc4);
$participantSignatureData = $rowDoc4['participantSignatureData'];
$parentSignatureData = $rowDoc4['parentSignatureData'];
$participantDate = $rowDoc4['participantDate'];
$parentDate = $rowDoc4['parentDate'];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document 4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style type="text/css">
        .logo {
            max-width: 100%;
            margin-top: 20px;
            margin-bottom: 10px;
            /* Adjusted for responsiveness */
            height: auto;
        }

        @media (max-width: 768px) {
            .logo {
                max-width: 100%;
                margin-top: 20px;
                margin-bottom: 10px;
                /* Adjusted for smaller screens */
            }
        }

        @media (max-width: 576px) {
            .logo {
                max-width: 100%;
                margin-top: 20px;
                margin-bottom: 10px;
                /* Further adjusted for smaller screens */

            }

            .paragraph {
                text-align: left;
            }
        }

        .title2 {
            margin-top: 10px;
            font-size: 24px;
            text-align: center;
        }

        .form-check {
            margin-bottom: 10px;
        }

        /* Custom styles for left-aligning questions and right-aligning Yes/No */
        .question-table th,
        .question-table td:nth-child(2) {
            text-align: left;


        }

        .question-table td:nth-child(3),
        .question-table td:nth-child(4) {
            text-align: right;
            width: 5%;
        }

        .question-table td:nth-child(1) {
            text-align: left;
            width: 2%;
        }

        .signature-canvas {
            border: 1px solid #ccc;
            align-items: center;
        }

        .spaces {
            text-decoration: underline;
            font-weight: bold;

        }

        .info {

            margin-top: -10px;
        }

        @media (max-width: 414px) {


            .paragraph {
                font-size: 1rem;
            }

            .title {
                font-size: 2rem;
            }

            .title2 {

                font-size: 1.5rem;

            }

            .title3 {
                font-size: 1rem;
                border-bottom: 2px solid #000;
                padding-bottom: 5px;

            }
        }

        .title3 {
            border-bottom: 2px solid #000;
            padding-bottom: 5px;
        }

        .evaluation-table {
            margin-left: 18px;
        }

        .sign-label {
            margin-left: 18px;

        }

        .examiner-info {
            font-weight: bold;
        }

        body {
            overflow-x: hidden;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img class="logo" src="logo.png" alt="logo">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="title">Diver Medical | Participant Questionnaire</h2>
            </div>
            <div class="col-md-12">
                <p class="paragraph">Recreational scuba diving and freediving requires good physical and mental health. There are a few medical conditions which can be hazardous while diving, listed below. Those who have, or are predisposed to, any of these conditions, should be evaluated by a physician. This Diver Medical Participant Questionnaire provides a basis to determine if you should seek out that evaluation. If you have any concerns about your diving fitness not represented on this form, consult with your physician before diving. If you are feeling ill, avoid diving. If you think you may have a contagious disease, protect yourself and others by not participating in dive training and/or dive activities. References to “diving” on this form encompass both recreational scuba diving and freediving. This form is principally designed as an initial medical screen for new divers, but is also appropriate for divers taking continuing education. For your safety, and that of others who may dive with you, answer all questions honestly.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4 class="title2">Directions</h4>
                <h6>Complete this questionnaire as a prerequisite to a recreational scuba diving or freediving course.</h6>
                <span><b>Note to women:</b> If you are pregnant, or attempting to become pregnant, <i>do not dive.</i></span>
            </div>
        </div>

        <br>
        <!-- Question 01 -->
        <table class="table question-table">
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>I have had problems with my lungs, breathing, heart and/or blood affecting my normal physical or mental performance.</td>
                    <td><?php echo $row["q1"];  ?></td>
                </tr>
            </tbody>
        </table>

        <!-- Box A -->
        <div id="boxA" style="display: <?php echo $displayBoxA; ?>;"> <!-- Set initial display state based on q1 value -->
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
                        <td><?php echo $row["q1_1"];  ?></td>
                    </tr>
                    <tr>
                        <td>Asthma, wheezing, severe allergies, hay fever or congested airways within the last 12 months that limits my physical activity/exercise.</td>
                        <td><?php echo $row["q1_2"];  ?></td>
                    </tr>
                    <tr>
                        <td>A problem or illness involving my heart such as: angina, chest pain on exertion, heart failure, immersion pulmonary edema, heart attack or stroke, OR am taking medication for any heart condition.</td>
                        <td><?php echo $row["q1_3"];  ?></td>
                    </tr>
                    <tr>
                        <td>Recurrent bronchitis and currently coughing within the past 12 months, OR have been diagnosed with emphysema.</td>
                        <td><?php echo $row["q1_4"];  ?></td>
                    </tr>
                    <tr>
                        <td>Symptoms affecting my lungs, breathing, heart and/or blood in the last 30 days that impair my physical or mental performance.</td>
                        <td><?php echo $row["q1_5"];  ?></td>
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
                    <td><?php echo $row["q2"];  ?></td>
                </tr>
            </tbody>
        </table>


        <!-- Box B -->
        <div id="boxB" style="display: <?php echo $displayBoxB; ?>;">
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
                        <td><?php echo $row["q2_1"];  ?></td>
                    </tr>
                    <tr>
                        <td>I have a high cholesterol level.</td>
                        <td><?php echo $row["q2_2"];  ?></td>
                    </tr>
                    <tr>
                        <td>I have high blood pressure.</td>
                        <td><?php echo $row["q2_3"];  ?></td>
                    </tr>
                    <tr>
                        <td>I have had a close blood relative die suddenly or of cardiac disease or stroke before the age of 50, OR have a family history of heart disease before age 50 (including abnormal heart rhythms, coronary artery disease or cardiomyopathy).</td>
                        <td><?php echo $row["q2_4"];  ?></td>
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
                    <td><?php echo $row["q3"];  ?></td>
                </tr>
            </tbody>
        </table>

        <!-- Question 04 -->
        <table class="table question-table">
            <tbody>
                <tr>
                    <td>4.</td>
                    <td text-align: left;>I have had problems with my eyes, ears, or nasal passages/sinuses.</td>
                    <td><?php echo $row["q4"];  ?></td>
                </tr>
            </tbody>
        </table>


        <!-- Box C -->
        <div id="boxC" style="display: <?php echo $displayBoxC; ?>;">
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
                        <td><?php echo $row["q4_1"];  ?></td>
                    </tr>
                    <tr>
                        <td>Ear disease or ear surgery, hearing loss, or problems with balance.</td>
                        <td><?php echo $row["q4_2"];  ?></td>
                    </tr>
                    <tr>
                        <td>Recurrent sinusitis within the past 12 months.</td>
                        <td><?php echo $row["q4_3"];  ?></td>
                    </tr>
                    <tr>
                        <td>Eye surgery within the past 3 months.</td>
                        <td><?php echo $row["q4_4"];  ?></td>
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
                    <td><?php echo $row["q5"];  ?></td>
                </tr>
            </tbody>
        </table>

        <!-- Question 06 -->
        <table class="table question-table">
            <tbody>
                <tr>
                    <td>6.</td>
                    <td text-align: left;>I have lost consciousness, had migraine headaches, seizures, stroke, significant head injury, or suffer from persistent neurologic injury or disease.</td>
                    <td><?php echo $row["q6"];  ?></td>
                </tr>
            </tbody>
        </table>

        <!-- Box D -->
        <div id="boxD" style="display: <?php echo $displayBoxD; ?>;">
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
                        <td><?php echo $row["q6_1"];  ?></td>
                    </tr>
                    <tr>
                        <td>Persistent neurologic injury or disease.</td>
                        <td><?php echo $row["q6_2"];  ?></td>
                    </tr>
                    <tr>
                        <td>Recurring migraine headaches within the past 12 months, or take medications to prevent them.</td>
                        <td><?php echo $row["q6_3"];  ?></td>
                    </tr>
                    <tr>
                        <td>Blackouts or fainting (full/partial loss of consciousness) within the last 5 years.</td>
                        <td><?php echo $row["q6_4"];  ?></td>
                    </tr>
                    <tr>
                        <td>Epilepsy, seizures, or convulsions, OR take medications to prevent them.</td>
                        <td><?php echo $row["q6_5"];  ?></td>
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
                    <td><?php echo $row["q7"];  ?></td>
                </tr>
            </tbody>
        </table>

        <!-- Box E -->
        <div id="boxE" style="display: <?php echo $displayBoxE; ?>;">
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
                        <td><?php echo $row["q7_1"];  ?></td>
                    </tr>
                    <tr>
                        <td>Major depression, suicidal ideation, panic attacks, uncontrolled bipolar disorder requiring medication/psychiatric treatment.</td>
                        <td><?php echo $row["q7_2"];  ?></td>
                    </tr>
                    <tr>
                        <td>Been diagnosed with a mental health condition or a learning/developmental disorder that requires ongoing care or special accommodation.</td>
                        <td><?php echo $row["q7_3"];  ?></td>
                    </tr>
                    <tr>
                        <td>An addiction to drugs or alcohol requiring treatment within the last 5 years.</td>
                        <td><?php echo $row["q7_4"];  ?></td>
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
                    <td><?php echo $row["q8"];  ?></td>
                </tr>
            </tbody>
        </table>

        <!-- Box F -->
        <div id="boxF" style="display: <?php echo $displayBoxF; ?>;">
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
                        <td><?php echo $row["q8_1"];  ?></td>
                    </tr>
                    <tr>
                        <td>Back or spinal surgery within the last 12 months.</td>
                        <td><?php echo $row["q8_2"];  ?></td>
                    </tr>
                    <tr>
                        <td>Diabetes, either drug or diet controlled, OR gestational diabetes within the last 12 months.</td>
                        <td><?php echo $row["q8_3"];  ?></td>
                    </tr>
                    <tr>
                        <td>An uncorrected hernia that limits my physical abilities.</td>
                        <td><?php echo $row["q8_4"];  ?></td>
                    </tr>
                    <tr>
                        <td>Active or untreated ulcers, problem wounds, or ulcer surgery within the last 6 months.</td>
                        <td><?php echo $row["q8_5"];  ?></td>
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
                    <td><?php echo $row["q9"];  ?></td>
                </tr>
            </tbody>
        </table>

        <!-- Box G -->
        <div id="boxG" style="display: <?php echo $displayBoxG; ?>;">
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
                        <td><?php echo $row["q9_1"];  ?></td>
                    </tr>
                    <tr>
                        <td>Dehydration requiring medical intervention within the last 7 days.</td>
                        <td><?php echo $row["q9_2"];  ?></td>
                    </tr>
                    <tr>
                        <td>Active or untreated stomach or intestinal ulcers or ulcer surgery within the last 6 months.</td>
                        <td><?php echo $row["q9_3"];  ?></td>
                    </tr>
                    <tr>
                        <td>Frequent heartburn, regurgitation, or gastroesophageal reflux disease (GERD).</td>
                        <td><?php echo $row["q9_4"];  ?></td>
                    </tr>
                    <tr>
                        <td>Active or uncontrolled ulcerative colitis or Crohn’s disease.</td>
                        <td><?php echo $row["q9_5"];  ?></td>
                    </tr>
                    <tr>
                        <td>Bariatric surgery within the last 12 months.</td>
                        <td><?php echo $row["q9_6"];  ?></td>
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
                    <td><?php echo $row["q10"];  ?></td>
                </tr>
            </tbody>
        </table>


        <div class="col-md-12 border border-dark rounded">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="title2">Participant Signature</h4>
                    <p><strong>If you answered NO</strong> to all 10 questions above, a medical evaluation is not required. Please read and agree to the participant statement below by signing and dating it.</p>
                    <p><strong>Participant Statement: </strong>I have answered all questions honestly, and understand that I accept responsibility for any consequences resulting from any questions I may have answered inaccurately or for my failure to disclose any existing or past health conditions.</p>
                </div>



                <div class="row mt-2">
                    <div class="col-md-12">
                        <label class="sign-label">Participant Signature</label>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <form class="mt-3" id="participantSignatureForm">
                        <div class="form-group canvas-container">
                            <!-- Set canvas dimensions relative to the screen size -->

                            <?php echo '<img class="signature-canvas" src="' . $participantSignatureData . '" alt="Participant Signature">'; ?>

                            <span>Date : <?php echo $participantDate ?></span>

                        </div>

                    </form>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-12">
                    <label>Signature of Parent of Guardian (where applicable)</label>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <form class="mt-3" id="parentSignatureForm">
                        <div class="form-group canvas-container">
                            <?php echo '<img class="signature-canvas" src="' . $parentSignatureData . '" alt="Participant Signature">'; ?>
                            <span>Date : <?php echo $parentDate ?></span>
                        </div>

                    </form>
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
        </div>

        <br>

        <div class="row">
            <div class="col-md-12">
                <h5 class="title3"><strong>Diver Medical | </strong> Medical Examiner’s Evaluation Form</h5>
            </div>
        </div>

        <p>The above-named person requests your opinion of his/her medical suitability to participate in recreational scuba diving or freediving training or activity. Please visit uhms.org for medical guidance on medical conditions as they relate to diving. Review the areas relevant to your patient as part of your evaluation.</p>

        <h3>Evaluation Result</h3>
        <table class="evaluation-table">
            <tbody>
                <tr>
                    <td><input class="form-check-input" type="radio" name="status" value="Approved" required><Label> <strong>Approved – </strong> I find no conditions that I consider incompatible with recreational scuba diving or freediving.</Label></td>
                </tr>
                <tr>
                    <td><input class="form-check-input" type="radio" name="status" value="Not Approved" required><Label> <strong>Not approved –</strong> I find conditions that I consider incompatible with recreational scuba diving or freediving</Label></td>
                </tr>
            </tbody>
        </table>



        <div class="row">
            <div class="row mt-2">
                <div class="col-md-12">
                    <label class="sign-label">Signature of certified medical doctor or other legally certified medical provider</label>
                </div>
            </div>
        </div>

        <form class="mt-3" id="medicalExaminerSignatureForm">
            <div class="form-group canvas-container">
                <!-- Set canvas dimensions relative to the screen size -->
                <canvas id="medicalExaminerSignatureCanvas" class="signature-canvas" width="350%" height="400"></canvas>
            </div>
            <div class="form-group btn-container">
                <!-- Adjust button sizes for better usability on smaller screens -->

                <button type="button" class="btn btn-secondary btn-sm" onclick="clearSignature()">Clear</button>
            </div>
        </form>

        <div id="alert-container"></div>

        <div class="row">
            <div class="row mt-2 ml-2">
                <div class="col-md-12">
                    <label class="examiner-info">Medical Examiner’s Name :</label>
                    <label><?php echo $examinerName; ?></label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="row mt-2 ml-2">
                <div class="col-md-12">
                    <label class="examiner-info">Clinical Degrees/Credentials :</label>
                    <label><?php echo $degree; ?></label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="row mt-2 ml-2">
                <div class="col-md-12">
                    <label class="examiner-info">Clinic/Hospital :</label>
                    <label> <?php echo $clinic; ?> </label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="row mt-2 ml-2">
                <div class="col-md-12">
                    <label class="examiner-info">Address :</label>
                    <label> <?php echo $address; ?> </label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="row mt-2 ml-2">
                <div class="col-md-12">
                    <label class="examiner-info">Phone :</label>
                    <label> <?php echo $phone; ?> </label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="row mt-2 ml-2">
                <div class="col-md-12">
                    <label class="examiner-info">Email :</label>
                    <label> <?php echo $email; ?> </label>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 btn-container">

                <button type="button" class="btn btn-primary btn-sm mb-4 ml-2" onclick="handleFormSubmission()">Submit</button>

            </div>
        </div>

    </div>



    <!-- Bootstrap JS and jQuery (for showing/hiding Box A based on user selection) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Participant Signature
        let medicalExaminerSignatureCanvas = document.getElementById('medicalExaminerSignatureCanvas');
        let ctx = medicalExaminerSignatureCanvas.getContext('2d');
        let drawing = false;
        let points = [];

        function startDrawing(e) {
            drawing = true;
            points = [];
            draw(e);
        }

        function draw(e) {
            if (!drawing) return;

            e.preventDefault();

            ctx.lineWidth = 2;
            ctx.lineCap = 'round';
            ctx.strokeStyle = '#000';

            // Adjust touch coordinates
            const currentX = e.clientX || e.touches[0].clientX - medicalExaminerSignatureCanvas.getBoundingClientRect().left;
            const currentY = e.clientY || e.touches[0].clientY - medicalExaminerSignatureCanvas.getBoundingClientRect().top;

            points.push({
                x: currentX,
                y: currentY
            });

            if (points.length > 1) {
                const prevPoint = points[points.length - 2];
                const currentPoint = points[points.length - 1];

                // Draw a line segment
                ctx.beginPath();
                ctx.moveTo(prevPoint.x, prevPoint.y);
                ctx.lineTo(currentPoint.x, currentPoint.y);
                ctx.stroke();
            }
        }

        function stopDrawing() {
            if (drawing) {
                drawing = false;
                // Capture the final point when stopping drawing
                drawFinalPoint();
            }
        }

        function drawFinalPoint() {
            if (points.length > 0) {
                const finalPoint = points[points.length - 1];
                // Add a full stop at the final point
                ctx.lineWidth = 2;
                ctx.lineCap = 'round';
                ctx.strokeStyle = '#000';
                ctx.beginPath();
                ctx.arc(finalPoint.x, finalPoint.y, 1, 0, 2 * Math.PI);
                ctx.stroke();
            }
        }

        medicalExaminerSignatureCanvas.addEventListener('mousedown', startDrawing);
        medicalExaminerSignatureCanvas.addEventListener('mousemove', draw);
        medicalExaminerSignatureCanvas.addEventListener('mouseup', stopDrawing);

        // Touch events
        medicalExaminerSignatureCanvas.addEventListener('touchstart', startDrawing);
        medicalExaminerSignatureCanvas.addEventListener('touchmove', draw);
        medicalExaminerSignatureCanvas.addEventListener('touchend', stopDrawing);

        function saveSignature() {
            let medicalExaminerSignatureData = medicalExaminerSignatureCanvas.toDataURL();
            let formData = new FormData(document.getElementById('medicalExaminerSignatureForm'));

            formData.append('medicalExaminerSignatureData', medicalExaminerSignatureData);
            // Send the formData to the server using AJAX
            sendToServer(formData);
        }

        function clearSignature() {
            ctx.clearRect(0, 0, medicalExaminerSignatureCanvas.width, medicalExaminerSignatureCanvas.height);
        }

        function handleFormSubmission() {

            // Approvals
            let q1Value = document.querySelector('input[name="status"]:checked');
            if (q1Value === null) {
                showAlert('danger', 'Your Evaluation Result Required');
                return;
            }

            // Capture the final point before form submission
            let medicalExaminerSignatureData = medicalExaminerSignatureCanvas.toDataURL();
            drawFinalPoint(); // Capture the final point for medical examiner signature

            let medicalExaminerSignatureDate = new Date().toISOString();


            let formData = new FormData();
            appendRadioValue(formData, 'status');
            formData.append('userID', <?php echo $userID; ?>);
            formData.append('medicalExaminerSignatureData', medicalExaminerSignatureData);
            formData.append('medicalExaminerSignatureDate', medicalExaminerSignatureDate);

            sendToServer(formData);

        }

        function appendRadioValue(formData, name) {
            let element = document.querySelector(`input[name="${name}"]:checked`);
            if (element) {
                formData.append(name, element.value);
            } else {

            }
        }

        function sendToServer(formData) {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'participantQuestionnaire_process.php', true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        // Display success message using Bootstrap alert
                        showAlert('success', 'Form submitted successfully');
                        // Redirect to doc4_view.php
                        window.location.href = '/medical/participant_list.php';

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

</body>

</html>

<?Php
// Close the connection
$conn->close();
?>