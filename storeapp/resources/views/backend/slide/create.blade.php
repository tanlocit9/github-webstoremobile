@extends('backend.template')
@section('content')
<div class="main-content">
    <div class="page-header">
        <h2 class="header-title">Option</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="{{ route('home') }}" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
            </nav>
        </div>
    </div>
    @include('backend.messages.messages')
    <div class="card">
        <div class="card-body">
        <div class="m-t-25">
            <form action="{{ route('create_slide') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-8">
                        <label class="font-weight-semibold" for="dob">Thêm slide mới:</label>
                        <input type="file" name="media">
                    </div>
                    <button class="btn" type="submit">Thêm</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection