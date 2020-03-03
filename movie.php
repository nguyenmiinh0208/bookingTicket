<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="icon" type="image/png" href="./public/img/logo.png">
    <script src="./public/js/jsRegisterLogin.js"></script>
    <link rel="stylesheet" href="./public/styles/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
       
    </head>

<body>
    <div class="admin-section-header">
        <div class="admin-logo">
            CINEMA
        </div>
        <div class="admin-login-info">
            <i class="far fa-bell admin-notification-button"></i>
            <i class="far fa-comment-alt"></i>
            <div class="member">
              <a onclick="checkTaiKhoan()" id="btnTaiKhoan"  href="#"><i class="fa fa-user"></i>_My Account </a>
              <div class="menuMember hide">
                <a onclick="checkDangXuat();">Đăng xuất</a>
              </div> 
            </div>
            <!-- <a href="#">Welcome, Admin</a> -->
            <img class="admin-user-avatar" src="./public/img/avatar.png" alt="">
        </div>
    </div>
    <div class="admin-container">
        <div class="admin-section admin-section1 ">
            <ul>
                <li><i class="fas fa-sliders-h"></i><a href="admin.php">Dashboard </a><i class="fas admin-dropdown fa-chevron-right"></i></li>
                <li><i class="fas fa-ticket-alt"></i><a href="">Bookings</a> <i class="fas admin-dropdown fa-chevron-right"></i></li>
                <li class="admin-navigation-schedule"><i class="fas fa-calendar-alt"></i>Schedule <i
                        class="fas admin-dropdown fa-chevron-right"></i>
                </li>
                <ul class="admin-navigation-schedule-dropdwn hidden-div">
                    <li>View Schedule</li>
                    <li>Edit Schedule</li>
                </ul>
                <li><i class="fas fa-film"></i><a href="movie.php">Movies </a><i class="fas admin-dropdown fa-chevron-right"></i></li>
            </ul>
        </div>
        <div class="admin-section admin-section2">
            <div class="admin-section-column">
                <div class="movie-item admin-section-panel admin-section-panel1" id="movie-item">
                    <div class="admin-panel-section-header">
                        <h2>LIST DATA</h2>
                        <i class="fas fa-plus" style="background-color: #4e494d"></i>
                    </div>
                    <div class="movie-list"></div>
                </div>
            </div>
            
        </div>
    </div>
    <script>
      $(document).ready(function() {
        $.ajax({
          url:'http://localhost/booking/api/getAllMovie.php',
          method:'GET',
          success:function(data) {
            data = JSON.parse(data);
            var result = '';
            result += '<table class="table table-bordered"><thead class="thead-dark"><tr>'
                    + '<th width="30%" scope="col">TÊN PHIM</th>'
                    + '<th width="20%" scope="col">THỂ LOẠI</th>'
                    + '<th width="30%" scope="col">NGÀY KHỞI CHIẾU</th>'
                    + '<th width="30%" scope="col">THỜI LƯỢNG</th></tr>'
                    + '<th width="30%" scope="col"></th></tr></thead>';
        
            for (i = 0; i < data.length; i++) {
              result += '<tbody><tr><th scope="row" data-name="' + data[i]["m_id"]+ '"><a href="#">' + data[i]["m_name"] + '</a></th>'
                      + '<td class="name-result" data-genre="' + data[i]["m_id"]+ '" contenteditable>' + data[i]["m_genre"] + '</td>'
                      + '<td class="date-result" data-date="' + data[i]["m_id"]+ '" contenteditable>' + data[i]["m_releaseDate"] + '</td>'
                      + '<td class="duration-result" data-date="' + data[i]["m_id"]+ '" contenteditable>' + data[i]["m_duration"]  + ' minutes</td>'
                      + '<td><button type="button" name="btn_delete" data-id="'+data[i]["m_id"]+'" class="btn btn-primary btn_deleteMovie" onclick="return deleteMovie(this);">DELETE</button></td></tr></tbody>'
              ;
            }
            result += '</tbody></table>'
            $(".movie-list").html(result);
          }
        })
      })
    </script>
    

</body>

</html>