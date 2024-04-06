<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav_chinese.php';
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
                    <label for="divemaster">潜水大师: </label>
                    <i id="divemaster-info-icon" class="bi bi-info-circle" style="cursor: pointer;"></i>
                    <div class="toast" id="divemasterToast">
                        <div class="toast-body">
                            <b>请在给定框中选择潜水师</b>
                            <div>潜水大师是一名潜水专业人士，他经过了广泛的培训，具备领导和监督娱乐潜水活动所需的知识和技能。</div>
                        </div>
                    </div>
                    <select class="crew mb-2" id="divemaster" name="divemasters[]" multiple disabled>
                        <option>选择潜水大师</option>
                    </select>

                    <label for="crewMember">船员: </label>
                    <i id="crewmembers-info-icon" class="bi bi-info-circle" style="cursor: pointer;"></i>
                    <div class="toast" id="crewmembersToast">
                        <div class="toast-body">
                            <b>请在给定的框中选择机组成员</b>
                            <div> <b>"船员"</b>指负责操作和协助操作用于水肺潜水之船的人员。</div>
                        </div>
                    </div>
                    <select class="crew mb-2" id="crewMember" name="crewMember[]" multiple disabled>
                       <option>选择机组成员</option>
                    </select>

                    <label for="captain">船长的名字: </label>
                    <select class="crew" id="captain" disabled>
                        <option>选择船长姓名</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <p><strong>无论是船员还是船主,</strong></p>
                    <label for="vesselName">船舶名称: </label>
                    <select class="vessel" id="vesselName" disabled>
                        <option>选择船舶名称</option>
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
                                请您(参赛者)用手指在指定的方框内签名。
                            </div>
                            <div class="toast-body">
                                <img src="sign.gif" alt="SIGN.GIF" class="centered-image">
                            </div>
                        </div>
                    </div>
                    <label>参与者的签名<i id="participant-signature-info-icon" class="bi bi-info-circle" style="cursor: pointer;"></i>
                    </label>
                    <!-- Set canvas dimensions relative to the screen size -->
                    <canvas id="participantSignatureCanvas" class="signature-canvas" width="350%" height="400%"></canvas>
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

        // Ensure jQuery is loaded before executing the script
        $(document).ready(function() {
            // Initialize Selectize plugin
            $('#divemaster').selectize({
                plugins: ['remove_button'],
                delimiter: ',',
                persist: false,
                create: true,
                maxItems: null,
                placeholder: '选择潜水教练',
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
                showAlert('danger', '请选择至少一名潜水员。');
                return false; // Prevent form submission
            }
            return true; // Allow form submission
        }
    </script>
</body>

</html>