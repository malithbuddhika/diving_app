<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav_submitted.php';

?>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/connection.php';

$userID = $_SESSION['userID'];


// Query to retrieve medical examiner data from medical_examiner
$queryDoc2 = "SELECT * FROM doc2 WHERE userID = $userID ;";
$resultDoc2 = mysqli_query($conn, $queryDoc2);
$rowDoc2 = mysqli_fetch_assoc($resultDoc2);

$instructorName = $rowDoc2['instructorName'];
$resortName = $rowDoc2['resortName'];
$participantSignature = $rowDoc2['participantSignature'];
$participantDate = $rowDoc2['participantDate'];
$parentSignature = $rowDoc2['parentSignature'];
$parentDate = $rowDoc2['parentDate'];
$diverAccidentInsurance = $rowDoc2['diverAccidentInsurance'];
$policyNumber = $rowDoc2['policyNumber'];

$queryDoc0 = "SELECT participantname FROM doc0 WHERE userID = $userID ;";
$resultDoc0 = mysqli_query($conn, $queryDoc0);
$rowDoc0 = mysqli_fetch_assoc($resultDoc0);

$participantname = $rowDoc0['participantname'];

$formattedParticipantDate = date("d/m/Y", strtotime($participantDate));
$formattedParentDate = date("d/m/Y", strtotime($parentDate));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/includes/style.css"> 
    <title>Risk and Liability/Non-agency Acknowledgment</title>
</head>

<body class="container">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img class="logoDoc2" src="logo.png" alt="logo">
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h3 class="titleDoc2">Statement of Risk and Liability/Non-agency Acknowledgment Form</h3>
                <h1 class="title2Doc2"> <strong>DIVER ACTIVITIES</strong></h1>
                <h5 class="title_bottom">(EU Version)</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <p class="paragraph"><strong>Please read carefully and fill in all blanks before signing</strong></p>
                <h4 class="text-center">Non-Agency Disclosure and Acknowledgment Agreement</h4>
            </div>
        </div>

        <p class="paragraph">I understand and agree that PADI® Members (“Members”), including

            <span id="resortSelect" class="spaces">
                <?php echo $resortName; ?>
            </span>
            , and/or any individual PADI Instructors and Divemasters associated with the program in which I am participating, are licensed to use various PADI Trademarks and to conduct PADI training, but are not agents, employees or franchisees of PADI EMEA Ltd., PADI Americas, Inc., or its parent, subsidiary and affiliated corporations (“PADI”). I further understand that Member business activities are independent, and are neither owned nor operated by PADI, and that while PADI establishes the standards for PADI diver training programs, it is not responsible for, nor does it have the right to control, the operation of the Members’ business activities and the day-to-day conduct of PADI programs and supervision of divers by the Members or their associated staff.
        </p>

        <h5 class="text-center">Statement of Risk and Liability</h5>

        <p class="paragraph">This is a statement in which you, the certified diver, or a student diver under the control and supervision of a certified scuba instructor, are informed that skin diving, freediving and scuba diving have inherent risks, including those risks associated with boat travel to and from the dive site. The statement also sets out the circumstances in which you participate in the diving experience at your own risk.</p>

        <p class="paragraph">Your signature on this statement is required as proof that you have received, read and understood this statement. It is important that you read the contents of this statement before signing it. If you do not understand anything contained in this statement, then you should discuss it with your instructor. If you are a minor, this form must also be signed by a parent or guardian.</p>

        <h6 class="paragraph">Warning</h6>
        <p class="paragraph">Skin diving, freediving and scuba diving have inherent risks which may result in serious injury or death.</p>
        <p class="paragraph">Diving with compressed air involves certain inherent risks; decompression sickness, embolism or other hyperbaric injury can occur that require treatment in a recompression chamber. Risks also include slipping or falling while on board a boat, if one is used, being cut or struck by a boat while in the water, injuries occurring while getting on or off a boat, and other perils of the sea. Open water diving trips that may be necessary for this experience may be conducted at a site that is remote, either by time or distance or both, from such a recompression chamber. Skin diving, freediving and scuba diving are physically strenuous activities and you will be exerting yourself during this diving experience. Past or present medical conditions may be contraindicative to your participation in this experience. You must be in good mental and physical fitness for diving, and not under the influence of alcohol, nor any drugs that are contraindicatory to diving. If you are taking medications, you affirm that you have seen a physician and have approval to dive under the influence of the medications/drugs. You must inspect all of your equipment prior to this experience and notify the dive professionals and the facility through which this experience is offered if any of your equipment is not working properly.</p>
        <p class="paragraph">If diving from a boat, you must be present at and attentive to the briefing given by the boat crew. If there is anything you do not understand you will notify the boat crew or captain immediately.</p>
        <p class="paragraph">You must follow safe dive practices and plan dives as no-decompression dives and within parameters that allow a safety stop before ascending to the surface, arriving on board the vessel with gas remaining in your cylinder as a measure of safety. If distressed on the surface, you must immediately drop your weights and inflate your BCD (orally or with the low pressure inflator) to establish buoyancy on the surface.</p>
        <p class="paragraph">If a Guide is present to assist during the dive, and you choose to dive with the Guide, it is your responsibility to stay in proximity to the Guide during the dive.</p>

        <h5 class="text-center">Acceptance of Risk</h5>

        <p class="paragraph">I understand and agree that neither the dive professionals conducting this program,



            <span id="instructorSelect" class="spaces">

                <?php echo $instructorName; ?>

            </span>
        </p>

        , nor
        <p class="paragraph">the facility through which this program is conducted,

            <!-- resort name -->
            <label class="spaces"> <?php echo $resortName; ?></label>

            , nor PADI EMEA Ltd., nor

            PADI Americas, Inc. nor their affiliate or subsidiary corporations, nor any of their respective employees, officers, agents, contractors or assigns accept any responsibility for any death, injury or other loss suffered by me to the extent that it results from my own conduct or any matter or condition under my control that amounts to my own contributory negligence.
        </p>
        <p class="paragraph">In the absence of any negligence or other breach of duty by the dive professionals conducting this program,
            <label class="spaces"> <?php echo $instructorName; ?></label>
        </p>

        <p class="paragraph">the facility through which this program is offered,

            <!-- resort name -->

            <label class="spaces"> <?php echo $resortName; ?></label>

            PADI EMEA Ltd., PADI Americas, Inc. and all parties referred to above, my participation in this diving program is entirely at my own risk.
        </p>
        <p class="paragraph">I HAVE FULLY INFORMED MYSELF OF THE CONTENTS OF THIS NON-AGENCY DISCLOSURE AND ACKNOWLEDGMENT AGREEMENT AND STATEMENT OF RISK AND LIABILITY BY READING BOTH BEFORE SIGNING THESE STATEMENTS.</p>
        <p class="paragraph">I acknowledge and agree that this Diver Activities form will be effective for one (1) year from the date on which I sign for any skin diving, freediving or scuba diving activities in which I participate with the named PADI Members.</p>


        <div class="row">
            <div class="col-md-12">
                <form>
                    <label for="participantname">Participant's Name:</label>
                    <!-- Input field for participant's name -->
                    <label class="spaces"> <?php echo $participantname; ?></label>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form class="mt-3" id="participantSignatureForm">
                <div class="form-group canvas-container">
                    <!-- Set canvas dimensions relative to the screen size -->
                    <label class="sign-label">Participant Signature</label>
                    <?php echo '<img class="signature-canvas" src="' . $participantSignature . '" alt="Participant Signature">'; ?>
                    <span>Date : <?php echo $formattedParticipantDate ?></span>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form class="mt-3" id="participantSignatureForm">
                <div class="form-group canvas-container">
                    <!-- Set canvas dimensions relative to the screen size -->
                    <label>Signature of Parent of Guardian (where applicable)</label>
                    <?php echo '<img class="signature-canvas" src="' . $parentSignature . '" alt=" Parent Signature">'; ?>
                    <span>Date : <?php echo $formattedParentDate ?></span>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-12">
            <div id="policyNumberInput">
                <label>Diver Accident Insurance? <?php echo $diverAccidentInsurance ?></label>
                <label for="policyNumber">Enter Policy Number: <?php echo $policyNumber ?></label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 btn-container">

            <button type="button" id="submit-doc1" class="btn btn-primary btn-sm disable" disabled>Submitted</button>


        </div>
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