<div class="auth container-fluid">
    <div class="content">
        <div class="content-header">
            <div class="text-center">
                <div>ยืนยันรหัสลงทะเบียน</div>
            </div>
        </div>

        <div class="verify-coded">
            <form action="#" class="verify-coded-form">

                <!-- Form Group One -->

                <div class="group-form">
                    <fieldset class="border rounded custom-fieldset">
                        <legend class="w-auto legend">ส่วนที่ 1 รหัสยืนยันสิทธิ์</legend>
                        <div class="grid-container">
                            <div class="form-group">
                                <label for="registration_code">รหัสยืนยันสิทธิ์</label>
                                <input type="text" class="form-control" name="registration_code" value="{{ $serial }}"
                                    placeholder="กรุณากรอกรหัสยีนยีนสิทธิ์">
                            </div>
                            <div class="form-group">
                                <label for="student_code">รหัสนักศึกษา</label>
                                <input type="text" name="student_code" class="form-control" value="{{ $student_code }}"
                                    placeholder="ระบุรหัสนักศึกษา">
                            </div>

                            <div class="form-group">
                                <label for="student_email">ที่อยู่อีเมล์</label>
                                <input type="email" name="student_email" class="form-control"
                                    value="{{ $student_email }}" placeholder="ระบุที่อยู่อีเมล์">
                            </div>
                        </div>
                    </fieldset>
                </div>

                <!-- End Form Group One -->


                <!-- Form Group Two -->

                <div class="group-form">
                    <fieldset class="border rounded custom-fieldset">
                        <legend class="w-auto legend">ส่วนที่ 2 ข้อมูลนักศึกษา</legend>
                        <div class="grid-container">
                            <div class="form-group">
                                <label for="student_name">ชื่อ/สกุล</label>
                                <input type="text" name="student_name" class="form-control"
                                    value="{{ old('student_name') }}" placeholder="ชื่อ - นามสกุล">
                            </div>
                            <div class="form-group">
                                <label for="student_branch">สาขาวิชาเอก</label>
                                <input type="text" name="student_branch" value="{{ old('student_branch') }}"
                                    class="form-control" placeholder="สาขาวิชาที่กำลังศึกษา">
                            </div>

                            <div class="form-group">
                                <label for="student_faculty">คณะ</label>
                                <input type="text" class="form-control" name="student_faculy"
                                    value="{{ old('student_faculy') }}" placeholder="คณะที่กำลังศึกษา">
                            </div>

                        </div>
                    </fieldset>
                </div>

                <!-- End Form Group Two -->


                <!-- Form Group Three -->

                <div class="group-form">
                    <fieldset class="border rounded custom-fieldset">
                        <legend class="w-auto legend">ส่วนที่ 3 สร้างรหัสผู้ใช้งาน</legend>
                        <div class="grid-container">
                            <div class="form-group">
                                <label for="name">รหัสผู้ใช้งาน</label>
                                <input type="text" name="name" class="form-control" value="{{ $username }}"
                                    placeholder="กำหนดรหัสผู้ใช้งาน">
                            </div>
                            <div class="form-group">
                                <label for="password">รหัสผ่าน</label>
                                <input type="password" name="password" placeholder="กำหนดรหัสผ่านใหม่"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password-confirm">ยืนยันรหัสผ่าน</label>
                                <input type="password-confirm" name="password_confirmation"
                                    placeholder="ยืนยันรหัสผ่านอีกครั้ง" class="form-control">
                            </div>
                        </div>

                    </fieldset>
                </div>

                <!-- End Form Group Three -->

            </form>
        </div>


    </div>
</div>
