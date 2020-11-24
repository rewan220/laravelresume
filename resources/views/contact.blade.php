<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <span class="big-circle"></span>
      <img src="image/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
          I'm excited to drink a cup of coffee together
          </p>

          <div class="info">
            <div class="information">
              <img src="image/location.png" class="icon" alt="" />
              <p>Mozart str.26, 08525 plauen</p>
            </div>
            <div class="information">
              <img src="image/email.png" class="icon" alt="" />
              <p>youssefrewan15@gmail.com</p>
            </div>
            <div class="information">
              <img src="image/phone.png" class="icon" alt="" />
              <p>+49-1738561505</p>
            </div>
          </div>

          <div class="social-media">
            <p>Find me on the social Media :</p>
            <div class="social-icons">
              <a href="https://www.facebook.com/rewanqamishlo">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://www.instagram.com/rewan_samir_youssef">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://github.com/rewan220">
                <i class="fab fa-github"></i>
              </a>
            </div>
            
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="{{ route('contact.store') }}" method="POST">
             @csrf
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" required />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" required/>
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" required />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input" required></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
