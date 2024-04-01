<?php
session_start();
?>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/connection.php';

$userID = $_GET['userID'];
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Document 3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/includes/style.css">
    </style>
</head>

<body class="container">
    <div class="row">
        <div class="col-md-2">
            <img class="logo-Doc0" src="logo_0.png" alt="logo">
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
    <p>4. Listen carefully to dive briefings and directions and respect the advice of those supervising my diving activities. Recognize that additional training is recommended for participation in specialty diving activities, in other geographic areas and after periods of inactivity that exceed six months.</p>
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

    <div class="page-numbers"> Page - 01</div>
    <div class="line-separetor"></div>

    <?php

    // Query to retrieve medical examiner data from medical_examiner
    $queryDoc1 = "SELECT * FROM doc1 WHERE userID = $userID ;";
    $resultDoc1 = mysqli_query($conn, $queryDoc1);
    $rowDoc1 = mysqli_fetch_assoc($resultDoc1);
    $divemaster = $rowDoc1['divemaster'];
    $crewMember = $rowDoc1['crewMember'];
    $captain = $rowDoc1['captain'];
    $vesselName = $rowDoc1['vesselName'];
    $participantSignature = $rowDoc1['participantSignature'];
    $participantDate = $rowDoc1['participantDate'];
    $parentSignature = $rowDoc1['parentSignature'];
    $parentDate = $rowDoc1['parentDate'];

    $queryDoc0 = "SELECT participantname FROM doc0 WHERE userID = $userID ;";
    $resultDoc0 = mysqli_query($conn, $queryDoc0);
    $rowDoc0 = mysqli_fetch_assoc($resultDoc0);

    $participantname = $rowDoc0['participantname'];


    $formattedParticipantDate = date("d/m/Y", strtotime($participantDate));
    $formattedParentDate = date("d/m/Y", strtotime($parentDate));


    ?>


    <div class="row">
        <div class="col-md-12 mt-2">
            <img class="logo" src="logo_1.jpg" alt="logo">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h3 class="title_bottom">STATEMENT OF RISKS AND LIABILITY – SCUBA DIVING TRIPS AND BOAT TRAVEL (PADI
                International Ltd)</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <p class="paragraph"><strong>Please read carefully and fill in all blanks before signing</strong></p>

            <p>This is a statement in which you are informed of the risks of hazards occurring whilst travelling to and participating in scuba dives either as a certified diver or as a student under the control and supervision of a certified scuba instructor. This statement covers recreational scuba dive trips and scuba dive trips carried out as part of a scuba diving class. This statement also sets out the circumstances in which you participate in the scuba diving trip at your own risk.</p>
            <p>Your signature on this statement is required as proof that you have received and read this statement. It is important that you read the contents of this statement before signing it. If you do not understand anything contained in this statement then please discuss it with your instructor / dive professional. If you are a minor, this form must also be signed by a parent or guardian.</p>

            <p class="paragraph"><strong>WARNING</strong></p>
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

            <p class="paragraph"><strong>EXCLUSION OF LIABILITY</strong></p>
            <p><strong>I understand and agree that neither</strong></p>
            <div class="row">
                <div class="col-md-12">
                    <label for="divemaster">Divemaster's Name : </label>
                    <span class="spaces" id="divemaster">
                        <?php

                        echo $divemaster . ", ";

                        ?>
                    </span>

                    <label for="crewMember">Crew Member's Name : </label>
                    <span class="spaces" id="crewMember">
                        <?php

                        echo $crewMember . ", ";

                        ?>
                    </span>

                    <label for="captain">Captain's Name : </label>
                    <span class="spaces" id="captain">
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
                    <span class="spaces" id="vesselName">
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
                <label class="spaces"> <?php echo $participantname; ?> </label>
            </form>
        </div>
    </div>

    </div>

    <div class="row">
        <div class="col-md-12">
            <form class="mt-3" id="participantSignatureForm">
                <div class="form-group canvas-container">
                    <label>Participant Signature</label>
                    <?php echo '<img class="signature-canvas" src="' . $participantSignature . '" alt="Participant Signature">'; ?>
                    <span>Date : <?php echo $formattedParticipantDate ?> </span>
                </div>
            </form>
        </div>
    </div>

    <br> <br>

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

    <div class="page-numbers"> Page - 02</div>
    <div class="line-separetor"></div>

    <?php
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


    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img class="logoDoc2" src="logo_2.png" alt="logo">
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
                <label for="policyNumber">Insurance Policy Number: <?php echo $policyNumber ?></label>
            </div>
        </div>
    </div>

    <div class="page-numbers"> Page - 03</div>
    <div class="line-separetor"></div>

    <?php
    $queryDoc3 = "SELECT * FROM doc3 WHERE userID = $userID ;";
    $resultDoc3 = mysqli_query($conn, $queryDoc3);
    $rowDoc3 = mysqli_fetch_assoc($resultDoc3);

    $instructorName = $rowDoc3['instructorName'];
    $resortName = $rowDoc3['resortName'];
    $participantSignature = $rowDoc3['participantSignature'];
    $participantDate = $rowDoc3['participantDate'];
    $parentSignature = $rowDoc3['parentSignature'];
    $parentDate = $rowDoc3['parentDate'];

    $queryDoc0 = "SELECT participantname FROM doc0 WHERE userID = $userID ;";
    $resultDoc0 = mysqli_query($conn, $queryDoc0);
    $rowDoc0 = mysqli_fetch_assoc($resultDoc0);

    $participantname = $rowDoc0['participantname'];

    $formattedParticipantDate = date("d/m/Y", strtotime($participantDate));
    $formattedParentDate = date("d/m/Y", strtotime($parentDate));

    ?>
    <div class="row">
        <div class="col-md-12">
            <img class="logo-Doc3" src="logo_3.png" alt="logo">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="title-container-Doc3">
                <h3 class="title-Doc3">Non-Agency Disclosure and Acknowledgment Agreement</h3>
            </div>
            <div class="col-md-12">
                <div class="row sub-titile-Doc3">
                    In European Union and European Free Trade Association countries use alternative form
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h6> <strong>Please read carefully and fill in all blanks before signing.</strong></h6>
            <br>
            <p>I understand and agree that PADI Members (“Members”), including <label class="spaces"> <?php echo $resortName; ?></label> and/or any individual PADI Instructors and Divemasters associated with the program in which I am participating, are licensed to use various PADI Trademarks and to conduct PADI training, but are not agents, employees or franchisees of PADI Americas, Inc, or its parent, subsidiary and affiliated corporations (“PADI”). I further understand that Member business activities are independent, and are neither owned nor operated by PADI, and that while PADI establishes the standards for PADI diver training programs, it is not responsible for, nor does it have the right to control, the operation of the Members’ business activities and the day to day conduct of PADI programs and supervision of divers by the Members or their associated staff. I further understand and agree on behalf of myself, my heirs and my estate that in the event of an injury or death during this activity, neither I nor my estate shall seek to hold PADI liable for the actions, inactions or negligence of <label class="spaces"> <?php echo $resortName; ?></label> and/or the instructors and divemasters associated with the activity.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="title-container-Doc3">
                <h3 class="title-Doc3">Liability Release and Assumption of Risk Agreement</h3>
            </div>
            <div class="col-md-12">
                <div class="row sub-titile-Doc3">
                    In European Union and European Free Trade Association countries use alternative form
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h6> <strong>Please read carefully and fill in all blanks before signing.</strong></h6>
            <p>I, <label class="spaces"> <?php echo $participantname; ?></label> hereby affirm that I am aware that skin and scuba diving have inherent risks which may result in serious injury or death.</p>
            <p>I understand that diving with compressed air involves certain inherent risks; including but not limited to decompression sickness, embolism or other hyperbaric/air expansion injury that require treatment in a recompression chamber. I further understand that the open water diving trips which are necessary for training and for certification may be conducted at a site that is remote, either by time or distance or both, from such a recompression chamber. I still choose to proceed with such instructional dives in spite of the possible absence of a recompression chamber in proximity to the dive site.
            <p>I understand and agree that neither my instructor( s),<label class="spaces"> <?php echo $instructorName; ?></label>
                the facility through which I receive my instruction, <label class="spaces"> <?php echo $resortName; ?></label>
                nor PADI Americas, Inc., nor its affiliate and subsidiary corporations, nor any of their respective employees, officers, agents, contractors or assigns (hereinafter referred to as “Released Parties”) may be held liable or responsible in any way for any injury, death or other damages to me, my family, estate, heirs or assigns that may occur as a result of my participation in this diving program or as a result of the negligence of any party, including
                the Released Parties, whether passive or active.
                In consideration of being allowed to participate in this course (and optional Adventure Dive), hereinafter referred to as “program,” I hereby personally assume all risks of this program, whether foreseen or unforeseen, that may befall me while I am a participant in this program including, but not limited to, the academics, confined water and/or open water activities.
            </p>
            <p>
                I further release, exempt and hold harmless said program and Released Parties from any claim or lawsuit by me, my family, estate, heirs or assigns, arising out of my enrollment and participation in this program including both claims arising during the program or after I receive my certification.
            </p>

            <p>
                I also understand that skin diving and scuba diving are physically strenuous activities and that I will be exerting myself during this program, and that if I am injured as a result of heart attack, panic, hyperventilation, drowning or any other cause, that I expressly assume the risk of said injuries and that I will not hold the Released Parties responsible for the same.

            </p>
            <p>
                I further state that I am of lawful age and legally competent to sign this liability release, or that I have acquired the written consent of my parent or guardian. I understand the terms herein are contractual and not a mere recital, and that I have signed this Agreement of my own free act and with the knowledge that I hereby agree to waive my legal rights. I further agree that if any provision of this Agreement is found to be unenforceable or invalid, that provision shall be severed from this Agreement. The remainder of this Agreement will then be construed as though the unenforceable provision had never been contained herein.

            </p>
            <p>
                I understand and agree that I am not only giving up my right to sue the Released Parties but also any rights my heirs, assigns, or beneficiaries may have to sue the Released Parties resulting from my death. I further represent I have the authority to do so and that my heirs, assigns, or beneficiaries will be estopped from claiming otherwise because of my representations to the Released Parties.
            </p>
            <p>
                I, <label class="spaces"> <?php echo $participantname; ?></label>, BY THIS INSTRUMENT AGREE TO EXEMPT AND RELEASE MY
                INSTRUCTORS,<label class="spaces"> <?php echo $instructorName; ?></label> THE FACILITY THROUGH WHICH I
                RECEIVE MY INSTRUCTION,<label class="spaces"> <?php echo $resortName; ?>, AND
                    PADI AMERICAS, INC., AND ALL RELATED ENTITIES AS DEFINED ABOVE, FROM ALL LIABILITY OR RESPONSIBILITY WHATSOEVER FOR PERSONAL INJURY, PROPERTY DAMAGE OR WRONGFUL DEATH HOWEVER CAUSED, INCLUDING, BUT NOT LIMITED TO, THE NEGLI- GENCE OF THE RELEASED PARTIES, WHETHER PASSIVE OR ACTIVE.

            </p>
            <p><strong>I HAVE FULLY INFORMED MYSELF AND MY HEIRS OF THE CONTENTS OF THIS NON-AGENCY DISCLOSURE AND ACKNOWLDGEMENT AGREEMENT AND LIABILITY RELEASE AND ASSUMPTION OF RISK AGREEMENT BY READING BOTH BEFORE SIGNING BELOW ON BEHALF OF MYSELF AND MY HEIRS.</strong></p>
        </div>
    </div>
    </div>

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

    <div class="page-numbers"> Page - 04</div>
    <div class="line-separetor"></div>

    <?php
    // Define your SQL query with a WHERE clause to filter by the retrieved userID
    $query = "SELECT userID, q1, q1_1, q1_2, q1_3, q1_4, q1_5, q2, q2_1, q2_2, q2_3, q2_4, q3, q4, q4_1, q4_2, q4_3, q4_4, q5, q6, q6_1, q6_2, q6_3, q6_4, q6_5, q7, q7_1, q7_2, q7_3, q7_4, q8, q8_1, q8_2, q8_3, q8_4, q8_5, q9, q9_1, q9_2, q9_3, q9_4, q9_5, q9_6, q10, medicalUserID, medicalExaminerSignatureData, medicalExaminerSignatureDate, status FROM doc4 WHERE userID = $userID";

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

        $medicalUserID = $row['medicalUserID'];
        $medicalExaminerSignatureData = $row['medicalExaminerSignatureData'];
        $medicalExaminerSignatureDate = $row['medicalExaminerSignatureDate'];
        $medicalApprovalStatus = $row['status'];
    } else {
        echo "No results found for userID = $userID";
    }

    $formattedMedicalExaminerSignatureDate = date("d/m/Y", strtotime($medicalExaminerSignatureDate));

    if ($medicalUserID != 0) {
        // Query to retrieve medical examiner data from medical_examiner
        $queryMedicalExaminer = "SELECT name, degree, clinic, address, phone, email, stamp FROM medical_examiner WHERE id = $medicalUserID;";
        $resultMedicalExaminer = mysqli_query($conn, $queryMedicalExaminer);
        $rowMedicalExaminer = mysqli_fetch_assoc($resultMedicalExaminer);
        $examinerName = $rowMedicalExaminer['name'];
        $degree = $rowMedicalExaminer['degree'];
        $clinic = $rowMedicalExaminer['clinic'];
        $address = $rowMedicalExaminer['address'];
        $phone = $rowMedicalExaminer['phone'];
        $email = $rowMedicalExaminer['email'];
        $stamp = $rowMedicalExaminer['stamp'];
    }

    $queryDoc0 = "SELECT participantname FROM doc0 WHERE userID = $userID ;";
    $resultDoc0 = mysqli_query($conn, $queryDoc0);
    $rowDoc0 = mysqli_fetch_assoc($resultDoc0);
    $participantname = $rowDoc0['participantname'];

    // Query to retrieve participant name, instructor name, and resort name from doc2
    $queryDoc2 = "SELECT instructorName, resortName FROM doc2 WHERE userID = $userID ORDER BY id DESC LIMIT 1;";
    $resultDoc2 = mysqli_query($conn, $queryDoc2);
    $rowDoc2 = mysqli_fetch_assoc($resultDoc2);
    $instructor = $rowDoc2['instructorName'];
    $resortName = $rowDoc2['resortName'];

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

    $formattedParticipantDate = date("d/m/Y", strtotime($participantDate));
    $formattedParentDate = date("d/m/Y", strtotime($parentDate));
    ?>

<div class="row">
            <div class="col-12 text-center">
                <img class="logo-Doc4" src="logo_4.png" alt="logo">
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
            </div>

            <div class="row">
                <div class="col-md-12">
                    <form class="mt-3" id="participantSignatureForm">
                        <div class="form-group canvas-container">
                            <!-- Set canvas dimensions relative to the screen size -->
                            <label class="sign-label">Participant Signature</label>
                            <?php echo '<img class="signature-canvas" src="' . $participantSignatureData . '" alt="Participant Signature">'; ?>
                            <span>Date : <?php echo $formattedParticipantDate ?></span>
                        </div>

                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <form class="mt-3" id="parentSignatureForm">
                        <div class="form-group canvas-container">
                        <label>Signature of Parent of Guardian (where applicable)</label>
                            <?php echo '<img class="signature-canvas" src="' . $parentSignatureData . '" alt="Participant Signature">'; ?>
                            <span>Date : <?php echo $formattedParentDate ?></span>
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

        <div class="container">
            <div class="col-md-12 btn-container">
                <br>

                <?php
                if ($medicalUserID != 0) {
                    include $_SERVER['DOCUMENT_ROOT'] . '/englishDocuments/doc4/doc4_approved.php';
                }
                ?>
            </div>
        </div>

        <div class="page-numbers"> Page - 05</div>

</body>

</html>