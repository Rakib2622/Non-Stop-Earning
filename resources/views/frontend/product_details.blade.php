
    @include('frontend.header')

    <br><br><br>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <img src="assets/images/product-images/bags-p-img3-1.jpg" class="img-fluid" alt="Product Image" style="object-fit: cover; width: 70%; height: auto;">
            </div>
            <div class="col-md-6" style="margin-top: 160px">
                <h2 class="mb-3">Product Title</h2>
                <p class="text-muted">
                    <s>BDT 1000</s>
                    <strong class="text-danger">BDT 800</strong>
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                <div class="d-flex">
                    <a href="{{ route('cart') }}" class="btn btn-primary mr-2">Add to Cart</a>
                    <a href="{{ route('cheackout') }}" class="btn btn-success">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    @include('frontend.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: white;
            padding: 10px 20px;
            text-transform: uppercase;
            border-radius: 30px;
            font-size: 1rem;
            transition: background 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
            color: white;
            padding: 10px 20px;
            text-transform: uppercase;
            border-radius: 30px;
            font-size: 1rem;
            transition: background 0.3s ease;
        }
        .btn-success:hover {
            background-color: #218838;
            border-color: #218838;
        }
    </style>

