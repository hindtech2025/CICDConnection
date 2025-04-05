{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stunning Web Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        .hero {
            background: url('https://source.unsplash.com/1600x900/?technology') no-repeat center center/cover;
            height: 90vh;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
        }

        .hero::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero .container {
            position: relative;
            z-index: 1;
        }

        .hero h1 {
            font-size: 4rem;
            font-weight: bold;
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .services .card {
            transition: transform 0.3s, box-shadow 0.3s;
            border: none;
            border-radius: 10px;
        }

        .services .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .footer {
            background: #343a40;
            color: white;
            padding: 20px 0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">InnoWeb</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="container text-center">
            <h1>Welcome Ankit</h1>
            <p>Your Digital Future Starts Here</p>
            <a href="#" class="btn btn-primary btn-lg">Get Started</a>
        </div>
    </section>

    <section class="services py-5">
        <div class="container text-center">
            <h2 class="mb-4">Our Services</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card p-4 shadow-sm">
                        <h4>Web Development</h4>
                        <p>We create beautiful and high-performance websites.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4 shadow-sm">
                        <h4>SEO Optimization</h4>
                        <p>Enhance your online presence and search engine ranking.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4 shadow-sm">
                        <h4>Digital Marketing</h4>
                        <p>Boost your brand with our digital marketing strategies.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer text-center">
        <p>&copy; 2025 InnoWeb. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
