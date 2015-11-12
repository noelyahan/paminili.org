function Login() {


}
var login = new Login();

Login.init = function() {
    Login.baseURL = "";
    Login.bindEvents();
    Login.initElements();

}
Login.initElements = function() {
    $("#errorLoginText").hide();

}
Login.bindEvents = function() {
    $("#loginBtn").unbind('click');
    $("#loginBtn").click(Login.authenticateUser);
    $("#passwordText").focus(Login.textFocus);
    $("#userNameText").focus(Login.textFocus);

}
Login.textFocus=function(){
    $("#errorLoginText").hide();
}

Login.authenticateUser = function() {

    var url = Login.baseURL + 'login/';
    var userName = $("#userNameText").val();
    var password = $("#passwordText").val();


    var data = {
        userName: userName,
        password: password,
    }

    $.ajax({
        type: "POST",
        url: url,
        data: data,
        success: Login.onSuccess,
        error: Login.onError,
        async: true
    });

}
Login.onSuccess = function(data) {
    window.location.replace(Login.baseURL + '');
}
Login.onError = function(data) {
    $("#errorLoginText").show();
}