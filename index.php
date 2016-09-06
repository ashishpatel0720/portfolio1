<?php
  // google analytics
 // include_once("analytics.php");

  // color changer
  function adjust_color($hex, $steps) {
    $r = hexdec(substr($hex, 0, 2));
    $g = hexdec(substr($hex, 2, 2));
    $b = hexdec(substr($hex, 4, 2));

    $r = max(0, min(255, $r + $steps));
    $g = max(0, min(255, $g + $steps));
    $b = max(0, min(255, $b + $steps));

    $r_hex = str_pad(dechex($r), 2, '0', STR_PAD_LEFT);
    $g_hex = str_pad(dechex($g), 2, '0', STR_PAD_LEFT);
    $b_hex = str_pad(dechex($b), 2, '0', STR_PAD_LEFT);

    return $r_hex . $g_hex . $b_hex;
  }

  // generate random color
  $colors = array("E96A7D", "FF7575", "FF9900", "FEAE02", "EDC951", "7DCE9E", "61D2D6", "CC8099");
  $c = $colors[array_rand($colors)];
  $d = adjust_color($c, -10);
  $s = file_get_contents("styles/style.css");
  $s = str_replace("abcdef", $c, $s);
  $s = str_replace("fdecba", $d, $s);
?>

<!doctype html><head>
  
    <title>Ashish patel | Personal Page</title>
      
    



  <noscript>
      <div id="noscript">Looks like you don't have Javascript enabled&mdash;what's up with that?</div>
      <style type="text/css">
        * { visibility: hidden; }
        #noscript {
          visibility: visible !important;
          margin: 10px;
        }
      </style>
      </noscript>
      <!--<link rel="stylesheet" type="text/css" href="styles/style.css" />-->
    <style type="text/css">
      <?php echo $s; ?>
    .auto-style1 {
	font-family: Andalus;
    }
    </style>
     <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" type="text/css">
  
<!--    FAVICON STYLES -->
<link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favicons/apple-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicons//favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicons//favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicons//favicon-16x16.png">
<link rel="manifest" href="favicons//manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="favicons//ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<!--FAVICON STYLE ENDS-->
  
   
  </head>
  <body>
    <div id="top"></div>
    <div id="wrapper">
      <div id="header">
        <div id="title">
            <h1><a href="http://ashishpatel.xyz"><img src="assets/images/AP.png" width="300px" height="180px"></a></h1>
<!--          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="auto-style1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;ashishpatel.xyz</span></p>
       --> </div>
        <div id="navigation">
         <a href="#home">home</a>
         <a href="#about">about</a>
         <a href="#resume">r&eacute;sum&eacute;</a>
         <a href="#work">work</a>
         <a href="#contact">contact</a>
        </div>
      </div>
      <div id="main">
          <div id="home_section"style="background:">
              <h3 id="headline" >while True:<br>&nbsp;&nbsp;&nbsp;&rarr;&nbsp;&nbsp;pass</h3>
              <p id="subtitle">&rarr; It's not at all important to get it right the first time. It's vitally important to get it right the last time. <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Andrew Hunt and David Thomas
</p>
        </div>
    
          <div id="about_section">
               
          <div id="about_main">
            <h2>me</h2>
            <div class="tldr">
              <p>Student at MANIT studying computer science. In love with design, technology, programming and sports.</p>
            </div>
            <h2>I really dig ...</h2>
            <ul class="list">
               <li>competetive programming</li><br>
              <li>mathematics</li><br>
              <li>logic puzzles</li><br>
              <li>designing</li><br>
              <li>web technologies</li><br>
             
            </ul>
          </div>
          <div id="about_img">
            <img src="assets/images/me.jpg" />
          </div>
        </div>
        <div id="resume_section">
          <div class="download"><a href="assets/resume.pdf">&#8595; Download PDF</a></div>
          <div id="resume_first">
              <h2>Technical Experience</h2>
               <h3>Web Developer</h3>
                <h4>tiktown.com</h4>
                <h5>july 2016 - now</h5>
                <p>A startup focused on providing Books and Other stuff on rent to people which they could <br>
                    able to return in a particular time consuming some amount they have paid.    
                    <br><br>
                    you can check the website  <a href="http://tiktown.com"><em>here</em> </a>
                </p>
              <h3>Project Head</h3>
                <h4>Moodle - online assignment system</h4>
                <h5>Jan 2016 - March 2016</h5>
                <p>Team head and coded  front end &  back end (PHP/MySql using Prodeural Oriented PHP) components for this project .
                    <br><br> you can get the whole project at <a href="http://github.com/ashishpatel0720/moodle"><em>here</em></a>
                </p>
              <h3>PHP developer</h3>
              <h4>Minor Project about <a href="https://en.wikipedia.org/wiki/CAPTCHA">CAPTCHA</a> validation</h4>
                <h5>Feb 2016 - March 2016</h5>
                <p>Developed backend for developing components of validation for
                <ul>
                    <li>image captcha</li>
                    <li>identipic captcha</li>
                    <li>puzzle captcha</li>
                 </ul>
                    you can get the whole project at <a href="http://github.com/ashishpatel0720/mycaptcha"><em>here</em></a>
                </p>
             
            <h2>Toolbox</h2>
              <ul class="list">
                  <span style="font-size:20px; color:lightcoral">Advanced</span><br><br>
            
                    <li>C++</li>
                    <li>Java</li>
                    <li>PHP</li>
                    <br>  <span style="font-size:20px; color:lightcoral">Intermediate</span><br><br>
            <li>C</li>
                <li>MySql</li>
                <li>SQL</li>
                   <li>HTML</li>
                <li>CSS</li>
           
               
                
                <br>  <span style="font-size:20px; color:lightcoral">Beginner</span><br><br>
               <li>Python</li>
                <li>Javascript</li>
                <li>Photoshop</li>
                <li>BASH Shell</li>
                <li>LINUX</li>
                <li>Git</li>
                <li>Wordpress</li>
               
                 
               
                </ul>
          </div>
          <div id="resume_second">
            <h2>Education</h2>
              <h3>Maulana Azad National Institute of Technology,Bhopal</h3>
                <h4>B.Tech. in Computer Science</h4>
                <h5>expected May 2018</h5>
<!--                <a href="" id="courses_link">Hover for coursework</a>
               --> <div class="courses">
                  <ul>
                    <li>CS50: Intro to Computer Science</li>
                    <li>CS51: Abstraction and Design</li>
                    <li>CS171: Visualization</li>
                    <li>CS61: Systems Programming</li>
                    <li>CS121: Theory of Computation</li>
                    <li>STAT110: Probability</li>
                    <li>CS124: Data Structures and Algorithms</li>
                    <li>CS181: Machine Learning</li>
                    <li>CS187: Computational Linguistics</li>
                  </ul>
                </div>
              <h3>IPS Academy, Bhind </h3>
                <h4>Higher Secondary in May 2013</h4>
                <span>90.2 Percent </span>
                <p><strong>&rarr;</strong>State Merit Scholar(in Top 1 percent of Student).</p>
                <h3>IPS Academy, Bhind </h3>
                <h4>High School in May 2011</h4>
                <span>83.4 Percent </span>
           
                <h2>Activities</h2>
                
                 <h3>Wildlife Article Competition</h3>
                <p>Article on Effects of Industrialisation on Wildlife<br><strong>&rarr;</strong>2nd Prize</p>
                 <h3>School Represantative for Debate</h3>
                <p>Debate on 'School Bags Burden or Boon'<br><strong>&rarr;</strong>3rd Prize</p>
             
                <h3>Class Representative for 8 years</h3>
                <p>Compile educational resources, organizing classes;</p>
              </div>
        </div>
        <div id="work_section">
          <h2>Works</h2>
          <p>Here are a few things I've made. (I'm always looking for new projects!)</p>
          <div id="projects">
               <h3>Tiktown.com</h3>
            <a href="http:/tiktown.com" target="_blank">
              <img src="assets/images/screenshots/journalismconf.png" />
              <div class="caption">
                <h3>Online Renting Website(Working..).</h3>
              </div>
            </a>  <hr> <h3>MyCaptcha</h3>
         
              <a href="http://github.com/ashishpatel0720/moodle" target="_blank">
              <img src="assets/images/screenshots/hia.png" />
              <div class="caption">
                <h3>Online Assignment Submission and Blogging System..</h3>
              </div>
            </a>  <hr>
           <h3>Manit-Moodle</h3>
            <a href="http://github.com/ashishpatel0720/mycaptcha" target="_blank">
              <img src="assets/images/screenshots/growlanka.png" />
              <div class="caption">
                <h3>Website for Implementing Catcha Validation Techniques.</h3>
              </div>
            </a>
           <hr>
           <h3>ashishpatel.xyz</h3>
            <a href="http://ashishpatel.xyz" target="_blank">
              <img src="assets/images/screenshots/cocovoice.png" />
              <div class="caption">
                <h3>Personal Portfolio Website.</h3>
              </div>
            </a>
         
          </div>
        </div>
        <div id="contact_section">
          <div id="contact_side">
            <h2>Social Butterfly</h2>
            <a href="http://www.linkedin.com/in/ashishpatel0720">i</a>
            <a href="https://www.facebook.com/ashishpatel0720">f</a>
            <a href="https://twitter.com/ashish_patel7">t</a>
            <p><a href="https://github.com/ashishpatel0720">Fork me on &nbsp;<img src="assets/images/screenshots/git.svg" width="50" heigh="50"></a></p>
            
            <p>Call me  &rarr; +91 7705047900</p>
          </div>
          <div id="contact_main">
            <h2>Owl Post</h2>
            <p>I love getting mail,I read every word that passes through my inbox and promise to respond to your message within 24 hours&mdash;less if there isn't a storm brewing. So type away!</p>
            <p>You can email me directly at <a href="mailto:ashishpatel0720@gmail.com">ashishpatel0720@gmail.com</a>.</p>
<!--            <div id="contact_form">
              <form name="contact" action="process.php" method="post">
                <fieldset>
                <label class="field" for="name">Name:</label>
                <input type="text" name="name" id="name" value="" />
                <label class="error" for="name">&nbsp; *</label>

                <label class="field" for="email">Email:</label>
                <input type="email" name="email" id="email" value="" />
                <label class="error" for="email">&nbsp; *</label>

                <label class="field" for="message">Message:</label>
                <textarea name="message" id="message" value="" rows=7 /></textarea>
                <label class="error" for="message">&nbsp; *</label>

                <div class="clear"></div>

                <input type="submit" name="submit" class="button" value="Off you go, Hedwig!" /><div id="response"></div>
                </fieldset>
              </form>
            </div>
          -->
          </div>
        </div>
      </div>
      <div id="footer">
          Copyright &copy 2016 <a href="http://fb.com/ashishpatel0720" style="font-size:20px">&nbsp Ashish Patel</a>.  
      </div>
    </div>
    <script type="text/javascript" src="./js/js"></script>
    <script type="text/javascript" src="scripts.js"></script>
   
  </body>
