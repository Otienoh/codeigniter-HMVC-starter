# README #

This README would normally document whatever steps are necessary to get your application up and running. So you should read it to the bottom :)

### What is this repository for? ###

* This system was developed and submited for the purpose of Cryptography Term Project. The following requirements have been implemented or incorporated in our system:

    Functions of the system - (File Manager)
    Security Features Implemented
        Enforcement of strong passwords
        Encryption of usernames and passwords — Passwords Hashed using SHA512 methods
        Encryption of database
        Security controls of the interface — SQL inections, XSS scripting, CSRF (Cross Site Request Forgery), Trimming user input, Session encryption key, IP address log
        User controls and access levels — Admin & Member user roles with defined functions
        Authentication methods employed
        Codes
        System Documentation
)

* I have decided to share the system to be used as a CI 2 boilerplate project to help anyone who needs to quickly get started with their next CI project: 
    This repo has a demonstration of the following codeigniter principles.
        Codeigniter HMVC setup - high modularized MVC approach
        Codeigniter Bootstrap Integration
        Simple templating engine - Load different views for different users
        Users and Group Management and Authentication - See Above for security features implemented
        Codeigniter Basic Form elements implementation - forms and upload forms demonstrated
        Codeigniter file management implementation.
        Codeigniter CRUD example
        Codeignter table pagination implementation
        Basic Ninja Hacks to get most stuff working eg 
            To create a new module, copy the COPYTHIS folder and rename it to the module name
            To restrict access to a page to an admin user add this "Modules::run('secure_tings/ni_admin');" to the construct function of the controller
            and many more hacks

### How do I get set up? ###

* Copy project in your webroot directory - (C:\xampp\htdocs\Twiga);
* Import database from the (C:\xampp\htdocs\Twiga\db) directory 
* Database configurations:
            host - 'localhost'
            user - 'root'
            password - ''
            database - 'twiga'
* Point your browser to http://localhost/Twiga/
* Username: Julie
* Password: qwerty
* Modules application\modules directory

### Contribution guidelines ###
* You can contribute by forking and working/improving on the security modules or adding new modules
    To change the security module edit the secure_tings

### Who do I talk to? ###

* Create a new issue request on bitbucket 

### DISCLAIMER ###
* There may exist better way to achieve most of the stuff done in this project eg
    security - Ion Auth
    database - Doctrine ORM
    model - MyModel on github
    crud - GroceryCrud
* This project was done in 2015 - I have since stopped using most of this implementations
* This is a Open Source Project - some of the hacks implemented here may not be the right way of doing things So please  observe the DBATD principle
* Violating the DBATD principle happens in the following ways.
    Asking for help before reading the README.md
    Asking for help without creating an issue request
    Filling my inbox with this could be done better emails, Fork it and do it the better way then we can both learn
    Presenting this system asis to another person without changing atleast the template
    Not reading the Codeigniter HMVC approach before starting to use this project
    Forgetting to remove the names of the project contributers before submitting this project
    Forgeting the are other better ways of achieving the above

### DBATD - "Don't Be A Total Dick" ###
### HAPPY CODING!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!




    