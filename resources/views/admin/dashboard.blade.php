@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class='card rounded-0'>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span class="text-muted" style="font-weight:600">Total Member</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span style="font-size:60px; font-weight:600">{{ $user->count() }}</span>
                                        </div>
                                    </div>
                                </div>
                                <i class="fas fa-user deep-orange-text" style="font-size:60px; opacity: 0.7"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <canvas id="myChart" width="400" height="400"></canvas>
<script>
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
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
</script>
@endsection