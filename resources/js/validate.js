require('./bootstrap');


// Validation
//For Conditions System.
const condition = document.getElementById('conditions_form');
$(condition).validate({
    rules: {
        student_code: {
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



// Validator for registration system
const registration = document.getElementById('registration_form');
$(registration).validate({
    rules: {
        student_name: {
            required: true,
        },
        student_branch: {
            required: true,
        },
        student_faculty: {
            required: true,
        },
        password: {
            required: true,
        },

        password_confirmation: {
            required: true,
            equalTo: "#password",
        },
    },
    messages: {
        student_name: {
            required: "กรุณากรอกข้อมูล",
        },
        student_branch: {
            required: "กรุณากรอกข้อมูล",
        },
        student_faculty: {
            required: "กรุณากรอกข้อมูล",
        },
        password: {
            required: "กรุณาระบุรหัสผ่าน",
        },

        password_confirmation: {
            required: "กรุณากรอกข้อมูล",
            equalTo: "รหัสผ่านไม่ตรงกัน",
        },
    }
});