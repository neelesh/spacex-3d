<?php
class Model
{
    public $dbhandle;
	
	// Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
	public function __construct()
	{
		// Set up the database source name (DSN)
		$dsn = 'sqlite:./db/spacex3d.db';
		
		// Then create a connection to a database with the PDO() function
		try {	
			// Change connection string for different databases, currently using SQLite
			$this->dbhandle = new PDO($dsn, 'user', 'password', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    													PDO::ATTR_EMULATE_PREPARES => false,
														));
		}
		catch (PDOEXception $e) {
			echo "Can't connect to the database!";
			// Generate an error message if the connection fails
        	print new Exception($e->getMessage());
    	}
    }
    


	public function dbCreateTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE spacex3d (Id INTEGER PRIMARY KEY, title TEXT, subtitle TEXT, description TEXT, fileName TEXT)");
			return "Model_3D table is successfully created inside test1.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbInsertData()
	{
		try{
			$this->dbhandle->exec(
"          
INSERT INTO spacex3d (Id, title, subtitle, description, fileName)
VALUES (1, 'Occupy Mars', 'ELON MUSK', 'You want to wake up in the morning and think the future is going to be great - and that''s what being a spacefaring civilization is all about. It''s about believing in the future and thinking that the future will be better than the past. And I can''t think of anything more exciting than going out there and being among the stars.', 'mars');
INSERT INTO spacex3d (Id, title, subtitle, description, fileName)
VALUES (2, 'About', '', 'SpaceX designs, manufactures and launches advanced rockets and spacecraft. The company was founded in 2002 to revolutionize space technology, with the ultimate goal of enabling people to live on other planets.', 'elon');
INSERT INTO spacex3d (Id, title, subtitle, description, fileName)
VALUES (3, 'Starhopper', '', 'Starhopper will be used for initial integrated testing of the Raptor rocket engine with a flight-capable propellant structure as well as for low-altitude, low-velocity flight testing of launches and landings. It began hotfire testing in April. A second test article, the Starship orbital prototype is planned to be used after mid-2019 for high-altitude, high-velocity testing. Integrated system testing of Starhopper, including the first flight test, began in April 2019.', 'starhopper');
INSERT INTO spacex3d (Id, title, subtitle, description, fileName)
VALUES (4, 'Starship', '', 'Starship is a 9m diameter, 55m tall, fully reusable rocket designed with a dry mass of 85,000 kg, powered by seven methane/oxygen-propellant Raptor engines producing over 2,000 kilonewtons of thrust in each engine. Total Starship thrust is approximately 14 MN. Unusual for previous launch vehicle and spacecraft designs, Starship is to function as both a second stage for the BFR launch vehicle that provides acceleration to orbital velocity on all launches from Earth, and yet will also be used in space as an on-orbit long-duration spacecraft.', 'starship');
INSERT INTO spacex3d (Id, title, subtitle, description, fileName)
VALUES (5, 'Superheavy Booster', '', 'The Super Heavy rocket booster is the first stage of the SpaceX next-generation launch vehicle is 63m long and 9m in diameter and expected to have a gross liftoff mass of 3,065,000 kg. It is to be constructed of stainless steel tanks and structure, holding subcooled liquid methane and liquid oxygen propellants, powered by 31 Raptor rocket engines providing 61.8 MN total liftoff thrust. The booster is projected to return to land on the launch mount, although it might land on legs initially.', 'booster');
INSERT INTO spacex3d (Id, title, subtitle, description, fileName)
VALUES (6, 'Falcon 9', '', 'Falcon 9 is a two-stage-to-orbit medium lift launch vehicle designed and manufactured by SpaceX in the United States. It is powered by Merlin engines, also developed by SpaceX, burning liquid oxygen and rocket-grade kerosene propellants. Its name is from the Millennium Falcon and the nine engines of the rocket''s first stage. The rocket evolved with versions v1.0 (2010–2013), v1.1 (2013–2016), v1.2 Full Thrust (2015–2018), and its Block 5 variant, flying since May 2018. Unlike most rockets, which are expendable launch systems, Falcon 9 is partially reusable, with the first stage capable of re-entering the atmosphere and landing back vertically after separating from the second stage. This feat was achieved for the first time on flight 20 with the v1.2 version in December 2015.', 'falcon9');
"
            );
			return "data inserted successfully";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
    }
    
    public function dbGetData(){
		try{
			// Prepare a statement to get all records from the Model_3D table
			$sql = 'SELECT * FROM spacex3d';
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up an array to return the results to the view
			$result = null;
			// Set up a variable to index each row of the array
			$i=-0;
			// Use PDO fetch() to retrieve the results from the database using a while loop
			// Use a while loop to loop through the rows	
			while ($data = $stmt->fetch()) {
				// Don't worry about this, it's just a simple test to check we can output a value from the database in a while loop
				// echo '</br>' . $data['x3dModelTitle'];
				// Write the database conetnts to the results array for sending back to the view
				$result[$data['fileName']]['title'] = $data['title']; // Not used in the view, instead using the fake dbGetBrand() function above
				$result[$data['fileName']]['subtitle'] = $data['subtitle'];
				$result[$data['fileName']]['description'] = $data['description'];
				$result[$data['fileName']]['fileName'] = $data['fileName'];
                //increment the row index
                
				$i++;
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		// Close the database connection
		$this->dbhandle = NULL;
		// Send the response back to the view
		return $result;
	}


    public function home_data()
    {
        return array(
            'slide1' => '16x9.jpg',
            'slide2' => '16x9.jpg',
            'slide3' => '16x9.jpg',
            'slide4' => '16x9.jpg',
            'qoute' => "You want to wake up in the morning and think the future is going to be great - and that's what being a spacefaring civilization is all about. It's about believing in the future and thinking that the future will be better than the past. And I can't think of anything more exciting than going out there and being among the stars.",
            'author' => "ELON MUSK",
        );
    }

    public function about_data()
    {
        return array(
            'video' => 'https://www.youtube.com/embed/Ndpxuf-uJHE?controls=0',
            'qoute' => 'SpaceX designs, manufactures and launches advanced rockets and spacecraft. The company was founded in 2002 to revolutionize space technology, with the ultimate goal of enabling people to live on other planets.',
        );
    }

    public function rockets_data()
    {
        return array(
            'rocket1' => 'starhopper',
            'rocket2' => 'starship',
            'rocket3' => 'superheavy_booster',
            'rocket4' => 'its',
        );
    }
}
