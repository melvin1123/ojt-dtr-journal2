# OJT DTR & Weekly Journal System

## Feature-Based Task Assignment & Training Plan

---

## 1. Document Purpose

This document outlines the **feature-based task division** for the OJT DTR & Weekly Journal System. The goal is to ensure that each developer experiences **end-to-end feature ownership**, covering both backend logic and UI development using **Laravel and FilamentPHP**.

The Project Manager (PM) is intentionally excluded from coding tasks due to prior industry experience and instead focuses on **planning, coordination, and quality assurance**.

---

## 2. Development Approach

### Feature-Based Ownership Model

Each developer is assigned **one major system feature** and is responsible for:

* Database design related to the feature
* Backend logic and validation
* Filament panel UI
* Basic automated testing

This approach mirrors real-world product teams and serves as **hands-on training for full-stack development**.

---

## 3. Team Structure

* **Project Manager (PM)** – Planning, coordination, review, and documentation
* **Developer 1** – Time-In / Time-Out (DTR Core)
* **Developer 2** – Weekly Journal Report System
* **Developer 3** – Admin Review & Certification
* **Developer 4** – Export & Reporting Module

---

## 4. Feature Assignments

---

### Developer 1 – Time-In / Time-Out (DTR Core)

**Feature Ownership:**
Daily Time Record (DTR) System

**Responsibilities:**

* Design the attendance (DTR) database table
* Implement time-in and time-out functionality
* Prevent multiple active sessions per user
* Calculate daily rendered hours
* Compute accumulated total internship hours
* Build Filament UI for intern DTR actions and attendance history
* Handle edge cases (missed time-outs, duplicate actions)
* Write basic PestPHP tests for attendance logic

**Training Focus:**

* Laravel models and migrations
* Business rule validation
* Filament actions and tables

---

### Developer 2 – Weekly Journal Report System

**Feature Ownership:**
Weekly Journal Submission & Management

**Responsibilities:**

* Design the weekly report database schema
* Build the structured weekly report form with required sections
* Enforce validation for required fields and links
* Implement report submission and editing rules
* Restrict editing after report certification
* Build Filament UI for report submission and report history
* Display report status (Pending / Viewed / Certified)
* Write PestPHP tests for report submission and validation

**Training Focus:**

* Complex form handling in Filament
* Validation and data integrity
* UX for long-form inputs

---

### Developer 3 – Admin Review & Certification

**Feature Ownership:**
Admin Review, Status Tracking, and Certification

**Responsibilities:**

* Build Filament admin resources for reports and attendance
* Implement report status transitions (Pending → Viewed → Certified)
* Add digital signature upload functionality
* Apply certification lock to finalized reports
* Create read-only views for certified reports
* Enforce role-based access control (Admin only actions)
* Write tests for permissions and certification rules

**Training Focus:**

* Role-based access control
* Admin workflows in Filament
* Secure file uploads

---

### Developer 4 – Export & Reporting Module

**Feature Ownership:**
Data Export and Reporting

**Responsibilities:**

* Implement export functionality for:

  * DTR logs
  * Weekly journal reports
  * Total rendered hours summary
* Add filtering by intern and date range
* Ensure only certified reports are exportable
* Validate exported data accuracy
* Handle empty or partial data scenarios
* Write tests for export logic and edge cases

**Training Focus:**

* Data aggregation and transformation
* File generation (PDF / Excel)
* Real-world reporting requirements

---

## 5. Project Manager Responsibilities (Non-Coding, Repository Management)

The Project Manager does not participate in feature coding but is responsible for **repository governance and integration**. This ensures code quality, consistency, and proper collaboration practices.

**Responsibilities:**

* Finalizing system requirements and scope
* Defining feature boundaries and acceptance criteria
* Assigning feature ownership
* Monitoring progress and resolving blockers
* Reviewing completed features through pull requests
* Managing the GitHub repository, including:

  * Branch management strategy
  * Reviewing pull requests (PRs)
  * Approving or requesting changes
  * Handling merge conflicts
  * Ensuring code follows agreed conventions
* Enforcing testing requirements before merge
* Ensuring consistency across all modules
* Preparing final documentation and project presentation

The PM acts as the **gatekeeper of the main branch**, ensuring that only reviewed, tested, and approved code is merged.

---

## 6. Feature Integration Overview

Although each feature is owned independently, they integrate as follows:

* Time-In / Time-Out provides total hours
* Weekly reports reference internship activity
* Admin certification validates records
* Export module compiles verified data

---

## 7. Benefits of This Structure

* Encourages full-stack learning
* Clear accountability per feature
* Prevents role overlap confusion
* Simulates real-world development teams
* Allows PM to focus on leadership and quality

---

## 8. Conclusion

This feature-based task division ensures that each intern developer gains meaningful hands-on experience while maintaining a structured, manageable project workflow. The approach balances **technical training** with **proper project management practices**.
