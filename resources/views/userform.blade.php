
@extends('theme.app')

@section('content')



<section class="page-section masthead" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj nowy rekord</h2>
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
                <form method="post">
                {{ csrf_field() }}
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="title"  name="title" type="text" placeholder="wpisz tytuł" data-sb-validations="required" required />
                        <label for="title">tytuł</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">tytuł jest obowiązkowy.</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" name="description" id="description" type="text" placeholder="wpisz opis" required data-sb-validations="required" />
                        <label for="description">opis</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">obowiązkowe</div>

                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" data-sb-validations="required" id="created_at" name="created_at"
                               placeholder="wpisz date" required type="text"/>
                        <label for="created_at">Data</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">obowiązkowe</div>
                    </div>

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