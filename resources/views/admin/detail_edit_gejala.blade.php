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

    <div class="row p-4">
        <div class="alert alert-success">Anda dapat meng-edit dengan menekan tombol dikanan <button class="btn btn-light float-end btn-edit"><span class="bi bi-pencil"></span>edit</button></div>

        <form action="{{url('update_data_gejala')}}/{{$data->id}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Kode Gejala</label>
                <input type="text" class="form-control" name="kode" placeholder="Isikan kode gejala" value="{{$data->kode}}">
            </div>
            <div class="form-group">
                <label for="">Nama Gejala</label>
                <input type="text" class="form-control" name="nama" placeholder="Isikan nama gejala" value="{{$data->nama}}">
            </div>
            <div class="form-group">
                <label for="">Pertanyaan</label>
                <input type="text" class="form-control" name="pertanyaan" placeholder="Isikan pertanyaan " value="{{$data->pertanyaan}}">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </form>

    </div>




</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
    $(document).ready(() => {
        $(".form-control").attr('disabled', true);

        $(".btn-edit").on("click", () => {
            $(".form-control").attr('disabled', false);
        });
    });
</script>

@endsection