# HosAppointmentSys
Hospital Appointment System

An OpenSource Smart Appointment system developed on LAMP Stack. Feel Free to contribute.

#Exporting the database:

    $ mysqldump -u username -p[pass] HosAppointmentSys > has.sql

#Importing the database:

    $ mysql -u username -p[pass] HosAppointmentSys < has.sql     
    
    Note: Create a database named **HosAppointmentSys** before running above command
    kml
**Live Demo :** http://shielded-gorge-27140.herokuapp.com/    

#Running the project:

	Open connectionFile.php and edit the line:
	$conn = new mysqli($dbhost, $dbuser, $dbpassword,$dbname);

	where $dbuser is your database user, $dbpassword is the password you set on and $dbname is the name of your database

	Using terminal open the directory where you have cloned the project and type in the following command:

	$ php -S localhost:8888 -t hosys-DevPost-project/

	In the browser URL type in: localhost:8888 and hit enter.


**Screenshots :**

![HomePage](./images/hs1.png?raw=true "Homepage")
![AppointmentForm](./images/hs2.png?raw=true "form")
![AdminDashboard](./images/hs3.png?raw=true "Admin")
![Appointmentslip](./images/hs4.png?raw=true "slip")
