<?php
/*
Template Name: Contact Form
Template Post Type: page
*/
?>

<?php get_header(); ?>

<div class="container-fluid">
    <div class="row m-2">
        <div class="col-6">
            <div class="card mt-3">
                <h5 class="card-header"><?php the_title(); ?></h5>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="Last name">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address..">

                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Add your message here..."></textarea>
                        </div>
                        <div class="row  d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card mt-3 border-0">
                <div class="card-body">
                    We welcome all enquiries about our products, customised work and prototyping. If you have an inquiry about 3D printing a
                    model please send us the STL. file, tell us the preferred dimensions and the material type and colour preference. If you
                    have an inquiry about a custom wood or metal build please email us the plans, Height/width/depth measurements for all parts
                    and material preference. If you have a custom glassware inquiry please send us the image you would like put onto the
                    glass along with words if applicable to your design. If you have any other questions we are more than happy to answer them.
                    At Embrace Design we value and protect your intellectual property rights. Your designs/plans will stay yours.
                    Embrace design may ask to have a picture of the parts or product they made for you to put in their “Custom Orders photo gallery” on their website.
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
