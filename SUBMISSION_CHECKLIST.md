# TFA2 Submission Checklist

## Required Functionality

- [ ] Home page loads
- [ ] About page loads
- [ ] Customer Accounts page loads
- [ ] User Accounts page loads
- [ ] Customer Accounts displays records from MySQL
- [ ] User Accounts displays records from MySQL

## Database

- [x] `customers` schema included in `database/pos_system_db.sql`
- [x] `users` schema included in `database/pos_system_db.sql`
- [x] At least 5 customer sample records included
- [x] At least 5 user sample records included
- [ ] SQL file imported successfully into local MySQL/phpMyAdmin

## MVC / Code

- [x] `CustomerModel` created
- [x] `UserModel` created
- [x] `Customers` controller uses `CustomerModel`
- [x] `Users` controller uses `UserModel`
- [x] Controllers use `findAll()`
- [x] Static customer/user arrays removed from controllers
- [x] No raw SQL placed in controllers or views
- [x] Views display controller-provided records

## Documentation / GitHub

- [x] README updated for TFA2
- [x] Database export included
- [x] `.env` remains ignored by Git
- [x] `.env.example` provided without private credentials
- [ ] Final files committed and pushed to GitHub

## Hosting

- [ ] Hosting provider confirmed
- [ ] Production database created
- [ ] SQL imported to production database
- [ ] Production environment/database settings configured
- [ ] Production base URL configured
- [ ] Hosted Home page tested
- [ ] Hosted About page tested
- [ ] Hosted Customer Accounts page tested
- [ ] Hosted User Accounts page tested
- [ ] Final hosted URL added to README

## Suggested Evidence Screenshots

The official TFA2 brief does not explicitly require screenshots, but these screenshots provide useful evidence for checking/demo purposes.

1. `01-home-local.png` — local Home page
2. `02-about-local.png` — local About page
3. `03-customers-local.png` — local Customer Accounts showing database records
4. `04-users-local.png` — local User Accounts showing database records
5. `05-database-tables.png` — phpMyAdmin showing `customers` and `users`
6. `06-customers-records.png` — phpMyAdmin Browse view showing 5+ customer records
7. `07-users-records.png` — phpMyAdmin Browse view showing 5+ user records
8. `08-customer-model.png` — `CustomerModel.php` visible in VS Code
9. `09-user-model.png` — `UserModel.php` visible in VS Code
10. `10-customers-controller.png` — controller showing `CustomerModel` and `findAll()`
11. `11-users-controller.png` — controller showing `UserModel` and `findAll()`
12. `12-github-repository.png` — GitHub repository showing source files, README, and database folder
13. `13-hosted-home.png` — live hosted Home page with URL visible
14. `14-hosted-customers.png` — live hosted Customer Accounts page with URL visible
15. `15-hosted-users.png` — live hosted User Accounts page with URL visible

Do not include database passwords or other private credentials in screenshots.
