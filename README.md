# Parking Fee Calculator Application

This application is a simple program for calculating parking fees based on vehicle type and parking duration. The application is built using PHP and HTML/CSS.

## Description

The application consists of two main pages:

1. `form.php`: This page displays a form for entering vehicle data, such as license plate number, vehicle type, entry time, and exit time.
2. `konversi.php`: This page displays the calculated parking fee based on the data entered on the `form.php` page.

The application uses the following parking fee calculation rules:

- Car:
  - First hour: Rp 5,000
  - Each additional hour: Rp 3,000

- Motorcycle:
  - First hour: Rp 3,000
  - Each additional hour: Rp 1,000

- Bicycle:
  - First hour: Rp 2,000
  - Each additional hour: Rp 500

## Usage

1. Open the `form.php` file in your web browser.
2. Enter the vehicle's license plate number, select the vehicle type, and enter the entry and exit times.
3. Click the "SUBMIT" button to view the calculated parking fee.
4. The `konversi.php` page will open and display the vehicle type, total parking time, and total fee to be paid.

## File Structure

This repository consists of three main files:

1. `form.php`: This file contains the HTML and form code for entering vehicle data.
2. `konversi.php`: This file contains the PHP code to calculate the parking fee and display the result.
3. `style.css`: This file contains the CSS code to style the web pages.

## Contribution
I welcome contributions in the form of suggestions and improvements. To contribute, please submit a pull request.

