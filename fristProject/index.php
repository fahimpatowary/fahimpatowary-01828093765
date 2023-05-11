<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Job Test</title>
        
        <!-- Bootstrap links -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
        <!-- google fonts links -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <!-- fontawsome liks -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- custom css -->
        <link rel="stylesheet" href="./main.css">
    </head>

    <body>
        <!-- nav top start -->
        <div class="py-2 navtop" >
            <div class="container text-center">
                <a href="./index.php">Task 1</a>
                <a href="./Task2.php">Task 2</a>
            </div>
        </div>
        <!-- nav top end -->

        <!-- hero image start -->
        <div class="heros-img" >
          <img src="./assets/fristTask/employers-page-background.jpg" alt="">
        </div>
        <!-- hero image end -->

        <!-- page and path start -->
        <div class="bg-dark page-path p-3">
            <div class="container">
                <h2>Clients</h2>
                <ul>
                    <li>Home</li>
                    <li>></li>
                    <li>Clients</li>
                </ul>
            </div>
        </div>
        <!-- page and path end -->

        <!-- main body start -->
        <section class="main-body my-3 my-md-4 my-lg-5" >
            <div class="container">
                <div class="row d-flex flex-fixed flex-lg-row-reverse">
                    <!-- right side -->
                    <div class="col-lg-4 px-md-3 mb-3 mb-md-4">
                        <div class="right-div">
                            <div class="d-flex justify-content-between title">
                                <h4>Clients</h4>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>

                            <ul  class="mb-3 mb-md-4">
                                <li>
                                    <a href="#Post">Post your requirement</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- left side -->
                    <div class="col-lg-8">
                        <div class="mb-3 mb-md-4 mb-lg-4">
                            <h4 class="mb-3 mb-md-4 mb-lg-4">What We Offer</h4>
                            <p class="mb-0">
                                Outsourcing Management Business (OMB) has created for itself an indomitable niche in the market since 2014. Located in Muhaisnah 2, in Dubai region it has been catering to the requirements of customers in a very professional way. Our primary Business Operations include Outsourcing Management Business by providing manpower, any other service outsourcing, providing fleet and tool management to companies across UAE. Our objective is to be the Leader in the domain of Business Process Outsourcing. To support our claims with evidence, we have been diligently providing business solutions to Etisalat, a giant in Facilities Management Industry in UAE. 
                                We are a wholly owned subsidiary of Etisalat Services Holding focused on providing Manpower Supply Service. We have strong and experienced personnel with us, well versed in both blue and white collared services. Owing to all these pluses coupled with the tutelage from our patron Etisalat, we have the potential to undertake Mega and Complex projects that might require a substantial manpower and transportation services. Since claims are better substantiated with facts, we have outsourced 3783+ staff so far to various companies and 2843 staff to Etisalat alone. You ask for it and we have it! OMB works under Labor Supply License from Ministry ensuring that associating with us is a hassle-free thing for you.
                            </p>
                        </div>

                        <div id="Post" class="mb-3 mb-md-4 mb-lg-4">
                            <h4 class="mb-3 mb-md-4 mb-lg-4">Post your requirement</h4>

                            <form>
                                <div class="d-flex justify-content-between">
                                    <input type="text" placeholder="Name*" >
                                    <input type="text" placeholder="Company Name*" >
                                </div>
                                <div class="d-flex justify-content-between">
                                    <input type="text" placeholder="Business Email*" >
                                    <input type="text" placeholder="Phone Number*" >
                                </div>
                                <div class="d-flex justify-content-between">
                                    <input type="text" placeholder="Designation" >
                                    <input type="text" placeholder="Number fo Hires" >
                                </div>

                                <textarea class="mb-3 mb-md-4 mb-lg-4" name="text"  placeholder="Describe recuitment needs*">

                                </textarea>

                                <button>Sent</button>
                            </form>
                        </div>
                    </div>
                </div> 
            </div>
        </section>
        <!-- main body end -->


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>

</html>