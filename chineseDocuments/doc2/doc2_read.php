<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav_chinese.php';
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
            <select id="resortSelect" class="underline" disabled>
                <option>存储/度假村</option>
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
            <select id="instructorSelect" class="crew" name="instructors[]" multiple disabled>
                <option value="" disabled selected>选择教师</option>
            </select>
        </div> , 也不
        </p>

        <p class="paragraph">执行这个项目的机构，

            <!-- resort name -->
            <label class="spaces">存储/度假村的名字</label>

            PADI EMEA Ltd.、PADI Americas, Inc.、它们的关联公司或子公司，以及它们各自的员工、官员、代理、承包商或受让人，都不对我因自己的行为或在我控制下的构成我的共同过失的任何事项或情况而遭受的任何死亡、受伤或其他损失承担任何责任。
        </p>
        <p class="paragraph">在潜水专业人员没有任何疏忽或其他违反职责的情况下，

            <!-- Instructor name -->
            <label class="spaces">老师的名字</label>
        </p>

        <p class="paragraph">提供这个项目的机构，

            <!-- resort name -->

            <label class="spaces">存储/度假村的名字</label>

            PADI EMEA有限公司，PADI Americas, Inc.和上述各方，我参加这个潜水项目的风险完全由我自己承担。
        </p>
        <p class="paragraph">在签署这些声明之前，我通过阅读这两份非代理披露和确认协议以及风险和责任声明，充分了解了自己的内容。</p>
        <p class="paragraph">本人承认并同意，本潜水员活动表自本人与指定的PADI会员一起参加任何裸潜、自由潜水或水肺潜水活动之日起一(1)年内有效。</p>


        <div class="row">
            <div class="col-md-12">
                <form>
                    <label for="participantname">参与者的名字:</label>
                    <label class="spaces">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp,</label>
                </form>
            </div>
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

</body>

</html>