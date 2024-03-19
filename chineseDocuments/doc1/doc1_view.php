<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav_submitted_chinese.php';
?>

<?php

include $_SERVER['DOCUMENT_ROOT'] . '/connection.php';

$userID = $_SESSION['userID'];

// Query to retrieve medical examiner data from medical_examiner
$queryDoc1 = "SELECT * FROM doc1 WHERE userID = $userID ;";
$resultDoc1 = mysqli_query($conn, $queryDoc1);
$rowDoc1 = mysqli_fetch_assoc($resultDoc1);
$divemaster = $rowDoc1['divemaster'];
$crewMember = $rowDoc1['crewMember'];
$captain = $rowDoc1['captain'];
$vesselName = $rowDoc1['vesselName'];
$participantSignature = $rowDoc1['participantSignature'];
$participantDate = $rowDoc1['participantDate'];
$parentSignature = $rowDoc1['parentSignature'];
$parentDate = $rowDoc1['parentDate'];

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

    <title>Doc1</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/includes/style.css">
    </style>
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
                    <span class="crew" id="divemaster">
                    <label class="spaces"> <?php

                        echo $divemaster . ", ";

                        ?> </label>
                    </span>

                    <label for="crewMember">船员姓名: </label>
                    <span class="crew" id="crewMember">
                    <label class="spaces"><?php

                        echo $crewMember . ", ";

                        ?> </label>
                    </span>

                    <label for="captain">船长的名字:</label>
                    <span class="crew" id="captain">
                    <label class="spaces"> <?php

                        echo $captain . ", ";

                        ?> </label>
                    </span>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <p><strong>无论是船员还是船主,</strong></p>

                    <label for="vesselName">船舶名称:</label>
                    <span class="vessel" id="vesselName">
                    <label class="spaces"> <?php

                        echo $vesselName . ", ";

                        ?> </label>
                    </span>
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
                <label class="spaces"><?php

                echo $participantname;

                ?></label>
            </form>
        </div>
    </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form class="mt-3" id="participantSignatureForm">
                <div class="form-group canvas-container">
                    <label>参与者的签名</label>
                    <?php echo '<img class="signature-canvas" src="' . $participantSignature . '" alt="Participant Signature">'; ?>
                    <span>日期: <?php echo $formattedParticipantDate ?> </span>
                </div>
            </form>
        </div>
    </div>

    <br> <br>

    <div class="row mt-2">
        <div class="col-md-12">

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form class="mt-3" id="participantSignatureForm">
                <div class="form-group canvas-container">
                    <label>家长或监护人签署(如适用)</label>
                    <?php echo '<img class="signature-canvas" src="' . $parentSignature . '" alt=" Parent Signature">'; ?>
                    <span>日期: <?php echo $formattedParentDate ?></span>
                </div>

            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 btn-container">

            <button type="button" id="submit-doc1" class="btn btn-primary btn-sm disable" disabled>提交</button>


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