<html>

<head>

  <link rel="stylesheet" href="css/card.css">

</head>

<body>
  <template id="rating-stars">
    <style>
      :host {
        position: relative;
        display: block;
      }

      .rating {
        display: block;
        height: 20px;
        width: 100px;
        padding: 0;
        background-size: 20px 20px;
      }

      .scale {
        background-image: url("data:image/svg+xml,\<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 30'>\<text y='20' font-size='20' fill='lightgrey'>★</text>\</svg>");

      }

      .value {
        position: absolute;
        top: 0;
        background-image: url("data:image/svg+xml,\<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 30'>\<text y='20' font-size='20' fill='gold'>★</text>\</svg>");
      }
    </style>
    <div class="rating scale"></div>
    <div class="rating value" id="assessment"></div>
  </template>

  <template id="book-card">
    <style>
      :host {
        flex: 1 1 33%;
        display: flex;
        box-shadow: 0 0 16px 5px rgba(0, 0, 0, 0.1);
        font-family: verdana;
        margin: 10px;
        padding: 10px;
      }

      #bookCover {
        flex-shrink: 0;
        display: block;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: 50% 50%;
        height: 100%;
        margin-right: 20px;
        width: 45%;
        border-radius: 8px;
      }

      .bookInfo {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
      }

      h2 {
        font-size: 20px;
      }

      .author {
        color: #999;
        font-size: 14px;
        margin-top: -10px;
        margin-bottom: 16px;
      }

      section {
        position: relative;
        font-size: 12px;
        height: 180px;
        overflow: hidden;
      }

      .fading {
        position: absolute;
        bottom: 0;
        background: linear-gradient(transparent, white);
        height: 60px;
        width: 100%;
      }
    </style>
    <div id="bookCover" role="img"></div>
    <div class="bookInfo">
      <div>
        <h2>
          <slot name="title">Book Name</slot>
        </h2>
        <p class="author">
          <slot name="author">Author</slot>
        </p>
        <rating-stars></rating-stars>
      </div>
      <section>
        <slot name="description">Book description</slot>
        <div class="fading"></div>
      </section>
    </div>
  </template>

  <!--Cards-->
  <div class="cardbox row m-0">
    <div class="cardsSet col-lg-4 col-md-6 col-sm-12">

      <book-card bookCoverURL="https://m.media-amazon.com/images/I/51NNbRqozDL._AC_UF1000,1000_QL80_.jpg" rating="2.5" onclick="goToView();">
        <span slot="title">Database System: The Complete Book Second Edition</span>
        <span slot="author">Hector Garcia-Molina, Jeffery D. Ullman & Jennifer Widom</span>
        <div slot="description">
          <p>In my younger and more vulnerable years my father gave me some advice that I’ve been turning over in my mind
            ever since.</p>
        </div>
      </book-card>

    </div>

    <div class="cardsSet col-lg-4 col-md-6 col-sm-12">

      <book-card bookCoverURL="https://m.media-amazon.com/images/I/61Pcr1i5clL._AC_UF1000,1000_QL80_.jpg" rating="4.4">
        <span slot="title">C++ Programming For Linux System</span>
        <span slot="author">Desislav Andreev & Stanimir Lukanov</span>
        <div slot="description">
          <p>
            If you really want to hear about it, the first thing you'll probably want to know is
            where I was born, an what my lousy childhood was like, and how my parents were
            occupied and all before they had me.
          </p>
        </div>
      </book-card>

    </div>

    <div class="cardsSet col-lg-4 col-md-6 col-sm-12">

      <book-card bookCoverURL="resources/mfcs.jpg" rating="4.6">
        <span slot="title">Mathematics For Computer Science</span>
        <span slot="author">Eric Lehman, F. Thomson Leighton & Albert R. Meyer</span>
        <div slot="description">
          <p>one opened the door with a latch-key and went in, followed by a young fellow who awkwardly removed his</p>
        </div>
      </book-card>

    </div>

    <div class="cardsSet col-lg-4 col-md-6 col-sm-12">

      <book-card bookCoverURL="resources/dms.jpg" rating="4.0">
        <span slot="title">Database Management System</span>
        <span slot="author">Safa Hamdare, Bhavesh Pandya & Asim Kumar Sen</span>
        <div slot="description">
          <p>In my younger and more vulnerable years my father gave me some advice that I’ve been turning over in my mind
            ever since.</p>
          <p>‘Whenever you feel like criticizing any one,’ he told me,
            ‘just remember that all the people in this world haven’t had
            the advantages that you’ve had.</p>
        </div>
      </book-card>

    </div>

    <div class="cardsSet col-lg-4 col-md-6 col-sm-12">

      <book-card bookCoverURL="resources/mfcs2.jpg" rating="4.4">
        <span slot="title">Mathematics For Computer Scientists</span>
        <span slot="author">Gareth J. Janacek & Mark Lemmon Close</span>
        <div slot="description">
          <p>
            If you really want to hear about it, the first thing you'll probably want to know is
            where I was born, an what my lousy childhood was like, and how my parents were
            occupied and all before they had me, and all that David Copperfield kind of crap, but I
            don't feel like going into it, if you want to know the truth. In the first place, that stuff
            bores me, and in the second place, my parents would have about two hemorrhages apiece
            if I told anything pretty personal about them. They're quite touchy about anything like
            that, especially my father. They're nice and all--I'm not saying that--but they're also
            touchy as hell. Besides, I'm not going to tell you my whole goddam autobiography or
            anything. I'll just tell you about this madman stuff that happened to me around last
            Christmas just before I got pretty run-down and had to come out here and take it easy.
          </p>
        </div>
      </book-card>

    </div>

    <div class="cardsSet col-lg-4 col-md-6 col-sm-12">

      <book-card bookCoverURL="resources/rm.jpg" rating="4.6">
        <span slot="title">Research Methodology</span>
        <span slot="author">D. Napoleon & B. Balaji Sathya Narayanan</span>
        <div slot="description">
          <p>The one opened the door with a latch-key and went in, followed by a young fellow who awkwardly removed his cap. He wore rough clothes that smacked of the sea, and he was manifestly out of place in the spacious hall in which he found himself. He did not know what to do with his cap, and was stuffing it into his coat pocket when the other took it from him. The act was done quietly and naturally, and the awkward young fellow appreciated it. “He understands,” was his thought. “He’ll see me through all right.”</p>
        </div>
      </book-card>

    </div>

  </div>

  <!--Cards-->

  <script>
    function goToView(){
      window.location = "index.php";
    }
  </script>
  <script src="js/card.js"></script>
</body>

</html>