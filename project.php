<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Few projects done by me">
    <link rel="shortcut icon" href="./asset/icon/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Atma' rel='stylesheet'>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/nav.css">
    <link rel="stylesheet" href="./style/footer.css">
    <title>Projects</title>
    <style>
        .projects{
            padding: 50px 0;
        }
        .projects .description{
            font-size: 17px;
        }
        .carousel .carousel-item {
            height: 500px;
        }

        .carousel-item img {
            position: absolute;
            object-fit:100% 70%;
            top: 0;
            left: 0;
            min-height: 500px;
            width: 90%;
        }
        iframe{
            width: 100%;
            height: 70vh;
        }
    </style>
</head>
<body>

    <?php include './includes/html/nav.html'; ?>

	<section class="projects">
        <div class="container">
            <h3 class="section-heading text-center">Jharkhand Covid-19 Report</h3>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="./asset/about.svg" alt="First slide" width="100%" height="100%">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="./asset/boy.svg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="./asset/project.svg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <i class="fa fa-chevron-left text-dark" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <i class="fa fa-chevron-right text-dark" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div>
                <iframe src="https://jharkhand-covid19-report.netlify.app/" width="100%" frameborder="0"></iframe>
            </div>

            <div class="description mt-3">
                <p class="px-5 text-center">
                    Jharkhand Coronavirus update with statistics and graphs: total and new cases, deaths per day, mortality and recovery rates, current active cases, recoveries, trends and timeline
                </p>
                <center><button class="btn btn-success">Visit</button></center>
            </div>
        </div>
    </section>

    <section class="projects">
        <div class="container"></div>
    </section>


    <?php include './includes/html/footer.html'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./script/scrollButton.js"></script>
    <script src="./script/subscribe.js"></script>
    
</body>
</html>