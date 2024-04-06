<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav_chinese.php';

?>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/connection.php';

$userID = $_SESSION['userID'];


// Query to retrieve medical examiner data from medical_examiner
$queryDoc2 = "SELECT * FROM doc2 WHERE userID = $userID ;";
$resultDoc2 = mysqli_query($conn, $queryDoc2);
$rowDoc2 = mysqli_fetch_assoc($resultDoc2);

$instructorName = $rowDoc2['instructorName'];
$resortName = $rowDoc2['resortName'];
$participantSignature = $rowDoc2['participantSignature'];
$participantDate = $rowDoc2['participantDate'];
$parentSignature = $rowDoc2['parentSignature'];
$parentDate = $rowDoc2['parentDate'];
$diverAccidentInsurance = $rowDoc2['diverAccidentInsurance'];
$policyNumber = $rowDoc2['policyNumber'];

$queryDoc0 = "SELECT participantname FROM doc0 WHERE userID = $userID ;";
$resultDoc0 = mysqli_query($conn, $queryDoc0);
$rowDoc0 = mysqli_fetch_assoc($resultDoc0);

$participantname = $rowDoc0['participantname'];

$formattedParticipantDate = date("d/m/Y", strtotime($participantDate));
$formattedParentDate = date("d/m/Y", strtotime($parentDate));

?>

<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/includes/style.css"> 
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

            <span id="resortSelect" class="spaces">
                <?php echo $resortName; ?>
            </span>
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



            <span id="instructorSelect" class="spaces">

                <?php echo $instructorName; ?> ,也不

            </span>
            
        </p>

        
        <p class="paragraph">执行这个项目的机构，
            <!-- resort name -->
            <label class="spaces"> <?php echo $resortName; ?></label>

            PADI EMEA Ltd.、PADI Americas, Inc.、它们的关联公司或子公司，以及它们各自的员工、官员、代理、承包商或受让人，都不对我因自己的行为或在我控制下的构成我的共同过失的任何事项或情况而遭受的任何死亡、受伤或其他损失承担任何责任。
        </p>
        <p class="paragraph">在潜水专业人员没有任何疏忽或其他违反职责的情况下，
            <label class="spaces"> <?php echo $instructorName; ?></label>
        </p>

        <p class="paragraph">提供这个项目的机构，
            <!-- resort name -->
            <label class="spaces"> <?php echo $resortName; ?></label>

            PADI EMEA有限公司，PADI Americas, Inc.和上述各方，我参加这个潜水项目的风险完全由我自己承担。
        </p>
        <p class="paragraph">在签署这些声明之前，我通过阅读这两份非代理披露和确认协议以及风险和责任声明，充分了解了自己的内容。</p>
        <p class="paragraph">本人承认并同意，本潜水员活动表自本人与指定的PADI会员一起参加任何裸潜、自由潜水或水肺潜水活动之日起一(1)年内有效。</p>


        <div class="row">
            <div class="col-md-12">
                <form>
                    <label for="participantname">参与者的名字:</label>
                    <!-- Input field for participant's name -->
                    <label class="spaces"> <?php echo $participantname; ?></label>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form class="mt-3" id="participantSignatureForm">
                <div class="form-group canvas-container">
                    <!-- Set canvas dimensions relative to the screen size -->
                    <label class="sign-label">参与者的签名</label>
                    <?php echo '<img class="signature-canvas" src="' . $participantSignature . '" alt="Participant Signature">'; ?>
                    <span>日期: <?php echo $formattedParticipantDate ?></span>

                </div>

            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form class="mt-3" id="participantSignatureForm">
                <div class="form-group canvas-container">
                    <!-- Set canvas dimensions relative to the screen size -->
                    <label>家长或监护人签署(如适用)</label>
                    <?php echo '<img class="signature-canvas" src="' . $parentSignature . '" alt=" Parent Signature">'; ?>
                    <span>日期: <?php echo $formattedParentDate ?></span>

                </div>

            </form>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-12">
            <div id="policyNumberInput">
                <label>潜水员意外保险? <?php echo $diverAccidentInsurance ?></label>
                <label for="policyNumber">保险单编号: <?php echo $policyNumber ?></label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 btn-container">

            <button type="button" id="submit-doc1" class="btn btn-primary btn-sm disable" disabled>提交</button>

        </div>
    </div>
    </div>
    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script>
        
    </script>
</body>

</html>