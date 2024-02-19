@extends('admin.index')

@section('content')
    
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Kegiatan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="breadcrumb-item">Kegiatan Wisata</li>
                        <li class="breadcrumb-item active">Kegiatan</li>
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
                    <h2 class="card-title" style="margin-bottom: 1px;">Daftar Kegiatan Resmi</h2>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter" style="float: right; margin-bottom: 1px;"><i class="icon ion-android-add-circle"></i> Tambah Data</button>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered" id="dataTables">
                            <thead>
                                <tr style="text-align:center">
                                    <th style="display:none;">Id</th>
                                    <th>Gambar</th>
                                    <th>Nama</th>
                                    <th>Penjelasan</th>
                                    <th>Id About</th>
                                    <th width="20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($kegiatan as $key => $kg)
                                <tr style="font-size: 14px">
                                    <td style="display:none;">{{ $kg->id }}</td>
                                    <td style="text-align:center;"><img src="{{ asset('uploads/' . $kg->gambar)}}" alt="Image" height="79px"></td>
                                    <td>{{ $kg->nama }}</td>
                                    <td>{{ $kg->penjelasan }}</td>
                                    <td>{{ $kg->id_about }}</td>
                                    <td style="text-align:center">
                                        <a class="btn btn-primary edit" href="#"><i class="icon ion-android-create"></i> Edit</a>
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

<!-- tambah data -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title fontku" id="exampleModalLabel">Tambah Kegiatan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{ action('KegiatanController@store') }}" method="POST" enctype="multipart/form-data">

        {{ csrf_field() }}
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5">
                        <!-- <div class="form-group"> -->
                            <label>Nama Kegiatan</label>
                            <input type="text" name="nama"class="form-control">
                        <!-- </div>
                        <div class="form-group"> -->
                        <div style="clear:both; height:5px;"></div>
                            <label>Wisata</label>
                            <select class="form-control" name="id_about">
                                <option value=" " disabled selected hidden></option>
                                @foreach($classname_about as $about)
                                <option value="{{$about->id}}">{{$about->id}}-{{$about->nama}}</option>
                                @endforeach     
                            </select>
                        <!-- </div>
                        <div class="form-group"> -->
                        <div style="clear:both; height:5px;"></div>
                            <label>Unggah Foto</label>
                            <br>
                            <div>
                                <input type="file" name="gambar" accept=".jpg,.jpeg,.png" required/>
                            </div>
                        <!-- </div> -->
                    </div>
                    <div class="col-md-7 ml-auto">
                        <div class="form-group">
                            <label>Penjelasan</label>
                            <textarea type="text" name="penjelasan" class="form-control" style="height:250px;"></textarea>
                        </div>
                    </div>
                </div>

                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<!-- edit data -->
<div class="modal fade bd-example-modal-lg" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title fontku" id="exampleModalLabel">Edit Kegiatan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="kegiatan" method="POST" id="editForm" enctype="multipart/form-data">

            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5">
                        <!-- <div class="form-group"> -->
                            <label>Nama Kegiatan</label>
                            <input type="text" name="nama" id="nama" class="form-control">
                        <!-- </div>
                        <div class="form-group"> -->
                        <div style="clear:both; height:5px;"></div>
                            <label>Nama Wisata</label>
                            <select class="form-control" name="id_about" id="id_genre">
                                <option value=" " disabled selected hidden></option>
                                @foreach($classname_about as $about)
                                <option value="{{$about->id}}">{{$about->id}}-{{$about->nama}}</option>
                                @endforeach     
                            </select>
                        <!-- </div>
                        <div class="form-group"> -->
                        <div style="clear:both; height:5px;"></div>
                            <label>Unggah Foto</label>
                            <br>
                            <div>
                                <input type="file" name="gambar" id="gambar" accept=".jpg,.jpeg,.png" required/>
                            </div>
                        <!-- </div> -->
                    </div>
                    <div class="col-md-7 ml-auto">
                        <div class="form-group">
                            <label>Penjelasan</label>
                            <textarea type="text" name="penjelasan" id="penjelasan" class="form-control" style="height:250px;"></textarea>
                        </div>
                    </div>
                </div>

                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

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
            <form action="kegiatan" method="POST" id="deleteForm">

                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <div class="modal-body">

                    <input type="hidden" nama="_method" value="DELETE">
                    <p> Apakah anda Yakin? </p>

                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Hapus Data</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('myjs')
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
            
            $('#id_about').val(data[4]);

            $('#editForm').attr('action', 'kegiatan/'+data[0]);
            $('#editModal').modal('show');
        })

        $('.delete').on('click', function(){
            $tr = $(this).closest('tr');
            
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();

            console.log(data);

            $('#deleteForm').attr('action', 'kegiatan/'+data[0])

            $('#deleteModal').modal('show');
        })
    })
</script>
@endpush
