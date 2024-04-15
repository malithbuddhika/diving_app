<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav_chinese.php';

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/includes/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/css/selectize.default.min.css">
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

        <div>
            <label for="instructors">教练: </label>
            <i id="instructors-info-icon" class="bi bi-info-circle" style="cursor: pointer;"></i>
            <div class="toast" id="instructorsToast">
                <div class="toast-body">
                    <b>请在指定方格内选择导师</b>
                    <div> <b>"教练"</b> 通常指的是获得水肺潜水教练认证的个人。这些教练经过了广泛的培训和评估，使他们有资格教授和监督潜水活动。</div>
                </div>
            </div>
            <select id="instructorSelect" class="crew" name="instructors[]" multiple>
                <option value="" disabled selected>选择教师</option>
                <?php
                while ($row = mysqli_fetch_assoc($instructorResult)) {
                    echo "<option value='" . $row['instructorName'] . "'>" . $row['instructorName'] . "</option>";
                }
                ?>
            </select>
        </div> , 也不
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

    <!-- Add the checkboxes for Diver Accident Insurance -->
    <div class="row mt-2">
        <p></p>
        <div class="col-md-12">
            <div class="form-check">
                <p>潜水员意外保险?</p>
                <input class="form-check-input" type="checkbox" id="diverAccidentInsuranceYes" name="diverAccidentInsurance" value="Yes" required>
                <label class="form-check-label" for="diverAccidentInsuranceYes">
                    是的
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="diverAccidentInsuranceNo" name="diverAccidentInsurance" value="No" required>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Select2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/js/standalone/selectize.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const instructorsInfoIcon = document.getElementById('instructors-info-icon');
            const instructorsToast = document.getElementById('instructorsToast');

            instructorsInfoIcon.addEventListener('click', function() {
                positionToast(instructorsInfoIcon, instructorsToast);
                $(instructorsToast).toast('show');
            });

            window.addEventListener('resize', function() {
                // Adjust toast position on window resize
                positionToast(instructorsInfoIcon, instructorsToast);
            });

            // Scroll event listener to keep toast position updated
            window.addEventListener('scroll', function() {
                positionToast(instructorsInfoIcon, instructorsToast);
            });

            // Function to calculate and set the position of the toast relative to the icon
            function positionToast(targetElement, toastElement) {
                const targetRect = targetElement.getBoundingClientRect();
                const toastWidth = toastElement.offsetWidth;
                const toastHeight = toastElement.offsetHeight;

                // Position the toast near the icon
                let toastTop = targetRect.top + (targetRect.height / 2) - (toastHeight / 2);
                let toastLeft = targetRect.left + targetRect.width + 100; // 10px right of the icon

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
                let toastLeft = targetRect.left + targetRect.width + 70; // 10px right of the icon

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
                let toastLeft = targetRect.left + targetRect.width + 50; // 10px right of the icon

                // Set the toast position
                toastElement.style.top = toastTop + 'px';
                toastElement.style.left = toastLeft + 'px';
            }
        });

        $(document).ready(function() {
            $('#instructorSelect').selectize({
                plugins: ['remove_button'],
                delimiter: ',',
                persist: false,
                create: true,
                maxItems: null,
                placeholder: '选择教师',
                render: {
                    item: function(data, escape) {
                        return '<div>' + escape(data.text) + '</div>';
                    }
                }
            });
        });
    </script>

    <script>
        function checkInstructorSelection() {
            var selectElement = document.getElementById("instructorSelect");
            if (selectElement && selectElement.selectedOptions.length === 0) {
                showAlert('danger', '请选择至少一名教师。');
                return false; // Prevent form submission
            }
            return true;
        }

        function checkInsurance() {
            // Check if Diver Accident Insurance checkbox is checked
            var diverAccidentInsuranceYes = document.getElementById('diverAccidentInsuranceYes');
            var diverAccidentInsuranceNo = document.getElementById('diverAccidentInsuranceNo');
            if (!diverAccidentInsuranceYes.checked && !diverAccidentInsuranceNo.checked) {
                showAlert('danger', '请选择是否购买潜水员意外保险');
                return false; // Stop form submission if Diver Accident Insurance is not selected
            }
            // Return true if insurance selection is valid
            return true;
        }

        function togglePolicyNumberInput() {
            var policyNumberInput = document.getElementById('policyNumberInput');
            var diverAccidentInsuranceYes = document.getElementById('diverAccidentInsuranceYes');

            if (policyNumberInput && diverAccidentInsuranceYes) {
                if (diverAccidentInsuranceYes.checked) {
                    policyNumberInput.style.display = 'block';
                    document.getElementById('policyNumber').required = true;
                } else {
                    policyNumberInput.style.display = 'none';
                    document.getElementById('policyNumber').required = false;
                }
            }
        }


        // Add event listeners to the checkboxes to call the toggle function when their state changes
        document.getElementById('diverAccidentInsuranceYes').addEventListener('change', togglePolicyNumberInput);
        document.getElementById('diverAccidentInsuranceNo').addEventListener('change', togglePolicyNumberInput);

        // Call the toggle function initially to set up the form according to the initial state of the checkboxes
        togglePolicyNumberInput();

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
            if (!checkInstructorSelection()) {
                return; // Stop form submission if crew member selection is invalid
            }

            // Check Insurance
            if (!checkInsurance()) {
                return; // Stop form submission if Insurance is invalid
            }

            // Capture current date for participant and parent signatures
            let participantDate = new Date().toISOString();
            let parentDate = new Date().toISOString();

            // Capture the final point before form submission
            let participantCanvas = document.getElementById('participantSignatureCanvas');
            let parentCanvas = document.getElementById('parentSignatureCanvas');
            if (participantCanvas && parentCanvas) {
                let participantSignatureData = participantCanvas.toDataURL();
                let parentSignatureData = parentCanvas.toDataURL();

                // Get all selected crew members
                let selectedInstructors = Array.from(document.getElementById('instructorSelect').selectedOptions).map(option => option.value);

                let formData = new FormData();
                formData.append('participantSignatureData', participantSignatureData);
                formData.append('participantDate', participantDate);
                formData.append('parentSignatureData', parentSignatureData);
                formData.append('parentDate', parentDate);
                // Include selected instructor names in form data
                selectedInstructors.forEach(instructor => {
                    formData.append('selectedInstructor[]', instructor);
                });

                // Include selected resort name
                let selectedResortName = document.getElementById('resortSelect').value;
                formData.append('selectedResortName', selectedResortName);

                // Include diver accident insurance information
                if (document.getElementById('diverAccidentInsuranceYes').checked) {
                    formData.append('diverAccidentInsurance', 'Yes');
                    let policyNumber = document.getElementById('policyNumber').value;
                    if (policyNumber.trim() === '') {
                        showAlert('danger', '请输入潜水员意外保险保单编号。');
                        return; // Stop form submission if policy number is not provided
                    }
                    formData.append('policyNumber', policyNumber);
                } else {
                    formData.append('diverAccidentInsurance', 'No');
                }

                // Send the formData to the server using AJAX
                sendToServer(formData);
            } else {
                showAlert('danger', 'Signature canvas elements not found.');
            }
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