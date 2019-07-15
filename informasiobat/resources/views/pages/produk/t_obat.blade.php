@extends('template.default')

@section('content')

<form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="{{route('obat.store')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Nama Obat</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="namaobat" minlength="2" type="text" required="">
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">Kategori</label>
                    <div class="col-lg-10">
                      <select class="form-control" name="kategori" required="">
                        @foreach ($kategoris as $cat)
                          <option value="{{$cat->id}}">{{$cat->nama}}</option>
                        @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="ccomment" class="control-label col-lg-2">Tentang</label>
                    <div class="col-lg-10">
                      <textarea class="form-control " id="ccomment" name="tentang" required=""></textarea>
                    </div>
                  </div>
                  <div class="form-group last">
                  <label class="control-label col-md-3">Image Upload</label>
                  <div class="col-md-9">
                    <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <!-- <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""> -->
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
                      <div>
                        <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                        <input type="file" name="gambar" class="default">
                        </span>
                        <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                      </div>

                </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Save</button>
                      <button class="btn btn-theme04" type="button">Cancel</button>
                    </div>
                  </div>
                </form>

@endsection
