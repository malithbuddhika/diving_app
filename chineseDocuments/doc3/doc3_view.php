<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav_submitted_chinese.php';
?>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/connection.php';

$userID = $_SESSION['userID'];
$queryDoc3 = "SELECT * FROM doc3 WHERE userID = $userID ;";
$resultDoc3 = mysqli_query($conn, $queryDoc3);
$rowDoc3 = mysqli_fetch_assoc($resultDoc3);

$instructorName = $rowDoc3['instructorName'];
$resortName = $rowDoc3['resortName'];
$participantSignature = $rowDoc3['participantSignature'];
$participantDate = $rowDoc3['participantDate'];
$parentSignature = $rowDoc3['parentSignature'];
$parentDate = $rowDoc3['parentDate'];

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

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Document 3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/includes/style.css">
    </style>
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
            <p>我明白并同意PADI会员(“会员”)，包括 <label class="spaces"> <?php echo $resortName; ?></label> 和/或任何与我所参加的项目相关的PADI教练和潜水师个人，被授权使用各种PADI商标并进行PADI培训，但不是PADI美洲公司或其母公司、子公司和附属公司(“PADI”)的代理、员工或特许经销商。我进一步了解，会员的商业活动是独立的，既不是PADI拥有也不是PADI经营的，虽然PADI制定了PADI潜水员培训计划的标准，但它不负责也没有权利控制会员的商业活动的运作、PADI计划的日常实施以及会员或其相关人员对潜水员的监督。我进一步理解并同意，代表我自己，我的继承人和我的遗产，在此活动中受伤或死亡的情况下，我和我的遗产不会寻求追究PADI的行为，不作为或疏忽的责任
                <label class="spaces"> <?php echo $resortName; ?></label> 和/或与该活动相关的教练和潜水员。
            </p>
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
            <p>我,<label class="spaces"> <?php echo $participantname; ?></label> 我在此声明，我知道皮肤潜水和水肺潜水有可能导致严重伤害或死亡的内在风险。</p>
            <p>我知道用压缩空气潜水有一定的内在风险;包括但不限于减压病、栓塞或其他需要在再压缩室治疗的高压/空气扩张损伤。本人进一步了解，培训和认证所必需的开放水域潜水旅行可以在距离再压缩室或时间或距离较远的地点进行。尽管在潜水点附近可能没有再压缩室，我仍然选择进行这样的教学潜水。
            <p>我理解并同意我的指导老师，<label class="spaces"> <?php echo $instructorName; ?></label>
                我接受指导的设施， <label class="spaces"> <?php echo $resortName; ?></label>
                PADI Americas, Inc.、其关联公司和子公司，以及他们各自的员工、管理人员、代理、承包商或受让人(以下简称“豁免方”)不得以任何方式对我、我的家人、财产、继承人或受让人因我参加本潜水项目或因任何一方(包括豁免方)的疏忽而可能发生的伤害、死亡或其他损害承担责任。无论是被动还是主动。
            </p>
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
                我,<label class="spaces"> <?php echo $participantname; ?></label>, 通过本文件，同意豁免和释放我的指导员......................................我通过其接受指示的设施。 ................................... 、PADI AMERICAS, INC. 以及上述定义的所有相关实体，免于承担因任何原因造成的人身伤害、财产损失或非正常死亡的所有责任或责任，包括但不限于被免责方的疏忽，无论是主动还是被动。
            </p>
            <p><strong>在代表我本人和我的继承人签署以下协议之前，我已经充分了解了本非代理披露和承认协议以及责任免除和风险承担协议的内容。</strong></p>
        </div>
    </div>

    </div>

    <div class="row">
        <div class="col-md-12">
            <form class="mt-3" id="participantSignatureForm">
                <div class="form-group canvas-container">
                    <!-- Set canvas dimensions relative to the screen size -->
                    <label>参与者的签名</label>
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
                    <label>家长或监护人签署(如适用)</label>
                    <?php echo '<img class="signature-canvas" src="' . $parentSignature . '" alt=" Parent Signature">'; ?>
                    <span>日期:<?php echo $formattedParentDate ?></span>

                </div>

            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 btn-container">

            <button type="button" id="submit-doc1" class="btn btn-primary btn-sm disable" disabled>提交</button>

        </div>
    </div>


    <script>

    </script>



</body>

</html>