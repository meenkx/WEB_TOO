@extends('home')

@section('content')
    @include('sweetalert::alert')

    {{--config css--}}
    <style>
        .btn.btn-rounded, a:link.btn.btn-rounded{
            padding: 0px 25px !important;
        }
        .file-preview .fileinput-remove{
            top: 5px !important;
            right: 5px !important;
        }
    </style>
    @component('plugins.bootstrap-fileinput.js_css')
    @endcomponent
    {{--datapick thai--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css">
    <script src="{{asset('/plugins/bootstrap-datepicker-thai/bootstrap-datepicker-custom.js')}}"></script>
    <script src="{{asset('/plugins/bootstrap-datepicker-thai/bootstrap-datepicker.th.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.datepicker').datepicker({
                format: 'dd/mm/yyyy',
                // todayBtn: true,
                language: 'th',             //เปลี่ยน label ต่างของ ปฏิทิน ให้เป็น ภาษาไทย   (ต้องใช้ไฟล์ bootstrap-datepicker.th.min.js นี้ด้วย)
                thaiyear: true              //Set เป็นปี พ.ศ.
            })
                // .datepicker("setDate", "0");  //กำหนดเป็นวันปัจุบัน
        });
    </script>

    <section class="page-content container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form action="{{ route('UploadProjects') }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h5 class="card-header">เพิ่มโปรเจคเข้าในระบบ</h5>
                        <div class="card-body">
                            <div class="form-body">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">รหัสโครงการ</label>
                                        <div class="col-md-5">
                                            <input type="text" id="CodeNameProject" name="CodeNameProject" placeholder="นี่คือรหัสโครงการ" class="form-control" autocomplete="off" readonly>
                                        </div>
                                        <div class="col-md-1" id="valid" style="vertical-align: center;font-size: 25px;">
                                            <i class="fas fa-check-circle" style="color: #2fbfa0"></i>
                                        </div>
                                        <div class="col-md-1" id="notvalid" style="vertical-align: center;font-size: 25px;">
                                            <i class="fas fa-times-circle" style="color: #dc3545"></i>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">ชื่อโครงการ</label>
                                        <div class="col-md-5">
                                            <input type="text" id="NameProject" name="NameProject" placeholder="ชื่อโครงการ *" class="form-control" autocomplete="off" maxlength="87" required>
                                        </div>
                                        <div class="col-md-1" id="nvalid" style="vertical-align: center;font-size: 25px;">
                                            <i class="fas fa-check-circle" style="color: #2fbfa0"></i>
                                        </div>
                                        <div class="col-md-1" id="nnotvalid" style="vertical-align: center;font-size: 25px;">
                                            <i class="fas fa-times-circle" style="color: #dc3545"></i>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">ชื่อสถานที่</label>
                                        <div class="col-md-5">
                                            <input type="text" name="NameLocation" placeholder="ชื่อสถานที่ *" class="form-control" autocomplete="off" required>
                                            <small id="location" class="form-text text-muted">ที่อยู่ของโครงการนั้น ๆ</small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">รายละเอียดงาน</label>
                                        <div class="col-md-5">
                                            <input type="text" name="DetailProject" placeholder="รายละเอียดงาน *" class="form-control" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <hr class="dashed ">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">เริ่มโครงการ</label>
                                        <div class="col-md-5">
                                            <input type="text"  id="StartDateProject" name="StartDateProject" class="form-control datepicker" style="padding: .375rem .75rem;" placeholder="วัน/เดือน/ปี พ.ศ." data-date-format="mm/dd/yyyy" autocomplete="off" required >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">แผนงานสิ้นสุดโครงการ</label>
                                        <div class="col-md-5">
                                            <input type="text" id="EndDateProject" name="EndDateProject" class="form-control datepicker" style="padding: .375rem .75rem;" placeholder="วัน/เดือน/ปี พ.ศ." data-date-format="mm/dd/yyyy" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">มูลค่าของงาน</label>
                                        <div class="col-md-2">
                                            <input type="text" id="ValueProject" name="ValueProject" class="form-control" placeholder="จำนวนเงิน" autocomplete="off" required>
                                        </div>
                                        <label class="control-label text-right col-md-1" style="padding: 0px 10px;">จำนวนสตางค์</label>
                                        <div class="col-md-2">
                                            <input type="number" id="Value2Project" name="Value2Project" class="form-control" placeholder="จำนวนสตางค์" value="00" autocomplete="off" min="00" max="99" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">คู่สัญญา</label>
                                        <div class="col-md-5">
                                            <input type="text" name="NamePartner" class="form-control" placeholder="บริษัท .... จำกัด" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <hr class="dashed">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">อัพโหลดรูป</label>
                                        <div class="col-9">
                                            <div class="col-12" style="margin-left: -15px;margin-right: -15px;">
                                                <input id="UploadPicProject" name="UploadPicProject[]" type="file" class="file" multiple
                                                       data-show-upload="false" data-show-caption="true" data-msg-placeholder="Select {files} for upload..." accept=".jpg,.gif,.png,.jpeg,.svg,.bmp">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer bg-light">
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="offset-sm-3 col-md-5">
                                                <button class="btn btn-primary btn-rounded">อัพโหลด</button>
                                                <button class="btn btn-secondary clear-form btn-rounded btn-outline">ยกเลิก</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>




    <script>
        $("#UploadPicProject").fileinput({minFileCount: 0, maxFileCount: 10,previewFileType: "image",allowedFileExtensions: ["jpg", "png", "jpeg", "bmp"],});
        document.getElementsByClassName("file-drop-zone-title")[0].innerHTML = "ลาก และวางไฟล์ที่นี่... (เพื่ออัพโหลดรูปครับ)";
        document.getElementsByClassName("file-caption-name")[0].placeholder = "เลือกไฟล์สำหรับการอัปโหลด...";
    </script>
    <script>

        var randomString = function(length) {
            var text = "";
            var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
            for(var i = 0; i < length; i++) {

                text += possible.charAt(Math.floor(Math.random() * possible.length));
            }
            return text;
        };

        document.getElementById("valid").style.display = "none";
        document.getElementById("notvalid").style.display = "none";
        document.getElementById("nvalid").style.display = "none";
        document.getElementById("nnotvalid").style.display = "none";
        $("#NameProject").on('keyup', function(){
            var nameproject = $(this).val();
            // random string length
            var random = randomString(nameproject.length);
            var codeproject = "st-"+random;

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'POST',
                url:'/api/CheckCodeProject',
                data:{CodeNameProject:codeproject,NameProject:nameproject},
                success:function(data){
                    if(nameproject.length != 0 ) {
                        document.getElementById("CodeNameProject").placeholder = codeproject;
                        document.getElementById("CodeNameProject").value = codeproject;
                        document.getElementById("valid").style.display = "block";
                        document.getElementById("notvalid").style.display = "none";
                        document.getElementById("nvalid").style.display = "block";
                        document.getElementById("nnotvalid").style.display = "none";
                        $("#CodeNameProject").addClass("is-valid");
                        $("#NameProject").addClass("is-valid");
                        // console.log(data);
                    }
                    else if(nameproject.length == 0 ){
                        $("#CodeNameProject").removeClass("is-valid");
                        $("#CodeNameProject").removeClass("is-invalid");
                        $("#NameProject").removeClass("is-valid");
                        $("#NameProject").removeClass("is-invalid");
                        document.getElementById("valid").style.display = "none";
                        document.getElementById("notvalid").style.display = "none";
                        document.getElementById("nvalid").style.display = "none";
                        document.getElementById("nnotvalid").style.display = "none";
                        document.getElementById("CodeNameProject").placeholder = "นี่คือรหัสโครงการ";
                        document.getElementById("NameProject").placeholder = "ชื่อโครงการ *";
                    }
                },
                error:function(data){
                    if(nameproject.length != 0 ){
                        document.getElementById("CodeNameProject").placeholder = codeproject;
                        document.getElementById("valid").style.display = "none";
                        document.getElementById("notvalid").style.display = "block";
                        document.getElementById("nvalid").style.display = "none";
                        document.getElementById("nnotvalid").style.display = "block";
                        $("#CodeNameProject").addClass("is-invalid");
                        $("#NameProject").addClass("is-invalid");
                    }
                    else if(nameproject.length == 0 ){
                        $("#CodeNameProject").removeClass("is-valid");
                        $("#CodeNameProject").removeClass("is-invalid");
                        $("#NameProject").removeClass("is-valid");
                        $("#NameProject").removeClass("is-invalid");
                        document.getElementById("valid").style.display = "none";
                        document.getElementById("notvalid").style.display = "none";
                        document.getElementById("nvalid").style.display = "none";
                        document.getElementById("nnotvalid").style.display = "none";
                        document.getElementById("CodeNameProject").placeholder = "นี่คือรหัสโครงการ";
                        document.getElementById("NameProject").placeholder = "ชื่อโครงการ *";
                    }
                }
            });


        });
        $("#ValueProject").on('keyup', function(){
            var n = parseInt($(this).val().replace(/\D/g,''),10);
            $(this).val(n.toLocaleString());
            if($(this).val() == 'NaN'){
                $(this).val(0);
            }
        });
    </script>

@endsection