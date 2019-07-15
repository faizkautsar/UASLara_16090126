@extends('template.default')

@section('content')

<div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Tambah Kategori</h4>
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="{{route('kategori.store')}}">
                  @csrf
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2"> Nama Kategori</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="nama" minlength="2" type="text" required="">
                    </div>
                  </div>


                  </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Save</button>
                      <a href="" class="btn btn-theme04">Cancel</a>
                      <!-- <button class="btn btn-theme04" type="button">Cancel</button> -->
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
@endsection
