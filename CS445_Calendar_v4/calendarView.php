<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['username'])){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Calendar</title>
    
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
              integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
        <div class="col text-right">
            <div class="row pt-4 pr-5">
                <div class="col">
                    <h1> Hello, <?php echo $_SESSION['username']; ?> </h1>                    
                </div>
                <div class="col-auto">
                    <a href="#" onclick="window.location.replace('./login.html');" type="button" class="btn btn-secondary">Logout</a>
                </div>
            </div>                     
        </div>
    </head>
    
    <body style="background-image: url('./img/back.jpg'); background-size: cover; background-repeat: no-repeat; width:100%">
    <div class="container col-sm-4 col-md-7 col-lg-4 mt-5" style="float:left">
        <div class="card">
            <h3 class="card-header" id="monthAndYear"></h3>
            <table class="table table-bordered table-responsive-sm" id="calendar">
                <thead>
                <tr>
                    <th>Sun</th>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sat</th>
                </tr>
                </thead>
    
                <tbody id="calendar-body">
    
                </tbody>
            </table>
    
            <div class="form-inline">
                <button class="btn btn-outline-primary col-sm-6" id="previous" onclick="previous()">Previous</button>
                <button class="btn btn-outline-primary col-sm-6" id="next" onclick="next()">Next</button>
            </div>
            <br/>
            <form class="form-inline">
                <label class="lead mr-2 ml-2" for="month">Jump To: </label>
                <select class="form-control col-sm-4" name="month" id="month" onchange="jump()">
                    <option value=0>Jan</option>
                    <option value=1>Feb</option>
                    <option value=2>Mar</option>
                    <option value=3>Apr</option>
                    <option value=4>May</option>
                    <option value=5>Jun</option>
                    <option value=6>Jul</option>
                    <option value=7>Aug</option>
                    <option value=8>Sep</option>
                    <option value=9>Oct</option>
                    <option value=10>Nov</option>
                    <option value=11>Dec</option>
                </select>
    
                <label for="year"></label><select class="form-control col-sm-4" name="year" id="year" onchange="jump()">
                <option value=1990>1990</option>
                <option value=1991>1991</option>
                <option value=1992>1992</option>
                <option value=1993>1993</option>
                <option value=1994>1994</option>
                <option value=1995>1995</option>
                <option value=1996>1996</option>
                <option value=1997>1997</option>
                <option value=1998>1998</option>
                <option value=1999>1999</option>
                <option value=2000>2000</option>
                <option value=2001>2001</option>
                <option value=2002>2002</option>
                <option value=2003>2003</option>
                <option value=2004>2004</option>
                <option value=2005>2005</option>
                <option value=2006>2006</option>
                <option value=2007>2007</option>
                <option value=2008>2008</option>
                <option value=2009>2009</option>
                <option value=2010>2010</option>
                <option value=2011>2011</option>
                <option value=2012>2012</option>
                <option value=2013>2013</option>
                <option value=2014>2014</option>
                <option value=2015>2015</option>
                <option value=2016>2016</option>
                <option value=2017>2017</option>
                <option value=2018>2018</option>
                <option value=2019>2019</option>
                <option value=2020>2020</option>
                <option value=2021>2021</option>
                <option value=2022>2022</option>
                <option value=2023>2023</option>
                <option value=2024>2024</option>
                <option value=2025>2025</option>
                <option value=2026>2026</option>
                <option value=2027>2027</option>
                <option value=2028>2028</option>
                <option value=2029>2029</option>
                <option value=2030>2030</option>
            </select></form>
        </div>
    </div>
    <div class="col bg-white rounded p-3 pl-4" style="overflow-y:scroll; width:65%; margin:10px">
        <button class="btn btn-primary" onclick="window.location.replace('./eventInput.php')">New Event</button>
        <button class="btn btn-secondary" style="background-color: red; color: white;" onclick="removeEvent()">Remove Event</button>
        <div class="pt-2 pb-3">
                <div class="row pt-2">
                    <div class="col-3">
                    <h1> <?php $conn = mysqli_connect('localhost','root','','calendar');  
                        $sql = "SELECT * FROM events WHERE eventId = '1' ";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) === 1){
                            $row = mysqli_fetch_assoc($result);
                            echo $row['eventDate'];}
                        else{echo"";} ?> </h1>
                    </div>
                    <div class="col">
                    <h1> <?php $conn = mysqli_connect('localhost','root','','calendar');  
                        $sql = "SELECT * FROM events WHERE eventId = '1' ";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) === 1){
                            $row = mysqli_fetch_assoc($result);
                            echo $row['eventTitle'];}
                        else{echo"";} ?> </h1>                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col">
                    <h1> <?php $conn = mysqli_connect('localhost','root','','calendar');  
                        $sql = "SELECT * FROM events WHERE eventId = '1' ";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) === 1){
                            $row = mysqli_fetch_assoc($result);
                            echo $row['eventDesc'];}
                        else{echo"";} ?> </h1>    
                    </div>
                </div>
            </div>
    
            <div class="pt-2 pb-3">
                <div class="row pt-2">
                    <div class="col-3">
                    <h1> <?php $conn = mysqli_connect('localhost','root','','calendar');  
                        $sql = "SELECT * FROM events WHERE eventId = '2' ";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) === 1){
                            $row = mysqli_fetch_assoc($result);
                            echo $row['eventDate'];}
                        else{echo"";} ?> </h1>
                    </div>
                    <div class="col">
                    <h1> <?php $conn = mysqli_connect('localhost','root','','calendar');  
                        $sql = "SELECT * FROM events WHERE eventId = '2' ";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) === 1){
                            $row = mysqli_fetch_assoc($result);
                            echo $row['eventTitle'];}
                        else{echo"";} ?> </h1>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col">
                    <h1> <?php $conn = mysqli_connect('localhost','root','','calendar');  
                        $sql = "SELECT * FROM events WHERE eventId = '2' ";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) === 1){
                            $row = mysqli_fetch_assoc($result);
                            echo $row['eventDesc'];}
                        else{echo"";} ?> </h1>
                    </div>
                </div>
            </div>
    
            <div class="pt-2 pb-3">
                <div class="row pt-2">
                    <div class="col-3">
                    <h1> <?php $conn = mysqli_connect('localhost','root','','calendar');  
                        $sql = "SELECT * FROM events WHERE eventId = '3' ";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) === 1){
                            $row = mysqli_fetch_assoc($result);
                            echo $row['eventDate'];}
                        else{echo"";} ?> </h1>
                    </div>
                    <div class="col">
                    <h1> <?php $conn = mysqli_connect('localhost','root','','calendar');  
                        $sql = "SELECT * FROM events WHERE eventId = '3' ";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) === 1){
                            $row = mysqli_fetch_assoc($result);
                            echo $row['eventTitle'];}
                        else{echo"";} ?> </h1>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col">
                    <h1> <?php $conn = mysqli_connect('localhost','root','','calendar');  
                        $sql = "SELECT * FROM events WHERE eventId = '3' ";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) === 1){
                            $row = mysqli_fetch_assoc($result);
                            echo $row['eventDesc'];}
                        else{echo"";} ?> </h1>
                    </div>
                </div>
            </div>
    
            <div class="pt-2 pb-3">
                <div class="row pt-2">
                    <div class="col-3">
                    <h1> <?php $conn = mysqli_connect('localhost','root','','calendar');  
                        $sql = "SELECT * FROM events WHERE eventId = '4' ";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) === 1){
                            $row = mysqli_fetch_assoc($result);
                            echo $row['eventDate'];}
                        else{echo"";} ?> </h1>
                    </div>
                    <div class="col">
                    <h1> <?php $conn = mysqli_connect('localhost','root','','calendar');  
                        $sql = "SELECT * FROM events WHERE eventId = '4' ";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) === 1){
                            $row = mysqli_fetch_assoc($result);
                            echo $row['eventTitle'];}
                        else{echo"";} ?> </h1>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col">
                    <h1> <?php $conn = mysqli_connect('localhost','root','','calendar');  
                        $sql = "SELECT * FROM events WHERE eventId = '4' ";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) === 1){
                            $row = mysqli_fetch_assoc($result);
                            echo $row['eventDesc'];}
                        else{echo"";} ?> </h1>
                    </div>
                </div>
            </div>
    
            <div class="pt-2 pb-3">
                <div class="row pt-2">
                    <div class="col-3">
                    <h1> <?php $conn = mysqli_connect('localhost','root','','calendar');  
                        $sql = "SELECT * FROM events WHERE eventId = '5' ";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) === 1){
                            $row = mysqli_fetch_assoc($result);
                            echo $row['eventDate'];}
                        else{echo"";} ?> </h1>
                    </div>
                    <div class="col">
                    <h1> <?php $conn = mysqli_connect('localhost','root','','calendar');  
                        $sql = "SELECT * FROM events WHERE eventId = '5' ";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) === 1){
                            $row = mysqli_fetch_assoc($result);
                            echo $row['eventTitle'];}
                        else{echo"";} ?> </h1>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col">
                    <h1> <?php $conn = mysqli_connect('localhost','root','','calendar');  
                        $sql = "SELECT * FROM events WHERE eventId = '5' ";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) === 1){
                            $row = mysqli_fetch_assoc($result);
                            echo $row['eventDesc'];}
                        else{echo"";} ?> </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    
    <script src="scripts.js"></script>
    </body>
    </html>

    <?php
}else{
    header("location: login.html");
    exit();
}
?>
    


