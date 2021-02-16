@extends('layouts.admin')

@section('content')
<div class="container">
    <form action="{{ route('admin.home.update', $home) }}" method="POST" style="padding-top: 10px;">
        @csrf
        {{ method_field('PUT') }}
        <div class="row justify-content-center">
            <h6 style="font-weight: bold;"> Sunting Beranda <br></h6>
            <div class="notice container" style="padding: 5%;">
                <hr>
                <h6 style="text-align: center;"> Jam Kerja </h6>
                <hr>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" class="table-secondary" style="text-align: center;"> Hari </th>
                            <th scope="col" class="table-secondary" style="text-align: center;"> Jam </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align: center;"> Senin </td>
                            <td style="text-align: center;"> <input class="form-control" type="text" name="monday" value="{{ $home->monday }}" style="font-size: 13px;"> </td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"> Selasa </td> 
                            <td style="text-align: center;"> <input class="form-control" type="text" name="tuesday" value="{{ $home->tuesday }}" style="font-size: 13px;"> </td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"> Rabu </td>
                            <td style="text-align: center;"> <input class="form-control" type="text" name="wednesday" value="{{ $home->wednesday }}" style="font-size: 13px;"> </td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"> Kamis </td>
                            <td style="text-align: center;"> <input class="form-control" type="text" name="thursday" value="{{ $home->thursday }}" style="font-size: 13px;"> </td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"> Jumat </td>
                            <td style="text-align: center;"> <input class="form-control" type="text" name="friday" value="{{ $home->friday }}" style="font-size: 13px;"> </td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"> Sabtu </td>
                            <td style="text-align: center;"> <input class="form-control" type="text" name="saturday" value="{{ $home->saturday }}" style="font-size: 13px;"> </td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"> Minggu </td>
                            <td style="text-align: center;"> <input class="form-control" type="text" name="sunday" value="{{ $home->sunday }}" style="font-size: 13px;"> </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <hr>
                <h6 style="text-align: center;"> Pengumuman </h6>
                <hr>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td style="text-align: center;"> <input class="form-control" type="text" name="notice" value="{{ $home->notice }}" style="font-size: 13px;"> </td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-secondary" style="margin-top: 50px"> Simpan </button>
            </div>
        </div>
    </form>
</div>
@endsection