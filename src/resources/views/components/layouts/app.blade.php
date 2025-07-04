<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Company Landing Page</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@latest/dist/full.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-base-100 text-base-content">

  <!-- Navbar -->
  <div class="navbar bg-base-100 shadow-sm px-6">
    <div class="flex-1">
      <a class="btn btn-ghost text-xl">YourCompany</a>
    </div>
    <div class="flex-none hidden md:flex space-x-4">
      <a class="btn btn-ghost">Features</a>
      <a class="btn btn-ghost">Pricing</a>
      <a class="btn btn-ghost">Contact</a>
    </div>
    <div class="flex-none">
      <button class="btn btn-primary">Get Started</button>
    </div>
  </div>

  <!-- Hero -->
  <section class="hero min-h-screen bg-base-200">
    <div class="hero-content text-center">
      <div class="max-w-xl">
        <h1 class="text-5xl font-bold">Empower Your Business</h1>
        <p class="py-6 text-lg">We provide digital solutions to scale your business with modern technology, fast deployment, and seamless integration.</p>
        <button class="btn btn-primary">Start Free Trial</button>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="py-16 px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold">Our Features</h2>
      <p class="text-gray-500">Everything you need to grow your business</p>
    </div>
    <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
      <div class="card bg-base-100 shadow-md">
        <div class="card-body">
          <h3 class="card-title">💡 Smart Automation</h3>
          <p>Automate repetitive tasks and focus on what matters most.</p>
        </div>
      </div>
      <div class="card bg-base-100 shadow-md">
        <div class="card-body">
          <h3 class="card-title">📈 Real-Time Analytics</h3>
          <p>Track and measure your business growth with actionable insights.</p>
        </div>
      </div>
      <div class="card bg-base-100 shadow-md">
        <div class="card-body">
          <h3 class="card-title">🔒 Secure by Design</h3>
          <p>Top-tier security protocols to keep your data safe and compliant.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="bg-base-200 py-16 px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold">What Our Clients Say</h2>
    </div>
    <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
      <div class="card bg-base-100 shadow-md">
        <div class="card-body">
          <p>"Thanks to YourCompany, we scaled 3x faster in just 6 months."</p>
          <div class="text-sm text-gray-500 mt-2">— Sarah, CEO of StartupX</div>
        </div>
      </div>
      <div class="card bg-base-100 shadow-md">
        <div class="card-body">
          <p>"Their platform is intuitive and helped us reduce overhead significantly."</p>
          <div class="text-sm text-gray-500 mt-2">— John, CTO of GrowthCorp</div>
        </div>
      </div>
      <div class="card bg-base-100 shadow-md">
        <div class="card-body">
          <p>"A must-have tool for any modern business. Highly recommended."</p>
          <div class="text-sm text-gray-500 mt-2">— Lisa, Founder of Creativa</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="text-center py-20 px-6 bg-primary text-primary-content">
    <h2 class="text-4xl font-bold mb-4">Ready to level up your business?</h2>
    <p class="mb-6">Try it free for 14 days. No credit card required.</p>
    <button class="btn btn-lg btn-accent">Get Started Now</button>
  </section>

  <!-- Footer -->
  <footer class="footer p-10 bg-base-200 text-base-content">
    <aside>
      <p><strong>YourCompany</strong><br/>Empowering Digital Transformation.</p>
    </aside>
    <nav>
      <h6 class="footer-title">Company</h6> 
      <a class="link link-hover">About us</a>
      <a class="link link-hover">Contact</a>
      <a class="link link-hover">Jobs</a>
    </nav>
    <nav>
      <h6 class="footer-title">Legal</h6> 
      <a class="link link-hover">Terms of use</a>
      <a class="link link-hover">Privacy policy</a>
      <a class="link link-hover">Cookie policy</a>
    </nav>
  </footer>

</body>
</html>
