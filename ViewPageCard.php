<html>

<head>

  <link rel="stylesheet" href="style/card.css">

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
        width: 30%;
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
        <slot name="description">Book description</slot>
        <div class="fading"></div>
      </section>
    </div>
  </template>

  <!--Cards-->
  
    <div class="cardsSet ">

      <book-card bookCoverURL="https://images.ctfassets.net/usf1vwtuqyxm/6S51pK7uwnyhkS9Io9DsAn/320c162c5150f853b8d8568c4715dcef/English_Harry_Potter_7_Epub_9781781100264.jpg?w=914&q=70&fm=jpg" rating="2.5">
        <span slot="title">Harry Potter And The Deathly Hallows</span>
        <span slot="author">J.K. Rowling</span>
        <div slot="description">
          <p>In my younger and more vulnerable years my father gave me some advice that I’ve been turning over in my mind
            ever since.</p>
          <p>‘Whenever you feel like criticizing any one,’ he told me,
            ‘just remember that all the people in this world haven’t had
            the advantages that you’ve had.</p>
        </div>
      </book-card>

    </div>

  <!--Cards-->

  <script src="card.js"></script>
</body>

</html>