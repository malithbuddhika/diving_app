<div class="row">
    <div class="col-md-12">
        <h5 class="title3"><strong>Diver Medical | </strong> Medical Examiner’s Evaluation Form</h5>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
       <strong> <span class="info">Participant Name : </span> <?php echo '<label class="spaces">' . $participantname . '</label>'; ?></strong>
       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; 
       <strong> <span class="info">Birthday : </span> <?php echo '<label class="spaces">' . $birthday . '</label>'; ?> </strong>
    </div>
</div>

<p>The above-named person requests your opinion of his/her medical suitability to participate in recreational scuba diving or freediving training or activity. Please visit uhms.org for medical guidance on medical conditions as they relate to diving. Review the areas relevant to your patient as part of your evaluation.</p>

<h3>Evaluation Result</h3>

<table class="evaluation-table">
    <tbody>
        <tr>
            <td>
                <input class="form-check-input" type="radio" name="status" value="Approved" required <?php if ($medicalApprovalStatus == 'Approved') echo 'checked'; ?> disabled>
                <label><strong>Approved –</strong> I find no conditions that I consider incompatible with recreational scuba diving or freediving.</label>
            </td>
        </tr>
        <tr>
            <td>
                <input class="form-check-input" type="radio" name="status" value="Not Approved" required <?php if ($medicalApprovalStatus == 'Not Approved') echo 'checked'; ?> disabled>
                <label><strong>Not approved –</strong> I find conditions that I consider incompatible with recreational scuba diving or freediving.</label>
            </td>
        </tr>
    </tbody>
</table>

<div class="row">
    <div class="row mt-2">
        <div class="col-md-12">
            <label class="sign-label">Signature of certified medical doctor or other legally certified medical provider</label>
        </div>
    </div>
</div>

<form class="mt-3" id="medicalExaminerSignatureForm">
    <div class="form-group canvas-container">
        <!-- Set canvas dimensions relative to the screen size -->
        <?php echo '<img class="signature-canvas" src="' . $medicalExaminerSignatureData . '" alt="MedicalExaminerSignature">'; ?>
        <span>Date : <?php echo $formattedMedicalExaminerSignatureDate ?></span>
    </div>
</form>

<div id="alert-container"></div>

<div class="row">
    <div class="row mt-2">
        <div class="col-md-12">
            <label class="examiner-info spaces">Medical Examiner’s Name :</label>
            <label class="spacesAnswer"><?php echo $examinerName; ?></label>
        </div>
    </div>
</div>

<div class="row">
    <div class="row mt-2">
        <div class="col-md-12">
            <label class="examiner-info spaces">Clinical Degrees/Credentials :</label>
            <label class="spacesAnswer"><?php echo $degree; ?></label>
        </div>
    </div>
</div>

<div class="row">
    <div class="row mt-2">
        <div class="col-md-12">
            <label class="examiner-info spaces">Clinic/Hospital :</label>
            <label class="spacesAnswer"> <?php echo $clinic; ?> </label>
        </div>
    </div>
</div>

<div class="row">
    <div class="row mt-2">
        <div class="col-md-12">
            <label class="examiner-info spaces">Address :</label>
            <label class="spacesAnswer"> <?php echo $address; ?> </label>
        </div>
    </div>
</div>

<div class="row">
    <div class="row mt-2">
        <div class="col-md-12">
            <label class="examiner-info spaces">Phone :</label>
            <label class="spacesAnswer"> <?php echo $phone; ?> </label>
        </div>
    </div>
</div>

<div class="row">
    <div class="row mt-2">
        <div class="col-md-12">
            <label class="examiner-info spaces">Email :</label>
            <label class="spacesAnswer"> <?php echo $email; ?> </label>
        </div>
    </div>
</div>