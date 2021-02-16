@extends('layouts.admin')

@section('content-title','Pengelolaan Situs')

@section('content')
<div class="container">
    @foreach ($website as $websites)
    <h6 style="text-align: center; font-weight: bold;">
        Informasi Situs
    </h6>
    <hr>
    <div class="forms">
        <div class="form-group row" style="padding-top: 10px;">
            <label for="about" style="font-size: 15px; width: 150px; padding: 5px"> Tentang Restoran </label>
            <div class="col-md-8">
                <textarea class="form-control" name="about" readonly> {{ $websites->about }} </textarea>
            </div>
        </div>
    </div>
    <hr>
    <h6 style="text-align: center; font-weight: bold;">
        Header Situs
    </h6>
    <hr>
    <div class="forms">
        <div class="form-group row" style="padding-top: 10px;">
            <label for="description" style="font-size: 15px; width: 150px; padding: 5px;"> Deskripsi </label>
            <div class="col-md-8">
                <textarea class="form-control" name="description" readonly>{{ $websites->description }}</textarea>
            </div>
        </div>
    </div>
    <hr>
    <h6 style="text-align: center; font-weight: bold;">
        Informasi Kontak
    </h6>
    <hr>
    <div class="forms" style="display: grid; grid-template-columns: 1fr 1fr;">
        <div class="form-group row" style="padding-top: 10px;">
            <label for="email" style="font-size: 15px; width: 120px; padding: 5px"> Email </label>
            <div class="col-md-8">
                <input class="form-control" name="email" value="{{ $websites->email }}" readonly>
            </div>
        </div>
        <div class="form-group row" style="padding-top: 10px;">
            <label for="email" style="font-size: 15px; width: 120px; padding: 5px"> Nomor Telp </label>
            <div class="col-md-8">
                <input class="form-control" name="email" value="{{ $websites->phone }}" readonly>
            </div>
        </div>
        <div class="form-group row" style="padding-top: 10px;">
            <label for="email" style="font-size: 15px; width: 120px; padding: 5px"> Instagram </label>
            <div class="col-md-8">
                <input class="form-control" name="email" value="{{ $websites->instagram }}" readonly>
            </div>
        </div>
    </div>
    <a href="{{ route('admin.website.edit', $websites) }}">
        <button type="submit" class="btn btn-secondary" style="margin-top:20px; font-size: 15px;">
            Sunting Situs
        </button>
    </a>
    @endforeach
</div>
@endsection