<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav_submitted_chinese.php';
?>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/connection.php';

$userID = $_SESSION['userID'];
$queryDoc0 = "SELECT * FROM doc0 WHERE userID = $userID ;";
$resultDoc0 = mysqli_query($conn, $queryDoc0);
$rowDoc0 = mysqli_fetch_assoc($resultDoc0);

$participantname = $rowDoc0['participantname'];
$participantSignature = $rowDoc0['participantSignature'];
$participantDate = $rowDoc0['participantDate'];
$parentSignature = $rowDoc0['parentSignature'];
$parentDate = $rowDoc0['parentDate'];

$formattedParticipantDate = date("d/m/Y", strtotime($participantDate));
$formattedParentDate = date("d/m/Y", strtotime($parentDate));
?>

<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>SAFE DIVING PRACTICES</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/includes/style.css">
    </style>
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

    <p>我, <label class="spaces"> <?php echo $participantname; ?></label>我明白，作为一名潜水员我应该:</p>
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

    <div class="row">
        <div class="col-md-12">
            <form class="mt-3" id="participantSignatureForm">
                <div class="form-group canvas-container">
                    <label>参与者的签名</label>
                    <?php echo '<img class="signature-canvas" src="' . $participantSignature . '" alt="Participant Signature">'; ?>
                    <span>日期: <?php echo $formattedParticipantDate ?></span>
                </div>

            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form class="mt-3" id="parentSignatureForm">
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

</body>

</html>




