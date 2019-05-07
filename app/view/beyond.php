<div id="beyond" class="container">
    <div class="row">
    <div class="col-sm-12">
        <br>
        <h1 class="heading"><span >GOING BEYOND</span></h1>
        <div class="jumbotron">
            <p class="p1"><span class="s1">This is a web application capable of viewing and interacting with 3D Models. I have chosen to use SpaceX Rockets as the theme. This application was created using X3D with a PHP MVC. This is also a Single Page Application where the content is data-driven using SQLite. I have taken additional steps in creating this application that is outside the course material.</span></p>
            <p class="p1"><span class="s1">The code for this project can be seen on my <a href="https://github.com/neelesh/spacex-3d">Github</a>.</span></p>
            <br>
            
            <h3 class="p1"><span class="s1">X3D</span></h3>
            <p class="p1"><span class="s1">X3D My models are complex but are still at a suitable polygon count for rendering into a web browser. I have chosen to create SpaceX rockets. I started modeling low poly, blocking out the rockets, with the intention to add additional detail later on. The silver rockets mimic the stainless steel design using a glossy material I made in 3DS Max. Starhopper and Starship have a texture each, the American flag.</span></p>
            <img class="d-block w-100" src="img/beyond/wireframes.png">
            
            <br>

            <p class="p1"><span class="s1">The Booster and Falcon 9 rockets have different variations of the SpaceX logo, which is integrated into the geometry. To do this, I created an SVG of the logo, converted it into an Illustrator File (.AI) and then created a spline out of it. I then used this spline, to imprint onto the side of the rockets, putting the logo on the geometry itself, and then applying materials. By creating the logo in this way, it is more efficient than loading another image into the scene.</span></p>
            <img class="d-block w-100" src="img/beyond/logoonrocket.png">
            
            <br>
            <h3 class="p1"><span class="s1">PHP MVC</span></h3>
            <h4 class="p1"><span class="s1">Views and Templates</span></h4>
            <p class="p1"><span class="s1">I have a view for each page (Home, About, Rockets, etc).<span class="Apple-converted-space">&nbsp; </span>My views make use of PHP templates in order to keep the code manageable. I have templated some reusable code snippets (such as the navigation bar) and also anything that is complex enough to be abstracted from the HTML, such as the Rocket Thumbnails, which are data-driven.</span></p>
            <p class="p1"><span class="s1">Here is an example of how concise the code can be when using data passed to the view, and templating:</span></p>                        
            <img class="d-block w-100" src="img/beyond/view.png">
            
            <br>
            
            <h4 class="p1"><span class="s1">Model using SQLite</span></h4>
            <p class="p1"><span class="s1">My model connects to a database. It is capable of creating tables, inserting data and retrieving the data at the will of the controller. I have created a table that holds Titles, Descriptions, File Names and more. I use this in the dynamic content on the site, such as the Rocket Thumbnails or even the Rocket 3D models themselves.</span></p>
            <p class="p1"><span class="s1">Here is the function in my model which inserts data:</span></p>            
            <img class="d-block w-100" src="img/beyond/model.png">
           
            <br>
           
            <h4 class="p1"><span class="s1">Controller for SPA</span></h4>
            <p class="p1"><span class="s1">Instead of calling the controller for every page, I load the entire site at once. This is done but loading in multiple views, and providing them with the data they require. This also means I only have to retrieve from the database once. Once loaded, the navigation.js file will show and hide the content as required. This method reduces server and database load and makes the site very responsive.</span></p>
            <img class="d-block w-100" src="img/beyond/controller.png">
            

            
            <br>
            <h3 class="p1"><span class="s1">Data-Driven Content</span></h3>
            <p class="p1"><span class="s1">My controller retrieves all the data using the model and then reshapes it for the views. The thumbnails at the bottom of the homepage and the 3D models of the rockets themselves are driven by this data. My controller provides these views and templates with an array of rockets, complete with titles, descriptions and file names. The views are using PHP loops to place this content dynamically. You can see this in the views: rockets.php and rocket_selection.php. By implementing a data-driven approach, it means if I change a rocket in the database, the site will change accordingly. I actually did this in practice, as I was originally going to model the SpaceX Capsule, but opted for their more complex Falcon 9 instead.</span></p>
            
            <p class="p1"><span class="s1">This is how I show the thumbails for the rockets at the bottom of the home page:</span></p>
            <img class="d-block w-100" src="img/beyond/datadriven.png">

            
            <br>
            <br>
            <h3 class="p1"><span class="s1">Home Page Renders</span></h3>
            <p class="p1"><span class="s1">It appears as though the assignment would accept photographs of the real objects. Half of these rockets don't actually exist yet, and won't until the 2020's. I have opted to render out my rockets and photoshop them into space scenes. I have created the Starhopper in orbit of the earth, the Starship exploring space, the Booster detaching from the starship, and the Falcon 9 returning to earth. I colour corrected the renders in order to fit convincingly in the compositions.&nbsp;</span></p>
            <br>

            <img class="d-block w-100" src="img/slides/<?php echo $data['starhopper']['fileName'].= '.jpg';?>" >
            <img class="d-block w-100" src="img/slides/<?php echo $data['starship']['fileName'].= '.jpg';?>" >
            <img class="d-block w-100" src="img/slides/<?php echo $data['booster']['fileName'].= '.jpg';?>" >
            <img class="d-block w-100" src="img/slides/<?php echo $data['falcon9']['fileName'].= '.jpg';?>" >
            
        </div>
    </div>
    <br>
    </div>
</div>