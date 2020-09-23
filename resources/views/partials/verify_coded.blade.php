<div class="auth container-fluid">
    <div class="content">
        <div class="content-header">
            <div class="text-center">
                <div>ยืนยันรหัสลงทะเบียน</div>
            </div>
        </div>

        <div class="verify-coded">
               @foreach($data as $dd)
                   {{$dd->code}}
            @endforeach
        </div>


    </div>
</div>


