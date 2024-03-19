<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/connection.php';

// Query to retrieve resort from the database
$participantnameQuery = "SELECT participantname FROM doc0 WHERE userID = $userID ORDER BY id DESC LIMIT 1;";
$participantnameResult = mysqli_query($conn, $participantnameQuery);
$participantnameRow = mysqli_fetch_assoc($participantnameResult);
$participantname = $participantnameRow['participantname'];

// Query to retrieve instructors from the database
$instructorQuery = "SELECT instructorName FROM doc2 WHERE userID = $userID ORDER BY id DESC LIMIT 1;";
$instructorResult = mysqli_query($conn, $instructorQuery);
$instructorRow = mysqli_fetch_assoc($instructorResult);
$instructor = $instructorRow['instructorName'];

// Query to retrieve birthday from the database
$birthdayQuery = "SELECT birthday FROM user_data WHERE id = $userID ORDER BY id DESC LIMIT 1;";
$birthdayResult = mysqli_query($conn, $birthdayQuery);
$birthdayRow = mysqli_fetch_assoc($birthdayResult);
$birthday = $birthdayRow['birthday'];

// Query to retrieve resort from the database
$resortNameQuery = "SELECT resortName FROM doc2 WHERE userID = $userID ORDER BY id DESC LIMIT 1;";
$resortNameResult = mysqli_query($conn, $resortNameQuery);
$resortNameRow = mysqli_fetch_assoc($resortNameResult);
$resortName = $resortNameRow['resortName'];
?>


<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document 4</title>
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


    <form method="post">
        <div class="form-group">
            <!-- Question 01 -->
            <table class="table question-table">
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>我的肺、呼吸、心脏和/或血液有问题，影响了我正常的身体或精神表现。</td>
                        <td><input class="form-check-input" type="radio" name="q1" value="yes" required><Label>是的</Label></td>
                        <td><input class="form-check-input" type="radio" name="q1" value="no" required><Label>没有</Label></td>
                    </tr>
                </tbody>
            </table>

            <!-- Box A -->
            <div id="boxA" style="display: none;">
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
                            <td><input class="form-check-input" type="radio" name="q1_1" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q1_1" value="no" required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>哮喘，喘息，严重过敏，花粉热或气道阻塞在过去的12个月内限制了我的身体活动/锻炼。</td>
                            <td><input class="form-check-input" type="radio" name="q1_2" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q1_2" value="no" required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>涉及心脏的问题或疾病，如:心绞痛、运动时胸痛、心力衰竭、浸润性肺水肿、心脏病发作或中风，或正在服用任何心脏疾病的药物。</td>
                            <td><input class="form-check-input" type="radio" name="q1_3" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q1_3" value="no" required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>复发性支气管炎和咳嗽在过去12个月内，或已被诊断为肺气肿。</td>
                            <td><input class="form-check-input" type="radio" name="q1_4" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q1_4" value="no" required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>在过去30天内影响肺、呼吸、心脏和/或血液的症状，损害了我的身体或精神表现。</td>
                            <td><input class="form-check-input" type="radio" name="q1_5" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q1_5" value="no" required><Label>没有</Label></td>
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
                        <td><input class="form-check-input" type="radio" name="q2" value="yes" required><Label>是的</Label></td>
                        <td><input class="form-check-input" type="radio" name="q2" value="no" required><Label>没有</Label></td>
                    </tr>
                </tbody>
            </table>


            <!-- Box B -->
            <div id="boxB" style="display: none;">
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
                            <td><input class="form-check-input" type="radio" name="q2_1" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q2_1" value="no" required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>我的胆固醇水平很高。</td>
                            <td><input class="form-check-input" type="radio" name="q2_2" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q2_2" value="no" required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>我有高血压。</td>
                            <td><input class="form-check-input" type="radio" name="q2_3" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q2_3" value="no" required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>50岁前有近亲猝死或心脏病、中风，或50岁前有心脏病家族史(包括心律异常、冠心病、心肌病)。</td>
                            <td><input class="form-check-input" type="radio" name="q2_4" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q2_4" value="no" required><Label>没有</Label></td>
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
                        <td><input class="form-check-input" type="radio" name="q3" value="yes" required><Label>是的</Label></td>
                        <td><input class="form-check-input" type="radio" name="q3" value="no" required><Label>没有</Label></td>
                    </tr>
                </tbody>
            </table>


            <!-- Question 04 -->
            <table class="table question-table">
                <tbody>
                    <tr>
                        <td>4.</td>
                        <td text-align: left;>我的眼睛、耳朵和鼻腔都有问题。</td>
                        <td><input class="form-check-input" type="radio" name="q4" value="yes" required><Label>是的</Label></td>
                        <td><input class="form-check-input" type="radio" name="q4" value="no" required><Label>没有</Label></td>
                    </tr>
                </tbody>
            </table>


            <!-- Box C -->
            <div id="boxC" style="display: none;">
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
                            <td><input class="form-check-input" type="radio" name="q4_1" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q4_1" value="no" required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>耳部疾病或耳部手术，听力损失或平衡问题。</td>
                            <td><input class="form-check-input" type="radio" name="q4_2" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q4_2" value="no" required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>过去12个月内有鼻窦炎复发。</td>
                            <td><input class="form-check-input" type="radio" name="q4_3" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q4_3" value="no" required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>过去三个月内做过眼部手术。</td>
                            <td><input class="form-check-input" type="radio" name="q4_4" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q4_4" value="no" required><Label>没有</Label></td>
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
                        <td><input class="form-check-input" type="radio" name="q5" value="yes" required><Label>是的</Label></td>
                        <td><input class="form-check-input" type="radio" name="q5" value="no" required><Label>没有</Label></td>
                    </tr>
                </tbody>
            </table>

            <!-- Question 06 -->
            <table class="table question-table">
                <tbody>
                    <tr>
                        <td>6.</td>
                        <td text-align: left;>我失去意识，有偏头痛，癫痫发作，中风，严重的头部损伤，或遭受持续的神经损伤或疾病。</td>
                        <td><input class="form-check-input" type="radio" name="q6" value="yes" required><Label>是的</Label></td>
                        <td><input class="form-check-input" type="radio" name="q6" value="no" required><Label>没有</Label></td>
                    </tr>
                </tbody>
            </table>

            <!-- Box D -->
            <div id="boxD" style="display: none;">
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
                            <td><input class="form-check-input" type="radio" name="q6_1" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q6_1" value="no" required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>持续性神经损伤或疾病</td>
                            <td><input class="form-check-input" type="radio" name="q6_2" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q6_2" value="no" required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>在过去12个月内反复出现偏头痛，或服用药物预防偏头痛。</td>
                            <td><input class="form-check-input" type="radio" name="q6_3" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q6_3" value="no" required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>过去5年内有过昏厥(完全或部分失去意识)。</td>
                            <td><input class="form-check-input" type="radio" name="q6_4" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q6_4" value="no" required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>癫痫，发作，或抽搐，或服用药物，以防止他们。</td>
                            <td><input class="form-check-input" type="radio" name="q6_5" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q6_5" value="no" required><Label>没有</Label></td>
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
                        <td><input class="form-check-input" type="radio" name="q7" value="yes" required><Label>是的</Label></td>
                        <td><input class="form-check-input" type="radio" name="q7" value="no" required><Label>没有</Label></td>
                    </tr>
                </tbody>
            </table>

            <!-- Box E -->
            <div id="boxE" style="display: none;">
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
                            <td><input class="form-check-input" type="radio" name="q7_1" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q7_1" value="no" required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>重度抑郁症，自杀意念，惊恐发作，需要药物/精神治疗的无法控制的双相情感障碍。</td>
                            <td><input class="form-check-input" type="radio" name="q7_2" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q7_2" value="no" required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>被诊断患有精神健康问题或学习/发育障碍，需要持续护理或特殊住宿。</td>
                            <td><input class="form-check-input" type="radio" name="q7_3" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q7_3" value="no" required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>在过去五年内有需要治疗的药物或酒精成瘾者。</td>
                            <td><input class="form-check-input" type="radio" name="q7_4" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q7_4" value="no" required><Label>没有</Label></td>
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
                        <td><input class="form-check-input" type="radio" name="q8" value="yes" required><Label>是的</Label></td>
                        <td><input class="form-check-input" type="radio" name="q8" value="no" required><Label>没有</Label></td>
                    </tr>
                </tbody>
            </table>

            <!-- Box F -->
            <div id="boxF" style="display: none;">
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
                            <td><input class="form-check-input" type="radio" name="q8_1" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q8_1" value="no" required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>过去12个月内做过背部或脊柱手术。</td>
                            <td><input class="form-check-input" type="radio" name="q8_2" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q8_2" value="no" required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>糖尿病，药物或饮食控制，或妊娠期糖尿病在过去12个月内。</td>
                            <td><input class="form-check-input" type="radio" name="q8_3" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q8_3" value="no" required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>一个未矫正的疝气限制了我的体能。</td>
                            <td><input class="form-check-input" type="radio" name="q8_4" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q8_4" value="no" required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>活跃或未经治疗的溃疡，问题伤口，或溃疡手术在过去6个月内。</td>
                            <td><input class="form-check-input" type="radio" name="q8_5" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q8_5" value="no" required><Label>没有</Label></td>
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
                        <td><input class="form-check-input" type="radio" name="q9" value="yes" required><Label>是的</Label></td>
                        <td><input class="form-check-input" type="radio" name="q9" value="no" required><Label>没有</Label></td>
                    </tr>
                </tbody>
            </table>

            <!-- Box G -->
            <div id="boxG" style="display: none;">
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
                            <td><input class="form-check-input" type="radio" name="q9_1" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q9_1" value="no" required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>过去7天内脱水需要医疗干预。</td>
                            <td><input class="form-check-input" type="radio" name="q9_2" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q9_2" value="no" required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>活跃或未经治疗的胃溃疡或肠道溃疡或溃疡手术在过去6个月内。</td>
                            <td><input class="form-check-input" type="radio" name="q9_3" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q9_3" value="no" required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>经常烧心、反流或胃食管反流病(GERD)。</td>
                            <td><input class="form-check-input" type="radio" name="q9_4" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q9_4" value="no" required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>活动性或未控制的溃疡性结肠炎或克罗恩病。</td>
                            <td><input class="form-check-input" type="radio" name="q9_5" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q9_5" value="no" required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>在过去12个月内做过减肥手术。</td>
                            <td><input class="form-check-input" type="radio" name="q9_6" value="yes" required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q9_6" value="no" required><Label>没有</Label></td>
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
                        <td><input class="form-check-input" type="radio" name="q10" value="yes" required><Label>是的</Label></td>
                        <td><input class="form-check-input" type="radio" name="q10" value="no" required><Label>没有</Label></td>
                    </tr>
                </tbody>
            </table>

            <div class="row">
                <div class="col-md-12">
                    <h4 class="title2">参与者的签名</h4>
                    <p><strong>如果你回答 没有</strong> 对于以上10个问题，不需要进行医学评估。请阅读并同意以下参与者声明，并在其上签名并注明日期。</p>
                    <p><strong>参与者声明:</strong>我诚实地回答了所有问题，并明白我愿意承担因我回答不准确或我没有透露任何现有或过去的健康状况而产生的任何后果。</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <form class="mt-3" id="participantSignatureForm">
                    <div class="form-group canvas-container">
                        <!-- Set canvas dimensions relative to the screen size -->
                        <label>参与者的签名</label>
                        <canvas id="participantSignatureCanvas" class="signature-canvas" width="350%" height="400%"></canvas>
                        <button type="button" class="btn btn-secondary clearbutton" onclick="clearSignature()"><span class="bi bi-x-lg"></span></button>
                    </div>

                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <form class="mt-3" id="parentSignatureForm">
                    <div class="form-group canvas-container">
                        <!-- Set canvas dimensions relative to the screen size -->
                        <label>家长或监护人签署(如适用)</label>
                        <canvas id="parentSignatureCanvas" class="signature-canvas" width="350%" height="400%"></canvas>
                        <button type="button" class="btn btn-secondary clearbutton" onclick="clearParentSignature()"><span class="bi bi-x-lg"></span></button>
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



        <div id="alert-container"></div>
        <div class="row">
            <div class="col-md-12 btn-container">

                <button type="button" id="submit-doc4" class="btn btn-primary btn-sm" onclick="handleFormSubmission()">提交</button>

            </div>
        </div>




    </form>



    <!-- Bootstrap JS and jQuery (for showing/hiding Box A based on user selection) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('input[type=radio][name=q1]').change(function() {
                if (this.value == 'yes') {
                    $('#boxA').show();
                    $('#boxA input').prop('required', true); // Make Box A questions required
                } else if (this.value == 'no') {
                    $('#boxA').hide();
                    $('#boxA input').prop('required', false); // Remove required attribute from Box A questions
                    $('#boxA input[type="radio"]').prop('checked', false); // Uncheck all radio buttons in Box A
                }
            });
        });

        $(document).ready(function() {
            $('input[type=radio][name=q2]').change(function() {
                if (this.value == 'yes') {
                    $('#boxB').show();
                    $('#boxB input').prop('required', true); // Make Box B questions required
                } else if (this.value == 'no') {
                    $('#boxB').hide();
                    $('#boxB input').prop('required', false); // Remove required attribute from Box B questions
                    $('#boxB input[type="radio"]').prop('checked', false); // Uncheck all radio buttons in Box B
                }
            });
        });

        $(document).ready(function() {
            $('input[type=radio][name=q4]').change(function() {
                if (this.value == 'yes') {
                    $('#boxC').show();
                    $('#boxC input').prop('required', true); // Make Box C questions required
                } else if (this.value == 'no') {
                    $('#boxC').hide();
                    $('#boxC input').prop('required', false); // Remove required attribute from Box C questions
                    $('#boxC input[type="radio"]').prop('checked', false); // Uncheck all radio buttons in Box C
                }
            });
        });

        $(document).ready(function() {
            $('input[type=radio][name=q6]').change(function() {
                if (this.value == 'yes') {
                    $('#boxD').show();
                    $('#boxD input').prop('required', true); // Make Box D questions required
                } else if (this.value == 'no') {
                    $('#boxD').hide();
                    $('#boxD input').prop('required', false); // Remove required attribute from Box D questions
                    $('#boxD input[type="radio"]').prop('checked', false); // Uncheck all radio buttons in Box D
                }
            });
        });

        $(document).ready(function() {
            $('input[type=radio][name=q7]').change(function() {
                if (this.value == 'yes') {
                    $('#boxE').show();
                    $('#boxE input').prop('required', true); // Make Box E questions required
                } else if (this.value == 'no') {
                    $('#boxE').hide();
                    $('#boxE input').prop('required', false); // Remove required attribute from Box E questions
                    $('#boxE input[type="radio"]').prop('checked', false); // Uncheck all radio buttons in Box E
                }
            });
        });

        $(document).ready(function() {
            $('input[type=radio][name=q8]').change(function() {
                if (this.value == 'yes') {
                    $('#boxF').show();
                    $('#boxF input').prop('required', true); // Make Box F questions required
                } else if (this.value == 'no') {
                    $('#boxF').hide();
                    $('#boxF input').prop('required', false); // Remove required attribute from Box F questions
                    $('#boxF input[type="radio"]').prop('checked', false); // Uncheck all radio buttons in Box F
                }
            });
        });

        $(document).ready(function() {
            $('input[type=radio][name=q9]').change(function() {
                if (this.value == 'yes') {
                    $('#boxG').show();
                    $('#boxG input').prop('required', true); // Make Box G questions required
                } else if (this.value == 'no') {
                    $('#boxG').hide();
                    $('#boxG input').prop('required', false); // Remove required attribute from Box G questions
                    $('#boxG input[type="radio"]').prop('checked', false); // Uncheck all radio buttons in Box G
                }
            });
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

            // Question 01

            let q1Value = document.querySelector('input[name="q1"]:checked');
            if (q1Value === null) {
                showAlert('danger', '请回答问题01。');
                return;
            }
            if (q1Value.value === 'yes') {
                let q1_1Value = document.querySelector('input[name="q1_1"]:checked');
                let q1_2Value = document.querySelector('input[name="q1_2"]:checked');
                let q1_3Value = document.querySelector('input[name="q1_3"]:checked');
                let q1_4Value = document.querySelector('input[name="q1_4"]:checked');
                let q1_5Value = document.querySelector('input[name="q1_5"]:checked');

                if (!q1_1Value || !q1_2Value || !q1_3Value || !q1_4Value || !q1_5Value) {
                    showAlert('danger', ' 你必须回答A框中的所有问题');
                    return;
                }
            } else {
                // If q1 answer is "no", ignore Box A answers
            }

            // Question 02

            let q2Value = document.querySelector('input[name="q2"]:checked');
            if (q2Value === null) {
                showAlert('danger', '请回答问题02。');
                return;
            }

            if (q2Value.value === 'yes') {
                let q2_1Value = document.querySelector('input[name="q2_1"]:checked');
                let q2_2Value = document.querySelector('input[name="q2_2"]:checked');
                let q2_3Value = document.querySelector('input[name="q2_3"]:checked');
                let q2_4Value = document.querySelector('input[name="q2_4"]:checked');


                if (!q2_1Value || !q2_2Value || !q2_3Value || !q2_4Value) {
                    showAlert('danger', '你必须回答B栏中的所有问题');
                    return;
                }
            } else {
                // If q2 answer is "no", ignore Box B answers
            }

            // Question 03

            let q3Value = document.querySelector('input[name="q3"]:checked');
            if (q3Value === null) {
                showAlert('danger', '请回答问题03。');
                return;
            }

            // Question 04

            let q4Value = document.querySelector('input[name="q4"]:checked');
            if (q4Value === null) {
                showAlert('danger', '请回答问题04。');
                return;
            }
            if (q4Value.value === 'yes') {
                let q4_1Value = document.querySelector('input[name="q4_1"]:checked');
                let q4_2Value = document.querySelector('input[name="q4_2"]:checked');
                let q4_3Value = document.querySelector('input[name="q4_3"]:checked');
                let q4_4Value = document.querySelector('input[name="q4_4"]:checked');


                if (!q4_1Value || !q4_2Value || !q4_3Value || !q4_4Value) {
                    showAlert('danger', ' 你必须回答C框中的所有问题');
                    return;
                }
            } else {
                // If q4 answer is "no", ignore Box C answers
            }

            // Question 05

            let q5Value = document.querySelector('input[name="q5"]:checked');
            if (q5Value === null) {
                showAlert('danger', '请回答问题05。');
                return;
            }

            // Question 06
            let q6Value = document.querySelector('input[name="q6"]:checked');
            if (q6Value === null) {
                showAlert('danger', '请回答问题06。');
                return;
            }

            if (q6Value.value === 'yes') {
                let q6_1Value = document.querySelector('input[name="q6_1"]:checked');
                let q6_2Value = document.querySelector('input[name="q6_2"]:checked');
                let q6_3Value = document.querySelector('input[name="q6_3"]:checked');
                let q6_4Value = document.querySelector('input[name="q6_4"]:checked');
                let q6_5Value = document.querySelector('input[name="q6_5"]:checked');

                if (!q6_1Value || !q6_2Value || !q6_3Value || !q6_4Value || !q6_5Value) {
                    showAlert('danger', ' 你必须回答D栏中的所有问题');
                    return;
                }
            } else {
                // If q6 answer is "no", ignore Box D answers
            }

            let q7Value = document.querySelector('input[name="q7"]:checked');
            if (q7Value === null) {
                showAlert('danger', 'Please answer Question 07.');
                return;
            }
            if (q7Value.value === 'yes') {
                let q7_1Value = document.querySelector('input[name="q7_1"]:checked');
                let q7_2Value = document.querySelector('input[name="q7_2"]:checked');
                let q7_3Value = document.querySelector('input[name="q7_3"]:checked');
                let q7_4Value = document.querySelector('input[name="q7_4"]:checked');


                if (!q7_1Value || !q7_2Value || !q7_3Value || !q7_4Value) {
                    showAlert('danger', ' 你必须回答E栏中的所有问题');
                    return;
                }
            } else {
                // If q7 answer is "no", ignore Box E answers
            }


            let q8Value = document.querySelector('input[name="q8"]:checked');
            if (q8Value === null) {
                showAlert('danger', '请回答问题08。');
                return;
            }

            if (q8Value.value === 'yes') {
                let q8_1Value = document.querySelector('input[name="q8_1"]:checked');
                let q8_2Value = document.querySelector('input[name="q8_2"]:checked');
                let q8_3Value = document.querySelector('input[name="q8_3"]:checked');
                let q8_4Value = document.querySelector('input[name="q8_4"]:checked');
                let q8_5Value = document.querySelector('input[name="q8_5"]:checked');

                if (!q8_1Value || !q8_2Value || !q8_3Value || !q8_4Value || !q8_5Value) {
                    showAlert('danger', '你必须回答F栏中的所有问题');
                    return;
                }
            } else {
                // If q8 answer is "no", ignore Box F answers
            }


            let q9Value = document.querySelector('input[name="q9"]:checked');
            if (q9Value === null) {
                showAlert('danger', '请回答问题09。');
                return;
            }
            if (q9Value.value === 'yes') {
                let q9_1Value = document.querySelector('input[name="q9_1"]:checked');
                let q9_2Value = document.querySelector('input[name="q9_2"]:checked');
                let q9_3Value = document.querySelector('input[name="q9_3"]:checked');
                let q9_4Value = document.querySelector('input[name="q9_4"]:checked');
                let q9_5Value = document.querySelector('input[name="q9_5"]:checked');
                let q9_6Value = document.querySelector('input[name="q9_6"]:checked');

                if (!q9_1Value || !q9_2Value || !q9_3Value || !q9_4Value || !q9_5Value || !q9_6Value) {
                    showAlert('danger', ' 你必须回答G栏中的所有问题');
                    return;
                }
            } else {
                // If q9 answer is "no", ignore Box G answers
            }


            let q10Value = document.querySelector('input[name="q10"]:checked');
            if (q10Value === null) {
                showAlert('danger', '请回答问题10。');
                return;
            }

            // Capture current date for participant and parent signatures
            let participantDate = new Date().toISOString();
            let parentDate = new Date().toISOString();

            // Capture the final point before form submission
            let participantSignatureData = participantCanvas.toDataURL();
            drawFinalPoint(); // Capture the final point for participant signature
            let parentSignatureData = parentCanvas.toDataURL();
            drawParentFinalPoint(); // Capture the final point for parent signature

            let formData = new FormData();

            // Retrieve and append the value of the selected radio button for each question
            appendRadioValue(formData, 'q1');
            appendRadioValue(formData, 'q1_1');
            appendRadioValue(formData, 'q1_2');
            appendRadioValue(formData, 'q1_3');
            appendRadioValue(formData, 'q1_4');
            appendRadioValue(formData, 'q1_5');

            appendRadioValue(formData, 'q2');
            appendRadioValue(formData, 'q2_1');
            appendRadioValue(formData, 'q2_2');
            appendRadioValue(formData, 'q2_3');
            appendRadioValue(formData, 'q2_4');

            appendRadioValue(formData, 'q3');

            appendRadioValue(formData, 'q4');
            appendRadioValue(formData, 'q4_1');
            appendRadioValue(formData, 'q4_2');
            appendRadioValue(formData, 'q4_3');
            appendRadioValue(formData, 'q4_4');

            appendRadioValue(formData, 'q5');

            appendRadioValue(formData, 'q6');
            appendRadioValue(formData, 'q6_1');
            appendRadioValue(formData, 'q6_2');
            appendRadioValue(formData, 'q6_3');
            appendRadioValue(formData, 'q6_4');
            appendRadioValue(formData, 'q6_5');

            appendRadioValue(formData, 'q7');
            appendRadioValue(formData, 'q7_1');
            appendRadioValue(formData, 'q7_2');
            appendRadioValue(formData, 'q7_3');
            appendRadioValue(formData, 'q7_4');

            appendRadioValue(formData, 'q8');
            appendRadioValue(formData, 'q8_1');
            appendRadioValue(formData, 'q8_2');
            appendRadioValue(formData, 'q8_3');
            appendRadioValue(formData, 'q8_4');
            appendRadioValue(formData, 'q8_5');

            appendRadioValue(formData, 'q9');
            appendRadioValue(formData, 'q9_1');
            appendRadioValue(formData, 'q9_2');
            appendRadioValue(formData, 'q9_3');
            appendRadioValue(formData, 'q9_4');
            appendRadioValue(formData, 'q9_5');
            appendRadioValue(formData, 'q9_6');

            appendRadioValue(formData, 'q10');



            formData.append('participantSignatureData', participantSignatureData);
            formData.append('participantDate', participantDate);
            formData.append('parentSignatureData', parentSignatureData);
            formData.append('parentDate', parentDate);

            // Send the formData to the server using AJAX
            sendToServer(formData);
        }

        function appendRadioValue(formData, name) {
            let element = document.querySelector(`input[name="${name}"]:checked`);
            if (element) {
                formData.append(name, element.value);
            } else {
                formData.append(name, null); // Or whatever default value you want to use for unanswered questions
            }
        }

        function sendToServer(formData) {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'doc4_save_data.php', true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        // Display success message using Bootstrap alert
                        showAlert('success', '提交成功');
                        // Redirect to doc4_view.php
                        window.location.href = '/chineseDocuments/doc4/doc4_view.php';

                    } else {
                        // Display error message using Bootstrap alert
                        showAlert('danger', '错误提交');
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
            }, 5000);


        }
    </script>

    </div>
</body>

</html>