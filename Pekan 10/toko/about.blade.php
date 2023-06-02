@extends('template/main')
@section('content1')
    <div class="container-xxl py-5" id="about">
        <div class="container">
            <div class="row g-4 align-items-end mb-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" src="/image/nestle.png">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">About Us</p>
                    <h1 class="display-5 mb-4" style="font-size: 35px;">Nestlé</h1></br>
                    <p class="mb-4">Nestlé S.A. adalah sebuah produsen makanan dan minuman multinasional yang berkantor pusat 
                        di Vevey, Vaud, Swiss. Perusahaan ini merupakan produsen makanan dengan pendapatan terbesar di dunia sejak tahun 2014..
                    </p>
                    <div class="border rounded p-4">
                        <nav>
                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                <button class="nav-link fw-semi-bold active" id="nav-story-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"
                                    aria-selected="true">Visi</button>
                                <button class="nav-link fw-semi-bold" id="nav-mission-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission"
                                    aria-selected="true">Misi</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                                aria-labelledby="nav-story-tab">
                                <p>Menjadi perusahaan Produksi Makanan dan Minuman terbesar didunia.</p>
                            </div>
                            <div class="tab-pane fade" id="nav-mission" role="tabpanel"
                                aria-labelledby="nav-mission-tab">
                                <ol>
                                    <li>Mewujudkan masyarakat indonesia yang sehat melalui produknya yang berkualitas.</li>
                                    <li>Menciptakan produk-produk yang bermanfaat bagi kesehatan.</li>
                                    <li>Memberikan informasi dan sumber pendidikan tentang kesehatan kepada konsumen.</li>
                                    <li>Memajukan masyarakat indonesia dengan komsumsi makanan yang sehat.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content2')
<div class="container-xxl py-5" id="about">
        <div class="container">
            <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="text-black mt-0 text-center" style="font-weight: bold; font-size: 30px;">Produk Nestlé</h1>
                        <h2 class="text-black mt-0 text-center" style="font-weight: bold; font-size: 30px;">Nestlé Indonesia</h2>
                <table style="width: 100%; margin: 0 auto;">
                    <tr>
                        <th>No</th>
                        <th>NAMA PRODUK</th>
                        <th>MERK PRODUK</th>
                        <th>NO BPOM</th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th style="text-align: left;">KOPI</th>
                        <th style="text-align: left;">NESCAFE</th>
                        <th style="text-align: left;">017638917392908</th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th style="text-align: left;">COKLAT</th>
                        <th style="text-align: left;">KITKAT</th>
                        <th style="text-align: left;">017638917392908</th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th style="text-align: left;">MINUMAN</th>
                        <th style="text-align: left;">MILO</th>
                        <th style="text-align: left;">017638917392908</th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th style="text-align: left;">SEREAL</th>
                        <th style="text-align: left;">CORN FLAKES</th>
                        <th style="text-align: left;">017638917392908</th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th style="text-align: left;">NUTRISI KESEHATAN</th>
                        <th style="text-align: left;">NUTREN FIBRE</th>
                        <th style="text-align: left;">017638917392908</th>
                    </tr>
                </table>
            </div>
            </div>
        </div>
    </div>
@endsection