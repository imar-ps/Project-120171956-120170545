<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
{{--            <h2>MAR Travel<em>.</em></h2>--}}
            <a class="navbar-brand" href="/"><img src="assets/images/mar.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('front.home')}}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('front.blog')}}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('front.post')}}">Post Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('front.about')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('front.contact')}}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
