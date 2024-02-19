@extends('admin.index')

@push('cssku')
<style>
    #map-canvas{
        width: 100%;
        height: 350px
    }
</style>
@endpush

@section('content')
    
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">About</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="breadcrumb-item">About Wisata</li>
                        <li class="breadcrumb-item active">About</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <h2 class="card-title" style="margin-bottom: 1px;">Daftar Wisata</h2>
                        <a a href="{{ route('abouts.create') }}" class="btn btn-success" style="float: right; margin-bottom: 1px;"><i class="icon ion-android-add-circle"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered" id="dataTables">
                            <thead>
                                <tr style="text-align:center">
                                    <th style="display:none;">Id</th>
                                    <th>Gambar</th>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th width="20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($abouts as $key => $about)
                                <tr style="font-size: 14px">
                                    <td style="display:none;">{{ $about->id }}</td>
                                    <td style="text-align:center;"><img src="{{ asset('uploads/about/' . $about->gambar)}}" alt="Image" height="79px"></td>
                                    <td>{{ $about->nama }}</td>
                                    <td>{{ $about->penjelasan }}</td>
                                    <td style="text-align:center">
                                        <a class="btn btn-primary" href="{{ route('abouts.edit', $about->id) }}"><i class="icon ion-android-create"></i> Edit</a>
                                        <a class="btn btn-danger delete" href="#"><i class="icon ion-trash-a"></i> Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- delete data -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Delete Wisata</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="abouts" method="POST" id="deleteForm">

                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <div class="modal-body">

                    <input type="hidden" nama="_method" value="DELETE">
                    <p> Apakah anda Yakin? </p>

                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Delete Data</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('myjs')
<script>
    function addNewLines(){
        text = document.getElementById('userField').value;
        text = text.replace(/ /g, "[sp][sp]");
        text = text.replace(/\n/g, "[nl]");
    }
    
    $(document).ready(function(){

        $('.edit').on('click', function(){

            $tr = $(this).closest('tr');
            
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();

            console.log(data);

            $('#gambar').val(data[1]);
            $('#nama').val(data[2]);
            $('#penjelasan').val(data[3]); 
            $('#id_genre').val(data[4]);

            $('#editForm').attr('action', 'abouts/'+data[0]);
            $('#editModal').modal('show');
        })

        $('.delete').on('click', function(){
            $tr = $(this).closest('tr');
            
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();

            console.log(data);

            $('#deleteForm').attr('action', 'abouts/'+data[0])

            $('#deleteModal').modal('show');
        })
    })
</script>
@endpush
