# Assets Component

Using what you have learned regarding the Assets component, you need to create a system that generates routes and write some tests to prove that they work as expected. We want to define:

* A custom versioning strategy that reads a value from a PHP file and uses it as its versioning factor.
* We need to define a way so that:
    * Default assets will be loaded from the `assets/` directory
    * For IMG files, they will be read from the `assets/images/` directory.
    * For PDF files, they will be read from the `assets/static/pdf` directory.
    * For CSS files, they will be read from the `assets/stylesheets/` directory.
* Make sure that your implementation takes the custom versioning strategy into account.
