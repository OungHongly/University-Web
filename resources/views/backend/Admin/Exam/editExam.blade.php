<!-- edit Exam form-->
<form class="row g-3">

    <div class="row mb-3">
        <label for="txtScheduleID" class="col-sm-2 col-form-label">Schedule ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="txtScheduleID" id="txtScheduleID">
        </div>
        <!--<div class="col-sm-10">
            <select id="txtScheduleID" class="form-select">
                <option selected>Choose schedule ID...</option>
                <option>...</option>
            </select>
        </div>-->
    </div>

    <div class="row mb-3">
        <label for="paperCode" class="col-sm-2 col-form-label">Paper Code</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="papercode" id="paperCode">
        </div>
    </div>

    <div class="row mb-3">
        <label for="txtSubjectname" class="col-sm-2 col-form-label">Subject Name</label>
        <div class="col-sm-10">
            <select id="txtSubjectname" class="form-select">
                <option selected>Choose subject name...</option>
                <option>...</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label for="txtCoursename" class="col-sm-2 col-form-label">Course Name</label>
        <div class="col-sm-10">
            <select id="txtCoursename" class="form-select">
                <option selected>Choose course name...</option>
                <option>...</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label for="txtDate" class="col-sm-2 col-form-label">Date</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" name="txtDate" id="endtime">
        </div>
    </div>

    <div class="row mb-3">
        <label for="startTime" class="col-sm-2 col-form-label">Start Time</label>
        <div class="col-sm-10">
            <input type="time" class="form-control" name="startTime" id="endtime">
        </div>
    </div>

    <div class="row mb-3">
        <label for="endtime" class="col-sm-2 col-form-label">End Time</label>
        <div class="col-sm-10">
            <input type="time" class="form-control" name="endtime" id="endtime">
        </div>
    </div>


    <div class="row mb-3">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Edit Schedule</button>
            <!--<button type="reset" class="btn btn-secondary">Reset</button>-->
        </div>
    </div>
</form>
<!-- End edit Exam Form -->
