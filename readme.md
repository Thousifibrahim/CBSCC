
<div align="center">

![PHP](https://img.shields.io/badge/PHP-7.4-8892BF?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-phpMyAdmin-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![XAMPP](https://img.shields.io/badge/XAMPP-Apache-FB7A24?style=for-the-badge&logo=apache&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green.svg?style=for-the-badge)

## Career Bridge: Placement Management System `CB-SCC-PMS`

**Streamlining college placements for students, companies, and administrators.**

[🌐 Live Demo](https://pms.free.nf) • [📊 Project Report](images/pdf/report.pdf) 

</div>





---

## Project Overview

**Career Bridge** is a web-based solution developed as a VI Semester BCA Project at **St Claret College, Bangalore**. It replaces manual placement tracking with an automated, secure platform.



### **User Roles**
* **Students**: Manage profiles, apply for jobs, and access MOOC/Internship resources.
* **Administrators**: Manage records, recruitment schedules, and verify eligibility.
* **Companies**: Filter and identify candidates based on GPA and skill sets.

---

##  Key Features

*  **Secure Authentication**: Multi-role login for students and administrators.
*  **Placement Dashboard**: Real-time tracking of applications and interview status.
*  **Smart Password Reset**: Secure token-based reset via PHPMailer & Google SMTP.
*  **Eligibility Matching**: Automated filtering using GPA and technical skills.
*  **Resource Hub**: Integrated links to training materials and external internships.

---

## Tech Stack

| Component | Technology |
| :--- | :--- |
| **Frontend** | HTML5, CSS3, JavaScript |
| **Backend** | PHP 7.4 |
| **Database** | MySQL (MariaDB) |
| **Email** | PHPMailer with Google SMTP |
| **Server** | XAMPP (Local) / InfinityFree (Cloud) |

---

##  Setup Instructions

### **1. Local Environment**
1.  **Install XAMPP**: Ensure Apache and MySQL modules are running.
2.  **Clone the Project**:
    ```bash
    cd C:/xampp/htdocs
    git clone [https://github.com/Thousifibrahim/CBSCC.git](https://github.com/Thousifibrahim/CBSCC.git) career-bridge
    ```

### **2. Database Configuration**
1.  Open **phpMyAdmin** (`http://localhost/phpmyadmin`).
2.  Create a new database named `career_bridge`.
3.  Import the provided SQL schema file.
    * *Note: If schema is missing, use the core table structure:*
    ```sql
    CREATE TABLE studentlogin (
      id INT AUTO_INCREMENT PRIMARY KEY,
      email VARCHAR(255) NOT NULL UNIQUE,
      token VARCHAR(64),
      token_expiry DATETIME
    );
    ```

### **3. SMTP Email Configuration**
Update `includes/config.inc.php` with your Google App Password:
```php
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_USERNAME', 'your-email@gmail.com');
define('SMTP_PASSWORD', 'xxxx-xxxx-xxxx-xxxx'); // 16-character App Password
define('SMTP_PORT', 587);

```

---

##  Deployment (`Free.nf` / InfinityFree)

1. **Upload**: Move project files to the `public_html/` folder via FTP (FileZilla).
2. **Database**: Re-create the database in the hosting cPanel and update your credentials.
3. **URL Sync**: Ensure `BASE_URL` in your config file matches your live domain.

---

##  Testing & QA

* **Unit Testing**: Verified SQL query execution and token validation logic.
* **Integration**: Seamless data flow between PHP backend and MySQL tables.
* **Security**: Implementation of input sanitization and secure SMTP privacy.
* **UAT**: Beta-tested with sample student and admin accounts.

---

## 🙌 Acknowledgments

* **St Claret College**: For academic infrastructure and support.
* **Mentors**: Dr. Chinmaya Dash (Project Guide) & Ms. Jayalakshmi R. (HOD).
* **Resources**: Documentation supported by W3Schools and GeeksforGeeks.

---

##  Developed By

**SMD Thousif Ibrahim** & **S R Sandeep**
*BCA VI Semester | Batch 2023–24*

---

<div align="center">
Licensed under the MIT License. For academic and educational use only.
</div>

