<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>New Visit</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style3.css">

</head>

<body>
    <section class=" visit ">
        <div class="container">
            <h2>Create Visit</h2>
            <div class="row">
                <div class="img col-md-6">
                    <img src="imgs/undraw_timeline_re_aw6g.svg">
                </div>
                <form class="col-md-6">
                    <input class="form-control form-control-lg" type="text" name="fname" value="Abdelrahman"
                        placeholder="Firts Name" disabled>
                    <input class="form-control form-control-lg" type="text" name="lname" value="Ahmed"
                        placeholder="Last Name" disabled>
                    <input class="form-control form-control-lg" type="text" name="mrn" value="ABD$23654"
                        placeholder="MRN" disabled>
                    <div class="dises">
                        <input type="radio" name="dis" value="Intensive">
                        <label>Intensive care</label>
                        <input type="radio" name="dis" value="Thoracic">
                        <label>Thoracic</label>
                        <input type="radio" name="dis" value="x_ray">
                        <label>x_ray place</label>
                        <input type="radio" name="dis" value="lab">
                        <label>lab</label>
                        <input type="radio" name="dis" value="Dental">
                        <label>Dental clinic</label>
                        <input type="radio" name="dis" value="bone">
                        <label>bone</label>
                        <input type="radio" name="dis" value="emergency">
                        <label>emergency and operations</label>
                        <input type="radio" name="dis" value="obesity">
                        <label>obesity and nutrition</label>
                        <input type="radio" name="dis" value="Cardiac">
                        <label>Cardiac examination unit</label>
                        <input type="radio" name="dis" value="Obstetrics">
                        <label>Obstetrics and Gynecology</label>
                    </div>
                    <input type="date" class="form-control">
                    <a class="back-main" href="index.php">Back to Main Page...</a>
                    <input class="back-main createVisit" type="submit" name="CreatVisit " value="Create New Visit...">
                </form>
            </div>
        </div>
    </section>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/file.js"></script>
</body>

</html>