<div class="auth check-register-data container-fluid">
    <div class="content">
        <div class="content-header">
            <div class="text-center">
                <div>ยืนยันความถูกต้อง</div>
            </div>
        </div>

        <div class="content-body">
                <div class="box">
                    <div class="grid-container">
                        <div class="avatar-default">
                            <img src="https://via.placeholder.com/200x250" alt="">
                        </div>
                        <div class="information-data">
                            <form action="{{route('auth.confirmed.register')}}" method="POST" autocomplete="off">
                                @csrf
                                <div class="form-group">
                                    <label for="student_name">ชื่อ/สกุล : </label>
                                    <input type="text" name="student_name" disabled value="{{$confirmed['student_name']}}">
                                </div>
                                <div class="form-group">
                                    <label for="student_code">รหัสนักศึกษา : </label>
                                    <input type="text" name="student_code" disabled value="{{$confirmed['student_code']}}">
                                </div>
                                <div class="form-group">
                                    <label for="student_branch">สาขาวิชาที่กำลังศึกษา : </label>
                                    <input type="text" name="student_branch" disabled value="{{$confirmed['student_branch']}}">
                                </div>
                                <div class="form-group">
                                    <label for="student_faculty">คณะที่กำลังศึกษา : </label>
                                    <input type="text" name="student_faculty" disabled value="{{$confirmed['student_faculty']}}">
                                </div>
                                <div class="form-group">
                                    <label for="name">รหัสผู้ใช้งาน : </label>
                                    <input type="text" name="name" disabled value="{{$confirmed['name']}}">
                                </div>
                                <div class="form-group">
                                    <label for="student_email">ที่อยู่อีเมล์ : </label>
                                    <input type="text" name="student_email" disabled value="{{$confirmed['student_email']}}">
                                </div>
                                <div class="form-group">
                                    <label for="registration_code">รหัสลงทะเบียน : </label>
                                    <input type="text" name="registration_code" id="disabledInput" disabled value="{{$confirmed['registration_code']}}">
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="grid-container">
                        <a href="{{route('auth.confirmed.register')}}" class="btn btn-success btn-lg">ยืนยันข้อมูล</a>
                        <a href="{{route('auth.edited.register')}}" class="btn btn-danger btn-lg">แก้ไขข้อมูล</a>
                    </div>

                </div>
        </div>
    </div>
</div>
