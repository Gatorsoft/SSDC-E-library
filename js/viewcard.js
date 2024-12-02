class RatingStars extends HTMLElement {
    constructor() {
      super();
     
      let ratingIstance = document.getElementById('rating-stars').content.cloneNode(true);
      
      let rating = parseFloat(this.getAttribute('rating'));
      let valueStars = ratingIstance.getElementById('assessment');
      
      valueStars.style.width = `${((Math.floor(rating) * 30)  + (rating % 1 * 25 + 1/2))}px`;
      
      this.mistyRoot = this.attachShadow({mode: 'open'}).appendChild(ratingIstance); 
    }
  }
  
  customElements.define('rating-stars', RatingStars);
  
  class BookCard extends HTMLElement {
    constructor() {
      super();
         
      let bookCardInstance = document.getElementById('book-card').content.cloneNode(true);
      
      bookCardInstance.getElementById('bookCover').style.backgroundImage = `url(${this.getAttribute('bookCoverURL')})`;
      bookCardInstance.querySelector('rating-stars').setAttribute('rating', this.getAttribute('rating'));
      
      this.mistyRoot = this.attachShadow({mode: 'open'}).appendChild(bookCardInstance);
    }
  }
  
  customElements.define('book-card', BookCard);


  function hi(){
    alert("Hi");
  }