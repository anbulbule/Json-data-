<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row p-5">
            <div class="col d-flex justify-content-center">
                <div class="col-10">
                    <div class="text-center bg-primary text-light">
                        <h3>Student form</h3>
                    </div>
                    <form action="fetch_data_from_form.php" class="form-group bg-light" method="post">
                        <div class="row">
                            <div class="col-md-3 py-md-3 py-1 col-lg-2 d-flex">
                                <label for="fname">Student Name :</label>
                            </div>
                            <div class="col-md-9 col-lg-10 d-flex py-md-3 py-2">
                                <input type="text" class="form-control" id="fname" name="fname">
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-md-3 py-md-3 py-1 col-lg-2 d-flex">
                                <label for="education">Education :</label>
                            </div>
                            <div class="col-md-9 col-lg-10 d-flex py-md-3 py-2">
                                <!-- <input type="text" class="form-control" id="city" name="city"> -->
                                <select name="education" id="education" class="form-control">
                                    <option value="">Select Education</option>
                                    <option value="B.Tech">B.Tech</option>
                                    <option value="B.Com">B.Com</option>
                                    <option value="B.Ed">B.Ed</option>
                                    <option value="B.C.A">B.C.A</option>
                                    <option value="B.B.A">B.B.A</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3 py-md-3 py-1 col-lg-2 d-flex">
                                <label for="city">City :</label>
                            </div>
                            <div class="col-md-9 col-lg-10 d-flex py-md-3 py-2">
                                <input type="text" class="form-control" id="city" name="city">
                            </div>
                        </div>
                        
                        <div class="row">
                           <div class="col d-flex justify-content-center">
                           <div class="col-2  text-center">
                                <input type="submit" class=" btn btn-primary form-control">
                            </div> 
                           </div>   
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>