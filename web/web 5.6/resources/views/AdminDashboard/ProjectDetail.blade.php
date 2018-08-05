@extends('home')

@section('content')
    @include('sweetalert::alert')
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
    <section class="page-content container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form action="/EditProjects/{{ $name }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h5 class="card-header">แก้ใข โปรเจคเข้าในระบบ</h5>
                        <div class="card-body">
                            <div class="form-body">
                                @foreach($Detail as $Details)
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">รหัสโครงการ</label>
                                    <div class="col-md-5">
                                        <input type="text" id="CodeNameProject" name="CodeNameProject" placeholder="นี่คือรหัสโครงการ" class="form-control" autocomplete="off" value="{{ $Details->CodeName }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">ชื่อโครงการ</label>
                                    <div class="col-md-5">
                                        <input type="text" id="NameProject" name="NameProject" placeholder="ชื่อโครงการ *" class="form-control" autocomplete="off" value="{{ $Details->name }}" maxlength="87" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">ชื่อสถานที่</label>
                                    <div class="col-md-5">
                                        <input type="text" name="NameLocation" placeholder="ชื่อสถานที่ *" class="form-control" autocomplete="off" value="{{ $Details->location }}">
                                        <small id="location" class="form-text text-muted">ที่อยู่ของโครงการนั้น ๆ</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">รายละเอียดงาน</label>
                                    <div class="col-md-5">
                                        <input type="text" name="DetailProject" placeholder="รายละเอียดงาน *" class="form-control" autocomplete="off" value="{{ $Details->project_details }}">
                                    </div>
                                </div>
                                <hr class="dashed ">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">เริ่มโครงการ</label>
                                    <div class="col-md-5">
                                        <input type="text" id="StartDateProject" name="StartDateProject" class="form-control datepicker" style="padding: .375rem .75rem;" placeholder="{{ $Details->start_project }}" data-date-format="mm/dd/yyyy" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">แผนงานสิ้นสุดโครงการ</label>
                                    <div class="col-md-5">
                                        <input type="text" id="EndDateProject" name="EndDateProject" class="form-control datepicker" style="padding: .375rem .75rem;" placeholder="{{ $Details->end_project }}" data-date-format="mm/dd/yyyy" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">มูลค่าของงาน</label>
                                    <div class="col-md-2">
                                        <input type="text" id="ValueProject" name="ValueProject" class="form-control" placeholder="จำนวนเงิน" autocomplete="off" value="{{ $money1 }}">
                                    </div>
                                    <label class="control-label text-right col-md-1" style="padding: 0px 10px;">จำนวนสตางค์</label>
                                    <div class="col-md-2">
                                        <input type="number" id="Value2Project" name="Value2Project" class="form-control" placeholder="จำนวนสตางค์" autocomplete="off" min="00" max="99" value="{{ $money2 }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">คู่สัญญา</label>
                                    <div class="col-md-5">
                                        <input type="text" name="NamePartner" class="form-control" placeholder="บริษัท .... จำกัด" autocomplete="off" value="{{ $Details->partner }}">
                                    </div>
                                </div>
                                <hr class="dashed">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">อัพโหลดรูป</label>
                                    <div class="col-9">
                                        <div class="col-12" style="margin-left: -15px;margin-right: -15px;">
                                            <input id="EditPicProject" name="EditPicProject[]" type="file" class="file" multiple
                                                   data-show-upload="false" data-show-caption="true" data-msg-placeholder="Select {files} for upload..." accept=".jpg,.gif,.png,.jpeg,.svg,.bmp" >
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="card-footer bg-light">
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="offset-sm-3 col-md-5">
                                                <button type="submit" class="btn btn-primary btn-rounded">อัพโหลด</button>
                                                <button type="button" class="btn btn-secondary clear-form btn-rounded btn-outline"  onclick="window.location.href = '{{ route('DetailProject') }}'">ย้อนกลับ</button>
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
        $name0 = '{{ $name }}';
        $name = '{{ $Details->CodeName }}';
        var meta_token = $('meta[name="csrf-token"]').attr('content');

        function getpic(ProjectName){
            var image;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'GET',
                url:'/api/PicProfile/'+ProjectName,
                data:{},
                success:function(data){
                    image  = data.image;

                },
                async: false // <- this turns it into synchronous
            });
            return image[0];
        }

        function caption(ProjectName){
            var caption;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'GET',
                url:'/api/GetPicCaption/'+ProjectName,
                data:{},
                success:function(data){
                    caption  = data.caption;
                },
                async: false // <- this turns it into synchronous
            });
            return caption[0];
        }

        $json_preview_pic = getpic($name);
        $json_preview_caption = caption($name);
        var imageg = [];
        var imaggs = [];
        if(!$json_preview_caption.length == 0){
            for (var i=0;i<$json_preview_caption.length;i++){
                imageg[i] = {caption: $json_preview_caption[i], size: '827000', width: '120px' , url: '/api/delete-image/'+$name0+'/'+$json_preview_caption[i] ,key: $json_preview_caption[i]};
                imaggs.push(imageg[i]);
            }
        }
        $("#EditPicProject").fileinput({
            // uploadUrl: "/file-upload-batch/1",
            uploadAsync: true,
            uploadExtraData: meta_token,
            minFileCount: 0,
            maxFileCount: 15,
            overwriteInitial: false,
            initialPreview: $json_preview_pic,
            initialPreviewAsData: true, // identify if you are sending preview data only and not the raw markup
            initialPreviewFileType: 'image', // image is the default and can be overridden in config below
            initialPreviewConfig: imaggs,
            purifyHtml: true, // this by default purifies HTML data for preview
        });

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

        $("#NameProject").on('keyup', function(){
            var nameproject = $(this).val();
            // random string length
            var random = randomString(nameproject.length);
            var codeproject = "st-"+random;
            document.getElementById("CodeNameProject").placeholder = codeproject;
            document.getElementById("CodeNameProject").value = codeproject;
        });

        $("#ValueProject").on('keyup', function(){
            var n = parseInt($(this).val().replace(/\D/g,''),10);
            $(this).val(n.toLocaleString());
            if($(this).val() == 'NaN'){
                $(this).val(0);
            }
        });
        document.getElementsByClassName("file-drop-zone-title")[0].innerHTML = "ลาก และวางไฟล์ที่นี่... (เพื่ออัพโหลดรูปครับ)";
        document.getElementsByClassName("file-caption-name")[0].placeholder = "เลือกไฟล์สำหรับการอัปโหลด...";
    </script>

    {{--<script>--}}
        {{--var dat1 = '{{ $Details->start_project }}';--}}
        {{--var event1 = new Date(dat1);--}}
        {{--console.log(event1.toLocaleDateString('th-TH'));--}}
        {{--// document.getElementById("StartDateProject").value = event1.toLocaleDateString('th-TH');--}}
        {{--var dat2 = '{{ $Details->end_project }}';--}}
        {{--var event2 = new Date(dat2);--}}
        {{--console.log(event2.toLocaleDateString('th-TH'));--}}
        {{--// document.getElementById("EndDateProject").value = event1.toLocaleDateString('th-TH');--}}
    {{--</script>--}}
@endsection