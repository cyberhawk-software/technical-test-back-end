## About Software Development @ Cyberhawk


## The task
We've designed this task to try and give you the ability to show us what you can do and hopefully flex your technical and creative muscles. You can't show off too much here, show us you at your best and wow us!

To make things as simple as we could, we've opted to use [Laravel Sail](https://laravel.com/docs/8.x/sail) to provide a quick and convenient development environment, this will require you to install
[Docker Desktop](https://www.docker.com/products/docker-desktop) before you can start the test. We've provided [some more detailed instructions](#setting-everything-up) below in case this is your first time using Docker or Sail.

We'd like you to build an application that will display an example wind farm, its turbines and their components.
We'd like to be able to see components and their grades (measurement of damage/wear) ranging between 1 - 5.

For example, a turbine could contain the following components:
- Blade
- Rotor
- Hub
- Generator

Don't worry about using real names for components or accurate looking data, we're more interested in how you structure the application and how you present the data.

Don't be afraid of submitting incomplete code or code that isn't quite doing what you would like, just like your maths teacher, we like to see your working.
Just Document what you had hoped to achieve and your thoughts behind any unfinished code, so that we know what your plan was.

### Requirements
- Each Turbine should have a number of components
- A component can be given a grade from 1 to 5 (1 being perfect and 5 being completely broken/missing)
- Use Laravel Models to represent the Entities in the task.
- Conform to the spec provided in the `api-spec.yaml` file in the root of this project.
    - If your API matches the spec the provided pre-built front-end should be able to display the data provided via your API

### Bonus Points
- Automated tests
- API Authentication
- API Authorization
- Use of coding style guidelines (we use PSR-12 and AirBnb)
- Use of git with clear logical commits
- Specs/Plans/Designs

### Submitting The Task
Ideally you will fork this repo, work on it then email us with details of where to access it.
Alternatively you can download locally and email us a zip of your completed work.

## Setting Everything Up
As mentioned above we have chosen to make use of Laravel Sail as the foundation of this technical test.
- If you haven't already, you will need to install [Docker Desktop](https://www.docker.com/products/docker-desktop).
- One that is installed your next step is to install this projects composer dependencies (including Sail).
    - This will require either PHP 8 installed on your local machine or the use of [a small docker container](https://laravel.com/docs/8.x/sail#installing-composer-dependencies-for-existing-projects) that runs PHP 8 that can install the dependencies for us.
- If you haven't done so already copy the `.env.example` file to `.env`
    - If you are running a local development environment you may need to change some default ports in the `.env` file
        - We've already changed mysql to 33060 and NGINX to 81 for you
- It should now be time to [start Sail](https://laravel.com/docs/8.x/sail#starting-and-stopping-sail) and the task
- There is a file in the root of this project called `api-spec.yaml` this can be imported into your application of choice to ensure you're building your application to the spec that we're expecting. Some notable applications are:
  - Postman
  - Swagger
  - StopLight


### Installing Composer Dependencies
https://laravel.com/docs/9.x/sail#installing-composer-dependencies-for-existing-projects
```bash
docker run --rm \
-u "$(id -u):$(id -g)" \
-v $(pwd):/var/www/html \
-w /var/www/html \
laravelsail/php81-composer:latest \
composer install --ignore-platform-reqs
```

### Quick Tips
- Don't run npm/composer from your host, always run it via the sail command
  - This is because the docker container may not be able to write to the filesystem after you do so
- Ensure you have a valid .env file before starting sail for the first time.
  - Sail creates a docker volume which is persistent, so stopping/starting sail will not affect/fix issues in a volume (missing DB etc)

## Your Notes
This is a place for you to add your notes, plans, thinking and any feedback you have for us of the task, please feel free to include whatever you like here, we'll make sure to read it. 

- See DEV_DIARY.MD for a detailed account of how I built the api
- Run $ sail artisan migrate
- Run $ sail artisan db:seed for some dummy data
- Run $ sail npm run dev (I fixed a front end bug so need to recompile)
- The amount of http requests seems a little excessive and If this were to go to production I'd suggest we could make 
improvements by making a request for a model bring back all relationships needed and then store these in state
management on the front end. So for example, you could make a request to /api/{farm} and bring back all the related
turbines/components/inspections etc instead of having to do a request for each individual relation  
- You've specified {modelID} for every route binding except for the componentTypes and gradeTypes which are just {model},
was this by design or just missed out? I would say they should all follow the same pattern but have not updated in case it was intended
- There's some stuff in here that's probably a little over-engineered for an app of this size. For example I could have 
just done all the logic in the controllers and returned the data from there however I wanted to show some more SOLID 
ways of working and use of design patterns. I've chosen to go with a service and repository pattern in this API. 
The repository being responsible for any database queries and the service layer for any business logic. 
An example of this would be if we needed to display a price for something we would most likely store that price in units
of 1 (pence) and then do some logic to convert that into £ (or another currency if necessary). Using the design patterns
stated before, the repository would be responsible for querying the DB for the unit value, 60 for example, and then 
the service layer would be responsible for calculating that data into £ e.g. 60/100 = 6 and would return the answer £6
to the controller which would serve that up on the API.
- I've added a test for the farmController and submitted the code coverage for you. I didn't think it was necessary to
write tests for everything as this should show you enough of how I like to write tests (obviously if this was a production
  app I'd test everything and try for at least 80% coverage!)
- I haven't gone as far as setting up authorization however I have added a FarmRequest class and 
a FarmPolicy class with an example of how I would do authorization
- I have also not gone as far as setting up Authentication but if I was I would use laravel sanctum SPA authentication - https://laravel.com/docs/10.x/sanctum#spa-authentication