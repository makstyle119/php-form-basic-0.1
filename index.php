<!DOCTYPE HTML>
<html>
<head>
    <!-- required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <style>
      span#select2-subject-jt-container {
        width: 260px!important;
      }
    </style>
</head>
<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form enctype="multipart/form-data"  action="insert.php" method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Name</label>
                                    <input required class="input--style-4" type="text" name="username">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input required class="input--style-4" type="password" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">CNIC</label>
                                    <input required class="input--style-4" type="tel" onKeyDown="if(this.value.length==13 && event.keyCode!=8) return false;" name="cnic">
                                </div>
                            </div>
                            <div class="input-group">
                            <label class="label">Status</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select  name="status" required onchange="getSelectValue();" id="list" >
                                    <option value="disable" disabled="disabled" selected="selected">Choose option</option>
                                    <option value="single">Single</option>
                                    <option value="marriage">Marriage</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Birthday</label>
                                    <div class="input-group-icon">
                                        <input required class="input--style-4 js-datepicker" type="text" name="date">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div required class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" value="male" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" value="female" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="name">Upload CNIC Image</div>
                                <div class="value">
                                    <div class="input-group js-input-file">
                                        <input required class="input-file"  accept="image/x-png,image/gif,image/jpeg" type="file" name="image" id="image">
                                        <!-- <label class="label--file" for="file">
                                            Choose file
                                        </label>
                                        <span class="input-file__info">
                                            No file chosen -->
                                        </span>
                                    </div>
                                <!-- <div class="label--desc">Upload your CV/Resume or any other relevant file. Max file size 50 MB</div> -->
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function getSelectValue()
        {
            let selectedValue = document.getElementById("list").value;
            // alert(selectedValue);
        }
        getSelectValue();
    </script>
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
</body>

</html>