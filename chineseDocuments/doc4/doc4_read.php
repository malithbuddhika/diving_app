<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav_chinese.php';
?>


<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
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


    <form method="post">
        <div class="form-group">
            <!-- Question 01 -->
            <table class="table question-table">
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>我的肺、呼吸、心脏和/或血液有问题，影响了我正常的身体或精神表现。</td>
                        <td><input class="form-check-input" type="radio" name="q1" value="yes"><Label>是的</Label></td>
                        <td><input class="form-check-input" type="radio" name="q1" value="no"><Label>没有</Label></td>
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
                            <td><input class="form-check-input" type="radio" name="q1_1" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q1_1" value="no" disabled required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>哮喘，喘息，严重过敏，花粉热或气道阻塞在过去的12个月内限制了我的身体活动/锻炼。</td>
                            <td><input class="form-check-input" type="radio" name="q1_2" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q1_2" value="no" disabled required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>涉及心脏的问题或疾病，如:心绞痛、运动时胸痛、心力衰竭、浸润性肺水肿、心脏病发作或中风，或正在服用任何心脏疾病的药物。</td>
                            <td><input class="form-check-input" type="radio" name="q1_3" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q1_3" value="no" disabled required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>复发性支气管炎和咳嗽在过去12个月内，或已被诊断为肺气肿。</td>
                            <td><input class="form-check-input" type="radio" name="q1_4" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q1_4" value="no" disabled required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>在过去30天内影响肺、呼吸、心脏和/或血液的症状，损害了我的身体或精神表现。</td>
                            <td><input class="form-check-input" type="radio" name="q1_5" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q1_5" value="no" disabled required><Label>没有</Label></td>
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
                        <td><input class="form-check-input" type="radio" name="q2" value="yes"><Label>是的</Label></td>
                        <td><input class="form-check-input" type="radio" name="q2" value="no"><Label>没有</Label></td>
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
                            <td><input class="form-check-input" type="radio" name="q2_1" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q2_1" value="no" disabled required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>我的胆固醇水平很高。</td>
                            <td><input class="form-check-input" type="radio" name="q2_2" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q2_2" value="no" disabled required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>我有高血压。</td>
                            <td><input class="form-check-input" type="radio" name="q2_3" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q2_3" value="no" disabled required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>50岁前有近亲猝死或心脏病、中风，或50岁前有心脏病家族史(包括心律异常、冠心病、心肌病)。</td>
                            <td><input class="form-check-input" type="radio" name="q2_4" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q2_4" value="no" disabled required><Label>没有</Label></td>
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
                        <td><input class="form-check-input" type="radio" name="q3" value="yes"><Label>是的</Label></td>
                        <td><input class="form-check-input" type="radio" name="q3" value="no"><Label>没有</Label></td>
                    </tr>
                </tbody>
            </table>


            <!-- Question 04 -->
            <table class="table question-table">
                <tbody>
                    <tr>
                        <td>4.</td>
                        <td text-align: left;>我的眼睛、耳朵和鼻腔都有问题。</td>
                        <td><input class="form-check-input" type="radio" name="q4" value="yes"><Label>是的</Label></td>
                        <td><input class="form-check-input" type="radio" name="q4" value="no"><Label>没有</Label></td>
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
                            <td><input class="form-check-input" type="radio" name="q4_1" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q4_1" value="no" disabled required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>耳部疾病或耳部手术，听力损失或平衡问题。</td>
                            <td><input class="form-check-input" type="radio" name="q4_2" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q4_2" value="no" disabled required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>过去12个月内有鼻窦炎复发。</td>
                            <td><input class="form-check-input" type="radio" name="q4_3" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q4_3" value="no" disabled required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>过去三个月内做过眼部手术。</td>
                            <td><input class="form-check-input" type="radio" name="q4_4" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q4_4" value="no" disabled required><Label>没有</Label></td>
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
                        <td><input class="form-check-input" type="radio" name="q5" value="yes"><Label>是的</Label></td>
                        <td><input class="form-check-input" type="radio" name="q5" value="no"><Label>没有</Label></td>
                    </tr>
                </tbody>
            </table>

            <!-- Question 06 -->
            <table class="table question-table">
                <tbody>
                    <tr>
                        <td>6.</td>
                        <td text-align: left;>我失去意识，有偏头痛，癫痫发作，中风，严重的头部损伤，或遭受持续的神经损伤或疾病。</td>
                        <td><input class="form-check-input" type="radio" name="q6" value="yes"><Label>是的</Label></td>
                        <td><input class="form-check-input" type="radio" name="q6" value="no"><Label>没有</Label></td>
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
                            <td><input class="form-check-input" type="radio" name="q6_1" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q6_1" value="no" disabled required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>持续性神经损伤或疾病</td>
                            <td><input class="form-check-input" type="radio" name="q6_2" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q6_2" value="no" disabled required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>在过去12个月内反复出现偏头痛，或服用药物预防偏头痛。</td>
                            <td><input class="form-check-input" type="radio" name="q6_3" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q6_3" value="no" disabled required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>过去5年内有过昏厥(完全或部分失去意识)。</td>
                            <td><input class="form-check-input" type="radio" name="q6_4" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q6_4" value="no" disabled required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>癫痫，发作，或抽搐，或服用药物，以防止他们。</td>
                            <td><input class="form-check-input" type="radio" name="q6_5" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q6_5" value="no" disabled required><Label>没有</Label></td>
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
                        <td><input class="form-check-input" type="radio" name="q7" value="yes"><Label>是的</Label></td>
                        <td><input class="form-check-input" type="radio" name="q7" value="no"><Label>没有</Label></td>
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
                            <td><input class="form-check-input" type="radio" name="q7_1" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q7_1" value="no" disabled required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>重度抑郁症，自杀意念，惊恐发作，需要药物/精神治疗的无法控制的双相情感障碍。</td>
                            <td><input class="form-check-input" type="radio" name="q7_2" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q7_2" value="no" disabled required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>被诊断患有精神健康问题或学习/发育障碍，需要持续护理或特殊住宿。</td>
                            <td><input class="form-check-input" type="radio" name="q7_3" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q7_3" value="no" disabled required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>在过去五年内有需要治疗的药物或酒精成瘾者。</td>
                            <td><input class="form-check-input" type="radio" name="q7_4" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q7_4" value="no" disabled required><Label>没有</Label></td>
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
                        <td><input class="form-check-input" type="radio" name="q8" value="yes"><Label>是的</Label></td>
                        <td><input class="form-check-input" type="radio" name="q8" value="no"><Label>没有</Label></td>
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
                            <td><input class="form-check-input" type="radio" name="q8_1" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q8_1" value="no" disabled required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>过去12个月内做过背部或脊柱手术。</td>
                            <td><input class="form-check-input" type="radio" name="q8_2" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q8_2" value="no" disabled required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>糖尿病，药物或饮食控制，或妊娠期糖尿病在过去12个月内。</td>
                            <td><input class="form-check-input" type="radio" name="q8_3" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q8_3" value="no" disabled required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>一个未矫正的疝气限制了我的体能。</td>
                            <td><input class="form-check-input" type="radio" name="q8_4" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q8_4" value="no" disabled required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>活跃或未经治疗的溃疡，问题伤口，或溃疡手术在过去6个月内。</td>
                            <td><input class="form-check-input" type="radio" name="q8_5" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q8_5" value="no" disabled required><Label>没有</Label></td>
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
                        <td><input class="form-check-input" type="radio" name="q9" value="yes"><Label>是的</Label></td>
                        <td><input class="form-check-input" type="radio" name="q9" value="no"><Label>没有</Label></td>
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
                            <td><input class="form-check-input" type="radio" name="q9_1" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q9_1" value="no" disabled required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>过去7天内脱水需要医疗干预。</td>
                            <td><input class="form-check-input" type="radio" name="q9_2" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q9_2" value="no" disabled required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>活跃或未经治疗的胃溃疡或肠道溃疡或溃疡手术在过去6个月内。</td>
                            <td><input class="form-check-input" type="radio" name="q9_3" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q9_3" value="no" disabled required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>经常烧心、反流或胃食管反流病(GERD)。</td>
                            <td><input class="form-check-input" type="radio" name="q9_4" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q9_4" value="no" disabled required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>活动性或未控制的溃疡性结肠炎或克罗恩病。</td>
                            <td><input class="form-check-input" type="radio" name="q9_5" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q9_5" value="no" disabled required><Label>没有</Label></td>
                        </tr>
                        <tr>
                            <td>在过去12个月内做过减肥手术。</td>
                            <td><input class="form-check-input" type="radio" name="q9_6" value="yes" disabled required><Label>是的</Label></td>
                            <td><input class="form-check-input" type="radio" name="q9_6" value="no" disabled required><Label>没有</Label></td>
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
                        <td><input class="form-check-input" type="radio" name="q10" value="yes"><Label>是的</Label></td>
                        <td><input class="form-check-input" type="radio" name="q10" value="no"><Label>没有</Label></td>
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


        <div class="row">
            <div class="col-md-12">
                <span class="info">参与者的名字 : </span> <label class="spaces">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp, </label>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <span class="info">日期: </span> <label class="spaces"> dd/mm/yyyy </label>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <span class="info">生日: </span> <label class="spaces"> dd/mm/yyyy</label>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <span class="info">老师:</span> <label class="spaces"> 老师的名字 </label>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <span class="info">设施名称:</span> <label class="spaces">设备名称 </label>
            </div>
        </div>
    </form>

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
    </script>
    </div>
</body>

</html>