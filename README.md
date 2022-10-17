# 2Grand-Task

# Getting started

## Installation

Clone the repository

    git clone https://github.com/ramo772/2grand-task.git

Switch to the repo folder

    cd 2grand-task
    
Install all the dependencies 

    composer install


Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Run the seeder
    php artisan db:seed
  
Start the local development server

    php artisan serve
    
Running The Scheduler Locally (the reminder will be sent on 8 pm)

    php artisan schedule:work


The Requested end points

1. Tags Crud

![image](https://user-images.githubusercontent.com/76254252/196300095-28bd269f-d727-4240-b099-a78d9a651a8f.png)

2. Categories Crud
![image](https://user-images.githubusercontent.com/76254252/196300177-62f57909-0cfe-46e8-a0f4-5c501dcc0b8d.png)

3. get ads with query params {tag_name, category_name}
![image](https://user-images.githubusercontent.com/76254252/196300444-e65575b9-1a93-4223-8a9d-5ebeee48ef7b.png)
        
4. get the advertiser with its ads
![image](https://user-images.githubusercontent.com/76254252/196300422-73637615-5341-433f-a5b7-c3b1d3bb6d44.png)
    
    
You will find the PostMan Collection at the project {{host}} => 127.0.0.1:8000/api

