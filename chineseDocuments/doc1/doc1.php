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
$queryDoc0 = "SELECT participantname FROM doc0 WHERE userID = $userID ;";
$resultDoc0 = mysqli_query($conn, $queryDoc0);
$rowDoc0 = mysqli_fetch_assoc($resultDoc0);
$participantname = $rowDoc0['participantname'];
?>

<!DOCTYPE html>
<html lang="zh">

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
            <h3 class="title_bottom"> 风险和责任声明 - 水肺潜水旅行和乘船旅行 (PADI International Ltd) </h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <p class="paragraph"><strong>请仔细阅读并填写后再签字</strong></p>

            <p>这是一份声明，告知您在旅行和参与水肺潜水时发生的危险风险，无论是作为认证潜水员还是在认证水肺教练的控制和监督下作为学生。本声明包括娱乐性的水肺潜水旅行和作为水肺潜水课程的一部分进行的水肺潜水旅行。本声明还列出了您参加水肺潜水之旅的情况，风险由您自行承担。</p>
            <p>您必须在此声明上签名，以证明您已收到并阅读此声明。你在签字前仔细阅读这份声明的内容是很重要的。如果您不理解本声明中的任何内容，请与您的教练/潜水专业人员讨论。如果你是未成年人，这份表格也必须由父母或监护人签署。</p>

            <p class="paragraph"><strong>警告</strong></p>
            <p>皮肤潜水和水肺潜水具有固有的风险，可能导致严重的伤害或死亡。</p>
            <p>使用压缩空气潜水具有一定的内在风险;减压病、栓塞或其他高压损伤可能发生，需要在再压缩室中治疗。开放水域的水肺潜水旅行可以在距离这种再压缩室较远的地点进行，无论是时间上还是距离上。</p>
            <p>此外，在乘船往返潜水地点期间，您应遵守船长/船员的所有安全指示，在上下船和在船上时要小心，以免滑倒、摔倒或溺水。</p>

            <p class="paragraph"><strong>责任排除</strong></p>
            <p><strong>我理解并同意这两种观点</strong></p>
            <div class="row">
                <div class="col-md-12">
                    <label for="divemaster">潜水长的名字: </label>
                    <select class="crew" id="divemaster">
                        <?php
                        while ($row = mysqli_fetch_assoc($divemasterResult)) {
                            echo "<option value='" . $row['divemasterName'] . "'>" . $row['divemasterName'] . "</option>";
                        }
                        ?>
                    </select>

                    <label for="crewMember">船员姓名: </label>
                    <select class="crew mb-2" id="crewMember" name="crewMember[]" multiple>
                        <?php
                        while ($row = mysqli_fetch_assoc($crewMemberResult)) {
                            echo "<option value='" . $row['crewMemberName'] . "'>" . $row['crewMemberName'] . "</option>";
                        }
                        ?>
                    </select>

                    <label for="captain">船长的名字: </label>
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
                    <p><strong>无论是船员还是船主,</strong></p>
                    <label for="vesselName">船舶名称: </label>
                    <select class="vessel" id="vesselName">
                        <?php
                        while ($row = mysqli_fetch_assoc($vesselResult)) {
                            echo "<option value='" . $row['vesselName'] . "'>" . $row['vesselName'] . "</option>";
                        }
                        ?>
                    </select>
                    <strong>也不</strong>
                </div>
            </div>

            <p><strong>PADI International Ltd.、PADI Americas Inc.、它们的附属公司或子公司，以及它们各自的雇员、官员、代理或受让人(以下简称“免责方”)，对我在参加这次水肺潜水旅行期间或由于我自己的行为或我控制下的任何事项或情况造成的任何死亡、受伤或其他损失承担任何责任。</strong></p>
            <p><strong>在船员或船东、PADI International Ltd.、PADI Americas, Inc.以及上述所有被释放实体和被释放方没有任何疏忽或违反义务的情况下，我参加这次水肺潜水之旅的风险完全由我自己承担。</strong></p>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form>
                <label for="participantname">参与者的名字:</label>
                <!-- Input field for participant's name -->
                <label class="spaces"> <?php echo $participantname; ?></label>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form class="mt-3" id="participantSignatureForm">
                <div class="form-group canvas-container">
                    <!-- Set canvas dimensions relative to the screen size -->
                    <label>参与者的签名</label>
                    <canvas id="participantSignatureCanvas" class="signature-canvas" width="350%" height="400%"></canvas>
                    <button type="button" class="btn btn-secondary clearbutton" onclick="clearSignature()"><span class="bi bi-x-lg"></span></button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form class="mt-3" id="parentSignatureForm">
                <div class="form-group canvas-container">
                    <!-- Set canvas dimensions relative to the screen size -->
                    <label>家长或监护人签署(如适用)</label>
                    <canvas id="parentSignatureCanvas" class="signature-canvas" width="350%" height="400%"></canvas>
                    <button type="button" class="btn btn-secondary clearbutton" onclick="clearParentSignature()"><span class="bi bi-x-lg"></span></button>
                </div>
            </form>
        </div>
    </div>

    <div id="alert-container"></div>
    <div class="row">
        <div class="col-md-12 btn-container">
            <button type="button" id="submit-doc1" class="btn btn-primary btn-sm" onclick="handleFormSubmission()">提交</button>
        </div>
    </div>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Select2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/js/standalone/selectize.min.js"></script>



    <script>
         // Ensure jQuery is loaded before executing the script
         $(document).ready(function() {
            // Initialize Selectize plugin
            $('#crewMember').selectize({
                plugins: ['remove_button'],
                delimiter: ',',
                persist: false,
                create: true,
                maxItems: null,
                placeholder: '选择船员',
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
                showAlert('danger', '请选择至少一名机组人员。');
                return false; // Prevent form submission
            }
            return true; // Allow form submission
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
            // Check crew member selection
            if (!checkcrewMemberSelection()) {
                return; // Stop form submission if crew member selection is invalid
            }

            // Capture current date for participant and parent signatures
            let participantDate = new Date().toISOString();
            let parentDate = new Date().toISOString();

            // Capture the final point before form submission
            let participantSignatureData = participantCanvas.toDataURL();
            drawParentFinalPoint(); // Capture the final point for parent signature
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
                        showAlert('success', '提交成功');
                        // Redirect to doc2.php
                        window.location.href = '/chineseDocuments/doc2/doc2.php';

                    } else {
                        // Display error message using Bootstrap alert
                        showAlert('danger', '提交表单错误');
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