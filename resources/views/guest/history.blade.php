@extends('guest.layouts.app')
@section('content')
<style type="text/css">
    #history {
        background-image:
        linear-gradient(to right, rgba(246, 211, 101, 0.5), rgba(243, 99, 59, 0.6)),
        url('{{ asset("images/history.jpg") }}');
        width: 100%;
        height: 400px;
        background-size: cover;
        color: white;
        padding: 20px;
    }

    #history_1 {
        background-image:
        linear-gradient(to right, rgba(246, 211, 101, 0.5), rgba(243, 99, 59, 0.6)),
        url('{{ asset("images/volley.jpg") }}');
        width: 100%;
        height: 400px;
        background-size: cover;
        color: white;
        padding: 20px;
    }

    #history_2 {
        background-image:
        linear-gradient(to right, rgba(246, 211, 101, 0.5), rgba(243, 99, 59, 0.6)),
        url('{{ asset("images/history_3.jpg") }}');
        width: 100%;
        height:400px;
        background-size:cover;
        color:white;
        padding: 20px;
    }

    #history_3 {
        background-image:
        linear-gradient(to right, rgba(246, 211, 101, 0.5), rgba(243, 99, 59, 0.6)),
        url('{{ asset("images/ball.webp") }}');
        width:100%;
        height:400px;
        background-size:cover;
        color: white;
        padding:20px;
    }

    #history_4 {
        background-image:
        linear-gradient(to right, rgba(246, 211, 101, 0.5), rgba(243, 99, 59, 0.6)),
        url('{{ asset("images/login.jpg") }}');
        width:100%;
        height:400px;
        background-size:cover;
        color: white;
        padding:20px;
    }

    #history_5 {
        background-image:
        linear-gradient(to right, rgba(246, 211, 101, 0.5), rgba(243, 99, 59, 0.6)),
        url('{{ asset("images/history.jpg") }}');
        width:100%;
        height:400px;
        background-size:cover;
        color: white;
        padding:20px;
    }
    

</style>
<div id="history">
    <div class="row h-100 d-flex align-items-center mt-5">
        <div class="col-lg-12 d-flex justify-items-center justify-content-center">
            <span style="font-size:60px;">Our History</span>
        </div>
    </div>
</div>
<div id="history_1">
    <div class="container h-100">
        <div class="row h-100"> 
            <div class="col-lg-6 d-flex align-items-center">
                <div>
                    <div class="row">
                        <div class="col-lg-12">
                            <span style="font-size:60px; font-weight:500">2011</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <span style="font-size:60px; font-weight:500" class="text-white">Gunadarma</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <span style="font-size:40px;">Volley Ball Club born</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="history_2">
    <div class="container">
        <div class="row h-100">
            <div class="col-lg-6 offset-6 h-100 d-flex align-items-center">
                <div>
                    <div class="row">
                        <div class="col-lg-12">
                            <span style="font-size:60px; font-weight:600">2015</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul>
                                <li style="font-size:30px; font-weight:500">Juara I Voli Putri(UI Cup)</li>
                                <li style="font-size:30px; font-weight:500">Juara III Voli Putri(BLVC Cup)</li>
                                <li style="font-size:30px; font-weight:500">Juara II Voli Putra(Fisip UI Cup)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="history_3">
    <div class="col-lg-6 d-flex align-items-center">
        <div>
            <div class="row">
                <div class="col-lg-12">
                    <span style="font-size:60px; font-weight:600">2016</span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul>
                        <li style="font-size:30px; font-weight:500">Juara III Voli Putra (BLVC Cup)</li>
                        <li style="font-size:30px; font-weight:500">Juara III Voli putri (BLVC Cup)</li>
                        <li style="font-size:30px; font-weight:500">Juara III Voli Putra (Avic Cup)</li>
                        <li style="font-size:30px; font-weight:500">Juara II Voli Putra (IPB Cup)</li>
                        <li style="font-size:30px; font-weight:500">Juara II Voli Putri (IPB Cup)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="history_4">
    <div class="row h-100">
        <div class="col-lg-6 offset-6 d-flex align-items-center">
            <div>
                <div class="row">
                    <div class="col-lg-12">
                        <span style="font-size:60px; font-weight:600">2017</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul>
                            <li style="font-size:30px; font-weight:500">Juara I Voli Putri (BEE Cup)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="history_5">
    <div class="row h-100">
        <div class="col-lg-6 d-flex align-items-center h-100">
            <div>
                <div class="row">
                    <div class="col-lg-12">
                        <span style="font-size:60px; font-weight:600">2018</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul>
                            <li style="font-size:30px; font-weight:500">Juara I Voli Putri(TSAC Cup)</li>
                            <li style="font-size:30px; font-weight:500">Juara II Voli Putri (Pomprov DKI Jakarta)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-lg-6 pl-5 offset-6" style="border-left: 4px solid #000000;">
            <div class="row mt-5 mb-5">
                <div class="col-lg-10">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <span style="font-size:30px; font-weight:500;" class="deep-orange-text">2015</span>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <small class="text-muted">
                                        Setelah perjalanan dan perjuangan panjang yang kami lewati dan hadapi, akhirnya kami dapat meraih trophy pertama kami
                                    </small>
                                </div>
                            </div>
                            <a data-toggle="collapse" href="#card1" aria-expanded="false" aria-controls="card1" id="down">
                                <div class="row mt-3">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <i class="fas fa-chevron-down animated slideInDown infinite" id="icon-down"></i>
                                    </div>
                                </div>
                            </a>
                            <a data-toggle="collapse" href="#card1" aria-expanded="false" aria-controls="card1" id="up" class="d-none">
                                <div class="row mt-3">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <i class="fas fa-chevron-up animated slideInUp infinite"></i>
                                    </div>
                                </div>
                            </a>
                            <div class="collapse" id="card1">
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <span>1. Juara I Voli Putri(UI Cup)</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span>2. Juara III Voli Putri (BLVC Cup)</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span>3. Juara II Voli Putra (Fisip UI Cup)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 pr-5">
            <div class="row d-flex justify-content-end">
                <div class="col-lg-10">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 d-flex justify-content-end">
                                    <span class="deep-orange-text" style="font-size:30px; font-weight:500">2016</span>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <small class="text-muted">
                                        Di tahun berikutnya kami melanjutkan trend positif kami
                                    </small>
                                </div>
                            </div>
                            <a data-toggle="collapse" href="#card2" aria-expanded="false" aria-controls="card1" id="down_2016">
                                <div class="row mt-3">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <i class="fas fa-chevron-down animated slideInDown infinite" id="icon-down"></i>
                                    </div>
                                </div>
                            </a>
                            <a data-toggle="collapse" href="#card2" aria-expanded="false" aria-controls="card1" id="up_2016" class="d-none">
                                <div class="row mt-3">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <i class="fas fa-chevron-up animated slideInUp infinite"></i>
                                    </div>
                                </div>
                            </a>
                            <div class="collapse" id="card2">
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <span>1. Juara III Voli Putra(BLVC Cup)</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span>2. Juara III Voli Putri (BLVC Cup)</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span>3. Juara II Voli Putra (Fisip UI Cup)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function () {
        $('#down').on("click", function () {
            $('#up').removeClass('d-none');
            $('#down').addClass('d-none');
        })

        $('#up').on('click', function () {
            $('#down').removeClass('d-none');
            $('#up').addClass('d-none');
        });

        $('#down_2016').on("click", function () {
            $('#up_2016').removeClass('d-none');
            $('#down_2016').addClass('d-none');
        })

        $('#up_2016').on('click', function () {
            $('#down').removeClass('d-none');
            $('#up_2016').addClass('d-none');
        })
    })
</script>
@endsection