@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h6 style="font-weight: bold;"> Selamat Datang {{ Auth::user()->name }}! <br></h6>
        <div class="notice container" style="padding: 5%;">
            <hr>
            <h6 style="text-align: center;"> Jam Kerja </h6>
            <hr>
            @foreach ($home as $homes)
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
                        <td style="text-align: center;"> {{ $homes->monday }} </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;"> Selasa </td>
                        <td style="text-align: center;"> {{ $homes->tuesday }} </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;"> Rabu </td>
                        <td style="text-align: center;"> {{ $homes->wednesday }} </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;"> Kamis </td>
                        <td style="text-align: center;"> {{ $homes->thursday }} </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;"> Jumat </td>
                        <td style="text-align: center;"> {{ $homes->friday }} </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;"> Sabtu </td>
                        <td style="text-align: center;"> {{ $homes->saturday }} </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;"> Minggu </td>
                        <td style="text-align: center;"> {{ $homes->sunday }} </td>
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
                        <td style="text-align: center;"> {{ $homes->notice }} </td>
                    </tr>
                </tbody>
            </table>
            @can('superadmin')
            <a href="{{ route('admin.home.edit', $homes) }}">
                <button type="submit" class="btn btn-secondary" style="margin-top:20px; font-size: 15px;">
                    Sunting Situs
                </button>
            </a>
            @endcan
            @endforeach
        </div>
    </div>

</div>
@endsection