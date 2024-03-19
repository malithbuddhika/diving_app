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

$queryDoc0 = "SELECT participantname FROM doc0 WHERE userID = $userID ;";
$resultDoc0 = mysqli_query($conn, $queryDoc0);
$rowDoc0 = mysqli_fetch_assoc($resultDoc0);
$participantname = $rowDoc0['participantname'];

?>

<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/includes/style.css">
    <title>Document 2</title>

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
                <h3 class="titleDoc2">风险和责任声明/非代理确认表</h3>
                <h1 class="title2Doc2"> <strong>潜水活动</strong></h1>
                <h5 class="title_bottom">(欧盟版)</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <p class="paragraph"><strong>请仔细阅读并填写后再签字</strong></p>
                <h4 class="text-center">非机构披露和确认协议</h4>
            </div>
        </div>

        <p class="paragraph">我明白并同意PADI®会员(“会员”)，包括

            <select id="resortSelect" class="underline">
                <?php
                while ($row = mysqli_fetch_assoc($resortResult)) {
                    echo "<option value='" . $row['resortName'] . "'>" . $row['resortName'] . "</option>";
                }
                ?>
            </select>
            ，和/或与我所参加的项目相关的任何PADI教练和潜水师个人，被授权使用各种PADI商标和进行PADI培训，但不是PADI EMEA有限公司、PADI Americas, Inc.或其母公司、子公司和附属公司(“PADI”)的代理、员工或特许经营商。我进一步了解，会员的商业活动是独立的，既不属于PADI所有也不属于PADI运营。虽然PADI制定了PADI潜水员培训项目的标准，但它不负责也无权控制会员商业活动的运作、PADI项目的日常实施以及会员或其相关人员对潜水员的监督。
        </p>

        <h5 class="text-center">风险和责任声明</h5>

        <p class="paragraph">这是一份声明，在此声明中，您，持证潜水员，或在持证水肺教练的控制和监督下的学生潜水员，被告知皮肤潜水，自由潜水和水肺潜水具有固有的风险，包括与往返潜水地点的船只相关的风险。该声明还列出了您参与潜水体验的情况，风险由您自己承担。</p>

        <p class="paragraph">您必须在此声明上签名，以证明您已收到、阅读并理解此声明。你在签字前仔细阅读这份声明的内容是很重要的。如果你不明白这句话中的任何内容，那么你应该和你的老师讨论一下。如果你是未成年人，这份表格也必须由父母或监护人签署。</p>

        <h6 class="paragraph"> <strong>警告</strong> </h6>
        <p class="paragraph">皮肤潜水、自由潜水和水肺潜水具有固有的风险，可能导致严重的伤害或死亡。</p>
        <p class="paragraph">使用压缩空气潜水具有一定的内在风险;减压病、栓塞或其他高压损伤可能发生，需要在再压缩室中治疗。风险还包括在船上滑倒或摔倒(如果使用的话)，在水中被船划伤或撞到，在上船或下船时受伤，以及其他海上危险。这种体验可能需要的开放水域潜水之旅可能在距离再压缩室较远的地点进行，无论是从时间上还是距离上，或者两者都有。皮肤潜水、自由潜水和水肺潜水都是体力活动，你将在这次潜水经历中发挥你自己。过去或现在的医疗状况可能是您参加此体验的禁忌症。您必须有良好的精神和身体素质，没有酒精的影响，也没有任何禁止潜水的药物。如果您正在服用药物，您确认您已经看过医生，并获得在药物/药物影响下潜水的许可。在此体验之前，您必须检查您的所有设备，如果您的任何设备不能正常工作，请通知潜水专业人员和提供此体验的设施。</p>
        <p class="paragraph">如果从船上潜水，你必须出席并注意听取船员的简报。如果有任何不明白的地方，请立即通知船员或船长。</p>
        <p class="paragraph">你必须遵循安全潜水练习，计划潜水为无减压潜水，并在升到水面之前允许安全停止的参数范围内，到达船上时气瓶中仍有气体作为安全措施。如果浮在水面上，必须立即放下重物，给BCD充气(口服或使用低压充气器)，以在水面上建立浮力。</p>
        <p class="paragraph">如果在潜水过程中有向导在场协助，并且你选择与向导一起潜水，那么你有责任在潜水过程中与向导保持接近。</p>

        <h5 class="text-center">风险承担</h5>

        <p class="paragraph">我理解并同意，无论是潜水专业人士进行这个项目，



            <select id="instructorSelect" class="underline">
                <?php
                while ($row = mysqli_fetch_assoc($instructorResult)) {
                    echo "<option value='" . $row['instructorName'] . "'>" . $row['instructorName'] . "</option>";
                }
                ?>
            </select>
            ,也不
        </p>






        <p class="paragraph">执行这个项目的机构，

            <!-- resort name -->
            <label class="selectedResortName"></label>

            PADI EMEA Ltd.、PADI Americas, Inc.、它们的关联公司或子公司，以及它们各自的员工、官员、代理、承包商或受让人，都不对我因自己的行为或在我控制下的构成我的共同过失的任何事项或情况而遭受的任何死亡、受伤或其他损失承担任何责任。
        </p>
        <p class="paragraph">在潜水专业人员没有任何疏忽或其他违反职责的情况下，

            <!-- Instructor name -->
            <label class="selectedInstructorLabel"></label>
        </p>

        <p class="paragraph">提供这个项目的机构，

            <!-- resort name -->

            <label class="selectedResortName">,</label>

            PADI EMEA有限公司，PADI Americas, Inc.和上述各方，我参加这个潜水项目的风险完全由我自己承担。
        </p>
        <p class="paragraph">在签署这些声明之前，我通过阅读这两份非代理披露和确认协议以及风险和责任声明，充分了解了自己的内容。</p>
        <p class="paragraph">本人承认并同意，本潜水员活动表自本人与指定的PADI会员一起参加任何裸潜、自由潜水或水肺潜水活动之日起一(1)年内有效。</p>


        <div class="row">
            <div class="col-md-12">
                <form>
                    <label for="participantname">参与者的名字:</label>
                    <label class="spaces"> <?php echo $participantname; ?></label>
                </form>
            </div>
        </div>

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

    <!-- Add the checkboxes for Diver Accident Insurance -->
    <div class="row mt-2">
        <p></p>
        <div class="col-md-12">
            <div class="form-check">
                <p>潜水员意外保险?</p>
                <input class="form-check-input" type="checkbox" id="diverAccidentInsuranceYes" name="diverAccidentInsurance" value="Yes">
                <label class="form-check-label" for="diverAccidentInsuranceYes">
                    是的
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="diverAccidentInsuranceNo" name="diverAccidentInsurance" value="No">
                <label class="form-check-label" for="diverAccidentInsuranceNo">
                    没有
                </label>
            </div>
            <!-- Add the input field for Policy Number -->
            <div id="policyNumberInput" style="display: none;">
                <label for="policyNumber">输入保单编号:</label>
                <input type="text" id="policyNumber" name="policyNumber">
            </div>
        </div>
    </div>

    <div id="alert-container"></div>

    <div class="row">
        <div class="col-md-12 btn-container">

            <button type="button" id="submit-doc2" class="btn btn-primary btn-sm" onclick="handleFormSubmission()">提交</button>

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
                        showAlert('success', '提交成功');
                        // Redirect to doc3.php
                        window.location.href = '/chineseDocuments/doc3/doc3.php';

                    } else {
                        // Display error message using Bootstrap alert
                        showAlert('danger', '提交表单错误。');
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