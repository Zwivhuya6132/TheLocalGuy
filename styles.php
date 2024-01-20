<style>

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

.btn-buy:hover{
    background:#E2D1F9 ;
    color: #317773;
    border: 1px solid #317773;
}


/* This is the slide show section styles */

.cellular-grid{
    display: grid;
    height: fit-content;
    margin-top: 35px;
    grid-template-columns: repeat(4, 1fr);
    grid-template-rows: repeat(2, 1fr);
    column-gap: 15px;
    row-gap: 20px;
    padding: auto;

}

.shop-item{
    border: 2px solid #317773 ;
    border-radius: 25px 25px 0 0;
    width: 80%;
    margin-left: 20px;
    display: grid;

}

.shop-item-tittle{
    font-weight: 700;
    margin-top: 0;
    font-size: 1.1rem;
}

.shop-item-price{
    font-size: 1.1rem;
}

.buttons-auto{
    display: flex;
    background-color: #317773;
    justify-content: center;

}

.shop-item-image{
    width: 100%;
    height: 250px;
    border-radius: 25px 25px 0 0;
    border-bottom: 2px solid #317773;
    margin-bottom: 0;
    padding: 0;
}

.shop-item-button{
    padding: 7px;
    border: 2px solid #E2D1F9;
    background-color: #317773;
    color: #E2D1F9;
    cursor: pointer;
    font-size: 1rem;
    font-weight: 700;
    border-radius: 10px;
    margin: 10px auto;
    transition: 0.2s;
}

.product-details{
    background-color: #E2D1F9;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    line-height: 2rem;
    margin-top: 0;
}

.product-container{
    display: flex;

}

.shop-item-button:hover{
    background-color: #E2D1F9;
    border: 2px solid #317773;
    color: #317773;
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

.names-con{
    margin-top: 45px;
}

.names-con,
.date-gen,
.contacts-con,
.password-con{
    display: flex;
    justify-content: space-around;
    margin-bottom: 20px;
}

.first-n,
.last-n,
.dob,
.gender-con,
.phone-n,
.email-add,
.password-cre{
    width: 45%;
}


.fname,
.lname,
.date,
.gender,
.adress,
.email,
.phone,
.password{
    border: 2px solid #317773;
    border-radius: 8px;
    padding: 5px;
}

.date{
    width: 94%;
}

.gender{
    width: 100%;
}

.home-adress{
    display: flex;
    justify-content: space-around;
    width: 98%;
    margin-bottom: 20px;
}

.adress-con{
    width: 94%;
}

.adress{
    display: block;
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

button:active{
    opacity: 0.5;
}

.account-body{
    flex: 5;
}

.my-account-pages{
    display: flex;
    /* grid-template-columns: 1.5fr 6fr; */
    gap: 55px;
    /* justify-content: space-between; */
    margin-top: 25px;
    padding: 15px;
}

.account-side-nav{
    border: 3px solid #E2D1F9;
    border-radius: 5px;
    overflow: hidden;
    padding: 0px 0px;
    flex: 1.5;
}


.account-side-nav-ul{
    list-style-type: none;
    line-height: 3;
    font-size: 12px;

}

.account-side-nav-ul a{
    color: #317773;
    font-weight: 900;

}

.account-side-nav-ul a li{
    font-size: 1.125em;


}

.account-side-nav-ul a :hover{
    background-color: #317774a0;
    color: white;
    border-left: 6px solid #317773;
}

.account-side-nav-ul .side-nav-anch li{
    padding: 0 19px;
}

.account-side-nav-ul .side-nav-anch .actives{
    background-color: #317774a0;
    color: white;
    border-left: 6px solid #317773;
}


.ss{
    width: 90%;
    margin: 10px auto;
    background-color: #317773;
    border: 2px solid #E2D1F9;
}

.my-account-h1{
    color: #317773;
    font-weight: 900;
    font-size: 2.5em;
    text-align: center;
    font-style: oblique;
}

.personal-info{
    border: 2px solid #317773;
    /* width: 100%; */
    border-radius: 5px;
    padding: 20px;

}

.personal-info p{
    font-size: 1.2em;
    line-height: 1.7;
    flex: 5;

}

.z{
    display: flex ;
    justify-content: space-between;
    width: 50%;
}

.edit:hover{
    cursor: pointer;
    color: #317773;
}







.personal-info {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.reg-form-con {
  display: flex;
  justify-content: center;
  width: 100%;
}

.reg-form {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 80%;
  max-width: 600px;
}

.reg-error {
  color: red;
  margin: 10px 0;
}

.names-con,
.date-gen,
.home-adress,
.contacts-con,
.password-con {
  display: flex;
  flex-direction: row;
  width: 100%;
  margin: 10px 0;
}

.first-n,
.last-n {
  flex: 1;
  margin-right: 10px;
}

.date-gen {
  margin-bottom: 20px;
}

.dob,
.gender-con {
  flex: 1;
  margin-right: 10px;
}

.adress-con {
  flex: 2;
  margin-right: 10px;
}

.phone-n,
.email-add {
  flex: 1;
  margin-right: 10px;
}

.password-cre,
.email-add {
  flex: 1;
  margin-right: 10px;
}

.submit-butt {
  display: flex;
  justify-content: center;
  margin: 20px 0;
}

.fname,
.lname,
.date,
.gender,
.adress,
.phone,
.email,
.password,
.cpassword {
  width: 100%;
  padding: 10px;
  margin: 5px 0;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 8px;
  background-color: #f8f8f8;
  font-size: 16px;
  font-family: Arial, sans-serif;
  color: #333;
}

.submit {
  background-color: #317773;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  font-size: 16px;
  font-family: Arial, sans-serif;
  transition: 0.5s;
}

.submit:hover{
    background-color: #E2D1F9;
    color: #317773;
    border: 2px Solid #317773;

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
  color: #E2D1F9;
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


.order-tittle {
    text-align: center;
    color: #317773;
    font-size: 2em;
    /* margin-top: 30px; */
}

.order-history {
    margin: 0 auto;
    /* background-color: #E2D1F9; */
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
    border-collapse: collapse;
    margin-top: 30px;
    width: 90%;
}

.order-history th {
    background-color: #317773;
    color: #fff;
    padding: 15px;
    text-align: left;
}

.order-history td {
    border: 1px solid #ccc;
    padding: 15px;
}

.date {
    font-weight: bold;
}

.order-number {
    color: #317773;
    font-weight: bold;
}

.total {
    font-weight: bold;
}


      
      h1 {
        text-align: center;
        margin: 30px 0;
        color: #317773;
      }
      
      .wishlist-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }
      
      .wishlist-item {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #317773;
      }
      
      .wishlist-item img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        margin-right: 20px;
      }
      
      .wishlist-item-details {
        flex: 1;
      }
      
      .wishlist-item-name {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
        color: #317773;
      }
      
      .wishlist-item-price {
        font-size: 16px;
        color: #317773;
      }
      
      .wishlist-item-remove,
      .wishlist-item-add-to-cart {
        display: inline-block;
        border: none;
        background-color: #317773;
        color: #ffffff;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        margin-right: 10px;
      }
      
      .wishlist-item-remove:hover,
      .wishlist-item-add-to-cart:hover {
        background-color: #1f4a58;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
      }
      
      .wishlist-item-remove {
        background-color: #E2D1F9;
        color: #317773;
        border: 2px solid #317773;
      }
      
      .wishlist-item-remove:hover {
        background-color: #317773;
        border: 2px solid #E2D1F9;
        color: #ffffff;
        box-shadow: none;
      }
      
      .wishlist-item-add-to-cart {
        background-color: #317773;
        /* color: #ffffff; */
      }
      
      .wishlist-item-add-to-cart:hover {
        background-color: #E2D1F9;
        border: 2px solid #317773;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        color: #317773;
      }





      .gift-card-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 50px;
        text-align: center;
        border: 2px solid #1f4a58;
        border-radius: 5px;
      }

      .gift-card-title {
        font-size: 36px;
        font-weight: bold;
        color: #317773;
        margin-bottom: 30px;
      }

      .gift-card-form {
        display: inline-block;
        text-align: left;
      }

      .gift-card-label {
        display: block;
        font-size: 18px;
        font-weight: bold;
        color: #317773;
        margin-bottom: 10px;
      }

      .gift-card-input {
        display: block;
        width: 100%;
        height: 60px;
        font-size: 24px;
        padding: 10px;
        border: 2px solid #E2D1F9;
        border-radius: 5px;
        margin-bottom: 20px;
        box-sizing: border-box;
      }

      .gift-card-submit {
        display: block;
        width: 100%;
        height: 50px;
        font-size: 20px;
        font-weight: bold;
        color: #fff;
        background-color: #317773;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }

      .gift-card-submit:hover {
        background-color: #E2D1F9;
        color: #317773;
      }






      .track-orders-container {
        max-width: 800px;
        margin: 30px auto;
        padding: 50px;
        border: 2px solid #317773;
        border-radius: 5px;
      }

      .track-orders-title {
        font-size: 36px;
        font-weight: bold;
        color: #317773;
        margin-bottom: 30px;
      }

      .track-orders-table {
        width: 100%;
        border-collapse: collapse;
      }

      .track-orders-table th,
      .track-orders-table td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #E2D1F9;
      }

      .track-orders-table th {
        font-size: 20px;
        font-weight: bold;
        color: #317773;
      }

      .track-orders-table td {
        font-size: 18px;
        color: #333;
      }

      .track-orders-table td.status {
        font-weight: bold;
        color: #e74c3c;
      }

      .track-orders-table td a {
        color: #317773;
        text-decoration: none;
        font-weight: bold;
      }

      .track-orders-table td a:hover {
        text-decoration: underline;
      }

</style>