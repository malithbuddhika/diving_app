<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav_submitted_chinese.php';
?>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/connection.php';

$userID = $_SESSION['userID'];

// Define your SQL query with a WHERE clause to filter by the retrieved userID
$query = "SELECT userID, q1, q1_1, q1_2, q1_3, q1_4, q1_5, q2, q2_1, q2_2, q2_3, q2_4, q3, q4, q4_1, q4_2, q4_3, q4_4, q5, q6, q6_1, q6_2, q6_3, q6_4, q6_5, q7, q7_1, q7_2, q7_3, q7_4, q8, q8_1, q8_2, q8_3, q8_4, q8_5, q9, q9_1, q9_2, q9_3, q9_4, q9_5, q9_6, q10, medicalUserID, medicalExaminerSignatureData, medicalExaminerSignatureDate, status FROM doc4 WHERE userID = $userID";

// Execute the query
$result = $conn->query($query);

// Check if the query was successful
if (!$result) {
    die("Error executing the query: " . $conn->error);
}

// Check if there are any rows returned
if ($result->num_rows > 0) {
    // Output data of the row (since there should be only one row with the retrieved userID)
    $row = $result->fetch_assoc();

    // Assuming $row is your fetched row from the database
    $fields = array(
        "q1", "q1_1", "q1_2", "q1_3", "q1_4", "q1_5",
        "q2", "q2_1", "q2_2", "q2_3", "q2_4",
        "q3",
        "q4", "q4_1", "q4_2", "q4_3", "q4_4",
        "q5",
        "q6", "q6_1", "q6_2", "q6_3", "q6_4", "q6_5",
        "q7", "q7_1", "q7_2", "q7_3", "q7_4",
        "q8", "q8_1", "q8_2", "q8_3", "q8_4", "q8_5",
        "q9", "q9_1", "q9_2", "q9_3", "q9_4", "q9_5", "q9_6",
        "q10"
    );

    foreach ($fields as $field) {
        // Check if the field ends with "_1", "_2", "_3", "_4", or "_5"
        if (preg_match('/_(\d+)$/', $field, $matches)) {
            $baseField = str_replace('_' . $matches[1], '', $field);
            // Check the condition and replace accordingly
            $row[$field] = ($row[$field] == 'yes') ? '没有' : '是的';
        } else {
            // For fields not ending with "_1", "_2", "_3", "_4", or "_5"
            // Check the condition and replace accordingly
            $row[$field] = ($row[$field] == 'yes') ? '是的' : '没有';
        }
    }

    // Now $row contains the transformed values based on your conditions
    // You can use $row["q1"], $row["q1_1"], $row["q1_2"], etc., to access the transformed values
    
    $displayBoxA = ($row["q1"] == '是的') ? 'block' : 'none';
    $displayBoxB = ($row["q2"] == '是的') ? 'block' : 'none';
    $displayBoxC = ($row["q4"] == '是的') ? 'block' : 'none';
    $displayBoxD = ($row["q6"] == '是的') ? 'block' : 'none';
    $displayBoxE = ($row["q7"] == '是的') ? 'block' : 'none';
    $displayBoxF = ($row["q8"] == '是的') ? 'block' : 'none';
    $displayBoxG = ($row["q9"] == '是的') ? 'block' : 'none';

    $medicalUserID = $row['medicalUserID'];
    $medicalExaminerSignatureData = $row['medicalExaminerSignatureData'];
    $medicalExaminerSignatureDate = $row['medicalExaminerSignatureDate'];
    $medicalApprovalStatus = $row['status'];
} else {
    echo "No results found for userID = $userID";
}

$formattedMedicalExaminerSignatureDate = date("d/m/Y", strtotime($medicalExaminerSignatureDate));

if ($medicalUserID != 0) {
    // Query to retrieve medical examiner data from medical_examiner
    $queryMedicalExaminer = "SELECT name, degree, clinic, address, phone, email, stamp FROM medical_examiner WHERE id = $medicalUserID;";
    $resultMedicalExaminer = mysqli_query($conn, $queryMedicalExaminer);
    $rowMedicalExaminer = mysqli_fetch_assoc($resultMedicalExaminer);
    $examinerName = $rowMedicalExaminer['name'];
    $degree = $rowMedicalExaminer['degree'];
    $clinic = $rowMedicalExaminer['clinic'];
    $address = $rowMedicalExaminer['address'];
    $phone = $rowMedicalExaminer['phone'];
    $email = $rowMedicalExaminer['email'];
    $stamp = $rowMedicalExaminer['stamp'];
}

$queryDoc0 = "SELECT participantname FROM doc0 WHERE userID = $userID ;";
$resultDoc0 = mysqli_query($conn, $queryDoc0);
$rowDoc0 = mysqli_fetch_assoc($resultDoc0);
$participantname = $rowDoc0['participantname'];


// Query to retrieve participant name, instructor name, and resort name from doc2
$queryDoc2 = "SELECT instructorName, resortName FROM doc2 WHERE userID = $userID ORDER BY id DESC LIMIT 1;";
$resultDoc2 = mysqli_query($conn, $queryDoc2);
$rowDoc2 = mysqli_fetch_assoc($resultDoc2);
$instructor = $rowDoc2['instructorName'];
$resortName = $rowDoc2['resortName'];

// Query to retrieve birthday from user_data
$queryUserData = "SELECT birthday FROM user_data WHERE id = $userID ORDER BY id DESC LIMIT 1;";
$resultUserData = mysqli_query($conn, $queryUserData);
$rowUserData = mysqli_fetch_assoc($resultUserData);
$birthday = $rowUserData['birthday'];

// Query to retrieve participant and parent signature data from doc4
$queryDoc4 = "SELECT participantSignatureData, parentSignatureData, participantDate, parentDate FROM doc4 WHERE userID = $userID ORDER BY id DESC LIMIT 1;";
$resultDoc4 = mysqli_query($conn, $queryDoc4);
$rowDoc4 = mysqli_fetch_assoc($resultDoc4);
$participantSignatureData = $rowDoc4['participantSignatureData'];
$parentSignatureData = $rowDoc4['parentSignatureData'];
$participantDate = $rowDoc4['participantDate'];
$parentDate = $rowDoc4['parentDate'];

$formattedParticipantDate = date("d/m/Y", strtotime($participantDate));
$formattedParentDate = date("d/m/Y", strtotime($parentDate));

?>

<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diver Medical</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/includes/style.css">
</head>

<body class="container">
    <div class="row">
        <div class="col-12 text-center">
            <img class="logo-Doc4" src="logo.png" alt="logo">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2 class="title-Doc4"> <strong>潜水员医疗 |</strong> 参与问卷调查</h2>
        </div>
        <div class="col-md-12">
            <p class="paragraph">休闲潜水和自由潜水需要良好的身心健康。下面列出了一些潜水时可能会有危险的健康状况。那些有这些症状或有这些症状倾向的人，应该由医生进行评估。这份潜水员医疗参与者问卷提供了一个基础来决定你是否应该寻求评估。如果您对自己的潜水健康状况有任何担忧，请在潜水前咨询您的医生。如果你感觉不舒服，避免潜水。如果您认为自己可能患有传染性疾病，请不要参加潜水训练和/或潜水活动，以保护自己和他人。表格中提到的“潜水”包括休闲潜水和自由潜水。此表格主要是为新潜水员设计的初始医疗筛选，但也适用于接受继续教育的潜水员。为了你的安全，以及其他可能和你一起潜水的人的安全，诚实地回答所有问题。</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4 class="title2-Doc4">方向</h4>
            <h5>完成这份问卷是参加休闲潜水或自由潜水课程的先决条件。</h5>
            <span><b>给女性的提示:</b> 如果你怀孕了，或者准备怀孕， <i>不要潜水。</i></span>
        </div>
    </div>

    <!-- Question 01 -->
    <table class="table question-table">
        <tbody>
            <tr>
                <td>1.</td>
                <td>我的肺、呼吸、心脏和/或血液有问题，影响了我正常的身体或精神表现。</td>
                <td><?php echo $row["q1"];  ?></td>
            </tr>
        </tbody>
    </table>

    <!-- Box A -->
    <div id="boxA" style="display: <?php echo $displayBoxA; ?>;"> <!-- Set initial display state based on q1 value -->
        <table class="table">
            <thead class="table-secondary">
                <tr>
                    <th scope="col">栏A -我曾经有过:</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>胸外科手术、心脏外科手术、心脏瓣膜手术、植入式医疗器械(如支架、起搏器、神经刺激器)、气胸和/或慢性肺病。</td>
                    <td><?php echo $row["q1_1"];  ?></td>
                </tr>
                <tr>
                    <td>哮喘，喘息，严重过敏，花粉热或气道阻塞在过去的12个月内限制了我的身体活动/锻炼。</td>
                    <td><?php echo $row["q1_2"];  ?></td>
                </tr>
                <tr>
                    <td>涉及心脏的问题或疾病，如:心绞痛、运动时胸痛、心力衰竭、浸润性肺水肿、心脏病发作或中风，或正在服用任何心脏疾病的药物。</td>
                    <td><?php echo $row["q1_3"];  ?></td>
                </tr>
                <tr>
                    <td>复发性支气管炎和咳嗽在过去12个月内，或已被诊断为肺气肿。</td>
                    <td><?php echo $row["q1_4"];  ?></td>
                </tr>
                <tr>
                    <td>在过去30天内影响肺、呼吸、心脏和/或血液的症状，损害了我的身体或精神表现。</td>
                    <td><?php echo $row["q1_5"];  ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Question 02 -->
    <table class="table question-table">
        <tbody>
            <tr>
                <td>2.</td>
                <td text-align: left;>我已经45岁了。</td>
                <td><?php echo $row["q2"];  ?></td>
            </tr>
        </tbody>
    </table>


    <!-- Box B -->
    <div id="boxB" style="display: <?php echo $displayBoxB; ?>;">
        <table class="table">
            <thead class="table-secondary">
                <tr>
                    <th scope="col">栏B -本人年龄超过45岁，并且:</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>我目前通过其他方式吸烟或吸入尼古丁。</td>
                    <td><?php echo $row["q2_1"];  ?></td>
                </tr>
                <tr>
                    <td>我的胆固醇水平很高。</td>
                    <td><?php echo $row["q2_2"];  ?></td>
                </tr>
                <tr>
                    <td>我有高血压。</td>
                    <td><?php echo $row["q2_3"];  ?></td>
                </tr>
                <tr>
                    <td>50岁前有近亲猝死或心脏病、中风，或50岁前有心脏病家族史(包括心律异常、冠心病、心肌病)。</td>
                    <td><?php echo $row["q2_4"];  ?></td>
                </tr>

            </tbody>
        </table>
    </div>

    <!-- Question 03 -->
    <table class="table question-table">
        <tbody>
            <tr>
                <td>3.</td>
                <td text-align: left;>我很难进行适度的运动(例如，在14分钟内步行1.6公里/ 1英里或不休息地游泳200米/码)，或者我在过去的12个月内由于健身或健康原因无法参加正常的体育活动。</td>
                <td><?php echo $row["q3"];  ?></td>
            </tr>
        </tbody>
    </table>

    <!-- Question 04 -->
    <table class="table question-table">
        <tbody>
            <tr>
                <td>4.</td>
                <td text-align: left;>我的眼睛、耳朵和鼻腔都有问题。</td>
                <td><?php echo $row["q4"];  ?></td>
            </tr>
        </tbody>
    </table>


    <!-- Box C -->
    <div id="boxC" style="display: <?php echo $displayBoxC; ?>;">
        <table class="table">
            <thead class="table-secondary">
                <tr>
                    <th scope="col">栏C -我有/有过:</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>过去六个月内做过鼻窦手术。</td>
                    <td><?php echo $row["q4_1"];  ?></td>
                </tr>
                <tr>
                    <td>耳部疾病或耳部手术，听力损失或平衡问题。</td>
                    <td><?php echo $row["q4_2"];  ?></td>
                </tr>
                <tr>
                    <td>过去12个月内有鼻窦炎复发。</td>
                    <td><?php echo $row["q4_3"];  ?></td>
                </tr>
                <tr>
                    <td>过去三个月内做过眼部手术。</td>
                    <td><?php echo $row["q4_4"];  ?></td>
                </tr>

            </tbody>
        </table>
    </div>

    <!-- Question 05 -->
    <table class="table question-table">
        <tbody>
            <tr>
                <td>5.</td>
                <td text-align: left;>我在过去12个月内做过手术，或者我有与过去手术有关的持续问题。</td>
                <td><?php echo $row["q5"];  ?></td>
            </tr>
        </tbody>
    </table>

    <!-- Question 06 -->
    <table class="table question-table">
        <tbody>
            <tr>
                <td>6.</td>
                <td text-align: left;>我失去意识，有偏头痛，癫痫发作，中风，严重的头部损伤，或遭受持续的神经损伤或疾病。</td>
                <td><?php echo $row["q6"];  ?></td>
            </tr>
        </tbody>
    </table>

    <!-- Box D -->
    <div id="boxD" style="display: <?php echo $displayBoxD; ?>;">
        <table class="table">
            <thead class="table-secondary">
                <tr>
                    <th scope="col">栏D -我曾经有过:</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>在过去五年内头部受伤并失去意识。</td>
                    <td><?php echo $row["q6_1"];  ?></td>
                </tr>
                <tr>
                    <td>持续性神经损伤或疾病</td>
                    <td><?php echo $row["q6_2"];  ?></td>
                </tr>
                <tr>
                    <td>在过去12个月内反复出现偏头痛，或服用药物预防偏头痛。</td>
                    <td><?php echo $row["q6_3"];  ?></td>
                </tr>
                <tr>
                    <td>过去5年内有过昏厥(完全或部分失去意识)。</td>
                    <td><?php echo $row["q6_4"];  ?></td>
                </tr>
                <tr>
                    <td>癫痫，发作，或抽搐，或服用药物，以防止他们。</td>
                    <td><?php echo $row["q6_5"];  ?></td>
                </tr>

            </tbody>
        </table>
    </div>

    <!-- Question 07 -->
    <table class="table question-table">
        <tbody>
            <tr>
                <td>7.</td>
                <td text-align: left;>我目前正在接受心理问题、人格障碍、恐慌发作或药物或酒精成瘾的治疗(或在过去五年内曾要求治疗);或者，我被诊断患有学习或发育障碍。</td>
                <td><?php echo $row["q7"];  ?></td>
            </tr>
        </tbody>
    </table>

    <!-- Box E -->
    <div id="boxE" style="display: <?php echo $displayBoxE; ?>;">
        <table class="table">
            <thead class="table-secondary">
                <tr>
                    <th scope="col">方格E -我曾经有过:</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>需要医疗/精神治疗的行为健康、精神或心理问题。</td>
                    <td><?php echo $row["q7_1"];  ?></td>
                </tr>
                <tr>
                    <td>重度抑郁症，自杀意念，惊恐发作，需要药物/精神治疗的无法控制的双相情感障碍。</td>
                    <td><?php echo $row["q7_2"];  ?></td>
                </tr>
                <tr>
                    <td>被诊断患有精神健康问题或学习/发育障碍，需要持续护理或特殊住宿。</td>
                    <td><?php echo $row["q7_3"];  ?></td>
                </tr>
                <tr>
                    <td>在过去五年内有需要治疗的药物或酒精成瘾者。</td>
                    <td><?php echo $row["q7_4"];  ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Question 08 -->
    <table class="table question-table">
        <tbody>
            <tr>
                <td>8.</td>
                <td text-align: left;>我有过背部问题、疝气、溃疡或糖尿病。</td>
                <td><?php echo $row["q8"];  ?></td>
            </tr>
        </tbody>
    </table>

    <!-- Box F -->
    <div id="boxF" style="display: <?php echo $displayBoxF; ?>;">
        <table class="table">
            <thead class="table-secondary">
                <tr>
                    <th scope="col">方格F -我曾经有过:</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>在过去的6个月里，反复出现的背部问题限制了我的日常活动。</td>
                    <td><?php echo $row["q8_1"];  ?></td>
                </tr>
                <tr>
                    <td>过去12个月内做过背部或脊柱手术。</td>
                    <td><?php echo $row["q8_2"];  ?></td>
                </tr>
                <tr>
                    <td>糖尿病，药物或饮食控制，或妊娠期糖尿病在过去12个月内。</td>
                    <td><?php echo $row["q8_3"];  ?></td>
                </tr>
                <tr>
                    <td>一个未矫正的疝气限制了我的体能。</td>
                    <td><?php echo $row["q8_4"];  ?></td>
                </tr>
                <tr>
                    <td>活跃或未经治疗的溃疡，问题伤口，或溃疡手术在过去6个月内。</td>
                    <td><?php echo $row["q8_5"];  ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Question 09 -->
    <table class="table question-table">
        <tbody>
            <tr>
                <td>9.</td>
                <td text-align: left;>我的肠胃有问题，最近还腹泻。</td>
                <td><?php echo $row["q9"];  ?></td>
            </tr>
        </tbody>
    </table>

    <!-- Box G -->
    <div id="boxG" style="display: <?php echo $displayBoxG; ?>;">
        <table class="table">
            <thead class="table-secondary">
                <tr>
                    <th scope="col">方格G -我吃过:</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>做过造口手术，并且没有游泳或从事体育活动的医疗许可。</td>
                    <td><?php echo $row["q9_1"];  ?></td>
                </tr>
                <tr>
                    <td>过去7天内脱水需要医疗干预。</td>
                    <td><?php echo $row["q9_2"];  ?></td>
                </tr>
                <tr>
                    <td>活跃或未经治疗的胃溃疡或肠道溃疡或溃疡手术在过去6个月内。</td>
                    <td><?php echo $row["q9_3"];  ?></td>
                </tr>
                <tr>
                    <td>经常烧心、反流或胃食管反流病(GERD)。</td>
                    <td><?php echo $row["q9_4"];  ?></td>
                </tr>
                <tr>
                    <td>活动性或未控制的溃疡性结肠炎或克罗恩病。</td>
                    <td><?php echo $row["q9_5"];  ?></td>
                </tr>
                <tr>
                    <td>在过去12个月内做过减肥手术。</td>
                    <td><?php echo $row["q9_6"];  ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Question 10 -->
    <table class="table question-table">
        <tbody>
            <tr>
                <td>10.</td>
                <td text-align: left;>我正在服用除甲氟喹(Lariam)以外的节育或抗疟疾药物以外的处方药。</td>
                <td><?php echo $row["q10"];  ?></td>
            </tr>
        </tbody>
    </table>


    <div class="col-md-12 border border-dark rounded">
        <div class="row">
            <div class="col-md-12">
                <h4 class="title2">参与者的签名</h4>
                <p><strong>如果你回答 没有</strong> 对于以上10个问题，不需要进行医学评估。请阅读并同意以下参与者声明，并在其上签名并注明日期。</p>
                <p><strong>参与者声明:</strong>我诚实地回答了所有问题，并明白我愿意承担因我回答不准确或我没有透露任何现有或过去的健康状况而产生的任何后果。</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <form class="mt-3" id="participantSignatureForm">
                    <div class="form-group canvas-container">
                        <!-- Set canvas dimensions relative to the screen size -->
                        <label class="sign-label">参与者的签名</label>
                        <?php echo '<img class="signature-canvas" src="' . $participantSignatureData . '" alt="Participant Signature">'; ?>
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
                        <?php echo '<img class="signature-canvas" src="' . $parentSignatureData . '" alt="Participant Signature">'; ?>
                        <span>日期: <?php echo $formattedParentDate ?></span>
                    </div>
                </form>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <span class="info">参与者姓名: </span> <?php echo '<label class="spaces">' . $participantname . '</label>'; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <span class="info">生日: </span> <?php echo '<label class="spaces">' . $birthday . '</label>'; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <span class="info">导师姓名:</span> <?php echo '<label class="spaces">' . $instructor . '</label>'; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <span class="info">设施名称:</span> <?php echo '<label class="spaces">' . $resortName . '</label>'; ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-md-12 btn-container">
            <br>

            <?php
            if ($medicalUserID != 0) {
                include('doc4_approved.php');
            }
            ?>
            <button type="button" id="submit-doc1" class="btn btn-primary btn-sm disable" disabled>提交</button>
        </div>
    </div>
    <br>


    <!-- Bootstrap JS and jQuery (for showing/hiding Box A based on user selection) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
    </script>

</body>

</html>

<?Php
// Close the connection
$conn->close();
?>