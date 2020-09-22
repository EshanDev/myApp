<div class="auth container-fluid">
    <div class="conditions-form">
        <div class="form-header">
            <div class="text-center">กรอกข้อมูลเพื่อรับรหัสยืนยันสิทธิ์การลงทะเบียน</div>
        </div>
        <form action="#" class="form" id="conditions_form">
            <div class="group-form">
                <div class="form-group">
                    <label for="student_code">ระบุรหัสนักศึกษา</label>
                    <input type="text" class="form-control" name="student_code" id="student_code">
                </div>
                <div class="form-group">
                    <label for="student_email">ระบุที่อยู่อีเมล์</label>
                    <input type="email" class="form-control" name="student_email" id="student_email">
                </div>
            </div>
            <div class="form-footer">
                <div class="form-group">
                    <input type="submit" class="btn btn-secondary" value="ส่งรหัสยืนยันสิทธิ์">
                </div>
            </div>
        </form>

    </div>
</div>

@section('script')
    <script>
        var validator = $('#conditions_form').validate({
           rules: {
               student_code : {
                   required: true,
               },
               student_email: {
                   required: true,
               }
           },
            messages: {
               student_code: {
                   required: "กรุณากรอกรหัสนักศึกษา",
               },
                student_email: {
                   required: "กรุณากรอกที่อยู่อีเมล์",
                },


            },

        });
    </script>
@endsection