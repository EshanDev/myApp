<div class="auth check-register-data container-fluid">
    <div class="content">
        <div class="content-header">
            <div class="text-center">
                <div>ตรวจสอบความถูกต้อง</div>
            </div>
        </div>

        <div class="content-body">
            <fieldset class="rounded border custom-fieldset p-3">
                <legend class="w-auto legend">ข้อมูลนักศึกษา</legend>
                <div class="box bg-light">
                    <div class="grid-container">
                        <div class="avatar-default">
                            <img src="https://via.placeholder.com/200x250" alt="">
                        </div>
                        <div class="information-data">
                            <div class="items">ชือ/นามสกุล : {{$confirmed['student_name']}}</div>
                            <div class="items">รหัสนักศึกษา : {{$confirmed['student_code']}}</div>
                            <div class="items">สาขาที่กำลังศึกษา : {{$confirmed['student_branch']}}</div>
                            <div class="items">คณะที่กำลังศึกษา : {{$confirmed['student_faculty']}}</div>
                            <div class="items">รหัสผู้ใช้งาน : {{$confirmed['name']}}</div>
                            <div class="items">ที่อยู่อีเมล์ : {{$confirmed['student_email']}}</div>
                            <div class="items">Registration Key : {{$confirmed['registration_code']}}</div>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</div>
