Career Bridge: Placement Management System 🌉 CB-SCC-PMS 
    
A web-based Placement Management System designed to streamline college placement processes, connecting students, companies, and administrators efficiently. Developed as a VI Semester BCA project at St Claret College, Bangalore, in 2023-24.

🎯 Project Overview
Career Bridge automates the placement process, reducing manual effort and errors. It provides a user-friendly platform for:

Students: View company profiles, apply for jobs, access training resources, and manage placement activities.
Administrators: Manage student records, company details, and recruitment schedules.
Companies: Find eligible candidates based on specific criteria.


✨ Key Features

🔐 User Authentication: Secure login for students and admins.
📊 Student Dashboard: Personalized view of applied jobs, interview schedules, and feedback.
🏢 Company Profiles: Detailed job descriptions, eligibility criteria, and application management.
📚 Training Resources: Dedicated webpage with MOOC and internship links for skill enhancement.
🤝 Efficient Matching: Automated tools to match students with job profiles based on criteria like GPA and skills.
📧 Password Reset: Token-based password reset via email using PHPMailer with Google SMTP.
💾 Centralized Database: Stores student, company, and placement records for easy access.

🛠️ Technologies Used
## 🚀 Tech Stack

### 🌐 Frontend
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)

### 🛠 Backend
![PHP](https://img.shields.io/badge/PHP-7.4-8892BF?style=for-the-badge&logo=php&logoColor=white)

### 🗄 Database
![MySQL](https://img.shields.io/badge/MySQL-phpMyAdmin-4479A1?style=for-the-badge&logo=mysql&logoColor=white)

### 🌍 Server
![XAMPP](https://img.shields.io/badge/XAMPP-Apache%2FMariaDB-FB7A24?style=for-the-badge&logo=apache&logoColor=white)

### ✉️ Email Service
![PHPMailer](https://img.shields.io/badge/Email-Google%20SMTP%20(PHPMailer)-D14836?style=for-the-badge&logo=gmail&logoColor=white)

### 💻 Editor
![VS Code](https://img.shields.io/badge/Visual%20Studio%20Code-007ACC?style=for-the-badge&logo=visual-studio-code&logoColor=white)



🌐 Live Demo

Demo URL: https://pms.free.nf/
Read-Only Student Users:
Username: PMSstudent, 
Password: trailUser
Note: These are trial-based read-only accounts for the student model. Admin access is available upon request for skill evaluation or project examination. Contact the repository owner for admin credentials.



📋 Prerequisites

XAMPP: Local web server with Apache and MySQL.
PHP: Version 7.4 or higher.
Google Account: For SMTP email setup (requires 2FA and app password).
Free.nf Account: For free hosting deployment (or equivalent like InfinityFree).
Git: For version control.

🚀 Setup Instructions

Clone the Repository:
git clone https://github.com/yourusername/career-bridge.git
cd career-bridge


Install XAMPP:

Download and install XAMPP.
Start Apache and MySQL from the XAMPP Control Panel.


Configure Database:

Open phpMyAdmin (e.g., http://localhost/phpmyadmin).
Create a database named career_bridge.
Database Access: The database schema is not included in the repository. Request the database.sql file from the repository owner for educational purposes.
Example table structure:CREATE TABLE studentlogin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    token VARCHAR(64),
    token_expiry DATETIME
);




Set Up Google SMTP for PHPMailer:

Enable 2-factor authentication in your Google Account.
Go to Google Account Settings > Security > App Passwords.
Generate an app password for mail and copy the 16-character code.
Update includes/config.inc.php with your SMTP credentials:define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_USERNAME', 'your-email@gmail.com');
define('SMTP_PASSWORD', 'your-app-password'); // 16-character app password
define('SMTP_PORT', 587);
define('FROM_EMAIL', 'your-email@gmail.com');
define('FROM_NAME', 'Career Bridge');
define('BASE_URL', 'http://localhost/career-bridge/');


Security Note: SMTP credentials are not included in the repository for security reasons. Configure your own credentials as described.


Run Locally:

Move the project folder to htdocs in your XAMPP directory.
Access the app at http://localhost/career-bridge.



🌐 Deployment on Free.nf

Sign Up: Create an account at Free.nf using an email address.
Create Subdomain: Set up a free subdomain (e.g., pms.free.nf).
Upload Files:
Use FileZilla to upload project files to the public_html directory via FTP.
Ensure PHPMailer and includes folders are correctly placed.


Set Up Database:
Create a MySQL database in Free.nf’s cPanel.
Request database.sql from the repository owner and import it via phpMyAdmin.
Update includes/db.inc.php with Free.nf’s database credentials:$host = 'sqlXXX.free.nf'; // Provided by Free.nf
$dbname = 'your_dbname';
$username = 'your_dbuser';
$password = 'your_dbpassword';
$conn = new mysqli($host, $username, $password, $dbname);




Update Config:
Modify BASE_URL in includes/config.inc.php to your subdomain (e.g., http://pms.free.nf/).


Test: Visit https://pms.free.nf/ and test features like password reset.

📄 Project Report

Location: Available at images/pdfreport.pdf in the project root.
Details: Contains the full project documentation, including objectives, system design, and testing strategies.

📸 Screenshots



Home Page
Student Dashboard
Admin Panel








🧪 Testing

Unit Testing: Validated database operations and user authentication.
Integration Testing: Ensured seamless front-end and back-end communication.
User Acceptance Testing: Confirmed usability for students and admins.
Security Testing: Implemented input validation and secure email handling.

📝 Limitations

Initial setup requires technical knowledge.
Scalability limited on free hosting.
Data security depends on hosting provider’s measures.

🙌 Acknowledgments

St Claret College: For academic support.
Dr. Chinmaya Dash: Project guide.
Ms. Jayalakshmi R.: Head of Department.
Resources: W3Schools, GeeksforGeeks, YouTube tutorials.

📜 License
This project is licensed under the MIT License - see the LICENSE file for details. All rights reserved for educational purposes only.


Built by SMD Thousif Ibrahim and S R Sandeep for BCA VI Semester, 2023-24. 🚀
