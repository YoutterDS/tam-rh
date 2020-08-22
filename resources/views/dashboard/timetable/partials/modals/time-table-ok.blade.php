<div class="modal fade time-table-modal" id="timetableDetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h3 class="text-uppercase text-center">Registro mensual horario</h3>
                <ul style="list-style: none;padding: 0;">
                    <li><span><i class="fas fa-user" style="color: #1d68a7;"></i> <strong class="text-uppercase">RAMON RIBERA</strong> / Manager</span></li>
                    <li><i class="far fa-calendar-alt" style="color: #1d68a7;"></i> <strong class="text-uppercase">Fecha inicio</strong> 1/06/2020</li>
                    <li><i class="fas fa-calendar-alt" style="color: #1d68a7;"></i> <strong class="text-uppercase">Fecha Fin</strong> 30/06/2020</li>
                </ul>
                <hr>
                <table class="table table-count-hours">
                    <thead>
                    <tr>
                        <th scope="col" class="text-uppercase">Horas mínimas</th>
                        <th scope="col" class="text-uppercase">Horas computadas</th>
                        <th scope="col" class="text-uppercase">Horas extras</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>120</td>
                        <td>150</td>
                        <td>+30</td>
                    </tr>
                    </tbody>
                </table>
                <hr>
                <canvas id="timetableChart1"></canvas>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary"><i class="far fa-envelope" onclick="alert('Compartir via email');"></i></button>
                <button type="button" class="btn btn-primary text-uppercase"><i class="fas fa-file-excel" onclick="alert('Exportar registro');"></i> Exportar registro</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
{{-- https://www.chartjs.org/?utm_source=cdnjs&utm_medium=cdnjs_link&utm_campaign=cdnjs_library --}}
<script>
    let ctx = document.getElementById("timetableChart1").getContext('2d');
    let myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["01/06/2020", "02/06/2020", "03/06/2020", "04/06/2020", "05/06/2020", "06/06/2020", "07/06/2020", "08/06/2020", "09/06/2020", "10/06/2020", "11/06/2020", "12/06/2020", "13/06/2020", "14/06/2020", "15/06/2020", "16/06/2020", "17/06/2020", "18/06/2020","19/06/2020","20/06/2020","21/06/2020","22/06/2020","23/06/2020","24/06/2020","25/06/2020","27/06/2020","28/06/2020","29/06/2020","30/06/2020"],
            datasets: [{
                label: '# Horas',
                data: [9, 8, 8, 5, 2, 8,9, 11, 3, 5, 2, 8,9, 11, 3, 5, 2, 8,9, 11, 3, 5, 2, 8,3, 5, 2, 8,3, 5, 2, 8],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderWidth: 1,
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
