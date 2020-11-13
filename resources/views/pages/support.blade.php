@extends('base.default')

@section('content')
<section class="container-fluid support-section">
  <div class="container">
    <div class="row container text-banner align-items-center">
      <div class="col-sm text-left">
        <h1 class="my-0">Häufig gestellte Fragen</h1>
      </div>
      <div class="col-sm text-left">
        <p class="my-0">Haben Sie eine Frage? Wir sind hier, um sie zu beantworten! Wenn Sie Ihre Frage hier nicht finden, schreiben Sie uns eine Zeile auf unserer Kontaktseite.</p>
      </div>
    </div>

    <div class="accordion container">
      <div class="accordion-collapse" id="one">
        <a href="#one">
          Wieviel kostet Buechs?
        </a>
        <div class="accordion-collapse-content">
          <div class="inner-content p-3">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nobis iusto deleniti corporis alias quo a quam similique cupiditate pariatur aliquid, omnis, officia dicta officiis impedit nisi dolores ut, distinctio placeat. Magni dolores perferendis ab laborum in neque, non exercitationem!</p>
          </div>
        </div>
      </div>
      <!-- Accordion collapse end -->
      <div class="accordion-collapse" id="two">
        <a href="#two">
          Auf welchen Systemen läuft Buechs?
        </a>
        <div class="accordion-collapse-content">
          <div class="inner-content p-3">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nobis iusto deleniti corporis alias quo a quam similique cupiditate pariatur aliquid, omnis, officia dicta officiis impedit nisi dolores ut, distinctio placeat. Magni dolores perferendis ab laborum in neque, non exercitationem!</p>
          </div>
        </div>
      </div>
      <!-- Accordion collapse end -->
      <div class="accordion-collapse" id="three">
        <a href="#three">
          Sind meine Daten sicher?
        </a>
        <div class="accordion-collapse-content">
          <div class="inner-content p-3">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nobis iusto deleniti corporis alias quo a quam similique cupiditate pariatur aliquid, omnis, officia dicta officiis impedit nisi dolores ut, distinctio placeat. Magni dolores perferendis ab laborum in neque, non exercitationem!</p>
          </div>
        </div>
      </div>
      <!-- Accordion collapse end -->
      <div class="accordion-collapse" id="four">
        <a href="#four">
          Wo kann ich mich bei Unklarheiten oder Fragen melden?
        </a>
        <div class="accordion-collapse-content">
          <div class="inner-content p-3">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nobis iusto deleniti corporis alias quo a quam similique cupiditate pariatur aliquid, omnis, officia dicta officiis impedit nisi dolores ut, distinctio placeat. Magni dolores perferendis ab laborum in neque, non exercitationem!</p>
          </div>
        </div>
      </div>
      <!-- Accordion collapse end -->
    </div>
  </div>
</section>
<script type="text/javascript" src="{{ asset('js/fixed-footer.js') }}"></script>
@stop