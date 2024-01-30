# Dev Diary

1. Used swagger ui editor (https://editor.swagger.io/) to look at api-spec.yaml. Saw there were a few duplicate operation ids so fixed them
2. Using Schema from api spec created all the models and related items (migrations, factories, controllers etc) 
3. Wrote migrations
4. Set up relationships in models
5. Sort out all the factories
6. Build the basic structure for services/repositories/controllers
7. Create some seeders so we can get some data into the app
8. Check /farms endpoint to see if working. It wasn't so debugged and found I needed turbines so created all infrastructure to get turbines
9. Clicked on farm and saw I needed to create the components end points so created the components infrastructure 
10. After getting a few pages working with the front end I know enough about how it works to just crack on with the api so created all routes and route model bindings to match api spec
11. complete all logic for every route and tidy up all controllers/services/repos
12. Did some end to end testing on the app to see if everything was working. Found a bug in the React code for inspection component and fixed it
13. GradeTypes were returning strings so updated the name field in factory to return int between 1-5 to be inline with readme specs
14. Set up the app for testing and upgraded laravel sail
15. Wrote tests for farm controller, ran with coverage and committed to git
16. Checked through PR and cleaned up code