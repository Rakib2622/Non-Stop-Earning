@include('admin.partials.header')

<div class="container-fluid">
    <div class="row" style="height: 100vh; overflow: hidden;">
        <!-- Left Sidebar Start -->
        <div class="col-md-2 p-0">
            @include('admin.partials.leftsideber')
        </div>
        <!-- Left Sidebar End -->

        <!-- Main Content Start -->
        <div class="col-md-10" style="height: 100vh; overflow-y: auto;">
            <div class="container mt-4">
                <h2 class="text-center mb-4">Profile Details</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-9">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <strong>Name:</strong>
                                        <p>{{ $admin->name ?? 'N/A' }}</p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <strong>Email:</strong>
                                        <p>{{ $admin->email ?? 'N/A' }}</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content End -->
    </div>
</div>

<style>
    .card {
        background-color: #f8f9fa;
        border: none;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .card-body {
        padding: 2rem;
    }
    .card p {
        margin: 0;
        font-size: 1rem;
    }
    .card strong {
        display: block;
        margin-bottom: 0.5rem;
        font-size: 1.1rem;
    }
    .img-fluid {
        width: 100%;
        height: auto;
        border-radius: 50%;
        margin-bottom: 1rem;
    }
    .btn-info {
        background-color: #500c95;
        border-color: #007bff;
        font-size: 1rem;
        padding: 0.5rem 1rem;
        margin-top: 0.5rem;
    }
    .btn-info:hover {
        background-color: #835407;
        border-color: #0056b3;
    }
</style>

@include('admin.partials.footer')
