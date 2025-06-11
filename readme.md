Career Bridge: Placement Management System 🌉
    
A web-based Placement Management System designed to streamline college placement processes, connecting students, companies, and administrators efficiently. Developed as a VI Semester BCA project at St Claret College, Bangalore, in 2023-24.
🎯 Project Overview
Career Bridge automates the placement process, reducing manual effort and errors. It provides a user-friendly platform for:

Students: View company profiles, apply for jobs, access training resources, and manage their placement activities.
Administrators: Manage student records, company details, and recruitment schedules.
Companies: Find eligible candidates based on specific criteria.

✨ Key Features

🔐 User Authentication: Secure login for students and admins.
📊 Student Dashboard: Personalized view of applied jobs, interview schedules, and feedback.
🏢 Company Profiles: Detailed job descriptions, eligibility criteria, and application management.
📚 Training Resources: Dedicated webpage with MOOC and internship links for skill enhancement.
🤝 Efficient Matching: Automated tools to match students with job profiles based on criteria like GPA and skills.
📧 Notifications: Email alerts for interviews and deadlines using SendGrid SMTP.
💾 Centralized Database: Stores student, company, and placement records for easy access.

🛠️ Technologies Used



Category
Tools



Frontend
HTML5, CSS3, JavaScript


Backend
PHP 7.4


Database
MySQL (phpMyAdmin)


Server
XAMPP (Apache, MariaDB)


Email Service
SendGrid SMTP


Editor
Visual Studio Code


📋 Prerequisites

XAMPP: Local web server with Apache and MySQL.
PHP: Version 7.4 or higher.
SendGrid Account: For email notifications (API key required).
InfinityFree Account: For free hosting deployment.
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
Import the provided database.sql file or create tables manually:CREATE TABLE studentlogin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    token VARCHAR(64),
    token_expiry DATETIME
);




Set Up SendGrid:

Sign up at SendGrid and generate an API key.
Verify a sender email in the SendGrid dashboard.


Configure Environment:

Copy includes/config.example.inc.php to includes/config.inc.php.
Update with your SendGrid and database credentials:define('SMTP_HOST', 'smtp.sendgrid.net');
define('SMTP_USERNAME', 'apikey');
define('SMTP_PASSWORD', 'your-sendgrid-api-key');
define('SMTP_PORT', 587);
define('FROM_EMAIL', 'your-verified-email@yourdomain.com');
define('FROM_NAME', 'Career Bridge');
define('BASE_URL', 'http://localhost/career-bridge/');




Run Locally:

Move the project folder to htdocs in your XAMPP directory.
Access the app at http://localhost/career-bridge.



🌐 Deployment on InfinityFree

Sign Up: Create an account at InfinityFree using an email address.
Create Subdomain: Set up a free subdomain (e.g., careerbridge.infinityfreeapp.com).
Upload Files:
Use FileZilla to upload project files to the htdocs directory via FTP.
Ensure PHPMailer and includes folders are correctly placed.


Set Up Database:
Create a MySQL database in InfinityFree’s cPanel.
Import database.sql via phpMyAdmin.
Update includes/db.inc.php with InfinityFree’s database credentials.


Update Config:
Modify BASE_URL in includes/config.inc.php to your subdomain (e.g., http://careerbridge.infinityfreeapp.com/).


Test: Visit your subdomain and test the password reset and other features.

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
This project is licensed under the MIT License - see the LICENSE file for details.

Built by SMD Thousif Ibrahim and S R Sandeep for BCA VI Semester, 2023-24. 🚀
