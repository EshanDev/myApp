<div class="auth container-fluid">
    <div class="content">
        <div class="content-header">
            <div class="text-center">
                <div>ยืนยันรหัสลงทะเบียน</div>
            </div>
        </div>

        <div class="verify-coded">
            <form action="#" class="verify-coded-form">
                <div class="group-form">
                    <fieldset class="border rounded custom-fieldset">
                        <legend class="w-auto legend">ส่วนที่ 1 รหัสยืนยันสิทธิ์</legend>
                        <div class="grid-container">
                            <div class="form-group">
                                <label for="registration_code">รหัสยืนยันสิทธิ์</label>
                                <input type="text" class="form-control" name="registration_code" id="registration_code"
                                    value="{{ old('registration_code') }}" placeholder="กรุณากรอกรหัสยีนยีนสิทธิ์">
                            </div>
                            <div class="form-group">
                                <label for="student_code">รหัสนักศึกษา</label>
                                <input type="text" name="student_code" id="student_code" class="form-control"
                                    value="{{ $student_code }}" placeholder="ระบุรหัสนักศึกษา">
                            </div>

                            <div class="form-group">
                                <label for="student_email">ที่อยู่อีเมล์</label>
                                <input type="email" name="student_email" id="student_email" class="form-control"
                                    value="{{ $student_email }}" placeholder="ระบุที่อยู่อีเมล์">
                            </div>
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>


    </div>
</div>