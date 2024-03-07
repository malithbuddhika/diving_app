<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav_submitted.php';
?>

<?php

include $_SERVER['DOCUMENT_ROOT'] . '/connection.php';

$userID = $_SESSION['userID'];

// Query to retrieve medical examiner data from medical_examiner
$queryDoc1 = "SELECT * FROM doc1 WHERE userID = $userID ;";
$resultDoc1 = mysqli_query($conn, $queryDoc1);
$rowDoc1 = mysqli_fetch_assoc($resultDoc1);
$divemaster = $rowDoc1['divemaster'];
$crewMember = $rowDoc1['crewMember'];
$captain = $rowDoc1['captain'];
$vesselName = $rowDoc1['vesselName'];
$participantname = $rowDoc1['participantname'];
$participantSignature = $rowDoc1['participantSignature'];
$participantDate = $rowDoc1['participantDate'];
$parentSignature = $rowDoc1['parentSignature'];
$parentDate = $rowDoc1['parentDate'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Doc1</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
        .logo {
            display: block;
            margin: auto;
            max-width: 100%;
            height: auto;
        }

        .title {
            margin-top: 10px;
            font-size: 16px;
            border-bottom: 4px solid #000;
            padding-bottom: 5px;
        }

        .canvas-container {
            text-align: center;
        }

        .signature-canvas {
            border: 1px solid #ccc;
        }

        body {
            overflow-x: hidden;
        }

        #submit-doc1:disabled {
            opacity: 0.5;
            pointer-events: none;
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
            <img class="logo" src="logo.jpg" alt="logo">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h2 class="title">STATEMENT OF RISKS AND LIABILITY – <br>SCUBA DIVING TRIPS AND BOAT TRAVEL <br>(PADI
                International Ltd)</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h3>Please read carefully and fill in all blanks before signing</h3>

            <p>This is a statement in which you are informed of the risks of hazards occurring
                whilst travelling to and participating in scuba dives either as a certified diver or as a student under
                the
                control and supervision of a certified scuba instructor. This statement covers recreational scuba dive
                trips and
                scuba dive trips carried out as part of a scuba diving class.
                This statement also sets out the circumstances in which you participate in the scuba diving trip at your
                own
                risk.</p>
            <p>This is a statement in which you are informed of the risks of hazards occurring whilst travelling to and
                participating in scuba dives either as a certified diver or as a student under the control and
                supervision of a
                certified scuba instructor. This statement covers recreational scuba dive trips and scuba dive trips
                carried out
                as part of a scuba diving class.
                This statement also sets out the circumstances in which you participate in the scuba diving trip at your
                own
                risk.</p>

            <h3>WARNING</h3>
            <p>Skin and scuba diving have inherent risks which may result in serious injury or death.</p>
            <p>Diving with compressed air involves certain inherent risks; decompression sickness, embolism or other
                hyperbaric
                injury can occur that require treatment in a recompression chamber. Open water scuba diving trips may be
                conducted at a site that is remote, either by time or distance, from such a recompression chamber.</p>
            <p>In addition, during boat travel to and from dive sites, you should follow all safety instructions from
                the
                captain / crew members and take care while getting on or off the boat and while on board to avoid
                slipping,
                falling or drowning.
            </p>

            <h3>EXCLUSION OF LIABILITY</h3>
            <p><strong>I understand and agree that neither</strong></p>
            <div class="row">
                <div class="col-md-12">
                    <label for="divemaster">Divemaster's Name : </label>
                    <span class="crew" id="divemaster">
                        <?php

                        echo $divemaster . ", ";

                        ?>
                    </span>

                    <label for="crewMember">Crew Member's Name : </label>
                    <span class="crew" id="crewMember">
                        <?php

                        echo $crewMember . ", ";

                        ?>
                    </span>

                    <label for="captain">Captain's Name : </label>
                    <span class="crew" id="captain">
                        <?php

                        echo $captain . ", ";

                        ?>
                    </span>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <p><strong>nor the crew or the owner of the vessel,</strong></p>

                    <label for="vesselName">Vessel Name : </label>
                    <span class="vessel" id="vesselName">
                        <?php

                        echo $vesselName . ", ";

                        ?>
                    </span>
                </div>
            </div>

            <p><strong> PADI International Ltd., nor PADI Americas Inc., nor their affiliate or subsidiary companies,
                    nor any
                    of their respective employees, officers, agents or assigns (hereinafter referred to as “Released
                    Parties”)
                    accept any responsibility for any death, injury or other loss suffered or caused by me or resulting
                    from my
                    own conduct or any matter or condition under my control which amounts to my own contributory
                    negligence,
                    during or as a consequence of my participation in this scuba diving trip.</strong></p>
            <p><strong>In the absence of any negligence or breach of duty by the crew or owner of the vessel, PADI
                    International
                    Ltd., PADI Americas, Inc., and all released entities and released parties as defined above, my
                    participation
                    in this scuba diving trip is entirely at my own risk.</strong></p>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form>
                <label for="participantname">Participant's Name : </label>
                <!-- Input field for participant's name -->
                <?php

                echo $participantname;

                ?>
            </form>
        </div>
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

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script>



    </script>



</body>

</html>