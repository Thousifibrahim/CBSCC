# Career Bridge: Placement Management System 🌉 `CB-SCC-PMS`

A web-based Placement Management System designed to streamline college placement processes, connecting students, companies, and administrators efficiently.

> Developed as a VI Semester BCA Project at **St Claret College, Bangalore** (2023–24)

---

## 🎯 Project Overview

Career Bridge automates the placement process, reducing manual effort and errors. It provides a user-friendly platform for:

- **Students**: View company profiles, apply for jobs, access training resources, and manage placement activities.
- **Administrators**: Manage student records, company details, and recruitment schedules.
- **Companies**: Find eligible candidates based on specific criteria.

---

## ✨ Key Features

- 🔐 **User Authentication** — Secure login for students and admins  
- 📊 **Student Dashboard** — Personalized view of applied jobs, interview schedules, and feedback  
- 🏢 **Company Profiles** — Job details, eligibility criteria, and application tracking  
- 📚 **Training Resources** — MOOC and internship links to boost employability  
- 🤝 **Efficient Matching** — Matches students with jobs using GPA and skill filters  
- 📧 **Password Reset** — Token-based email reset using PHPMailer with Google SMTP  
- 💾 **Centralized Database** — Single source of truth for all placement records  

---

## 🛠️ Technologies Used

### 🚀 Tech Stack

#### 🌐 Frontend
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)

#### 🛠 Backend
![PHP](https://img.shields.io/badge/PHP-7.4-8892BF?style=for-the-badge&logo=php&logoColor=white)

#### 🗄 Database
![MySQL](https://img.shields.io/badge/MySQL-phpMyAdmin-4479A1?style=for-the-badge&logo=mysql&logoColor=white)

#### 🌍 Server
![XAMPP](https://img.shields.io/badge/XAMPP-Apache%2FMariaDB-FB7A24?style=for-the-badge&logo=apache&logoColor=white)

#### ✉️ Email Service
![PHPMailer](https://img.shields.io/badge/Email-Google%20SMTP%20(PHPMailer)-D14836?style=for-the-badge&logo=gmail&logoColor=white)

#### 💻 Editor
![VS Code](https://img.shields.io/badge/Visual%20Studio%20Code-007ACC?style=for-the-badge&logo=visual-studio-code&logoColor=white)

---

## 🌐 Live Demo

🔗 **URL:** [https://pms.free.nf](https://pms.free.nf)  
🔒 **Read-Only Student Credentials:**  
- **Username:** `PMSstudent`  
- **Password:** `trailUser`  

> Note: Admin access available upon request for evaluation. Contact the repository owner.

---

## 📋 Prerequisites

- **XAMPP**: Apache + MySQL local server
- **PHP**: v7.4 or higher
- **Google Account**: For SMTP (with 2FA & App Password)
- **Free.nf or InfinityFree**: Free web hosting platform
- **Git**: For version control

---

## 🚀 Setup Instructions

### 🔧 Clone the Repository
```bash
md career-bridge
cd career-bridge
git clone [https://github.com/yourusername/career-bridge.git](https://github.com/Thousifibrahim/CBSCC.git)
```

🖥 Install XAMPP



🖥 Install XAMPP
•	Download & install XAMPP
•	Start Apache and MySQL

🗄 Configure the Database
1.	Open phpMyAdmin
2.	Create a database named career_bridge
3.	Import the SQL schema

Example Table Structure
sql
Always show details
Copy
CREATE TABLE studentlogin (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255) NOT NULL UNIQUE,
  token VARCHAR(64),
  token_expiry DATETIME
);


📌 Note: Full database schema is not included. Contact the owner for database.sql.

________________________________________
📧 Setup PHPMailer with Google SMTP
1.	Enable 2FA on your Google account
2.	Go to Security > App Passwords
3.	Generate a 16-character app password for "Mail"
In includes/config.inc.php, update:
php
Always show details
Copy
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_USERNAME', 'your-email@gmail.com');
define('SMTP_PASSWORD', 'your-app-password'); // 16-character code
define('SMTP_PORT', 587);
define('FROM_EMAIL', 'your-email@gmail.com');
define('FROM_NAME', 'Career Bridge');
define('BASE_URL', 'http://localhost/career-bridge/');
🔐 Credentials are not shared in the repo for security reasons.
________________________________________
💻 Run Locally
1.	Move the project to htdocs/ in your XAMPP folder
2.	Visit: http://localhost/career-bridge
________________________________________

🌍 Deployment (Free.nf)

1.	Sign up at https://free.nf
2.	Create a subdomain like pms.free.nf
3.	Upload project files via FileZilla (FTP) to public_html/
4.	Set up the database in cPanel and import schema
5.	Update:
CREATE TABLE studentlogin (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255) NOT NULL UNIQUE,
  token VARCHAR(64),
  token_expiry DATETIME
);


6.	Modify BASE_URL in includes/config.inc.php to match your domain
________________________________________
📄 Project Report
📄 Available at: View PDF Report 📄 [View PDF Report](images/pdf/report.pdf)

Includes full documentation: objectives, design, testing strategies.
________________________________________

🧪 Testing
•	✅ Unit Testing: DB queries and token validation
•	✅ Integration Testing: Front-end <-> back-end communication
•	✅ UAT: Verified with student/admin test accounts
•	✅ Security: Validated inputs and SMTP privacy
________________________________________

📝 Limitations
•	Requires technical setup (XAMPP, DB, SMTP)
•	Free hosting has resource limits
•	No real-time notification system
________________________________________

🙌 Acknowledgments
•	St Claret College – Academic support
•	Dr. Chinmaya Dash – Project Guide
•	Ms. Jayalakshmi R. – Head of Department
•	References – W3Schools, GeeksforGeeks, YouTube
________________________________________

📜 License
Licensed under the MIT License.
For academic and educational use only.
________________________________________

👨‍💻 Built By
SMD Thousif Ibrahim 
S R Sandeep

BCA VI Semester · 2023–24 🚀

