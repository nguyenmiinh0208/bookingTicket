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
<!-- <script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script> -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

        <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
       
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
                <li class="admin-navigation-schedule"><i class="fas fa-calendar-alt"></i><a href="show.php">Show</a><i class="fas admin-dropdown fa-chevron-right"></i>
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
                <div class="admin-section-panel admin-section-stats">
                    <div class="admin-section-stats-panel">
                        <i class="fas fa-ticket-alt" style="background-color: #cf4545"></i>
                        <h2 style="color: #cf4545">100</h2>
                        <h3>Bookings</h3>
                    </div>
                    <div class="admin-section-stats-panel">
                        <i class="fas fa-film" style="background-color: #4547cf"></i>
                        <h2 style="color: #4547cf">50</h2>
                        <h3>Movies</h3>
                    </div>
                    <div class="admin-section-stats-panel">
                        <i class="fas fa-ticket-alt" style="background-color: #bb3c95"></i>
                        <h2 style="color: #bb3c95">dummy</h2>
                        <h3>Dummy</h3>
                    </div>
                    <div class="admin-section-stats-panel" style="border: none">
                        <i class="fas fa-envelope" style="background-color: #3cbb6c"></i>
                        <h2 style="color: #3cbb6c">MINHHH</h2>
                        <h3>Messages</h3>
                    </div>
                </div>
                <div class="admin-section-panel admin-section-panel1">
                    <div class="admin-panel-section-header">
                        <h2>Bookings</h2>
                        <i class="fas fa-plus" style="background-color: #4e494d"></i>
                    </div>
                    <div class="admin-panel-section-content">
                      <div class="admin-panel-section-booking-item">
                        <div class="admin-panel-section-booking-response">
                          <i class="fas fa-check accept-booking" title="Verify booking"></i>
                          <i class="fas fa-edit accept-booking" title="edit booking"></i>
                          <a href='#'><i class="fas fa-times decline-booking" title="Reject booking"></i></a>
                        </div>
                        <div class="admin-panel-section-booking-info">
                          <div>
                            <h3>Nhím Sonic</h3>
                            <i class="fas fa-circle "></i>
                            <h4>CGV GiGaMall</h4>
                            <i class="fas fa-circle"></i>
                            <h4>29-02-2020</h4>
                            <i class="fas fa-circle"></i>
                            <h4>20:00:00</h4>
                          </div>
                          <div>
                            <h4>Booking Name</h4>
                            <i class="fas fa-circle"></i>
                            <h4>Booking 01</h4>
                          </div>
                        </div>
                      </div>
                      <div class="admin-panel-section-booking-item">
                        <div class="admin-panel-section-booking-response">
                          <i class="fas fa-check accept-booking" title="Verify booking"></i>
                          <i class="fas fa-edit accept-booking" title="edit booking"></i>
                          <a href='#'><i class="fas fa-times decline-booking" title="Reject booking"></i></a>
                        </div>
                        <div class="admin-panel-section-booking-info">
                          <div>
                            <h3>Nhím Sonic</h3>
                            <i class="fas fa-circle "></i>
                            <h4>CGV GiGaMall</h4>
                            <i class="fas fa-circle"></i>
                            <h4>29-02-2020</h4>
                            <i class="fas fa-circle"></i>
                            <h4>20:00:00</h4>
                          </div>
                          <div>
                            <h4>Booking Name</h4>
                            <i class="fas fa-circle"></i>
                            <h4>Booking 01</h4>
                          </div>
                        </div>
                      </div>
                      <div class="admin-panel-section-booking-item">
                        <div class="admin-panel-section-booking-response">
                          <i class="fas fa-check accept-booking" title="Verify booking"></i>
                          <i class="fas fa-edit accept-booking" title="edit booking"></i>
                          <a href='#'><i class="fas fa-times decline-booking" title="Reject booking"></i></a>
                        </div>
                        <div class="admin-panel-section-booking-info">
                          <div>
                            <h3>Nhím Sonic</h3>
                            <i class="fas fa-circle "></i>
                            <h4>CGV GiGaMall</h4>
                            <i class="fas fa-circle"></i>
                            <h4>29-02-2020</h4>
                            <i class="fas fa-circle"></i>
                            <h4>20:00:00</h4>
                          </div>
                          <div>
                            <h4>Booking Name</h4>
                            <i class="fas fa-circle"></i>
                            <h4>Booking 01</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="admin-section-panel admin-section-panel2">
                    <div class="admin-panel-section-header">
                        <h2>Movies</h2>
                        <i class="fas fa-film" style="background-color: #4547cf"></i>
                    </div>
                    <form>
                        <input placeholder="Title" type="text" name="movieTitle" id="movieTitle" required>
                        <input placeholder="Genre" type="text" name="movieGenre" id="movieGenre" required>
                        <input placeholder="Duration" type="number" name="movieDuration" id="movieDuration" required>
                        <input placeholder="Release Date" type="date" name="movieRelDate" id="movieRelDate" required>
                        <input placeholder="Director" type="text" name="movieDirector" id="movieDirector" required>
                        <input placeholder="Actors" type="text" name="movieActors" id="movieActors"required>
                        <input type="file" name="movieImg" accept="image/*">
                        <textarea placeholder="Description" class="form-control" rows="6" id="movieDescription" name="movieDescription"></textarea>
                        <input type="button" class="form-btn" onclick="return addMovie();" value="Add Movie">
                        
                    </form>
                </div>
            </div>
            <div class="admin-section-column">
                <div class="admin-section-panel admin-section-panel4">
                    <div class="admin-panel-section-header">
                        <h2>Current movies</h2>
                        <i class="fas fa-plus" style="background-color: #4e494d"></i>
                    </div>
                    <div class="conten-curent-movie"></div>
                </div>
                <div class="admin-section-panel admin-section-panel5">
                    <div class="admin-panel-section-header">
                        <h2>Upcoming movies</h2>
                        <i class="fas fa-plus" style="background-color: #4e494d"></i>
                        
                    </div>
                    <div class="conten-upcoming-movie"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
    
    $(document).ready(function() {
      //get Current movie
      $.ajax({
        url: 'http://localhost/booking/api/getCurrentMovie.php',
        method: 'GET',
        success: function(data) {
          data = JSON.parse(data);
          var result = '';
          for (i = 0; i < data.length; i++) {
            result += '<div class="admin-panel-section-booking-item">'
                    + '<div class="admin-panel-section-booking-response">'
                    + '<i class="fas fa-check accept-booking" title="Verify booking"></i>'
                    + '<i class="fas fa-edit accept-booking" title="edit booking"></i>'//data[i]["m_id"]
                    + '<i class="fas fa-times decline-booking btn_delete" id="btn_deleteCurrentMovie" title="Reject booking" data-id="' + data[i]["m_id"] + '" onclick="return deleteMovie(this);"></i></div>'
                    + '<div class="admin-panel-section-booking-info">'
                    + '<div>'
                    + '<img src="./public/img/movie-poster-1.jpg" alt="imageMovie"/>'
                    + '<i class="fas fa-circle"></i>'
                    + '<h4>' + data[i]["m_name"] + '</h4>'
                    + '<i class="fas fa-circle"></i>'
                    + '<h4>' + data[i]["m_duration"] + ' minutes</h4>'
                    + '</div></div></div>';
          }
          $(".conten-curent-movie").html(result);
        }
      });

      //get Upcoming movie
      $.ajax({
        url: 'http://localhost/booking/api/getUpCommingMovie.php',
        method: 'GET',
        success: function(data) {
          data = JSON.parse(data);
          var result = '';
          for (i = 0; i < data.length; i++) {
            result += '<div class="admin-panel-section-booking-item">'
                    + '<div class="admin-panel-section-booking-response">'
                    + '<i class="fas fa-check accept-booking" title="Verify booking"></i>'
                    + '<i class="fas fa-edit accept-booking" title="edit booking"></i>'//data[i]["m_id"]
                    + '<i class="fas fa-times decline-booking btn_delete" id="btn_deleteCurrentMovie" title="Reject booking" data-id="' + data[i]["m_id"] + '" onclick="return deleteMovie(this);"></i></div>'
                    + '<div class="admin-panel-section-booking-info">'
                    + '<div>'
                    + '<img src="./public/img/movie-poster-1.jpg" alt="imageMovie"/>'
                    + '<i class="fas fa-circle"></i>'
                    + '<h4>' + data[i]["m_name"] + '</h4>'
                    + '<i class="fas fa-circle"></i>'
                    + '<h4>' + data[i]["m_duration"] + ' minutes</h4>'
                    + '</div></div></div>';
          }
          $(".conten-upcoming-movie").html(result);
        }
      });
    });
  </script>
</body>

</html>
