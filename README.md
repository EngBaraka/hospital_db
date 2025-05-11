# Hospital Management System

## Overview
The Hospital Management System is a web application designed to manage patient records efficiently. It allows authorized users to register new patients, view existing records, and perform basic CRUD operations. The application is built using PHP and MySQL.

## Features
- User authentication (login/logout)
- Patient registration form
- Save patient details to the database
- View, update, and delete patient records

## Project Structure
```
hospital-management
├── public
│   ├── index.php
│   ├── login.php
│   ├── logout.php
│   ├── patient_form.php
│   └── save_patient.php
├── src
│   ├── config
│   │   └── database.php
│   ├── controllers
│   │   ├── authController.php
│   │   └── patientController.php
│   └── models
│       └── Patient.php
├── sql
│   └── patient.sql
├── .env
├── .htaccess
└── README.md
```

## Setup Instructions
1. **Clone the repository** to your local machine.
2. **Create the database**:
   - Run the SQL commands in `sql/patient.sql` to create the `HOSPITAL` database and the `PATIENT` table.
3. **Configure the database connection**:
   - Update the database credentials in `src/config/database.php` or in the `.env` file.
4. **Run the application**:
   - Start a local server (e.g., XAMPP, WAMP) and navigate to `public/index.php` in your web browser.

## Usage
- **Login**: Access the login page at `public/login.php` to authenticate.
- **Register Patient**: After logging in, navigate to `public/patient_form.php` to add new patient records.
- **Manage Patients**: Use the patient management features to view, update, or delete patient records.

## Contributing
Contributions are welcome! Please feel free to submit a pull request or open an issue for any enhancements or bug fixes.

## License
This project is open-source and available under the MIT License.