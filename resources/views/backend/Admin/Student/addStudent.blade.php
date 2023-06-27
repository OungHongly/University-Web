<!-- Add Student Form -->
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
        <legend class="col-form-label col-sm-2 pt-0">Course</legend>
        <div class="col-sm-10">

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="mis" checked>
                <label class="form-check-label" for="mis">
                    MIS
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="bit">
                <label class="form-check-label" for="bit">
                    BIT
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="design">
                <label class="form-check-label" for="design">
                    Design
                </label>
            </div>

        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="group">Group</label>
        <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example" id="group">
                <option selected>Open this select group</option>
                <option value="ss67">SS67</option>
                <option value="ss89">SS89</option>
                <option value="ss10">SS10</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="promotion">Promotion</label>
        <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example" id="promotion">
                <option selected>Open this select promotion</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="year">Year</label>
        <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example" id="year">
                <option selected>Open this select year</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="semester">Semester</label>
        <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example" id="semester">
                <option selected>Open this select semester</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="timing">Timing</label>
        <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example" id="timing">
                <option selected>Open this select timing</option>
                <option value="morning">Morning</option>
                <option value="afternoon">Afternoon</option>
                <option value="evening">Evening</option>
            </select>
        </div>
    </div>

    <!--<div class="row mb-3">
        <label class="col-sm-2 col-form-label">Multi Select</label>
        <div class="col-sm-10">
            <select class="form-select" multiple aria-label="multiple select example">
                <option selected)>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </div>-->

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Add Student</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </div>

</form><!-- End Add Student Form -->
