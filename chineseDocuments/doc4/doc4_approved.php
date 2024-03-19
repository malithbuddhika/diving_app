<div class="row">
    <div class="col-md-12">
        <h5 class="title3"><strong>潜水员医疗 | </strong> 法医鉴定表</h5>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
       <strong> <span class="info">参与者姓名: </span> <?php echo '<label class="spaces">' . $participantname . '</label>'; ?></strong>
       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; 
       <strong> <span class="info">生日: </span> <?php echo '<label class="spaces">' . $birthday . '</label>'; ?> </strong>
    </div>
</div>

<p>上述人士要求您就他/她是否适合参加娱乐性的水肺潜水或自由潜水训练或活动提供医疗意见。请访问uhms.org获取与潜水有关的医疗条件的医疗指导。作为评估的一部分，回顾与你的病人相关的领域。</p>

<h3>评价结果</h3>

<table class="evaluation-table">
    <tbody>
        <tr>
            <td>
                <input class="form-check-input" type="radio" name="status" value="Approved" required <?php if ($medicalApprovalStatus == 'Approved') echo 'checked'; ?> disabled>
                <label><strong>批准 –</strong> 我没有发现任何我认为与休闲潜水或自由潜水不相容的条件。</label>
            </td>
        </tr>
        <tr>
            <td>
                <input class="form-check-input" type="radio" name="status" value="Not Approved" required <?php if ($medicalApprovalStatus == 'Not Approved') echo 'checked'; ?> disabled>
                <label><strong>不批准 –</strong> 我发现了一些我认为与休闲潜水或自由潜水不相容的条件。</label>
            </td>
        </tr>
    </tbody>
</table>

<form class="mt-3" id="medicalExaminerSignatureForm">
    <div class="form-group canvas-container">
        <!-- Set canvas dimensions relative to the screen size -->
        <label class="sign-label">经认证的医生或其他经法律认证的医疗服务提供者签字</label>
        <?php echo '<img class="signature-canvas" src="' . $medicalExaminerSignatureData . '" alt="MedicalExaminerSignature">'; ?>
        <span>日期: <?php echo $formattedMedicalExaminerSignatureDate ?></span>
    </div>
</form>

<div id="alert-container"></div>

<div class="row">
    <div class="row mt-2">
        <div class="col-md-12">
            <label class="examiner-info spaces">法医姓名:</label>
            <label class="spacesAnswer"><?php echo $examinerName; ?></label>
        </div>
    </div>
</div>

<div class="row">
    <div class="row mt-2">
        <div class="col-md-12">
            <label class="examiner-info spaces">临床学位/证书:</label>
            <label class="spacesAnswer"><?php echo $degree; ?></label>
        </div>
    </div>
</div>

<div class="row">
    <div class="row mt-2">
        <div class="col-md-12">
            <label class="examiner-info spaces">诊所/医院:</label>
            <label class="spacesAnswer"> <?php echo $clinic; ?> </label>
        </div>
    </div>
</div>

<div class="row">
    <div class="row mt-2">
        <div class="col-md-12">
            <label class="examiner-info spaces">地址:</label>
            <label class="spacesAnswer"> <?php echo $address; ?> </label>
        </div>
    </div>
</div>

<div class="row">
    <div class="row mt-2">
        <div class="col-md-12">
            <label class="examiner-info spaces">电话:</label>
            <label class="spacesAnswer"> <?php echo $phone; ?> </label>
        </div>
    </div>
</div>

<div class="row">
    <div class="row mt-2">
        <div class="col-md-12">
            <label class="examiner-info spaces">电子邮件:</label>
            <label class="spacesAnswer"> <?php echo $email; ?> </label>
        </div>
    </div>
</div>