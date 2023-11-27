// Script for navigation bar
const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if (bar) {
    bar.addEventListener('click', () => {
        nav.classList.add('active');
    })
}

if (close) {
    close.addEventListener('click', () => {
        nav.classList.remove('active');
    })
}


// script for sending the user information from contact page to gamil.... <====== tarek ====>
function emailSend(){
    let userName = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let phone = document.getElementById('phone').value;
    let message = document.getElementById('message').value;

    let messageBody = "Name:" + userName + 
    "<br/> Phone: " + phone +
    "<br/> Gamil: " + email +
    "<br/> Message: " + message;

    Email.send({
        Host : "smtp.elasticemail.com",
        Username : "tarekmonoar12425@gmail.com",
        Password : "15DF7675AEE45018ED9451953940D0E55FCD",
        To : 'tarekmonoarcse@gmail.com',
        From : "tarekmonoar12425@gmail.com",
        Subject : "Message => Evara shop",
        Body : messageBody
    }).then(
      message => {
        if(message= 'ok'){
            swal("Thank you!", "We got your message ", "success");
        }
        else{
            swal("error", "Your message was not sent", "warning");
        }
      }
    );
}

//  get email address from newsletter section for evara shop <==== tarek =====>
function newsletteremailSend(){
   
    let email = document.getElementById('newsletterMail').value;
    let messageBody = "Email:" + email

    Email.send({
        Host : "smtp.elasticemail.com",
        Username : "tarekmonoar12425@gmail.com",
        Password : "15DF7675AEE45018ED9451953940D0E55FCD",
        To : 'tarekmonoarcse@gmail.com',
        From : "tarekmonoar12425@gmail.com",
        Subject : "Message => Evara shop Newsletter",
        Body : messageBody
    }).then(
      message =>  {
        if(message= 'ok'){
            swal("Thank you!", " Email send succesfully.. ", "success");
        }
        else{
            swal("error", "Your email was not sent", "warning");
        }
      }
    );
}

// single product details 
var MainImg = document.getElementById("MainImg");
var smalling = document.getElementsByClassName("small-img");

smalling[0].onclick = function() {
    MainImg.src = smalling[0].src;
}
smalling[1].onclick = function() {
    MainImg.src = smalling[1].src;
}
smalling[2].onclick = function() {
    MainImg.src = smalling[2].src;
}
smalling[3].onclick = function() {
    MainImg.src = smalling[3].src;
}



// for the payment alert and rediretion of my cart page
function handleFormSubmission() {
    event.preventDefault();
    swal("Thank you!", "Payment done successfully!", "success").then(() => {
      window.location.href = './index.html';
    });
  }



