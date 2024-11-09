# EMP_DEPT Management System

This is a simple web-based application to manage employee department records. It allows users to:

- Add new records for employee departments.
- Search for existing records based on the department name.

## Features

- **Add Record**: Insert a new employee department into the `emp_dept` table.
- **Search Record**: Search for an employee department by its name (`EMP_DEPT`).

## Technologies Used

- PHP
- MySQL
- HTML

## Requirements

- A web server (e.g., Apache, Nginx) with PHP support.
- MySQL database.

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/emp_dept-management.git


# EMP_DEPT Management System

This is a simple web-based application to manage employee department records. It allows users to:

- Add new records for employee departments.
- Search for existing records based on the department name.

## Features

- **Add Record**: Insert a new employee department into the `emp_dept` table.
- **Search Record**: Search for an employee department by its name (`EMP_DEPT`).

## Technologies Used

- PHP
- MySQL
- HTML
- WAMP Server (for local development)

## Requirements

- **WAMP Server** (includes Apache, PHP, and MySQL)
- Web browser (e.g., Chrome, Firefox, etc.)

## Installation and Setup

### 1. Download and Install WAMP Server

To run this project on your local machine, you'll first need to install WAMP server:

- Download WAMP Server from the official website:  
  [Download WAMP Server](https://sourceforge.net/projects/wampserver/)
  
- Run the installer and follow the installation steps. Once installed, start the WAMP server by clicking on the WAMP icon in the system tray.

### 2. Initialize PHPMyAdmin and Create Database

- Open **PHPMyAdmin** by going to:  
  [http://localhost/phpmyadmin](http://localhost/phpmyadmin)  
  (Make sure the WAMP server is running and the icon is green.)

- **Create Database**: 
  - Click on the "Databases" tab in PHPMyAdmin.
  - Enter `emp_db` as the database name and click "Create".

- **Create Table**: After creating the database, you need to create the `emp_dept` table. Run the following SQL query in PHPMyAdmin:

  ```sql
  CREATE TABLE emp_dept (
      EMP_DEPT VARCHAR(100),
      DEPT_TYPE VARCHAR(100),
      EMP_DEPT_NO INT PRIMARY KEY
  );



### Key Additions and Explanations:

1. **WAMP Server Setup**: 
   - The user is guided to download and install WAMP server.
   - It explains how to access PHPMyAdmin and create the necessary database (`emp_db`) and table (`emp_dept`).
   
2. **File Placement**: 
   - Specifies where to place the project files inside the `www` folder in WAMP's directory.

3. **Running the Project**: 
   - Gives instructions to navigate to `http://localhost/emp_dept` in a browser to access the application.

### Usage Instructions:
- The `README.md` now includes all the steps required to set up WAMP server, initialize the database, and run the project locally.

Let me know if you need any further modifications!
