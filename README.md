<img src="https://raw.githubusercontent.com/PascalGoergen/CISServiceFrontend/master/img/notify.png"> 
==================
This document is supposed to illustrate the frontend of Notify


##Database Concept##

| users         | marks         | curriculum | has_modul |
| ------------- |:-------------:|------------|-----------|
| name          | subject       | subject    | cis_number|
| surname       | value         |creditpoints| modulnr   |
| password      | date          | modulnr    |
| email         | is_informed   |
| cis_number    | cis_number    |
| cis_password  | average       |


##Dashboards##
Core features of the logged-in user interface
###Statistics###
This page is supposed to show the previous marks in a table. On the same page graphs show the following:
- marks over time / average marks per test

###Settings###
The settings page should give the following options:
- Send average by mail (checkbox)
- Change CIS-Password (Text-Input)
- Change Notify Password (Text-Input)
- Change Name (forename & surname)
- Select Wahlpflichtmodule (Select-Input)
- New email (Text-Input)
- Delete Account (Button)
