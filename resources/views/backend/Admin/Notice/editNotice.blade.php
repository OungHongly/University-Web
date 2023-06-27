<!-- edit Notice form-->
<form class="row g-3">

    <div class="row mb-3">
        <label for="txtNoticeID" class="col-sm-2 col-form-label">Notice ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="txtNoticeID">
        </div>
        <!--<div class="col-sm-10">
            <select id="txtNoticeID" class="form-select">
                <option selected>Choose notice ID...</option>
                <option>...</option>
            </select>
        </div>-->
    </div>

    <div class="row mb-3">
        <label for="txtDate" class="col-sm-2 col-form-label">Date</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="txtDate">
        </div>
    </div>

    <div class="row mb-3">
        <label for="txtEvent" class="col-sm-2 col-form-label">Upcoming Event</label>
        <div class="col-sm-10">
            <textarea class="form-control" style="height: 100px" id="txtEvent"></textarea>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Edit Notice</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </div>
</form>
<!-- End edit Notice Form -->
