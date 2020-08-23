@extends('layouts.dashboard')

@section('content')
    <div class="row" id="team-departamentos">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 text-uppercase"><i class="fas fa-fw fa-sitemap"></i> Organigrama</h1>
        </div>
        <div class="card shadow col-lg-12 card-section">
            <div class="card-body p-2">
                <div id="chart-container"></div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
        let datascource = {
                'name': 'Lao Lao',
                'title': 'general manager',
                'children': [
                    { 'name': 'Bo Miao', 'title': 'department manager' },
                    { 'name': 'Su Miao', 'title': 'department manager',
                        'children': [
                            { 'name': 'Tie Hua', 'title': 'senior engineer' },
                            { 'name': 'Hei Hei', 'title': 'senior engineer',
                                'children': [
                                    { 'name': 'Pang Pang', 'title': 'engineer' },
                                    { 'name': 'Xiang Xiang', 'title': 'UE engineer' }
                                ]
                            }
                        ]
                    },
                    { 'name': 'Yu Jie', 'title': 'department manager' },
                    { 'name': 'Yu Li', 'title': 'department manager' },
                    { 'name': 'Hong Miao', 'title': 'department manager' },
                    { 'name': 'Yu Wei', 'title': 'department manager' },
                    { 'name': 'Chun Miao', 'title': 'department manager' },
                    { 'name': 'Yu Tie', 'title': 'department manager' }
                ]
            },
            let orgchart = new OrgChart({
                'chartContainer': '#chart-container',
                'data' : datascource,
                'depth': 2,
                'nodeContent': 'title'
            });
        });
    </script>
@endsection


