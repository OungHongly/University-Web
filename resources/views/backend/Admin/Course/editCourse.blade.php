<form class="row g-3">
    <div class="col-md-12">
        <label for="inputCourseName" class="form-label">Course Name</label>
        <input type="text" class="form-control" id="inputCourseName">
    </div>
    <div class="col-md-6">
        <label for="inputDuration" class="form-label">Duration</label>
        <input type="text" class="form-control" id="inputDuration">
    </div>
    <div class="col-md-6">
        <label for="inputPrice" class="form-label">Price</label>
        <input type="text" class="form-control" id="inputPrice">
    </div>
    <div class="col mb-12">
        <label class="col-sm-2 col-form-label">Select Multi Course</label>
        <div class="col-sm-12">
            <select class="form-select" multiple aria-label="multiple select example">
                <!--<option readonly>Open this select menu</option>-->
                <option value="python">Python</option>
                <option value="c#">C#</option>
                <option value="laravel">Laravel</option>
            </select>
        </div>
    </div>
    <!--<fieldset>Subject
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="python">
            <label class="form-check-label" for="python">
                python
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="c#">
            <label class="form-check-label" for="c#">
                C#
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="laravel">
            <label class="form-check-label" for="laravel">
                Laravel
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="oracle">
            <label class="form-check-label" for="oracle">
                Oracle
            </label>
        </div>
    </fieldset>-->

    <div class="text-center">
        <button type="submit" class="btn btn-primary">Edit Course</button>
        <!--<button type="reset" class="btn btn-secondary">Reset</button>-->
    </div>
</form><!-- End edit course Form -->
