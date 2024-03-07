<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav_submitted.php';
?>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/connection.php';

$userID = $_SESSION['userID'];


// Query to retrieve medical examiner data from medical_examiner
$queryDoc3 = "SELECT * FROM doc3 WHERE userID = $userID ;";
$resultDoc3 = mysqli_query($conn, $queryDoc3);
$rowDoc3 = mysqli_fetch_assoc($resultDoc3);

$instructorName = $rowDoc3['instructorName'];
$resortName = $rowDoc3['resortName'];
$participantname = $rowDoc3['participantname'];
$participantSignature = $rowDoc3['participantSignature'];
$participantDate = $rowDoc3['participantDate'];
$parentSignature = $rowDoc3['parentSignature'];
$parentDate = $rowDoc3['parentDate'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Doc 3</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
        .logo {
            display: block;
            margin: auto;
            max-width: 100%;
            height: auto;
        }

        .title-container {
            position: relative;
            background: black;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-right: 5px;
            padding-left: 5px;
        }

        .title {
            color: white;
            margin: 0;
            padding: 0;
        }

        .sub-titile {
            margin-top: 10px;
        }

        .spaces {
            text-decoration: underline;
            font-weight: bold;

        }

        .canvas-container {
            text-align: center;
        }

        .signature-canvas {
            border: 1px solid #ccc;
        }

        @media (max-width: 768px) {
            .logo {
                max-width: 15%;
                /* Adjusted for smaller screens */
            }

            body {
                margin-bottom: 15px;
            }

        }

        @media (max-width: 576px) {
            .logo {
                max-width: 15%;
                /* Further adjusted for smaller screens */

            }

            body {
                margin-bottom: 15px;
                overflow-x: hidden;
            }

        }
       
        #homeBtn {
            float: right;
            margin-top: -51px;
            margin-right: 12;
        }
    </style>
</head>

<body class="container">

    <div class="row">
        <div class="col-md-12">
            <img class="logo" src="logo.png" alt="logo">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="title-container">
                <h2 class="title">Non-Agency Disclosure and Acknowledgment Agreement</h2>
            </div>

            <h5 class="sub-titile">In European Union and European Free Trade Association countries use alternative form</h6>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h3>Please read carefully and fill in all blanks before signing.</h3>

            <p>I understand and agree that PADI Members (“Members”), including  <label class="underline"> <?php echo $resortName; ?></label> and/or any individual PADI Instructors and Divemasters associated with the program in which I am participat- ing, are licensed to use various PADI Trademarks and to conduct PADI training, but are not agents, employees or franchisees of PADI Americas, Inc, or its parent, subsidiary and affiliated corporations (“PADI”). I further understand that Member business activities are independent, and are neither owned nor operated by PADI, and that while PADI establishes the standards for PADI diver train- ing programs, it is not responsible for, nor does it have the right to control, the operation of the Members’ business activities and the day-to day conduct of PADI programs and supervision of divers by the Members or their associated staff. I further understand and agree on behalf of myself, my heirs and my estate that in the event of an injury or death during this activity, neither I nor my es-

                tate shall seek to hold PADI liable for the actions, inactions or negligence of  <label class="underline"> <?php echo $resortName; ?></label> and/or the instructors and divemasters associated with the activity.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="title-container">
                <h2 class="title">Non-Agency Disclosure and Acknowledgment Agreement</h2>
            </div>
            <h5 class="sub-titile">In European Union and European Free Trade Association countries use alternative form</h6>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h3>Please read carefully and fill in all blanks before signing.</h3>
            <p>I, <label class="underline"> <?php echo $participantname; ?></label>hereby affirm that I am aware that skin and scuba diving have inherent risks which may result in serious injury or death.</p>
            <p>I understand that diving with compressed air involves certain inherent risks; including but not limited to decompression sickness, embolism or other hyperbaric/air expansion injury that require treatment in a recompression chamber. I further understand that the open water diving trips which are necessary for training and for certification may be conducted at a site that is remote, either by time or distance or both, from such a recompression chamber. I still choose to proceed with such instructional dives in spite of the possible absence of a recompression chamber in proximity to the dive site.
            <p>I understand and agree that neither my instructor( s),<label class="underline"> <?php echo $instructorName; ?></label>
                the facility through which I receive my instruction, <label class="underline"> <?php echo $resortName; ?></label>
                nor PADI Americas, Inc., nor its affiliate and subsidiary corporations, nor any of their respective employees, officers, agents, contractors or assigns (hereinafter referred to as “Released Parties”) may be held liable or responsible in any way for any injury, death or other damages to me, my family, estate, heirs or assigns that may occur as a result of my participation in this diving program or as a result of the negligence of any party, including
                the Released Parties, whether passive or active.
                In consideration of being allowed to participate in this course (and optional Adventure Dive), hereinafter referred to as “program,” I hereby personally assume all risks of this program, whether foreseen or unforeseen, that may befall me while I am a participant in this program including, but not limited to, the academics, confined water and/or open water activities.
            </p>
            <p>
                I further release, exempt and hold harmless said program and Re- leased Parties from any claim or lawsuit by me, my family, estate, heirs or assigns, arising out of my enrollment and participation in this program including both claims arising during the program or after I receive my certification.
            </p>

            <p>
                I also understand that skin diving and scuba diving are physically strenuous activities and that I will be exerting myself during this program, and that if I am injured as a result of heart attack, panic, hyperventilation, drowning or any other cause, that I expressly as- sume the risk of said injuries and that I will not hold the Released Parties responsible for the same.

            </p>
            <p>
                I further state that I am of lawful age and legally competent to sign this liability release, or that I have acquired the written consent of my parent or guardian. I understand the terms herein are contractual and not a mere recital, and that I have signed this Agreement of my own free act and with the knowledge that I hereby agree to waive my legal rights. I further agree that if any provision of this Agree- ment is found to be unenforceable or invalid, that provision shall be severed from this Agreement. The remainder of this Agreement will then be construed as though the unenforceable provision had never been contained herein.

            </p>
            <p>
                I understand and agree that I am not only giving up my right to sue the Released Parties but also any rights my heirs, assigns, or benefi- ciaries may have to sue the Released Parties resulting from my death. I further represent I have the authority to do so and that my heirs, assigns, or beneficiaries will be estopped from claiming otherwise because of my representations to the Released Parties.
            </p>
            <p>
                I, <label class="underline"> <?php echo $participantname; ?></label>, BY THIS INSTRUMENT AGREE TO EXEMPT AND RELEASE MY
                INSTRUCTORS,.............................THE FACILITY THROUGH WHICH I
                RECEIVE MY INSTRUCTION,...................................., AND
                PADI AMERICAS, INC., AND ALL RELATED ENTITIES AS DEFINED ABOVE, FROM ALL LIABILITY OR RESPONSIBILITY WHATSOEVER FOR PERSONAL INJURY, PROPERTY DAMAGE OR WRONGFUL DEATH HOWEVER CAUSED, INCLUDING, BUT NOT LIMITED TO, THE NEGLI- GENCE OF THE RELEASED PARTIES, WHETHER PASSIVE OR ACTIVE.

            </p>
            <p><strong>I HAVE FULLY INFORMED MYSELF AND MY HEIRS OF THE CONTENTS OF THIS NON-AGENCY DISCLOSURE AND ACKNOWLDGE- MENT AGREEMENT AND LIABILITY RELEASE AND ASSUMPTION OF RISK AGREEMENT BY READING BOTH BEFORE SIGNING BELOW ON BEHALF OF MYSELF AND MY HEIRS.</strong></p>


        </div>

        <div class="row mt-2">
            <div class="col-md-12">
                <label>Participant Signature</label>
            </div>
        </div>

    </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form class="mt-3" id="participantSignatureForm">
                <div class="form-group canvas-container">
                    <!-- Set canvas dimensions relative to the screen size -->

                    <?php echo '<img class="signature-canvas" src="' . $participantSignature . '" alt="Participant Signature">'; ?>

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
            <form class="mt-3" id="participantSignatureForm">
                <div class="form-group canvas-container">
                    <!-- Set canvas dimensions relative to the screen size -->

                    <?php echo '<img class="signature-canvas" src="' . $parentSignature . '" alt=" Parent Signature">'; ?>

                    <span>Date : <?php echo $parentDate ?></span>

                </div>

            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 btn-container">

        <button type="button" id="submit-doc1" class="btn btn-primary btn-sm disable" disabled>Submitted</button>

        </div>
    </div>


    <script>
        
    </script>



</body>

</html>