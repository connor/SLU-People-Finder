<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <title>Welcome to Zyrow.</title>

  <link rel="stylesheet" href="style.css">
  <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->  
  <script src="js/modernizr.min.js"></script>
</head>

<body>
  <div class="container">
    <div id="slide-container">
      <div id="home" class="slide">
        <h1 id="welcome">Hi. We're Zyrow.</h1>
        <h2 id="tagline">We make r&eacute;sum&eacute;s suck less.</h2>
        <img src="images/call-to-action.jpg" title="Get Yours Now." id="call-to-action" alt="Get Yours Now." />
      </div>  <!-- /#home -->


      <div id="create" class="slide">
        <div id="header">
          <h3 id="name">Zyrow</h3>
          <p id="credits">Made by <a href="http://www.rft.me" target="_blank">bob</a>, <a href="http://www.cnnr.me" target="_blank">connor</a>, and <a href="http://www.nickschappler.com" target="_blank">nick</a>.</p>
        </div> <!-- /#header -->
        <aside id="left">
          <ul class="connected-Sortable">
            <li id="text">Text</li>
            <li id="education">Education</li>
            <li id="professional">Employment</li>
            <li id="technical">Technical</li>
            <li class="no-drag"><a href="#more">load more</a></li>
          </ul>
        </aside>
        <div id="main-wrapper">
          <div id="main" class="connected-Sortable">
            <form action="<?php base_url().'index.php/home/saveIndex' ?>" method="post">
                <section class="section" id="personal">
                  <input type="hidden" name="categoryType-0" value="userInfo" />
                  <input type="hidden" name="position-0" value="0" />
                  <h3 class="section-title">Personal</h3>
                  <div class="section-content">
                    <input type="hidden" name="name-0" value="Your Name" />
                    <dl class="left">
                      <dt>Name:</dt>
                      <dd class="editable">Your name &amp; press Enter.</dd>
                    </dl>
                    <input type="hidden" name="email-0" value="Your Email" />
                    <dl class="right">
                      <dt>Email:</dt>
                      <dd class="editable">Click here to edit...</dd>
                    </dl>
                    <input type="hidden" name="phone-0" value="Your Phone" />
                    <dl class="left clear">
                      <dt>Phone:</dt>
                      <dd class="editable">(555) 123-4567</dd>
                    </dl>
                    <input type="hidden" name="userTitle-0" value="Your Title" />
                    <dl class="right">
                      <dt>Title:</dt>
                      <dd class="editable">Computer Science Student</dd>
                    </dl>
                    <input type="hidden" name="address-0" value="Your Address" />
                    <dl class="left small clear">
                      <dt>Address:</dt>
                      <dd class="editable-textarea">1234 Anywhere St. Leawood, KS 66224</dd>
                    </dl>
                  </div> <!-- /.section-content -->
                </section> <!-- /.section -->
                
                
                <section class="section employment" id="employment-stuff"> 
                   <input type="hidden" name="categoryType-2" value="employment" />
                  <input type="hidden" name="position-2" value="2" />
                  <img src="images/reorder.jpg" alt="reorder this element" title="reorder this element" class="reorder-image" /> 
                  <input type="hidden" name="categoryTitle-2" value="Employment" />
                  <h3 class="section-title">Employment</h3> 
                  <a href="#delete" class="delete-btn">&nbsp;</a> 
                  <div class="section-content"> 
                    <input type="hidden" name="position-2-0" value="0"/>
                    <input type="hidden" name="company-2-0" value="Company"/>
                    <dl class="left"> 
                      <dt>Company:</dt> 
                      <dd class="editable">Google, Inc.</dd> 
                    </dl> 
                    <input type="hidden" name="companyPosition-2-0" value="Boss"/>
                    <dl class="right"> 
                      <dt>Position:</dt> 
                      <dd class="editable">Software Engineer</dd> 
                    </dl> 
                    <input type="hidden" name="companyLocation-2-0" value="Here"/>
                    <dl class="left clear"> 
                      <dt>Location:</dt> 
                      <dd class="editable">San Francisco, CA</dd> 
                    </dl> 
                    <input type="hidden" name="startDate-2-0" value="April 5"/>
                    <dl class="right"> 
                      <dt>Start Date:</dt> 
                      <dd class="editable">Oct 29, 2005</dd> 
                    </dl> 
                    <input type="hidden" name="endDate-2-0" value="February 18"/>
                    <dl class="left clear"> 
                      <dt>End Date:</dt> 
                      <dd class="editable">Blank if still working here</dd> 
                    </dl> 
                    <input type="hidden" name="text-2-0" value="Notes"/>
                    <dl class="left large clear"> 
                      <dt>Notes:</dt> 
                      <dd class="editable-textarea">Worked on the Google Maps team and helped them reach ultimate awesomeness. Also single-handedly created Google+.</dd> 
                    </dl> 
                  </div> 

                  <div class="section-content"> 
                    <input type="hidden" name="position-2-1" value="0"/>
                    <input type="hidden" name="company-2-1" value="Company"/>
                    <dl class="left"> 
                      <dt>Company:</dt> 
                      <dd class="editable">Google, Inc.</dd> 
                    </dl> 
                    <input type="hidden" name="companyPosition-2-1" value="Boss"/>
                    <dl class="right"> 
                      <dt>Position:</dt> 
                      <dd class="editable">Software Engineer</dd> 
                    </dl> 
                    <input type="hidden" name="companyLocation-2-1" value="Here"/>
                    <dl class="left clear"> 
                      <dt>Location:</dt> 
                      <dd class="editable">San Francisco, CA</dd> 
                    </dl> 
                    <input type="hidden" name="startDate-2-1" value="April 5"/>
                    <dl class="right"> 
                      <dt>Start Date:</dt> 
                      <dd class="editable">Oct 29, 2005</dd> 
                    </dl> 
                    <input type="hidden" name="endDate-2-1" value="February 18"/>
                    <dl class="left clear"> 
                      <dt>End Date:</dt> 
                      <dd class="editable">Blank if still working here</dd> 
                    </dl> 
                    <input type="hidden" name="text-2-1" value="Notes"/>
                    <dl class="left large clear"> 
                      <dt>Notes:</dt> 
                      <dd class="editable-textarea">Worked on the Google Maps team and helped them reach ultimate awesomeness. Also single-handedly created Google+.</dd> 
                    </dl> 
                  </div>
                </section>
                
                
                
                
                
                
                <section class="section education" id="education-title">
                  <input type="hidden" name="categoryType-3" value="education" />
                  <input type="hidden" name="position-3" value="3" />
                  <img src="images/reorder.jpg" alt="reorder this element" title="reorder this element" class="reorder-image" />
                  <input type="hidden" name="categoryTitle-3" value="Education" />
                  <h3 class="section-title editable">Education</h3>
                  <a href="#delete" class="delete-btn">&nbsp;</a>
                  <div class="section-content">
                    <input type="hidden" name="position-3-0" value="0" />
                    <input type="hidden" name="school-3-0" value="school" />
                    <dl class="left">
                      <dt>School:</dt>
                      <dd class="editable">Your School</dd>
                    </dl>
                    <input type="hidden" name="location-3-0" value="location" />
                    <dl class="right">
                      <dt>Location:</dt>
                      <dd class="editable">School's City &amp; State</dd>
                    </dl>
                    <input type="hidden" name="major-3-0" value="major" />
                    <dl class="left clear">
                      <dt>Major:</dt>
                      <dd class="editable">Basket Weaving</dd>
                    </dl>
                    <input type="hidden" name="gpa-3-0" value="gap" />
                    <dl class="right">
                      <dt>GPA:</dt>
                      <dd class="editable">4.0 on a 4.0 scale</dd>
                    </dl>
                    <input type="hidden" name="text-3-0" value="Notes"/>
                    <dl class="left large">
                      <dt>Notes:</dt>
                      <dd class="editable-textarea">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</dd>
                    </dl>
                  </div>
                  <div class="section-content">
                    <input type="hidden" name="position-3-1" value="0" />
                    <input type="hidden" name="school-3-1" value="school" />
                    <dl class="left">
                      <dt>School:</dt>
                      <dd class="editable">Your School</dd>
                    </dl>
                    <input type="hidden" name="location-3-1" value="location" />
                    <dl class="right">
                      <dt>Location:</dt>
                      <dd class="editable">School's City &amp; State</dd>
                    </dl>
                    <input type="hidden" name="major-3-1" value="major" />
                    <dl class="left clear">
                      <dt>Major:</dt>
                      <dd class="editable">Basket Weaving</dd>
                    </dl>
                    <input type="hidden" name="gpa-3-1" value="gap" />
                    <dl class="right">
                      <dt>GPA:</dt>
                      <dd class="editable">4.0 on a 4.0 scale</dd>
                    </dl>
                    <input type="hidden" name="text-3-1" value="Notes"/>
                    <dl class="left large">
                      <dt>Notes:</dt>
                      <dd class="editable-textarea">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</dd>
                    </dl>
                  </div>                  
                </section>
                
                
              <section class="section tech-section" id="technical"> 
                  <input type="hidden" name="categoryType-4" value="technical" />
                  <input type="hidden" name="position-4" value="4" />
                <img src="images/reorder.jpg" alt="reorder this element" title="reorder this element" class="reorder-image" /> 
                <input type="hidden" name="categoryTitle-4" value="Technical" />
                <h3 class="section-title">Technical</h3> 
                <a href="#delete" class="delete-btn">&nbsp;</a> 
                <div class="section-content"> 
                  <input type="hidden" name="position-4-0" value="0" />
                  <input type="hidden" name="left-4-0" value="left" />
                  <input type="hidden" name="right-4-0" value="right" />
                  <dl class="tech left"> 
                    <dt>Programming/Scripting:</dt> 
                    <dd class="editable">Python, PHP, Ruby, Perl, Java, Javascript, iOS, Android, Objective-C, C, C++, MySQL, Redis, Node.js</dd> 
                  </dl> 
                </div>
                <div class="section-content">
                  <input type="hidden" name="position-4-1" value="1" />
                  <input type="hidden" name="left-4-1" value="left" />
                  <input type="hidden" name="right-4-1" value="right" />
                  <dl class="tech left"> 
                    <dt>Programming/Scripting:</dt> 
                    <dd class="editable">Python, PHP, Ruby, Perl, Java, Javascript, iOS, Android, Objective-C, C, C++, MySQL, Redis, Node.js</dd> 
                  </dl> 
                </div> 
            </section>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <section class="section text" id="objective">
                  <input type="hidden" name="categoryType-1" value="text" />
                  <input type="hidden" name="position-1" value="1" />
                  <img src="images/reorder.jpg" alt="reorder this element" title='reorder this element' class="reorder-image" />
                  <input type="hidden" name="categoryTitle-1" value="Objective" />
                  <h3 class="section-title">Objective</h3>
                  <a href="#delete" class="delete-btn">&nbsp;</a>
                  <div class="section-content">
                    <input type="hidden" name="text-1" value="Blank Text" />
                    <p class="editable-textarea">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </section> <!-- /.section -->
    
               
              <br />
            </form> <!-- /form -->
          </div> <!-- /#main -->
          <p id="instructions">Drag &amp; drop sections over here to add them to your r&eacute;sum&eacute;. Yeah, it's that easy.</p>
        </div> <!-- /#main-wrapper -->
      </div> <!-- /#create -->
    </div> <!-- /.slide-container -->
  </div> <!-- /.container -->
  

  <!-- <script src="js/jquery.jhttp://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script> -->
    <!-- if the CDN doesn't load it correctly... -->
    <!-- <script>window.jQuery || document.write('<script src="js/jquery.js"><\/script>')</script> -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery_ui.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js"></script>
     if the CDN doesn't load it correctly... 
    <script type="text/javascript">window.jQuery.ui || document.write('<script src="js/jquery_ui.js"<\/script>')</script> -->
  <script defer src="js/jquery.inlineedit.js"></script>
  <script defer src="js/script.js"></script>


  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
  
</body>
</html>

