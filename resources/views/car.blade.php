@include('header')

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h2>Hello, driver!</h2>
            <form action='/vehicle-information-by-registration' method='GET' class="form-inline" id="car_form">
                <div class='form-group row'>
                    <label>Enter A Vehicle's Registration Number</label>
                    <input type="text" name="registration" value="" class="form-control" id="registration" />
                    <button class="btn btn-default" id="btn_submit" type="submit"><span class="text">Search</span><i class="fa fa-spinner fa-spin fa-lg"></i></button>
                </div>
            </form>
        </div>
    </div>

    <div class="container">
        <div id="result"></div>

        <hr/>
        <!-- Defer JS script for faster loading -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="/js/car.js"></script>

@include('footer')
