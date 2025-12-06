<!-- dddddddd -->

<!DOCTYPE html>

<html>
    <head>
        <link rel = "stylesheet" href="css/bootstrap.css">
        <title> Saran </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Barriecito&family=Bungee+Spice&family=Titan+One&display=swap" rel="stylesheet">
        <style>
            body{
                font-family: "Titan One", sans-serif;
                background-image: url("https://miro.medium.com/v2/resize:fit:640/format:webp/1*OAXivevUVDA6ddtq-7jwVw.gif");
                background-size: cover;      /* ให้ภาพเต็มจอ */
                background-repeat: no-repeat; /* ไม่ให้วนซ้ำ */
                background-attachment: fixed; /* เลื่อนหน้า แต่พื้นหลังอยู่กับที่ */
                color: #ffffffff;

                text-shadow: 
                -2px -2px 0 #000, /* บนซ้าย */
                 2px -2px 0 #000, /* บนขวา */
                -2px  2px 0 #000, /* ล่างซ้าย */
                 2px  2px 0 #000; /* ล่างขวา */
                
            }
        </style>
    </head>

    <body>
        <div class="container mt-4">
            <h1>Workshop #HTML - FORM</h1>
            <hr></hr>
            <form>
                <!--- Name--->
                <div class="row mb-3 align-items-center">
                    <div class="col-sm-1">
                        <label for="fname" >Name</label>
                    </div>
                    <div class="col-sm-3">
                        <input id="fname" name="fname" type="text" class="form-control">
                    </div>
                </div>

                <!---SurName--->
                <div class="row mb-3 align-items-center">
                    <div class="col-sm-1">
                        <label for="Sname" >Surname</label>
                    </div>
                    <div class="col-sm-3">
                        <input id="Sname" class="form-control">
                    </div>
                </div>

                <!---BirthDay--->
                <div class="row mb-3 align-items-center">
                    <div class="col-sm-1">
                        <label for="birthday">Birthday</label>
                    </div>
                    <div class="col-sm-3">
                        <input id="birthday" name="birthday" type="date" class="form-control">
                    </div>
                </div>

                <!---Gender--->
                <div class="row mb-3 align-items-center">
                    <div class="col-sm-1">
                        <label for="favcolor">Gender</label>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
                            <label class="form-check-label" for="radioDefault1"> Male </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2" checked>
                            <label class="form-check-label" for="radioDefault2"> Female </label>
                        </div>
                    </div>
                </div>
                

                <!---Image--->
                <div class="row mb-3 align-items-center">
                    <div class="col-sm-1">
                        <label for="myfile">Image</label>
                    </div>
                    <div class="col-sm-3">
                        <input  type="file" id = "myfile" name= "myfile" >
                    </div>
                </div>

                <!--Address-->
                <div class="row mb-3 align-items-center">
                    <div class="col-sm-1">
                        <label for="address">Address</label>
                    </div>
                    <div class="col-sm-3">
                        <textarea id="address" name="address" rows="3" class="form-control"></textarea>
                    </div>
                </div>
                
                <!--Color-->
                <div class="row mb-3 align-items-center">
                    <div class="col-auto">
                        <label for="favcolor">Faverite Color</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="color" id="favcolor" name="favcolor" class="form-control form-control-color">
                    </div>
                </div>
                
                <!--Music-->
                <div class="row mb-3 align-items-center">
                    <div class="col-auto">
                        <label for="favcolor">Music Class</label>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-check1 form-check-inline">
                            <input class="form-check1-input" type="radio" name="radioDefault1" id="radioDefault1">
                            <label class="form-check1-label" for="radioDefault1"> String </label>
                        </div>
                        <div class="form-check1 form-check-inline">
                            <input class="form-check1-input" type="radio" name="radioDefault1" id="radioDefault2" checked>
                            <label class="form-check1-label" for="radioDefault2"> Pop </label>
                        </div>
                        <div class="form-check1 form-check-inline">
                            <input class="form-check1-input" type="radio" name="radioDefault1" id="radioDefault3" checked>
                            <label class="form-check1-label" for="radioDefault3"> Etc.</label>
                        </div>
                    </div>
                </div>

                <!--CheckBox-->
                <div class="Check mb-3">
                    <input class="Check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="Check-label" for="defaultCheck1"> ยินดีให้เก็บข้อมูล </label>
                </div>

                <!--Success-->
                <div class="row mb-3 align-items-center">
                    <div class="col-auto">
                        <button type="submit" class="btn btn-success" value = "submit">Success</button>
                    </div>
                    <div class="col-sm-3">
                        <button type="reset" class="btn btn-light" value = "reset">Reset</button>
                    </div>
                </div>
        
            </form>


        </div>

    </body>
</html>