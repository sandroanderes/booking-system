@extends('base.default')

@section('content')
<section class="container-fluid banner single px-0">
  <div class="thumbnail text-left">
    <div class="overlay"></div>
    <img src="https://images.unsplash.com/photo-1603161728562-6dc12a38ef87?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1489&q=80" alt="Place" class="img-responsive">
    <div class="caption">
      <div class="container">
        <div class="row">
          <div class="col-12 text-md-left text-center">
            <h1 class="text-center">Support & FAQ</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="container-fluid support-section">
  <div class="container">
    <div class="row container text-banner align-items-center">
      <div class="col-sm text-left">
        <h1 class="my-0">Häufig gestellte Fragen</h1>
      </div>
      <div class="col-sm text-left">
        <p class="my-0">Hast Du eine Frage? Wir sind hier, um sie zu beantworten! Wenn Deine Frage hier nicht beantwortet wird, zögere nicht, uns direkt zu kontaktieren.</p>
      </div>
    </div>

    <div class="accordion container">
      <div class="accordion-collapse" id="one">
        <a href="#one">
          Warum Buechs.ch?
        </a>
        <div class="accordion-collapse-content">
          <div class="inner-content p-3">
            <p>Hat mein Lieblingsrestaurant heute noch einen Tisch frei? Ist der Tennisplatz morgen um 11 Uhr schon belegt? Wann ist der nächste Friseurtermin frei? Mit Buechs.ch erstellst Du Deinen massgeschneiderten Reservationskalender im Handumdrehen und Kunden können direkt online einen Termin oder eine Reservation eintragen. Verschwende keine Zeit mehr mit der Beantwortung der immer gleichen Anfragen.</p>
          </div>
        </div>
      </div>

      <div class="accordion-collapse" id="two">
        <a href="#two">
          Wieviel kostet Buechs?
        </a>
        <div class="accordion-collapse-content">
          <div class="inner-content p-3">
            <p>Nach Ablauf des kostenlosen Probemonats kostet jeder aktivierte Kalender 15 Franken pro Monat.</p>
          </div>
        </div>
      </div>

      <div class="accordion-collapse" id="three">
        <a href="#three">
          Wie kann ich mit Buechs.ch.ch loslegen?
        </a>
        <div class="accordion-collapse-content">
          <div class="inner-content p-3">
            <p>Nach erfolgter Registrierung kannst Du direkt Deinen ersten Kalender erstellen. Danach kannst Du den Kalender auf Deiner eigenen Webseite einbinden und Deinen Kunden / Vereinsmitglieder zugänglich machen. Wenn Du bei der Erstellung des Kalenders Unterstützung brauchst, stehen wir Dir jederzeit zur Verfügung.</p>
          </div>
        </div>
      </div>

      <div class="accordion-collapse" id="four">
        <a href="#four">
          Mein Betrieb muss wegen Covid-19 kurzerhand schliessen. Muss ich den Kalender weiterhin bezahlen?
        </a>
        <div class="accordion-collapse-content">
          <div class="inner-content p-3">
            <p>Wird dein Kalender nicht gebraucht, musst du auch nicht dafür bezahlen. Stelle unter den Kalendereinstellungen sicher, dass du den entsprechenden Kalenderstatus auf “inaktiv” gesetzt hast, dann entfällt die monatliche Gebühr.</p>
          </div>
        </div>
      </div>

      <div class="accordion-collapse" id="five">
        <a href="#five">
          Mein Verein hat nur über die Sommermonate geöffnet, kann ich den Reservationskalender nur für die entsprechenden Monate nutzen?
        </a>
        <div class="accordion-collapse-content">
          <div class="inner-content p-3">
            <p>Sobald Dein Kalender in den Einstellungen auf “Aktiv” gesetzt ist, muss eine monatliche Gebühr von 15 Franken bezahlt werden. Wenn der Kalender auf “Inaktiv” gesetzt ist, muss Du nichts bezahlen. </p>
          </div>
        </div>
      </div>

      <div class="accordion-collapse" id="six">
        <a href="#six">
          Auf welchen Systemen läuft Buechs?
        </a>
        <div class="accordion-collapse-content">
          <div class="inner-content p-3">
            <p>Buechs.ch ist eine Webapplikation und wird nicht lokal installiert. Die folgenden Browserversionen sind getestet und werden unterstütz: </p>
            <ul>
             <li>Google Chrome - 87.0.4280.101 (7. Dezember 2020)</li> 
             <li>Apple Safari - 14.0.1 (12. November 2020)</li> 
             <li>Mozilla Firefox - 84.0.1 (22. Dezember 2020)</li> 
             <li>Microsoft Edge - 87.0.664.66 (17. Dezember 2020)</li> 
            </ul>
          </div>
        </div>
      </div>

      <div class="accordion-collapse" id="seven">
        <a href="#seven">
        Kann ich Buechs.ch direkt in meiner Webseite einbinden?
        </a>
        <div class="accordion-collapse-content">
          <div class="inner-content p-3">
            <p>Eine direkte Integration auf deiner Webseite ist nicht möglich. Aber du kannst den User von deiner Webseite auf Buechs.ch weiterleiten, sobald er oder sie eine Reservation vornehmen möchte. </p>
          </div>
        </div>
      </div>

      <div class="accordion-collapse" id="eight">
        <a href="#eight">
        Sind meine Daten sicher?
        </a>
        <div class="accordion-collapse-content">
          <div class="inner-content p-3">
            <p>Deine Daten sind bei Buechs.ch.ch sicher. Wir versprechen Dir, dass wir Deine persönlichen Daten nicht an Dritte weitergeben. Es werden den Usern nur diejenigen Daten deines Unternehmens / Vereins gezeigt, die für den Reservationsvorgang nötig sind.</p>
          </div>
        </div>
      </div>

      <div class="accordion-collapse" id="nine">
        <a href="#nine">
        Wo kann ich mich bei Fragen oder Unklarheiten melden?
        </a>
        <div class="accordion-collapse-content">
          <div class="inner-content p-3">
            <p>Hier: info@Buechs.ch [?] oder via dem Kontaktformular [verlinken]. Wir melden uns umgehend bei Dir - versprochen.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
@stop