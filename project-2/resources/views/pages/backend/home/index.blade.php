@extends('layout.backend.app')
@section('content')
    <style>
        .table-fixed {
            table-layout: fixed;
            width: 100%;
        }

        .table-fixed th,
        .table-fixed td {
            word-wrap: break-word;
            white-space: normal;
            vertical-align: top;
            text-align: left;
        }

        /* Khusus kolom Action */
        .action-cell {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .action-buttons {
            margin-bottom: 8px;
        }

        /* Toggle Switch Style */
        .switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 26px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 26px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 20px;
            width: 20px;
            left: 3px;
            bottom: 3px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        /* ON state */
        input:checked+.slider {
            background-color: #4CAF50;
        }

        input:checked+.slider:before {
            transform: translateX(24px);
        }

        /* Rounded style */
        .slider.round {
            border-radius: 26px;
        }

        /* Tombol Create di tengah */
        .create-btn-wrapper {
            text-align: center;
            margin-top: 20px;
        }
        .card-counter {
    padding: 20px;
    color: #fff;
    border-radius: 10px;
    text-align: left;
    box-shadow: 0 2px 6px rgba(0,0,0,0.15);
}

.card-counter .count-numbers {
    font-size: 28px;
    font-weight: bold;
    display: block;
}

.card-counter .count-name {
    font-size: 16px;
    font-weight: 600;
    display: block;
}

.card-counter small {
    font-size: 12px;
    opacity: 0.8;
}

    </style>
    <div class="row mb-4">
    <div class="col-md-3">
        <div class="card-counter bg-primary">
            <small>Gallery</small>
            <span class="count-numbers">486</span>
            <small>Foto/Video</small>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card-counter bg-success">
            <small>Testimoni</small>
            <span class="count-numbers">1641</span>
            <small>Pengunjung</small>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card-counter bg-warning">
            <small>Partner</small>
            <span class="count-numbers">4</span>
            <small>Kerja Sama</small>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card-counter bg-danger">
            <small>Pesan Masuk</small>
            <span class="count-numbers">5</span>
            <small>Belum Dibaca</small>
        </div>
    </div>
</div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Dashboard</h4>
                <div class="table-responsive pt-3">
                    <table class="table table-striped table-fixed">
                        <thead>
                            <tr>
                                <th style="width: 8%;">ID</th>
                                <th style="width: 20%;">Photo</th>
                                <th style="width: 20%;">Title</th>
                                <th style="width: 22%;">Subtitle</th>
                                <th style="width: 27%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Herman Beck</td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.
                                </td>
                                <td>
                                    Subtitle panjang juga akan otomatis turun ke bawah kalau melebihi batas lebar kolom.
                                </td>
                                <td class="action-cell">
                                    <div class="action-buttons">
                                        <a type="button" href="hero/edit" class="btn btn-primary">
                                            Edit <i class="mdi mdi-pencil ms-2"></i>
                                        </a>
                                        <button type="button" class="btn btn-danger">
                                            Delete <i class="mdi mdi-delete ms-2"></i>
                                        </button>
                                    </div>
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
