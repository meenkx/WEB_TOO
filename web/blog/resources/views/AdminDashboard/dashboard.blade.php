@extends('home')

@section('content')
<!--START PAGE CONTENT -->
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="row m-0 col-border-xl">
                    <div class="col-md-12 col-lg-6 col-xl-6">
                        <div class="card-body" style="margin-top: 22px;">
                            <div class="icon-rounded icon-rounded-primary float-left m-r-20">
                                <i class="icon dripicons-graph-bar"></i>
                            </div>
                            <h5 class="card-title m-b-5 counter" data-count="{{$count}}">0</h5>
                            <h6 class="text-muted m-t-10">
                                โปรเจคทั้งหมด
                            </h6>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-6">
                        <div class="card-body">
                            <div class="icon-rounded icon-rounded-accent float-left m-r-20">
                                <i class="far fa-clock"></i>
                            </div>
                            <?php
                                $progressbar = ($project_waitaa*100)/$count;
                            ?>
                            <h5 class="card-title m-b-5 append-percent counter" data-count="{{ $progressbar }}">0</h5>
                            <h6 class="text-muted m-t-10">
                                โปรเจคที่กำลังดำเนินการ
                            </h6>
                            <div class="progress mt-4" style="height:7px;">
                                <div id="projectwait_bar" class="progress-bar bg-accent" role="progressbar" style="width: {{ $progressbar }}%"  aria-valuenow="{{ $progressbar }}" aria-valuemin="0" aria-valuemax="{{ $count }}"></div>
                            </div>
                            <small class="text-muted float-left m-t-5 mb-3">
                                เปอร์เซ็นต์
                            </small>
                            <small class="text-muted float-right m-t-5 mb-3 counter append-percent" data-count="{{ $progressbar }}">
                                0
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header">ตารางแสดงรายละเอียดโครงการ
                    <ul class="actions top-right">
                        <li><a href="javascript:void(0)" data-q-action="card-expand"><i class="icon dripicons-expand-2"></i></a></li>
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
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
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
<!--END PAGE CONTENT -->

@endsection