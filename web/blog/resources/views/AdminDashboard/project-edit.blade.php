@extends('home')

@section('content')
    @include('sweetalert::alert')

    <section class="page-content container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card" style="overflow: auto">
                    <div class="card-header">ตารางแสดงรายละเอียดโครงการ
                        <ul class="actions top-right">
                            <li><a href="#" data-q-action="card-expand"><i class="icon dripicons-expand-2"></i></a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="recent-transaction-table" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th style="width: 270px">ชื่อโครงการ</th>
                                    <th>สถานที่ตั้งโครงการ</th>
                                    <th style="width: 65px">วันเริ่มโครงการ</th>
                                    <th style="width: 65px">วันสิ้นสุดโครงการ</th>
                                    <th>มูลค่างาน</th>
                                    <th>คู่สัญญา</th>
                                    <th>รายละเอียดโครงการ</th>
                                    <th class="no-sort">Control</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($project as $projects)
                                    <tr role="row">
                                        <td class="sorting_1" style="width: 270px">{{ $projects->name }}</td>
                                        <td>{{ $projects->location }}</td>
                                        <td style="width: 65px">{{ $projects->start_project }}</td>
                                        @if(!$projects->end_project)
                                            <td style="width: 65px"><span class="badge badge-pill badge-warning">ยังไม่สินสุดโครงการ</span></td>
                                        @else
                                            <td style="width: 65px">{{ $projects->end_project }}</td>
                                        @endif
                                        <td>{{ $projects->job_value }}</td>
                                        <td>{{ $projects->partner }}</td>
                                        <td>{{ $projects->project_details }}</td>
                                        <td>
                                            <button class="btn btn-primary" data-qt-block=".block-el" style="width: 90px;margin: 5px" onclick="window.location.href='/detail-project/{{ $projects->CodeName }}'">Edit</button>
                                            <button class="btn btn-danger" data-qt-block=".block-el" style="width: 90px;margin: 5px" onclick="window.location.href='/delete-project/{{ $projects->name }}/{{ $projects->CodeName }}'">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection