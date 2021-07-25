
<div class="container" id="contact">
  <div class="frame">
      <div class="nav">
          <h1 class="signin-active btn">Contact us :</h1>
      </div>
      <div>
          <form class="form-signin" action="/message" method="POST" name="form">
              @csrf
              
              <label for="email">Email</label>
              <input class="form-styling" type="text" name="email" placeholder="" />

              <label for="title">Title</label>
              <input class="form-styling" type="text" name="title" placeholder="" />

              <label for="message">message</label>
              <textarea class="form-styling" type="text" name="message" placeholder=""></textarea>

              <div class="btn-animate">
                  <button class="btn-signin" type="submit">Send Message</button>
              </div>
          </form>
      </div>
  </div>
</div>