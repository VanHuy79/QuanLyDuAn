@extends('..\layouts.app')
@section('content')
<ul>
    @foreach($errors->all() as $error)

    <li>{{$error}}</li>


    @endforeach
</ul><div class="card">
    <div class="card-header">
   
    </div>
    <div class="card-body card-block">
        <form action="{{route('businesss.update',[$businesss->id])}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @method('PUT')
        @csrf
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Tên doanh nghiệp</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="name" name="name" placeholder="Text" class="form-control" value="{{count($errors)?old('name'):$businesss->name}}">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Tài khoản ngân hàng</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="name" name="bank_information" placeholder="Text" class="form-control" value="{{count($errors)?old('bank_information'):$businesss->bank_information}}">
                </div>
            </div>
            
            <div class="form-group row">
                    <label class="col-sm-2" for="phone">Số điện thoại</label>
                    <input class="col-sm-10 form-control" name="phone" placeholder="Năm sinh" value="{{count($errors)?old('phone'):$businesss->phone}}"/>
                    
            </div>
            <div class="form-group row">
                    <label class="col-sm-2" for="email">email</label>
                    <input class="col-sm-10 form-control" name="email" placeholder="Năm sinh" value="{{count($errors)?old('email'):$businesss->email}}"/>
                    
            </div>
            <div class="form-group row">
                    <label class="col-sm-2" for="email">website</label>
                    <input class="col-sm-10 form-control" name="website" placeholder="website" value="{{count($errors)?old('website'):$businesss->website}}"/>
                    
            </div>
            <div class="form-group row">
                    <label class="col-sm-2" for="email">fanpage</label>
                    <input class="col-sm-10 form-control" name="fanpage" placeholder="fanpage" value="{{count($errors)?old('fanpage'):$businesss->fanpage}}"/>
                    
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Mô tả</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="description" name="description" placeholder="Text" class="form-control" value="{{count($errors)?old('description'):$businesss->description}}">
                </div>
            </div>
            <div class="card-footer">
        <button type="submit" name="add" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
    </div>
        </form>
        <a href="IndexProduct.php">
            <button class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> BACK
            </button>
        </a>
    </div>
    
</div>    
@endsection