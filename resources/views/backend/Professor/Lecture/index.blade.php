@extends('backend.layouts.mainTeacher')
@section('title', 'Lecture')
@section('main-container')
<main id="main" class="main">
<div class="card">

<div class="card">
            <div class="card-body">
              <h5 class="card-title">Daily Sechdule Teach</h5>

              <!-- Bordered Table -->
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Room</th>
                    <th scope="col">Time</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>MIS</td>
                    <td>4D</td>
                    <td>10-15AM-11:45AM</td>
                    <td>14-FEB-2023</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>MIS</td>
                    <td>4D</td>
                    <td>10-15AM-11:45AM</td>
                    <td>14-FEB-2023</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>MIS</td>
                    <td>4D</td>
                    <td>10-15AM-11:45AM</td>
                    <td>14-FEB-2023</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>MIS</td>
                    <td>4D</td>
                    <td>10-15AM-11:45AM</td>
                    <td>14-FEB-2023</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>MIS</td>
                    <td>4D</td>
                    <td>10-15AM-11:45AM</td>
                    <td>14-FEB-2023</td>
                  </tr>
                </tbody>
              </table>
</div>
</div>
            <div class="card-body">
              <h5 class="card-title">Teacher Attendance Charts</h5>

              <!-- Bar Chart -->
              <canvas id="barChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#barChart'), {
                    type: 'bar',
                    data: {
                      labels: ['Jan', 'Feb', 'Mar', 'May', 'Jun', 'July', 'Apr'],
                      datasets: [{
                        label: 'Bar Chart',
                        data: [65, 59, 80, 81, 56, 55, 40],
                        backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(153, 102, 255)',
                          'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Bar CHart -->

</main>
@endsection
