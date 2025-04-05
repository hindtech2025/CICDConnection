{{-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Bootstrap Page</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABQkB6gDMx9Sg1aF5XZpL1M8jrXlGh1t6E6e5f5F5hPxuXwX5yyE+f6" crossorigin="anonymous">
    
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- AOS (Animate On Scroll) Library -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        /* Custom Styles */
        .hero {
            background: url('https://via.placeholder.com/1200x600') no-repeat center center/cover;
            color: white;
            text-align: center;
            padding: 150px 0;
        }

        .feature-icon {
            font-size: 3rem;
            color: #007bff;
        }

        .footer {
            background-color: #343a40;
            color: white;
            padding: 30px 0;
        }

        .footer a {
            color: #ddd;
            text-decoration: none;
        }

        .footer a:hover {
            color: #fff;
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">BrandName</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1 class="display-4">Welcome to Our Modern Website</h1>
            <p class="lead">We create beautiful, responsive websites and web applications.</p>
            <a href="#services" class="btn btn-primary btn-lg">Explore Services</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5 bg-light" id="features">
        <div class="container">
            <h2 class="text-center mb-4">Our Features</h2>
            <div class="row">
                <div class="col-md-4" data-aos="fade-up">
                    <div class="text-center">
                        <i class="fa fa-cogs feature-icon"></i>
                        <h4>Customizable Designs</h4>
                        <p>Our designs are fully customizable and responsive across all devices.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-center">
                        <i class="fa fa-mobile-alt feature-icon"></i>
                        <h4>Mobile Friendly</h4>
                        <p>We build websites that are optimized for mobile and tablet devices.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-center">
                        <i class="fa fa-lock feature-icon"></i>
                        <h4>Secure & Safe</h4>
                        <p>We prioritize security, making sure your website is protected at all times.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-5" id="services">
        <div class="container">
            <h2 class="text-center mb-4">Our Services</h2>
            <div class="row">
                <div class="col-md-4" data-aos="zoom-in">
                    <div class="card">
                        <img src="https://via.placeholder.com/500x300" class="card-img-top" alt="Service 1">
                        <div class="card-body">
                            <h5 class="card-title">Web Design</h5>
                            <p class="card-text">We design beautiful and user-friendly websites that suit your brand.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card">
                        <img src="https://via.placeholder.com/500x300" class="card-img-top" alt="Service 2">
                        <div class="card-body">
                            <h5 class="card-title">Mobile App Development</h5>
                            <p class="card-text">We create seamless mobile applications for both Android and iOS.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="card">
                        <img src="https://via.placeholder.com/500x300" class="card-img-top" alt="Service 3">
                        <div class="card-body">
                            <h5 class="card-title">SEO Optimization</h5>
                            <p class="card-text">Boost your website’s visibility with our expert SEO services.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5 bg-light" id="testimonials">
        <div class="container">
            <h2 class="text-center mb-4">What Our Clients Say</h2>
            <div class="row">
                <div class="col-md-4" data-aos="fade-left">
                    <blockquote class="blockquote text-center">
                        <p class="mb-0">"This team is incredible! They delivered exactly what we needed."</p>
                        <footer class="blockquote-footer">John Doe, <cite title="Source Title">CEO, Company</cite></footer>
                    </blockquote>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <blockquote class="blockquote text-center">
                        <p class="mb-0">"Highly recommend their services. Our website is performing better than ever!"</p>
                        <footer class="blockquote-footer">Jane Smith, <cite title="Source Title">Marketing Manager, Company</cite></footer>
                    </blockquote>
                </div>
                <div class="col-md-4" data-aos="fade-right" data-aos-delay="400">
                    <blockquote class="blockquote text-center">
                        <p class="mb-0">"Professional, efficient, and a pleasure to work with. Would definitely hire again."</p>
                        <footer class="blockquote-footer">Sam Wilson, <cite title="Source Title">Founder, Company</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <p>&copy; 2025 BrandName. All rights reserved.</p>
            <div>
                <a href="#">Privacy Policy</a> | 
                <a href="#">Terms of Service</a> | 
                <a href="#">Contact</a>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybR0g1s7bghS3v5R4P6KqAlX8kY/8R8VbYjsmp6hK8I1Qvtnn4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0gYxOF8U6A4//W3pGmZ4h2jsMi4s5hYJzq6iDA71uRa5vUwpw" crossorigin="anonymous"></script>
    
    <!-- AOS Library for Animations -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CI/CD Pipeline</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

  <!-- Hero Section -->
  <section class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-20 px-6">
    <div class="max-w-6xl mx-auto text-center">
      <h1 class="text-4xl md:text-6xl font-bold mb-4">Streamline Your Workflow with CI/CD</h1>
      <p class="text-lg md:text-xl mb-8">Automate, build, test, and deploy with speed and precision</p>
      <a href="#pipeline" class="bg-white text-blue-600 font-semibold px-6 py-3 rounded-full hover:bg-gray-200 transition">Explore Pipeline</a>
    </div>
  </section>

  <!-- Pipeline Diagram -->
  <section id="pipeline" class="py-16 bg-white">
    <div class="max-w-5xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-10">CI/CD Pipeline Flow</h2>
      <div class="grid grid-cols-2 md:grid-cols-6 gap-6 items-center justify-center text-center text-sm font-semibold">
        <div class="bg-blue-100 p-4 rounded-lg shadow-md">Code</div>
        <div class="text-2xl">➡️</div>
        <div class="bg-green-100 p-4 rounded-lg shadow-md">Build</div>
        <div class="text-2xl">➡️</div>
        <div class="bg-yellow-100 p-4 rounded-lg shadow-md">Test</div>
        <div class="text-2xl">➡️</div>
        <div class="bg-purple-100 p-4 rounded-lg shadow-md">Deploy</div>
      </div>
    </div>
  </section>

  <!-- Benefits Section -->
  <section class="bg-gray-50 py-16">
    <div class="max-w-6xl mx-auto text-center px-6">
      <h2 class="text-3xl font-bold mb-12">Why Use CI/CD?</h2>
      <div class="grid md:grid-cols-3 gap-8 text-left">
        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition">
          <h3 class="text-xl font-semibold mb-3 text-blue-600">Faster Delivery</h3>
          <p>Ship features and fixes faster with automated pipelines and reliable workflows.</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition">
          <h3 class="text-xl font-semibold mb-3 text-green-600">Quality Assurance</h3>
          <p>Run tests on every commit and catch bugs early before they reach production.</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition">
          <h3 class="text-xl font-semibold mb-3 text-purple-600">Scalability</h3>
          <p>Easily scale your dev workflow across multiple teams and environments.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="bg-indigo-600 text-white py-16">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-4">Start Automating Today!</h2>
      <p class="mb-6 text-lg">Set up your CI/CD pipeline and supercharge your development lifecycle.</p>
      <a href="#" class="bg-white text-indigo-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-200 transition">Get Started</a>
    </div>
  </section>

  <footer class="text-center text-gray-600 py-6 text-sm">
    © 2025 CI/CD by Manish | Hindtech IT Solutions
  </footer>

</body>
</html>
