@extends('main.main')
@section('container')
<link rel="stylesheet" href="{{asset('main/dist/assets/vendors/simple-datatables/style.css')}}">
<link rel="stylesheet" href="{{asset('main/dist/assets/vendors/toastify/toastify.css')}}">
<style>
    .btn-hapus:hover {
        opacity: 0.7;
    }

    .badge {
        cursor: pointer;
    }

    .form-group label {
        color: #4fbe87;
        font-weight: 600;
    }

    .btn-check:focus+.btn-primary,
    .btn-primary:focus,
    .btn-primary:hover,
    .btn-primary {
        color: #fff;
        background-color: #e67979;
        border-color: #e67979;
    }
</style>
<div class="page-content">

    <section class="row">
        <div class="col">
            <button class="btn-tambah btn btn-primary rounded-pill mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fw-bold">+</span> tambah data</button>
        </div>

        <div class="col-12">
            <div class="card table-content">
                <div class="card-header">
                    <h4 class="card-title">Manajemen Penyakit</h4>
                </div>

                <div class="card-content">


                    <div class="table-responsive px-5 pb-5 ">
                        @if(session('success'))
                        <div class="alert alert-success">
                            Proses berhasil
                        </div>
                        @endif
                        <table class="table table-hover mb-0" id="table_transaksi">
                            <thead class="table-primary">
                                <tr>
                                    <th>KODE</th>
                                    <th>NAMA PENYAKIT</th>
                                    <th>DESKRIPSI</th>
                                    <th>PENGENDALIAN</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                                @foreach($data as $d)
                                <tr>
                                    <td>{{$d->kode}}</td>
                                    <td>{{$d->nama}}</td>
                                    <td>{{Str::limit($d->deskripsi,45, '...')}}</td>
                                    <td>{{Str::limit($d->pengendalian,45, '...')}}</td>

                                    <td>
                                        <style>
                                            a:hover {
                                                color: white;
                                            }
                                        </style>
                                        <a href="{{url('detail_edit_penyakit')}}/{{$d->id}}" class="badge rounded-pill bg-secondary">detail / edit</a>
                                        <a class="badge rounded-pill bg-danger btn-hapus" data-user="{{$d->id}}">hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col-12">
                            <div class="card">
                                <div class="">
                                    <div class="container">
                                        <div class="row p-4">
                                            <div class="alert alert-success">Silahkan input data</div>

                                            <form action="{{url('input_penyakit')}}" enctype="multipart/form-data" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="">Kode Penyakit</label>
                                                    <input type="text" class="form-control" name="kode" placeholder="Isikan Kode Penyakit">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Nama penyakit</label>
                                                    <input type="text" class="form-control" name="nama" placeholder="Isikan Nama penyakit">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Deskripsi</label>
                                                    <textarea type="text" class="form-control" name="deskripsi" placeholder="Isikan Deskripsi " rows="3"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Pengendalian</label>
                                                    <textarea type="text" class="form-control" name="pengendalian" placeholder="Isikan Pengendalian " rows="3"></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                                </div>
                                            </form>

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


<script src="{{asset('main/dist/assets/vendors/simple-datatables/simple-datatables.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="{{asset('main/dist/assets/vendors/toastify/toastify.js')}}"></script>

@if(session('berhasil_hapus'))
<script>
    let msg = "{{session('berhasil_hapus')}}";
    Toastify({
        text: msg,
        duration: 3000,
        close: true,
        gravity: "top",
        position: "right",
        backgroundColor: "#4fbe87",
    }).showToast();
</script>
@elseif(session('gagal_hapus'))
<script>
    let msg = "{{session('gagal_hapus')}}";
    Toastify({
        text: msg,
        duration: 3000,
        close: true,
        gravity: "top",
        position: "right",
        backgroundColor: "#a20505",
    }).showToast();
</script>
@elseif(session('berhasil_update'))
<script>
    let msg = "{{session('berhasil_update')}}";
    Toastify({
        text: msg,
        duration: 3000,
        close: true,
        gravity: "top",
        position: "right",
        backgroundColor: "#4fbe87",
    }).showToast();
</script>
@elseif(session('!berhasil_update'))
<script>
    let msg = "{{session('!berhasil_update')}}";
    Toastify({
        text: msg,
        duration: 3000,
        close: true,
        gravity: "top",
        position: "right",
        backgroundColor: "#a20505",
    }).showToast();
</script>
@elseif(session('berhasil_insert'))
<script>
    let msg = "{{session('berhasil_insert')}}";
    Toastify({
        text: msg,
        duration: 3000,
        close: true,
        gravity: "top",
        position: "right",
        backgroundColor: "#4fbe87",
    }).showToast();
</script>
@elseif(session('!berhasil_insert'))
<script>
    let msg = "{{session('!berhasil_insert')}}";
    Toastify({
        text: msg,
        duration: 3000,
        close: true,
        gravity: "top",
        position: "right",
        backgroundColor: "#a20505",
    }).showToast();
</script>
@endif

<script>
    $(document).ready(function() {
        $(".form-tambah").hide();
        let x = false;

        $(".btn-hapus").on("click", (e) => {
            let id = $(e.target).attr("data-user");
            let url = "{{url('delete_penyakit')}}/" + id;
            if (confirm("Anda yakin ingin menghapus data ini ?")) {
                $.ajax({
                    url: url,
                    method: "GET",
                    success: () => {
                        window.location.reload();
                    },
                    error: (err) => {
                        console.log(err)
                    }
                });
            }
        });

    });
</script>


@endsection