<?php
    include_once 'includes/dbh.php';

    $temp = "";
    $light = "";
    $humidity = "";
?>

<head>
  <meta name="viewport" content="with=device-width, initial-scale=1.0">
  <title>Personality webpage</title>
  <link rel="stylesheet" href="personalitycss1.css" type="text/css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
    rel="stylesheet">

  <script src="https://kit.fontawesome.com/c24fd50db6.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php
    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn , $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
            $temp = $row['temp'];
            $light = $row['lightLevel'];
            $humidity = $row['waterLevel'];
        }
    }
?>

  <section class='header'>
    <nav>
      <!--<a href="personalitywp.html"><img src="personalityimages/istockphoto-1224500457-612x612.jpg"></a>-->
      <!-- <div class="nav-links">
        <div class="navlinks1">
          <ul>
            <li><a class="lih" href="index.php">HOME</a></li>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <li><a class="li1" href="project1.php">PLANT 1</a></li>
            <li><a class="li2" href="project2.php">PLANT 2</a></li>
            <li><a class="li3" href="project3.php">PLANT 3</a></li>
            <li><a class="li4" href="project4.php">PLANT 4</a></li>
            <li><a class="li5" href="project5.php">PLANT 5</a></li>
          </ul>
        </div> -->


      </div>

    </nav>



    <div class="text-box">
      <h1>
        PottedPal
      </h1>
    </div>



  </section>
  <!--photo section-->
  

  <body>
    

    <main>
      <div class="svjpart">
        <!-- Content goes here -->
        <div class="forinlineflex">
          <h1>Water</h1>

          <svg width="300" height="300" viewBox="-6.5 -3 50 50" class="circle-svg" stroke="#6f6fff" fill="white">>

            <circle cx="18" cy="18.15" r="20" />

            <path class="around" stroke-dasharray="100, 100"
              d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>

            <path class="percent" stroke-dasharray="<?php echo $humidity ?>, 100"
              d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>



            <!--<img x="18" y="14" text-anchor="middle" dy="7" font-size="20">3/10</img>-->
            <image href="images/plantpotanim1.png" alt="Girl in a jacket" x="6" y="5.5" image-anchor="middle" dy="7"
              width="25" height="25" />
            <!--<text x="18" y="14" text-anchor="middle" dy="7" font-size="20"></text>-->
            
          </svg>
          <h2><?php echo $humidity ?>%</h2>
        </div>
        <div class="forinlineflex">
          <h1>Temperature</h1>
          <svg width="300" height="300" viewBox="-6.5 -3 50 50" class="circle-svg" stroke="#6f6fff" fill="white">>

            <circle cx="18" cy="18.15" r="20" />

            <path class="around" stroke-dasharray="100, 100"
              d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>

            <path class="percent" stroke-dasharray="<?php echo $temp ?>, 100"
              d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>



            <!--<img x="18" y="14" text-anchor="middle" dy="7" font-size="20">3/10</img>-->
            <image href="images/plantpotanim1.png" alt="Girl in a jacket" x="6" y="5.5" image-anchor="middle" dy="7"
              width="25" height="25" />
            <!--<text x="18" y="14" text-anchor="middle" dy="7" font-size="20"></text>-->

          </svg>
          <h2><?php echo $temp ?>°C</h2>
        </div>
        <div class="forinlineflex">
          <h1>Light</h1>
          <svg width="300" height="300" viewBox="-6.5 -3 50 50" class="circle-svg" stroke="#6f6fff" fill="white">>

            <circle cx="18" cy="18.15" r="20" />

            <path class="around" stroke-dasharray="100, 100"
              d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>

            <path class="percent" stroke-dasharray="<?php echo $light ?>, 100"
              d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>



            <!--<img x="18" y="14" text-anchor="middle" dy="7" font-size="20">3/10</img>-->
            <image href="images/plantpotanim1.png" alt="Girl in a jacket" x="6" y="5.5" image-anchor="middle" dy="7"
              width="25" height="25" />
            <!--<text x="18" y="14" text-anchor="middle" dy="7" font-size="20"></text>-->

          </svg>
          <h2><?php echo $light ?>%</h2>
        </div>
      </div>



      <!--<img src="images/plantpotanim.png" alt="Girl in a jacket" width="100" height="100">
      
      smartplanter, animated, cartoon style, thick lines, hand drawn --ar 10:20
    
    a bunch of smartplanters next to each other, animated, cartoon style, hand drawn --ar 30:12-->
    </main>
    <section class="campus">
      <!--<h1> Extra Info Project</h1>
      <p>why, how and experience or what i learned</p>-->
      <div class="row">
        <div class="campus-col">
          <img src="images/plantpotbackground.jpg" alt="">
          <div class="layer">
            <h3>Water<br><?php echo $humidity ?>%</h3>
            <p>
              Watering is a critical aspect of caring for the Exquisite Miniature Fern, as it directly impacts the plant's well-being and growth. Adequate water supply serves several essential purposes, including hydration, nutrient absorption, temperature regulation, and root development.

Proper watering ensures that the Exquisite Miniature Fern remains hydrated, helping to maintain turgidity in its cells and preventing wilting or drooping foliage. Water is necessary for the plant's metabolic processes, including photosynthesis and nutrient transport, enabling it to grow and thrive.

In addition to hydration, watering allows the plant to absorb essential nutrients effectively. When water is applied to the soil, it dissolves minerals and nutrients, making them available to the plant's roots. These nutrients are vital for the plant's overall health, supporting various physiological functions and promoting robust growth.
            </p>
          </div>
        </div>

        <div class="campus-col">
          <img src="images/plantpotbackground2.jpg" alt="">
          <div class="layer">
            <h3>Temperature<br><?php echo $temp ?>°C</h3>
            <p>
              Maintaining the ideal temperature is crucial for the Exquisite Miniature Fern's optimal growth and well-being. This small houseplant requires specific temperature conditions to thrive and exhibit its full beauty.

The Exquisite Miniature Fern thrives in moderate temperatures typically found in indoor environments. Ideally, it prefers temperatures ranging from 60°F to 75°F (15°C to 24°C). These temperature ranges provide the optimal conditions for the plant's metabolic processes and overall health.

Consistent temperature plays a vital role in the plant's physiological functions, including photosynthesis, respiration, and nutrient absorption. The right temperature allows the Exquisite Miniature Fern to efficiently convert light energy into chemical energy, fueling its growth and development.

Extreme temperatures can adversely affect the plant. If exposed to temperatures below 50°F (10°C), the Exquisite Miniature Fern may experience chilling injury, resulting in leaf discoloration, wilting, and even plant death. Conversely, temperatures above 85°F (29°C) can cause heat stress, leading to wilting, scorching of leaves, and reduced growth.
            </p>
          </div>
        </div>

        <div class="campus-col">
          <img src="images/plantpotbackground4.jpg" alt="">
          <div class="layer">
            <h3>Light<br><?php echo $light ?>%</h3>
            <p>
              Proper light exposure is essential for the Exquisite Miniature Fern to thrive and maintain its lush appearance. This small houseplant has specific light requirements that play a significant role in its growth, photosynthesis, and overall health.

The Exquisite Miniature Fern prefers bright, indirect light. It thrives in areas with moderate to high levels of light but benefits from protection against direct sunlight. Placing the plant near a north or east-facing window is ideal, as it allows for sufficient light exposure without subjecting the plant to intense, direct rays.

Light is essential for the Exquisite Miniature Fern's photosynthetic process. Through photosynthesis, the plant converts light energy into chemical energy, fueling its growth and development. Insufficient light can result in stunted growth, pale or yellowing foliage, and a weakened overall appearance.

While the Exquisite Miniature Fern requires light, it is important to avoid exposing it to direct sunlight. Intense, direct sunlight can scorch the plant's delicate leaves, leading to leaf burn and damage. Indirect light, on the other hand, provides the right balance of brightness without causing harm.
            </p>
          </div>
        </div>
      </div>

    </section>
    <section>
      <video class="displaymain" src="personalityimages/Sequence 01.mp4" controls>
        <source src="movie.mp4" type="video/mp4">
      </video>
    </section>

    <!--course-->
    <section class="course">

      <h1>
      Miniature Fern
      </h1>
      <p>
        Introducing the Exquisite Miniature Fern:

The Exquisite Miniature Fern, scientifically known as Nephrolepis exquisita, is a small houseplant that effortlessly adds a touch of elegance to any space. the Exquisite Miniature Fern is ideal for small apartments, dormitories, or office desks where space may be limited. Its finely divided leaves create a graceful and feathery appearance, instantly enhancing the natural beauty of your surroundings.

When it comes to lighting, the Exquisite Miniature Fern thrives in moderate to bright indirect light. It can adapt to lower light conditions, making it suitable for rooms with limited sunlight. However, direct sunlight should be avoided to prevent leaf scorching and damage.

Maintaining proper moisture levels is essential for this houseplant. The Exquisite Miniature Fern prefers consistently moist soil, but overwatering should be avoided. Check the top inch of soil and water when it feels slightly dry to the touch. Remember to provide proper drainage to prevent waterlogged roots.

This small fern requires minimal fertilization. During its active growing season in spring and summer, you can use a diluted general-purpose houseplant fertilizer at half strength to provide necessary nutrients. As autumn arrives, the plant enters a dormant phase, requiring reduced watering and no fertilization.

Aside from its aesthetic appeal, the Exquisite Miniature Fern also contributes to cleaner air quality. Like other ferns, it naturally purifies the surrounding air by absorbing pollutants, making it a beneficial addition to any indoor environment.

The versatility of the Exquisite Miniature Fern allows for various display options. Whether placed in a hanging basket, on a tabletop, or as part of a terrarium, this small houseplant adds a touch of greenery and serenity to any setting.


      </p>


    </section>
    
    <section class="cta">
      <h1>
        Done here?
      </h1>
      <a href="project2.html" class="hero-btn">EXTRA INFO</a>


    </section>
    <section class="footer">
      <div class="icons">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-linkedin"></i>
      </div>
      <p>Made by</p><i>Dion Riviere</i>
    </section>
  </body>