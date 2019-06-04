<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Correlation Between product price and its carbon footprint</title>

  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="style.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">
</head>

<body id="page-top"></body>

  <!-- Navigation  -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav" style="background-color: #99cc00 !important ">
    <div class="container">

      <a class="navbar-brand js-scroll-trigger" href="#page-top"></a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Survey</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#calculator">Calculator</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> -->

  <!-- Masthead -->
  <header class="masthead bg-primary text-white text-center" style=" background-image: url('img/bg.jpg'); background-size: cover;background-repeat: no-repeat;">
    <div class="container d-flex align-items-center flex-column">

      <!-- Masthead Avatar Image -->
      <img class="masthead-avatar mb-5" src="img/avataaars.svg" alt="">

      <!-- Masthead Heading -->
      <h1 class="masthead-heading text-uppercase mb-0">WELCOME</h1>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Masthead Subheading -->
      <p class="masthead-subheading font-weight-light mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec dui vel metus accumsan viverra eu ac mauris. Donec vel enim consectetur, volutpat turpis consequat, faucibus libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in dapibus justo. Mauris pellentesque molestie ipsum a malesuada. Proin sodales hendrerit orci vel varius. </p>
      <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
        <br>
        <a class="btn  btn-light btn-lg nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Complete the survey</a>
      </div>
    </div>
  </header>


  <?php
  if(isset($_GET['result']) && $_GET['result'] == 'true'){
   include('answers.html');
  }
  ?>

  <!-- Form Section --> 
  <section class="page-section portfolio bg-light" id="portfolio"  >
      <div class="container">


        <form class="col-lg-8 offset-lg-2" name="contactform" method="post" action="email_form.php">

        <!-- Portfolio Section Heading -->
       <h4 class="page-section-heading text-center text-uppercase text-secondary mb-0">day's meals</h4>
  
        <!-- Icon Divider -->
        <div class="divider-custom">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon">
            <i class="fas fa-star"></i>
          </div>
          <div class="divider-custom-line"></div>
        </div>
        <form class="col-lg-8 offset-lg-2">


        <p class="text-center">Can please describes your differents meals of the day as accurately as possible.</p>

        <div class="form-group">
        <label class="form-check-label" for="breakfast">Breakfast:</label>
        <textarea class="form-control" name='breakfast' id="breakfast" rows="3" ></textarea>
        </div>

        
        <div class="form-group">
        <label class="form-check-label" for="lunch">Lunch:</label>
        <textarea class="form-control" name='lunch' id="lunch" rows="3" ></textarea>
        </div>

        
        <div class="form-group">
        <label class="form-check-label" for="dinner">dinner:</label>
        <textarea class="form-control"   name='dinner' id="dinner" rows="3" ></textarea>
        </div>

        
        <div class="form-group">
        <label class="form-check-label" for="other_meal">Other meal:</label>
        <textarea class="form-control"   name='other_meal' id="other_meal" rows="3" ></textarea>
        </div>


        
       
        
        <!-- Portfolio Section Heading -->
        <h4 class="page-section-heading text-center text-uppercase text-secondary mb-0">nutrition</h4>
  
        <!-- Icon Divider -->
        <div class="divider-custom">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon">
            <i class="fas fa-star"></i>
          </div>
          <div class="divider-custom-line"></div>
        </div>
    
            <!-- QUESTION 2-->
            <div class="form-group">
                    <label class="form-question">how often do you eat meat?</label>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-check ">
                                <input  name ="meat_frequency" class="form-check-input" type="radio"  id="radio1" value="At every meal">
                                <label class="form-check-label" for="radio1">At every meal</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check ">
                                <input name ="meat_frequency" class="form-check-input" type="radio" name="inlineRadioOptions" id="radio2" value="Every day">
                                <label class="form-check-label" for="radio2">Every day</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-check ">
                                <input name ="meat_frequency"class="form-check-input" type="radio" name="inlineRadioOptions" id="radio3" value="2-5 times a week">
                                <label class="form-check-label" for="radio3">2-5 times a week</label>
                            </div>                        
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input name ="meat_frequency" class="form-check-input" type="radio" id="less_meat" value="less_meat">
                                <label  class="form-check-label" for="less_meat">less:</label>
                                <input type="text" class="form-control " id="less_meat_input" name="less_meat_input" >
                            </div>
                        </div>
                    </div>
            </div>

             <!-- QUESTION 2-->
             <div class="form-group">
                <label class="form-question">how often do you eat fish?</label>
                <div class="form-row">
                    <div class="col">
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="fish_frequency" id="every_meal_fish" value="At every meal">
                            <label class="form-check-label" for="every_meal_fish">At every meal</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="fish_frequency" id="every_day_fish" value="Every day">
                            <label class="form-check-label" for="every_day_fish">Every day</label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="fish_frequency" id="25times_fish" value="2-5 times a week">
                            <label class="form-check-label" for="25times_fish">2-5 times a week</label>
                        </div>                        
                    </div>
                    <div class="col">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fish_frequency" id="less_fish" value="less">
                            <label class="form-check-label" for="less_fish">less:</label>
                            <input type="text" class="form-control" id="less_fish_input"  name="less_fish_input" aria-describedby="emailHelp" placeholder="">
                        </div>
                    </div>
                </div>
        </div>
    
            <!-- QUESTION 3-->
            <div class="form-group">
                <label class="form-question" >Your every day breakfast contains:</label>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="milk" value="yes" name="milk">
                    <label class="form-check-label" for="milk" name="everyday_breakfast">milk</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="cereals" value="yes" name="cereals">
                    <label class="form-check-label" for="cereals" name="everyday_breakfast">Cereals</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="fruits" value="yes" name="fruits">
                    <label class="form-check-label" for="fruits" name="everyday_breakfast">Fruits</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="coffee" value="yes" name="coffee">
                    <label class="form-check-label" for="coffee" name="everyday_breakfast">Coffee</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="jelly" value="yes" name="jelly">
                    <label class="form-check-label" for="jelly" name="everyday_breakfast">Jelly</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="peanutbutter" value="yes" name="peanutbutter" >
                    <label class="form-check-label" for="peanutbutter" name="everyday_breakfast">Peanut butter</label>
                </div>
                <div class="form-check form-check-inline">
                        <label class="form-check-label" for="other">Other:</label>
                        <input id="other_breakfast"  name="other_breakfast" type="text" class="form-control" placeholder="">
                </div>
            </div>
    
           <!-- QUESTION 3-->
           <div class="form-group">
                <label for="q1" class="form-question" >What do you do for the lunch?</label>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="lunch_option" id="ownfood" value="ownfood">
                    <label class="form-check-label" for="ownfood">Bring my own food</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="lunch_option" id="cafeteria" value="cafeteria">
                    <label class="form-check-label" for="cafeteria">Eat at the cafeteria</label>
                </div>
           </div>

           <!-- QUESTION 3-->
           <div class="form-group">
              <label for="q1" class="form-question" >Have you ever tried <a href="https://impossiblefoods.com"><u>impossible food</u></a>?</label>
              <div class="form-check ">
                  <input class="form-check-input" type="radio" name="impossible_food" id="yes" value="yes">
                  <label class="form-check-label" for="yes">Yes</label>
                  <textarea class="form-control" id="impossible_experience"  name="impossible_experience"rows="3"placeholder="Describe your experience"></textarea>
              </div>
              
              <div class="form-check ">
                  <input class="form-check-input" type="radio" name="impossible_food" id="no" value="no">
                  <label class="form-check-label" for="no">No
              </div>
         </div>
    
    
           <!-- QUESTION 4 -->
           <div class="form-group">
                <label  class="form-question" >When doing your groceries, do you mind about the carbon footprint of your products?</label>
                <div class="form-check ">
                    <input type="radio" name="groceries_carbon_footprint" class="form-check-input" id="sure" value="sure">
                    <label class="form-check-label" for="sure">Yes sure</label>
                </div>
                <div class="form-check ">
                    <input type="radio" class="form-check-input" name="groceries_carbon_footprint"  id="sometimes"  value="sometimes" >
                    <label class="form-check-label" for="sometimes">Sometimes only</label>
                </div>
                <div class="form-check ">
                    <input type="radio" class="form-check-input" name="groceries_carbon_footprint"  id="no_at_all" value="no_at_all">
                    <label class="form-check-label" for="no_at_all">Not at all</label>
                </div>
           </div>

            <!-- QUESTION 1-->
            <div class="form-group">
              <label class="form-question"  for="diet_amount">how much do you spend on your diet per week?</label>
              <input type="number" class="form-control" id="diet_amount" name="diet_amount" placeholder="$$" >
            </div>

            <!-- QUESTION 1-->
            <div class="form-group">
                <label class="form-question"  for="most_expensive_product">What costs you the most when you shop for groceries?</label>
                <input type="text" class="form-control" id="most_expensive_product"  name="most_expensive_product" placeholder="Enter the name of products">
              </div>

           
      <!-- Portfolio Section Heading -->
      <h4 class="page-section-heading text-center text-uppercase text-secondary mb-0">Daily life activities</h4>
    
      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>
      <form class="col-lg-8 offset-lg-2">

      <!-- QUESTION 5 -->
      <div class="form-group">
          <label  class="form-question" for="q1">How do you come to work?</label>
          <div class="form-check ">
              <input type="radio" class="form-check-input" id="walking"  value="walking" name="transportation_type">
              <label class="form-check-label" for="walking">By walking</label>
          </div>
          <div class="form-check ">
              <input type="radio" class="form-check-input" id="cycling"  value="cycling" name="transportation_type">
              <label class="form-check-label" for="cycling">By cycling</label>
          </div>
          <div class="form-check ">
              <input type="radio" class="form-check-input" id="public_transportation" value="public_transportation" name="transportation_type"> 
              <label class="form-check-label" for="public_transportation">Using public transportation</label>
          </div>
          <div class="form-check ">
              <input type="radio" class="form-check-input" id="car" value="car"  name="transportation_type" >
              <label class="form-check-label" for="car">with my personnal car</label>
          </div>
          <div class="form-check form-check-inline">
              <label class="form-check-label" for="other_transportation">Other:</label>
              <input id="other_breakfast"  name="other_transportation" type="text" class="form-control" placeholder="">
          </div>
     </div>  

      <!-- QUESTION 6 -->
      <div class="form-group">
          <label  class="form-question"  for="q6">How many times do you practice sport per week?</label>
          <input type="number" class="form-control" id="q6" placeholder="number" name="number_sport" >
     </div>

      <!-- Portfolio Section Heading -->
      <h4 class="page-section-heading text-center text-uppercase text-secondary mb-0">Carbon footprint emission awarness</h4>
    
      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>
   

      <p class="text-center">The following quections are a quizz in which you vote for the product that you think emits the most carbon during its production. </p>
        

      <br>
          <!-- Quizz 1 -->
      <div class="form-group">
          <div class="btn-group btn-group-toggle col-sm-10 offset-sm-1" data-toggle="buttons">
              <label class="btn btn-outline-primary  btn-lg col-sm-5">
                <input type="radio" name="quizz_1" id="plastic_carrier_bag"  value="plastic_carrier_bag"> Plastic carrier bag
              </label>
              <label class="btn btn-outline-primary disabled btn-lg col-sm-2" disabled>
                <input type="checkbox" disabled>VS
              </label>
              <label class="btn btn-outline-primary btn-lg col-sm-5">
                <input type="radio" name="quizz_1" id="paper_carrier_bag" value="paper_carrier_bag" > Paper carrier bag
              </label>
          </div>
        </div>

        <br>


         <!-- Quizz 5-->
      <div class="form-group">
          <div class="btn-group btn-group-toggle col-sm-10 offset-sm-1" data-toggle="buttons">
              <label class="btn btn-outline-primary  btn-lg col-sm-5">
                <input type="radio" name="quizz_5" id="doing_dishes"  value="doing_dishes"> Doing the dishes
              </label>
              <label class="btn btn-outline-primary disabled btn-lg col-sm-2" disabled>
                <input type="checkbox" class="col-sm-1"disabled>VS
              </label>
              <label class="btn btn-outline-primary btn-lg col-sm-5">
                <input type="radio" name="quizz_5" id="bath" value="bath" > Taking a bath
              </label>
          </div>
        </div>

        <br>

           <!-- Quizz 2 -->
      <div class="form-group">
          <div class="btn-group btn-group-toggle col-sm-10 offset-sm-1" data-toggle="buttons">
              <label class="btn btn-outline-primary  btn-lg col-sm-5">
                <input type="radio" name="quizz_2" id="1kg_of_plastic"  value="1kg_of_plastic"> 1KG of plastic
              </label>
              <label class="btn btn-outline-primary disabled btn-lg col-sm-2" disabled>
                <input type="checkbox" disabled>VS
              </label>
              <label class="btn btn-outline-primary btn-lg col-sm-5">
                <input type="radio" name="quizz_2" id="1KG_of_cheese" value="1KG_of_cheese" > 1KG of cheese
              </label>
          </div>
        </div>
        <br>

          <!-- Quizz 3 -->
      <div class="form-group">
          <div class="btn-group btn-group-toggle col-sm-10 offset-sm-1" data-toggle="buttons">
              <label class="btn btn-outline-primary  btn-lg col-sm-5">
                <input type="radio" name="quizz_3" id="hamburger_restaurant"  value="hamburger_restaurant"> order a hamburger in a restaurant
              </label>
              <label class="btn btn-outline-primary disabled btn-lg col-sm-2" disabled>
                <input type="checkbox" disabled>VS
              </label>
              <label class="btn btn-outline-primary btn-lg col-sm-5">
                <input type="radio" name="quizz_3" id="1kg_trash" value="1kg_trash" > Producing 1KG of trash
              </label>
          </div>
        </div>

        <br>

          <!-- Quizz 4 -->
      <div class="form-group">
          <div class="btn-group btn-group-toggle col-sm-10 offset-sm-1" data-toggle="buttons">
              <label class="btn btn-outline-primary  btn-lg col-sm-5">
                <input type="radio" name="quizz_4" id="1KG_tomatoes"  value="1KG_tomatoes"> 1KG of tomatoes
              </label>
              <label class="btn btn-outline-primary disabled btn-lg col-sm-2" disabled>
                <input type="checkbox" class="col-sm-1"disabled>VS
              </label>
              <label class="btn btn-outline-primary btn-lg col-sm-5">
                <input type="radio" name="quizz_4" id="1kg_boiled_potatoes" value="1kg_boiled_potatoes" > 1KG of boiled potatoes
              </label>
          </div>
        </div>



        <br>
           <!-- QUESTION 6 -->
      <div class="form-group">
          <label  class="form-question"  for="email">Email (optionnal):</label>
          <input type="text" class="form-control" id="email" placeholder="enter your email"  name="email" >
     </div>


        <br>
            <button type="submit" class="btn btn-outline-primary btn-lg col-sm-4 offset-sm-4 text-center" href="email_form.php">SUBMIT</button>
        </form>
        
  
      </div>
    </section>


  <!-- Calculator Section -->
  <section class="page-section portfolio" id="calculator">
    <div class="container">

      <!-- Calculator Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Carbon Emission Calculator</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>
      
      <h3 class="text-center text-uppercase text-secondary">An expense of</h3> 
      <div id="cover-caption">
          <div id="container" class="container">
                  <div class="col-sm-2 offset-sm-5 text-center text-uppercase text-secondary">
                      <div class="info-form form inline">
                          <form action="" class="form-inlin justify-content-center">
                              <div class="form-group text-center">
                                  <input onkeyup="priceToCO2()" onchange="priceToCO2()" id="priceinput" type="number" class="form-control form-control-lg text-center" placeholder="$$">
                              </div>
                          </form>
                      </div>
                  </div>
          </div>
      </div>

      <h3 class="text-center text-uppercase ">is equivalent to</h3>
      <h1 class="text-center text-uppercase text-secondary" style="color: #99cc00 !important"id="co2value"> 0kg </h1>
      <p class="text-center text-uppercase text-secondary">of Carbon emission</p>


    </div>
  </section>


  

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white" style="background-color: #99cc00">
    <div class="container">
      <small>Copyright &copy; Your Website 2019</small>
      <p>Copyright &copy; Your Website 2019</p>
      <small>Copyright &copy; Your Website 2019</small>
      <small>Copyright &copy; Your Website 2019</small>
      <small>Copyright &copy; Your Website 2019</small>
      <small>Copyright &copy; Your Website 2019</small>
      <small>Copyright &copy; Your Website 2019</small>

    </div>
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>

  <script>
     function priceToCO2() {
      var x = document.getElementById("priceinput").value;
      if(x > 0){
        var y = Number(0.093 + 0.138*x).toFixed(2);
      }
      else{
        var y = 0;
      }
      document.getElementById("co2value").innerHTML = y + "kg";
    }

    var $firstButton = $(".first"),
        $secondButton = $(".second"),
        $input = $("input"),
        $name = $(".name"),
        $more = $(".more"),
        $yourname = $(".yourname"),
        $reset = $(".reset"),
        $ctr = $(".container");

        $firstButton.on("click", function(e){
          $(this).text("Saving...").delay(900).queue(function(){
            $ctr.addClass("center slider-two-active").removeClass("full slider-one-active");
          });
          e.preventDefault();
        });

        $secondButton.on("click", function(e){
          $(this).text("Saving...").delay(900).queue(function(){
            $ctr.addClass("full slider-three-active").removeClass("center slider-two-active slider-one-active");
            $name = $name.val();
            if($name == "") {
              $yourname.html("Anonymous!");
            }
            else { $yourname.html($name+"!"); }
          });
          e.preventDefault();
        });


// copy
  </script>

</body>
</html>
