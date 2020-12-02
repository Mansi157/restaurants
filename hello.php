<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Book table</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <!-- Main css -->
    <link rel="stylesheet" href="css1.css">
</head>
<body>
      <div class="main" style="align-items: center;">

      
               
                <div class="booking-form">
                    <form id="booking-form" action="conec.php" method="post">
                        <h2>Booking place for your dinner!</h2>
                        <div class="form-group form-input">
                            <label for="firstName">First Name</label>
                        <input type="text"  class="form-control"  id="name" name="firstName" />
                        </div>
                        <div class="form-group form-input">
                           <label for="lastName">Last Name</label>
                           <input type="text" class="form-control" id="name" name="lastName"/>
        
                        </div>
                        <div class="form-group form-input">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="name" name="email"
                        />
                        </div>
                        <div class="form-group form-input">
                            <label for="number">Phone Number</label>
                            <input type="number" class="form-control" id="phone" name="number"
                        />
                        </div>
                        <div class="form-radio">
                            <label class="label-radio"> Select Your Dining Space</label>
                            <div class="radio-item-list">
                                <span class="radio-item">
                                    <input type="radio" name="ppl" value="2" id="number_people_2" />
                                    <label for="number_people_2">2</label>
                                </span>
                                <span class="radio-item active">
                                    <input type="radio" name="ppl" value="4" id="number_people_4" checked="checked" />
                                    <label for="number_people_4">4</label>
                                </span>
                                <span class="radio-item">
                                    <input type="radio" name="ppl" value="6" id="number_people_6" />
                                    <label for="number_people_6">6</label>
                                </span>
                                <span class="radio-item">
                                    <input type="radio" name="ppl" value="8" id="number_people_8" />
                                    <label for="number_people_8">8</label>
                                </span>
                                
                            </div>
                            
                    
                            
                    
                        </div>

                        <input type="submit" value="Book now" class="submit" id="submit" name="submit" />
                    </form>
                </div>
            </div>
      

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

    </body>
</html>