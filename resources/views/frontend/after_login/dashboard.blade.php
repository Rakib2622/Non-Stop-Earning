@include('frontend.after_login.partials.header')

<div class="d-flex">
    @include('frontend.after_login.partials.leftsideber')
    <div class="flex-grow-1">
        @include('frontend.after_login.partials.hero')
        @include('frontend.after_login.partials.body')
    </div>
</div>

@include('frontend.after_login.partials.footer')
