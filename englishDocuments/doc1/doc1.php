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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Doc1</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="/includes/style.css">


  
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
            <!-- ... your existing content ... -->

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
                    <select class="crew" id="divemaster">
                        <?php
                        while ($row = mysqli_fetch_assoc($divemasterResult)) {
                            echo "<option value='" . $row['divemasterName'] . "'>" . $row['divemasterName'] . "</option>";
                        }
                        ?>
                    </select>

                    <label for="crewMember">Crew Member's Name : </label>
                    <select class="crew" id="crewMember">
                        <?php
                        while ($row = mysqli_fetch_assoc($crewMemberResult)) {
                            echo "<option value='" . $row['crewMemberName'] . "'>" . $row['crewMemberName'] . "</option>";
                        }
                        ?>
                    </select>

                    <label for="captain">Captain's Name : </label>
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
                    <label for="vesselName">Vessel Name : </label>
                    <select class="vessel" id="vesselName">
                        <?php
                        while ($row = mysqli_fetch_assoc($vesselResult)) {
                            echo "<option value='" . $row['vesselName'] . "'>" . $row['vesselName'] . "</option>";
                        }
                        ?>
                    </select>
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
                <input type="text" id="participantname" name="participantname">
            </form>
        </div>
    </div>


    <div class="row mt-2">
        <div class="col-md-12">
            <label>Participant Signature</label>
        </div>
    </div>

    </div>
    </div>

    <div id="alert-container"></div>


    <div class="row">
        <div class="col-md-12">
            <form class="mt-3" id="participantSignatureForm">
                <div class="form-group canvas-container" style="position: relative;">
                    <!-- Set canvas dimensions relative to the screen size -->
                    <canvas id="participantSignatureCanvas" class="signature-canvas"></canvas>
                    <button type="button" class="btn btn-secondary" onclick="clearSignature()" id="clearbutton"><span class="bi bi-x-lg"></span></button>
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
                    <!-- Set canvas dimensions relative to the screen size -->
                    <canvas id="parentSignatureCanvas" class="signature-canvas" width="350%" height="400%"></canvas>
                </div>
                <div class="form-group btn-container">
                    <!-- Adjust button sizes for better usability on smaller screens -->
                    <button type="button" class="btn btn-secondary btn-sm" onclick="clearParentSignature()">Clear</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 btn-container">

            <button type="button" id="submit-doc1" class="btn btn-primary btn-sm" onclick="handleFormSubmission()">Submit</button>



        </div>
    </div>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script>
        // Function to retrieve the participant's name from localStorage
        function getParticipantName() {
            return localStorage.getItem('participantName');
        }

        // Function to set the participant's name in the input field
        function setParticipantName() {
            var participantName = getParticipantName();
            if (participantName) {
                document.getElementById("participantname").value = participantName;
            }
        }

        // Call the function to set participant's name when the page loads
        window.onload = function() {
            setParticipantName();
        };


        function submitForm() {
            // Add logic to handle the submission of the entire form
            alert('Form submitted successfully');
        }

        // Participant Signature

        let participantCanvas = document.getElementById('participantSignatureCanvas');
        let ctx = participantCanvas.getContext('2d');
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
            const currentX = e.clientX || e.touches[0].clientX - participantCanvas.getBoundingClientRect().left;
            const currentY = e.clientY || e.touches[0].clientY - participantCanvas.getBoundingClientRect().top;

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

        participantCanvas.addEventListener('mousedown', startDrawing);
        participantCanvas.addEventListener('mousemove', draw);
        participantCanvas.addEventListener('mouseup', stopDrawing);

        // Touch events
        participantCanvas.addEventListener('touchstart', startDrawing);
        participantCanvas.addEventListener('touchmove', draw);
        participantCanvas.addEventListener('touchend', stopDrawing);

        function saveSignature() {
            let participantSignatureData = participantCanvas.toDataURL();
            let formData = new FormData(document.getElementById('participantSignatureForm'));

            formData.append('participantSignatureData', participantSignatureData);
            // Send the formData to the server using AJAX
            sendToServer(formData);
        }

        function clearSignature() {
            ctx.clearRect(0, 0, participantCanvas.width, participantCanvas.height);
        }


        // Parent Signature

        let parentCanvas = document.getElementById('parentSignatureCanvas');
        let parentCtx = parentCanvas.getContext('2d');
        let parentDrawing = false;
        let parentPoints = [];

        function startParentDrawing(e) {
            parentDrawing = true;
            parentPoints = [];
            drawParent(e);
        }

        function drawParent(e) {
            if (!parentDrawing) return;

            e.preventDefault();

            parentCtx.lineWidth = 2;
            parentCtx.lineCap = 'round';
            parentCtx.strokeStyle = '#000';

            // Adjust touch coordinates
            const currentX = e.clientX || e.touches[0].clientX - parentCanvas.getBoundingClientRect().left;
            const currentY = e.clientY || e.touches[0].clientY - parentCanvas.getBoundingClientRect().top;

            parentPoints.push({
                x: currentX,
                y: currentY
            });

            if (parentPoints.length > 1) {
                const prevPoint = parentPoints[parentPoints.length - 2];
                const currentPoint = parentPoints[parentPoints.length - 1];

                // Draw a line segment
                parentCtx.beginPath();
                parentCtx.moveTo(prevPoint.x, prevPoint.y);
                parentCtx.lineTo(currentPoint.x, currentPoint.y);
                parentCtx.stroke();
            }
        }

        function stopParentDrawing() {
            if (parentDrawing) {
                parentDrawing = false;
                // Capture the final point when stopping drawing
                drawParentFinalPoint();
            }
        }

        function drawParentFinalPoint() {
            if (parentPoints.length > 0) {
                const finalPoint = parentPoints[parentPoints.length - 1];
                // Add a full stop at the final point
                parentCtx.lineWidth = 2;
                parentCtx.lineCap = 'round';
                parentCtx.strokeStyle = '#000';
                parentCtx.beginPath();
                parentCtx.arc(finalPoint.x, finalPoint.y, 1, 0, 2 * Math.PI);
                parentCtx.stroke();
            }
        }

        parentCanvas.addEventListener('mousedown', startParentDrawing);
        parentCanvas.addEventListener('mousemove', drawParent);
        parentCanvas.addEventListener('mouseup', stopParentDrawing);

        // Touch events
        parentCanvas.addEventListener('touchstart', startParentDrawing);
        parentCanvas.addEventListener('touchmove', drawParent);
        parentCanvas.addEventListener('touchend', stopParentDrawing);


        function saveParentSignature() {
            let parentSignatureData = parentCanvas.toDataURL();
            let formData = new FormData(document.getElementById('parentSignatureForm'));

            formData.append('parentSignatureData', parentSignatureData);
            sendToServer(formData);
        }

        function clearParentSignature() {
            parentCtx.clearRect(0, 0, parentCanvas.width, parentCanvas.height);
        }

        function handleFormSubmission() {

            // Capture current date for participant and parent signatures
            let participantDate = new Date().toISOString();
            let parentDate = new Date().toISOString();


            // Capture the final point before form submission
            let participantSignatureData = participantCanvas.toDataURL();

            drawParentFinalPoint(); // Capture the final point for parent signature
            let parentSignatureData = parentCanvas.toDataURL();

            let formData = new FormData();
            formData.append('divemaster', document.getElementById('divemaster').value);
            formData.append('crewMember', document.getElementById('crewMember').value);
            formData.append('captain', document.getElementById('captain').value);
            formData.append('vesselName', document.getElementById('vesselName').value);
            formData.append('participantname', document.getElementsByName('participantname')[0].value);
            formData.append('participantSignatureData', participantSignatureData);
            formData.append('participantDate', participantDate);
            formData.append('parentSignatureData', parentSignatureData);
            formData.append('parentDate', parentDate);

            // Send the formData to the server using AJAX
            sendToServer(formData);
            console.log('Form submitted');


        }

        function sendToServer(formData) {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'doc1_save_data.php', true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        // Display success message using Bootstrap alert
                        showAlert('success', 'Form submitted successfully');

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

            // Redirect to doc2.php
            window.location.href = '/englishDocuments/doc2/doc2.php';
        }
    </script>



</body>

</html>