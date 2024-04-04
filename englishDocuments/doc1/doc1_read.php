<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>STATEMENT OF RISKS AND LIABILITY – SCUBA DIVING TRIPS AND BOAT TRAVEL</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/includes/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/css/selectize.default.min.css">


</head>

<body class="container">
    <div class="row">
        <div class="col-md-12">
            <img class="logo" src="logo.jpg" alt="logo">
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
                    <label for="divemaster">Divemasters: </label>
                    <i id="divemaster-info-icon" class="bi bi-info-circle" style="cursor: pointer;"></i>
                    <div class="toast" id="divemasterToast">
                        <div class="toast-body">
                            <b>Please select Divemasters in the given box</b>
                            <div>A Divemaster is a diving professional who has undergone extensive training and has the necessary knowledge and skills to lead and supervise recreational diving activities.</div>
                        </div>
                    </div>
                    <select class="crew mb-2" id="divemaster" name="divemasters[]" multiple disabled>
                        <option>Select Divemaster</option>
                    </select>


                    <label for="crewMember">Crew Members: </label>
                    <i id="crewmembers-info-icon" class="bi bi-info-circle" style="cursor: pointer;"></i>
                    <div class="toast" id="crewmembersToast">
                        <div class="toast-body">
                            <b>Please select Crew Members in the given box</b>
                            <div> <b>"Crew Members"</b>refer to individuals who are responsible for operating and assisting with the operation of the vessel used for the scuba diving trips.</div>
                        </div>
                    </div>
                    <select class="crew mb-2" id="crewMember" name="crewMember[]" multiple disabled>
                       <option>Select Crew Member</option>
                    </select>


                    <label for="captain">Captain : </label>
                    <select class="crew" id="captain" disabled>
                        <option>Captain Name</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <p><strong>nor the crew or the owner of the vessel,</strong></p>
                    <label for="vesselName">Vessel: </label>
                    <select class="vessel" id="vesselName" disabled>
                        <option>Vessel Name</option>
                    </select>
                    <strong>nor</strong>
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
                <label for="participantname">Participant's Name:</label>
                <!-- Input field for participant's name -->
                <label class="spaces">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp, </label>
            </form>
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
                    <canvas id="participantSignatureCanvas" class="signature-canvas" width="350%" height="400%" disabled></canvas>
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
                    <label>Signature of Parent or Guardian <i id="parent-signature-info-icon" class="bi bi-info-circle" style="cursor: pointer;"></i>
                    </label>
                    <!-- Set canvas dimensions relative to the screen size -->
                    <canvas id="parentSignatureCanvas" class="signature-canvas" width="350%" height="400%" disabled></canvas>

                </div>
            </form>
        </div>
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
        document.addEventListener('DOMContentLoaded', function() {
            const divemasterInfoIcon = document.getElementById('divemaster-info-icon');
            const divemasterToast = document.getElementById('divemasterToast');

            divemasterInfoIcon.addEventListener('click', function() {
                positionToast(divemasterInfoIcon, divemasterToast);
                $(divemasterToast).toast('show');
            });

            window.addEventListener('resize', function() {
                // Adjust toast position on window resize
                positionToast(divemasterInfoIcon, divemasterToast);
            });

            // Scroll event listener to keep toast position updated
            window.addEventListener('scroll', function() {
                positionToast(divemasterInfoIcon, divemasterToast);
            });

            // Function to calculate and set the position of the toast relative to the icon
            function positionToast(targetElement, toastElement) {
                const targetRect = targetElement.getBoundingClientRect();
                const toastWidth = toastElement.offsetWidth;
                const toastHeight = toastElement.offsetHeight;

                // Position the toast near the icon
                let toastTop = targetRect.top + (targetRect.height / 2) - (toastHeight / 2);
                let toastLeft = targetRect.left + targetRect.width + 60; // 10px right of the icon

                // Set the toast position
                toastElement.style.top = toastTop + 'px';
                toastElement.style.left = toastLeft + 'px';
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const participationInfoIcon = document.getElementById('crewmembers-info-icon');
            const crewMembersToast = document.getElementById('crewmembersToast');

            participationInfoIcon.addEventListener('click', function() {
                positionToast(participationInfoIcon, crewMembersToast);
                $(crewMembersToast).toast('show');
            });

            window.addEventListener('resize', function() {
                // Adjust toast position on window resize
                positionToast(participationInfoIcon, crewMembersToast);
            });

            // Scroll event listener to keep toast position updated
            window.addEventListener('scroll', function() {
                positionToast(participationInfoIcon, crewMembersToast);
            });

            // Function to calculate and set the position of the toast relative to the icon
            function positionToast(targetElement, toastElement) {
                const targetRect = targetElement.getBoundingClientRect();
                const toastWidth = toastElement.offsetWidth;
                const toastHeight = toastElement.offsetHeight;

                // Position the toast near the icon
                let toastTop = targetRect.top + (targetRect.height / 2) - (toastHeight / 2);
                let toastLeft = targetRect.left + targetRect.width + 50; // 10px right of the icon

                // Set the toast position
                toastElement.style.top = toastTop + 'px';
                toastElement.style.left = toastLeft + 'px';
            }
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


        // Ensure jQuery is loaded before executing the script
        $(document).ready(function() {
            // Initialize Selectize plugin
            $('#crewMember').selectize({
                plugins: ['remove_button'],
                delimiter: ',',
                persist: false,
                create: true,
                maxItems: null,
                placeholder: 'Select Crew Member(s)',
                render: {
                    item: function(data, escape) {
                        return '<div>' + escape(data.text) + '</div>';
                    }
                }
            });
        });

        // Check if at least one crew member is selected before form submission
        function checkcrewMemberSelection() {
            var selectize = $('#crewMember')[0].selectize;
            if (selectize.items.length === 0) {
                showAlert('danger', 'Please select at least one crew member.');
                return false; // Prevent form submission
            }
            return true; // Allow form submission
        }


        // Ensure jQuery is loaded before executing the script
        $(document).ready(function() {
            // Initialize Selectize plugin
            $('#divemaster').selectize({
                plugins: ['remove_button'],
                delimiter: ',',
                persist: false,
                create: true,
                maxItems: null,
                placeholder: 'Select Dive Master(s)',
                render: {
                    item: function(data, escape) {
                        return '<div>' + escape(data.text) + '</div>';
                    }
                }
            });
        });

        // Check if at least one crew member is selected before form submission
        function diveMasterSelection() {
            var selectize = $('#divemaster')[0].selectize;
            if (selectize.items.length === 0) {
                showAlert('danger', 'Please select at least one divemaster.');
                return false; // Prevent form submission
            }
            return true; // Allow form submission
        }
    </script>
</body>

</html>