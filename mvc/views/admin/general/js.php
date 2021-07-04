    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo URL ."mvc/Assets/admin/vendor/jquery/jquery.min.js"?>"></script>
    <script src="<?php echo URL ."mvc/Assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"?>"></script>
   
    <!-- Core plugin JavaScript-->
    <script src="<?php echo URL ."mvc/Assets/admin/vendor/jquery-easing/jquery.easing.min.js"?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo URL ."mvc/Assets/admin/js/sb-admin-2.min.js"?>"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Validator({
            form: '#form-1',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#firstname', 'Vui lòng nhập họ của bạn!'),
                Validator.isRequired('#lastname', 'Vui lòng nhập tên của bạn!'),
                Validator.isRequired('#phoneNumber', 'Vui lòng nhập số điện thoại!'),
                Validator.isPhoneNumber('#phoneNumber', 'Số máy quý khách vừa nhập là số không có thực!'),
                Validator.isRequired('#email', 'Vui lòng nhập email!'),
                Validator.isEmail('#email'),
                Validator.isRequired('#password', 'Vui lòng nhập password!'),
                Validator.minLength('#password', 6),
            ],
            onSubmit: (data) => {
                console.log(data)
            }
        })
        Validator({
            form: '#form-2',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#firstname', 'Vui lòng nhập họ của bạn!'),
                Validator.isRequired('#lastname', 'Vui lòng nhập tên của bạn!'),
                Validator.isRequired('#phoneNumber', 'Vui lòng nhập số điện thoại!'),
                Validator.isPhoneNumber('#phoneNumber', 'Số máy quý khách vừa nhập là số không có thực!'),
                Validator.isRequired('#email', 'Vui lòng nhập email!'),
                Validator.isEmail('#email'),
                Validator.isRequired('#password', 'Vui lòng nhập password!'),
                Validator.minLength('#password', 6),
            ],
            onSubmit: (data) => {
                console.log(data)
            }
        })
    })
    

