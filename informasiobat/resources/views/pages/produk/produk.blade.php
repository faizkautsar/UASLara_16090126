@extends('template.default')

@section('content')

<div class="row mt">
        <div class="col-md-12">
          <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
              <h4><i class="fa fa-angle-right"></i> Obat</h4>
              <a href="obat/create">Create Obat</a>
              <hr>
              <thead>
                <tr>
                  <th><i class="fa fa-bookmark"></i> No</th>
                  <th><i class="fa fa-bookmark"></i> Tanggal</th>
                  <th><i class="fa fa-bullhorn"></i> Nama Obat</th>
                  <th><i class="fa fa-bullhorn"></i> Kategori</th>
                  <th><i class="fa fa-bullhorn"></i> Gambar</th>
                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Tentang Obat</th>
                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Aksi</th>

                  


                  <th></th>
                </tr>
              </thead>
              <tbody>
                  @foreach($data as $item)
                <tr>
                  <td>
                    {{$item->id}}
                  </td>

                  <td>
                  {{$item->created_at->format('M d, Y')}}
                  </td>
                  <td >{{$item->namaobat}}</td>
                  @foreach($kategori as $kat)
                    @if($kat->id == $item->kategori)
                      <td>{{$kat->nama}}</td>
                    @endif
                  @endforeach
                  <td><img src="{{asset('images/'.$item->gambar)}}" width="50" height="50"></td>
                  <td>{{str_limit($item->tentang,10)}}</td>

                  <td>
                    <a href="{{route('obat.edit',$item->id)}}"."edit" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                    <a href="{{route('obat.destroy',$item->id)}}" onclick="return confirm('Apakah Anda ingin Menghapus')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                  </td>
                </tr>

                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /content-panel -->
        </div>
        <!-- /col-md-12 -->
      </div>

@endsection
