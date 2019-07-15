@extends('template.default')

@section('content')
<div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Kategori</h4><hr><table class="table table-striped table-advance table-hover">


                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1 ?>
                  @foreach($kategori as $kat)
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$kat->nama}}</td>
                    <td>
                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                      <a href="{{route('kategori.edit', $kat->id)}}"  class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                      <a href="{{route('kategori.destroy', $kat->id)}}" onclick="return confirm('hapus data ini?')"  class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php $no++ ?>
                  @endforeach

                </tbody>
              </table>
            </div>
@endsection
