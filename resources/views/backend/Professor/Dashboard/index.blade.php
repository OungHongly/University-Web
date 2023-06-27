@extends('backend.layouts.mainTeacher')
@section('title', 'Dashboard')
@section('main-container')
<main id="main" class="main">
<section class="section">
      <div class="row">
        <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Today's Lecture</h5>
              <!-- Active Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Room</th>
                    <th scope="col">Time</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Meas Manou</td>
                    <td>SA I</td>
                    <td>3A</td>
                    <td>8:45 AM</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Meas Manou</td>
                    <td>SA I</td>
                    <td>3A</td>
                    <td>8:45 AM</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Meas Manou</td>
                    <td>SA I</td>
                    <td>3A</td>
                    <td>8:45 AM</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <<td>Meas Manou</td>
                    <td>SA I</td>
                    <td>3A</td>
                    <td>8:45 AM</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Meas Manou</td>
                    <td>SA I</td>
                    <td>3A</td>
                    <td>8:45 AM</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Active Table -->

            </div>
          </div>
</div>
<div class="col-lg-6">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Today Student Attendance</h5>
              <
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Time</th>
                    <th scope="col">Come</th>
                    <th scope="col">Absent</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Java I</td>
                    <td>8:45AM</td>
                    <td>28</td>
                    <td>5</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Java I</td>
                    <td>8:45AM</td>
                    <td>28</td>
                    <td>5</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Java I</td>
                    <td>8:45AM</td>
                    <td>28</td>
                    <td>5</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Java I</td>
                    <td>8:45AM</td>
                    <td>28</td>
                    <td>5</td>
                  </tr>
                  <tr>
                  <th scope="row">5</th>
                  <td>Java I</td>
                    <td>8:45AM</td>
                    <td>28</td>
                    <td>5</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Active Table -->

            </div>
          </div>
</div>
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Lecture Attendance</h5>
              <!-- Active Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Position</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Reasion</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>C++ I</td>
                    <td>2016-05-25</td>
                    <td>10:15AM</td>
                    <td>Sick</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>CA I</td>
                    <td>2016-05-25</td>
                    <td>10:15AM</td>
                    <td>Sick</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>C++ I</td>
                    <td>2016-05-25</td>
                    <td>10:15AM</td>
                    <td>Sick</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>JAVA I</td>
                    <td>2016-05-25</td>
                    <td>10:15AM</td>
                    <td>Sick</td>
                  </tr>
    
                </tbody>
              </table>
              <!-- End Active Table -->

            </div>
          </div>

    </div>
</section>
</main>
@endsection
