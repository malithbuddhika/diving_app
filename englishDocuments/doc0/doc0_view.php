<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav_submitted.php';
?>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/connection.php';

$userID = $_SESSION['userID'];
$queryDoc0 = "SELECT * FROM doc0 WHERE userID = $userID ;";
$resultDoc0 = mysqli_query($conn, $queryDoc0);
$rowDoc0 = mysqli_fetch_assoc($resultDoc0);

$participantname = $rowDoc0['participantname'];
$participantSignature = $rowDoc0['participantSignature'];
$participantDate = $rowDoc0['participantDate'];
$parentSignature = $rowDoc0['parentSignature'];
$parentDate = $rowDoc0['parentDate'];

$formattedParticipantDate = date("d/m/Y", strtotime($participantDate));
$formattedParentDate = date("d/m/Y", strtotime($parentDate));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document 3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/includes/style.css">
    </style>
</head>

<body class="container">
    <div class="row">
        <div class="col-md-2">
            <img class="logo-Doc0" src="logo.png" alt="logo">
        </div>
        <div class="col-md-10">
            <div class="title-container-Doc0">
                <h3 class="title-Doc0">Standard Safe Diving Practices Statement of Understanding</h3>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <h6> <strong>Please read carefully and fill in all blanks before signing.</strong></h6>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <p>This is a statement in which you are informed of the established safe diving practices for skin and scuba diving. These practices have been compiled for your review and acknowledgement and are intended to increase your comfort and safety in diving. Your signature on this statement is required as proof that you are aware of these safe diving practices. Read and discuss the statement prior to signing it. If you are a minor, this form must also be signed by a parent or guardian.</p>
        </div>
    </div>

    <p>I, <label class="spaces"> <?php echo $participantname; ?></label>, understand that as a diver I should:</p>
    <p>1. Maintain good mental and physical fitness for diving. Avoid being under the influence of alcohol or dangerous drugs when diving. Keep proficient in diving skills, striving to increase them through continuing education and reviewing them in controlled conditions after a period of diving inactivity, and refer to my course materials to stay current and refresh myself on important information.</p>
    <p>2. Be familiar with my dive sites. If not, obtain a formal diving orientation from a knowledgeable, local source. If diving conditions are worse than those in which I am experienced, postpone diving or select an alternate site with better conditions. Engage only in diving activities consistent with my training and experience. Do not engage in cave or technical diving unless specifically trained to do so.</p>
    <p>3. Use complete, well-maintained, reliable equipment with which I am familiar; and inspect it for correct fit and function prior to each dive. Have a buoyancy control device, low-pressure buoyancy control inflation system, submersible pressure gauge and alternate air source and dive planning/monitoring device (dive computer, RDP/dive tables-whichever you are trained to use) when scuba diving. Deny use of my equipment to uncertified divers.</p>
    <p>4. Listen carefully to dive briefings and directions and respect the advice of those supervising my diving activities. Re- cognize that additional training is recommended for participation in specialty diving activities, in other geographic areas and after periods of inactivity that exceed six months.</p>
    <p>5. Adhere to the buddy system throughout every dive. Plan dives – including communications, procedures for reuniting in case of separation and emergency procedures – with my buddy.</p>
    <p>6. Be proficient in dive planning (dive computer or dive table use). Make all dives no decompression dives and allow a margin of safety. Have a means to monitor depth and time underwater. Limit maximum depth to my level of training and experience. Ascend at a rate of not more than 18 meters/60 feet per minute. Be a SAFE diver – <b>S</b>lowly <b>A</b>scend <b>F</b>rom <b>E</b>very dive. Make a safety stop as an added precaution, usually at 5 meters/15 feet for three minutes or longer.</p>
    <p>7. Maintain proper buoyancy. Adjust weighting at the surface for neutral buoyancy with no air in my buoyancy control device. Maintain neutral buoyancy while underwater. Be buoyant for surface swimming and resting. Have weights clear for easy removal, and establish buoyancy when in distress while diving. Carry at least one surface signaling device (such as signal tube, whistle, mirror).</p>
    <p>8. Breathe properly for diving. Never breath-hold or skip-breathe when breathing compressed air, and avoid excessive hyperventilation when breath-hold diving. Avoid overexertion while in and underwater and dive within my limitations.</p>
    <p>9. Use a boat, float or other surface support station, whenever feasible.</p>
    <p>10. Know and obey local dive laws and regulations, including fish and game and dive flag laws.</p>

    <h6><strong>I understand the importance and purposes of these established practices. I recognize they are for my own safety and well-being, and that failure to adhere to them can place me in jeopardy when diving.</strong> </h6>

    <div class="row">
        <div class="col-md-12">
            <form class="mt-3" id="participantSignatureForm">
                <div class="form-group canvas-container">
                    <!-- Set canvas dimensions relative to the screen size -->
                    <label>Participant Signature</label>
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
                    <label>Signature of Parent of Guardian (where applicable)</label>
                    <?php echo '<img class="signature-canvas" src="' . $parentSignature . '" alt=" Parent Signature">'; ?>
                    <span>Date : <?php echo $formattedParentDate ?></span>

                </div>

            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 btn-container">

            <button type="button" id="submit-doc1" class="btn btn-primary btn-sm disable" disabled>Submitted</button>

        </div>
    </div>

</body>

</html>