@extends('backend.layouts.mainTeacher')
@section('title', 'Exam')
@section('main-container')
<main id="main" class="main">

<div class="card">
            <div class="card-body">
              <h5 class="card-title">Schedule Exam</h5>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Class</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Time</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">3A</th>
                    <td>C#</td>
                    <td>8:45AM-10:15AM</td>
                  </tr>

                  <tr class="table-primary">
                  <th scope="row">3A</th>
                    <td>C#</td>
                    <td>8:45AM-10:15AM</td>
                  </tr>
                  <tr class="table-secondary">
                  <th scope="row">3A</th>
                    <td>C#</td>
                    <td>8:45AM-10:15AM</td>
                  </tr>
                  <tr class="table-success">
                  <th scope="row">3A</th>
                    <td>C#</td>
                    <td>8:45AM-10:15AM</td>
                  </tr>
                  <tr class="table-danger">
                  <th scope="row">3A</th>
                    <td>C#</td>
                    <td>8:45AM-10:15AM</td>
                  </tr>
                  <tr class="table-warning">
                  <th scope="row">3A</th>
                    <td>C#</td>
                    <td>8:45AM-10:15AM</td>
                  </tr>
                  <tr class="table-info">
                  <th scope="row">3A</th>
                    <td>C#</td>
                    <td>8:45AM-10:15AM</td>
                  </tr>
                  <tr class="table-light">
                  <th scope="row">3A</th>
                    <td>C#</td>
                    <td>8:45AM-10:15AM</td>
                  </tr>
                  <tr class="table-dark">
                    <th scope="row">Dark</th>
                    <td>Cell</td>
                    <td>Cell</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table Variants -->

            </div>
          </div>

        </div>
</main>
@endsection
