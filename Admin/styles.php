<style>

/* Defining a Default styles for the whole HTML document */
*{
    padding: 0;
    margin: 0;
    font-family: 'Roboto', sans-serif;
    font-size:16px ;
    scroll-padding-top:2rem;
    scroll-behavior:smooth;
    text-decoration: none;
}


/* styling the header container */
.header{
    display: flex;
    color: #317773;
    background-color: #E2D1F9;
    justify-content: space-between;
    align-items: center;
    padding: 15px 20px;
    position: fixed;
    z-index: 50;
    left: 0;
    right: 0;
    top: 0;
}

body{
    overflow-x: hidden;
}


/* Styling the Company name */
.name{
    font-size: 1.5em;
}

/* styling the logo container */
.logo-container{
    display: flex;
    align-items: center;
}

/* Styling the logo image */
.logo{
    width: 50px;
    height: 50px;
    border-radius:50% ;
}

/* The middle section/Search-bar container */
.searchbar-container{
    /* background-color:aqua; */
    display: flex;
    position: relative;
    padding: 5px;
    width: 25%;
}

/* Giving styles to the search-bar */
.search-bar{
    border: 2px solid #317773;
    border-radius: 25px;
    background-color: #E2D1F9;
    padding: 10px 5px;
    width: 100%;
}

/* changing the search-bar paceholder color  and size*/
.search-bar::placeholder{
    color: #317773;
    font-weight: 500;
}

/* Styling and positioning the search icon */
.search{
    background-color: #317773;
    color: #E2D1F9;
    display: flex;
    position: absolute;
    justify-content: center;
    align-items: center;
    right: 6px;
    width: 42px;
    height: 42px;
    border-radius: 50%;
    font-weight: 500;
}

a{
    text-decoration: none;
    color: inherit;
}

footer{
    position: absolute;
    left: 0;
    right: 0;
}

.log{
    width: 45%;
    margin: 25px auto;
    border: 2px solid #317773;
    border-radius: 45px 45px 0 0;
    overflow: hidden;
}

.log-form-con{
    display: flex;
    align-items: center;
}

.log-img-con{
    width: 63%;
}

.log-form-img{
    height: 100%;
    width: 100%;
}

.log-tittle{
    background-color: #317773;
    display: flex;
    font-size: 2em;
    font-weight: 700;
    color: #E2D1F9;
    justify-content: center;
}

.log-in{
    width: 90%;
}

.uname,
.Password{
    border: 2px solid #317773;
    border-radius: 8px;
    margin-bottom: 20px;
    padding: 5px;
    width: 100%;
}

.submit-butt{
    display: flex;
    justify-content: center;
}

.submit{
    background-color: #317773;
    color: #E2D1F9;
    font-weight: 700;
    padding: 8px;
    border: none;
    border-radius: 10px;
    margin-bottom: 20px;
}


/*  */

.cart-img{
    width:70px;
    height: 70px;
    border-radius: 25px;
    object-fit: contain;
    padding: 10px;
}

.grid{
    display: flex;
    column-gap: 15px;
}


.cart-box{
    display: grid;
    grid-template-columns: 32% 50% 18%;
    align-items: center;
    gap:1rem;
    margin-top: 1rem;
}

.detail-box{
    display: grid;
    row-gap: 0.5rem;
}

.cart-product-tittle{
    font-size: 1rem;
    font-weight: 700;
    text-transform: uppercase;
}

.cart-price{
    font-weight: 500;
}

.cart-quantity{
    border: 2px solid #317773;
    outline-color: #E2D1F9;
    width: 3rem;
    border-radius: 5px;
    text-align: center;
    font-size: 1rem;
}

.cart-remove-con{
    font-size: 16px;
    color: #E2D1F9;
    background-color: #317773;
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    transition: all .5s;

}

.cart-remove-con:hover{
    color: #317773;
    background-color: #E2D1F9;
    border: 2px solid #317773;
}

.total{
    display: flex;
    justify-content: flex-end;
    margin-top: 1.5rem;
    border-top: 2px solid #317773;
    font-weight: 700;
    font-size: 1.2rem;
}

.total-title{
    font-size: 1rem;
    font-weight: 600;
}

.total-price{
    margin-left: 0.5rem;
}

.btn-buy{
    display: flex;
    margin: 1.5rem auto 0 auto;
    padding: 12px 20px;
    border: none;
    background: #317773;
    color: #E2D1F9;
    font-size: 1rem;
    font-weight: 500;
    cursor: pointer;
}


.account-nav{
    line-height: 3;
    list-style-type: none;
}

.account-nav a li{
    font-size: 1.2em;
    cursor: pointer;
    color: #317773;
    width: 100%;
}

.account-nav li:hover{
    background-color: #317773;
    padding: 0 15px;
    border-radius: 15px;
    color: #E2D1F9;
}

.account-nav a:hover{
    color: #E2D1F9;
}

hr {
    margin: 10px 0;
}

.log-out{
    margin-top: 50px;
}

.reg{
    width: 50%;
    margin: 25px auto;
    border: 2px solid #317773;
    border-radius: 45px 45px 0 0;
    overflow: hidden;
}

.reg-form-con{
    display: flex;
}

.reg-img-con{
    width: 63%;
}

.reg-form-img{
    height: 100%;
    width: 100%;
}

.reg-tittle{
    background-color: #317773;
    display: flex;
    font-size: 2em;
    font-weight: 700;
    color: #E2D1F9;
    justify-content: center;
}

/* Styling the menu section/ Right section */
.menu-section{
    display: flex;
    justify-content: space-between;
    width: 20%;
}

/* Styling the my account and cart button */
.menu-button, .my-account, .Cart-button{
    display: flex;
    position: relative;
    align-items: center;
    border-radius: 25px;
    cursor: pointer;
    color: #E2D1F9;
    overflow: hidden;
    padding:5px 15px;
    background: linear-gradient(to right, #5d9e9b, #317773);
}

/* styling how the offcanvas appear when the is on "on" class*/
.offcanvas-account.on,
.offcanvas-cart.on,
.offcanvas-Menu.on{
    transform: translateY(0);
}

/* creating an offcanvas  */
.offcanvas-account,
.offcanvas-Menu{
    position: fixed;
    background: #E2D1F9;
    width: 27%;
    bottom: 0;
    top: 0px;
    right: 0;
    z-index: 1000;
    transform: translateX(100%);
    transition: all .4s ease;
    padding: 20px 10.5px;
}

/* close the offcanvas by clicking the close button */
.close-menu,
.close-btn,
.close-cart{
    position: absolute;
    top: 10px;
    right: 20px;
    color: #E2D1F9;
    display: flex;
    justify-content: center;
    text-decoration: none;
    align-items: center;
    width: 25px;
    height: 25px;
    background-color: #317773;
    border-radius: 50%;
    padding: 5px;
    transition: all .5s;
}

/* stle the close buttons when hovering */
.close-menu:hover,
.close-btn:hover,
.close-cart:hover{
    border: 2px solid #317773;
    background-color: #E2D1F9;
    color: #317773; 
}

/* hiding the menu bare on full width */
.menu-button{
    display: none;
}

/* Preparing for animation on my account and cart button */
.my-account::before, .Cart-button::before{
    content: '';
    position: absolute;
    height: 50px;
    width: 10px;
    background-color: #f3f3f39f;
    box-shadow: 0 0 15px #fff;
    filter: blur(1px);
    opacity: 0.9;
    transition: 0.7s;
    transform: rotate(-20deg) translateX(-40px);
}

/* animating my account and cart button only on hovering */
.my-account:hover::before, .Cart-button:hover::before{
    transform: rotate(10deg) translate(130px);
}

/* creating a cart  */
.offcanvas-cart{
    position: fixed;
    background: #E2D1F9;
    width: 27%;
    min-width: 350px;
    bottom: 0;
    top: 0px;
    right: 0;
    z-index: 1000;
    transform: translateX(100%);
    transition: all .5s ease;
    padding: 20px 10.5px;
}


.body{
    margin: auto;
    margin-left: 360px;
    margin-top: 82px;
    padding: 20px 1px;
    width: 78%;
}

/* .body{
    background-color: aquamarine;
    margin: auto;
    margin-left: 320px;
    margin-top: 82px;
    padding: 20px 1px;
    width: 78%;
} */

a{
    color: #317773;
}

.side-nav{
    background-color: #E2D1F9;
    display: flex;
    align-items: center;
    padding-left: 20px;
    position: fixed;
    top: 82px;
    left: 0;
    bottom: 0;
    width: 20%;
}

.side-list{
    list-style-type: none;
    line-height: 3;
    font-weight: 700;
    /* background-color: red; */
}

.side-list-cont a{
    font-size: 1.2em;
    padding: 15px 35px;
    text-decoration: none;
    width: 100%;
    
}

.ss{
    font-size: 1.5em;
    margin-right: 10px;
}

.active{
    background-color: #317773;
    border-radius: 25px;
    color: #E2D1F9;
}

a:hover{
    background-color: #317773;
    color: #E2D1F9;
    border-radius: 25px;
}

#scam{
    opacity: 0;
}

td, th {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #317773;
  color: #E2D1F9;
}

.dash-users-con{
    background-color: #E2D1F9;
    width: 95%;
    margin-bottom: 25px;
    padding: 0 5px 25px 5px;
    border-radius: 10px;
    border: 2px solid #317773;
    position: relative;

}

.dash-users-table{
    width: 100%;
}

.user-list-tittle{
    background-color: #317773;
    margin: 0 auto 25px auto;
    width: 80%;
    top: -30px;
    left: 10%;
    right: 10%;
    border-radius: 0  0 15px 15px ;
    display: flex;
    justify-content: center;
    padding: 15px 0;
}

.user-list-tittle h1{
    font-size: 1.5em;
    font-weight: 900;
    color: #E2D1F9;
}

.cat-brands{
    display: grid;
    grid-template-columns: 40% 40%;
    grid-template-rows: 1fr 1fr;
    column-gap: 90px;
    row-gap: 40px;
}

.dash-cat-con{
    background-color: #E2D1F9;
    border: 2px solid #317773;
    border-radius: 10px;
    padding-bottom: 20px;

}

.cat-name{
    width: 550px;
}

.count-col{
    width: 250px;
}

.subscribeers-con{
    display: flex;
    margin-top: 25px;
}


/* Add Users Styles */

.add-user-form{
    background-color: #E2D1F9;
    width: 50%;
    margin: auto;
    padding: 0 35px 0 25px;
    border-radius: 5px;
}

.add-error{
    background-color: #317773;
    width: 50%;
    margin: auto;
    margin-bottom: 25px;
    /* padding: 15px; */
    border-radius: 15px;
    color: #E2D1F9;
    display: flex;
    justify-content: center;
    font-weight: 900;
    font-size: 22m;
}

.add-error p{
    margin: 15px;
}

.add-names{
    display: grid;
    /* background-color: #317773; */
    grid-template-columns: 1fr 1fr;
    column-gap: 35px;
    margin-bottom: 15px;

}

.add-addr{
    grid-template-columns: 1fr;

}

.add-names input,
.add-names select{
    display: block;
    width: 100%;
    border: 2px solid #317773;
    border-radius: 5px;
    padding: 5px;
}

.add-butt{
    display: flex;
    justify-content: center;
    padding-bottom: 15px ;
}

.Add-user{
    background-color: #317773;
    color: #E2D1F9;
    font-weight: 700;
    padding: 7px 10px;
    border: none;
    border-radius: 10px;
}

.Add-user:hover{
    background-color: #E2D1F9;
    color: #317773;
    border: 2px solid #317773;
}

.avail-product{
    width: 50px;
    height: 50px;
    border-radius: 5px;
}

.pro-col1{
    width: 10%;
}

.pro-col2{
    width: 15%;
}

.pro-col3{
    width: 35%;
}

.pro-col4{
    width: 20%;
}

.pro-col5{
    width: 18%;
}

.prod-table{
    width: 100%;
}

.del-pro-button{
    padding: 10px;
    border-radius: 10px;
    border: #317773 2px solid;
    background-color: #E2D1F9;
    font-weight: 700;
    color: #317773;
}

.del-pro-button:hover{
    border: #E2D1F9 2px solid;
    background-color: #317773;
    color: #E2D1F9;

}

.descr{
    border: #317773 2px solid;
    border-radius: 5px;
}


.edit-remove{
    margin-right: 30px;
}

footer {
  display: flex;
  justify-content: center;
  background-color: #317773;
  padding: 50px 0;
  color: #E2D1F9;
}

.footer {
  display: flex;
  justify-content: space-between;
  width: 90%;
  max-width: 1200px;
  margin: 0 auto;
  /* font-family: Arial, sans-serif; */
  color: #E2D1F9;
}

.footer h1 {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 15px;
}

.footer p {
  margin-bottom: 15px;
  font-size: 16px;
}

.footer-email {
  padding: 10px;
  border-radius: 4px;
  border: none;
  width: 200px;
}

.subscribe-button {
  background-color: #E2D1F9;
  color: #317773;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.subscribe-button:hover{
    background-color: #317773;
    border: 2px solid #E2D1F9;
    color: #E2D1F9;
}

.social-media {
  display: flex;
}

.social {
  font-size: 44px;
  margin-right: 10px;
}


</style>