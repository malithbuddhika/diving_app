<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Safe Diving Practices Statement</title>
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
    <p>I, <input type="text" id="participantname" name="participantname"> <i id="participation-info-icon" class="bi bi-info-circle" style="cursor: pointer;"></i></p>
    <div class="toast" id="participantNameToast">
        <div class="toast-body">
            Please ensure that your full name is entered correctly. If it is not, please provide the correct name.
            <br>
            <u><b>For Example,</b></u>
            if your name is <b>John Smith</b>, but it was entered as <b>John Smyth</b>, please correct it accordingly.
        </div>
    </div>


    <p>1. Maintain good mental and physical fitness for diving. Avoid being under the influence of alcohol or dangerous drugs when diving. Keep proficient in diving skills, striving to increase them through continuing education and reviewing them in controlled conditions after a period of diving inactivity, and refer to my course materials to stay current and refresh myself on important information.</p>
    <p>2. Be familiar with my dive sites. If not, obtain a formal diving orientation from a knowledgeable, local source. If diving conditions are worse than those in which I am experienced, postpone diving or select an alternate site with better conditions. Engage only in diving activities consistent with my training and experience. Do not engage in cave or technical diving unless specifically trained to do so.</p>
    <p>3. Use complete, well-maintained, reliable equipment with which I am familiar; and inspect it for correct fit and function prior to each dive. Have a buoyancy control device, low-pressure buoyancy control inflation system, submersible pressure gauge and alternate air source and dive planning/monitoring device (dive computer, RDP/dive tables-whichever you are trained to use) when scuba diving. Deny use of my equipment to uncertified divers.</p>
    <p>4. Listen carefully to dive briefings and directions and respect the advice of those supervising my diving activities. Re- cognize that additional training is recommended for participation in specialty diving activities, in other geographic areas and after periods of inactivity that exceed six months.</p>
    <p>5. Adhere to the buddy system throughout every dive. Plan dives – including communications, procedures for reuniting in case of separation and emergency procedures – with my buddy.</p>
    <p>6. Be proficient in dive planning (dive computer or dive table use). Make all dives no decompression dives and allow a margin of safety. Have a means to monitor depth and time underwater. Limit maximum depth to my level of training and experience. Ascend at a rate of not more than 18 meters/60 feet per minute. Be a SAFE diver – <b>S</b>lowly <b>A</b>scend <b>F</b>rom <b>E</b>very dive. Make a safety stop as an added precaution, usually at 5 meters/15 feet for three minutes or longer.</p>
    <p>7. Maintain proper buoyancy. Adjust weighting at the surface for neutral buoyancy with no air in my buoyancy control device. Maintain neutral buoyancy while underwater. Be buoyant for surface swimming and resting. Have weights clear for easy removal, and establish buoyancy when in distress while diving. Carry at least one surface signaling device (such as signal tube, whistle, mirror).</p>
    <p>8. Breathe properly for diving. Never breath-hold or skip-breathe when breathing compressed air, and avoid excessive hyperventilation when breath-hold diving. Avoid overexertion while in and underwater and dive within my limitations.</p>
    <p>9. Use a boat, float or other surface support station, whenever feasible.</p>
    <p>10. Know and obey local dive laws and regulations, including fish and game and dive flag laws.</p>

    <h6> <strong>I understand the importance and purposes of these established practices. I recognize they are for my own safety and well-being, and that failure to adhere to them can place me in jeopardy when diving.</strong> </h6>

    <div class="container">
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
                        <label>
                            Participant Signature
                            <i id="participant-signature-info-icon" class="bi bi-info-circle" style="cursor: pointer;"></i>
                        </label>
                        <!-- Button to trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signatureModal">
                            Open Signature Popup
                        </button>

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

                        <!-- Preview Canvas -->
                        <label>
                            Participant Signature Preview
                        </label>
                        <canvas id="participantSignatureCanvasPreview" class="signature-preview-canvas"></canvas>
                    </div>
                </form>
            </div>
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
                    <label>Signature of Parent of Guardian <i id="parent-signature-info-icon" class="bi bi-info-circle" style="cursor: pointer;"></i>
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
            <button type="button" id="submit-doc3" class="btn btn-primary btn-sm" onclick="handleFormSubmission()">Submit</button>
        </div>
    </div>
    </div>

    <!-- Include jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>




    <!-- <script>
        // Get the canvas element
        var participantCanvas = document.getElementById('participantSignatureCanvas');
        var ctx = participantCanvas.getContext('2d');
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

        function saveAndCloseSignature() {

            // Close the modal
            $('#signatureModal').modal('hide');
        }
    </script> -->

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

    function saveAndCloseSignature() {
        saveSignature();
        // Close the modal
        $('#signatureModal').modal('hide');
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
                let toastLeft = targetRect.left + targetRect.width + 10; // 10px right of the icon

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
            let participantName = document.getElementById('participantname').value;
            // Capture current date for participant and parent signatures
            let participantDate = new Date().toISOString();
            let parentDate = new Date().toISOString();

            // Capture the final point before form submission
            let participantSignatureData = participantCanvas.toDataURL();
            // drawFinalPoint(); // Capture the final point for participant signature
            let parentSignatureData = parentCanvas.toDataURL();
            drawParentFinalPoint(); // Capture the final point for parent signature

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
            // Redirect to doc4.php
            window.location.href = '/englishDocuments/doc1/doc1.php';
        }
    </script>



</body>

</html>