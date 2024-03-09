<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';

?>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/connection.php';

// Query to retrieve instructors from the database
$instructorQuery = "SELECT instructorName FROM instructors";
$instructorResult = mysqli_query($conn, $instructorQuery);

// Query to retrieve resort from the database
$resortQuery = "SELECT resortName FROM resort";
$resortResult = mysqli_query($conn, $resortQuery);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document 2</title>
    <style type="text/css">
        .logo {
            display: block;
            margin: auto;
            max-width: 40%;
            /* Adjusted for responsiveness */
            height: auto;
        }

        .title {
            margin-top: 10px;
            font-size: 22px;
            text-align: center;
        }

        .title2 {
            margin-top: 10px;
            font-size: 24px;
            text-align: center;
        }

        .title_bottom {
            border-bottom: 4px solid #000;
            padding-bottom: 5px;
            font-size: 19px;
            margin-top: 12px;
            text-align: center;
        }

        .paragraph {
            text-align: left;
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

            .title {
                font-size: 18px;
            }

            .title2 {
                font-size: 20px;
            }

            .title_bottom {
                font-size: 16px;
            }

            #policyNumberInput {
                margin-bottom: 15px;
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

            #policyNumberInput {
                margin-bottom: 15px;
            }

            body {
                margin-bottom: 15px;
            }

        }

        .crew {
            text-decoration-color: red;
        }

        .selectedInstructorLabel {
            text-decoration: underline;
            font-weight: bold;

        }

        .selectedResortName {
            text-decoration: underline;
            font-weight: bold;
        }

        #policyNumberInput {
            margin-bottom: 15px;
        }

        body {
            margin-bottom: 15px;
            overflow-x: hidden;
        }
    </style>
</head>

<body class="container">

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img class="logo" src="logo.png" alt="logo">
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h3 class="title">Statement of Risk and Liability/Non-agency Acknowledgment Form</h3>
                <h1 class="title2">DIVER ACTIVITIES</h1>
                <h5 class="title_bottom">(EU Version)</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <p class="paragraph">Please read carefully and fill in all blanks before signing</p>
                <h4 class="text-center">Non-Agency Disclosure and Acknowledgment Agreement</h4>
            </div>
        </div>

        <p class="paragraph">I understand and agree that PADI® Members (“Members”), including

            <select id="resortSelect" class="underline">
                <?php
                while ($row = mysqli_fetch_assoc($resortResult)) {
                    echo "<option value='" . $row['resortName'] . "'>" . $row['resortName'] . "</option>";
                }
                ?>
            </select>
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



            <select id="instructorSelect" class="underline">
                <?php
                while ($row = mysqli_fetch_assoc($instructorResult)) {
                    echo "<option value='" . $row['instructorName'] . "'>" . $row['instructorName'] . "</option>";
                }
                ?>
            </select>
        </p>





        , nor
        <p class="paragraph">the facility through which this program is conducted,

            <!-- resort name -->
            <label class="selectedResortName"></label>

            , nor PADI EMEA Ltd., nor

            PADI Americas, Inc. nor their affiliate or subsidiary corporations, nor any of their respective employees, officers, agents, contractors or assigns accept any responsibility for any death, injury or other loss suffered by me to the extent that it results from my own conduct or any matter or condition under my control that amounts to my own contributory negligence.
        </p>
        <p class="paragraph">In the absence of any negligence or other breach of duty by the dive professionals conducting this program,

            <!-- Instructor name -->
            <label class="selectedInstructorLabel"></label>
        </p>

        <p class="paragraph">the facility through which this program is offered,

            <!-- resort name -->

            <label class="selectedResortName">,</label>

            PADI EMEA Ltd., PADI Americas, Inc. and all parties referred to above, my participation in this diving program is entirely at my own risk.
        </p>
        <p class="paragraph">I HAVE FULLY INFORMED MYSELF OF THE CONTENTS OF THIS NON-AGENCY DISCLOSURE AND ACKNOWLEDGMENT AGREEMENT AND STATEMENT OF RISK AND LIABILITY BY READING BOTH BEFORE SIGNING THESE STATEMENTS.</p>
        <p class="paragraph">I acknowledge and agree that this Diver Activities form will be effective for one (1) year from the date on which I sign for any skin diving, freediving or scuba diving activities in which I participate with the named PADI Members.</p>


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
                <div class="form-group canvas-container">
                    <!-- Set canvas dimensions relative to the screen size -->
                    <canvas id="participantSignatureCanvas" class="signature-canvas" width="350%" height="400%"></canvas>
                </div>
                <div class="form-group btn-container">
                    <!-- Adjust button sizes for better usability on smaller screens -->

                    <button type="button" class="btn btn-secondary btn-sm" onclick="clearSignature()">Clear</button>
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

    <!-- Add the checkboxes for Diver Accident Insurance -->
    <div class="row mt-2">
        <p></p>
        <div class="col-md-12">
            <div class="form-check">
                <p>Diver Accident Insurance?</p>
                <input class="form-check-input" type="checkbox" id="diverAccidentInsuranceYes" name="diverAccidentInsurance" value="Yes">
                <label class="form-check-label" for="diverAccidentInsuranceYes">
                    Yes
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="diverAccidentInsuranceNo" name="diverAccidentInsurance" value="No">
                <label class="form-check-label" for="diverAccidentInsuranceNo">
                    No
                </label>
            </div>
            <!-- Add the input field for Policy Number -->
            <div id="policyNumberInput" style="display: none;">
                <label for="policyNumber">Enter Policy Number:</label>
                <input type="text" id="policyNumber" name="policyNumber">
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-md-12 btn-container">

            <button type="button" id="submit-doc2" class="btn btn-primary btn-sm" onclick="handleFormSubmission()">Submit</button>

        </div>
    </div>
    </div>
    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script>
        // Add event listener to checkboxes
        document.getElementById('diverAccidentInsuranceYes').addEventListener('change', function() {
            if (this.checked) {
                document.getElementById('policyNumberInput').style.display = 'block';
                // Uncheck the "No" checkbox if "Yes" is checked
                document.getElementById('diverAccidentInsuranceNo').checked = false;
            } else {
                document.getElementById('policyNumberInput').style.display = 'none';
            }
        });

        document.getElementById('diverAccidentInsuranceNo').addEventListener('change', function() {
            if (this.checked) {
                document.getElementById('policyNumberInput').style.display = 'none';
                // Uncheck the "Yes" checkbox if "No" is checked
                document.getElementById('diverAccidentInsuranceYes').checked = false;
            }
        });

        // Get the initially selected instructor        
        var instructorSelect = document.getElementById('instructorSelect');
        var selectedInstructorLabels = document.querySelectorAll('.selectedInstructorLabel');

        // Set the initially selected instructor name for all labels
        selectedInstructorLabels.forEach(function(label) {
            label.textContent = instructorSelect.value;
        });

        // Update selected instructor name whenever selection changes for all labels
        instructorSelect.addEventListener('change', function() {
            selectedInstructorLabels.forEach(function(label) {
                label.textContent = instructorSelect.value;
            });
        });

        // Get the initially selected resort
        var resortSelect = document.getElementById('resortSelect');
        var selectedResortLabels = document.querySelectorAll('.selectedResortName');

        // Set the initially selected resort name for all labels
        selectedResortLabels.forEach(function(label) {
            label.textContent = resortSelect.value;
        });

        // Update selected resort name whenever selection changes for all labels
        resortSelect.addEventListener('change', function() {
            selectedResortLabels.forEach(function(label) {
                label.textContent = resortSelect.value;
            });
        });

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
            drawFinalPoint(); // Capture the final point for participant signature
            let parentSignatureData = parentCanvas.toDataURL();
            drawParentFinalPoint(); // Capture the final point for parent signature

            let formData = new FormData();
            formData.append('participantname', document.getElementById('participantname').value);
            formData.append('participantSignatureData', participantSignatureData);
            formData.append('participantDate', participantDate);
            formData.append('parentSignatureData', parentSignatureData);
            formData.append('parentDate', parentDate);

            // Include selected resort name
            let selectedResortName = document.getElementById('resortSelect').value;
            formData.append('selectedResortName', selectedResortName);

            // Include selected instructor name
            let selectedInstructorLabel = document.getElementById('instructorSelect').value;
            formData.append('selectedInstructorLabel', selectedInstructorLabel);

            // Include diver accident insurance information
            if (document.getElementById('diverAccidentInsuranceYes').checked) {
                formData.append('diverAccidentInsurance', 'Yes');
                formData.append('policyNumber', document.getElementById('policyNumber').value);
            } else {
                formData.append('diverAccidentInsurance', 'No');
            }

            // Send the formData to the server using AJAX
            sendToServer(formData);

            // Redirect to doc3.php
           // window.location.href = '/englishDocuments/doc3/doc3.php';

        }

        function sendToServer(formData) {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'doc2_save_data.php', true);
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
            // Redirect to doc3.php
            window.location.href = '/englishDocuments/doc3/doc3.php';
        }
    </script>
</body>

</html>