
@extends('theme.app')

@section('content')



<section class="page-section masthead" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj nowego klienta</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form action="{{route('customer.store')}}" method="post">
                {{ csrf_field() }}
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name"  name="name" type="text" placeholder="wpisz nazwe" data-sb-validations="required" required />
                        <label for="name">nazwa</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">nazwa jest obowiązkowy.</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" name="adres" id="description" type="text" placeholder="adres" required data-sb-validations="required" />
                        <label for="adres">adres</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">obowiązkowe</div>

                    </div>
                    <!-- Phone number input-->

                    <!-- has successfully submitted-->

                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection