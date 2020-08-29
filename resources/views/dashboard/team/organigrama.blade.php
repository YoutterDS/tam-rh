@extends('layouts.dashboard')

@section('content')
    <style>
        #team-organigrama .orgchart {
            background: none;
            width: 100%;
            padding: 0;
        }

        #team-organigrama .orgchart .node {
            background-color: transparent;
        }

        #team-organigrama .orgchart .node .title {
            color: #3490dc;
            background-color: transparent;
            height: auto;
            padding: 1px 1px 0 1px;
            width: auto;
        }

        #team-organigrama .orgchart .node .title .dptIcon {
            display: block;
            font-size: 2rem;
            margin: 0;
        }

        #team-organigrama .orgchart .node .title p.name {
            padding: 0;
            text-transform: uppercase;
            margin: 1px 0 0 0;
        }
        #team-organigrama .orgchart .node .title p.position {
            display: block;
            color: #6e707e9e;
            margin: 0;
            font-size: .6rem;
            text-transform: uppercase;
            line-height: 1;
        }

        #team-organigrama .orgchart .node .title .profileImg {
            max-width: 50px;
            height: auto;
            border-radius: 100px;
            margin-bottom: 10px;
        }

        #team-organigrama .orgchart .lines td,
        #team-organigrama .orgchart .lines .downLine {
            border-color: #e5e5e5 !important
        }

        #team-organigrama .orgchart .lines .downLine {
            background-color: #e5e5e5 !important
        }
        .orgchart .lines .topLine {
            border-top: 1px solid #e5e5e5 !important;
        }
        .orgchart .lines .downLine {
            width: 1px;
        }
    </style>

    <div class="row" id="team-organigrama">
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

            let ds = {
                'name': 'TAM RH',
                'title': 'general manager',
                'type': 'dpt',
                'icon': 'fas fa-building',
                'children': [
                    {
                        'name': 'MARKETING',
                        'title': 'MARKETING', 'type': 'dpt', 'icon': 'fab fa-adversal',
                        'children': [
                            {'name': 'RUBEN CENTELLES', 'title': 'engineer'},
                            {'name': 'PAU GARCIA', 'title': 'engineer'}
                        ]
                    },
                    {
                        'name': 'SALES',
                        'title': 'SALES',
                        'type': 'dpt',
                        'icon': 'fas fa-balance-scale',
                        'children': [
                            {'name': 'Sales 1', 'title': 'engineer'},
                            {'name': 'Sales 2', 'title': 'UE engineer'},
                            {'name': 'Sales 3', 'title': 'UE engineer'}
                        ]
                    },
                    {
                        'name': 'RRHH',
                        'title': 'RRHH',
                        'type': 'dpt',
                        'icon': 'fas fa-users',
                        'children': [
                            {
                                'name': 'ROCIO CONTRATA', 'title': 'senior engineer',
                                'children': [
                                    {'name': 'MANUEL GARCIA', 'title': 'engineer'},
                                    {'name': 'Xiang Xiang', 'title': 'UE engineer'}
                                ]
                            }
                        ]
                    },
                    {
                        'name': 'DIRECTION',
                        'title': 'DIRECTION',
                        'type': 'dpt',
                        'icon': 'fab fa-black-tie',
                        'children': [
                            {
                                'name': 'Ramon Ribera', 'title': 'senior engineer',
                                'children': [
                                    {'name': 'Pang Pang', 'title': 'engineer'},
                                    {'name': 'Xiang Xiang', 'title': 'UE engineer'}
                                ]
                            }
                        ]
                    },
                ]
            };

            let oc = $('#chart-container').orgchart({
                'data': ds,
                'pan': false,
                'collapsed': false,
                'draggable': false,
                'toggleSiblingsResp': true,
                'createNode': function ($node, data) {

                    if (data.type === 'dpt') {
                        $node.addClass('dpt');
                        $node.children('.title').html('<p class="dptIcon"><i class="' + data.icon + '"></i></p><p class="name">' + data.name + '</p>');
                    } else {
                        $node.children('.title').html('<img class="profileImg" src="https://randomuser.me/api/portraits/men/' + Math.floor((Math.random() * 100) + 1) + '.jpg"><p class="name">' + data.name + '</p><p class="position">' + data.title + '</p>');
                    }

                }
            });
        });
    </script>

@endsection
