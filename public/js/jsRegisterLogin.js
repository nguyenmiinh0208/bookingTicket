if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', loadJsUser)
} else {
    loadJsUser();
}

// ============================== TÀI KHOẢN ============================

// Hàm get set cho người dùng hiện tại đã đăng nhập
function loadJsUser(){
    // checkDangKy();
    if(jQuery(".admin-container").length>0)
    {
        console.log(1000);
        // showTaiKhoan();
        capNhatThongTinUser();
    }
    getCurrentUser();
    // showTaiKhoan();
    checkTaiKhoan();
    // checkDangNhap();
    // checkDangXuat();
   



}
function getCurrentUser(onSuccess, onFail) {
    $.ajax({
        type: "POST",
        url: "http://localhost/booking/controller/xulytaikhoan.php",
        dataType: "json",
        timeout: 1500, // sau 1.5 giây mà không phản hồi thì dừng => hiện lỗi
        data: {
            request: "getCurrentUser"
        },
        success: function(data, status, xhr) {
            if(onSuccess) onSuccess(data);
        },
        error: function(e) {
            if(onFail) onFail(e);
        }
    })
}

// Hiển thị form tài khoản, giá trị truyền vào là true hoặc false
// function showTaiKhoan(show) {
//     var value = (show ? "block" : "block");
//     var div = document.getElementsByClassName('containTaikhoan')[0];
//     div.style.display = value;
// }

// Check xem có ai đăng nhập hay chưa (CurrentUser có hay chưa)
// Hàm này chạy khi ấn vào nút tài khoản trên header
function checkTaiKhoan() {
    getCurrentUser((data) => {
        if(!data) {
            // showTaiKhoan(true);
        }

    }, (error) => {
        
    })
}

//  ================================ WEB 2 =================================
function checkDangKy() {

    // function validateForm() {
     
        var username = document.forms["formDangKy"]["newUser"].value;
    
        var pass = document.forms["formDangKy"]["newPass"].value;
        var confpassword = document.forms["formDangKy"]["confNewPass"].value;
        if (username.length < 2 || username.length > 30) {
            Swal.fire({
                type: "error",
                title: "Please enter username must be lenght 2 to 30 characters!"
            })
            return false;
        }
        else if (pass == '' || pass.length < 2 || pass.length > 30) {
            Swal.fire({
                type: "error",
                title: "Please enter password must be lenght 2 to 30 characters!"
            })
            return false;
        } 
        else if (pass != confpassword) {
            Swal.fire({
                type: "error",
                title: "Please validate password again!"
            })
            return false;
        }else {

    $.ajax({
        url: "http://localhost/booking/controller/xulytaikhoan.php",
        type: "post",
        dataType: "json",
        timeout: 1500,
        data: {
            request: 'dangky',
            data_newUser: username,
            data_newPass: pass
        },
    
        success: function(kq) {
            console.log(kq);
            if(kq != null) {
                Swal.fire({
                    type: 'success',
                    title: 'Đăng kí thành công ' + kq.TaiKhoan,
                    text: 'Bạn sẽ được đăng nhập tự động',
                    confirmButtonText: 'Tuyệt'

                }).then((result) => {
                    capNhatThongTinUser();
                    // showTaiKhoan(false);
                    window.location.replace("admin.php");
                });
            }
        },
        error: function(e) {
            Swal.fire({
                type: "error",
                title: "Lỗi",
                // html: e.responseText
            });
            console.log(e.responseText)
        }
    });

    return false;
}
}

function checkDangNhap() {
    var uName = document.getElementById('username').value;
    var passWord = document.getElementById('pass').value;

    $.ajax({
        url: "http://localhost/booking/controller/xulytaikhoan.php",
        type: "post",
        dataType: "json",
        timeout: 1500,
        data: {
            request: 'dangnhap',
            data_username: uName,
            data_pass: passWord
        },
        success: function(data, status, xhr) {
            console.log(data);

            if(data != null) {
                Swal.fire({
                    type: "success",
                    title: "Đăng nhập thành công",
                    text: "Chào " + data.TaiKhoan
                })
                .then((result) => {
                    capNhatThongTinUser();

                    window.location.replace("admin.php");
                    // // showTaiKhoan(false);
                    // console.log(1800);
                });
                
            } else {
                Swal.fire({
                    type: "error",
                    title: "Tên tài khoản hoăc mật khẩu không đúng"
                });
            }
        },
        error: function(e) {
            Swal.fire({
                type: "error",
                title: "Lỗi khi đăng nhập",
                // html: e.responseText
            });
            console.log(e.responseText)
        }
    });
    return false;
}

function checkDangXuat(onSuccess) {
    Swal.fire({
        type: 'question',
        title: 'Xác nhận',
        text: 'Bạn có chắc muốn đăng xuất?',
        showCancelButton: true,
        confirmButtonText: 'Đồng ý',
        cancelButtonText: 'Hủy'

    }).then((result) => {
        if (result.value) {
            $.ajax({
                type: "POST",
                url: "http://localhost/booking/controller/xulytaikhoan.php",
                dataType: "text",
                timeout: 1500,
                data: {
                    request: 'dangxuat'
                },
                success: function(data) {
                    if(data == 'ok') {
                        Swal.fire({
                            type: "success",
                            title: "Đăng xuất thành công"
                        }).then((result) => {
                            capNhatThongTinUser();
                            
                            location.replace('login-register.php');
                        });

                        if(onSuccess) onSuccess();

                    } else {
                        Swal.fire({
                            type: "error",
                            title: "Chưa có ai đăng nhập"
                        })
                    }
                },
                error: function(e) {
                    Swal.fire({
                        type: "error",
                        title: "Có lỗi khi đăng xuất",
                        // html: e.responseText
                    })
                    console.log(e.responseText)
                }
            })
        }
    });
}

function capNhatThongTinUser() {
    getCurrentUser((data) => {
        if(!data) {
            document.getElementById("btnTaiKhoan").innerHTML = '<i class="fa fa-user"></i> _Tài khoản của bạn';
            document.getElementsByClassName("menuMember")[0].classList.add('hide');

        } else {
            document.getElementById("btnTaiKhoan").innerHTML = '<i class="fa fa-user"></i> ' + data['TaiKhoan'];
            document.getElementsByClassName("menuMember")[0].classList.remove('hide');

        }
    })
}

function addMovie() {
    var movieTitle = document.getElementById('movieTitle').value;
    var movieRelDate = document.getElementById('movieRelDate').value;
    var movieDuration = document.getElementById('movieDuration').value;
    var movieDirector = document.getElementById('movieDirector').value;
    var movieActors = document.getElementById('movieActors').value;
    var movieDescription = document.getElementById('movieDescription').value;
    var movieGenre = document.getElementById('movieGenre').value;

    $.ajax({
        url: "http://localhost/booking/api/addMovie.php",
        type: "post",
        dataType: "json",
        timeout: 1500,
        data: {
            request: 'addMovie',
            movieTitle: movieTitle,
            movieRelDate: movieRelDate,
            movieDuration: movieDuration,
            movieDirector: movieDirector,
            movieActors: movieActors,
            movieDescription: movieDescription,
            movieGenre: movieGenre
        },
        success: function(data) {
            console.log(data);
            Swal.fire({
                type: "success",
                title: "Successfully !!",
            }).then(result => {
                location.reload()
            })
        },
        error: function(e) {
            Swal.fire({
                type: "error",
                title: "FAIL",
                // html: e.responseText
            });
            console.log(e.responseText)
        }
    });
}

function deleteMovie(e) {
    var action = "delete";
    var id =e.getAttribute('data-id');
    console.log(e.getAttribute('data-id'));
    Swal.fire({
        type: 'question',
        title: 'Xác nhận',
        text: 'Bạn có chắc muốn xóa hay không?',
        showCancelButton: true,
        confirmButtonText: 'Đồng ý',
        cancelButtonText: 'Hủy'
    }).then((result) => {
        $.ajax({
            type: "POST",
            url: "http://localhost/booking/api/deleteMovie.php",
            dataType: "text",
            timeout: 1500,
            data: {
                action: 'delete',
                id: id
            },
            success: function(data) {
                // console.log(data['msg'])
                data = JSON.parse(data)
                console.log(data)
                if(data["msg"] == "success") {
                    Swal.fire({
                        type: "success",
                        title: "Xóa thành công !"
                    }).then((result) => {
                        location.reload()
                    });
                } else {
                    Swal.fire({
                        type: "error",
                        title: "Xóa thất bại"
                    })
                }
            }
        })
    })
}

function deleteShow(e) {
    var action = "delete";
    var id =e.getAttribute('data-id');
    console.log(e.getAttribute('data-id'));
    Swal.fire({
        type: 'question',
        title: 'Xác nhận',
        text: 'Bạn có chắc muốn xóa hay không?',
        showCancelButton: true,
        confirmButtonText: 'Đồng ý',
        cancelButtonText: 'Hủy'
    }).then((result) => {
        $.ajax({
            type: "POST",
            url: "http://localhost/booking/api/deleteShowMovie.php",
            dataType: "text",
            timeout: 1500,
            data: {
                action: 'delete',
                id: id
            },
            success: function(data) {
                // console.log(data['msg'])
                data = JSON.parse(data)
                console.log(data)
                if(data["msg"] == "success") {
                    Swal.fire({
                        type: "success",
                        title: "Xóa thành công !"
                    }).then((result) => {
                        location.reload()
                    });
                } else {
                    Swal.fire({
                        type: "error",
                        title: "Xóa thất bại"
                    })
                }
            }
        })
    })
}