<html>

<head>

  <link rel="stylesheet" href="css/viewpagecard.css">
  <!--Bootstrap CDNs-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!--Bootstrap CDNs-->

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
        height: 30px;
        width: 142px;
        padding: 0;
        background-size: 30px 30px;
      }

      .scale {
        background-image: url("data:image/svg+xml,\<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 40'>\<text y='20' font-size='30' fill='lightgrey'>★</text>\</svg>");

      }

      .value {
        position: absolute;
        top: 0;
        background-image: url("data:image/svg+xml,\<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 40'>\<text y='20' font-size='30' fill='gold'>★</text>\</svg>");
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
        width: 38%;
        border-radius: 8px;
      }

      .bookInfo {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
      }

      h2 {
        font-size: 40px;
      }

      .author {
        color: #999;
        font-size: 20px;
        margin-top: -20px;
        margin-bottom: 16px;
      }

      section {
        position: relative;
        font-size: 12px;
        height: 400px;
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
        <slot name="button">Read Now</slot>
        <slot name="description">Book description</slot>
      </section>
    </div>
  </template>

  <!--Cards-->

  <div class="cardsSet col-10 offset-1">

    <book-card bookCoverURL="https://m.media-amazon.com/images/I/51NNbRqozDL.AC_UF1000,1000_QL80.jpg" rating="2.5">
      <span slot="title">Database Systems: The Complete Book</span>
      <span slot="author">Hector Garcia-Molina ,<br> Jeffrey D.Ullman & Jennifer Widom</span>
      <div slot="button" class="mb-4">
        <button class="btn btn-primary" onclick="GoToRead();">Read Now</button>
      </div>
      <div slot="description">
        <p>Database Systems: The Complete Book is ideal for Database Systems and Database Design and Application courses offered at the junior, senior and graduate levels in Computer Science departments. A basic understanding of algebraic expressions and laws, logic, basic data structure, OOP concepts, and programming environments is implied.</p>
        <p>Written by well-known computer scientists, this introduction to database systems offers a comprehensive approach, focusing on database design, database use, and implementation of database applications and database management systems.</p>
      </div>

    </book-card>

  </div>

  <!--Cards-->

  <script>
    function GoToRead(){
      window.location = "home.html";
    }
  </script>
  <script src="js/viewcard.js"></script>
</body>

</html>