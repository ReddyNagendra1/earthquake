# Earthquake Data Management System

## Introduction

The Earthquake Data Management System is a web-based application designed to manage and track earthquake events. The application allows users to create, read, update, and delete (CRUD) earthquake records, providing a comprehensive way to manage data related to seismic activities. Built using Laravel, this project ensures secure and efficient data handling while providing a user-friendly interface for data entry and management.

## Features and Database Schema

### Features
- **CRUD Operations**: Users can add, view, edit, and delete earthquake records. Each record contains information about the date, magnitude, location, latitude, and longitude of an earthquake.
- **User Authentication**: The system includes authentication to ensure that only authorized users can manage earthquake data.
- **Responsive Design**: The application is designed to be responsive, ensuring usability across various devices.

### Database Schema
The application uses a relational database to store earthquake data. The primary table, `earthquakes`, includes the following fields:

- `id`: Auto-incrementing primary key.
- `date`: The date the earthquake occurred, stored as a date.
- `magnitude`: The magnitude of the earthquake, stored as a decimal value.
- `location`: The location where the earthquake was recorded, stored as a string.
- `latitude`: The latitude coordinate of the earthquake's location, stored as a decimal.
- `longitude`: The longitude coordinate of the earthquake's location, stored as a decimal.

This schema is designed to efficiently store and retrieve earthquake data, making it easy for users to access and manage records.

## User Flow Demo

Here are a few screenshots demonstrating the user flow in the Earthquake Data Management System:

1. **Homepage:** Displaying the list of recorded earthquakes with options to add, edit, or delete records.
2. **Add Earthquake:** Form to input new earthquake data.
3. **Edit Earthquake:** Interface to update an existing earthquake record.
4. **Delete Confirmation:** Prompt asking for confirmation before deleting a record.
5. **User Authentication:** Login page ensuring that only authenticated users can access the management features.
6. **Success Messages:** Notification of successful operations such as addition, update, or deletion of records.


## Screenshots
![php1](https://github.com/user-attachments/assets/1d7cef2b-17e7-4843-b82f-7fb6c9a39f7c width=300*300)


## Incomplete Features

If there were any features or functionalities that were not completed:

While working on this project, I planned to implement an advanced search feature that would allow users to filter earthquake records by magnitude range, date range, and location proximity. Unfortunately, due to time constraints and the complexity of the implementation, this feature was not completed. My goal was to provide a more dynamic and user-friendly way of querying the earthquake database, which I hope to implement in future versions.

## Reflection on Laravel

Working with Laravel has been a rewarding experience, as it provides a powerful framework with robust features that streamline web development. The built-in authentication, easy-to-use and comprehensive documentation make Laravel an excellent choice for building web applications. I particularly appreciated Laravel's emphasis on simplicity and efficiency. However, I would have liked to explore more advanced topics,to supplement my learning and add more dynamic functionality to this project.
