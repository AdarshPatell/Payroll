<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing Toggle</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Toggle Style */
        .btn-toggle {
            position: relative;
            background-color: #f0f0f0;
            border-radius: 30px;
            transition: all 0.3s ease;
        }
        .btn-toggle.active {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
<div class="container py-5">
    <!-- Pricing Toggle Container -->
    <div class="row justify-content-center mb-5">
        <div class="col-md-6">
            <div class="d-flex justify-content-center">
                <div class="btn-group" role="group" aria-label="Pricing Toggle">
                    <button 
                        type="button" 
                        class="btn btn-toggle active" 
                        data-section="accounts"
                    >
                        Accounts Pricing
                    </button>
                    <button 
                        type="button" 
                        class="btn btn-toggle" 
                        data-section="payroll"
                    >
                        Payroll Pricing
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing Sections -->
    <div class="row">
        <!-- Accounts Pricing Section -->
        <div 
            id="accounts-section" 
            class="pricing-section col-12"
        >
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- Accounts Pricing Card 1 -->
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <h5 class="card-title text-primary">Basic Accounts Plan</h5>
                            <p class="text-muted mb-3">For Small Businesses</p>
                            <h2 class="mb-4">
                                <span class="text-primary">$99</span>
                                <small class="text-muted">/ mo</small>
                            </h2>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2">10 Users</li>
                                <li class="mb-2">Basic Accounting</li>
                                <li class="mb-2">Email Support</li>
                            </ul>
                            <button class="btn btn-primary w-100 rounded-pill">
                                Choose Plan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Payroll Pricing Section -->
        <div 
            id="payroll-section" 
            class="pricing-section col-12 d-none"
        >
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- Payroll Pricing Card 1 -->
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <h5 class="card-title text-primary">Payroll Basic</h5>
                            <p class="text-muted mb-3">For Small Teams</p>
                            <h2 class="mb-4">
                                <span class="text-primary">$149</span>
                                <small class="text-muted">/ mo</small>
                            </h2>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2">Up to 25 Employees</li>
                                <li class="mb-2">Basic Payroll Processing</li>
                                <li class="mb-2">Tax Filing</li>
                            </ul>
                            <button class="btn btn-primary w-100 rounded-pill">
                                Choose Plan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const toggleButtons = document.querySelectorAll('.btn-toggle');
    const pricingSections = document.querySelectorAll('.pricing-section');

    toggleButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            toggleButtons.forEach(btn => {
                btn.classList.remove('active');
            });

            // Add active class to clicked button
            button.classList.add('active');

            // Hide all sections
            pricingSections.forEach(section => {
                section.classList.add('d-none');
            });

            // Show selected section
            const sectionId = button.getAttribute('data-section');
            document.getElementById(`${sectionId}-section`).classList.remove('d-none');
        });
    });
});
</script>
</body>
</html>
