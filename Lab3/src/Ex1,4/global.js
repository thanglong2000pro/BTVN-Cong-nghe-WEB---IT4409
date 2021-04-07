$(document).ready(function(){

    //regex for fields
    //regex for vietnamese name
    var regex_name=/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]+$/;
    var regex_password=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;
    var regex_phone=/^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;

    var name=$('#name-id');
    var phone=$('#phone-id');
    var register=$('#register');
    var password = $('#password');
    var confirm_password = $("#confirm_password");
    
//     check name input
    function validateName(){
        let regex =regex_name;
        let check=regex.test(name.val());
        console.log(check);
        if(check==false){
            name[0].setCustomValidity("Tên không đúng định dạng")
        }
    }

    // check password input
    function validatePassword(){
        let regex=regex_password;
        let check=regex.test(password.val());
        console.log(password.val());
        console.log(check);
        if(check==false){
            password[0].setCustomValidity("Password phải tối thiểu 8 ký tự, chứa chữ hoa, chữ thường và số")
        }else{
            password[0].setCustomValidity("");
        }
    }


    // check confirm password have to match password
    function validateConfirmPassword(){
        if(password.val() != confirm_password.val()) {
            confirm_password[0].setCustomValidity("Password không khớp");
        }else{
            confirm_password[0].setCustomValidity("");
        }
    }


    // check phone number input
    function validatePhoneNumber(){
        let regex=regex_phone;
        let check=regex.test(phone.val());
        if(check==false){
            phone[0].setCustomValidity("Sđt không đúng định dạng");
        }else{
            phone[0].setCustomValidity("");
        }
    }


    // set list events for input tag
    password.on('change',validatePassword);
    confirm_password.on('keyup',validateConfirmPassword);
    name.on('change',validateName);
    phone.on('change',validatePhoneNumber);

    //handle event after validate success input fields
    $(document).on("submit", "form", function(e){
        e.preventDefault();
        alert('ĐĂNG KÝ THÀNH CÔNG');
        location.reload();
        return  false;
    });
   
});