  <style>
      .formErr {
          color: red;
      }
  </style>

  <section id="contact-us" class="section-contact mb--section">
      <div class="container">
          <div class="contact-headings">
              <h2 class="heading-secondary align--text-c mb--s">
                  Have a project in mind?
              </h2>
              <p class="subheading">
                  Let’s discuss, send us a message. You’ll get a response within
                  30mins
              </p>
          </div>
          <form name="conForm" action="./pages/contact-form" method="POST" class="contact-form" onsubmit=" return validateForm()">
              <div class="form-box grid grid--2-cols">
                  <div class="text-box">

                      <label class="custom-field">
                          <input name="name" type="text" required />
                          <span class="placeholder">Name</span>
                          <span class="formErr" id="name"></span>
                      </label>
                      <label class="custom-field">
                          <input name="email" type="email" required />
                          <span class="placeholder">Email</span>
                          <span class="formErr" id="email"></span>
                      </label>
                      <label class="custom-field">
                          <input name="phone" type="number" required />
                          <span class="placeholder">Phone</span>
                          <span class="formErr" id="phone"></span>
                      </label>
                  </div>
                  <div class="text-area">
                      <label class="custom-field">
                          <textarea name="message" required></textarea>
                          <span class="placeholder">Message</span>
                          <span class="formErr" id="message"></span>
                      </label>
                  </div>
              </div>
              <button type="submit" class=" link btn btn-bold btn-primary btn-form-submit" name="submit">
                  Send Message
              </button>
          </form>
      </div>
  </section>


  <script>
      //   Clear errors
      function clearErrors() {
          element = document.getElementsByClassName('formErr');
          for (let item of element) {
              item.textContent = "";
          }
      }

      //set errors
      function setError(id, error) {

          element = document.getElementById(id);
          element.textContent = error;
          console.log(error);

      }

      //validate errors
      function validateForm() {

          var returnval = true;
          clearErrors();
          var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
          var name = document.forms['conForm']['name'].value;
          var email = document.forms['conForm']['email'].value;
          var phone = document.forms['conForm']['phone'].value;
          var message = document.forms['conForm']['message'].value;

          if (name.length < 5) {

              setError('name', '* Length of name is too short');
              returnval = false;
          }

          if (phone.length < 12) {

              setError('phone', '* Phone number should be at least 10 digits.');
              returnval = false;
          }
          if (phone.length > 12) {

              setError('phone', '* Phone number should be at least 10 digits.');
              returnval = false;
          }
          if (message.length < 2) {

              setError('message', '* Message should  be greater than 20 characters');
              returnval = false;
          }
          if (message.length > 255) {

              setError('message', '* Message should not be greater than 255 characters');
              returnval = false;
          }
          if (!email.match(validRegex)) {
              setError('email', '* Email must be of type email.');
              returnval = false;
          }

          return returnval;
      }
  </script>
