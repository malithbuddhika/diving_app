<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<?php

include $_SERVER['DOCUMENT_ROOT'] . '/connection.php';

// Query to retrieve divemasters from the database
$divemasterQuery = "SELECT divemasterName FROM divemasters";
$divemasterResult = mysqli_query($conn, $divemasterQuery);

// Query to retrieve crew members from the database
$crewMemberQuery = "SELECT crewMemberName FROM crewmembers";
$crewMemberResult = mysqli_query($conn, $crewMemberQuery);

// Query to retrieve captains from the database
$captainQuery = "SELECT captainName FROM captains";
$captainResult = mysqli_query($conn, $captainQuery);

// Query to retrieve vessel names from the database
$vesselQuery = "SELECT vesselName FROM vessels";
$vesselResult = mysqli_query($conn, $vesselQuery);

// Close the statement and database connection
// Query to retrieve medical examiner data from medical_examiner
$queryDoc0 = "SELECT * FROM doc0 WHERE userID = $userID ;";
$resultDoc0 = mysqli_query($conn, $queryDoc0);
$rowDoc0 = mysqli_fetch_assoc($resultDoc0);
$participantname = $rowDoc0['participantname'];
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
                    <select class="crew mb-2" id="divemaster" name="divemasters[]" multiple>
                        <?php
                        while ($row = mysqli_fetch_assoc($divemasterResult)) {
                            echo "<option value='" . $row['divemasterName'] . "'>" . $row['divemasterName'] . "</option>";
                        }
                        ?>
                    </select>


                    <label for="crewMember">Crew Members: </label>
                    <i id="crewmembers-info-icon" class="bi bi-info-circle" style="cursor: pointer;"></i>
                    <div class="toast" id="crewmembersToast">
                        <div class="toast-body">
                            <b>Please select Crew Members in the given box</b>
                            <div> <b>"Crew Members"</b>refer to individuals who are responsible for operating and assisting with the operation of the vessel used for the scuba diving trips.</div>
                        </div>
                    </div>
                    <select class="crew mb-2" id="crewMember" name="crewMember[]" multiple>
                        <?php
                        while ($row = mysqli_fetch_assoc($crewMemberResult)) {
                            echo "<option value='" . $row['crewMemberName'] . "'>" . $row['crewMemberName'] . "</option>";
                        }
                        ?>
                    </select>


                    <label for="captain">Captain : </label>
                    <select class="crew" id="captain">
                        <?php
                        while ($row = mysqli_fetch_assoc($captainResult)) {
                            echo "<option value='" . $row['captainName'] . "'>" . $row['captainName'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <p><strong>nor the crew or the owner of the vessel,</strong></p>
                    <label for="vesselName">Vessel: </label>
                    <select class="vessel" id="vesselName">
                        <?php
                        while ($row = mysqli_fetch_assoc($vesselResult)) {
                            echo "<option value='" . $row['vesselName'] . "'>" . $row['vesselName'] . "</option>";
                        }
                        ?>
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
                <label class="spaces"> <?php echo $participantname; ?></label>
            </form>
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
    <div id="alert-container"></div>

    <div class="row">
        <div class="col-md-12 btn-container">
            <button type="button" id="submit-doc1" class="btn btn-primary btn-sm" onclick="handleFormSubmission()">Submit</button>
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
            saveSignature();
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
            // Check crew member selection
            if (!diveMasterSelection()) {
                return; // Stop form submission if crew member selection is invalid
            }

            // Check crew member selection
            if (!checkcrewMemberSelection()) {
                return; // Stop form submission if crew member selection is invalid
            }

            // Capture current date for participant and parent signatures
            let participantDate = new Date().toISOString();
            let parentDate = new Date().toISOString();

            // Capture the final point before form submission
            let participantSignatureData = participantCanvas.toDataURL();
            //drawParentFinalPoint(); // Capture the final point for parent signature
            let parentSignatureData = parentCanvas.toDataURL();

            // Get all selected crew members
            let selectedCrewMembers = Array.from(document.getElementById('crewMember').selectedOptions).map(option => option.value);

            // Create FormData object and append form data
            let formData = new FormData();
            formData.append('divemaster', document.getElementById('divemaster').value);
            formData.append('crewMember', JSON.stringify(selectedCrewMembers)); // Convert array to JSON string
            formData.append('captain', document.getElementById('captain').value);
            formData.append('vesselName', document.getElementById('vesselName').value);
            formData.append('participantSignatureData', participantSignatureData);
            formData.append('participantDate', participantDate);
            formData.append('parentSignatureData', parentSignatureData);
            formData.append('parentDate', parentDate);

            // Send the formData to the server using AJAX
            sendToServer(formData);
        }




        function sendToServer(formData) {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'doc1_save_data.php', true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        // Display success message using Bootstrap alert
                        showAlert('success', 'Form submitted successfully');
                        window.location.href = '/englishDocuments/doc2/doc2.php';

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
            }, 7000);

        }
    </script>
</body>

</html>