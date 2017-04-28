# UniCycles
Unicycles is a university project to implement a system where students and lecture's can hire
a bicycle from different locations around portsmouth via a internet application. The project is for the University of 
Portsmouth and is solely for academic use.

To view a prehosted version of the product please visit unicycle.ddns.net:156

Unicycles - how to install and run.
1) To run the product you will need a server. For the purpose of this i wil tak thorugh how to run with uniServer, but other servers are avalaible.
To download uniServer please go to http://www.uniformserver.com/ and select download. Download 13_3_2_ZeroXIII.exe as this is the lastest version.
2)Extract and in stall the microserver on to your computer.
3) To create the sql database to run the product go to https://www.webyog.com/product/sqlyog and download there free windows trial.
The extract and install the software.
4) Navigate to where you installed uniServer and run the UniController.exe
5) All uniServer permissions on your network
6) When it prompts you to enter a new mySQL root password enter a password
7) Now we need to give it our files to run the product. Go to https://github.com/DoctorDib/UniCycles and download the repositary.
8) Go to C:\UniServerZ\www and delete all the files in the folder, Copy and paste the files from the repotisary into the folder.
9) Start the mysql server. Go to the mysql settings and select Database select or delete, create a database called uniCycles
10) open mysqlYog when it asks for server details enter, MySQL Host Address : localHost, Username: root, Password: 'password you chose', Database(s): uniCycles
the click connect.
11) Right click on the name of your database and select Import, execute MYSQL script.. and select the SQL tables dump file from the SQL folder of the repositray. Then click execute.
12) The select the choose ... button again and select the SQLdatadump file and re execute.
13) Now in uniServer gui go to the apache settings and then start up pages navigate to index.php in the www folder of the apache server. 
14) Now start your apache server and click view www.
