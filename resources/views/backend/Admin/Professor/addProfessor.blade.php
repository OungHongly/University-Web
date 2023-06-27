<!-- Add Professor Form -->
<form>
    <div class="row mb-3">
        <label for="inputfirstname" class="col-sm-2 col-form-label">Firstname</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputfirstname">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputlastname" class="col-sm-2 col-form-label">Lastname</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputlastname">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputusername" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputusername">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control">
        </div>
    </div>
    <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="rdFemale" id="rdFemale" value="female" checked>
                <label class="form-check-label" for="rdFemale">
                    Female
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="rdMale" id="rdMale" value="male">
                <label class="form-check-label" for="rdMale">
                    Male
                </label>
            </div>
        </div>
    </fieldset>

    <div class="row mb-3">
        <label for="inputdob" class="col-sm-2 col-form-label">Date of Birth</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="inputdob">
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputPhoneNumber" class="col-sm-2 col-form-label">Phone Number</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="inputPhoneNumber">
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control">
        </div>
    </div>

    <div class="row mb-3">
        <label for="uploadPhoto" class="col-sm-2 col-form-label">Upload Photo</label>
        <div class="col-sm-10">
            <input class="form-control" type="file" id="uploadPhoto">
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Select Multi Course</label>
        <div class="col-sm-10">
            <select class="form-select" multiple aria-label="multiple select example">
                <!--<option readonly>Open this select menu</option>-->
                <option value="python">Python</option>
                <option value="c#">C#</option>
                <option value="laravel">Laravel</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Add Professor</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </div>

</form><!-- End Add Professor Form -->
