# Photo Album Web Application

## Description

A simple photo album web application built with PHP, HTML, CSS, and JavaScript.  
Users can upload images in real-time, and the album displays 6 images per page—3 on the left side and 3 on the right side.  
The layout automatically adjusts for horizontal and vertical images. Pagination allows navigation through multiple pages of images.


## Project Structure

/photo-album
├── images/ # Directory to store uploaded images
├── index.php # Main page displaying images and upload form
├── upload.php # PHP script to handle image uploads
├── style.css # CSS for styling and layout
├── script.js # JavaScript for real-time image upload via AJAX
└── README.md # Project documentation (this file)



## Installation and Running Locally

### Prerequisites

- PHP 7.4 or higher installed on your system
- A modern web browser 

### Steps to Run

1. Clone the repository or download and unzip the project files:
   git clone https://github.com/your-username/photo-album.git
   cd photo-album

2. Start Apache server using XAMPP Control Panel:
  Open XAMPP Control Panel.
  Click Start next to Apache to start the web server.
  Place your project folder in htdocs:
  Make sure your project folder (photo-album) is located inside:
  C:\xampp\htdocs\photo-album
2. Open a browser and visit:
   http://localhost/photo-album/index.php


###How to Upload Images in Real-Time:

1.Use the file input form at the top of the page.
2.Select an image file (supported formats: .jpg, .jpeg, .png, max size 5MB).
3.Click Upload.
4.The image will upload asynchronously (without page reload).
5.After successful upload, the new image will appear automatically in the album.


###Pagination:

1.The album shows 6 images per page.
2.Images are split into two columns: 3 on the left, 3 on the right.
3.Use Previous and Next buttons at the bottom to navigate through pages


Notes and Dependencies
1.No external libraries or frameworks required.
2.Images are stored locally in the images/ folder.
3.Make sure your PHP environment allows file uploads and has appropriate permissions.
4.The app validates image file type and size during upload.





