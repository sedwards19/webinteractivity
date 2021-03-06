<?php /*Template Name: Invest Page Template*/?>

<?php get_header(); ?>

<div class="container">

<!--Hero Image Section-->
    <div class="row">
        <div class="twelve columns hero-overlay">
            <?php dynamic_sidebar('invest-hero-image'); ?>
        </div>
    </div>

<!--Vector Gen Approach Section-->
    <div class="row">
        <div class="twelve columns">
            <?php dynamic_sidebar('invest-vector-gen-approach'); ?>
        </div>
    </div>

<!--Investment Potential Section-->
    <div class="row investment-potential">
      <div class="twelve columns">
          <h3 class="invest-h3">INVESTMENT POTENTIAL</h3>
      </div>
    </div>

    <div class="row investment-potential">
        <div class="one-third column">
            <?php dynamic_sidebar('invest-left-icon'); ?>
        </div>

        <div class="one-third column">
            <?php dynamic_sidebar('invest-middle-icon'); ?>
        </div>

        <div class="one-third column">
            <?php dynamic_sidebar('invest-right-icon'); ?>
        </div>
    </div>

<!--Budget + Timeline Section-->
    <div class="row budget returns">
        <div class="six columns budget">
            <?php dynamic_sidebar('budget-timelime'); ?>
        </div>

        <div class="six columns returns">
            <?php dynamic_sidebar('returns-projections'); ?>
        </div>
    </div>

<!--Become an Investor Section-->
    <div class="row">
        <div class="twelve columns">
            <?php dynamic_sidebar('become-investor'); ?>
        </div>
    </div>

</div>

<?php get_footer(); ?>
