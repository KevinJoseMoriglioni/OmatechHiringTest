<a name="readme-top"></a>

<br />
<div align="center">
  <a href="https://www.omatech.com/es">
    <img src="https://www.omatech.com/uploads/20220426/Screenshot-2022-04-26-at-10.01.40.png" alt="Logo" width="120" height="80">
  </a>

  <h3 align="center">Hiring test</h3>
</div>

<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
        <li><a href="#set-environment">Set environment</a></li>
        <li><a href="#use">Use</a></li>
      </ul>
    </li>
  </ol>
</details>

## About The Project

The objective of this test is to develop a back office where you can access the operations CRUD from users using the latest version of Laravel.
To access the back office you will need to authenticate using a login view.
The application must have test data.

What is expected?
* Being able to login with any user already created.
* A list of users.
* Being able to delete a user.
* Be able to edit any user.
* Being able to see the details of any user.
* Instructions for testing the application in a local environment.

How to deliver the test?
* Upload the repository on github and send the link by email.

Additional features
* Tests are a must.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## Getting Started

Getting Started.

### Prerequisites

* php ^8.0.2
* composer
* nodejs compatible with laravel 9
* npm

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/KevinJoseMoriglioni/OmatechHiringTest.git
   ```

2. Install php dependencys
   ```sh
   composer install
   ```

3. Install javascript dependencys
   ```sh
   npm install && npm run dev
   ```

### Set environment

1. We need to set the environment variables that are in an .env file, adding the name of the project and the name of the database to use. The project does not contain an .env file but you can copy the one you find as an example that is not in gitignore.
   ```sh
   cp .env.example .env
   ```

2. Generate application security key
   ```sh
   php artisan key:generate
   ```

2. DB migration
   ```sh
   php artisan migrate
   ```

### Use

1. Create fake users, to be able to enter and see the list of fake users that were created you can enter with the email: jose@example.com and password: Tester12 (The other users created have this same password by default)
   ```sh
   npm run usersTest
   ```

2. Server running on [http://127.0.0.1:8000]
   ```sh
   php artisan serve
   ```

3. Test (taking into account that the tests will be run and the database will be refreshed)
   ```sh
   php artisan test
   ```


<p align="right">(<a href="#readme-top">back to top</a>)</p>