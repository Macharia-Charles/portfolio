# Modern Design Portfolio

A responsive portfolio website built with PHP, HTML, Tailwind CSS, and MongoDB.

## Features

- Responsive design that works on all device sizes
- Project showcase with filtering by category
- Contact form that saves messages to MongoDB
- Clean and modern UI using Tailwind CSS
- Dark mode support
- Easy to customize and extend

## Tech Stack

- **Frontend**: HTML, Tailwind CSS, JavaScript
- **Backend**: PHP
- **Database**: MongoDB
- **Icons**: Font Awesome
- **Fonts**: System fonts with Tailwind defaults

## Project Structure

```
portfolio/
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
├── config/
│   └── database.php
├── includes/
│   ├── header.php
│   ├── footer.php
│   └── functions.php
├── models/
│   ├── Project.php
│   └── Contact.php
├── pages/
│   ├── about.php
│   ├── contact.php
│   ├── projects.php
│   └── skills.php
├── vendor/
├── .htaccess
├── composer.json
├── index.php
└── README.md
```

## Setup Instructions

### Prerequisites

- PHP 7.4 or higher
- MongoDB server or MongoDB Atlas account
- Composer

### Installation

1. **Clone the repository**

```bash
git clone <repository-url>
cd portfolio
```

2. **Install dependencies**

```bash
composer require mongodb/mongodb
```

3. **Configure MongoDB connection**

Edit the `config/database.php` file to add your MongoDB connection string:

```php
$connectionString = "mongodb+srv://<username>:<password>@<cluster-url>/<database>?retryWrites=true&w=majority";
```

4. **Create MongoDB collections**

Create the following collections in your MongoDB database:
- projects
- contacts

5. **Add sample project data**

You can use the MongoDB Compass GUI or MongoDB shell to add sample projects. Here's an example project document:

```json
{
  "title": "E-commerce Website",
  "summary": "A fully responsive e-commerce platform built with modern technologies.",
  "description": "This project involved designing and developing a complete e-commerce solution with user authentication, product catalog, cart functionality, and secure checkout.",
  "image_url": "assets/images/projects/ecommerce.jpg",
  "category": "Web Development",
  "technologies": ["HTML", "CSS", "JavaScript", "PHP", "MongoDB"],
  "featured": true,
  "project_url": "https://example.com",
  "client": "ABC Company",
  "duration": "3 months",
  "role": "Full Stack Developer",
  "responsibilities": [
    "Frontend development",
    "Backend API implementation",
    "Database design",
    "User experience optimization"
  ],
  "date": new Date("2023-05-15")
}
```

6. **Run the application**

```bash
php -S localhost:8000
```

Visit `http://localhost:8000` in your browser.

## Customization

### Personal Information

Update your personal information in the following files:
- `index.php`
- `pages/about.php`
- `pages/contact.php`
- All footer sections

### Styling

The project uses Tailwind CSS. For development, it uses the CDN version. For production, you should:

1. Install Tailwind CSS via npm
2. Configure it with your custom settings
3. Generate the optimized CSS build

### Adding Pages

1. Create a new PHP file in the `pages` directory
2. Include the header and footer
3. Add the new page to the navigation menu in all files

## Production Deployment

Before deploying to production:

1. Replace the Tailwind CSS CDN with a compiled and minified version
2. Enable error reporting and logging
3. Secure your MongoDB connection string as an environment variable
4. Optimize images and assets
5. Consider implementing caching for better performance

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Acknowledgments

- [Tailwind CSS](https://tailwindcss.com/) for the utility-first CSS framework
- [Font Awesome](https://fontawesome.com/) for the icons
- [MongoDB](https://www.mongodb.com/) for the database