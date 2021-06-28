@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List Jenis Biaya
                   <a href="biaya/create" class="btn btn-success btn-md float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    <div class="table-resposive">
                     <table class="table table-bordered">
                     <tr>
                         <th>NO.</th>
                         <th>JENIS</th>
                         <th>BIAYA</th>
                         <th>AKSI</th>
                     </tr>
                     @foreach ($biaya as $cost)
                     <tr>
                         <td><?php echo $cost->id_biaya;?></td>
                         <td>{{$cost->jenis}}</td>
                         <td>Rp.{{$cost->biaya}}</td>
                         <td>
                         <a href="{{ route ('edit.biaya', $cost->id_biaya)}}" class="btn btn-md btn-primary">EDIT</a>
                         <a href="{{ route ('hapus.biaya', $cost->id_biaya)}}" class="btn btn-md btn-danger">HAPUS</a>
                         </td>
                     </tr>
                     @endforeach
                     </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection