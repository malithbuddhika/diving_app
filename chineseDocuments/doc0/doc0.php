<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav_chinese.php';
?>

<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>SAFE DIVING PRACTICES</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/includes/style.css">

</head>

<body class="container">
    <div class="row">
        <div class="col-md-2">
            <img class="logo-Doc0" src="logo.png" alt="logo">
        </div>
        <div class="col-md-10">
            <div class="title-container-Doc0">
                <h3 class="title-Doc0">标准安全潜水操作理解声明</h3>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <h6><strong>请仔细阅读并填写后再签字。</strong></h6>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <p>这是一份声明，你被告知建立安全的潜水实践皮肤和水肺潜水。这些做法是为您的审查和确认而编制的，旨在提高您在潜水时的舒适度和安全性。你必须在这份声明上签字，以证明你知道这些安全的潜水练习。在签署声明前阅读并讨论。如果你是未成年人，这份表格也必须由父母或监护人签署。</p>
        </div>
    </div>

    <p>我, <input type="text" id="participantname" name="participantname"> <i id="participation-info-icon" class="bi bi-info-circle" style="cursor: pointer;"></i></p>
    <div class="toast" id="participantNameToast">
        <div class="toast-body">
        请确保您的全名输入正确。如果不是，请提供正确的名称。
            <br>
            <u><b>例如,</b></u>
            如果你的名字是<b>John Smith</b>, 但它被输入为 <b>John Smyth</b>, 请相应更正。
        </div>
    </div>
    <p>1. 为潜水保持良好的身心健康。潜水时避免酒精或危险药物的影响。保持对潜水技能的精通，在一段时间不活动潜水后，努力通过继续教育和在受控条件下复习来提高自己的潜水技能，并参考我的课程材料来了解最新情况，更新重要信息。</p>
    <p>2. 熟悉我的潜水地点。如果没有，从一个有知识的当地人士那里获得正式的潜水指导。如果潜水条件比我的经验差，请推迟潜水或选择条件较好的备用地点。只从事与我的训练和经验相符的潜水活动。除非经过专门训练，否则不要从事洞穴潜水或技术潜水。</p>
    <p>3. 使用自己熟悉的完整、维护良好、可靠的设备;并且在每次潜水前检查它的正确配合和功能。当你进行水肺潜水时，要准备好浮力控制装置、低压浮力控制充气系统、潜水压力表和备用气源以及潜水计划/监测设备(潜水电脑、RDP/潜水表——无论你接受过何种训练)。禁止未经认证的潜水员使用我的设备。</p>
    <p>4. 认真听取潜水简报和指示，并尊重监督我潜水活动的人的建议。认识到参加专业潜水活动，在其他地理区域和在不活动超过六个月后，建议进行额外的培训。</p>
    <p>5. 每次潜水都要坚持伙伴制度。和我的朋友一起计划潜水——包括沟通、分离时重聚的程序和紧急程序。</p>
    <p>6. 精通潛水計劃表的用途。所作的潛水都要是免減壓潛水，並且預留安全餘地。備有工具在水底監測深度和時間。最大潛 水深度不超過我的訓練和經驗等級和範圍。上升速度不得超過每分鐘18 公尺／ 60 英呎。做一位安全（SAFE）的潛水員﹣每次潛水都要緩慢上升（Slowly Ascend From Every dive）。安全停留是另一個預防措施，通常在5 公尺∕ 15 英呎處停留3 分鐘以上。</p>
    <p>7. 維持適當的浮力控制。在水面將配重調整成中性浮力，這時的浮力控制裝置內沒有空氣。在水底時要維持中性浮力。水面游泳和休息時要能浮起。將配重周邊的障礙清除，以便拆卸容易以及在潛水遭遇危難時可以建立浮力。</p>
    <p>8. 潛水時要正確呼吸。在使用壓縮空氣呼吸時，絕對不要憋住呼吸或是跳躍式的呼吸，在憋氣潛水時（浮潛）要避免過分過度換氣。在水中和水底時避免過度疲累，並且要在自己的極限內潛水。</p>
    <p>9. 只要可行時，都要使用船隻、浮具、或是其他水面支撐台。</p>
    <p>10. 知道並遵守當地潛水法律和規定，包括對於漁獵和潛水旗的法律規定。</p>

    <h6><strong>本人已詳閱以上聲明，相關問題也已得到滿意之答覆。本人了解此些既定規範之重要性與目的。我明白這是為我的安全與健康著想，也明白潛水時如沒有遵守此些規範，將可能導致自身的危險。</strong></h6>

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
            <button type="button" id="submit-doc3" class="btn btn-primary btn-sm" onclick="handleFormSubmission()">下一个</button>
        </div>
    </div>

     <!-- Include jQuery and Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
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
    </script>
    <script>
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
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const participationInfoIcon = document.getElementById('participation-info-icon');
            const participantNameToast = document.getElementById('participantNameToast');

            participationInfoIcon.addEventListener('click', function() {
                positionToast(participationInfoIcon, participantNameToast);
                $(participantNameToast).toast('show');
            });

            window.addEventListener('resize', function() {
                // Adjust toast position on window resize
                positionToast(participationInfoIcon, participantNameToast);
            });

            // Scroll event listener to keep toast position updated
            window.addEventListener('scroll', function() {
                positionToast(participationInfoIcon, participantNameToast);
            });

            // Function to calculate and set the position of the toast relative to the icon
            function positionToast(targetElement, toastElement) {
                const targetRect = targetElement.getBoundingClientRect();
                const toastWidth = toastElement.offsetWidth;
                const toastHeight = toastElement.offsetHeight;

                // Position the toast near the icon
                let toastTop = targetRect.top + (targetRect.height / 2) - (toastHeight / 2);
                let toastLeft = targetRect.left + targetRect.width - 50; // 10px right of the icon

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

        // Function to retrieve the participant's name from localStorage
        function getParticipantName() {
            return localStorage.getItem('participantName');
        }

        // Function to set the participant's name in the input field
        function setParticipantName() {
            var participantName = getParticipantName();
            if (participantName) {
                document.getElementById("participantname").value = participantName; // Corrected variable name
            }
        }

        // Call the function to set participant's name when the page loads
        window.onload = function() {
            setParticipantName();
        };
        

        function handleFormSubmission() {
            let participantName = document.getElementById('participantname').value;
            // Capture current date for participant and parent signatures
            let participantDate = new Date().toISOString();
            let parentDate = new Date().toISOString();

            // Capture the final point before form submission
            let participantSignatureData = participantCanvas.toDataURL();
            // drawFinalPoint(); // Capture the final point for participant signature
            let parentSignatureData = parentCanvas.toDataURL();
            // drawParentFinalPoint(); // Capture the final point for parent signature

            let formData = new FormData();
            formData.append('participantname', participantName);
            formData.append('participantSignatureData', participantSignatureData);
            formData.append('participantDate', participantDate);
            formData.append('parentSignatureData', parentSignatureData);
            formData.append('parentDate', parentDate);
            sendToServer(formData);
        }

        function sendToServer(formData) {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'doc0_save_data.php', true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        // Display success message using Bootstrap alert
                        showAlert('success', '提交成功');
                        // Redirect to doc4.php
                        window.location.href = '/chineseDocuments/doc1/doc1.php';

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