<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav_chinese.php';
?>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/connection.php';

// Query to retrieve instructors from the database
$instructorQuery = "SELECT instructorName FROM doc2 WHERE userID = $userID ORDER BY id DESC LIMIT 1;";
$instructorResult = mysqli_query($conn, $instructorQuery);
$instructorRow = mysqli_fetch_assoc($instructorResult);
$instructor = $instructorRow['instructorName'];


// Query to retrieve resort from the database
$resortQuery = "SELECT resortName FROM doc2 WHERE userID = $userID ORDER BY id DESC LIMIT 1;";
$resortResult = mysqli_query($conn, $resortQuery);
$resortRow = mysqli_fetch_assoc($resortResult);
$resort = $resortRow['resortName'];

// Query to retrieve resort from the database
$participantnameQuery = "SELECT participantname FROM doc0 WHERE userID = $userID ORDER BY id DESC LIMIT 1;";
$participantnameResult = mysqli_query($conn, $participantnameQuery);
$participantnameRow = mysqli_fetch_assoc($participantnameResult);
$participantname = $participantnameRow['participantname'];

?>

<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Non-Agency Disclosure and Liability Release and Assumption of Risk Agreement</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/includes/style.css">

</head>

<body class="container">

    <div class="row">
        <div class="col-md-12">
            <img class="logo-Doc3" src="logo.png" alt="logo">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="title-container-Doc3">
                <h3 class="title-Doc3">非机构披露和确认协议</h3>
            </div>
            <div class="col-md-12">
                <div class="row sub-titile-Doc3">
                    在欧盟和欧洲自由贸易联盟国家使用替代形式
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h6> <strong>请仔细阅读并填写后再签字。</strong></h6>
            <br>
            <p>我明白并同意PADI会员(“会员”)，包括 <?php echo '<label class="spaces">' . $resort . '</label>'; ?> 和/或任何与我所参加的项目相关的PADI教练和潜水师个人，被授权使用各种PADI商标并进行PADI培训，但不是PADI美洲公司或其母公司、子公司和附属公司(“PADI”)的代理、员工或特许经销商。我进一步了解，会员的商业活动是独立的，既不是PADI拥有也不是PADI经营的，虽然PADI制定了PADI潜水员培训计划的标准，但它不负责也没有权利控制会员的商业活动的运作、PADI计划的日常实施以及会员或其相关人员对潜水员的监督。我进一步理解并同意，代表我自己，我的继承人和我的遗产，在此活动中受伤或死亡的情况下，我和我的遗产不会寻求追究PADI的行为，不作为或疏忽的责任
                <?php echo '<label class="spaces">' . $resort . '</label>'; ?> 和/或与该活动相关的教练和潜水员。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="title-container-Doc3">
                <h3 class="title-Doc3">责任免除和风险承担协议</h3>
            </div>
            <div class="col-md-12">
                <div class="row sub-titile-Doc3">
                    在欧盟和欧洲自由贸易联盟国家使用替代形式
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h6> <strong>请仔细阅读并填写后再签字。</strong></h6>
            <br>
            <p>我,<?php echo '<label class="spaces">' . $participantname . '</label>'; ?> 我在此声明，我知道皮肤潜水和水肺潜水有可能导致严重伤害或死亡的内在风险。</p>
            <p>我知道用压缩空气潜水有一定的内在风险;包括但不限于减压病、栓塞或其他需要在再压缩室治疗的高压/空气扩张损伤。本人进一步了解，培训和认证所必需的开放水域潜水旅行可以在距离再压缩室或时间或距离较远的地点进行。尽管在潜水点附近可能没有再压缩室，我仍然选择进行这样的教学潜水。
            <p>我理解并同意我的指导老师，<?php echo '<label class="spaces">' . $instructor . '</label>'; ?>,
                我接受指导的设施，<?php echo '<label class="spaces">' . $resort . '</label>'; ?>
                PADI Americas, Inc.、其关联公司和子公司，以及他们各自的员工、管理人员、代理、承包商或受让人(以下简称“豁免方”)不得以任何方式对我、我的家人、财产、继承人或受让人因我参加本潜水项目或因任何一方(包括豁免方)的疏忽而可能发生的伤害、死亡或其他损害承担责任。无论是被动还是主动。</p>
            <p>
                考虑到被允许参加本课程(和可选的冒险潜水)，以下简称“项目”，我在此个人承担在我参加本项目期间可能发生的所有可预见或不可预见的风险，包括但不限于学术、封闭水域和/或开放水域活动。
            </p>

            <p>
                对于因我注册和参与本项目而产生的任何索赔或诉讼，包括在项目期间或在我收到认证后产生的索赔，我进一步免除、豁免并使上述项目和被免除方免受损害。

            </p>
            <p>
                我也明白，皮肤潜水和水肺潜水是体力活动，我将在此项目中发挥自己的力量，如果我因心脏病发作，恐慌，过度通气，溺水或任何其他原因受伤，我明确承担上述伤害的风险，并且我不要求被释放方对此负责。

            </p>
            <p>
                我进一步声明，我已达到法定年龄，在法律上有能力签署本免责声明，或者我已获得父母或监护人的书面同意。我明白这里的条款是合同，而不仅仅是背诵，我签署本协议是我自己的自由行为，并知道我在此同意放弃我的法律权利。我进一步同意，如果本协议的任何条款被发现是不可执行或无效的，该条款应从本协议中分离。本协议的其余部分将被解释为本协议中从未包含不可执行的条款。
            </p>
            <p>我理解并同意，我不仅放弃起诉被解约方的权利，而且放弃因我去世而我的继承人、受让人或受益人可能有权起诉被解约方的任何权利。我进一步声明，我有权这样做，我的继承人、受让人或受益人将被禁止因为我对被释放方的陈述而提出其他要求。</p>
            <p>
                我, <?php echo '<label class="spaces">' . $participantname . '</label>'; ?>, 通过本文件，同意豁免和释放我的指导员<?php echo '<label class="spaces">' . $instructor . '</label>'; ?> 我通过其接受指示的设施。 <?php echo '<label class="spaces">' . $resort . '</label>'; ?> 、PADI AMERICAS, INC. 以及上述定义的所有相关实体，免于承担因任何原因造成的人身伤害、财产损失或非正常死亡的所有责任或责任，包括但不限于被免责方的疏忽，无论是主动还是被动。
            </p>
            <p><strong>在代表我本人和我的继承人签署以下协议之前，我已经充分了解了本非代理披露和承认协议以及责任免除和风险承担协议的内容。</strong></p>


        </div>
    </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form class="mt-3 position-relative" id="participantSignatureForm">
                <div class="form-group canvas-container">
                    <div class="toast-container" id="signatureToastContainer">
                        <div class="toast" id="signatureToast">
                            <div class="toast-body">
                                请您(参赛者)用手指在指定的方框内签名。
                            </div>
                            <div class="toast-body">
                                <img src="sign.gif" alt="SIGN.GIF" class="centered-image">
                            </div>
                        </div>
                    </div>
                    <label>参与者的签名 <i id="participant-signature-info-icon" class="bi bi-info-circle" style="cursor: pointer;"></i>
                    </label>
                    <!-- Set canvas dimensions relative to the screen size -->
                    <canvas id="participantSignatureCanvas" class="signature-canvas" width="350%" height="400%"></canvas>
                    <button type="button" class="btn btn-secondary clearbutton" onclick="clearSignature()"><span class="bi bi-x-lg"></span></button>
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
                                请提供家长或监护人的签名，用手指在指定的方框里画。
                            </div>
                            <div class="toast-body">
                                <img src="sign.gif" alt="SIGN.GIF" class="centered-image">
                            </div>
                        </div>
                    </div>
                    <label>家长或监护人签名 <i id="parent-signature-info-icon" class="bi bi-info-circle" style="cursor: pointer;"></i>
                    </label>
                    <!-- Set canvas dimensions relative to the screen size -->
                    <canvas id="parentSignatureCanvas" class="signature-canvas" width="350%" height="400%"></canvas>
                    <button type="button" class="btn btn-secondary clearbutton" onclick="clearParentSignature()"><span class="bi bi-x-lg"></span></button>
                </div>
            </form>
        </div>
    </div>
    <div id="alert-container"></div>

    <div class="row">
        <div class="col-md-12 btn-container">
            <button type="button" id="submit-doc3" class="btn btn-primary btn-sm" onclick="handleFormSubmission()">提交</button>
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

            // Send the formData to the server using AJAX
            sendToServer(formData);

            // Redirect to doc4.php
            // window.location.href = '/englishDocuments/doc4/doc4.php';
        }

        function sendToServer(formData) {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'doc3_save_data.php', true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        // Display success message using Bootstrap alert
                        showAlert('success', '提交成功');
                        // Redirect to doc4.php
                        window.location.href = '/chineseDocuments/doc4/doc4.php';

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