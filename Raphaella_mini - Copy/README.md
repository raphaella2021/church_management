

PROJECT NAME:CHRISTIAN DOCUMENTATION MANAGEMENT SYSTEM
=======================================================

hello,

Our project is being developped using laravel 8 which is the most popular php frame work.
this project deals on how church leaders should register their christians and  their related informations according to any event occur in their churches like 
Baptisation(Kubatizwa),Eucaristia(Guhabwa),Spirtualization(Gukomezwa),Marriage(Gushyingirwa),etc.....
if christian need those information can access it, any time and any where.

Our project is their to overcome this problems:
-in case of migration from one parish to another,it reduce time taken to go back to place(parish)you were to find your documents.
-christian data security because this is computerized system(no papers used).  

prerequisites for installing laravel 8
=========================================
to install laravel 8 you must be having composer in your syastem also you must have the active internet connection 
and of course some knowlwdgde abourt programming 

procedures
===========

after manual installation of composer ,open the root directory of your project and open the terminal from there 
after type the above command to start download the laraver:
composer create-project laravel/laravel {directory} 4.2 --prefer-dist

after the laravel is downloaded from your system you open the project folder into text editor(visual studio code)
after to start the project you simply type this command from your terminal (php artisan serve).s 

authors
=======
this mini project is being built by ISHIMWE Liliane and SHIMIRWAMUKIZA Raphaela 

structure of project
====================
our projects has three main parts (mvc) model controller

in views 
========
there are files .blade to be seen on outer view and are aranged in the the folder products
the blade files are 
create.blade.php(to let the syastem admin to enter the new christian)
show.blade.php(to view the full description of the christian )
edit.blade.php(to eddit some profile of the christian)
index.blade.php(the first page that appears to first when you open up the project )
delete.blade.php(to delete a christian)