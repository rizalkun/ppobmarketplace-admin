@extends('layouts.index')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Dashboard</h3>
                                <nav>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item active"><a href="#">Dashboard</a></li>
                                    </ul>
                                </nav>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-xxl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-inner align-center">
                                        <div class="user-avatar sq bg-primary-dim me-3">
                                            <em class="icon ni ni-money fs-2"></em>
                                        </div>
                                        <div class="info">
                                            <p class="title mb-0">Total Saldo</p>
                                            <h4 class="count fs-16px">Rp. 51.945</h4>
                                        </div>
                                    </div><!-- .card-inner -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-inner align-center">
                                        <div class="user-avatar sq bg-warning-dim me-3">
                                            <em class="icon ni ni-file-text fs-2"></em>
                                        </div>
                                        <div class="info">
                                            <p class="title mb-0">Total Transaksi</p>
                                            <h4 class="count fs-16px">Rp. 22.338</h4>
                                        </div>
                                    </div><!-- .card-inner -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-inner align-center">
                                        <div class="user-avatar sq bg-success-dim me-3">
                                            <em class="icon ni ni-percent fs-2"></em>
                                        </div>
                                        <div class="info">
                                            <p class="title mb-0">Total Laba</p>
                                            <h4 class="count fs-16px">Rp. 22.338</h4>
                                        </div>
                                    </div><!-- .card-inner -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-inner align-center">
                                        <div class="user-avatar sq bg-warning-dim me-3">
                                            <em class="icon ni ni-users-fill fs-2"></em>
                                        </div>
                                        <div class="info">
                                            <p class="title mb-0">Total User</p>
                                            <h4 class="count fs-16px">1.485</h4>
                                        </div>
                                    </div><!-- .card-inner -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-6">
                                <div class="card">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">Transaksi Terakhir</h6>
                                            </div>
                                            <div class="card-tools">
                                                <a href="" class="btn btn-icon btn-sm btn-primary"><em class="icon ni ni-reload"></em></a>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="nk-tb-list is-separate">
                                        <thead>
                                            <tr class="nk-tb-item nk-tb-head">
                                                <th class="nk-tb-col"><span class="fs-14px text-dark">Product</span></th>
                                                <th class="nk-tb-col"><span class="fs-14px text-dark">Tanggal</span></th>
                                                <th class="nk-tb-col"><span class="fs-14px text-dark">Harga</span></th>
                                                <th class="nk-tb-col"><span class="fs-14px text-dark">Status</span></th>
                                            </tr><!-- .nk-tb-item -->
                                        </thead>
                                        <tbody class="aling-middle">
                                            <tr class="nk-tb-item">
                                                <td class="nk-tb-col">
                                                    <span class="tb-lead">Pulsa Telkomsel 150K</span>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <span class="tb-lead">29 Agustus 2022</span>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <span class="tb-lead">Rp 150.000</span>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <span class="badge bg-success-dim text-success">Sukses</span>
                                                </td>
                                            </tr><!-- .nk-tb-item -->
                                            <tr class="nk-tb-item">
                                                <td class="nk-tb-col">
                                                    <span class="tb-lead">Pulsa Telkomsel 150K</span>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <span class="tb-lead">29 Agustus 2022</span>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <span class="tb-lead">Rp 150.000</span>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <span class="badge bg-success-dim text-success">Sukses</span>
                                                </td>
                                            </tr><!-- .nk-tb-item -->
                                            <tr class="nk-tb-item">
                                                <td class="nk-tb-col">
                                                    <span class="tb-lead">Pulsa Telkomsel 150K</span>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <span class="tb-lead">29 Agustus 2022</span>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <span class="tb-lead">Rp 150.000</span>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <span class="badge bg-success-dim text-success">Sukses</span>
                                                </td>
                                            </tr><!-- .nk-tb-item -->
                                            <tr class="nk-tb-item">
                                                <td class="nk-tb-col">
                                                    <span class="tb-lead">Pulsa Telkomsel 150K</span>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <span class="tb-lead">29 Agustus 2022</span>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <span class="tb-lead">Rp 150.000</span>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <span class="badge bg-success-dim text-success">Sukses</span>
                                                </td>
                                            </tr><!-- .nk-tb-item -->
                                            <tr class="nk-tb-item">
                                                <td class="nk-tb-col">
                                                    <span class="tb-lead">Pulsa Telkomsel 150K</span>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <span class="tb-lead">29 Agustus 2022</span>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <span class="tb-lead">Rp 150.000</span>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <span class="badge bg-success-dim text-success">Sukses</span>
                                                </td>
                                            </tr><!-- .nk-tb-item -->
                                        </tbody>
                                    </table><!-- .nk-tb-list -->
                                    <div class="card-inner">
                                        <div class="justify-center">
                                            <a href="" class="link"><span>Lihat Semua</span><em class="icon ni ni-chevron-right"></em></a>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-6">
                                <div class="card">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">Grafik Jumlah Transaksi/hari</h6>
                                            </div>
                                            <div class="card-tools">
                                                <a href="#" class="btn btn-icon btn-sm btn-primary"><em class="icon ni ni-reload"></em></a>
                                            </div>
                                        </div>
                                    </div><!-- .card-inner -->
                                    <div class="card-inner">
                                        <canvas class="bar-chart" id="barChartMultiple"></canvas>
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        "use strict";

        !function (NioApp, $) {
            "use strict"; //////// for developer - barchart ////////
            // Avilable options to pass from outside
            // labels: array,
            // stacked: false - boolean,
            // legend: false - boolean,
            // dataUnit: string, (Used in tooltip or other section for display)
            // datasets: [{label : string, color: string (color code with # or other format), data: array}]

            var barChartMultiple = {
                labels: ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"],
                dataUnit: 'USD',
                datasets: [{
                    label: "Transaksi Sukses",
                    color: "#1ee0ac",
                    data: [110, 80, 125, 55, 95, 75, 90]
                }, {
                    label: "Transaksi Gagal",
                    color: "#e85347",
                    data: [75, 90, 110, 80, 125, 55, 95]
                }]
            };

            function barChart(selector, set_data) {
                var $selector = selector ? $(selector) : $('.bar-chart');
                $selector.each(function () {
                    var $self = $(this),
                        _self_id = $self.attr('id'),
                        _get_data = typeof set_data === 'undefined' ? eval(_self_id) : set_data,
                        _d_legend = typeof _get_data.legend === 'undefined' ? false : _get_data.legend;

                    var selectCanvas = document.getElementById(_self_id).getContext("2d");
                    var chart_data = [];

                    for (var i = 0; i < _get_data.datasets.length; i++) {
                        chart_data.push({
                            label: _get_data.datasets[i].label,
                            data: _get_data.datasets[i].data,
                            // Styles
                            backgroundColor: _get_data.datasets[i].color,
                            borderWidth: 2,
                            borderColor: 'transparent',
                            hoverBorderColor: 'transparent',
                            borderSkipped: 'bottom',
                            barPercentage: .6,
                            categoryPercentage: .7
                        });
                    }

                    var chart = new Chart(selectCanvas, {
                        type: 'bar',
                        data: {
                            labels: _get_data.labels,
                            datasets: chart_data
                        },
                        options: {
                        legend: {
                            display: _get_data.legend ? _get_data.legend : true,
                            position: 'bottom',
                            labels: {
                                usePointStyle: true,
                                pointStyle: 'circle',
                                padding: 20,
                                fontColor: '#6783b8'
                            }
                        },
                        maintainAspectRatio: false,
                        tooltips: {
                            enabled: true,
                            rtl: NioApp.State.isRTL,
                            callbacks: {
                                title: function title(tooltipItem, data) {
                                    return data.datasets[tooltipItem[0].datasetIndex].label;
                                },
                                label: function label(tooltipItem, data) {
                                    return data.datasets[tooltipItem.datasetIndex]['data'][tooltipItem['index']] + ' ' + _get_data.dataUnit;
                                }
                            },
                            backgroundColor: '#eff6ff',
                            titleFontSize: 13,
                            titleFontColor: '#6783b8',
                            titleMarginBottom: 6,
                            bodyFontColor: '#9eaecf',
                            bodyFontSize: 12,
                            bodySpacing: 4,
                            yPadding: 10,
                            xPadding: 10,
                            footerMarginTop: 0,
                            displayColors: false
                        },
                        scales: {
                            yAxes: [{
                                display: true,
                                stacked: _get_data.stacked ? _get_data.stacked : false,
                                position: NioApp.State.isRTL ? "right" : "left",
                                ticks: {
                                    beginAtZero: true,
                                    fontSize: 12,
                                    fontColor: '#9eaecf',
                                    maxTicksLimit: 4,
                                    padding: 10
                                },
                                gridLines: {
                                    drawBorder: false,
                                    color: NioApp.hexRGB("#526484", .2),
                                    tickMarkLength: 0,
                                    zeroLineColor: NioApp.hexRGB("#526484", .2)
                                }
                            }],
                            xAxes: [{
                                display: true,
                                stacked: _get_data.stacked ? _get_data.stacked : false,
                                ticks: {
                                    fontSize: 12,
                                    fontColor: '#9eaecf',
                                    source: 'auto',
                                    reverse: NioApp.State.isRTL
                                },
                                gridLines: {
                                    color: "transparent",
                                    tickMarkLength: 10,
                                    zeroLineColor: 'transparent'
                                }
                            }]
                        }
                        }
                    });
                });
            } // init bar chart


            barChart();

        }(NioApp, jQuery);
    </script>
@endpush
